<link href="bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
<?php
	if (isset($_POST['themquyen'])) {
		if( $_POST['themquyen'] != 'form') {
			echo $_POST['marole'];
			include '../csdl.php';
			select("INSERT INTO `nguoidung_role`(`manguoidung`, `marole`) VALUES ('".$_POST['themquyen']."','".$_POST['marole']."')");
			header("location:admin.php?role=".$_POST['themquyen']);
		}
	}
	if (isset($_POST['xoaquyen'])) {
		if( $_POST['xoaquyen'] != 'form') {
			echo $_POST['marole'];
			include '../csdl.php';
			select("DELETE FROM `nguoidung_role` WHERE `manguoidung`=".$_POST['xoaquyen']." AND `marole`=".$_POST['marole']);
			header("location:admin.php?role=".$_POST['xoaquyen']);
		}
	}
	if (isset($_REQUEST['role'])) {
		//include '../csdl.php';
		$sql = "SELECT * FROM `nguoidung` WHERE `manguoidung`='".$_REQUEST['role']."'";
		$result = select($sql);
		$row = $result->fetch_assoc();
		$result = select("SELECT `tenrole` FROM `role` WHERE `marole` IN (SELECT `marole` FROM `nguoidung_role` WHERE `manguoidung`='".$_REQUEST['role']."')");
		echo '<div class="row">
				<div class="col-md-12 text-center "><label>THÔNG TIN NGƯỜI DÙNG </label></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-10">
							<label>Mã người dùng: </label>' .$row["manguoidung"].'<br>
							<label>Họ tên: </label>' .$row["hoten"].'<br>
							<label>Tài khoản: </label>' .$row["taikhoan"].'<br>
							<label>Các quyền của tài khoản: </label> ';
								while ($quyen=$result->fetch_assoc()) {
									echo $quyen['tenrole'] .", ";
								}
				echo '</div>
			</div>';
	}
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php
			if(isset($_REQUEST['themquyen'])) {
				if ($_REQUEST['themquyen'] == 'form') {
					echo '<br><br><form action="phanquyen.php" method="post" class="text-center">
							<div class="form-inline" >
				                <b style="width:150px; ">Quyền: </b> 
				                <select name="marole">';
									$result = select("SELECT `marole`,`tenrole` FROM `role` WHERE `marole` NOT IN (SELECT `marole` FROM `nguoidung_role` WHERE `manguoidung`=".$_REQUEST['manguoidung'].")");
									while($role = $result->fetch_assoc()){
										echo '<option value="'.$role['marole'].'">'.$role['tenrole'].'</option>';
									}	
							echo '</select>
				            </div><br>
				            <div class="form-inline"> 
								<button class="btn btn-default" name="themquyen" value="'.$row["manguoidung"].'" > Thêm Quyền Cho Tài Khoản</button> 
						</form>
								<a href="admin.php?role='.$row["manguoidung"].'" class="btn btn-danger">Thoát</a>
							</div>';
 
				}
			}
			else if(isset($_REQUEST['xoaquyen'])) {
				if ($_REQUEST['xoaquyen'] == 'form') {
					echo '<br><br><form action="phanquyen.php" method="post" class="text-center">
							<div class="form-inline" >
				                <b style="width:250px; ">Các quyền của tài khoản: </b> 
				                <select name="marole">';
									$result = select("SELECT `marole`,`tenrole` FROM `role` WHERE `marole` IN (SELECT `marole` FROM `nguoidung_role` WHERE `manguoidung`=".$_REQUEST['manguoidung'].")");
									while($role = $result->fetch_assoc()){
										echo '<option value="'.$role['marole'].'">'.$role['tenrole'].'</option>';
									}	
							echo '</select>
				            </div><br>
				            <div class="form-inline"> 
								<button class="btn btn-default" name="xoaquyen" value="'.$row["manguoidung"].'" > Xóa Quyền (Tài Khoản)</button> 
						</form>
								<a href="admin.php?role='.$row["manguoidung"].'" class="btn btn-danger">Thoát</a>
							</div>';
				}
			}
			else {
				echo '<form method="post" class="form-inline">
						<input type="hidden" name="manguoidung" value="'.$row["manguoidung"].'">
						<button class="btn btn-default" name="themquyen" value="form" > Thêm Quyền</button>
					
						<input type="hidden" name="manguoidung" value="'.$row["manguoidung"].'">
						<button class="btn btn-default" name="xoaquyen" value="form" > Xóa Quyền</button>
					</form>';
			}
		?>
		
	</div>
</div>


