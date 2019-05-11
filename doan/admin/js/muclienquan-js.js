// JavaScript Document
$(document).ready(function(){
	$("#click-theloai").click(function(){
		var name=$("#theloai").val();
		var boolean=true;
		if(name == ""){
			boolean=false;
			$("#error-theloai").text("Vui lòng nhập thể loại cần thêm vào đây");
		}else{
			$("#error-theloai").text("");
		}
		if(boolean){
		$.post("./config/query-data-insert.php",{theloai:1,name:name},function(data){
			if(data.status){
				alert("Thêm thể loại thành công");
			}
			else{
				alert("Thể loại đã tồn tại");
			}
		},"json");
		}
	});
	$("#click-dienvien").click(function(){
		var name=$("#dienvien").val();
		var boolean=true;
		if(name == ""){
			boolean=false;
			$("#error-dienvien").text("Vui lòng nhập diễn viên cần thêm vào đây");
		}else{
			$("#error-dienvien").text("");
		}
		if(boolean){
		$.post("./config/query-data-insert.php",{dienvien:1,name:name},function(data){
			if(data.status){
				alert("Thêm diễn viên thành công");
			}
			else{
				alert("Diễn viên đã tồn tại");
			}
		},"json");
		}
	});
	$("#click-daodien").click(function(){
		var name=$("#daodien").val();
		var boolean=true;
		if(name == ""){
			boolean=false;
			$("#error-daodien").text("Vui lòng nhập diễn viên cần thêm vào đây");
		}else{
			$("#error-daodien").text("");
		}
		if(boolean){
		$.post("./config/query-data-insert.php",{daodien:1,name:name},function(data){
			if(data.status){
				alert("Thêm đạo diễn thành công");
			}
			else{
				alert("Đạo diễn đã tồn tại");
			}
		},"json");
		}
	});
	$(".close-insert-dienvien").click(function(){
		$(".div-center-700").hide();
		$("#night").hide();
	});
	$("#click-dienvien2").click(function(){
			$(".div-center-700").show();
		$("#night").show();
	});
	$("#click-daodien2").click(function(){
			$("#many-daodien").show();
		$("#night").show();
	});
	
});