<h5 class="h2-color">Thêm bắp nước</h5>

	<div class="form-group">
     <label for="tencombo">Tên combo:<span class="red">*</span></label>
	<input type="text" class="form-control" placeholder="Tên combo" name="tencombo" id="tencombo">
	 <div class="red" id="error-tencombo">
     	
     </div>
</div>
<div class="form-group">
     <label>Giá combo:<span class="red">*</span></label>
     <input type="text" class="form-control" placeholder="Giá combo" name="giacombo" id="giacombo" value="0">
     <div class="red" id="error-giacombo">
     	
     </div>
</div>
<div class="form-group">
     <label>Chi tiết về gói combo:</label>
     <div class="col-sm-12 col-xs-12 mota-pr" id="div-mota">
    <div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html">
		
	</iframe>
	</div>
</div>

	<button class="btn btn-generation2" id="click-goicombo1">Thêm gói combo</button>

<script src="js/js-combo.js"></script>
<script src="js/iframe-js.js"></script>
