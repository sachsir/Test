<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CourseCategoryFixture
 */
class CourseCategoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'course_category';
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
                'category_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
