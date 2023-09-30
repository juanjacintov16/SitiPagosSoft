<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property int|null $type_id
 * @property string|null $beneficiary
 * @property string|null $account_number
 * @property string|null $type_register
 * @property string|null $badge
 * @property string|null $clabe
 * @property int|null $physical_person
 * @property string|null $name
 * @property string|null $last_name
 * @property string|null $mothers_last_name
 * @property string|null $business_name
 * @property string|null $rfc_curp
 * @property string|null $alias
 * @property string|null $email_notification
 * @property string|null $relation
 * @property string|null $type_relation
 * @property float|null $limit_amount
 * @property string|null $destination_account
 * @property int|null $verified
 * @property int|null $state_id
 *
 * @property \App\Model\Entity\AccountType $account_type
 * @property \App\Model\Entity\AccountState $account_state
 */
class Account extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'type_id' => true,
        'beneficiary' => true,
        'account_number' => true,
        'type_register' => true,
        'badge' => true,
        'clabe' => true,
        'physical_person' => true,
        'name' => true,
        'last_name' => true,
        'mothers_last_name' => true,
        'business_name' => true,
        'rfc_curp' => true,
        'alias' => true,
        'email_notification' => true,
        'relation' => true,
        'type_relation' => true,
        'limit_amount' => true,
        'destination_account' => true,
        'verified' => true,
        'state_id' => true,
        'account_type' => true,
        'account_state' => true,
    ];
}
