<?php
require("config/model.php");
$model=new model();
$id=$_POST['id'];
$sql="select * from rapchieuphim where idrap=$id limit 1";

$data=$model->select($sql);
$row=$data->fetch_assoc();
$idcumrap=$row['idcumrap'];

?>
<input type="hidden" id="id" value="<?=$id?>">
<h2 class="h2-color text-align">Cập nhật rạp chiếu phim</h2>
<div class="col-xs-12 col-sm-12 margin padding bg-white" id="update-rap">
	<h5 class="h2-color">Cập nhật rạp chiếu phim</h5>

<div class="col-sm-12">

<?php
	$sql="select * from cumrap where idcumrap=$idcumrap";
	$data=$model->select($sql);
	if($data->num_rows>0){
		while($row1=$data->fetch_assoc()){
	?>
	<h5>1.Cụm rạp:  <span><?=$row1['namecumrap']?></span></h5>
	<?php
		}
	}
		?>

</div>
<fieldset class="col-sm-12">
	<lengend><h5>2.Thêm thông tin rạp</h5></lengend>
	<table class="table">
		<tr>
			<td>Tên rạp:</td>
			<td><input type="text" class="form-control" id="tenrap" value="<?=$row['namerap']?>"></td>
		</tr>
		<tr>
		<td>Địa chỉ:</td>
		<td><input type="text" placeholder="Địa chỉ rạp chiếu phim"  class="form-control" id="diachi" value="<?=$row['Addressrap']?>"></td>
		</tr>
		<tr>
		<td>Quận</td>
		<td><input type="text" placeholder="Quận"  class="form-control" id="quan" value="<?=$row['quan']?>"></td>
		</tr>
		<tr>
		<td>Thành phố</td>
		<td><input type="text" placeholder="Thành phố"  class="form-control" id="thanhpho" value="<?=$row['thanhpho']?>"></td>
		</tr>
		<tr>
		<td>Ngày mở rạp:</td>
		<td><input type="date" placeholder="Ngày mở rạp"  class="form-control" id="ngaymorap" value="<?=$row['ngaymorap']?>"></td>
		</tr>
		
	</table>
</fieldset>
<h5 class="col-sm-12">3.Ảnh rạp chiếu phim</h5>
<div class="col-sm-12 col-xs-12" id="thuvien-img-rapchieuphim"> 
	<button class="btn btn-generation2" id="btn-thuvien-rap-change">Cập nhật  ảnh rạp </button>
	
	
			<div id="img-update-rapchieuphim">
	
			<img src="<?=$row['image_daidien']?>" width="300" height="300" id="img-pr">
		</div>
			
</div>
<div  class="col-sm-12">
<button class="btn btn-generation2 " id="btn-taorap-change">Lưu</button>
</div>
<div class="thuvien-anh" id="thuvien-anh-rapchieuphim-change">

<div id="close-rapchieuphim-change" ><button type="button" class="close outline" data-dismiss="modal">&times;</button></div>
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
    <li class="nav-item" id="li-home-rapchieuphim-change">
      <a class="nav-link active" data-toggle="tab" href="#home">Thư viện ảnh</a>
    </li>
   <!-- <li class="nav-item" id="li-menu-rapchieuphim-change">
      <a class="nav-link" data-toggle="tab" href="#menu1">Upload file ảnh</a>
    </li>-->
    
  </ul>

<div class="tab-content" id="thuvien">
    <div id="home" class="container tab-pane active">
     <br>
     <?php
		$target="./image/image-rapchieuphim";
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./image/image-rapchieuphim/".$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-thuvien-rapchieuphim1">
			<img src=<?="/doan/admin/image/image-rapchieuphim/".$files?> height=100 width=100>
			</div>
			<?php
			}
		}
		}
		else{
			echo "<h5>Chưa có dữ liệu</h5>";
		}
		?>
    </div>
    <div id="menu1" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     <form method="post" enctype="multipart/form-data" action="process_file_upload.php">
     	<input type="file" name="file-img-rapchieuphim" value="Chọn tệp">
     	<input type="submit" class="btn btn-generation2" name="uploadrapchieuphim" value="Upload ảnh rạp chiếu phim">
     	</div>
     </form>
    </div>
    
  </div>
  <button class="btn btn-generation2" id="chonanh-rapchieuphim-change" >Xong</button>
</div>

</div>
	
	
</div>
<script src="js/edit-rap-js.js"></script>