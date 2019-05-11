<?php
require("config/model.php");
$model=new model();

?>
<div class="col-xs-12 col-sm-12 margin-left padding bg-white">
<fieldset>
	<legend>
		<h2 class="h2-color">Thêm nội dung quảng cáo</h2>
	</legend>
	<h5 class="col-sm-12 col-xs-12">1.Tên quảng cáo:<span class="red">*</span></h5>
	<div class="col-sm-12 col-xs-12" id="div-img-pr">
		<input type="text" class="form-control " placeholder="Điền tên quảng cáo" id="tenpr">
		<div id="error-noidungquangcao" class="red">
			
		</div>
		
	</div>
	<h5 class="col-sm-12 col-xs-12">2.Thêm ảnh quảng cáo:<span class="red">*</span></h5>
	<div class="col-sm-12 col-xs-12" id="div-img-pr1">
		<button class="btn btn-generation2" id="btn-img">
		Thêm ảnh quảng cáo
	</button>
	<?php
		if(isset($_GET['src'])){
			?>
			<div id="image-inserted" style="display: block">
			<img src="/doan/admin/<?=str_replace("'","",str_replace("'","",$_GET['src']))?>" width=300 height="300" id="img-pr">
		</div>
			<?php
		}
		else{
			?>
			<div id="image-inserted">
			<img src="" width=300 height="300" id="img-pr">
		</div>
			<?php
		}
		?>
	</div>
	
		
	<h5 class="col-sm-12 col-xs-12">3.Thêm nội dung:</h5>
	<div class="col-sm-12 col-xs-12 mota-pr" id="div-mota">
	<div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html"  >
		
	</iframe>
	</div>
		
			<div class="col-sm-12 col-xs-12" >
			<button class="btn  btn-generation2" id="btn-insert-pr">Xong</button>
		</div>
</fieldset>
<div class="thuvien-anh" id="thuvien-anh">

<div  id="close" ><button type="button" class="close" data-dismiss="modal">&times;</button></div>
<!--<ul class="nav nav-tabs">
    <li class="li-item-thuvien active" name="#home" ><a data-toggle="tab" href="#home">Thư viện ảnh</a></li>
    <li class="li-item-thuvien" name="#menu1"><a data-toggle="tab" href="#menu1">Upload ảnh</a></li>
    
  </ul>
   <div class="tab-content">
    <div id="home" class="div-thuvien tab-pane fade in active ">
     <h2>thu vien anh</h2>
      
    </div>
    <div id="menu1" class="div-thuvien tab-pane fade">
      <h2>Thêm ảnh quảng cáo</h2>
    </div>
    
  </div>-->
  <ul class="nav nav-tabs">
    <li class="nav-item" id="li-home">
      <a class="nav-link active" data-toggle="tab" href="#home">Thư viện ảnh</a>
    </li>
    <li class="nav-item" id="li-menu">
      <a class="nav-link" data-toggle="tab" href="#menu1">Upload file ảnh</a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
   <?php
	  $name="image-quangcao/";
	  $ten="quangcao";
	  ?>
    <div id="home" class="container tab-pane active ">
     <br>
     <?php
		include("loadfile.php");
		?>
    </div>
    <div id="menu1" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     <form method="post" enctype="multipart/form-data" action="process_file_upload.php">
     	<input type="file" name="filequangcao" value="Chọn tệp">
     	<input type="submit" class="btn btn-generation2" name="uploadquangcao" value="Upload ảnh quảng cáo">
     	</form>
     	</div>
     
    </div>
    
  </div>
  <button class="btn btn-generation" id="xong">Xong</button>
  <div id="delete-img-quangcao">
     
	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
</div>
</div>
</div>
<script src="js/iframe-js.js"></script>
<script src="js/pr-js.js"></script>

