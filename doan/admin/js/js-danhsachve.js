// JavaScript Document
$(document).ready(function(){
	$(".delete-giave-2d").click(function(){
		var value=confirm("Bạn có chắc muốn xóa giá vé này");
		if(value){
		var id=$(this).attr("id");
			$.post("./config/query-data-insert.php",{id:id,deletegiave:1},function(data){
				if(data.status){
					$("#main").load("danhsachve.php");
				}
			},"json");
		}
	});
	$(".edit-giave-2d").click(function(){
		var id=$(this).attr("name");
		
		$("#"+id).show();
		$("#night").show();
	});
	$(".click-capnhatve").click(function(){
		
	   var id=$(this).attr("name").split("giave")[1];
	  var id2=$(this).attr("name");
	  var giave=parseInt($("#"+id2).val());
		
		
		$.post("./config/query-data-insert.php",{giave:giave,id:id,updategiave:1},function(data){
			
			if(data.status){
				$("#main").load("danhsachve.php");
			}
		},"json");
		
	});
	$(".close-update-ve").click(function(){
		var name=$(this).attr("name");
		$("#"+name).hide();
		$("#night").hide();
	});
});