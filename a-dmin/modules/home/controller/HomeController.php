<?php 
class HomeController extends Controller{
	public $modelNews;
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->modelNews = $this->loadModel('Home');
	}
	public function index(){
		global $_web;
		//$this->view->data  = $this->modelNews->getUserById(1);
		$this->view->render('index');
	}
	public function setLang(){
		$lang = $this->input->post('lang');
		Session::create(array('lang'=> $lang));
		$data = array(
			'status' => true,
			'mess'	 => 'Success'
		);
		
		echo json_encode($data);
	}

	/*public function __destruct(){
		$this->loadView();
	}*/
	
}