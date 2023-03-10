<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Test Entity
 *
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property string $selected_option
 * @property \Cake\I18n\FrozenTime $date
 * @property int $result_id
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\User $user
 */
class Test extends Entity
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
        'question_id' => true,
        'user_id' => true,
        'selected_option' => true,
        'date' => true,
        'result_id' => true,
        'question' => true,
        'user' => true,
    ];
}
