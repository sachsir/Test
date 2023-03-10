<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionContent Model
 *
 * @method \App\Model\Entity\QuestionContent newEmptyEntity()
 * @method \App\Model\Entity\QuestionContent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuestionContent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\QuestionContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionContent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionContent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionContent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionContent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuestionContent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuestionContent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuestionContent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class QuestionContentTable extends Table
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

        $this->setTable('question_content');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // $this->belongsTo('Questions', [
        //     'foreignKey' => 'content_id',
        // ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'content_id',
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
            ->scalar('text')
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        return $validator;
    }
}
