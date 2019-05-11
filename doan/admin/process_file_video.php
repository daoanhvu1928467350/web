<?php
if(isset($_POST['video-insert-film'])){
	$name=$_FILES['upload-video']['name'];
	$size=$_FILES['upload-video']['size'];
	$add=$_FILES['upload-video']['tmp_name'];
	
	$upload="video/upload/".$name;
	$type=strtolower(pathinfo($name,PATHINFO_EXTENSION));
	$isok=true;
	$a="upload";
	$b="video/upload";
	if(!file_exists($b)){
		mkdir('./video/'.$a,0777,true);
	}
	if($type !='avi' && $type !='flv' && $type !='wmv' && $type !='mov' && $type !='mp4'&& $type!='mp3'){
		echo 'Không đúng định dạng video';
		$isok=false;
	}
	if($size>100000000){
		echo 'Dung lượng video quá lớn';
		$isok=false;
	}
	if($isok == false){
		
	}
	else{
	if(move_uploaded_file($add,$upload)){
		header("Location:./?themmoiphim=1&&src1='./$upload'");
	}
	else{
		echo $_FILES["upload-video"]["tmp_name"];
		echo 'không update được';
	}
	}
}
?>