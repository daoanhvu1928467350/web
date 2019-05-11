// JavaScript Document
$(document).ready(function(){
	/*$("#submit-phongchieuphim").click(function(){
		var room=$("#select-for-roomfilm").val();
	
	var namephongchieu=$("#namephongchieu").val();
	var soluonghangghe=$("#soluonghangghe").val();
	var max=$("#max-ghe").val();
	var sum=$("#sum-ghe").val();
		
	$.post("./config/query-data-insert.php",{room:room,namephongchieu:namephongchieu,soluonghangghe:soluonghangghe,max:max,sum:sum,insertphongchieuphim:1},function(data){
		if(data.status){
			alert('Thành công');
		}
	},"json");
	});
	*/
	$("#submit-phongchieuphim").click(function(e){
		var namephongchieu=$("#namephongchieu").val();
		var boolean=false;
		if(namephongchieu ==="Rạp"){
			boolean=true;
			$("#namephongchieu").css("border","1px solid red");
		}
		else{
			boolean=false;
			$("#namephongchieu").css("border","1px solid #CED4DA");
		}
		if(boolean){
			e.preventDefault();
		}
		
	});
});