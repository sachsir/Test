<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property int $course_id
 * @property int $content_id
 * @property string $question
 * @property string $option_a
 * @property string $option_b
 * @property string $option_c
 * @property string $option_d
 * @property string $answer
 *
 * @property \App\Model\Entity\Test[] $test
 * @property \App\Model\Entity\QuestionContent[] $question_content
 */
class Question extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'course_id' => true,
        'content_id' => true,
        'question' => true,
        'option_a' => true,
        'option_b' => true,
        'option_c' => true,
        'option_d' => true,
        'answer' => true,
        'test' => true,
        'question_content' => true,
    ];
}
