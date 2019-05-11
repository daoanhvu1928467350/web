<div id="div-menu-reponsive">
	<div  class="div-reponsive-menu ">
	<a ><h3 class="h3-reponsive" id="phim-reponsive" ><i class="fas fa-chevron-right"></i>   Phim </h3></a>
	
	</div>
	<div class="display-menu-reponsive" id="element-phim-reponsive">
		<ul>
		<li>Phim đang chiếu</li>
		<li>Phim sắp chiếu</li>
		
	</ul>
	</div>
	<div  class="div-reponsive-menu ">
	<a><h3  class="h3-reponsive" id="rapchieuphim-reponsive"><i class="fas fa-chevron-right"></i>   Rạp chiếu phim</h3></a>
		<div id="element-rapchieuphim-reponsive" class="display-menu-reponsive">
			<ul>
		<li>Tất cả các rạp</li>
		<li>Rạp đặc biệt</li>
		<li>Rạp sắp mở</li>	
	</ul>
		</div>
	</div>
	
	<div  >
	<a><h3  class="h3-reponsive" id="thanhvien-reponsive" ><i class="fas fa-chevron-right"></i>   Thành viên</h3></a>
		<div  class="display-menu-reponsive" id="element-thanhvien-reponsive">
			<ul>
				<li>Tài khoản CL</li>
				<LI>Quyền lợi</LI>
			</ul>
		</div>
		</div>
</div>
<script>
	$("#tab-menu").ready(function(){
		
		$(".h3-reponsive").click(function(){
		var id=$(this).attr("id");
		//alert('xin chao');
		switch(id){
			case 'phim-reponsive':
				$("#element-phim-reponsive").slideToggle();
				if($("#phim-reponsive").find("svg").hasClass("svg-inline--fa fa-chevron-right fa-w-10")){
					
					$("#phim-reponsive").find("svg").removeClass("svg-inline--fa fa-chevron-right fa-w-10");
					$("#phim-reponsive").find("svg").addClass("svg-inline--fa fa-chevron-down fa-w-10");
				}
				else{
					
					$("#phim-reponsive").find("svg").removeClass("svg-inline--fa fa-chevron-down fa-w-14");
					$("#phim-reponsive").find("svg").addClass("svg-inline--fa fa-chevron-right fa-w-10");			

				}
				break;
			case 'rapchieuphim-reponsive':
				$("#element-rapchieuphim-reponsive").slideToggle();
				if($("#rapchieuphim-reponsive").find("svg").hasClass("svg-inline--fa fa-chevron-right fa-w-10")){
					
					$("#rapchieuphim-reponsive").find("svg").removeClass("svg-inline--fa fa-chevron-right fa-w-10");
					$("#rapchieuphim-reponsive").find("svg").addClass("svg-inline--fa fa-chevron-down fa-w-10");
				}
				else{
					
					$("#rapchieuphim-reponsive").find("svg").removeClass("svg-inline--fa fa-chevron-down fa-w-14");
					$("#rapchieuphim-reponsive").find("svg").addClass("svg-inline--fa fa-chevron-right fa-w-10");			

				}
				break;
			case 'thanhvien-reponsive':
				
				$("#element-thanhvien-reponsive").slideToggle();
				if($("#thanhvien-reponsive").find("svg").hasClass("svg-inline--fa fa-chevron-right fa-w-10")){
					
					$("#thanhvien-reponsive").find("svg").removeClass("svg-inline--fa fa-chevron-right fa-w-10");
					$("#thanhvien-reponsive").find("svg").addClass("svg-inline--fa fa-chevron-down fa-w-10");
				}
				else{
					
					$("#thanhvien-reponsive").find("svg").removeClass("svg-inline--fa fa-chevron-down fa-w-14");
					$("#thanhvien-reponsive").find("svg").addClass("svg-inline--fa fa-chevron-right fa-w-10");			

				}
				break;
			
				
				
		}
	});
	})
</script>