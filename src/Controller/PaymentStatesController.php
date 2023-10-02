<?php
declare(strict_types=1);

namespace App\Controller;

class PaymentStatesController extends AppController
{

    public function index(){
        $paymentStates = $this->PaymentStates->find();
        $this->set(compact('paymentStates'));
    }

    public function view($id = null){
        $paymentState = $this->PaymentStates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentState = $this->PaymentStates->patchEntity($paymentState, $this->request->getData());
            if ($this->PaymentStates->save($paymentState)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('paymentState'));
    }

    public function add(){
        $paymentState = $this->PaymentStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentState = $this->PaymentStates->patchEntity($paymentState, $this->request->getData());
            if ($this->PaymentStates->save($paymentState)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('paymentState'));
    }

    public function edit($id = null){
        $paymentState = $this->PaymentStates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentState = $this->PaymentStates->patchEntity($paymentState, $this->request->getData());
            if ($this->PaymentStates->save($paymentState)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('paymentState'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $paymentState = $this->PaymentStates->get($id);
        if ($this->PaymentStates->delete($paymentState)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
