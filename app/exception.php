<?php
	//其他情况，type=3退货，4已经安装，5无安装条件
	if($_POST['az_id']&&$_POST['type'])
	{
		$az_id=Clean($_POST['az_id']);
		$type=$_POST['type'];
		switch($type)
		{
			case 3:
			$sql="update vanish_az set end_type=3 where az_id='$az_id'";
			if(QuerySql($sql))
				{
					echo  BuildResault(1,'success','');
				}
				else
				{
					echo BuildResault(-1,'操作失败，请重试','');
				}
			break;
			case 4:
						$sql="update vanish_az set end_type=4 where az_id='$az_id'";
			if(QuerySql($sql))
				{
					echo  BuildResault(1,'success','');
				}
				else
				{
					echo BuildResault(-1,'操作失败，请重试','');
				}
			break;
			case 5:
						$sql="update vanish_az set end_type=5 where az_id='$az_id'";
			if(QuerySql($sql))
				{
					echo  BuildResault(1,'success','');
				}
				else
				{
					echo BuildResault(-1,'操作失败，请重试','');
				}
			break;
			default:
			echo BuildResault(-1,'type erro','');
			break;
		}
		
		
	

	}
	else	
	{
		echo BuildResault(-1,'no param','');
	}
?>