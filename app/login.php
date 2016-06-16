<?php
	//登陆
	
	if(isset($_POST['username'])&&isset($_POST['pwd']))
	{
		$username=Clean($_POST['username']);
		$pwd=Clean($_POST['pwd']);
		$sql="select installer_id from b_installer where username='$username' and password='$pwd' and is_able=1";
		$data=SelectSql($sql);
		if(count($data)==1)
		{
		echo BuildResault(1,'success',$data);
		}
		else
		{
		echo BuildResault(-1,'账户名密码错误！','');
		}

	}
	else	
	{
		echo BuildResault(-1,'无效参数','');
	}
?>