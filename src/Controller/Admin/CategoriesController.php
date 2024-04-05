<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class CategoriesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$categories = $this->Categories->find('all')->where(['Categories.is_active'=>1])->toArray();		
		$this->set(compact('categories'));   
	}	 
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$category = $this->Categories->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$category->name                = $this->request->getData('name');

			$category_check  = $this->Categories->find('all')->where(['Categories.name'=>$category->name])->count();


			if($category_check>0){
				$this->Flash->error(__('The Category details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Categories->save($category);
			$this->Flash->success(__('The Category details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->Categories->save($category)) {
			// 	$this->Flash->success(__('The Category details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Category details could not be saved. Please, try again.'));
		}
			$this->set(compact('category'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$category = $this->Categories->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$category = $this->Schemes->patchEntity($user, $this->request->getData());
			$category ->name                = $this->request->getData('name');

			$category_check  = $this->Categories->find('all')->where(['Categories.name'=>$category->name,'Categories.id!='=>$id])->count();


			if($category_check>0){
				$this->Flash->error(__('The Category details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Categories->save($category);
			$this->Flash->success(__('The Category details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Categories->save($scheme)) {
			// 	$this->Flash->success(__('The Category details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Category details could not be updated. Please, try again.'));
		}		
		$this->set(compact('category'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Categories');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Categories->save($project2)) {
            $this->Flash->success(__('The Categories has been deleted.'));
        } else {
            $this->Flash->error(__('The Categories could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}