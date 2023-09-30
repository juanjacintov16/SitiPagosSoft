<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;


class User extends Entity
{
    protected function _setPassword(string $password) : ?string{
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }

    protected array $_accessible = [
        'name' => true,
        'last_name' => true,
        'email' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'profile_id' => true,
        'state_id' => true,
    ];

    protected array $_hidden = [
        'password',
    ];
}
