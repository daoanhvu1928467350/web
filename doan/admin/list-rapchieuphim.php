<?php
require("config/model.php");
$model=new model();
?>
<h2 class="h2-color text-align">Danh sách rạp chiếu phim</h2>
<div  class="col-sm-12 col-xs-12 bg-white padding margin">


	<table class="table" id="table-rapchieuphim1">
		<thead>
			<th>ID</th>
			<th>Tên rạp chiếu</th>
			<th>Cụm rạp</th>
			<th>Địa chỉ</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</thead>
		<tbody>
		<?php
			$sql="select * from rapchieuphim inner join cumrap on cumrap.idcumrap=rapchieuphim.idcumrap";
			$data=$model->select($sql);
			
			if($data->num_rows>0){
				while($row=$data->fetch_assoc()){
					
			?>
			
		<tr class="khuvucchieu" id="<?=$row['idrap']?>">
		
			<td><?=$row['idrap']?></td>
			<td><?=$row['namerap']?></td>
			
			<td><?=$row['namecumrap']?></td>
			<td><?=$row['Addressrap'].",".$row['quan'].",".$row['thanhpho']?></td>
			<td><a href="./?edit-rap=1&&id=<?=$row['idrap']?>"><i class="fas fa-pencil-alt icon-item h2-color" ></i></a></td>
			<td class="delete" name="<?=$row['idrap']?>"><i class="far fa-trash-alt  icon-item h2-color" ></i></td>
			
		</tr>
		
		<?php
				}
			}
				?>
			
		</tbody>
	</table>
</div>
<script src="js/list-rapchieuphim-js.js"></script>