<?php
declare(strict_types=1);

namespace App\Controller;

class PaymentsController extends AppController
{

    public function index(){
        $payments = $this->Payments->find()->contain(['Accounts', 'PaymentStates', 'PaymentCharges']);
        $this->set(compact('payments'));
    }

    public function view($id = null){
        $payment = $this->Payments->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $accounts = $this->Payments->Accounts->find('list', limit: 200)->all();
        $paymentStates = $this->Payments->PaymentStates->find('list', limit: 200)->all();
        $paymentCharges = $this->Payments->PaymentCharges->find('list', limit: 200)->all();
        $this->set(compact('payment', 'accounts', 'paymentStates', 'paymentCharges'));
    }

    public function add(){
        $payment = $this->Payments->newEmptyEntity();
        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $accounts = $this->Payments->Accounts->find('list', limit: 200)->all();
        $paymentStates = $this->Payments->PaymentStates->find('list', limit: 200)->all();
        $paymentCharges = $this->Payments->PaymentCharges->find('list', limit: 200)->all();
        $this->set(compact('payment', 'accounts', 'paymentStates', 'paymentCharges'));
    }

    public function edit($id = null){
        $payment = $this->Payments->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $accounts = $this->Payments->Accounts->find('list', limit: 200)->all();
        $paymentStates = $this->Payments->PaymentStates->find('list', limit: 200)->all();
        $paymentCharges = $this->Payments->PaymentCharges->find('list', limit: 200)->all();
        $this->set(compact('payment', 'accounts', 'paymentStates', 'paymentCharges'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payments->get($id);
        if ($this->Payments->delete($payment)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
