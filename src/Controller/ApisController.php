<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;

class ApisController extends AppController
{
    public function index()
    {
        $apis = $this->paginate($this->Apis);

        $http = new Client();
        $response = $http->get( 'http://weather.livedoor.com/forecast/webservice/json/v1?city=140010');
        $json = $response->json;
  
        $this->set('weather', $json);
        $this->set(compact('apis'));
        $this->set('_serialize', ['apis']);
    }

    public function view($id = null)
    {
        $api = $this->Apis->get($id, [
            'contain' => []
        ]);

        $this->set('api', $api);
        $this->set('_serialize', ['api']);
    }

    public function add()
    {
        $api = $this->Apis->newEntity();
        if ($this->request->is('post')) {
            $api = $this->Apis->patchEntity($api, $this->request->getData());
            if ($this->Apis->save($api)) {
                $this->Flash->success(__('The api has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The api could not be saved. Please, try again.'));
        }
        $this->set(compact('api'));
        $this->set('_serialize', ['api']);
    }

    public function edit($id = null)
    {
        $api = $this->Apis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $api = $this->Apis->patchEntity($api, $this->request->getData());
            if ($this->Apis->save($api)) {
                $this->Flash->success(__('The api has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The api could not be saved. Please, try again.'));
        }
        $this->set(compact('api'));
        $this->set('_serialize', ['api']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $api = $this->Apis->get($id);
        if ($this->Apis->delete($api)) {
            $this->Flash->success(__('The api has been deleted.'));
        } else {
            $this->Flash->error(__('The api could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
