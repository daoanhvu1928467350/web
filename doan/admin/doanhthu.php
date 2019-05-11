<?php
require("config/model.php");
$model=new model();
$sql="select namefilm,sum(soluongve) as total1,sum(tongtienve) as total2,sum(tongtienbapnuoc) as total,sum(tongtatca) as total3 from thanhtoan  group by namefilm  order by total desc ";
$data=$model->select($sql);
?>
<div class="col-xs-12 col-sm-12 bg-white margin padding">
<h5 class="h2-color">Doanh thu</h5>
<table class="table" id="doanhthu">
	<thead>
		<th>STT</th>
		<th>Tên phim</th>
		<th>Tổng tiền bắp nước</th>
		<th>Tổng tiền vé </th>
		<th>Tổng  </th>
	</thead>
	<tbody>
	<?php
		$i=0;
		$tong=0;
		while($row=$data->fetch_assoc()){
		?>
		<tr>
			<td><?=$i?></td>
			<td><?=$row['namefilm']?></td>
			<td><?=number_format($row['total'])?></td>
			<td><?=number_format($row['total2'])?></td>
			<td><?=number_format($row['total3'])?></td>
		</tr>
		<?php
			$tong+=$row['total3'];
			$i++;
		}
		
			?>
			<tr>
				<td colspan="4" >Tổng</td>
				<td ><?=number_format($tong,0)?></td>
			</tr>
	</tbody>
</table>
</div>

<style>
	#doanhthu {
		background-color: #FFA300;
		color: white;
	}
</style>
<?php
?>