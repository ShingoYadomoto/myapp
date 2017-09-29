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
        $this->viewBuilder()->layout('myapp');
        $this->loadComponent('Flash');
    }

    public function index()
    {
       $this->set('themes', $this->Themes->find('all'));
    }

//add
    public function add()
    {
        $theme = $this->Themes->newEntity();
        if ($this->request->is('post')) {
            $theme = $this->Themes->patchEntity($theme, $this->request->getData());
            if ($this->Themes->save($theme)) {
                $this->Flash->success(__('テーマを登録できました。'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        $this->set(compact('theme'));
    }
//

//delete
    public function delete($id)
    {
        $this->request->allowMethod(['theme', 'delete']);
   $theme = $this->Themes->get($id);
        if ($this->Themes->delete($theme)) {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
//
}
