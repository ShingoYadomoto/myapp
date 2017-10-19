<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class ThemesController extends AppController
{

    public function initialize()
    {
       parent::initialize();
    }

    public function index()
    {
       $themes_query = $this->Themes->find();
       $new_themes = $this->Themes->find()->order(['Themes.created' => 'DESC']); 

       $hot_themes = $themes_query->select(['body','total_votes' => $themes_query->func()->count('Votes.theme_id')])
                                 ->leftJoinwith('Votes')
                                 ->group('Themes.id')
                                 ->order(['total_votes' => 'DESC']);

       $this->set(compact('new_themes', 'hot_themes'));
    }

    public function add()
    {
        $theme = $this->Themes->newEntity();
        if ($this->request->is('post')) {
            $theme = $this->Themes->patchEntity($theme, $this->request->getData());
            if ($this->Themes->save($theme)) {
                $this->Flash->success(__('テーマを登録できました。'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('テーマを登録できませんでした。'));
        }
        $this->set(compact('theme'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['theme', 'delete']);
        $theme = $this->Themes->get($id);
        if ($this->Themes->delete($theme)) {
            $this->Flash->success(__('記事 id: {0} を削除しました。', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }

}
