<?php
function nguoidung(){
	$result = select('SELECT * FROM `nguoidung` WHERE `manguoidung` IN (SELECT `manguoidung` FROM `nguoidung_role` WHERE `marole`=3)');
	if ($result->num_rows > 0) {
		echo '<table class="table table-striped table-bordered text-center" > <tr><td> Mã người dùng </td> <td> Họ tên </td> <td> Tài khoản</td> <td> Mật khẩu </td> <td> Số điện thoại </td> <td> Email </td> <td> </td> </tr>' ;
		while($row = $result->fetch_assoc()) {
			echo '<tr><td  style="padding: auto 0;">'.$row["manguoidung"].'</td> 
					<td>' . $row["hoten"]. '</td> 
					<td>' .$row["taikhoan"] . '</td> 
					<td>' .$row["matkhau"]. ' </td> 
					<td>' .$row["sodienthoai"] .'</td>
					<td>' .$row["email"]. ' </td> 
					<td class="form-inline"> 
						<form action="xoanguoidung.php" method="post">
							<input type="hidden" value="'.$row["manguoidung"].'" name="xoanguoidung">
							<button class="btn btn-default glyphicon glyphicon-remove"> XÓA </button>
						</form>
						<form method="get">
							<input type="hidden" value="'.$row["manguoidung"].'" name="updu">
							<button type="submit" class="btn btn-default glyphicon glyphicon-wrench"> SỬA </button>
						</form>
						<form method="get">
							<input type="hidden" value="'.$row["manguoidung"].'" name="role">
							<button class="btn btn-default glyphicon glyphicon-hand-up"> PHÂN QUYỀN </button>
						</form>
					</td> 
				</tr>';
		}
		echo '</table>';
	} else {	echo "Không có người dùng nào";	}
}
function nhanvien(){
	$result = select('SELECT * FROM `nguoidung` WHERE `manguoidung` IN (SELECT `manguoidung` FROM `nguoidung_role` WHERE `marole`=2)');
	if ($result->num_rows > 0) {
		echo '<table class="table table-striped table-bordered text-center" > <tr><td> Mã người dùng </td> <td> Họ tên </td> <td> Tài khoản</td> <td> Mật khẩu </td> <td> Số điện thoại </td> <td> Email </td> <td> </td> </tr>' ;
		while($row = $result->fetch_assoc()) {
			echo '<tr><td  style="padding: auto 0;">'.$row["manguoidung"].'</td> 
					<td>' . $row["hoten"]. '</td> 
					<td>' .$row["taikhoan"] . '</td> 
					<td>' .$row["matkhau"]. ' </td> 
					<td>' .$row["sodienthoai"] .'</td>
					<td>' .$row["email"]. ' </td> 
					<td class="form-inline"> 
						<form action="xoanguoidung.php" method="post">
							<input type="hidden" value="'.$row["manguoidung"].'" name="xoanguoidung">
							<button class="btn btn-default glyphicon glyphicon-remove"> XÓA </button>
						</form>
						<form method="get">
							<input type="hidden" value="'.$row["manguoidung"].'" name="updu">
							<button type="submit" class="btn btn-default glyphicon glyphicon-wrench"> SỬA </button>
						</form>
						<form method="get">
							<input type="hidden" value="'.$row["manguoidung"].'" name="role">
							<button class="btn btn-default glyphicon glyphicon-hand-up"> PHÂN QUYỀN </button>
						</form>
					</td> 
				</tr>';
		}
		echo '</table>';
	} else {	echo "Không có nhân viên nào";	}
}
function admin(){
	$result = select('SELECT * FROM `nguoidung` WHERE `manguoidung` IN (SELECT `manguoidung` FROM `nguoidung_role` WHERE `marole`=1)');
	if ($result->num_rows > 0) {
		echo '<table class="table table-striped table-bordered text-center" > <tr><td> Mã người dùng </td> <td> Họ tên </td> <td> Tài khoản</td> <td> Mật khẩu </td> <td> Số điện thoại </td> <td> Email </td> </tr>' ;
		while($row = $result->fetch_assoc()) {
			echo '<tr><td  style="padding: auto 0;">'.$row["manguoidung"].'</td> 
					<td>' . $row["hoten"]. '</td> 
					<td>' .$row["taikhoan"] . '</td> 
					<td>' .$row["matkhau"]. ' </td> 
					<td>' .$row["sodienthoai"] .'</td>
					<td>' .$row["email"]. ' </td>  
				</tr>';
		}
		echo '</table>';
	} else {	echo "Không có tài khoản admin nào";	}
}


?>