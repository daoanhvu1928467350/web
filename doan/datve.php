<?php
require("config/model.php");
$model=new model();
$idkhuvuc=$_GET['idkhuvuc'];
$idphim=$_GET['idphim'];
$suatchieu=$_GET['suatchieu'];
$idve=$_GET['loaive'];
$rp=$_GET['rp'];
$ngaychieuphim=$_GET['giochieuphim'];
$sql="select * from listfilm where id=$idphim limit 1 ";
$data=$model->select($sql);
$phim=$data->fetch_assoc();
$sql1="select * from rapchieuphim_khuvucchieu where id_khuvuc=$idkhuvuc limit 1";
$data1=$model->select($sql1);
$khuvuc=$data1->fetch_assoc();
$sql2="select * from rapchieuphim where idrap=$rp limit 1";
$data2=$model->select($sql2);
$rap=$data2->fetch_assoc();
$sql3="select * from loaive where id_loai=$idve limit 1";
$data3=$model->select($sql3);
$loaive=$data3->fetch_assoc();
$giochieuphim2=$_GET['giochieuphim2'];
?>
<div class="col-sm-12 col-xs-12 row non-row" id="datve-official">
<DIV id="element-datve" class="col-xs-9 col-sm-9">
	<h2 class="col-sm-12 col-xs-12">CHỌN VÉ/THỨC ĂN</h2>
	<div id="datve-component" class="col-xs-12 col-sm-12">
		<table class="table table-chonve" id="table-datve">
			<thead class="thead">
				<th colspan="2">Loại vé</th>
				<th id="soluong-datve">Số lượng</th>
				<th>Giá(VNĐ)</th>
				<th>Tổng(VNĐ)</th>
			</thead>
			<tbody>
			<?php
				$date=getdate(strtotime($ngaychieuphim));
				$date1=0;
				
			
				switch($date['weekday']){
					case 'Monday':
						$date1=2;
						break;
					case 'Tuesday':
						$date1=3;
						break;
					case 'Wednesday':
						$date1=4;
						break;
					case 'Thursday':
						$date1=5;
						break;
					case 'Friday':
						$date1=6;
						break;
					case 'Saturday':
						$date1=7;
						break;
					case 'Sunday':
						$date1=8;
						break;
				}
				$sql4="select * from element_of_people";
				$data4=$model->select($sql4);
				if($data4->num_rows>0){
					$i=0;
					while($row4=$data4->fetch_assoc()){
						
						$idloainguoi=$row4['id_loainguoi'];
						$sql5="select * from giave where ngay=$date1 and id_loainguoi=$idloainguoi limit 1";
						$data5=$model->select($sql5);
						$row5=$data5->fetch_assoc();
						
				?>
				<tr>
					<td colspan="2" >
					<?=$row4['loainguoi']?> 
					<br/>
					Vé <span><?=$loaive['tenloai']?></span>
					</td>
					
					<td >
						<div class="icon-datve1 minus1" name="<?=$i?>"><i class="fas fa-minus-circle" class="minus1"></i></div>
						<input type="text"  id="<?=$i?>" class="allownumericwithoutdecimal input-datve" value="0" style="text-align: center">
						<div class="icon-datve1 plus1" name="<?=$i?>"><i class="fas fa-plus-circle"  ></i></div>
					</td>
					<td class="giatien1"><?=number_format($row5['giave'],0)?></td>
					<td class="tonggia1"><?=number_format(0,0)?></td>
				</tr>
				<?php
					$i++;
					}
					
				}
					?>
				<tr>
					<td colspan="4" class="tong" >Tổng</td>
					<td id="tong1" class="tong"><?=number_format(0,0)?></td>
				</tr>
			</tbody>
		</table>
		
	</div>
	<div id="thucan-component" class="col-xs-12 col-sm-12">
		<table class="table table-chonve" id="chonve">
		<thead class="thead">
			<th colspan="2" id="combo-th">Combo</th>
			<th>Số lượng</th>
			<th>Giá(VNĐ)</th>
			<th>Tổng(VNĐ)</th>
		</thead>
		<tbody>
		<?php
	$sql6="select * from bapnuoc";
						$data=$model->select($sql6);
						if($data->num_rows>0){
							$i1=0;
							while($row=$data->fetch_assoc()){
	?>
			<tr>
				<td colspan="2">
					<div class="media p-3">
  <img src="<?='image/'.$row['imagebap']?>" alt="Combo" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    
    <p><b class="title-combo"><?=$row['namebap']?></b>
<br>

<?=str_replace("'","",$row['detailbap'])?>
 </p>
  </div>
              </div>
				</td>
				<td>
				
					
						
							
					<div class="icon-datve1  minus" name="<?=$i1?>"><i class="fas fa-minus-circle" 
						 ></i></div>
						<input type="text" id="<?=$i1?>" class="allownumericwithoutdecimal input-doan" value="0" style="text-align: center" >
					
						<div class="icon-datve1 plus" name="<?=$i1?>">
								<i class="fas fa-plus-circle " ></i>
						</div>
				</td>
				<td class="giatien2"><?=number_format($row['gia'],0)?></td>
				<td class="tonggia2"><?=number_format(0,0)?></td>
			</tr>
			
			<?php
		$i1++;
							}
						}
						
		?>
		<tr>
			<td colspan="4" class="tong">Tổng</td>
			<td id="tong2" class="tong"><?=number_format(0,0)?></td>
			</tr>
		</tbody></table>
	</div>
	
</DIV>
<div  class="col-xs-3 col-sm-3" id="element-thanhtoan">
	<img src="<?=$phim['anhdaidien']?>" width="100px" height="100px">
	<h5><?=$phim['namefilm']?></h5>
	<ul>
		<li><p><b><?=$rap['namerap']?>,Rap:<?=$khuvuc['name_khuvuc']?></b></p></li>
		<li><p><b>Suất chiếu:</b><?=$suatchieu?></p></li>
		<li><p><b>Combo:</b><span class="combo-datve"></span></p> </li>
		<li><p><b>Ghế:</b></p></li>
		<li><p><b>Tổng:</b>   <span id="tong"><?php echo number_format(0,0)?></span></p></li>
		
	</ul>
	<form action="./" method="post">
	<input type="hidden" name="chongoi" value="1">
	<input type="hidden" name="khuvuc" value="<?=$idkhuvuc?>">
	<input type="hidden" name="tenphim" value="<?=$idphim?>">
	<input type="hidden" name="rapchieuphim" value="<?=$rp?>">
	<input type="hidden" name="suatchieu" value="<?=$suatchieu?>">
	<input type="hidden" name="soluongve" value="0" id="soluongve">
	<input type="hidden" name="giaarr" id="giaarr" value="">
	<input type="hidden" name="tong" value="0" id="tong-input">
	<input type="text" name="soluongcombo" id="soluongcombo" value="">
	<input type="hidden" name="giacomboarr" value="" id="giacomboarr">
    <input  type="hidden" name="ngaychieuphim" value="<?=$ngaychieuphim?>" >
    <input type="hidden" name="giochieuphim" value="<?=$giochieuphim2?>">
		<button class="btn btn-default btn-generation" id="btn-tieptuc" disabled>Tiếp tục<i class="fas fa-arrow-right"></i></button>
	</form>
	
</div>	
</div>

<script src="js/datve-js.js"></script>