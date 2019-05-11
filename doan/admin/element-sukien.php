<?php
require("config/model.php");
$model=new model();
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$sql="select * from event where id_event=$id limit 1";
	$data=$model->select($sql);
	
	if($data->num_rows>0){
	$row=$data->fetch_assoc();
		?>
		<div class="col-xs-12 col-sm-12 margin-left padding bg-white">
<h2 class="h2-color text-align">Thay đổi sự kiện</h2>
<h5>1.Tên event:<span class="red">*</span></h5>
<div class="col-xs-12 col-sm-12 margin padding bg-white">
	<input class="form-control" id="title-change-event" value="<?=$row['nameevent']?>" >
	<input type="hidden" value="<?=$row['nameevent']?>" id="title-duphong">
	<input type="hidden" id="id-event" value="<?=$row['id_event']?>">
	<div class="red" id="err-tensukien">
		
	</div>
</div>
<h5>2.Hình ảnh sự kiện:</h5>
<div>
<i>(/*tỉ lệ hình ảnh 240x201*/)</i>
<div>
	<button class="btn btn-generation2" id="sukien-change-btn">Thay đổi ảnh sự kiện</button>
	<div id="img-change-event">
		<img src="<?=$row['image_event']?>"  height=200 width=300>
	</div>
</div>
</div>
<h5>3.Nội dung sự kiện:</h5>
<div class="content-change-event">
	<?=$row['content_event']?>
</div>
<div ><b id="show-content-change" class="show-content-change">Thay đổi nội dung sự kiện   <i class="fas fa-caret-down " style="font-size: 18px;color:#FFA300"></i></b></div>
<div class="col-sm-12 div-mota">
	<div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
		 
			<iframe id="richtext2" name="richtext2" frameborder="1" src="iframe2.html"  >
	      
	</iframe>

	
		  
</div>
			<div >
			<button class="btn  btn-generation" id="btn-update-event">Lưu thay đổi</button>
		</div>
		
		<div class="thuvien-anh" id="thuvien-anh-change-sukien">

<div  id="close-change-sukien" ><button type="button" class="close" data-dismiss="modal">&times;</button></div>
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
    <!--<li class="nav-item" id="li-menu-sukien">
      <a class="nav-link" data-toggle="tab" href="#menu1-sukien">Upload file ảnh</a>
    </li>-->
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
    <div id="home-sukien" class="container tab-pane active ">
     <br>
     <?php
		$target="./image/image-event";
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./image/image-event/".$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-event-thuvien1" id="<?=$files?>">
			<img src=<?="/doan/admin/image/image-event/".$files?> height=100 width=100 >
			</div>
			<?php
			}
			}
		}
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
<button class="btn btn-generation" id="xong-event-change">Xong</button>
</div>
</div>
    <script src="js/iframe2-js.js"></script>
	<script src="js/element-sukien-js.js"></script>
		<?php
	}
}
else{
	?>
	<script>
		  window.history.pushState({}, "Hide", "./");
				 location.reload();
</script>
	<?php
}
?>