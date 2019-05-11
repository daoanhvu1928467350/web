<?php
require("config/model.php");
$model=new model();
$bangchucai=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$sql5="select * from rapchieuphim_khuvucchieu where idrap=1 && name_khuvuc='Rạp 1' limit 1";
$data5=$model->select($sql5);
$idkhuvuc=$_POST['idkhuvuc'];
$idphim=$_POST['idphim'];
$suatchieu=$_POST['suatchieu'];
$tong=(int)$_POST['tong'];
$rp=$_POST['idrap'];
$sql="select * from listfilm where id=$idphim limit 1 ";
$data=$model->select($sql);
$phim=$data->fetch_assoc();
$namefilm=$phim['namefilm'];
$sql1="select * from rapchieuphim_khuvucchieu where id_khuvuc=$idkhuvuc limit 1";
$data1=$model->select($sql1);
$khuvuc=$data1->fetch_assoc();
$sql2="select * from rapchieuphim where idrap=$rp limit 1";
$data2=$model->select($sql2);
$rap=$data2->fetch_assoc();
$ngaychieuphim=$_POST['ngaychieuphim'];
$soluongve1=array();
$soluongve1=explode(',',$_POST['soluongve']);
$soluongve2=array();
$i1=0;
foreach($soluongve1 as $key){
	$soluongve2[$i1]=(int)$key;
	$i1++;
}
$soluongve=array_sum($soluongve2);
$giochieuphim=$_POST['giochieuphim'];


?>
<h2 class="h2-color">Chọn vị trí chỗ ngồi</h2>
<div class="col-sm-12 col-xs-12 row non-row" id="datcho1">
	<div id="datcho-element" class="col-sm-7 col-xs-7">
	
    <?php
		if($data5->num_rows>0){
		$row5=$data5->fetch_assoc();
		for($i=0;$i<$row5['maxofghe'];$i++){
		?>
    <ul class="hang">
	    <li class="item-hangghe"><?=trim($bangchucai[$i])?></li>
		<li>
			<ul class="soghe">
			<?php
				for($j=$row5['soluonghangghe'];$j>0;$j--){
				?>
				<li class="li-item-datcho" id="<?=$bangchucai[$i].$j?>"><?=$j?></li>
				<?php
				}
					?>
			</ul>
		</li>
		 <li class="item-hangghe item-hangghe-last"><?=$bangchucai[$i]?></li>
		 </ul>
		 <?php
						
		}
		}
		$thanhtoan="select * from thanhtoan where namefilm='$namefilm' and rapchieuphim='$rp' and khuvucchieu='$idkhuvuc' and giochieuphim=$giochieuphim and ngaychieuphim='$ngaychieuphim' ";
		$data3=$model->select($thanhtoan);
		if($data3->num_rows>0){
			while($row1=$data3->fetch_assoc()){
				$id_thanhtoan=$row1['id_thanhtoan'];
			$sql3="select * from gheso where id_thanhtoan=$id_thanhtoan ";
				$data4=$model->select($sql3);
				if($data4->num_rows>0){
					while($row4=$data4->fetch_assoc()){
						$name=$row4['tenghe'];
						
						?>
						<script>
							var id=<?php echo "'#".$name."'" ?>;
							
							if(!$(id).hasClass("color-phanbiet-red")){
								$(id).addClass("color-phanbiet-red");
							}
							
		</script>
						<?php
					}
				}
			}
		}
		else{
			
		}
			?>
			
			<p style="margin-left: 39%">Màn hình</p>
			<hr width=50% style="margin-left: 19%;text-align: center" id="hr-manhinh">
		
			
				<div class="selected-datcho">
					<ul class="list-type " style="margin-left: 25%">
						<li class="color-phanbiet color-phanbiet-red display-inline"></li>
						<li class="display-inline">Ghế đã bán</li>
						<li class="color-phanbiet color-phanbiet-selected display-inline"></li>
						<li class="display-inline">Ghế đang chọn</li>
					</ul>
					
				</div>
			
	
</div>
<div  class="col-sm-4 col-xs-4" id="element-thanhtoan">
	<img src="<?=$phim['anhdaidien']?>" width="100px" height="100px" style="text-align: center">
	<h5><?=$phim['namefilm']?></h5>
	<ul>
		<li><p><b><?=$rap['namerap']?>,Rap:<?=$khuvuc['name_khuvuc']?></b></p></li>
		<li><p><b>Suất chiếu:   </b><?=$suatchieu?></p></li>
		<li><p><b>Combo:</b></p> </li>
		<li><p><b>Ghế:</b><span id="ghe"></span></p></li>
		<li><p><b>Tổng:</b>  <span><?=number_format($tong,0). 'VNĐ'?></span></p></li>
		
	</ul>
	<form action="./" method="post">
		<input type="hidden" name="thanhtoan" value="1">
		<input type="hidden" name="idfilm" value="<?=$idphim?>">
		<input type="hidden" name="khuvuc" value="<?=$idkhuvuc?>">
		<input type="hidden" name="rap" value="<?=$rp?>">
		<input type="hidden" name="tong" value="" id="tong-datcho" value="0">
		<input type="hidden" name="gheso" value="" id="gheso" value="0">
		<input type="hidden" name="suatchieu" value="<?=$suatchieu?>">
		<!--<input type="hidden" name="giave" value="80000">-->
		<input type="hidden" name="soluongve" value="<?=$soluongve?>" id="soluongve-datcho">
		<input type="hidden" name="soluongvearr" value="<?=$_POST['soluongve']?>">
		<input type="hidden" name="giaarr" value="<?=$_POST['giaarr']?>">
		<input type="hidden" name="soluongcombo" value="<?=$_POST['soluongcombo']?>">
		<input type="hidden" name="giacomboarr" value="<?=$_POST['giacomboarr']?>">
		<input type="hidden" name="ngaychieuphim" value="<?=$_POST['ngaychieuphim']?>">
		<input type="hidden" name="giochieuphim" value="<?=$_POST['giochieuphim']?>">
		<button class="btn btn-default btn-generation" id="btn-tieptuc-datcho" >Tiếp tục<i class="fas fa-arrow-right"></i></button>
	</form>
	
</div>	
</div>
<script src="js/datcho-js.js"></script>
