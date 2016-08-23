<?php 
class View{
	public $_fileView;
	public function render($file,$fullFile = true){
		global $_web;
		
		$path = DIR_MODULES . $_web['uri']['mod']."/view/".$file.".php";
		if ($fullFile == true) {
			$this->_fileView = $file;
			$this->setTeamplate();
		}else{
			if (file_exists($path)) {
				require_once $path;
			}else{
				echo "Error: khong tim thay file view trong module. ";
			}
		}
	}
	public function setTeamplate(){
		global $_web;
		$path = DIR_TMP . "themes/teamplate.php";
		require_once $path;
			//$this->teamplate = 
	}
}