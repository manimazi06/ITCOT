<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class EducationQualificationsController extends AppController
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
		$Educations = $this->Educations->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$category= $this->Schemes->patchEntity($category, $this->request->getData());
			$Educations->name                = $this->request->getData('name');

			//$category->description         = $this->request->getData('description');
			if ($this->Educations->save($Educations)) {
				$this->Flash->success(__('The Educations details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Educations details could not be saved. Please, try again.'));
		}
			$this->set(compact('Educations'));
	}
	public function educationdetailsview($id=null)
	
	{
		$this->viewBuilder()->setLayout('layout');
		
		$this->loadModel('WorkExperiance');
		$this->loadModel('SpecialTrainings');
		$this->loadModel('Projects');
		
$education_count=$this->EducationQualifications->find('all')->count();
$training_count=$this->SpecialTrainings->find('all')->count();
$work_count=$this->WorkExperiance->find('all')->count();

$basic = $this->Projects->get($id, [
	'contain' => ['Sectortypes','Localitytype','Registrationtype','States','LoanTypes','LoanPurposes'],
	 ]);
		
if($education_count>0){
		$education_details  = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id'=>$id])->toArray();
}

if($training_count >0){
		$training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id])->toArray();
}

if($work_count>0){
		$work_details  = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id])->toArray();
}

			 
			
			//  echo '<pre>';
			//  print_r($education_count);
			//  exit();
			 $this->set(compact('basic','education_details','training_details','work_details'));
	}
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$Educations = $this->Educations->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$Educations = $this->Schemes->patchEntity($Educations, $this->request->getData());
			$Educations ->name                = $this->request->getData('name');
			//$category ->description         = $this->request->getData('description');

			if ($this->Educations->save($Educations)) {
				$this->Flash->success(__('The Educations details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Educations details could not be updated. Please, try again.'));
		}		
		$this->set(compact('Educations'));
	}
	
	
	
}