// JavaScript Document
$(document).ready(function(){
	$(".delete").click(function(){
		
		var result=confirm('Bạn có chắc muốn xóa rạp chiếu phim');
		if(result){
			var id=$(this).attr("name");
			
			$.post("./config/query-data-insert.php",{id:id,deleterap:1},function(data){
				
				if(data.status){
					
				 location.reload();
				}
				else{
					alert("Đã xảy ra lỗi");
				}
			},"json");
		}
		else{
			
		}
	});
	$(".khuvucchieu").click(function(){
		var id=$(this).attr("id");
		  window.history.pushState({}, "Hide", "./?khuvucchieu="+id);
				 location.reload();
	});
});