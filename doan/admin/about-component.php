<div id="element-about" class="col-sm-12 col-xs-12 bg-white margin-left padding">
	<h2 class="h2-color">Cập nhật dữ liệu</h2>
	<div>
		<div id="select-mota">
			Chọn thông tin cần cập nhật:
			<select id="selection-about">
				<option value="gioithieu">Giới thiệu</option>
				<option  value="tuyendung">Tuyển dụng</option>
				<option  value="lienhequangcao">Liên hệ quảng cáo</option>
				<option  value="dieukhoanchung">Điều khoản chung</option>
				<option value="dieukhoangiaodich">Điều khoản giao dịch</option>
				<option  value="chinhsachthanhtoan">Chính sách thanh toán</option>
				<option  value="chinhsachbaomat">Chính sách bảo mật</option>
				<option  value="cauhoithuonggap">Câu hỏi thường gặp</option>
				
			</select>
		</div>
		<div class="col-sm-12" id="div-mota">
		<div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html"  >
		
	</iframe>
		</div>
		<div  id="div-btn-about">
			<button class="btn btn-generation" id="btn-about-component">Xong</button>
		</div>
	</div>
</div>
<script src="js/about-component-js.js"></script>
<script src="js/iframe-js.js">
	
</script>