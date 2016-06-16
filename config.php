<?php
include_once "mysql/shared/ez_sql_core.php";
include_once "mysql/ez_sql_mysql.php";
define("db_user", "root");
define("db_password", "1q2w3e4r");
define("db_name", "erplz");
// define("db_host", "202.121.66.54:3307");
define("db_host", "114.215.94.21");
//define("server","http://114.215.94.21:70/garsi-php/upload/");

function BuildResault($code,$msg,$data)
{
		$resault = array () ;
		$resault ['code'] = $code;
		$resault ['msg'] = $msg;
		$resault ['data'] = $data;
		return json_encode($resault);
}
function QuerySql($sql)
{
	$db = new ezSQL_mysql(db_user,db_password,db_name,db_host);
	$db->query("set character set 'utf8'");
	$db->query("set names utf8");
	return $db->query($sql);
	
}
function SelectSql($sql)
{
	$db = new ezSQL_mysql(db_user,db_password,db_name,db_host);
	$db->query("set character set 'utf8'");
	$db->query("set names utf8");
	return $db->get_results($sql);
}
function Clean($data)
{
	return str_replace("'","",$data);
}
function Guid(){
        mt_srand((double)microtime()*10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $uuid = substr($charid, 0, 8).substr($charid, 8, 4).substr($charid,12, 4).substr($charid,16, 4).substr($charid,20,12);
        return $uuid;   
}
?>