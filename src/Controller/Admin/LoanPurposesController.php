<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class LoanPurposesController extends AppController
{    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$loan_purposes = $this->LoanPurposes->find('all')->where(['LoanPurposes.is_active'=>1])->toArray();			
		$this->set(compact('users','loan_purposes'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$loanPurpose = $this->LoanPurposes->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$loanPurpose->name                = $this->request->getData('name');
			
			$loanPurpose_check  = $this->LoanPurposes->find('all')->where(['LoanPurposes.name'=>$loanPurpose->name])->count();


			if($loanPurpose_check>0){
				$this->Flash->error(__('The LoanPurposes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->LoanPurposes->save($loanPurpose);
			$this->Flash->success(__('The LoanPurposes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->LoanPurposes->save($loanPurpose)) {
			// 	$this->Flash->success(__('The LoanPurpose details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The LoanPurpose details could not be saved. Please, try again.'));
		}
			$this->set(compact('loanPurpose'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$loanPurpose = $this->LoanPurposes->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$loanPurpose = $this->LoanPurposes->patchEntity($loanPurpose, $this->request->getData());
			$loanPurpose ->name                = $this->request->getData('name');

			$loanPurpose_check  = $this->LoanPurposes->find('all')->where(['LoanPurposes.name'=>$loanPurpose->name,'LoanPurposes.id!='=>$id])->count();


			if($loanPurpose_check>0){
				$this->Flash->error(__('The LoanPurposes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->LoanPurposes->save($loanPurpose);
			$this->Flash->success(__('The LoanPurposes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->LoanPurposes->save($loanPurpose)) {
			// 	$this->Flash->success(__('The LoanPurpose details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The LoanPurpose details could not be updated. Please, try again.'));
		}		
		$this->set(compact('loanPurpose'));
	}
	
}