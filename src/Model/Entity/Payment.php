<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $account_id
 * @property float|null $amount
 * @property float|null $tax_iva
 * @property string|null $description
 * @property string|null $reference
 * @property int|null $state_id
 * @property int|null $charges_id
 * @property int|null $created_by
 * @property \Cake\I18n\DateTime|null $created
 * @property int|null $approved_by
 * @property \Cake\I18n\DateTime|null $approved
 * @property \Cake\I18n\DateTime|null $applied
 *
 * @property \App\Model\Entity\Account $account
 * @property \App\Model\Entity\PaymentState $payment_state
 * @property \App\Model\Entity\PaymentCharge $payment_charge
 */
class Payment extends Entity
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
        'account_id' => true,
        'amount' => true,
        'tax_iva' => true,
        'description' => true,
        'reference' => true,
        'state_id' => true,
        'charges_id' => true,
        'created_by' => true,
        'created' => true,
        'approved_by' => true,
        'approved' => true,
        'applied' => true,
        'account' => true,
        'payment_state' => true,
        'payment_charge' => true,
    ];
}
