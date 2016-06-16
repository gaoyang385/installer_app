<?php
	//获得个人信息
	if(isset($_POST['installer_id']))
	{
		$installer_id=Clean($_POST['installer_id']);
		$sql="select name,tel from b_installer where installer_id='$installer_id' and is_able=1";
		$data=SelectSql($sql);
		if($data!=null)
		{
		echo BuildResault(1,'success',$data);
		}
		else
		{
		echo BuildResault(-1,'查无此id','');
		}

	}
	else	
	{
		echo BuildResault(-1,'无效参数','');
	}
?>