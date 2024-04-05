<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class LocalitytypeController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$locality_types = $this->Localitytype->find('all')->where(['Localitytype.is_active'=>1])->toArray();			
		$this->set(compact('locality_types'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$localitytype= $this->Localitytype->newEmptyEntity();
		if ($this->request->is('post')) { 
			//echo "<pre>"; print_r($this->request->getData());  exit();
			$localitytype->name                = $this->request->getData('name');

			$localitytype_check  = $this->Localitytype->find('all')->where(['Localitytype.name'=>$localitytype->name])->count();


			if($localitytype_check>0){
				$this->Flash->error(__('The Localitytype details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Localitytype->save($localitytype);
			$this->Flash->success(__('The Localitytype details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Localitytype->save($localitytype)) {
			// 	$this->Flash->success(__('The Localitytype details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Localitytype details could not be saved. Please, try again.'));
		}
			$this->set(compact('localitytype'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$localitytype = $this->Localitytype->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$localitytype= $this->Localitytype->patchEntity($localitytype, $this->request->getData());
			$localitytype->name                = $this->request->getData('name');

			$localitytype_check  = $this->Localitytype->find('all')->where(['Localitytype.name'=>$localitytype->name,'Localitytype.id!='=>$id])->count();


			if($localitytype_check>0){
				$this->Flash->error(__('The Localitytype details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Localitytype->save($localitytype);
			$this->Flash->success(__('The Localitytype details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Localitytype->save($localitytype)) {
			// 	$this->Flash->success(__('The Localitytype details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Localitytype details could not be updated. Please, try again.'));
		}		
		$this->set(compact('localitytype'));
	}
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Localitytype');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Localitytype->save($project2)) {
            $this->Flash->success(__('The Localitytype has been deleted.'));
        } else {
            $this->Flash->error(__('The Localitytype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}