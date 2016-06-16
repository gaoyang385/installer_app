<?php
	require_once("UploadFile.class.php");
	if($_POST['az_id']&&$_FILES['files'])
	{
		$addr=dirname(__FILE__);
	$path='http://'.$_SERVER['SERVER_NAME'].'/installer_app/app/upload/';
		$az_id=Clean($_POST['az_id']);
	 $type = array('gif', 'jpg', 'png','jepg');
	 $upload = new UploadFile($_FILES['files'], $addr.'\upload', 3000000, $type);
	 $num=$upload->upload();
	 if($num>0)
	 {
		$files = $upload->getSaveInfo();
		foreach($files as $file)
		{
			$filePath=$path.$file['saveas'];
			$uuid=Guid();
			$sql="insert into vanish_az_pic (pic_id,pic_name,az_id) values ('$uuid','$filePath','$az_id')";
			QuerySql($sql);
		}
		echo BuildResault(1,'上传成功','');
	 }
	 else
	 {
		echo BuildResault(-1,'上传失败','');
	 }
	}
	else
	
	{
		echo BuildResault(-1,'no param','');
	}

?>