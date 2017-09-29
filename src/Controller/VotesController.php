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
        $this->loadComponent('Flash');
        $this->viewBuilder()->layout('myapp');
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
            if ($this->Themes->save($vote)) {
                $this->Flash->success(__('投票完了！'));
                return $this->redirect(['action' => 'result']);
            }
            $this->Flash->error(__('何かミスってる'));
        }
        $this->set(compact('theme'));
        $this->set(compact('vote'));
        $this->set('themes' , $this->Themes->find('all'));
    }
//
    public function result()
    {
        
    }


//delete
    public function delete($id)
    {
        $this->request->allowMethod(['vote', 'delete']);
        $vote = $this->Votes->get($id);
        if ($this->Votes->delete($vote)) {
            $this->Flash->success(__('id: {0} $vote->body 消しちゃうよ？', h($id)));
            return $this->redirect(['action' => 'result']);
        }
    }
//
}
