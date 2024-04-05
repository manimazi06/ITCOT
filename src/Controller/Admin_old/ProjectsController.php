<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProjectsController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		 $this->paginate = [
			 //'contain' => ['Roles'],
		 ];
		 $users = $this->paginate($this->Users);
		// $connection            = ConnectionManager::get('default');

		 // $query                   = "SELECT 
		                             // ro.name as rname,
		                             // user.username as username,
		                             // user.id as id,
		                             // user.name as name
		                             // FROM users as user 
		                             // LEFT JOIN  roles as  ro on ro.id = user.role_id
								    // ORDER BY user.id";
		 // $users              = $connection->execute($query)->fetchAll('assoc');


		//  echo"<pre>";print_r($query );exit();
		$this->set(compact('users'));   
	}	
  
	
	// public function add()
	// {
		// $this->viewBuilder()->setLayout('layout');
		// $scheme = $this->Projects->newEmptyEntity();
		// if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			// $scheme = $this->Projects->patchEntity($scheme, $this->request->getData());
			// $scheme->name                = $this->request->getData('name');
			// $scheme->description         = $this->request->getData('description');
			// if ($this->Projects->save($scheme)) {
				// $this->Flash->success(__('The Projects has been saved.'));
				// return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		// }
			// $this->set(compact('scheme', 'roles', 'circles'));
	// }
	
	public function basicdetails()
	{  
		$this->viewBuilder()->setLayout('layout');
		$project = $this->Projects->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$project = $this->Projects->patchEntity($scheme, $this->request->getData());
			$project->name                = $this->request->getData('name');
			$project->description         = $this->request->getData('description');
			if ($this->Projects->save($scheme)) {
				$this->Flash->success(__('The Projects has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		$prefix = array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms');
	    $this->loadModel('Categories');
	    $this->loadModel('Educations');
		$categories  = $this->Categories->find('list')->toArray();	
		$educations   = $this->Educations->find('list')->toArray();	
		
	  $this->set(compact('project', 'prefix','categories','educations'));
	}
	
	public function entitydetails()
	{  
		$this->viewBuilder()->setLayout('layout');
		$scheme = $this->Projects->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$scheme = $this->Projects->patchEntity($scheme, $this->request->getData());
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');
			if ($this->Projects->save($scheme)) {
				$this->Flash->success(__('The Projects has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		$this->loadModel('Sectortypes');
	    $this->loadModel('Localitytype');
	    $this->loadModel('Registrationtype');
	    $this->loadModel('LoanPurposes');
	    $this->loadModel('LoanTypes');
	    $this->loadModel('States');
		$sectortypes       = $this->Sectortypes->find('list')->toArray();	
		$localitytype      = $this->Localitytype->find('list')->toArray();	
		$registrationtype  = $this->Registrationtype->find('list')->toArray();	
		$loanpurposes      = $this->LoanPurposes->find('list')->toArray();	
		$loantypes         = $this->LoanTypes->find('list')->toArray();	
		$states         = $this->States->find('list')->toArray();	
		
		$this->set(compact('project', 'sectortypes', 'localitytype','registrationtype','loanpurposes','loantypes','states'));
	}
	
	public function educationdetails()
	{  
		$this->viewBuilder()->setLayout('layout');
		$project = $this->Projects->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$project = $this->Projects->patchEntity($scheme, $this->request->getData());
			$project->name                = $this->request->getData('name');
			$project->description         = $this->request->getData('description');
			if ($this->Projects->save($scheme)) {
				$this->Flash->success(__('The Projects has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		//$prefix = array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms');
	   // $this->loadModel('Categories');
		//$categories  = $this->Categories->find('list')->toArray();	
	    $this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->toArray();	
		
	  $this->set(compact('project', 'prefix','categories','educations'));
	}
	
	public function ajaxaddeducation($j = null){
		
		$this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->toArray();	
		
	    $this->set(compact('j','educations'));
		
	}
	
	public function ajaxaddtraining($j = null){
		
		// $this->loadModel('Educations');
		// $educations   = $this->Educations->find('list')->toArray();	
		
	    $this->set(compact('j','educations'));
		
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$scheme = $this->Schemes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$scheme = $this->Schemes->patchEntity($user, $this->request->getData());
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');

			if ($this->Schemes->save($scheme)) {
				$this->Flash->success(__('The Scheme has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Scheme could not be updated. Please, try again.'));
		}		
		$this->set(compact('scheme'));
	}
	
	
	
}