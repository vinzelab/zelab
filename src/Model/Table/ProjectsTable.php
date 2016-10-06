<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProjectsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('project_title')
            ->requirePresence('project_title')
            ->notEmpty('project_sbtitle')
            ->requirePresence('project_sbtitle')
            ->notEmpty('project_desc')
            ->requirePresence('project_desc')
            ->notEmpty('project_link')
            ->requirePresence('project_link')
            ->notEmpty('category')
            ->requirePresence('category');

        return $validator;
    }
}
