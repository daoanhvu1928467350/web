<?php
require("config/model.php");
$model=new model();
$sql="select * from thanhtoan ";
$data=$model->select($sql);
$tongsove=0;
$tongtatca=0;
while($row=$data->fetch_assoc()){
	$tongsove+=$row['soluongve'];
	$tongtatca+=$row['tongtatca'];
}
$sql1="select count(*) as total from member";
$data2=$model->select($sql1);
$row2=$data2->fetch_assoc();

?>
<div class="col-xs-12 col-sm-12" id="thongke">
<h2 class="col-xs-12 col-sm-12">Dashboard</h2>
<div id="thongke-element" class="col-xs-12 col-sm-12">
<div class="col-xs-12 col-sm-12 row" id="thongke1">

	<div class=" item-statistic " id="tongsove-statistic">
	<a  class="row cursor col-xs-12 col-sm-12" >
		<div class=" item-padding" id="tongsove-element-statistic" >
			<h3><?=$tongsove<1000?$tongsove:($tongsove<10000?($tongsove/1000)."K":($tongtatca<1000000?($tongsove/1000)."K":($tongtatca<1000000000?($tongsove/1000000)."M":($tongsove/1000000000)."B")))?></h3>
			<p>Tổng số vé đã bán</p>
		</div>
		<div class="icon-statistic">
		<i class="fas fa-chart-bar"></i>
		</div>
		</a>
	</div>

	
		<div class="bg-blue item-statistic ">
		<a href="./?doanhthu=1"  class="row col-xs-12 col-sm-12">
		<div class=" item-padding" id="doanhthu-element-statistic" >
			<h3><?=$tongtatca<10000?number_format($tongtatca/1000,0)."K":($tongtatca<1000000?number_format($tongtatca/1000,0)."K":($tongtatca<1000000000?number_format($tongtatca/1000000,0)."M":number_format($tongtatca/1000000000,0)."B"))?></h3>
			<p>Doanh thu</p>
		</div>
		<div class=" icon-statistic ">
	<i class="fas fa-dollar-sign"></i>
		</div>
		</a>
	</div>
	
	
		<div class="bg-red item-statistic ">
		<a href="./?naptien-user=1" class="row col-xs-12 col-sm-12">
		<div class=" item-padding" id="doanhthu-element-statistic" >
			<h3><?=$row2['total']<1000?$row2['total']:($row2['total']<10000?($row2['total']/1000)."K":($row2['total']<1000000?($row2['total']/1000)."K":($row2['total']<1000000000?($row2['total']/1000000)."M":($row2['total']/1000000000)."B")))?></h3>
			<p>Tổng thành viên</p>
		</div>
		<div class="icon-statistic ">
	<i class="fas fa-user-plus"></i>
		</div>
		</a>
	</div>
	
	
	<!--<div class="col-sm-4">
		
	</div>-->
	</div>
	</div>
</div>
<?php
	
	$sql1="select namefilm,sum(soluongve) as total from thanhtoan  group by namefilm  order by total desc  limit 10";
				$data1=$model->select($sql1);
				
?>

<div id="Top10" class="col-xs-12 col-sm-12 bg-white" >

	<h4>Top 10 bộ phim được xem nhiều nhất</h4>
	<table class="table">
		<thead>
			<th>STT</th>
			<th>Tên phim</th>
			
			<th>Số lượng vé bán được</th>
		</thead>
		<tbody>
		<?php
			if($data1->num_rows>0){
				$i=1;
				while($row1=$data1->fetch_assoc()){
			?>
			<tr>
				<td><?=$i?></td>
				<td><?=$row1['namefilm']?></td>
				
				
				<td><?=$row1['total']?></td>
			</tr>
			<?php
					$i++;
				}
			}
				?>
		</tbody>
	</table>
	
</div>
<script src="js/statistic-js.js"></script>