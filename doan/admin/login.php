<?php
session_start();
if(isset($_SESSION['admin'])){
	header("Location:./");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Admin</title>
<link rel="stylesheet" href="css/css-login.css">
<?php
	
	require("config/helper.php");
	require("config/model.php");
	?>
</head>
<body>
<div id="div-login-admin">
	<div id="header-login-admin">
		<img src="image/0117cb0129593faa02646a8277ca80e3-security-lock-icon-by-vexels.png" id="img-header-login">
		<span id="title-login">Đăng nhập Admin</span>
	</div>
	<div id="element-login-admin" >
	<form action="./login.php">
  <div class="form-group">
    <label for="username" >Tên đăng nhập:</label>
    <input type="text" class="form-control resize" name="username" id="username">
    <div class="error" id="error-username"></div>
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu:</label>
    <input type="password" class="form-control resize" name="password" id="password">
    <div class="error" id="error-password"></div>
  </div>
  <div class="error" id="error-login"></div>
  <input type="hidden" value="1" name="login">
  <button type="submit" class="btn btn-primary" id="login">Đăng nhập</button>
</form>
		
	</div>
</div>
<script>
	$("#login").click(function(event){
		
		istrue=false;
		if($("#username").val() ==""){
			$("#error-username").text("Vui lòng nhập username");
			istrue=true;
		}
		else{
			$("#error-username").text("");
		}
		if($("#password").val() ==""){
			$("#error-password").text("Vui lòng nhập password");
			istrue=true;
		}
		else{
			$("#error-password").text("");
		}
		if(istrue){
			event.preventDefault();
		}
	});
</script>
<?php
	if(isset($_GET['error'])){
		?>
		<script>
			$("#error-login").text("User name hoặc password sai!");
	</script>
		<?php
	}
	else{
		?>
		<script>
			$("#error-login").text("");
	</script>
		<?php
	}
	if(isset($_GET['login'])){
		$username=$_GET['username'];
		$password=$_GET['password'];
		$model=new model();
		$data=$model->login($username,$password);
		if($data>0){
			$_SESSION['admin']=1;
			header("Location:./");
		}
		else{
			header("Location:./login.php?error=1");
		}
	}
	?>
</body>
</html>