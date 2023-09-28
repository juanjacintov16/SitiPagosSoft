<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserStatesTable Test Case
 */
class UserStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserStatesTable
     */
    protected $UserStates;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.UserStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserStates') ? [] : ['className' => UserStatesTable::class];
        $this->UserStates = $this->getTableLocator()->get('UserStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserStates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserStatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
