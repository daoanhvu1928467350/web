<?PHP
require("config/model.php");
$model=new model();
$sql="select * from capdo";
$data=$model->select($sql);

?>
<div class="col-xs-12 col-sm-12 bg-white margin padding">
<h2 class="h2-color">Thẻ quà tặng</h2>
<table class="table" id="thequatang-table">
	<thead>
		<th>Tên cấp độ thẻ</th>
		<th>Phần trăm</th>
		<th>Mô tả về cấp độ</th>
		<th>Sửa</th>
		
	</thead>
	<tbody>
	<?php
		while($row=$data->fetch_assoc()){
		?>
		<tr>
			<td><?=$row['namecapdo']?></td>
			<td><?=$row['phantram']?></td>
			<td class="description"><?=$row['descriptioncapdo']?></td>
			<td>
			<a href="./?edit-thequatang=1&&id=<?=$row['id_capdo']?>">
			<div class="edit-thequatang cursor" >
			<i class="fas fa-pencil-alt h2-color"></i>
			</div>
			</a>
			</td>
			
		</tr>
		<?php
		}
			?>
	</tbody>
</table>
</div>
<script src="js/thequatang-js.js"></script>