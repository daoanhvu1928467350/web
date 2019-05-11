
<div id="register-official" class="container">

<h2>Đăng ký thành viên</h2>
 <form action="./" method="post">
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
  <button type="submit" class="btn btn-primary btn-generation" id="register" >Đăng ký</button>
  <!--<a href="./">Bạn chưa có tài khoản??</a>-->
</form>
</div>
<script>
	$(document).ready(function(){
		
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
		$("#phone-register").inputFilter(function(value) {
  return /^-?\d*$/.test(value); });
   re=/\S+@\S+\.\S/;
		$("#register-thanhtoan").click(function(event){
			var a=false;
			
			if($("#name-register").val() == ""){
				$("#error-name-register").text("Vui lòng nhập tên");
				a=true;
			}
			else{
				
				$("#error-name-register").text("");
			}
			if(($("#phone-register").val().length <=9) ||($("#phone-register").val().length >=12)){
				$("#error-sdt-register").text("Vui lòng nhập đúng định dạng số điện thoại");
				a=true;
			}
			else{
				$("#error-sdt-register").text("");
			}
			if(!re.test($("#email-register").val())){
				$("#error-email-register").text("Vui lòng nhập đúng định dạng email");
				a=true;
			}
			else{
				$("#error-email-register").text("");
			}
			if($("#pwd-register").val().length !== $("#re-pwd-register").val().length){
				$("#error-re-pwd").text("Mật khẩu lặp lại không đúng");
				a=true;
			}
			else{
				$("#error-re-pwd").text("");
			}
			
			if(a){
				event.preventDefault();
			}
			
		});
		
	});
	
	
</script>