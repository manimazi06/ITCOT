<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DepartmentSchemesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Departments');

		if ($this->request->is(['patch', 'post', 'put'])) { 
			$dept= $this->request->getData('department_id');
			$depart_schemes  = $this->DepartmentSchemes->find('all')->where(['DepartmentSchemes.department_id'=>$dept,'DepartmentSchemes.is_active'=>1])->contain(['Departments'])->toArray();
		 }
		 else{
			$depart_schemes  = $this->DepartmentSchemes->find('all')->where(['DepartmentSchemes.is_active'=>1])->contain(['Departments'])->toArray();
		 }
		
		$departments  = $this->Departments->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$this->set(compact('depart_schemes','departments'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Departments');
		$this->loadModel('ParentDepartments');
			$user_id = $this->Auth->user('id');
		$departscheme = $this->DepartmentSchemes->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$departscheme->department_id         = $this->request->getData('department_id');
			$departscheme->parent_department_id  = ($this->request->getData('parent_department_id'))?$this->request->getData('parent_department_id'):'';
			$departscheme->name                  = $this->request->getData('name');
			$departscheme->description           = $this->request->getData('description');
			$departscheme->site_url              = $this->request->getData('site_url');
			$departscheme->created_by            = $this->Auth->user('id');
			$departscheme->created_date          = date('Y-m-d H:i:s');
			
			if ($this->DepartmentSchemes->save($departscheme)) {
				$this->Flash->success(__('The Department scheme details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Department scheme  details could not be saved. Please, try again.'));
		}
		$departments = $this->Departments->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$parent_departments = $this->ParentDepartments->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('scheme','departments','parent_departments'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Departments');



		$departscheme = $this->DepartmentSchemes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$departscheme->department_id= $this->request->getData('department_id');
			
			$departscheme->name                = $this->request->getData('name');
			$departscheme->parent_department_id  = ($this->request->getData('parent_department_id'))?$this->request->getData('parent_department_id'):'';

			$departscheme->description         = $this->request->getData('description');
			$departscheme->site_url            = $this->request->getData('site_url');
			if ($this->DepartmentSchemes->save($departscheme)) {
				$this->Flash->success(__('The Departments details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Departments details could not be updated. Please, try again.'));
		}	
		$departments = $this->Departments->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$this->set(compact('departscheme','departments'));
	}
	
	
	
}