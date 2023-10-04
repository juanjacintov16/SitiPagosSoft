<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{

    public function index(){
        $users = $this->Users->find()->contain(['UserStates', 'UserProfiles']);
        $this->set(compact('users'));
    }

    public function view($id = null){
        $user = $this->Users->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $userStates = $this->Users->UserStates->find('list', limit: 200)->all();
        $userProfiles = $this->Users->UserProfiles->find('list', limit: 200)->all();
        $this->set(compact('user', 'userStates', 'userProfiles'));
    }

    public function add(){
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $userStates = $this->Users->UserStates->find('list',conditions:['id'=>1])->all();
        $userProfiles = $this->Users->UserProfiles->find('list', limit: 200)->all();
        $this->set(compact('user', 'userStates', 'userProfiles'));
    }

    public function edit($id = null){
        $user = $this->Users->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $userStates = $this->Users->UserStates->find('list', limit: 200)->all();
        $userProfiles = $this->Users->UserProfiles->find('list', limit: 200)->all();
        $this->set(compact('user', 'userStates', 'userProfiles'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }

    public function login(){

        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            return $this->redirect(['controller' => 'Payments','action' => 'index']);
        }

        if ($this->request->is('post')) {
            $this->Flash->error('Usuario o contraseña invalidas.');
        }
    }

    public function logout(){

        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }

    }
}
