// JavaScript Document

$(document).ready(function(){
	
	$(".item-selected-ticket ").on('click','.close-ticket',function(e){
		$("#font-ticket").removeClass("svg-inline--fa fa-caret-down fa-w-10");
			$("#font-ticket").addClass("svg-inline--fa fa-caret-up fa-w-10");
			$("#select-ngay").show();
		
			
		
		$(this).parent(this).remove();
		
	
	});	
			
	$("#selected-ngay").click(function(){
		
			$("#select-ngay").toggle();
		if($("#font-ticket").hasClass("svg-inline--fa fa-caret-down fa-w-10")){
			$("#font-ticket").removeClass("svg-inline--fa fa-caret-down fa-w-10");
			$("#font-ticket").addClass("svg-inline--fa fa-caret-up fa-w-10");
			
			
		}
		
		else{
				$("#font-ticket").removeClass("svg-inline--fa fa-caret-up fa-w-10");
			$("#font-ticket").addClass("svg-inline--fa fa-caret-down fa-w-10");
		
			
		}
		
	});
		
	$("#select-ngay").click(function(){
		
		var a=$(this).val();
		var a1="#"+a;
		var b=$("#select-ngay option:selected").text();
		if($('' +a1).length){
			
		}
			else{
		
		
		$(".item-selected-ticket ").append("<div class='item-tag' id='"+a+"'>"+b+"      <i class='fas fa-window-close close-ticket' ></i>"+"</div>");
		
			}
		$("#select-ngay").hide();
		if($("#font-ticket").hasClass("svg-inline--fa fa-caret-down fa-w-10")){
			$("#font-ticket").removeClass("svg-inline--fa fa-caret-down fa-w-10 ");
			$("#font-ticket").addClass("svg-inline--fa fa-caret-up fa-w-10 ");
				
			
		}
		
		else{
				$("#font-ticket").removeClass("svg-inline--fa fa-caret-up fa-w-10");
			$("#font-ticket").addClass("svg-inline--fa fa-caret-down fa-w-10 ");
		
			
		}
		
	});
	$("#giave").click(function(){
		
		var tagarr=Array();
		var i=0;
		$(".item-tag").each(function(){
			tagarr[i]=$(this).attr("id");
			i++;
		});
		var boolean=true;
		if(tagarr.length ==0){
			$("#error-chonngay").text("Vui lòng chọn ngày trong tuần");
			boolean=false;
		}
		else{
			$("#error-chonngay").text("");
			boolean=true;
		}
		
		var dotuoi=$("#select-ticket").val();
		var loaive=$("#loaive1").val();
		var giave=$("#giave1").val();
		if(giave ===""){
			$("#error-giave").text("Vui lòng nhập giá vé");
			boolean=false;
		}
		else if(parseInt(giave)<0){
			("#error-giave").text("Vui lòng nhập giá vé lớn hơn không");
			$("#giave1").val(0);
			boolean=false;
		}
		else{
			$("#error-giave").text("");
			boolean=true;
		}
		
		if(boolean){
		
			
		$.post("./config/query-data-insert.php",{tag:tagarr,dotuoi:dotuoi,giave:giave,loaive:loaive,insertgiave:1},function(data){
			if(data.status){
				alert("Thành công");
			}else{
				alert("Thất bại");
			}
		},"json");
		}else{
			alert('Đã xảy ra lỗi trong việc tạo giá vé');
		}
	});
	 $("#giave1").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
     
               return false;
    }
   });
});