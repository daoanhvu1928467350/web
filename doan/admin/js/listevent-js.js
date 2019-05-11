// JavaScript Document
$(document).ready(function(){
	$(".item-close").click(function(){
		var id=$(this).attr("id");
		var value=confirm("Bạn có chắc muốn xóa sự kiện này");
		if(value){
			$.post("./config/query-data-insert.php",{id:id,deleteevent:1},function(data){
				if(data.status){
					alert("Thành công");
					$("#main").load("listevent.php");
				}
				else{
					alert("Thất bại");
				}
				
			},"json");
		}
		else{
			
		}
	});
});