<?php
require("model.php");
$model=new model();
session_start();
if(isset($_POST['loginthanhtoan'])){
	 $username=$_POST['username'];
	$password=$_POST['password'];
	$data=$model->login($username,$password);
	if(isset($data['name'])){
		$_SESSION['user']=$data;
		echo json_encode(array("status"=>json_encode($data)));
	}
	else{
		echo json_encode(array("status"=>false));
	}
	
	
}
else if($_POST['registerthanhtoan']){
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['sodienthoai'];
	$member=new member($name,$phone,$email,$password,0);
	$data=$model->register($member);
	
	if($data===1){
		echo json_encode(array("status"=>true));
	}
	else{
		echo json_encode(array("status"=>false));
	}
}
else{
	
}
?>