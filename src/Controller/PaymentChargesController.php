<?php
declare(strict_types=1);

namespace App\Controller;

class PaymentChargesController extends AppController
{

    public function index(){
        $paymentCharges = $this->PaymentCharges->find();
        $this->set(compact('paymentCharges'));
    }

    public function view($id = null){
        $paymentCharge = $this->PaymentCharges->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentCharge = $this->PaymentCharges->patchEntity($paymentCharge, $this->request->getData());
            if ($this->PaymentCharges->save($paymentCharge)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('paymentCharge'));
    }

    public function add(){
        $paymentCharge = $this->PaymentCharges->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentCharge = $this->PaymentCharges->patchEntity($paymentCharge, $this->request->getData());
            if ($this->PaymentCharges->save($paymentCharge)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('paymentCharge'));
    }

    public function edit($id = null){
        $paymentCharge = $this->PaymentCharges->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentCharge = $this->PaymentCharges->patchEntity($paymentCharge, $this->request->getData());
            if ($this->PaymentCharges->save($paymentCharge)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $this->set(compact('paymentCharge'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $paymentCharge = $this->PaymentCharges->get($id);
        if ($this->PaymentCharges->delete($paymentCharge)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
