// JavaScript Document
$(document).ready(function(){
	$(".delete-loaive").click(function(){
		var name=$(this).attr("name");
		var value=confirm("Bạn có chắc muốn xóa loại vé này");
		if(value){
			$.post("./config/query-data-insert.php",{id:name,deleteloaive:1},function(data){
				if(data.status){
					$("#main").load("loaibapnuoc.php");
				}
				else{
					alert('Đã xảy ra lỗi');
				}
			},"json");
		}
	});
	$(".delete-bapnuoc").click(function(){
		var name=$(this).attr("name");
		var value=confirm("Bạn có chắc muốn xóa bắp nước này");
		if(value){
			$.post("./config/query-data-insert.php",{id:name,deletebapnuoc:1},function(data){
				if(data.status){
					$("#main").load("loaibapnuoc.php");
				}
				else{
					alert('Đã xảy ra lỗi');
				}
			},"json");
		}
	});
	$(".edit-loaive").click(function(){
		var name=$(this).attr("name");
		$("#"+name).show();
		$("#night").show();
	});
	$(".close-loaive").click(function(){
			var name=$(this).attr("name");
		$("#"+name).hide();
		$("#night").hide();
	});
	$(".click-update-loaive").click(function(){
		
		var name=$(this).attr("name");
		var id=$(this).attr("name").split("inputloaive")[1];
		var tenloai=$("#"+name).val();
		var boolean=true;
		if(tenloai==""){
			alert("Vui lòng nhập tên loại vé");
			$("#"+name).css("border","1px solid red");
			boolean=false;
		}
		else{
			boolean=true;
			$("#"+name).css("border","1px solid #FFA300");
		}
		if(boolean){
		$.post("./config/query-data-insert.php",{id:id,tenloai:tenloai,updateloaive:1},function(data){
			
			if(data.status){
				$("#main").load("loaibapnuoc.php");
				$("#night").hide();
			}
			else{
				alert("Đã xảy ra lỗi");
			}
		},"json");
		}
	});
	
});