// JavaScript Document
$(document).ready(function(){
	$("#div-btn-about #btn-about-component").click(function(){
	
		var content="'"+$("#richtext1").contents().find("body").html()+"'";
		var selection =$("#selection-about").val();
		$.post(
			"./update-about-component.php",{content:content,selection:selection},function(data){
				
				if(data.status===true){
					alert('Cập nhật thành công');
					location.reload();
				}
			},"json");
	});
});