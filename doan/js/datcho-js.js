// JavaScript Document
$(document).ready(function(){
	var i=0;
	var arr=Array();
	var status="";
	var j1=0;
	$("#btn-tieptuc-datcho").prop("disabled",true);
	
	$(".li-item-datcho").click(function(){
		
		var count=0;
			var id=$(this).attr("id");
		if(!$("#"+id).hasClass('color-phanbiet-red')){
		var soluongve=$("#soluongve-datcho").val();
		if($(this).hasClass("red")){
			$(this).removeClass("red");
		    for( var i1 = arr.length-1; i1--;){
     if ( arr[i1] === id)
		 {
		 arr.splice(i1, 1);
		 }
              }
			i--;
		}else{
		//$(".li-item-datcho").removeClass("red");
	
		if(i<soluongve){
			
			
			$(this).addClass("red");
			arr[i]=id;
			//$(this).addClass("red");
			
			i++;
		}
		else{
			
			if($(".red:first").attr("id")===arr[0]){
				$(".red:first").removeClass("red");
			}
			else{
				$(".red").each(function(){
					var id1=$(this).attr("id");
					if(id1===arr[0]){
						$(this).removeClass("red");
					}
				});
			}
			
			
			$(this).addClass("red");
			
			var j=0;
			var last=arr.pop();
			for(j;j<arr.length;j++){
				arr[j]=arr[j+1];
			      if(j===arr.length-1){
					  arr[j]=last;
				  }
			}
			arr[arr.length]=$(this).attr("id");
			
		}
		}
		$("#ghe").html(arr.join(","));
		$("#gheso").val(arr.join(","));
		$(".red").each(function(){
			count++;
		
			if(count===parseInt(soluongve)){
					
				$("#btn-tieptuc-datcho").prop("disabled",false);
			}
			else{
				$("#btn-tieptuc-datcho").prop("disabled",true);
			}
		});
		}
	});
});
