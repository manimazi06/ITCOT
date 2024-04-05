<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class LoanTypesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');		
		$loan_types = $this->LoanTypes->find('all')->where(['LoanTypes.is_active'=>1])->toArray();		
		$this->set(compact('loan_types'));   
	}  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$loanTypes= $this->LoanTypes->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$loanTypes->name                = $this->request->getData('name');

			$loanTypes_check  = $this->LoanTypes->find('all')->where(['LoanTypes.name'=>$loanTypes->name])->count();


			if($loanTypes_check>0){
				$this->Flash->error(__('The LoanTypes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->LoanTypes->save($loanTypes);
			$this->Flash->success(__('The LoanTypes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->LoanTypes->save($loanTypes)) {
			// 	$this->Flash->success(__('The LoanTypes details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The LoanTypes details could not be saved. Please, try again.'));
		}
			$this->set(compact('loanPurpose'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$loanPurpose = $this->LoanTypes->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$loanTypes= $this->LoanTypes->patchEntity($loanTypes, $this->request->getData());
			$loanTypes->name                = $this->request->getData('name');

			$loanTypes_check  = $this->LoanTypes->find('all')->where(['LoanTypes.name'=>$loanTypes->name,'LoanTypes.id!='=>$id])->count();


			if($loanTypes_check>0){
				$this->Flash->error(__('The LoanTypes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->LoanTypes->save($loanTypes);
			$this->Flash->success(__('The LoanTypes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->LoanTypes->save($loanTypes)) {
			// 	$this->Flash->success(__('The LoanTypes details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The LoanTypes details could not be updated. Please, try again.'));
		}		
		$this->set(compact('loanPurpose'));
	}	

	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('LoanTypes');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->LoanTypes->save($project2)) {
            $this->Flash->success(__('The LoanTypes has been deleted.'));
        } else {
            $this->Flash->error(__('The LoanTypes could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}