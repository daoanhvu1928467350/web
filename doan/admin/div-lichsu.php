<?php
require("config/model.php");
$model=new model();
$sql="select * from thanhtoan order by id_thanhtoan desc limit 30 ";
$data=$model->select($sql);

?>
<table class="table col-lg-12 col-xs-12 col-md-12" id="table-lichsu">
	<thead>
	     <th>ID</th>
		<th>Tên khách hàng </th>
		<th>Số điện thoại</th>
		<th>Tên phim</th>
		<th>Số lượng vé</th>
		<th>Tổng tiền vé</th>
		<th>Tổng tiền đồ ăn/thức uống </th>
		<th>Tổng tất cà</th>
		<th>Ngày chiếu phim</th>
		<th>ngaythanhtoan</th>
		
	</thead>
	<tbody>
	<?php
	while($row=$data->fetch_assoc()){
	?>
		<tr>
			<td><?=$row['iduser']?></td>
			<td><?=$row['nameuser']?></td>
			<td><?=$row['phoneuser']?></td>
			<td><?=$row['namefilm']?></td>
			<td><?=$row['soluongve']?></td>
			<td><?=number_format($row['tongtienve'],0)?></td>
			<td><?=number_format($row['tongtienbapnuoc'],0)?></td>
			<td><?=number_format($row['tongtatca'],0)?></td>
			
			<td><?=date("d/m/y",strtotime($row['ngaychieuphim']))?></td>
			<td><?=date("d/m/y",strtotime($row['ngaythanhtoan']))?></td>
		</tr>
		<?php
	}
		?>
	</tbody>
</table>