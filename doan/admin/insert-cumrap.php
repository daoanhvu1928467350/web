<div class="col-sm-12 col-xs-12 bg-white padding margin-left">
<h2 class="h2-color ">Thông tin rạp</h2>
</div>
<div class="col-sm-12 col-xs-12 bg-white padding margin">

<form action="./" method="post">
 <fieldset>
 	<legend><h5 class="h2-color">Thêm dữ liệu cụm rạp</h5></legend>
  <div class="form-group ">
   
   	<label for="tencum">Tên cụm rạp:<span class="red">*</span></label>
    <input type="text" class="form-control " id="tencum" placeholder="Nhập tên cụm rạp vào đây" name="tencumrap" >
   	
   
  </div>
  <div id="error-cumrap" class="error">
  	
  </div>
  <input type="hidden" name="insert-data-cumrap" value="1">
  <button type="submit" class="btn btn-generation2" id="submit-cumrap">Tạo cụm rạp</button>
 </fieldset>
   	
  
   
</form>
<script>
	$(document).ready(function(){
		$("#submit-cumrap").click(function(e){
			
			var tencum=$("#tencum").val();
			
			a=false;
			if( tencum == ""){
				
				$("#error-cumrap").text("Vui lòng nhập tên cụm rạp");
				a=true;
			}
			else{
				$("#error-cumrap").text("");
			}
			
			if(a){
				e.preventDefault();
				
			}
			
			
		});
		
	});
</script>
</div>
<div class="col-sm-12 col-xs-12 bg-white padding margin">
	<?php
	include("insert-rapchieuphim.php");
	?>
</div>
<div class="col-sm-12 col-xs-12 bg-white padding margin">
	<?php
	include("insert-phongchieuphim.php");
	?>
</div>
