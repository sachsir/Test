<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourseCategoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourseCategoryTable Test Case
 */
class CourseCategoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CourseCategoryTable
     */
    protected $CourseCategory;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CourseCategory',
        'app.Course',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CourseCategory') ? [] : ['className' => CourseCategoryTable::class];
        $this->CourseCategory = $this->getTableLocator()->get('CourseCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CourseCategory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CourseCategoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
