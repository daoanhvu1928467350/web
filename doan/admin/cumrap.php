<?php
require("config/model.php");
$model=new model();
$sql="select * from cumrap ";
$data=$model->select($sql);

?>
<div class="col-xs-12 col-sm-12 bg-white margin padding">
<h5 class="h2-color">Danh sách cụm rạp</h5>
<table class="table">
	<thead>
		<th>ID</th>
		<th>Tên cụm rạp</th>
		<th>Xóa</th>
	</thead>
	<tbody>
	<?php
		while($row=$data->fetch_assoc()){
		?>
		<tr>
			<td><?=$row['idcumrap']?></td>
			<td><?=$row['namecumrap']?></td>
			<td><div class="delete-cumrap cursor" id="<?=$row['idcumrap']?>">
				<i class="far fa-trash-alt h2-color"></i>
			</div></td>
		</tr>
		<?php
		}
			?>
	</tbody>
</table>
</div>
<script src="js/cumrap-js.js"></script>