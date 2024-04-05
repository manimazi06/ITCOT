<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class UtilitiesController extends AppController
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


		//  echo"<pre>";print_r($query);exit();
		$this->set(compact('users'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$Utilities = $this->Utilities->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$category= $this->Schemes->patchEntity($category, $this->request->getData());
			$Utilities->name                = $this->request->getData('name');

			//$category->description         = $this->request->getData('description');
			if ($this->Utilities->save($Utilities)) {
				$this->Flash->success(__('The Utilities details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Utilities details could not be saved. Please, try again.'));
		}
			$this->set(compact('Utilities'));
	}
	public function manpowerdetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		
		$this->loadModel('Utilities');
		$this->loadModel('Manpowers');
		// $this->loadModel('RawMaterials');
		
// $education_count=$this->EducationQualifications->find('all')->count();
// $training_count=$this->SpecialTrainings->find('all')->count();
// $work_count=$this->WorkExperiance->find('all')->count();

// $basic = $this->Projects->get($id, [
// 	'contain' => ['Sectortypes','Localitytype','Registrationtype','States','LoanTypes','LoanPurposes'],
// 	 ]);


// 	 $education = $this->EducationQualifications->get($edu, [
// 		'contain' => [],
// 		 ]);
		

		$util_details  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id])->toArray();


		$man_details  = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id])->toArray();


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($raw_details);
			//  exit();
			 $this->set(compact('basic','education','man_details','util_details','raw_details'));
	}
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$Utilities = $this->Utilities->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$Utilities = $this->Schemes->patchEntity($Utilities, $this->request->getData());
			$Utilities ->name                = $this->request->getData('name');
			//$category ->description         = $this->request->getData('description');

			if ($this->Utilities->save($Utilities)) {
				$this->Flash->success(__('The Utilities details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Utilities details could not be updated. Please, try again.'));
		}		
		$this->set(compact('Utilities'));
	}
	
	
	
}