<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CitiesTable extends Table
{

     public function initialize(array $config): void
     {
          parent::initialize($config);

          $this->setTable('cities');
          $this->setDisplayField('name');
          $this->setPrimaryKey('id');

          $this->belongsTo('States', [
              'foreignKey' => 'state_id',
              'joinType' => 'INNER',
          ]);
     }

     public function validationDefault(Validator $validator): Validator
     {
          $validator
              ->notEmptyString('state_id');

          $validator
              ->scalar('name')
              ->maxLength('name', 255)
              ->requirePresence('name', 'create')
              ->notEmptyString('name');

          return $validator;
     }

     public function buildRules(RulesChecker $rules): RulesChecker
     {
          $rules->add($rules->existsIn('state_id', 'States'), ['errorField' => 'state_id']);

          return $rules;
     }
}