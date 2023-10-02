<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountVerificationsFixture
 */
class AccountVerificationsFixture extends TestFixture
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
                'verification' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
