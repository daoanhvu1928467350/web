// JavaScript Document
$(document).ready(function(){
	
	$("#taolich").click(function(){
		var lichchieu={
		tenphim:'',
		thoiluong:0,
		suatphim:0
		
	};
		var arr= Array();
		var arr2=Array();
		var rp=$("#rp").val();
		var ngaychieu=$("#ngaychieu").val();
		var boolean=true;
		//var sophim=$("#sophim").val();
	   $(".suatphim").each(function(){
		   if($(this).val()===""){
			   boolean=false;
			    $(this).val(1);
			   alert("Vui lòng nhập đầy đủ suất chiếu");
			   
		   }
		   if(parseInt($(this).val())<=0){
			   boolean=false;
			   $(this).val(1);
			   alert("Vui lòng nhập tất cả các suất chiếu lớn hơn 0");
		   }
		 arr.push(parseInt($(this).val()));
	   });
		
		$(".select-calendar").each(function(){
			var id=$(this).val();
			
			arr2.push(id);
			
			
			
			
			//alert(time1);
			//alert(time+'xin chao');
		
		  
			//alert(i);
		});
	/*arr.sort().reverse().toString();
		arr2.sort().reverse().toString();*/
		if(boolean){
		$.post("./config/query-data-insert.php",{selectthoiluong:1,suatchieu:arr,id:arr2,idrap:rp,ngaychieu:ngaychieu},function(data){
				//$(".dulieu").val(data.data);
					//alert(time);"Đã cập nhật,vui lòng kiểm tra lại lịch chiếu phim "
				alert(data.data);
				if(data.status){
					alert(data.data);
					  window.history.pushState({}, "Hide", "./?listcalendar1=1");
				 location.reload();
				}
				
			},'json');
		
		}
	});
		
	$("#back").click(function(){
		window.history.back();
	});
});