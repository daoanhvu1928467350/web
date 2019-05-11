// JavaScript Document
$(document).ready(function(){
	$(".delete-lichchieuphim").click(function(){
		
		var id=$(this).attr("id");
		var name=$(this).attr("name");
		var thoiluong=$("#"+name).val();
		var ngay=$("#ngaychieuphim").val();
		var idrap=$("#rapchieuphim").val();
		$.post("./config/query-data-insert.php",{id:id,name:name,thoiluong:thoiluong,deletelichchieuphim:1},function(data){
			
			if(data.status){
				$("#element-lichchieu").load("lichchieuphim.php",{rapchieuphim:idrap,ngaychieu:ngay});
			}else{
				
				alert("Thất bại");
				
			}
		},"json");
	});
});