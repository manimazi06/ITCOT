<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;  
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $role_id
 * @property int $is_active
 * @property \Cake\I18n\FrozenTime|null $created_date
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenTime $updated_date
 * @property int|null $updated_by
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\UserLog[] $user_logs
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'role_id' => true,
        'is_active' => true,
        'created_date' => true,
        'created_by' => true,
        'updated_date' => true,
        'updated_by' => true,
        'role' => true,
       // 'customers' => true,
       // 'user_logs' => true,
    ];
	
	
	 // protected function _setPassword(string $password) : ?string
     // {
        // if (strlen($password) > 0) {
             // return (new DefaultPasswordHasher())->hash($password);
         // }
     // }
    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    // protected $_hidden = [
        // 'password',
    // ];
}