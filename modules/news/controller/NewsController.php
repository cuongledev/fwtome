<?php 
class NewsController extends Controller{
	public $modelNews;
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->modelNews = $this->loadModel('News');
	}
	public function index(){

		$this->view->data  = $this->modelNews->getAll(1);
		//$this->loadPages = 'index';
		//$this->view('index',$data);
		$this->view->render('index');
	}

	/*public function __destruct(){
		$this->loadView();
	}*/
	
}