<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config): void{
        
        parent::initialize($config);
        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('UserStates', [
            'className' => 'UserStates',
            'foreignKey' => 'state_id',
        ]);

        $this->belongsTo('UserProfiles', [
            'className' => 'UserProfiles',
            'foreignKey' => 'profile_id',
        ]);
    }


}
