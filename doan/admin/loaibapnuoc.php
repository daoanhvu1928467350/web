<?php
require("config/model.php");
$model=new model();
$sql="select * from loaive";
$data=$model->select($sql);
$sql1='select * from bapnuoc';
$data1=$model->select($sql1);
$arrloaive=array();
?>
<div class="col-xs-12 col-sm-12 bg-white margin padding" id="thongtinloaive">
	<h5 class="h2-color">Thông tin loại vé</h5>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tên loại vé</th>
			
			<th>Sửa</th>
			<th>Xóa</th>
		</thead>
		<tbody>
		<?php
			$i=0;
			while($row=$data->fetch_assoc()){
			?>
			<tr>
				<td><?=$row['id_loai']?></td>
				<td><?=$row['tenloai']?></td>
				<td>
				<div class="edit-loaive " name="loaive<?=$row['id_loai']?>">
				<i class="fas fa-pencil-alt h2-color cursor"></i>
				</div>
				
				</td>
					
				<td>
				<div class="delete-loaive" name="<?=$row['id_loai']?>"><i class="far fa-trash-alt h2-color cursor"></i></div>
				</td>
			</tr>
			<?php
				$arrloaive[$i]=array("id"=>$row['id_loai'],"tenloai"=>$row['tenloai']);
				$i++;
			}
				?>
		</tbody>
	</table>
</div>
<div class="col-xs-12 col-sm-12 bg-white margin padding" id="thongtinbap">
	<h5 class="h2-color">Thông tin bắp nước</h5>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tên bắp nước</th>
			<th>Thông tin chi tiết</th>
			<th>Giá</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</thead>
		<tbody>
		<?php
			while($row1=$data1->fetch_assoc()){
			?>
			<tr>
				<td><?=$row1['id_bapnuoc']?></td>
				<td><?=$row1['namebap']?></td>
				<td><?=str_replace("'","",str_replace("'","",$row1['detailbap']))?></td>
				<td><?=number_format($row1['gia'],0)?></td>
				<td>
				<A href="./?update-bapnuoc=1&&id=<?=$row1['id_bapnuoc']?>">
					<div class="edit-bapnuoc " id="<?=$row1['id_bapnuoc']?>">
				<i class="fas fa-pencil-alt h2-color cursor"></i>
				</div>
				</A>
				</td>
				<td>
					<div class="delete-bapnuoc" name="<?=$row1['id_bapnuoc']?>"><i class="far fa-trash-alt h2-color cursor"></i></div>
				</td>
			</tr>
			<?php
			}
				?>
		</tbody>
	</table>
</div>
<?php
foreach($arrloaive  as $key){
?>
<div class="div-center-700" id="loaive<?=$key['id']?>">
	<div class="header-center-700 padding">
		<h5 class="h2-color">Cập nhật loại vé</h5>
		<div class="close-loaive" name="loaive<?=$key['id']?>">
		<i class="fas fa-window-close icon-close h2-color"></i>
		</div>
	</div>
	<div class="body-center-700 padding">
		<b>Tên thông tin vé: </b>
		<input type="text" value="<?=$key['tenloai']?>" class="form-control" id="inputloaive<?=$key['id']?>">
		<button class="btn btn-generation2 click-update-loaive"  name="inputloaive<?=$key['id']?>">Lưu</button>
	</div>
	
</div>
<?php
}
	?>
<script src="js/loaibapnuoc-js.js"></script>