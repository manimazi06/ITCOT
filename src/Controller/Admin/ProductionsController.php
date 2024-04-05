<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProductionsController extends AppController
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
		$Productions = $this->Productions->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$category= $this->Schemes->patchEntity($category, $this->request->getData());
			$Productions->name                = $this->request->getData('name');

			//$category->description         = $this->request->getData('description');
			if ($this->Productions->save($Productions)) {
				$this->Flash->success(__('The Productions details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Productions details could not be saved. Please, try again.'));
		}
			$this->set(compact('Productions'));
	}
	public function manufacturingdetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		
		$this->loadModel('Productions');
		$this->loadModel('Machineries');
		$this->loadModel('RawMaterials');
		
// $education_count=$this->EducationQualifications->find('all')->count();
// $training_count=$this->SpecialTrainings->find('all')->count();
// $work_count=$this->WorkExperiance->find('all')->count();

// $basic = $this->Projects->get($id, [
// 	'contain' => ['Sectortypes','Localitytype','Registrationtype','States','LoanTypes','LoanPurposes'],
// 	 ]);


// 	 $education = $this->EducationQualifications->get($edu, [
// 		'contain' => [],
// 		 ]);
		

		$pro_details  = $this->Productions->find('all')->where(['Productions.project_id'=>$id])->toArray();


		$mach_details  = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id])->toArray();


		$raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($raw_details);
			//  exit();
			 $this->set(compact('basic','education','pro_details','mach_details','raw_details'));
	}
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$Productions = $this->Productions->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$Productions = $this->Schemes->patchEntity($Productions, $this->request->getData());
			$Productions ->name                = $this->request->getData('name');
			//$category ->description         = $this->request->getData('description');

			if ($this->Productions->save($Productions)) {
				$this->Flash->success(__('The Productions details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Productions details could not be updated. Please, try again.'));
		}		
		$this->set(compact('Productions'));
	}
	
	
	
}