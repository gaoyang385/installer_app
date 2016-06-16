<?php
	//批量接单任务
	if(isset($_POST['installer_id']))
	{
		$installer_id=Clean($_POST['installer_id']);
		$sql="update vanish_az set is_order=1 where installer_id='$installer_id' and is_order=0 and is_arrived=0 and end_type=0";
		if(QuerySql($sql))
		{
			echo  BuildResault(1,'success','');
		}
		else
		{
			echo BuildResault(-1,'接单失败，请重试','');
		}
	

	}
	else	
	{
		echo BuildResault(-1,'no param','');
	}
?>