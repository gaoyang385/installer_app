<?php
	//修改密码
	if(isset($_POST['installer_id'])&&isset($_POST['opwd'])&&isset($_POST['npwd']))
	{
		$installer_id=Clean($_POST['installer_id']);
		$opwd=Clean($_POST['opwd']);
		$npwd=Clean($_POST['npwd']);
		$sql="select * from b_installer where installer_id='$installer_id' and password='$opwd' and is_able=1";
		$data=SelectSql($sql);
		if(count($data)>0)
		{
		$sql="update b_installer set password='$npwd' where installer_id='$installer_id'";
		if(QuerySql($sql))
		{
		echo BuildResault(1,'修改成功','');
		}
		else
		{
		echo BuildResault(-1,'修改失败','');
		}
		}
		else
		{
		echo BuildResault(-1,'原密码输入错误','');
		}

	}
	else	
	{
		echo BuildResault(-1,'无效参数','');
	}
?>