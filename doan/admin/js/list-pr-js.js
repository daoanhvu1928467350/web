// JavaScript Document
$(document).ready(function(){
	$(".item-close-pr").click(function(){
		var id=$(this).attr("id");
		var value=confirm("Bạn chắc chắn muốn xóa quảng cáo này");
		if(value){
			$.post("./config/query-data-insert.php",{id:id,deletepr:1},function(data){
				if(data.status){
					alert("Thành công");
					$("#main").load("list-pr.php");
				}
			},"json");
		}
	});
});