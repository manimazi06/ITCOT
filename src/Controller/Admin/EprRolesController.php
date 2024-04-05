<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class EprRolesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
	
		 $eprRoles = $this->EprRoles->find('all')->where(['EprRoles.is_active'=>1])->toArray();	

		$this->set(compact('eprRoles'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$eprRoles= $this->EprRoles->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$Roles= $this->LoanTypes->patchEntity($Roles, $this->request->getData());
			$eprRoles->name                = $this->request->getData('name');

			//$Roles->description         = $this->request->getData('description');
			if ($this->EprRoles->save($eprRoles)) {
				$this->Flash->success(__('The EprRoles details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The EprRoles details could not be saved. Please, try again.'));
		}
			$this->set(compact('eprRoles'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$eprRoles= $this->EprRoles->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$eprRoles= $this->EprRoles->patchEntity($eprRoles, $this->request->getData());
			$eprRoles->name                = $this->request->getData('name');
			//$Roles->description         = $this->request->getData('description');

			if ($this->EprRoles->save($eprRoles)) {
				$this->Flash->success(__('The EprRoles details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The EprRoles details could not be updated. Please, try again.'));
		}		
		$this->set(compact('eprRoles'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('EprRoles');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->EprRoles->save($project2)) {
            $this->Flash->success(__('The EprRoles has been deleted.'));
        } else {
            $this->Flash->error(__('The EprRoles could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}