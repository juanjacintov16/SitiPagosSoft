<?php
declare(strict_types=1);

namespace App\Controller;

class UserProfilesController extends AppController
{

    public function index(){
        $userProfiles = $this->UserProfiles->find();
        $this->set(compact('userProfiles'));
    }

    public function view($id = null){
        $userProfile = $this->UserProfiles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userProfile = $this->UserProfiles->patchEntity($userProfile, $this->request->getData());
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('userProfile'));
    }

    public function add(){
        $userProfile = $this->UserProfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $userProfile = $this->UserProfiles->patchEntity($userProfile, $this->request->getData());
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('userProfile'));
    }

    public function edit($id = null){
        $userProfile = $this->UserProfiles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userProfile = $this->UserProfiles->patchEntity($userProfile, $this->request->getData());
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('userProfile'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $userProfile = $this->UserProfiles->get($id);
        if ($this->UserProfiles->delete($userProfile)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
