<?php
declare(strict_types=1);

namespace App\Controller;

class UserStatesController extends AppController
{

    public function index(){
        $userStates = $this->UserStates->find();
        $this->set(compact('userStates'));
    }

    public function view($id = null){
        $userState = $this->UserStates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userState = $this->UserStates->patchEntity($userState, $this->request->getData());
            if ($this->UserStates->save($userState)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('userState'));
    }

    public function add(){
        $userState = $this->UserStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $userState = $this->UserStates->patchEntity($userState, $this->request->getData());
            if ($this->UserStates->save($userState)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('userState'));
    }

    public function edit($id = null){
        $userState = $this->UserStates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userState = $this->UserStates->patchEntity($userState, $this->request->getData());
            if ($this->UserStates->save($userState)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('userState'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $userState = $this->UserStates->get($id);
        if ($this->UserStates->delete($userState)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
