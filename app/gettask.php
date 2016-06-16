<?php
	//获得任务，根据传回任务状态获取任务 status=0未接，1已接，2历史
	if(isset($_POST['installer_id'])&&isset($_POST['status']))
	{
		$installer_id=Clean($_POST['installer_id']);
		$status=$_POST['status'];
		switch($status)
		{
			case 0:
			$sql="select * from vanish_az where installer_id='$installer_id' and is_order=0 and is_arrived=0 and end_type=0 order by az_date";
			$resault=SelectSql($sql);
			echo BuildResault(1,'success',$resault);
			break;
			case 1:
			$sql="select * from vanish_az where installer_id='$installer_id' and is_order=1 and end_type=0 order by az_date";
			$resault=SelectSql($sql);
			echo BuildResault(1,'success',$resault);
			break;
			case 2:
			$sql="select * from vanish_az where installer_id='$installer_id' and is_order=1 and end_type=1 order by az_date";
			$resault=SelectSql($sql);
			echo BuildResault(1,'success',$resault);
			break;
			default:
			echo BuildResault(-1,'status erro','');
			break;
			
		}

	}
	else	
	{
		echo BuildResault(-1,'no param','');
	}
?>