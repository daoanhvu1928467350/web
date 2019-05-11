
<div class="col-xs-12 col-sm-12 margin-left padding bg-white">
<h2 class="h2-color text-align">Thêm mới sự kiện</h2>
<h5>1.Tên event:<span class="red">*</span></h5>
<div class="col-xs-12 col-sm-12 margin padding bg-white">
	<input class="form-control" id="title-event" value="" placeholder="Vui lòng nhập tên event" >
	<div id="error-tenevent" class="red"></div>
</div>
<h5>2.Thêm hình ảnh sự kiện:<span class="red">*</span></h5>
<div>
<i>(/*tỉ lệ hình ảnh 240x201*/)</i>
<div>
	<button class="btn btn-generation2" id="sukien-btn">Thêm ảnh sự kiện</button>
</div>
 <?php
	  $name="image-event/";
	$ten="event";
	  ?>

<?php
	if(isset($_GET['src'])){
		
		?>
		<div id="div-img-event-upload" style="display: block;">
		<img src="/doan/admin/<?=$_GET['src']?>" id="img-daidien" height="250" width="250">
		</div>
	
		<?php
	}else{
	?>
	<div id="div-img-event-upload">
		<img src="" id="img-daidien" height="250" width="250">
	</div>

<?php
	}
		?>
</div>
<h5>3.Thêm nội dung sự kiện:</h5>
<div class="col-sm-12" id="div-mota">
	<div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html"  >
		
	</iframe>
</div>
			<div >
			<button class="btn  btn-generation" id="btn-insert-event">Xong</button>
		</div>
		
		<div class="thuvien-anh" id="thuvien-anh-sukien">

<div  id="close-sukien" ><button type="button" class="close" data-dismiss="modal">&times;</button></div>
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
    <li class="nav-item" id="li-home-sukien">
      <a class="nav-link active" data-toggle="tab" href="#home-sukien">Thư viện ảnh</a>
    </li>
    <li class="nav-item" id="li-menu-sukien">
      <a class="nav-link" data-toggle="tab" href="#menu1-sukien">Upload file ảnh</a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
  
    <div id="home-sukien" class="container tab-pane active ">
     <br>
     <?php
		
		include("loadfile.php");
		?>
    </div>
    <div id="menu1-sukien" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     
     <form enctype="multipart/form-data" action="./process_file_upload.php" method="post">
 <input type="hidden" name="event" value="1">
	<input type="file" name="file-image"  value="Chọn tệp">
	<input type="submit"  name="submit" value="Upload ảnh sự kiện" class="btn btn-generation2">
</form>	
    </div>
    
  </div>
  
</div>
<button class="btn btn-generation" id="xong-event">Xong</button>
<div id="delete-img-sukien">
     
	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
			</div>
</div>
</div>
	<script src="js/insert-event-js.js"></script>
		<script src="js/iframe-js.js"></script>