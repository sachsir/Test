<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestFixture
 */
class TestFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'test';
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
                'question_id' => 1,
                'user_id' => 1,
                'selected_option' => '',
                'date' => '2023-03-02 04:26:28',
                'result_id' => 1,
            ],
        ];
        parent::init();
    }
}
