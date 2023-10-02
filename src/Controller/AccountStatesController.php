<?php
declare(strict_types=1);

namespace App\Controller;

class AccountStatesController extends AppController
{

    public function index(){
        $accountStates = $this->AccountStates->find();
        $this->set(compact('accountStates'));
    }

    public function view($id = null){
        $accountState = $this->AccountStates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountState = $this->AccountStates->patchEntity($accountState, $this->request->getData());
            if ($this->AccountStates->save($accountState)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountState'));
    }

    public function add(){
        $accountState = $this->AccountStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountState = $this->AccountStates->patchEntity($accountState, $this->request->getData());
            if ($this->AccountStates->save($accountState)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountState'));
    }

    public function edit($id = null){
        $accountState = $this->AccountStates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountState = $this->AccountStates->patchEntity($accountState, $this->request->getData());
            if ($this->AccountStates->save($accountState)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountState'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $accountState = $this->AccountStates->get($id);
        if ($this->AccountStates->delete($accountState)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
