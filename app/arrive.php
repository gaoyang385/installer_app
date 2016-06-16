<?php
	//到户
	if(isset($_POST['az_id']))
	{
		$az_id=Clean($_POST['az_id']);
		$sql="update vanish_az set is_arrived=1 where az_id='$az_id'";
		if(QuerySql($sql))
		{
			echo  BuildResault(1,'success','');
		}
		else
		{
			echo BuildResault(-1,'操作失败，请重试','');
		}
	

	}
	else	
	{
		echo BuildResault(-1,'no param','');
	}
?>