<?php
require("config/model.php");
$model=new model();
if(isset($_POST['id'])){
	$id=$_POST['id'];
$sql="select * from pr where id_pr=$id";
$data=$model->select($sql);
if($data->num_rows>0){
	$row=$data->fetch_assoc();
?>


<div class="col-xs-12 col-sm-12 margin padding bg-white">
<h2 class="h2-color text-align">Thay đổi quảng cáo</h2>
	<h5>1.Tên quảng cáo:<span class="red">*</span></h5>
<div class="col-xs-12 col-sm-12 margin padding bg-white">
	<input class="form-control" id="title-change-pr" value="<?=$row['namepr']?>" >
	<input type="hidden" value="<?=$row['namepr']?>" id="title-pr-duphong">
	<input type="hidden" id="id-pr" value="<?=$row['id_pr']?>">
	
</div>
<div id="error-tenquangcao" class="red">
		
	</div>
<h5>2.Hình ảnh quảng cáo:<span class="red">*</span></h5>
<div>
<i>(/*tỉ lệ hình ảnh 240x201*/)</i>
<div>
	<button class="btn btn-generation2" id="pr-change-btn">Thay đổi ảnh quảng cáo</button>
	<div id="img-change-pr">
		<img src="<?=$row['imagepr']?>"  height=200 width=300>
	</div>
</div>
</div>
<h5>3.Nội dung quảng cáo:</h5>
<div class="content-change-pr" style="background-color: #FCF6DC">
	
		<?php echo str_replace("'","",str_replace("'","",$row['contentpr']))?>
	
</div>

<div >
<b class="show-content-change">Thay đổi nội dung quảng cáo <i class="fas fa-caret-down " style="font-size: 18px;color:#FFA300"></i></b>
</div>
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
			<button class="btn  btn-generation" id="btn-update-pr">Lưu thay đổi</button>
		</div>
		
		<div class="thuvien-anh" id="thuvien-anh-change-pr">

<div  id="close-change-pr" ><button type="button" class="close" data-dismiss="modal">&times;</button></div>
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
    <li class="nav-item" id="li-home-pr">
      <a class="nav-link active" data-toggle="tab" href="#home-pr">Thư viện ảnh</a>
    </li>
    <!--<li class="nav-item" id="li-menu-pr">
      <a class="nav-link" data-toggle="tab" href="#menu1-pr">Upload file ảnh</a>
    </li>-->
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
    <div id="home-pr" class="container tab-pane active ">
     <br>
     <?php
		$target="./image/image-quangcao";
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./image/image-quangcao/".$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-event-thuvien1" id="<?=$files?>">
			<img src=<?="/doan/admin/image/image-quangcao/".$files?> height=100 width=100 >
			</div>
			<?php
			}
			}
		}
		?>
    </div>
    <div id="menu1-pr" class="container tab-pane fade">
    <br>
   <!-- <div id="form-upload-pr">
      <form method="post" enctype="multipart/form-data" action="process_file_upload.php">
     	<input type="file" name="filequangcao" value="Chọn tệp">
     	<input type="submit" class="btn btn-generation2" name="uploadquangcao" value="Upload ảnh quảng cáo">
     	</form>
    
    </div>-->
    
  </div>
  
</div>
<button class="btn btn-generation" id="xong-pr-change">Xong</button>
</div>
     <script src="js/pr-change-js.js"></script>
    <script src="js/iframe2-js.js"></script>
    
</div>
<?php
	
}
}
else {
	?>
	<script>
		  window.history.pushState({}, "Hide", "./");
				 location.reload();
</script>
	<?php
}
	?>