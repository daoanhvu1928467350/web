// JavaScript Document
$(document).ready(function(){
	$("#click-goicombo1").click(function(){
		
	var ten=$("#tencombo").val();
		var giacombo=$("#giacombo").val();
		var boolean=true;
		if(giacombo ==""){
			$("#error-giacombo").text("Vui lòng điền giá combo");
			boolean=false;
		}else{
			$("#error-giacombo").text("");
			boolean=true;
		}
		if(ten==""){
			$("#error-tencombo").text("Vui lòng điền tên combo");
			boolean=false;
		}
		else{
			$("#error-tencombo").text("");
			boolean=true;
		}
		var content="'"+$("#richtext1").contents().find("body").html()+"'";
		if(boolean){
		$.post('./config/query-data-insert.php',{giacombo:giacombo,ten:ten,content:content,insertcombo:1},function(data){
			if(data.status){
				alert('Thành công');
			}
			else{
				alert("Thất bại");
			}
		},"json");
		}
		else{
			alert("Đã có lỗi xảy ra");
		}
	});
	 $("#giacombo").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
     
               return false;
    }
   });
});