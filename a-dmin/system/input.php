<?php 
/**
* 
*/
class Input{
	public function post($name){
		if (isset($_POST[$name])) {
			return trim(addslashes($_POST[$name]));
		}
	} 
	public function get($name){
		if (isset($_GET[$name])) {
			return trim(addslashes($_GET[$name]));
		}
	}
}