<?php
require("config/model.php");
$model=new model();

date_default_timezone_set('Asia/Ho_Chi_Minh');
  // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result =$model->select("select count(*) as total from listfilm where ngaykhoichieu <= now()");
        $row = $result->fetch_assoc();
        $total_records = $row['total'];
// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 30;
 
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
        $data = $model->select("SELECT * FROM listfilm where ngaykhoichieu <= now() LIMIT $start, $limit");
 


?>
 <div class="row non-row phim">
 <?php
	 if($data->num_rows>0){
		 while($row=$data->fetch_assoc()){
			 $a=(strtotime(date("Y-m-d"))-strtotime($row['ngaykhoichieu']));
			 if($a>=0){
				 /*if(strtotime(date("Y-m-d")) > strtotime($row['ngayketthuc'])){
				     continue;
				 }
				 else{
					 echo strtotime(date("Y-m-d")) .">". strtotime($row['ngayketthuc'])."name".$row['id'];
				 }*/
				 $b=strtotime(date("Y-m-d"))-strtotime($row['ngayketthuc']);
				 if($b<=0){
				
			 
	?>
  <div class="col-md-3 item-phim">
    <div class="thumbnail">
      <a href="?thongtinchitietphim=1&id=<?=$row['id']?>">
        <img src="<?=$row['anhdaidien']?>" alt="Lights" style="width:100%">
        <div class="caption">
          <ul>
             <li><span class="h2-color"><?=$row['namefilm']?></span></li>
          	<li>Ngày khởi chiếu:  <?=date("d-m-Y",strtotime($row['ngaykhoichieu']))?></li>
          	<li>Thời lượng:<?=$row['thoiluong']?></li>
          </ul>
        </div>
      </a>
    </div>
  </div>
  <?php
			 }
			 }
		 }
		 
	 }
  ?>
</div>
<div class="phantrang">
          <ul class="pagination1 list-type" >
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
           //if ($current_page > 1 && $total_page > 1){
			  $current_page1=$_GET['page'];
                echo '<li class="page-item2"><a href="./?phimdangchieu=1&&page='.(($current_page-1)==0?$current_page1=$total_page:$current_page1-1).'" class="page-link1">Prev</a></li> ';
           // }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<li class="page-item1 active2"><a class="page-link1" href="#">'.$i.'</a></li> ';
                }
                else{
                    echo '<li class="page-item1"><a href="./?phimdangchieu=1&&page='.$i.'" class="page-link1">'.$i.'</a></li>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
           //if ($current_page < $total_page && $total_page > 1){
                echo '<li class="page-item2"><a href="./?phimdangchieu=1&&page='.(($current_page+1)>$total_page?$current_page1=1:$current_page1=$_GET['page']+1).'" class="page-link1">Next</a></li> ';
          // }
           ?>
	</ul>
        </div>
