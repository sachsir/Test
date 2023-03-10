<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoryFixture
 */
class HistoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'history';
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
                'course_id' => 1,
                'result_id' => 1,
            ],
        ];
        parent::init();
    }
}
