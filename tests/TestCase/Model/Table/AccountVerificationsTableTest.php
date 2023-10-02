<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountVerificationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountVerificationsTable Test Case
 */
class AccountVerificationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountVerificationsTable
     */
    protected $AccountVerifications;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountVerifications',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountVerifications') ? [] : ['className' => AccountVerificationsTable::class];
        $this->AccountVerifications = $this->getTableLocator()->get('AccountVerifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountVerifications);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountVerificationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
