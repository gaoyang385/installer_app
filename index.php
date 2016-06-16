<?php
include 'config.php';
header('Access-Control-Allow-Origin:*');  
// 响应类型  
header('Access-Control-Allow-Methods:POST');  
// 响应头设置  
header('Access-Control-Allow-Headers:x-requested-with,content-type'); 
//error_reporting(0);
	if(isset($_REQUEST['action']))
	{
		$action=$_REQUEST['action'];
		$url='app/'.$action.'.php';
		if(file_exists($url))
		{
		include_once $url;	
		}
	else
	{
		echo BuildResault(-1,'no such action','');
	}
	}
	else
	{
		echo BuildResault(-1,'no such action','');
	}


?>