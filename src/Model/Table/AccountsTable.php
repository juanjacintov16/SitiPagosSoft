<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounts Model
 *
 * @property \App\Model\Table\AccountTypesTable&\Cake\ORM\Association\BelongsTo $AccountTypes
 * @property \App\Model\Table\AccountStatesTable&\Cake\ORM\Association\BelongsTo $AccountStates
 *
 * @method \App\Model\Entity\Account newEmptyEntity()
 * @method \App\Model\Entity\Account newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Account[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Account[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Account[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AccountsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('accounts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('AccountTypes', [
            'foreignKey' => 'type_id',
        ]);
        $this->belongsTo('AccountStates', [
            'foreignKey' => 'state_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('type_id')
            ->allowEmptyString('type_id');

        $validator
            ->scalar('beneficiary')
            ->maxLength('beneficiary', 50)
            ->allowEmptyString('beneficiary');

        $validator
            ->scalar('account_number')
            ->maxLength('account_number', 50)
            ->allowEmptyString('account_number');

        $validator
            ->scalar('type_register')
            ->maxLength('type_register', 50)
            ->allowEmptyString('type_register');

        $validator
            ->scalar('badge')
            ->maxLength('badge', 50)
            ->allowEmptyString('badge');

        $validator
            ->scalar('clabe')
            ->maxLength('clabe', 50)
            ->allowEmptyString('clabe');

        $validator
            ->integer('physical_person')
            ->allowEmptyString('physical_person');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('mothers_last_name')
            ->maxLength('mothers_last_name', 50)
            ->allowEmptyString('mothers_last_name');

        $validator
            ->scalar('business_name')
            ->maxLength('business_name', 50)
            ->allowEmptyString('business_name');

        $validator
            ->scalar('rfc_curp')
            ->maxLength('rfc_curp', 50)
            ->allowEmptyString('rfc_curp');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 50)
            ->allowEmptyString('alias');

        $validator
            ->scalar('email_notification')
            ->maxLength('email_notification', 50)
            ->allowEmptyString('email_notification');

        $validator
            ->scalar('relation')
            ->maxLength('relation', 50)
            ->allowEmptyString('relation');

        $validator
            ->scalar('type_relation')
            ->maxLength('type_relation', 50)
            ->allowEmptyString('type_relation');

        $validator
            ->numeric('limit_amount')
            ->allowEmptyString('limit_amount');

        $validator
            ->scalar('destination_account')
            ->maxLength('destination_account', 50)
            ->allowEmptyString('destination_account');

        $validator
            ->scalar('verified')
            ->allowEmptyString('verified');

        $validator
            ->integer('state_id')
            ->allowEmptyString('state_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('type_id', 'AccountTypes'), ['errorField' => 'type_id']);
        $rules->add($rules->existsIn('state_id', 'AccountStates'), ['errorField' => 'state_id']);

        return $rules;
    }
}
