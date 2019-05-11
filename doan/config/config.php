<?php
function connect(){
	$servername="localhost";
		$username="root";
		$password="";
		$db="cinema";
	$conn=new mysqli($servername,$username,$password,$db);
	if($conn->connect_error){
		die("Không thể kết nối:".$conn->connect_error);
	}
	mysqli_set_charset($conn,'utf8');
	return $conn;
}
?>