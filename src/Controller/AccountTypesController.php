<?php
declare(strict_types=1);

namespace App\Controller;

class AccountTypesController extends AppController
{

    public function index(){
        $query = $this->AccountTypes->find();
        $accountTypes = $this->paginate($query);
        $this->set(compact('accountTypes'));
    }

    public function view($id = null){
        $accountType = $this->AccountTypes->get($id, contain: []);
        $this->set(compact('accountType'));
    }

    public function add(){
        $accountType = $this->AccountTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountType = $this->AccountTypes->patchEntity($accountType, $this->request->getData());
            if ($this->AccountTypes->save($accountType)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountType'));
    }

    public function edit($id = null){
        $accountType = $this->AccountTypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountType = $this->AccountTypes->patchEntity($accountType, $this->request->getData());
            if ($this->AccountTypes->save($accountType)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountType'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $accountType = $this->AccountTypes->get($id);
        if ($this->AccountTypes->delete($accountType)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
