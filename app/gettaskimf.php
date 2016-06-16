<?php
	//获得个人信息
	if(isset($_POST['az_id']))
	{
		$installer_id=Clean($_POST['az_id']);
		$sql="select * from vanish_az where az_id='$az_id'";
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