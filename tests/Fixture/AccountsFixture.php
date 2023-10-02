<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountsFixture
 */
class AccountsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'type_id' => 1,
                'beneficiary' => 'Lorem ipsum dolor sit amet',
                'account_number' => 'Lorem ipsum dolor sit amet',
                'type_register' => 'Lorem ipsum dolor sit amet',
                'divisa' => 'Lorem ipsum dolor sit amet',
                'clabe' => 'Lorem ipsum dolor sit amet',
                'physical_person' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'mothers_last_name' => 'Lorem ipsum dolor sit amet',
                'business_name' => 'Lorem ipsum dolor sit amet',
                'rfc_curp' => 'Lorem ipsum dolor sit amet',
                'alias' => 'Lorem ipsum dolor sit amet',
                'email_notification' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'type_relation' => 'Lorem ipsum dolor sit amet',
                'limit_amount' => 1,
                'destination_account' => 'Lorem ipsum dolor sit amet',
                'verified_id' => 1,
                'state_id' => 1,
            ],
        ];
        parent::init();
    }
}
