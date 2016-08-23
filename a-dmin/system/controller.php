<?php 
class Controller{
	public $view,$input,$mod,$controller,$action,$id,$loadPages;
	
	public function __construct(){
		global $_web;
		$this->mod          = $_web['uri']['mod'];
		$this->controller         = $_web['uri']['controller'];
		$this->action          = $_web['uri']['action'];
		$this->id           = $_web['uri']['id'];

		$this->input = new Input();
		$this->view = new View(); 
	}
	/*public function view($file=null,$data=null){
		if (isset($file)) {
			$path = DIR_MODULES . $this->mod . '/view/' . $file . '.php';
			include_once $path;
		}
	}
	public function loadView($teamplate='themes/teamplate'){
		if (isset($teamplate)) {
			$this->loadPages = $this->view();
			$path = DIR_TMP . $teamplate.'.php';
			include_once $path;
		}
	}*/
	public function loadModel($file, $mod = null) {
		if ($mod === null) {
			$path = DIR_MODULES . $this->mod . '/model/' . $file . '.php';
			if (file_exists($path)) {
				include_once $path;
				$obj = new $file();
				return $obj;
			} else {
				die('Không tồn tại file này' . $path);
			}
		} else {
			$path = DIR_MODULES . $mod . '/model/' . $file . '.php';
			if (file_exists($path)) {
				include_once $path;
				$obj = new $file();
				return $obj;
			} else {
				die('Không tồn tại file này' . $path);
			}
		}
	}
	public function isPost(){
		if (isset($_POST)) {
			return true;
		}else{
			return false;
		}
	}
	
}