<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class SectortypesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');		
		$sector_types = $this->Sectortypes->find('all')->where(['Sectortypes.is_active'=>1])->toArray();	
		$this->set(compact('sector_types'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$Sectortypes= $this->Sectortypes->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$Sectortypes->name                = $this->request->getData('name');

			$sectortypes_check  = $this->Sectortypes->find('all')->where(['Sectortypes.name'=>$Sectortypes->name])->count();


			if($sectortypes_check>0){
				$this->Flash->error(__('The Sectortypes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Sectortypes->save($Sectortypes);
			$this->Flash->success(__('The Sectortypes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Sectortypes->save($Sectortypes)) {
			// 	$this->Flash->success(__('The Sectortypes details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Sectortypes details could not be saved. Please, try again.'));
		}
			$this->set(compact('Sectortypes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$Sectortypes= $this->Sectortypes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$Sectortypes= $this->Sectortypes->patchEntity($Sectortypes, $this->request->getData());
			$Sectortypes->name                = $this->request->getData('name');

			$sectortypes_check  = $this->Sectortypes->find('all')->where(['Sectortypes.name'=>$Sectortypes->name,'Sectortypes.id!='=>$id])->count();


			if($sectortypes_check>0){
				$this->Flash->error(__('The Sectortypes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Sectortypes->save($Sectortypes);
			$this->Flash->success(__('The Sectortypes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->Sectortypes->save($Sectortypes)) {
			// 	$this->Flash->success(__('The Sectortypes details has been updated.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Sectortypes details could not be updated. Please, try again.'));
		}		
		$this->set(compact('Sectortypes'));
	}
	
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Sectortypes');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Sectortypes->save($project2)) {
            $this->Flash->success(__('The Sectortypes has been deleted.'));
        } else {
            $this->Flash->error(__('The Sectortypes could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}