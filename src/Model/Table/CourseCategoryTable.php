<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CourseCategory Model
 *
 * @property \App\Model\Table\CourseTable&\Cake\ORM\Association\HasMany $Course
 *
 * @method \App\Model\Entity\CourseCategory newEmptyEntity()
 * @method \App\Model\Entity\CourseCategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CourseCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CourseCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\CourseCategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CourseCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CourseCategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CourseCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CourseCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CourseCategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CourseCategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CourseCategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CourseCategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CourseCategoryTable extends Table
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

        $this->setTable('course_category');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Course', [
            'foreignKey' => 'course_category_id',
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
            ->scalar('category_name')
            ->maxLength('category_name', 255)
            ->requirePresence('category_name', 'create')
            ->notEmptyString('category_name');

        return $validator;
    }
}
