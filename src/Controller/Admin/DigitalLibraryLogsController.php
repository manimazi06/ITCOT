<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DigitalLibraryLogsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Users');
		$this->loadModel('SchemeTypes');
		$this->loadModel('Departments');
		$this->loadModel('DepartmentSchemes');
		// date_default_timezone_set("Asia/Calcutta");
		$digitalLibraryLogs = $this->DigitalLibraryLogs->find('all')->where(['DigitalLibraryLogs.status'=>1])->contain(['Users','SchemeTypes','Departments','DepartmentSchemes'])->toArray();		
		 

		// $date_time=$digitalLibraryLogs[0]['login_time'];
		// $str=strval($date_time);
		// 	$login_time=date('d-m-Y H:i:s',strtotime($str));
		// echo '<pre>';
		// print_r($digitalLibraryLogs);
		// exit();
		$this->set(compact('digitalLibraryLogs','login_time'));  
	}	 
	

	
}