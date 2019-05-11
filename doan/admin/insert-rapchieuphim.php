<?php
require("config/model.php");
$model=new model();
?>
<h5 class="h2-color">Thêm mới rạp chiếu phim</h5>
<h5 class="col-sm-12 col-md-12">1.Chọn cụm rạp</h5>
<div class="col-sm-12 col-md-12">
<select id="select-cumrap" class="form-control" style="width: 50%">
<?php
	$sql="select * from cumrap";
	$data=$model->select($sql);
	if($data->num_rows>0){
		while($row=$data->fetch_assoc()){
		
	?>
	<option value="<?=$row['idcumrap']?>"><?=$row['namecumrap']?></option>
	<?php
		}
	}
		?>
</select>
</div>
<fieldset class="col-sm-12 col-md-12">
	<lengend><h5>2.Thêm thông tin rạp</h5></lengend>
	<table class="table">
		<tr>
			<td>Tên rạp:<span class="red">*</span></td>
			<td><input type="text" placeholder="tên rạp chiếu phim" class="form-control" id="tenrap"></td>
		</tr>
		<tr>
		<td>Địa chỉ:<span class="red">*</span></td>
		<td><input type="text" placeholder="Địa chỉ rạp chiếu phim"  class="form-control" id="diachi"></td>
		</tr>
		<tr>
		<td>Quận:<span class="red">*</span></td>
		<td><input type="text" placeholder="Quận"  class="form-control" id="quan"></td>
		</tr>
		<tr>
		<td>Thành phố:<span class="red">*</span></td>
		<td><input type="text" placeholder="Thành phố"  class="form-control" id="thanhpho"></td>
		</tr>
		<tr>
		<td>Ngày mở rạp:</td>
		<td><input type="date" placeholder="Ngày mở rạp"  class="form-control" id="ngaymorap"></td>
		</tr>
		
	</table>
</fieldset>
<h5 class="col-sm-12">3.Ảnh rạp chiếu phim</h5>
<div class="col-sm-12 col-xs-12" id="thuvien-img-rapchieuphim"> 
	<button class="btn btn-generation2" id="btn-thuvien-rap">Thêm ảnh rạp </button>
	
	<?php
		if(isset($_GET['src'])){
			?>
			<div id="img-uploaded-rapchieuphim">
			<img src=/doan/admin/<?=$_GET['src']?> width=300 height="300" id="img-pr">
		</div>
			<?php
		}
	else {
		?>
		<div id="img-uploaded-raphchieuphim">
				<img src="" width=300 height="300" id="img-pr">
		</div>
		<?php
	}
	
		?>
</div>
<div  class="col-sm-12">
<button class="btn btn-generation2 " id="btn-taorap">Tạo rạp chiếu phim</button>
</div>
<div class="thuvien-anh" id="thuvien-anh-rapchieuphim">

<div id="close-rapchieuphim" ><button type="button" class="close" data-dismiss="modal">&times;</button></div>
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
    <li class="nav-item" id="li-home-rapchieuphim">
      <a class="nav-link active" data-toggle="tab" href="#home">Thư viện ảnh</a>
    </li>
    <li class="nav-item" id="li-menu-rapchieuphim">
      <a class="nav-link" data-toggle="tab" href="#menu1">Upload file ảnh</a>
    </li>
    
  </ul>

<div class="tab-content" id="thuvien">
   <?php
	  $name="image-rapchieuphim/";
	$ten="rapchieuphim1";
	  ?>
    <div id="home" class="container tab-pane active">
     <br>
     <?php
		include("loadfile.php");
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
  <button class="btn btn-generation2" id="chonanh-rapchieuphim" >Xong</button>
  <div class="delete-img-rapchieuphim">
     
	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
			</div>
</div>

</div>
<script src="js/insert-rapchieuphim-js.js"></script>

