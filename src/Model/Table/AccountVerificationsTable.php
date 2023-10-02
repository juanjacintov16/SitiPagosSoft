<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountVerifications Model
 *
 * @method \App\Model\Entity\AccountVerification newEmptyEntity()
 * @method \App\Model\Entity\AccountVerification newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AccountVerification[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountVerification get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccountVerification findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AccountVerification patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccountVerification[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountVerification|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountVerification saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountVerification[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountVerification[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountVerification[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountVerification[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AccountVerificationsTable extends Table
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

        $this->setTable('account_verifications');
        $this->setDisplayField('verification');
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
            ->scalar('verification')
            ->maxLength('verification', 255)
            ->notEmptyString('verification');

        return $validator;
    }
}
