<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionContentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionContentTable Test Case
 */
class QuestionContentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionContentTable
     */
    protected $QuestionContent;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.QuestionContent',
        'app.Questions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('QuestionContent') ? [] : ['className' => QuestionContentTable::class];
        $this->QuestionContent = $this->getTableLocator()->get('QuestionContent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->QuestionContent);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QuestionContentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
