<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PartnersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('partner_title')
            ->requirePresence('partner_title')
            ->notEmpty('partner_activity')
            ->requirePresence('partner_activity')
            ->notEmpty('partner_link')
            ->requirePresence('partner_link');

        return $validator;
    }
}
