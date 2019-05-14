<?php
  include_once "csdl.php";
  $result = select("select * from theloai");
  if ($result->num_rows > 0) {
						
					echo '
					<hr>
					<fieldset class="col-md-12" style="padding: 0px 10px 10px 10px;">
					<legend style="font-size:14px;font-weight:bold">Tìm Kiếm Nâng Cao</legend>
					<div class="row">
					<div class="col-md-2">
						<input type="text" class="form-control form-control-sm" name="tensanpham" placeholder="Tên sản phẩm">
					</div>
					<div class="col-md-2">
					
        			<select name="thuonghieu" class="custom-select custom-select-sm " style="">
				    <option selected value="">Thương hiệu laptop</option>
				    
				  ';
					while($row = $result->fetch_assoc()) {
						
							echo '<option value="'.$row['matheloai'].'">'.$row['tentheloai'].'</option>';
					
					}
					echo'</select>
					
					</div>
					<div class="col-md-2">
						<select name="cpu" class="custom-select custom-select-sm ">
	                        <option selected value="">Chọn CPU</option>
	                        <option value="core%i2">Core i2</option>
	                        <option value="core%i3">Core i3</option>
	                        <option value="core%i5">Core i5</option>
	                        <option value="core%i7">Core i7</option>
	                    </select>
	                 </div>
	                 <div class="col-md-2">
						<select name="gia" class="custom-select custom-select-sm ">
	                        <option selected value="">Chọn Giá</option>
	                        <option value="10000000">Dưới 10 triệu</option>
	                        <option value="10000000-15000000">Từ 10-15 triệu</option>
	                        <option value="15000000-25000000">Từ 15-25 triệu</option>
	                        <option value="25000000">Trên 25 triệu</option>
	                    </select>
	                 </div>
	                 <div class="col-md-2">
						<select name="ram" class="custom-select custom-select-sm ">
	                        <option selected value="">Chọn RAM</option>
	                        <option value="2GB">2GB</option>
	                        <option value="4GB">4GB</option>
	                        <option value="8GB">8GB</option>
	                        <option value="16GB">16GB</option>
	                   
	                    </select>
	                 </div>
	              
	                 <div class="col-md-2">
	                 	<input type="submit" class="btn btn-sm btn-light btn-outline-info" name="searchnc" value="Tìm Kiếm" style="margin-left:auto;margin-right:auto">
	                 </div>
	                 </div>
	                 </fieldset>
	                 <hr>

                    
					';
		}
					
				
   else {

		}
?>