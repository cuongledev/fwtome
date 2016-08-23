<?php 
class LoginController extends Controller{
	public $modelNews;
	public $errors = array();
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->modelUser = $this->loadModel('Login');
	}
	public function index(){
		if (isset($_SESSION['id']) || isset($_SESSION['group_id'])) redirect(base_url());
		$this->view->data  = $this->modelUser->getAll(1);
		//$this->loadPages = 'index';
		//$this->view('index',$data);
		$this->view->render('index',false);
	}
	public function login(){

		if ($this->isPost()==true) {
			$email = $this->input->post('email');
			$password = md5("lnc".$this->input->post('password'));
			if ($this->modelUser->checkEmail($email) > 0) {
				$user = $this->modelUser->checkLogin($email,$password);
				if (!empty($user)) {
					$data = array(
						'id' 		=> $user['id'],
						'email' 	=> $user['email'],
						'username' 	=> $user['username'],
						'group_id'	=> $user['group_id']
					);
					Session::create($data);
					redirect(base_url()."index.php?mod=home&controller=home&action=index");
				}else{
					$this->errors[] = "Mật khẩu của bạn không chính xác.";
				}
			}else{
				$this->errors[] = "Email của bạn không chính xác.";
			}
		}
		
	}
	public function logout(){
		$data = array('id','email','username','group_id');
		Session::destroy($data);
		redirect(base_url());
	}

	/*public function __destruct(){
		$this->loadView();
	}*/
	
}