<?php
require("config/model.php");
$model=new model();
/*
$sql1="select * from daodien";
$data1=$model->select($sql1);*/
date_default_timezone_set('Asia/Ho_Chi_Minh');
  // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result =$model->select("select count(*) as total from daodien");
        $row = $result->fetch_assoc();
        $total_records = $row['total'];
// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
if($start<0){
	$start=0;
}
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $data = $model->select("SELECT * FROM daodien LIMIT $start, $limit");
        

?>
<input type="hidden" id="page" value="<?=$_GET['page']?>">
<div class="col-xs-12 col-sm-12 margin padding bg-white">
<h5>Danh sách đạo diễn</h5>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tên đạo diễn</th>
			<th>Xóa</th>
			
		</thead>
		<tbody>
		<?php
			while($row1=$data->fetch_assoc()){
			?>
			<tr>
				<td><?=$row1['id_daodien']?></td>
				<td><?=$row1['tendaodien']?></td>
				<td><button class="btn btn-generation2 daodien" id="<?=$row1['id_daodien']?>">Xóa  <i class="far fa-trash-alt"></i></button></td>
			</tr>
			<?php
			}
				?>
		</tbody>
	</table>
</div>
<div class="phantrang">
          <ul class="pagination1 list-type" >
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
           //if ($current_page > 1 && $total_page > 1){
			  $current_page1=$_GET['page'];
                echo '<li class="page-item2"><a href="./?dddv=1&&page='.(($current_page-1)==0?$current_page1=$total_page:$current_page1-1).'" class="page-link1">Prev</a></li> ';
           // }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<li class="page-item1 active2"><a class="page-link1" href="#">'.$i.'</a></li> ';
                }
                else{
                    echo '<li class="page-item1"><a href="./?dddv=1&&page='.$i.'" class="page-link1">'.$i.'</a></li>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
           //if ($current_page < $total_page && $total_page > 1){
                echo '<li class="page-item2"><a href="./?dddv=1&&page='.(($current_page+1)>$total_page?$current_page1=1:$current_page1=$_GET['page']+1).'" class="page-link1">Next</a></li> ';
          // }
           ?>
	</ul>
        </div>
<script src="js/daodien-js.js"></script>