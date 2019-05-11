<?php
ob_start();
if(session_id() == ''){
    //session has not started
    session_start();
}
//session_start();
if(isset($_SESSION['user'])){
	header("Location:/doan/");
	
}
else{
?>
<div id="login-official" class="container">

<h2>Đăng nhập thành viên</h2>
 <form action="./" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control col-md-5" name="username" id="username">
    <div class="error" id="error-username-login"></div>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control col-md-5" name="password-login" id="pwd-login">
        <div class="error" id="error-pass-login"></div>

  </div>
	 <?php
	if(isset($_GET['infomation-thanhvien'])){
		?>
	  <input type="hidden" name="infomation-thanhvien" value="1">
	 <?php
	}
	?>
  <input type="hidden" name="login-confirm" value="1">
  <?php
	if(isset($_GET['error'])){
	?>
<div id="error-login" class="error">Email hoặc mật khẩu không đúng</div>
<?php
	}
		?>
  <button type="submit" class="btn btn-primary btn-generation" id="loginofficial">Đăng nhập</button>
  <a href="./member.php?register=1">Bạn chưa có tài khoản??</a>
</form>

</div>
<script>
	
	$("#loginofficial").click(function(event){
		
		var istrue=false;
		re1=/\S+@\S+\.\S/;/*/\S+@\S+\.\S/*/
		if($("#username").val() == ""){
		$("#error-username-login").text("Vui lòng nhập email");
			istrue=true;
	    }
	else{
		$("#error-username-login").text("");
		
	}
	if($("#pwd-login").val() == ""){
		$("#error-pass-login").text("Vui lòng nhập password");
		istrue=true;

	}
	else{
		$("#error-pass-login").text("");
	}
		
	if(!re1.test($("#username").val())){
		$("#error-username-login").text("Vui lòng nhập đúng định dạng email");
		istrue=true;
	}
	else{
			$("#error-username-login").text("");
		
		}
		if(istrue){
			event.preventDefault();
		}
		
	});
	
</script>
<?php
}
	?>