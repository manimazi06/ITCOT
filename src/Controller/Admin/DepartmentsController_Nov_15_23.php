<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DepartmentsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');	
		$this->loadModel('SchemeTypes');

		 if ($this->request->is(['patch', 'post', 'put'])) { 
			$scheme= $this->request->getData('scheme_type_id');				
			$departs  = $this->Departments->find('all')->where(['Departments.scheme_type_id'=>$scheme])->contain(['SchemeTypes'])->toArray();		
		}else{
			$departs  = $this->Departments->find('all')->contain(['SchemeTypes'])->toArray();
		 }
		 $scheme_type  = $this->SchemeTypes->find('list')->toArray();
		$this->set(compact('departs','scheme_type'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('SchemeTypes');
			$user_id = $this->Auth->user('id');
		$department = $this->Departments->newEmptyEntity();
		if ($this->request->is('post')) { 
			$department->scheme_type_id= $this->request->getData('scheme_type_id');
			$department->name                = $this->request->getData('name');
			$department->description         = $this->request->getData('description');
			$department->created_by          = $this->Auth->user('id');
			$department->created_date        =date('Y-m-d H:i:s');
			if ($this->Departments->save($department)) {
				$this->Flash->success(__('The Departments details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Departments details could not be saved. Please, try again.'));
		}
		$schemes = $this->SchemeTypes->find('list')->all();
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('department','schemes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('SchemeTypes');

		$department = $this->Departments->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) { // echo "<pre>";  print_r($this->request->getData());  exit();
			
			 $departmentpdf = $this->request->getData('file_upload');			 
			 if ($departmentpdf->getClientFilename() != '' && $departmentpdf->getError() == 0) {
               // $auth_id                                      = $this->Auth->user('id');
                $file1                                          = $departmentpdf->getClientFilename();					
				$file                                           = preg_replace('/\s+/', '_', $file1);
				$file_og                                        = str_replace('.', '_', $file);
				$final_file1                                    = str_replace('-', '_', $file_og);
				$final_file                                     = substr($final_file1, 0, -4);;
				$fileExt                                        = 'pdf';              
                $newfile                                        = $final_file . "." . $fileExt;
                $tempFile                                       = $departmentpdf->getStream()->getMetadata('uri');
                $targetPath                                     = 'uploads/Govt_schemes/';
                $targetFile                                     =  $targetPath . $newfile;
			
                move_uploaded_file($tempFile, $targetFile);
                $department->file_upload             = $newfile;
            } else {
                $department->file_upload             = NULL;
            } 	
				
			$image_upload  = $this->request->getData('image_upload');
			// echo '<pre>';
			// print_r($image_upload);
			// exit();
			if ($image_upload->getClientFilename() != '') {

				$name    = $image_upload->getClientFilename();
				$type    = $image_upload->getClientMediaType();
				$size    = $image_upload->getSize();
				$tmpName = $image_upload->getStream()->getMetadata('uri');
				$error   = $image_upload->getError();

				if ($name != '' && $error == 0) {
					$file                                      = $name;
					$array                                     = explode('.', $file);
					$fileExt                                   = $array[count($array) - 1];
					$current_time                              = date('Y_m_d');
					$newfile                                   = "States_".$department['id'].'.'.$fileExt;
					$tempFile                                  = $tmpName;
					$targetPath                                = 'uploads/Govt_schemes/States/';
					$targetFile                                = $targetPath . $newfile;
					

					move_uploaded_file($tempFile,$targetFile);
					$department->image_upload                  = $newfile;
				}
			} else {
				$department->image_upload        = $this->request->getData('image_upload1');
			}

			// echo '<pre>';
			// print_r($department->image_upload);
			// exit();

			$department->scheme_type_id      = $this->request->getData('scheme_type_id');
			$department->name                = $this->request->getData('name');
			$department->description         = $this->request->getData('description');
             //echo "<pre>";  print_r($department);  exit();
			if ($this->Departments->save($department)) {
				$this->Flash->success(__('The Departments details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Departments details could not be updated. Please, try again.'));
		}	
		$schemes = $this->SchemeTypes->find('list')->all();	
		$this->set(compact('department','schemes'));
	}
	
	
	
}