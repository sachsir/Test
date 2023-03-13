<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoryTable Test Case
 */
class HistoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoryTable
     */
    protected $History;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.History',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('History') ? [] : ['className' => HistoryTable::class];
        $this->History = $this->getTableLocator()->get('History', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->History);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HistoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HistoryTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
