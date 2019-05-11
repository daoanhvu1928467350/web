
<?php
require("config/model.php");
$model=new model();
?>
<?php
	$id=$_GET['id'];
	$sql="select * from listfilm where id=$id limit 1 ";
$sql1="select * from theloai_listfilm inner join theloaiphim on theloaiphim.id_theloai=theloai_listfilm.id_theloai and theloai_listfilm.id=$id ";
$data1=$model->select($sql1);
$arraytheloai=array();
$j=0;
while($row1=$data1->fetch_assoc()){
	$arraytheloai[$j]=$row1['tentheloai'];
	
}
$theloai=implode(",",$arraytheloai);
$sql2="select * from dienvien_listfilm inner join dienvien on dienvien.id_dienvien=dienvien_listfilm.id_dienvien and dienvien_listfilm.id=$id";
$data2=$model->select($sql2);
$arrdienvien=array();
$j1=0;
while($row2=$data2->fetch_assoc()){
	$arrdienvien[$j1]=$row2['tendienvien'];
}
$dienvien=implode(",",$arrdienvien);

	$data=$model->select($sql);
	if($data->num_rows>0){
		while($row=$data->fetch_assoc()){
			$thoiluong=$row['thoiluong'];
			$loaiphim=$row['id_loai'];
			$ngonngu=$row['ngonngu'];
			$daodien=$row['daodien'];
			$ngaykhoichieu=$row['ngaykhoichieu'];
			$ngayketthuc=$row['ngayketthuc'];
			$sql4="select * from daodien where id_daodien=$daodien limit 1";
			$data4=$model->select($sql4);
			$row3=$data4->fetch_assoc();
			
	?>
<div id="chitietphim" class="col-sm-12 row">
<div id="element-chitiet" class="col-sm-6">
<div id="thongtinphim" class="col-sm-12 row non-row">
<input  type="hidden" value="<?=$id?>" id="idphim-lichchieu">
<div id="img-thongtinphim" class="col-sm-6">
	<img src="<?php echo $row['anhdaidien']?>" class="img-chitietphim">
	<div class="modal-footer">
	<button id="play-trailer-phim" data-toggle="modal" data-target="#myModal"><i class="fas fa-play" style="font-size: 60px;color: white"></i></button>
	
	
	</div>
</div>
<div id="thongtinphim-chitiet" class="col-sm-6">
	<h2 class="h2-color"><?=$row['namefilm']?></h2>
	<div id="content-short">
	   <ul class="list-type" id="ul-chitietthongtin">
		<li><b>Thời lượng:</b> <?=$row['thoiluong']?></li>
		<li><b>Ngày khởi chiếu:</b> <?=date("d-m-Y",strtotime($row['ngaykhoichieu']))?></li>
		<li><b>Ngôn ngữ:</b><?=$ngonngu?></li>
		<li><b>Đạo diễn:</b><?=$row3['tendaodien']?></li>
		<li><b>Diễn viên:</b><?=$dienvien?></li>
		<li><b>Thế loại:</b><?=$theloai?></li>
		</ul>
	</div>
</div>	
</div>

	</div>
	<div id="giave" class="col-sm-6">
		<h5>Giá vé</h5>
		<ul class="nav nav-pills" role="tablist">
   <?php
		$arrloaive=array();
			$k=0;
		$sql5="select * from loaive";
			$data=$model->select($sql5);
			if($data->num_rows>0){
				$active=$data->fetch_assoc();
				?>
				 <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home"><?=$active['tenloai']?></a>
    </li>
				<?php
			}
			while($row=$data->fetch_assoc()){
		?>
   
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu<?=$row['id_loai']?>"><?=$row['tenloai']?></a>
    </li>
    <?php
			$arraytheloai[$k]=array("id"=>$row['id_loai'],"tenloai"=>$row['tenloai'],"image"=>$row['image']);
			$k++;
			}
				?>
    
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <img src="<?=$active['image']?>" id="img-giave">
    </div>
    <?php
					foreach($arraytheloai as $key){
					?>
    <div id="menu<?=$key['id']?>" class="container tab-pane fade"><br>
    <img src="<?=$key['image']?>" id="img-giave">
    </div>
    <?php
					}
						?>
  </div>


		<!--<ul class="list-type">
			<li>2D</li>
			<li></li>
		</ul>
		<img src="image/2d_1539069218310.png" id="img-giave">-->
	</div>
	<div id="noidungphim" class="col-sm-12">
	<h5>Nội dung phim</h5>
	<p>
		<?php
		echo str_replace("'","",str_replace("'","",$row['contentfilm']));
		?>
	</p>
</div>
<?php
			 $a=(strtotime(date("Y-m-d"))-strtotime($ngaykhoichieu));
		
			if($a>=0){
			$b=(strtotime(date("Y-m-d"))-strtotime($ngayketthuc));
				if($b<=0){
			?>
<h5 class="h2-color col-sm-12 col-xs-12">Đặt vé</h5>
<div class="col-sm-12 col-xs-12 row non-row" id="element-thoidiem" >
<h5 class="h5-margin">Chọn cụm rạp:   </h5>
	<div id="list-rapchieuphim" class="col-sm-5 col-xs-5">
	
	<?php
			$sql3="select * from cumrap";
			$data3=$model->select($sql3);
		
			?>
		<select class="form-control" id="select-lichchieuphim">
		<?php
				if($data3->num_rows>0){
					while($row=$data3->fetch_assoc()){
			?>
			<option value="<?=$row['idcumrap']?>"><?=$row['namecumrap']?></option>
			<?php
			}
				}
					?>
		</select>
	</div>
	<h5 class="h5-margin" id="h5-lichchieuphim">Lịch chiếu phim:    </h5>
	<div id="date-element-lichchieu" >
	
		<input type="date" id="date-lichchieu">
		<i class="fas fa-calendar-alt" style="font-size: 22px;" id="icon-datlich"></i>
	</div>
	
</div>

<div id="lichchieuphim" class="col-sm-12 col-xs-12">
	
</div>
<!--<a href="./?datve=1"><button>Đăt vé</button></a>-->
 

</div>
<?php
				}
			}
		}
	}

		?>
		<script src="js/chitiet-thongtin-phim-js.js"></script>