<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

           $this->loadComponent('RequestHandler');
           $this->loadComponent('Flash');
		    //$this->loadComponent('Auth');
		   $this->loadComponent('Auth', [
			'loginAction' => [
				'plugin' => false,
				'controller' => 'Users',
				'action' => 'login'
			],
			'loginRedirect' => [
				'plugin' => false,
				'controller' => 'Pages',
				'action' => 'home'
			],
			'logoutRedirect' => [
				'plugin' => false,
				'controller' => 'Users',
				'action' => 'logout'
			],
			'unauthorizedRedirect' => [
				'plugin' => false,
				'controller' => 'Users',
				'action' => 'login',
				'prefix' => false
			],
			'flash' => [
				'element' => 'error'
			]
		]);

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
		 $role_id = $this->Auth->user('role_id');
		 $user_id = $this->Auth->user('id');
		 $name = $this->Auth->user('name');
		 
		 if($user_id != ''){
		  $this->loadModel('Projects');
		 
		  $project_count  = $this->Projects->find('all')->where(['Projects.created_by'=>$user_id])->count();	
		  if($project_count >0){
		  $project        = $this->Projects->find('all')->where(['Projects.created_by'=>$user_id])->first();
		  }
		 }		 
		 $this->set(compact('role_id','user_id','name','project','project_count'));	
    }
	
    public function beforeFilter(\Cake\Event\EventInterface $event)
	{
		parent::beforeFilter($event);
		// for all controllers in our application, make index and view
		// actions public, skipping the authentication check.
		$this->Auth->allow(['index','login','termsandconditions','registration','registrationsuccess','statuscheck','ajaxstatuscheck','pressreleases','bdresponse','virtualcfo','aboutitcot','sendotp','ajaxotp',
		'eprcertification','eprcertificationsuccess','ajaxcalling','ajaxcallingmbl','ajaxverifyotp','forgetpassword','changepassword','emailverification','complianceservices','ajaxaddcomplaince','ajaxnowords','complianceservicessuccess','virtualcfossuccess',
	'ajaxpincode','ajaxoption','ajaxoptioncategory','ajaxproductcalling']);  
	}
}
