<?php
declare(strict_types=1);

namespace App\Controller;

class AccountsController extends AppController
{

    public function index(){
        $query = $this->Accounts->find()
            ->contain(['AccountTypes', 'AccountStates']);
        $accounts = $this->paginate($query);
        $this->set(compact('accounts'));
    }

    public function view($id = null){
        $account = $this->Accounts->get($id, contain: ['AccountTypes', 'AccountStates']);
        $this->set(compact('account'));
    }

    public function add(){
        $account = $this->Accounts->newEmptyEntity();
        if ($this->request->is('post')) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            if ($this->Accounts->save($account)) {
                $this->Flash->success('Registro guardado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $accountTypes = $this->Accounts->AccountTypes->find('list', limit: 200)->all();
        $accountStates = $this->Accounts->AccountStates->find('list', limit: 200)->all();
        $this->set(compact('account', 'accountTypes', 'accountStates'));
    }

    public function edit($id = null){
        $account = $this->Accounts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            if ($this->Accounts->save($account)) {
                $this->Flash->success('Registro actualizado correctamente.',["class"=>"alert alert-success"] );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Ocurrio un problema al guardar el regitro.',["class"=>"alert alert-danger"] );
        }
        $accountTypes = $this->Accounts->AccountTypes->find('list', limit: 200)->all();
        $accountStates = $this->Accounts->AccountStates->find('list', limit: 200)->all();
        $this->set(compact('account', 'accountTypes', 'accountStates'));
    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $account = $this->Accounts->get($id);
        if ($this->Accounts->delete($account)) {
            $this->Flash->success('Registro eliminado correctamente.',["class"=>"alert alert-success"] );
        } else {
            $this->Flash->error('No fue posible eliminar el registro.',["class"=>"alert alert-danger"] );
        }
        return $this->redirect(['action' => 'index']);
    }
}
