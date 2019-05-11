// JavaScript Document
$(document).ready(function(){
	$("#img-icon").click(function(){
		
			
		if(!$("#menu-horizontal").is(":visible")){
		$("#menu-horizontal").width(0);
			$("#menu-horizontal").show();
			$("#menu-horizontal").animate({'width':+449.25},"toggle");
			$("#menu-horizontal").removeClass("col-sm-3");
			$("#menu-vertical").css("z-index",'101');
			$("#main").removeClass("col-sm-12");
			$("#main").removeClass("col-sm-11");
			$("#main").addClass("col-sm-9");
			$("#h3-header").show();
			$(".text-component").fadeIn(2000);
			$("#menu-horizontal").css("z-index",'100');
			$(" .active").css("display","block");
			
		}
		else{
			
			if($(window).width()<=768){
				$("#menu-vertical").css("z-index",'101');
				$(" .active").css("display","none");
			}else{
				$("#menu-vertical").css("z-index",'0');
			}
			
		if($("#menu-horizontal").width() === 112){
			
				
			
          //$(this).animate({'margin-left':+300},"toggle");
			$("#menu-vertical").removeClass("col-sm-11");
			$("#menu-vertical").addClass("col-sm-9");
			$("#img-header-horizontal").css("height","auto","width","auto");
			$("#img-header-horizontal").css("margin","80px");
			$("#img-header-horizontal").css("margin-top","5px");
			$("#img-header-horizontal").css("margin-bottom","0px");
			$("#main").removeClass("col-sm-11");
			$("#main").addClass("col-sm-9");
			
			$("#h3-header").show();
			$(".text-component").fadeIn(2000);
			
			$("#menu-horizontal").animate({'width':+337.25},"toggle");
			
		}else{
		if($("#menu-horizontal").width()===0){
				$("#menu-horizontal").animate({'width':+449.25},"toggle");
			   
			$(" .active").css("display","block");
		        $("#element-horizontal").css("margin-top","30px");
			$("#img-header-horizontal").css("height","auto","width","auto");
			$("#img-header-horizontal").css("margin","80px");
			$("#img-header-horizontal").css("margin-top","5px");
			$("#img-header-horizontal").css("margin-bottom","0px");
			$("#main").removeClass("col-sm-11");
			$("#main").removeClass("col-sm-12");
			$("#main").addClass("col-sm-9");
			$("#h3-header").show();
			$(".text-component").show();
			    
			}else{
			$(".slide").hide();
			
			//$(this).animate({'margin-left':},"toggle");
			$("#menu-vertical").removeClass("col-sm-9");
			$("#menu-vertical").addClass("col-sm-11");
			$("#img-header-horizontal").css("height","34px","width","34px");
			$("#img-header-horizontal").css("margin","0px");
			$("#img-header-horizontal").css("margin-left","35px");
			
			$("#main").removeClass("col-sm-9");
			$("#main").addClass("col-sm-11");
			$("#h3-header").hide();
			
			$(".text-component").hide();
			if($(window).width()<=768){
					$("#menu-horizontal").animate({'width':+0},"toggle");
				$(".active").css("display","none");
				
				$("#main").removeClass("col-sm-9");
			$("#main").addClass("col-sm-12");
				$("#h3-header").hide();
			$(".text-component").fadeOut(0);
				
			}else{
			$("#menu-horizontal").animate({'width':+112},"toggle");
				
			}
			}
		}
		}
	});
	$(".component-menu-horizontal").click(function(){
		$(".component-menu-horizontal").removeClass("active");
		$(this).addClass("active");
		var id=$(this).attr("id");
		if(id==="about-component"){
			 window.history.pushState({}, "Hide", "./?about-web=1");
			$("#main").load('about-component.php');
		}
		else if(id==="listfilm-component"){
		  /*	$("#main").load('listfilm.php');
			window.history.pushState({}, "Hide", "./?list-film=1");*/
			if($("#category-film").is(":visible")){
			$(".slide").slideUp();
			
			}else{
				$(".slide").hide();
				$("#category-film").slideToggle("slow");
			}
			
			
		}
		else if(id==="event-component"){
			/* window.history.pushState({}, "Hide", "./?event=1");
			$("#main").load('event.php');*/
			if($("#event-film").is(":visible")){
			
			$("#event-film").slideUp();
			}else{
				$(".slide").hide();
			$("#event-film").slideToggle("slow");
			}
		}
		else if(id==="rapchieuphim-component"){
			if($("#list-rapchieuphim").is(':visible')){
			
			$("#list-rapchieuphim").slideUp();
			}else{
				$(".slide").hide();
			$("#list-rapchieuphim").slideToggle("slow");
			}
		}
		else if(id ==="promotional-component"){
			if($("#list-promotional").is(":visible")){
			
			$("#list-promotional").slideUp();
			}else{
				$(".slide").hide();
			$("#list-promotional").slideToggle("slow");
			}
		}
		else if(id === "calendar-component"){
			if($("#list-calendar").is(":visible")){
			$("#list-calendar").slideUp();
				
			}else{
					$(".slide").hide();
			$("#list-calendar").slideToggle("slow");
			}
		}
		else if(id ==="user-component"){
			if($("#list-user").is(":visible")){
			$("#list-user").slideUp();
			}else{
			$(".slide").hide();
			$("#list-user").slideToggle("slow");
			}
		}
		else if(id === "ticket-component"){
			if($("#list-ticket").is(":visible")){
		      $("#list-ticket").slideUp();
			}else{
			$(".slide").hide();
			$("#list-ticket").slideToggle("slow");
			}
		}
		else if(id === "gift"){
			if($("#gift-element").is(":visible")){
			$("#gift-element").slideUp();
			}else{
			$(".slide").hide();
			$("#gift-element").slideToggle("slow");
			}
		}
		else{
			 window.history.pushState({}, "Hide", "./");
			  location.reload();
		}
	});
	$(".li-film").click(function(){
		
		var a=$(this).attr("id");
		 if(a ==="themphimmoi"){
			  window.history.pushState({}, "Hide", "./?themmoiphim=1");
			  location.reload();
			 /* $("#main").load('insert-film.php');
			  $(".slide ul li").css("color","white");
			 $("#themphimmoi").css("color","#AEAFAE");*/
			
		 }
		  else if(a === "insertevent"){
			  window.history.pushState({}, "Hide", "./?insertevent=1");
			   location.reload();
			   
			 /* $("#main").load("event.php");
			  $(".slide ul li").css("color","white");
			  $("#insertevent").css("color","#AEAFAE");*/
		  }
		else if(a === "themcumrap"){
			 window.history.pushState({}, "Hide", "./?insert-cumrap=1");
			/*$("#main").load("insert-cumrap.php");
			$(".slide ul li").css("color","white");
			  $("#themcumrap").css("color","#AEAFAE");*/
			 location.reload();
		}
		else if(a === "themrapchieuphim"){
			 window.history.pushState({}, "Hide", "./?insert-rapchieuphim=1");
			 location.reload();
			/*$("#main").load("insert-rapchieuphim.php");
			$(".slide ul li").css("color","white");
			  $("#themrapchieuphim").css("color","#AEAFAE");*/
		}
		else if(a === "themphongchieuphim"){
			 window.history.pushState({}, "Hide", "./?insert-phongchieuphim=1");
			 location.reload();
		}
		else if(a === "insertquangcao"){
			 window.history.pushState({}, "Hide", "./?insert-quangcao=1");
			location.reload();
		}
		else if(a=== "insert-calendar"){
			 window.history.pushState({}, "Hide", "./?insert-showtimes=1");
			location.reload();
		}
		else if(a ==="naptien"){
			window.history.pushState({}, "Hide", "./?naptien-user=1&&page=1");
			location.reload();
		}
		else if( a === "insert-ticket"){
			window.history.pushState({}, "Hide", "./?insert-ticket=1");
			location.reload();
		}
		else if(a === "insert-kind-ticket"){
			window.history.pushState({}, "Hide", "./?insert-kind-ticket=1");
			location.reload();
		}
		else if(a === "themgoicombo"){
			window.history.pushState({}, "Hide", "./?themgoicombo=1");
			location.reload();
		}
		else if(a ==="phimdangchieu"){
				window.history.pushState({}, "Hide", "./?phimdangchieu=1");
			location.reload();
		}
		else if(a ==="themthongtinrap"){
			window.history.pushState({}, "Hide", "./?thongtinrap=1");
			location.reload();
		}
		else if(a === "muclienquan"){
			window.history.pushState({}, "Hide", "./?muclienquan=1");
			location.reload();
		}
		else if(a ==="listrapchieuphim"){
			window.history.pushState({}, "Hide", "./?listrapchieuphim=1");
			location.reload();
		}
		else if(a === "list-calendar1"){
			window.history.pushState({}, "Hide", "./?listcalendar1=1");
			location.reload();
		}
		else if(a === "themthongtinve"){
			window.history.pushState({}, "Hide", "./?themthongtinve=1");
			location.reload();
		}
		else if(a === "danhsachve"){
			window.history.pushState({}, "Hide", "./?danhsachve=1");
			location.reload();
		}
		else if(a === "history-user-element"){
				window.history.pushState({}, "Hide", "./?history-user-element=1");
			location.reload();
		}
		else if(a === "listquangcao"){
			window.history.pushState({}, "Hide", "./?listquangcao=1");
			location.reload();
		}
		else if(a === "listevent"){
			window.history.pushState({}, "Hide", "./?danhsachsukien=1");
			location.reload();
		}
		else if(a ==="loaibapnuoc"){
			window.history.pushState({}, "Hide", "./?loaibapnuoc=1");
			location.reload();
		}
		else if(a === "daodiendienvien"){
			window.history.pushState({}, "Hide", "./?dddv=1&&page=1");
			location.reload();
		}
		else if(a === "danhsachdienvien"){
			window.history.pushState({}, "Hide", "./?dv=1&&page=1");
			location.reload();
		}
		else if(a === "danhsachtheloai"){
			window.history.pushState({}, "Hide", "./?listtheloai=1&&page=1");
			location.reload();
		}
		else if(a ==="thequatang"){
				window.history.pushState({}, "Hide", "./?thequatang=1");
			location.reload();
		}
		else if(a === "listcumrap"){
				window.history.pushState({}, "Hide", "./?listcumrap=1");
			location.reload();
		}
		else{
			
		}
	});
	
});