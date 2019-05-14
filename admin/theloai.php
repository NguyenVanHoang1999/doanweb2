<?php
	if(isset($_POST['xoatl'])){
		echo($_POST['xoatl']);
		include '../csdl.php';
		select("DELETE FROM `theloai` WHERE `matheloai` = '".$_POST['xoatl']."'");
		header("location:admin.php?id=tl");
	}
	if (isset($_POST['suatl'])) {
		echo($_POST['suatl']);
		include '../csdl.php';
		select("UPDATE `theloai` SET `tentheloai`='".$_POST['tentheloai']."' WHERE `matheloai`='".$_POST['suatl']."'");
		header("location:admin.php?id=tl");
	}
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php
			if(!isset($_POST['themtl'])){
				echo '<form method="post">
						<button class="btn btn-default" name="themtl" value="form" > Thêm thể loại</button>
					</form>';			
			}
			else {
				if ($_POST['themtl']=='form') {
					echo '<br><form action="theloai.php" method="post" class="text-center" onsubmit="return kt_themtl()">
							<div class="form-inline" >
				                <b style="width:150px; ">Mã thể loại: </b> 
				                <input type="text" class="form-control"  size="40" name="matheloai" id="matheloai" />
				            </div>
				            <div class="form-inline" >
				                <b style="width:150px; ">Tên thể loại: </b> 
				                <input type="text" class="form-control"  size="40" name="tentheloai" id="tentheloai" />
				            </div>
				            <br>
				            <div class="form-inline"> 
								<button class="btn btn-default" name="themtl" value="themtl" > Thêm thể loại</button>
						</form>
								<a href="admin.php?id=tl" class="btn btn-danger">Thoát</a>
							</div><br><br>';
				}
				else {
					echo($_POST['matheloai']);
					include '../csdl.php';
					select("INSERT INTO `theloai`(`matheloai`, `tentheloai`) VALUES ('".$_POST['matheloai']."','".$_POST['tentheloai']."')");
					header("location:admin.php?id=tl");
				}

			}

			if (isset($_POST['updtl'])) {
				echo($_POST['updtl']);
				$result = select("SELECT * FROM `theloai` WHERE `matheloai`='".$_POST['updtl']."'");
				$row = $result->fetch_assoc();
				echo '<br><form action="theloai.php" method="post" class="text-center" onsubmit="return kt_suatl()">
			            <div class="form-inline" >
			                <b style="width:150px; ">Tên thể loại: </b> 
			                <input type="text" class="form-control"  size="40" name="tentheloai" id="tentheloai" value="'.$row['tentheloai'].'" />
			            </div>
			            <br>
			            <div class="form-inline"> 
							<button class="btn btn-default" name="suatl" value="'.$_POST['updtl'].'" > Sửa thể loại</button>
					</form>
							<a href="admin.php?id=tl" class="btn btn-danger">Thoát</a>
						</div><br><br>';
			}
		?>		
	</div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-striped table-bordered text-center">
			<tr><td>STT</td><td>Mã Thể Loại</td><td>Tên Thể loại</td><td></td></tr>
			<?php
				$stt=1;
				$result = select("SELECT * FROM `theloai`");
				while ($row = $result->fetch_assoc()) {
					echo("<tr><td>".$stt++."</td><td>".$row['matheloai']."</td><td>".$row['tentheloai']."</td>
						<td class='form-inline'>
							<form action='theloai.php' method='post'>
								<input type='hidden' value='".$row["matheloai"]."'' name='xoatl'>
								<button class='btn btn-default glyphicon glyphicon-remove'> XÓA </button>
							</form> 
							<form method='post'>
								<button type='submit' class='btn btn-default glyphicon glyphicon-wrench' value='".$row["matheloai"]."' name='updtl'> SỬA </button>
							</form>
						</td></tr>");
				}
			?>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
<script type="text/javascript">
	function kt_themtl() {
		if (document.getElementById('matheloai').value == "") {
			alert("Mã thể loại không thể bỏ trống");
			document.getElementById('matheloai').focus();
			return false;
		}
		//else if ktra patt
		else if (document.getElementById('tentheloai').value == "") {
			alert("Tên thể loại không thể bỏ trống");
			document.getElementById('tentheloai').focus();
			return false;
		} //else ky tu la
		return true; 
	}
	function kt_suatl() {
		if (document.getElementById('tentheloai').value == "") {
			alert("Tên thể loại không thể bỏ trống");
			document.getElementById('tentheloai').focus();
			return false;
		} //else 
		return true;
</script>