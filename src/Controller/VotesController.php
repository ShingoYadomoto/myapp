<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class VotesController extends AppController
{

    public function initialize()
    {
       parent::initialize();
       $this->Themes = TableRegistry::get('themes');
    }
    public function index()
    {
     }

    public function vote($id = null)
    {
        $theme = $this->Themes->get($id);

        $vote = $this->Votes->newEntity();
        if ($this->request->is('post')) {
            $vote = $this->Votes->patchEntity($vote, $this->request->getData());
            if ($this->Votes->save($vote)) {
                $this->Flash->success(__('投票完了！'));
                return $this->redirect(['action' => 'result', $id]);
            }
            $this->Flash->error(__('投票できませんでした。'));
        }
        $this->set(compact('theme', 'vote'));
    }

    public function result($theme_id = null)
    {
        $this_theme = $this->Themes->get($theme_id);
        $votes_query = $this->Votes->find();

        $votes_count = $votes_query->where(['theme_id' => $theme_id])->count();
        $votes = $votes_query->select(['opinion',])
                             ->select(['count' => $votes_query->func()->count('*')])
                             ->where(['theme_id' => $theme_id])
                             ->group('opinion');

        $this->set(compact('this_theme', 'votes', 'votes_count'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['vote', 'delete']);
        $vote = $this->Votes->get($id);
        if ($this->Votes->delete($vote)) {
            $this->Flash->success(__('id: {0} $vote->body を削除しますがよろしいですか？', h($id)));
            return $this->redirect(['action' => 'result']);
        }
    }

}
