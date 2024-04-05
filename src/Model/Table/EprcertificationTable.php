<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EprcertificationTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('eprcertification');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'LEFT',
        ]);

        $this->belongsTo('WasteCategories', [
            'foreignKey' => 'waste_category_id',
            'joinType' => 'LEFT',
        ]);

        $this->belongsTo('WasteProductDetails', [
            'foreignKey' => 'waste_product_detail_id',
            'joinType' => 'LEFT',
        ]);


        
        $this->belongsTo('WasteTypes', [
            'foreignKey' => 'waste_type_id',
            'joinType' => 'LEFT',
        ]);
        
       
        $this->belongsTo('EprRoles', [
            'foreignKey' => 'epr_role_id',
            'joinType' => 'LEFT',
        ]);

        $this->belongsTo('EprPlastics', [
            'foreignKey' => 'epr_plastic_id',
            'joinType' => 'LEFT',
        ]);
       
    }   
}