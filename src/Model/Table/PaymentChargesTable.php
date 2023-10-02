<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PaymentCharges Model
 *
 * @method \App\Model\Entity\PaymentCharge newEmptyEntity()
 * @method \App\Model\Entity\PaymentCharge newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentCharge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentCharge get($primaryKey, $options = [])
 * @method \App\Model\Entity\PaymentCharge findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PaymentCharge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentCharge[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentCharge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentCharge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentCharge[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentCharge[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentCharge[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentCharge[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PaymentChargesTable extends Table
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

        $this->setTable('payment_charges');
        $this->setDisplayField('state');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('state')
            ->maxLength('state', 20)
            ->allowEmptyString('state');

        return $validator;
    }
}
