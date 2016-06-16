<?php
	//接受任务
	if(isset($_POST['az_id']))
	{
		$az_id=Clean($_POST['az_id']);
		$sql="update vanish_az set is_order=1 where az_id='$az_id'";
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