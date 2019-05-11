<?php
require("config/model.php");
$model=new model();
if(isset($_GET['khuvucchieu'])){
	$id=$_GET['khuvucchieu'];
	$sql="select * from rapchieuphim_khuvucchieu   where idrap=$id";
	$sql1="select * from rapchieuphim where idrap=$id limit 1";
	$data1=$model->select($sql1);
	$row1=$data1->fetch_assoc();
	$data=$model->select($sql);
	if($data->num_rows>0){
	?>
	<input type="hidden" id="idrap" value="<?=$id?>">
	<div class="col-xs-12 col-sm-12 bg-white margin padding">
	<h5 class="h2-color">Khu vực chiếu của rạp <?=$row1['namerap']?> </h5>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tên khu vực</th>
			<th>Số lượng hàng ghế</th>
			<th>Tổng số ghế tối cả của mỗi hàng</th>
			<th>Tổng số ghế</th>
			<th>Xóa</th>
		</thead>
		<tbody>
		<?php
		while($row=$data->fetch_assoc()){
		?>
			<tr>
				<td><?=$row['id_khuvuc']?></td>
				<td><?=$row['name_khuvuc']?></td>
				<td><?=$row['soluonghangghe']?></td>
				<td><?=$row['maxofghe']?></td>
				<td><?=$row['sumofghe']?></td>
				<td><div class="delete-khuvucchieu cursor" id="<?=$row['id_khuvuc']?>"><i class="far fa-trash-alt h2-color"></i></div></td>
			</tr>
			<?php
		}
			?>
		</tbody>
	</table>
	</div>
	<script src="js/khuvucchieu-js.js">
</script>
	<?php
	}else{
		echo 'Không tìm thấy dữ liệu';
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