<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountStatesTable Test Case
 */
class AccountStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountStatesTable
     */
    protected $AccountStates;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountStates') ? [] : ['className' => AccountStatesTable::class];
        $this->AccountStates = $this->getTableLocator()->get('AccountStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountStates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountStatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
