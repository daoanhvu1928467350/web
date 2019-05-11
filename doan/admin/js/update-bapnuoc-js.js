// JavaScript Document
$(document).ready(function(){
	$("#click-change-goicombo1").click(function(){
		var id=$("#id-loai").val();
		var name=$("#tencombo-change").val();
		if(name ===""){
			name=$("#tenloai-duphong").val();
		}
		var gia=$("#giacombo-change").val();
		if(gia ===""){
			gia=$("#giaduphong").val();
		}
		var content=$("#richtext1").contents().find("body").html();
		if(content.trim() === ""){
			content="'"+$("#p-detail").html()+"'";
		}
		else{
			content="'"+content+"'";	
		}
	  $.post("./config/query-data-insert.php",{name:name,gia:gia,content:content,id:id,updatebapnuoc:1},function(data){
		  if(data.status){
			  $("#main").load("loaibapnuoc.php");
		  }
		  else{
			  alert("Đã xảy ra lỗi");
		  }
	  },"json");
	});
});