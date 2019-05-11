<div class="col-sm-12 col-xs-12" id="login-thanhtoan">
<div class="item-datve login-thanhtoan-close">
	<i class="fas fa-window-close "></i>
</div>

 <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#home">Đăng nhập</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu1">Đăng ký</a>
  </li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
  <div id="login-official" class="container">

<h2>Đăng nhập thành viên</h2>
 
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
  <button type="submit" class="btn btn-primary btn-generation" id="loginofficial-thanhtoan">Đăng nhập</button>
 


</div>

  </div>
  <div class="tab-pane container fade" id="menu1">
  <div id="register-official" class="container">

<h2>Đăng ký thành viên</h2>
 
 <div class="form-group">
    <label for="name">Họ và tên:*</label>
    <input type="text" class="form-control col-md-5" name="name" id="name-register">
    <div id="error-name-register" class="error"></div>
  </div>
  <div class="form-group">
    <label for="phone">Số điện thoại:*</label>
    <input type="text" class="form-control col-md-5" name="phone" id="phone-register">
    <div id="error-sdt-register" class="error"></div>
  </div>
  <div class="form-group">
    <label for="email">Địa chỉ email:*</label>
    <input type="email" class="form-control col-md-5" name="email" id="email-register">
    <div id="error-email-register" class="error"></div>
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu:*</label>
    <input type="password" class="form-control col-md-5" name="password" id="pwd-register">
   
  </div>
  <div class="form-group">
  	<label for="re-pwd">Nhập lại mật khẩu:*</label>
  	<input type="password" class="form-control col-md-5"  id="re-pwd-register">
  	<div id="error-re-pwd" class="error"></div>
  </div>
  <input type="hidden" name="register-member" value="1">
  <button type="submit" class="btn btn-generation" id="register-thanhtoan" >Đăng ký</button>
  <!--<a href="./">Bạn chưa có tài khoản??</a>-->

</div>

	
  </div>
</div>
</div>
<script src="js/login-thanhtoan-js.js"></script>