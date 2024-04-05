<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Mailer\Mailer;

class OtpEmaillogsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('otp_emaillogs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        // $this->belongsTo('VirtualcfoStates', [
        //     'foreignKey' => 'virualcfo_state_id',
        //     'joinType' => 'LEFT',
        // ]);
       
    }   
}