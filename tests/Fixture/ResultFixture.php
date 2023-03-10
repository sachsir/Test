<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultFixture
 */
class ResultFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'result';
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
                'user_id' => 1,
                'total_questions' => 1,
                'right_answers' => 1,
            ],
        ];
        parent::init();
    }
}
