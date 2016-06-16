<?php
	//申请改期，endtype=2
	if($_POST['az_id']&&$_POST['remark'])
	{
		$az_id=Clean($_POST['az_id']);
		$remark=Clean($_POST['remark']);
		
		$sql="update vanish_az set end_type=2,remark='$remark' where az_id='$az_id'";
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