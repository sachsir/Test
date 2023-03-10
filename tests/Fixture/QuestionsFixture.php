<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
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
                'course_id' => 1,
                'content_id' => 1,
                'question' => 'Lorem ipsum dolor sit amet',
                'option_a' => 'Lorem ipsum dolor sit amet',
                'option_b' => 'Lorem ipsum dolor sit amet',
                'option_c' => 'Lorem ipsum dolor sit amet',
                'option_d' => 'Lorem ipsum dolor sit amet',
                'answer' => '',
            ],
        ];
        parent::init();
    }
}
