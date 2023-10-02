<?php
declare(strict_types=1);

namespace App\Controller;

class AccountVerificationsController extends AppController
{

    public function index(){
        $accountVerifications = $this->AccountVerifications->find();
        $this->set(compact('accountVerifications'));
    }

    public function view($id = null){
        $accountVerification = $this->AccountVerifications->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountVerification = $this->AccountVerifications->patchEntity($accountVerification, $this->request->getData());
            if ($this->AccountVerifications->save($accountVerification)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountVerification'));
    }

    public function add(){
        $accountVerification = $this->AccountVerifications->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountVerification = $this->AccountVerifications->patchEntity($accountVerification, $this->request->getData());
            if ($this->AccountVerifications->save($accountVerification)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountVerification'));
    }

    public function edit($id = null){
        $accountVerification = $this->AccountVerifications->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountVerification = $this->AccountVerifications->patchEntity($accountVerification, $this->request->getData());
            if ($this->AccountVerifications->save($accountVerification)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('accountVerification'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $accountVerification = $this->AccountVerifications->get($id);
        if ($this->AccountVerifications->delete($accountVerification)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
