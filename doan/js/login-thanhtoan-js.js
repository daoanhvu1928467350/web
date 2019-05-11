// JavaScript Document
$(document).ready(function(){
	$(".login-thanhtoan-close").click(function(){
		$("#login-thanhtoan").show();
	  $("#night2").show();
		window.history.back();
		
	})
	$("#loginofficial-thanhtoan").click(function(){
		
			var istrue=false;
		var re1=/\S+@\S+\.\S/;/*/\S+@\S+\.\S/*/
		if($("#username").val() === ""){
		$("#error-username-login").text("Vui lòng nhập email");
			istrue=true;
	    }
	else{
		$("#error-username-login").text("");
		
	}
	if($("#pwd-login").val() === ""){
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
		else{
		var username=$("#username").val();
		var password=$("#pwd-login").val();
			
		$.post("./config/query-data-update.php",{loginthanhtoan:1,username:username,password:password},function(data){
			
			if(data.status){
				location.reload();
			
			}
			else{
				alert("Sai tài khoản hoặc password");
			}
		},"json");
		}
	});
		
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
   var re=/\S+@\S+\.\S/;
		$("#register-thanhtoan").click(function(event){
			var a=false;
			
			if($("#name-register").val() === ""){
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
			else{
				var name=$("#name-register").val();
				var sodienthoai=$("#phone-register").val();
				var email=$("#email-register").val();
				var password=$("#pwd-register").val();
				$.post("./config/query-data-update.php",{registerthanhtoan:1,name:name,password:password,sodienthoai:sodienthoai,email:email},function(data){
			
			if(data.status){
				location.reload();
			
			}
			else{
				alert("email đã tồn tại");
			}
		},"json");
		
			
			}
			
		});
	
});