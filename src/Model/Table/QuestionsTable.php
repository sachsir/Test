<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @property \App\Model\Table\TestTable&\Cake\ORM\Association\HasMany $Test
 *
 * @method \App\Model\Entity\Question newEmptyEntity()
 * @method \App\Model\Entity\Question newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class QuestionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('questions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Test', [
            'foreignKey' => 'question_id',
        ]);
        // $this->hasMany('QuestionContent', [
        //     'foreignKey' => 'content_id',
        // ]);
        $this->belongsTo('QuestionContent', [
                'foreignKey' => 'content_id',
                'joinType'=>'inner',
            ]);
        $this->belongsTo('Course', [
                'foreignKey' => 'course_id',
                'joinType'=>'inner',
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('course_id')
            ->requirePresence('course_id', 'create')
            ->notEmptyString('course_id');

            $validator
            ->integer('content_id')
            ->requirePresence('content_id', 'create')
            ->allowEmptyString('content_id');

        $validator
            ->scalar('question')
            ->maxLength('question', 255)
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        $validator
            ->scalar('option_a')
            ->maxLength('option_a', 255)
            ->requirePresence('option_a', 'create')
            ->notEmptyString('option_a');

        $validator
            ->scalar('option_b')
            ->maxLength('option_b', 255)
            ->requirePresence('option_b', 'create')
            ->notEmptyString('option_b');

        $validator
            ->scalar('option_c')
            ->maxLength('option_c', 255)
            ->requirePresence('option_c', 'create')
            ->notEmptyString('option_c');

        $validator
            ->scalar('option_d')
            ->maxLength('option_d', 255)
            ->requirePresence('option_d', 'create')
            ->notEmptyString('option_d');

        $validator
            ->scalar('answer')
            ->maxLength('answer', 1)
            ->requirePresence('answer', 'create')
            ->notEmptyString('answer');

        return $validator;
    }
}
