<?php
if(isset($_GET['phimdangchieu'])){
	
	
}
require("config/model.php");
$model=new model();
$sql="select * from listfilm where ngaykhoichieu<=now() and ngayketthuc>= now() ";
$data=$model->select($sql);

?>
<div class="col-xs-12 col-sm-12 bg-white margin padding">
<h4 class="h2-color">Phim đang chiếu</h4>
<table class="table" id="table-phimdangchieu">
	<thead id="thead-phimdangchieu">
		<th>ID</th>
		<th>Tên phim</th>
		<th>Ngày khởi chiếu</th>
		<!--<th>Đạo diễn</th>
		<th>Diễn viên</th>
		<th>Thể loại phim</th>
		<th>Ngôn ngữ</th>-->
		<th>Hình ảnh</th>
		<!--<th>Trailer</th>-->
		
	</thead>
	<tbody>
	<?php
		$arrdetail1=array();
		$i=0;
		while($row=$data->fetch_assoc()){
			
			if(strtotime(date("Y-m-d"))<strtotime($row['ngaykhoichieu'])){
				continue;
			}
			$id=$row['id'];
			$sql1="select * from dienvien_listfilm inner join dienvien on dienvien.id_dienvien=dienvien_listfilm.id_dienvien and dienvien_listfilm.id=$id";
			$data1=$model->select($sql1);
			$arrdienvien=array();
			$i1=0;
			while($row2=$data1->fetch_assoc()){
				$arrdienvien[$i]=$row2['tendienvien'];
				$i1++;
			}
			$sql2="select * from theloai_listfilm inner join theloaiphim on theloaiphim.id_theloai=theloai_listfilm.id_theloai and theloai_listfilm.id=$id";
			$data2=$model->select($sql2);
			$arrtheloai=array();
			$j=0;
			while($row3=$data2->fetch_assoc()){
				$arrtheloai[$j]=$row3['tentheloai'];
				$j++;
			}
			
		?>
		<tr class="tr-phimdangchieu" name="<?="phimdangchieu".$row['id']?>">
			<td><?=$row['id']?></td>
			<td><?=$row['namefilm']?></td>
			<td><?=$ngaykhoichieu=date("d/m/y",strtotime($row['ngaykhoichieu']))?></td>
			<!--<td><?=$row['daodien']?></td>
			<td><?=$arrdienvien1=implode(",",$arrdienvien)?></td>
			<td><?=$arrtheloai1=implode(",",$arrtheloai)?></td>
			<td><?=$row['ngonngu']?></td>-->
			<td><img src="<?=$row['anhdaidien']?>" height=30 width="40"></td>
			<!--<td><?=$row['trailer']?></td>-->
		</tr>
		<?php
			$arrdetail1[$i]=array("id"=>$row['id'],"namefilm"=>$row['namefilm'],"ngaykhoichieu"=>$ngaykhoichieu,"daodien"=>$row['daodien'],"arrdienvien"=>$arrdienvien1,"arrtheloai"=>$arrtheloai1,"ngonngu"=>$row['ngonngu'],"anhdaidien"=>$row['anhdaidien'],"trailer"=>$row['trailer']);
			
			$i++;
			
		}
		
			?>
	</tbody>
</table>
</div>
<div class="col-xs-12 col-sm-12 bg-white margin padding">
<h4 class="h2-color">Phim sắp chiếu</h4>
<?php
	$sql1="select * from listfilm where ngaykhoichieu>now() ";
	$data3=$model->select($sql1);
	?>
	<table class="table" id="table-phimsapchieu">
	<thead>
		<th>ID</th>
		<th>Tên phim</th>
		<th>Ngày khởi chiếu</th>
		<!--<th>Đạo diễn</th>
		<th>Diễn viên</th>
		<th>Thể loại phim</th>
		<th>Ngôn ngữ</th>-->
		<th>Hình ảnh</th>
		<!--<th>Trailer</th>-->
		
	</thead>
	<tbody>
	<?php
		$arrdetailphimsapchieu=array();
		$k=0;
		while($row=$data3->fetch_assoc()){
			if(strtotime(date("Y-m-d"))>=strtotime($row['ngaykhoichieu'])){
				continue;
			}
			$id=$row['id'];
			$sql1="select * from dienvien_listfilm inner join dienvien on dienvien.id_dienvien=dienvien_listfilm.id_dienvien and dienvien_listfilm.id=$id";
			$data1=$model->select($sql1);
			$arrdienvien=array();
			$i=0;
			while($row2=$data1->fetch_assoc()){
				$arrdienvien[$i]=$row2['tendienvien'];
				$i++;
			}
			$sql2="select * from theloai_listfilm inner join theloaiphim on theloaiphim.id_theloai=theloai_listfilm.id_theloai and theloai_listfilm.id=$id";
			$data2=$model->select($sql2);
			$arrtheloai=array();
			$j=0;
			while($row3=$data2->fetch_assoc()){
				$arrtheloai[$j]=$row3['tentheloai'];
				$j++;
			}
			
		?>
		<tr class="tr-phimsapchieu" name="<?="phimsapchieu".$row['id']?>">
			<td><?=$row['id']?></td>
			<td><?=$row['namefilm']?></td>
			<td><?=$ngaykhoichieu1=date("d/m/y",strtotime($row['ngaykhoichieu']))?></td>
			<!--<td><?=$row['daodien']?></td>
			<td><?=$arrdienvien2=implode(",",$arrdienvien)?></td>
			<td><?=$arrtheloai2=implode(",",$arrtheloai)?></td>
			<td><?=$row['ngonngu']?></td>-->
			<td><img src="<?=$row['anhdaidien']?>" height=30 width="40"></td>
			<!--<td><?=$row['trailer']?></td>-->
		</tr>
		<?php
			$arrdetailphimsapchieu[$k]=array("id"=>$row['id'],"namefilm"=>$row['namefilm'],"ngaykhoichieu"=>$ngaykhoichieu1,"daodien"=>$row['daodien'],"arrdienvien"=>$arrdienvien2,"arrtheloai"=>$arrtheloai2,"ngonngu"=>$row['ngonngu'],"anhdaidien"=>$row['anhdaidien'],"trailer"=>$row['trailer']);
			$k++;
		}
			?>
	</tbody>
</table>
	
</div>
<?php

foreach($arrdetail1 as $key){
	
	$iddaodien=$key['daodien'];
	$sql4="select * from daodien where id_daodien=$iddaodien";
	$data5=$model->select($sql4);
	$row5=$data5->fetch_assoc();
?>
<div class="detail-phim col-xs-12 col-sm-12 bg-white padding" id="phimdangchieu<?=$key['id']?>">

	<div class="header-detail col-xs-12 col-sm-12 padding ">
		<h5 class="h2-color">Chi tiết thông tin phim</h5>
		<div class="icon" name="<?="phimdangchieu".$key['id']?>">
		<i class="fas fa-window-close icon-close" style="font-size: 18px; color:#FFA300" ></i>
		</div>
	</div>
	<div class="body-detail col-xs-12 col-sm-12 row">
		<div class="col-sm-5 col-xs-4" id="img-detail">
			<img src="<?=$key['anhdaidien']?>" height=300 width=250>
		</div>
		<div class="col-sm-7">
			<ul class="list-type" id="ul-detail-phimdangchieu">
				<li><?="<b>ID:  </b>".$key['id']?></li>
				<li><?="<b>Tên phim :  </b>".$key['namefilm']?></li>
				<li><?="<b>Ngày khởi chiếu :  </b>"  .$key['ngaykhoichieu']?></li>
				<li><?="<b>Đạo diễn :  </b>"  .$row5['tendaodien']?></li>
				<li><?="<b>Diễn viên :  </b>"  .$key['arrdienvien']?></li>
				<li><?="<b>Thể loại :  </b>"  .$key['arrtheloai']?></li>
				<li><?="<b>Ngôn ngữ :  </b>"  .$key['ngonngu']?></li>
				<li><?="<b>Trailer(src) :  </b>"  .$key['trailer']?></li>
			</ul>
		</div>
	</div>
	<div class="footer-detail padding ">
	<div class="item-right delete-detail-phim"  name="<?=$key['id']?>">
		<i class="far fa-trash-alt h2-color item-right" style="font-size: 18px" ></i>
		</div>
		<a href="./?edit-film=1&&id=<?=$key['id']?>">
		<div class="item-right  edit-detail-phim" name="<?=$key['id']?>">
		<i class="fas fa-pencil-alt h2-color item-right"></i>
		</div>
		</a>
	</div>
</div>
<?php
}
foreach($arrdetailphimsapchieu as $key1){
	$iddaodien=$key1['daodien'];
	$sql3="select * from daodien where id_daodien=$iddaodien";
	$data4=$model->select($sql3);
	$row4=$data4->fetch_assoc();
	?>
	<div class="detail-phim col-xs-12 col-sm-12 bg-white padding" id="phimsapchieu<?=$key1['id']?>">

	<div class="header-detail col-xs-12 col-sm-12 padding ">
		<h5 class="h2-color">Chi tiết thông tin phim</h5>
		<div class="icon" name="<?="phimsapchieu".$key1['id']?>">
		<i class="fas fa-window-close icon-close" style="font-size: 18px; color:#FFA300" ></i>
		</div>
	</div>
	<div class="body-detail col-xs-12 col-sm-12 row">
		<div class="col-sm-5 col-xs-4" id="img-detail">
			<img src="<?=$key1['anhdaidien']?>" height=300 width=250>
		</div>
		<div class="col-sm-7">
			<ul class="list-type" id="ul-detail-phimdangchieu">
				<li><?="<b>ID:  </b>".$key1['id']?></li>
				<li><?="<b>Tên phim :  </b>".$key1['namefilm']?></li>
				<li><?="<b>Ngày khởi chiếu :  </b>"  .$key1['ngaykhoichieu']?></li>
				<li><?="<b>Đạo diễn :  </b>"  .$row4['tendaodien']
					?></li>
				<li><?="<b>Diễn viên :  </b>"  .$key1['arrdienvien']?></li>
				<li><?="<b>Thể loại :  </b>"  .$key1['arrtheloai']?></li>
				<li><?="<b>Ngôn ngữ :  </b>"  .$key1['ngonngu']?></li>
				<li><?="<b>Trailer(src) :  </b>"  .$key1['trailer']?></li>
			</ul>
		</div>
	</div>
	<div class="footer-detail padding ">
	<div class="item-right delete-detail-phim"  name="<?=$key1['id']?>">
		<i class="far fa-trash-alt h2-color item-right" style="font-size: 18px" ></i>
		</div>
		<a href="./?edit-film=1&&id=<?=$key['id']?>">
		<div class="item-right  edit-detail-phim" name="<?=$key1['id']?>">
		<i class="fas fa-pencil-alt h2-color item-right"></i>
		</div>
		</a>
	</div>
</div>
	<?php
}
	?>
	
<script src="js/listfilm-js.js"></script>
