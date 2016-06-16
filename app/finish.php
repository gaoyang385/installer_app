<?php
	//完成安装
	if($_POST['az_id']&&$_POST['cmdtcode_inner']&&$_POST['cmdtcode_outer']&&$_POST['price_chai']&&$_POST['price_zhuang']&&$_POST['price_jia']&&$_POST['price_nei']&&$_POST['price_wai']&&$_POST['price_lou']&&$_POST['price_fa']&&$_POST['title_other']&&$_POST['price_other']&&$_POST['price_all'])
	{
		$az_id=Clean($_POST['az_id']);
		$cmdtcode_inner=Clean($_POST['cmdtcode_inner']);
		$cmdtcode_outer=Clean($_POST['cmdtcode_outer']);
		$price_chai=Clean($_POST['price_chai']);
		$price_zhuang=Clean($_POST['price_zhuang']);
		$price_jia=Clean($_POST['price_jia']);
		$price_nei=Clean($_POST['price_nei']);
		$price_wai=Clean($_POST['price_wai']);
		$price_lou=Clean($_POST['price_lou']);
		$price_fa=Clean($_POST['price_fa']);
		$title_other=Clean($_POST['title_other']);
		$price_other=Clean($_POST['price_other']);
		$price_all=Clean($_POST['price_all']);
		$sql="update vanish_az set end_type=1,cmdtcode_inner='$cmdtcode_inner',cmdtcode_outer='$cmdtcode_outer',price_chai='$price_chai',price_zhuang='$price_zhuang',price_jia='$price_jia',price_nei='$price_nei',price_wai='$price_wai',price_lou='$price_lou',price_fa='$price_fa',title_other='$title_other',price_other='$price_other',price_all='$price_all' where az_id='$az_id'";
		
		
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