<?php 
function db_connect($_mod=null){
	global $_LNC,$_web;
	if($_mod == null){
		$_web['db'] = new MysqliDb ($_LNC['db_host'], $_LNC['db_user'], $_LNC['db_password'], $_LNC['db_name'],$_LNC['db_charset'],$_LNC['db_port']) ;
	}
}
function lang($key) {
	global $_L; 
	if(isset($_L[$key])) {
		$result = $_L[$key];
	}else {
		$result = "Chưa tồn tại ngôn ngữ để hiển thị.";
	}
	return $result;
}
function base_url(){
	global $_web;
	return $_web['base_url'];
}
function redirect($url){
	header("location: $url");
	exit;
}

function dd($a){
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	die(" Die !!!");
}
function de($a){
	echo "<pre>";
	print_r($a);
	echo "</pre>";
}
function getIP()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
    {
        if (array_key_exists($key, $_SERVER) === true)
        {
            foreach (array_map('trim', explode(',', $_SERVER[$key])) as $ip)
            {
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                {
                    return $ip;
                }
            }
        }
    }
}



/*function __autoload($class){
		$paths = explode(PATH_SEPARATOR, get_include_path());
		$class = str_replace("_","/",$class);
		$file = strtolower(str_replace("\\", DIRECTORY_SEPARATOR, trim($class,"\\"))).".php";
		foreach ($paths as $key => $value) {
			$combited = $value.DIRECTORY_SEPARATOR.$file;
			if (file_exists($combited)) {
				echo $combited;die;
				include($combited);
			}else{
				throw new Exception("Not found $class."); 
			}
		}
}*/
