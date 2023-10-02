<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
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
                'account_id' => 1,
                'amount' => 1,
                'tax_iva' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'reference' => 'Lorem ipsum dolor sit amet',
                'state_id' => 1,
                'charges_id' => 1,
                'created_by' => 1,
                'created' => '2023-10-02 14:09:32',
                'approved_by' => 1,
                'approved' => '2023-10-02 14:09:32',
                'applied' => '2023-10-02 14:09:32',
            ],
        ];
        parent::init();
    }
}
