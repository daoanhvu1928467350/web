// JavaScript Document
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
		$("#phone-user").inputFilter(function(value) {
  return /^-?\d*$/.test(value); });
   var re=/\S+@\S+\.\S/;
		$("#update").click(function(event){
			var a=false;
			
			if($("#name-user").val() === ""){
				$("#error-name-register").text("Vui lòng nhập tên");
				a=true;
			}
			else{
				
				$("#error-name-register").text("");
			}
			if(($("#phone-user").val().length <=9) ||($("#phone-user").val().length >=12)){
				$("#error-sdt-register").text("Vui lòng nhập đúng định dạng số điện thoại");
				a=true;
			}
			else{
				$("#error-sdt-register").text("");
			}
			if(!re.test($("#email-user").val())){
				$("#error-email-register").text("Vui lòng nhập đúng định dạng email");
				a=true;
			}
			else{
				$("#error-email-register").text("");
			}
			if($("#pwd-user").val().length !== $("#re-pwd-user").val().length){
				$("#error-re-pwd1").text("Mật khẩu lặp lại không đúng");
				a=true;
			}
			else{
				$("#error-re-pwd1").text("");
			}
			if($("#pwd-user").val() === ""){
				
				$("#error-re-pwd1").text("Vui lòng nhập mật khẩu");
				a=true;
			}
			else{
				$("#error-re-pwd1").text("");
			}
			
			if(a){
				event.preventDefault();
			}
			
		});
		$("#span-click-update ").click(function(){
		$("#update-infomation-user").toggle();
		
			if($(this).find("svg").hasClass('svg-inline--fa fa-caret-up fa-w-10')){
				   $(this).find("svg").removeClass('svg-inline--fa fa-caret-up fa-w-10');
					$(this).find("svg").addClass('svg-inline--fa fa-caret-down fa-w-10');
			}
			else{
				$(this).find("svg").removeClass('svg-inline--fa fa-caret-down fa-w-10');
					$(this).find("svg").addClass('svg-inline--fa fa-caret-up fa-w-10');
		
			}
	});
	$(".click-tongtienve").click(function(){
		var name=$(this).attr("name");
		
		$("#"+name).show();
		$("#night3").show();
	});
	$(".click-soghe").click(function(){
		var name=$(this).attr("name");
		
		$("#"+name).show();
		$("#night3").show();
	});
	$(".icon").click(function(){
		var name=$(this).attr("name");
		
		$("#"+name).hide();
		$("#night3").hide();
	});
	$(".click-tongtienbap").click(function(){
		var name=$(this).attr("name");
		
		$("#"+name).show();
		$("#night3").show();
	});
	});