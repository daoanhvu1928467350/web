// JavaScript Document
$(document).ready(function(){
	var giaarr=Array();
	var giacombo=Array();
	var j=0;
	$(".giatien1").each(function(){
		giaarr[j]=parseInt($(this).text());
		j++;
	});
	$("#giaarr").val(giaarr);// mang gia tien ve
	var j1=0;
	$(".giatien2").each(function(){
		giacombo[j1]=parseInt($(this).text());
		j1++;
	});
	$("#giacomboarr").val(giacombo);// mang gia ve combo
	
	
	
	$(".input-datve").keyup(function(){
		var a=true;
		$(".input-datve").each(function(){
			if(parseInt($(this).val())!==0){
				a=false;
			}
		});
		$(".input-doan").each(function(){
				if($(this).val()===""){
				$("#btn-tieptuc").prop("disabled",false);
					a=true;
				}
			});
		if(a || $(this).val()==="" ){
			
			$("#btn-tieptuc").prop("disabled",true);
		}
		else{
			
			
		
			$("#btn-tieptuc").prop("disabled",false);
		}
	});
	$(".input-doan").keyup(function(){
		
		if($(this).val()==="" ){
			
			$("#btn-tieptuc").prop("disabled",true);
		}
		else{
			
		
			$(".input-datve").each(function(){
				if(parseInt($(this).val())>0){
				$("#btn-tieptuc").prop("disabled",false);
					
				}
			});
			
			
		}
	});
	$(".plus1").click(function(){
		var name=$(this).attr("name");
		
		var a=parseInt($(".input-datve").eq(name).val())+1;
		if(isNaN(a)){
			a=0;
		}
		if(a>0){
			$("#btn-tieptuc").prop("disabled",false);
		}
		else{
			$("#btn-tieptuc").prop("disabled",true);
		}
		$(".input-datve").eq(name).val(a);
		var soluong=parseInt($(".input-datve").eq(name).val());
		var giatien=parseInt($(".giatien1").eq(name).text());
		var tong=soluong*giatien;
		var tongdigits=tong*1000;
		$(".tonggia1").eq(name).text(digits(tongdigits));
		var tonggia1=0;
	
		$(".tonggia1").each(function(){
			var a=$(this).text().replace(/,/g,"");
			
			tonggia1+=parseInt(a);
			
		});
		
		$("#tong1").text(digits(tonggia1));
		$("#tong").text(digits(parseInt($("#tong1").text().replace(/,/g,""))+parseInt($("#tong2").text().replace(/,/g,""))));
		$("#tong-input").val($("#tong").text().replace(/,/g,""));
		var soluongvearr=Array();
		var k=0;
		$(".input-datve").each(function(){
			soluongvearr[k]=$(this).val();
			k++;
		});
		$("#soluongve").val(soluongvearr);
	});
	$(".minus1").click(function(){
		var name=$(this).attr("name");
		
		
		var a=parseInt($(".input-datve").eq(name).val())-1;
		if(isNaN(a)){
			a=0;
		}
		
		
		if(a<0){
			$(".input-datve").eq(name).val(0);
			
		}
		else{
		$(".input-datve").eq(name).val(a);
		}
		var a1=false;
		$(".input-datve").each(function(){
			if(parseInt($(this).val())!==0){
				a1=true;
			}
		});
			
			if(a1){
				$("#btn-tieptuc").prop("disabled",false);
			}
			else{
			$("#btn-tieptuc").prop("disabled",true);
			}
		var soluong=parseInt($(".input-datve").eq(name).val());
		var giatien=parseInt($(".giatien1").eq(name).text().replace(/,/g,""));
		
		var tong=soluong*giatien;
		$(".tonggia1").eq(name).text(digits(tong));
		var tonggia1=0;
		$(".tonggia1").each(function(){
			tonggia1+=parseInt($(this).text().replace(/,/g,""));
		});
		
		$("#tong1").text(digits(tonggia1));
		$("#tong").text(digits(parseInt($("#tong1").text().replace(/,/g,""))+parseInt($("#tong2").text().replace(/,/g,""))));
		$("#tong-input").val($("#tong").text().replace(/,/g,""));
		var soluongvearr=Array();
		var k=0;
		$(".input-datve").each(function(){
			soluongvearr[k]=$(this).val();
			k++;
		});
		$("#soluongve").val(soluongvearr);
	});
	$(".plus").click(function(){
		var name=$(this).attr("name");
		var a=parseInt($(".input-doan").eq(name).val())+1;
		if(isNaN(a)){
			a=0;
		}
		
		$(".input-doan").eq(name).val(a);
		var soluong=parseInt($(".input-doan").eq(name).val());
		var giatien=parseInt($(".giatien2").eq(name).text().replace(/,/g,""));
		var tong=soluong*giatien;
		$(".tonggia2").eq(name).text(digits(tong));
		var tonggia2=0;
		$(".tonggia2").each(function(){
			tonggia2+=parseInt($(this).text().replace(/,/g,""));
		});
		$("#tong2").text(digits(tonggia2));
		$("#tong").text(digits(parseInt($("#tong1").text().replace(/,/g,""))+parseInt($("#tong2").text().replace(/,/g,""))));
		$("#tong-input").val($("#tong").text().replace(/,/g,""));
		var soluongcomboarr=Array();
		var k=0;
		$(".input-doan").each(function(){
			soluongcomboarr[k]=$(this).val();
			k++;
		});
		$("#soluongcombo").val(soluongcomboarr);
		var combo=Array();
	$(".input-doan").each(function(){
		if(parseInt($(this).val())!==0){
			var id=$(this).attr("id");
			combo[id]=$(".title-combo").eq(id).text()+"("+$(this).val()+")";
				
		}
	});
		$(".combo-datve").text(combo);
	});
	$(".minus").click(function(){
		var name=$(this).attr("name");
		var a=parseInt($(".input-doan").eq(name).val())-1;
		if(isNaN(a)){
			a=0;
		}
		
		if(a<0){
			$(".input-doan").eq(name).val(0);
		}
		else{
		$(".input-doan").eq(name).val(a);
		}
		var soluong=parseInt($(".input-doan").eq(name).val());
		var giatien=parseInt($(".giatien2").eq(name).text().replace(/,/g,""));
		var tong=soluong*giatien;
		
		$(".tonggia2").eq(name).text(digits(tong));
		var tonggia2=0;
		$(".tonggia2").each(function(){
			tonggia2+=parseInt($(this).text());
		});
		$("#tong2").text(digits(tonggia2));
		$("#tong").text(digits(parseInt($("#tong1").text().replace(/,/g,""))+parseInt($("#tong2").text().replace(/,/g,""))));
		$("#tong-input").val($("#tong").text().replace(/,/g,""));
		var soluongcomboarr=Array();
		var k=0;
		$(".input-doan").each(function(){
			soluongcomboarr[k]=$(this).val();
			k++;
		});
		$("#soluongcombo").val(soluongcomboarr);
			var combo=Array();
	$(".input-doan").each(function(){
		if(parseInt($(this).val())!==0){
			var id=$(this).attr("id");
			combo[id]=$(".title-combo").eq(id).text()+"("+$(this).val()+")";
				
		}
	});
		$(".combo-datve").text(combo);
		
	});
	$(".input-datve").bind('input',function(){
		
		var id=$(this).attr("id");
		var a=parseInt($(".input-datve").eq(id).val());
		var giatien1=parseInt($(".giatien1").eq(id).text().replace(/,/g,""));
		var tongtien=a*giatien1;
		if(isNaN(tongtien)){
			$(".tonggia1").eq(id).text(0);
			$("#tong1").text(0);
			
		}
		else{
	$(".tonggia1").eq(id).text(digits(tongtien));
			
			var tonggia1=0;
		$(".tonggia1").each(function(){
			tonggia1+=parseInt($(this).text().replace(/,/g,""));
		});
		$("#tong1").text(digits(tonggia1));
		$("#tong").text(digits(parseInt($("#tong1").text().replace(/,/g,""))+parseInt($("#tong2").text().replace(/,/g,""))));
		
		}
		
		$("#tong-input").val($("#tong").text().replace(/,/g,""));
		var soluongvearr=Array();
		var k=0;
		$(".input-datve").each(function(){
			soluongvearr[k]=$(this).val();
			k++;
		});
		$("#soluongve").val(soluongvearr);
	});
	$(".input-doan").bind('input',function(){
		var id=$(this).attr("id");
		var a=parseInt($(".input-doan").eq(id).val());
		var giatien1=parseInt($(".giatien2").eq(id).text().replace(/,/g,""));
		var tongtien=a*giatien1;
		if(isNaN(tongtien)){
			$(".tonggia2").eq(id).text(0);
			$("#tong2").text(0);
		}
		else{
	$(".tonggia2").eq(id).text(digits(tongtien));
				var tonggia2=0;
		$(".tonggia2").each(function(){
			tonggia2+=parseInt($(this).text().replace(/,/g,""));
		});
			$("#tong2").text(digits(tonggia2));
		}
		$("#tong").text(digits(parseInt($("#tong2").text().replace(/,/g,""))+parseInt($("#tong1").text().replace(/,/g,""))));
		$("#tong-input").val($("#tong").text().replace(/,/g,""));
		//$("#tong-input").val($("#tong").text());
		var soluongcomboarr=Array();
		var k=0;
		$(".input-doan").each(function(){
			soluongcomboarr[k]=$(this).val();
			k++;
		});
		$("#soluongcombo").val(soluongcomboarr);
			var combo=Array();
	$(".input-doan").each(function(){
		if(parseInt($(this).val())!==0){
			var id=$(this).attr("id");
			combo[id]=$(".title-combo").eq(id).text()+"("+$(this).val()+")";
				
		}
	});
		$(".combo-datve").text(combo);
	});
	$(".allownumericwithdecimal").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
	

 $(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
		function digits(str){ 
    str += '';
    return str.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}
	
	
});


