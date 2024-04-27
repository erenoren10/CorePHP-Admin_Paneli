<?php

if($_POST){
	include '../../include/baglan.php';
	$time_al = time().'-'.uniqid();

	$verifyToken = 'sayim'.@$_POST['timestamp'].'sayim';

	if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
		
		$fileTypes = array('jpg','jpeg','JPG','JPEG','png','PNG','svg','gif');
		$fileParts = pathinfo($_FILES['Filedata']['name']);
		
		$tempFile = $_FILES['Filedata']['tmp_name'];
		$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
		$targetFile = rtrim($targetPath,'/') . '/' .$time_al.'.'.$fileParts['extension'];
		
		if (in_array($fileParts['extension'],$fileTypes)) {
			move_uploaded_file($tempFile,$targetFile);
			echo $time_al.'.'.$fileParts['extension'];
		} else {
			echo 2;
		}
		
	}else{
		echo 3;	
	}

}
?>