<?php
	if (isset($_REQUEST['themu'])) {
		include '../csdl.php';
		$sql_them = "INSERT INTO `nguoidung`(`manguoidung`, `hoten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`) VALUES ('".$_POST['manguoidung']."','".$_POST['ten']."','".$_POST['taikhoandk']."','".$_POST['pwd']."','".$_POST['sdt']."','".$_POST['email']."')";
		
		$sql_role = "INSERT INTO `nguoidung_role`(`manguoidung`, `marole`) VALUES ('".$_POST['manguoidung']."','".$_POST['role']."')";
		
		$query = select("SELECT TaiKhoan,MKhau FROM taikhoan WHERE TaiKhoan='".$_POST['taikhoandk']."'");
		$query_em = select("SELECT Email FROM taikhoan WHERE Email='".$_POST['email']."'");
	
	    if (get_numrow($query) == 1) {
	        echo "Tên đăng nhập này đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
	        exit;
	    }
		if (get_numrow($query_em) == 1) {
	        echo "Email này đã đăng ký. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
	        exit;
	    }
		select($sql_them);
		select($sql_role);
		header("location:admin.php?addu");
	}
?>
<div>
	<h3 class="modal-title text-center">Đăng Kí Tài Khoản</h3>
	<br>
</div>
<div style="padding-left: 40px; width: 750px">
  <form action="themnguoidung.php" method="post" onsubmit="return dangky()" >
	<div class="form-group">
    	<label> Mã người dùng</label>
    	<input type="text" class="form-control" name="manguoidung" id="manguoidung">
    </div>
	<div class="form-group">
    	<label> Họ và tên</label>
    	<input type="text" class="form-control" name="ten" id="ten">
    </div>
    <div class="form-group">
    	<label> Tên Đăng Nhập</label>
    	<input type="text" class="form-control" name="taikhoandk" id="taikhoandk" />
    </div>
    <div class="form-group">
      	<label> Mật Khẩu</label>
      	<input type="password" class="form-control" name="pwd" id="pwd">
    </div>
    <div class="form-group">
     	<label> Nhập Lại Mật Khẩu</label>
      	<input type="password" class="form-control" name="nlmk" id="nlmk" />               
    </div>
    <div class="form-group">
     	<label> Số Điện Thoại</label>
      	<input type="text" class="form-control" name="sdt" id="sdt" />
    </div>
    <div class="form-group">
      	<label> Email</label>
        <input class="form-control" type="text" name="email" id="email" />
    </div>
    <div class="form-inline">
      	<b style="width: 150px"> Quyền của tài khoản :  </b>
      	<select class="form-control" name="role">
	      	<?php
	      		$qry = "SELECT `marole`, `tenrole` FROM `role`";
	      		$result = select($qry);
	      		while($row = $result->fetch_assoc()){
					echo "<option value='".$row['marole']."'>".$row['tenrole']."</option>";
	      		}
	      	?>	
        </select>
    </div>
    <br>
	<div class="text-center">
		<button type="reset" class="btn btn-danger" data-dismiss="modal">Làm Mới</button>
		<input type="submit" class="btn btn-success" style="background-color: black" name="themu" value="Tạo Người Dùng" >
	</div>
  </form>
</div>
<script >
	function dangky()
	{
		var name=document.getElementById("ten");
				var tk = document.getElementById("taikhoandk");
				var pawd=document.getElementById("pwd");
				var nlmk=document.getElementById("nlmk");
				var sdt=document.getElementById("sdt");
				var email=document.getElementById("email");
				
				/*if(name.value==""){
					alert("Vui long nhap ho ten");
					name.focus();
					return false;
				}
				var pattten= /[A-Za-z\D_ÀÁÂĂÈÉỀÍ̉ÓÔƠÙÚAĐIUOàáâăèéếị́óôơùúadiuoUA??????????????????ua???????????????????????????????????????????????????????????????Ư?????????-]{3,16}$/gi;
				
				if(!pattten.test(name.value)){
					alert("Ho ten khong hop le");
					//name.value="";
					name.focus();
					return false;
					
					
				}*/
				if(tk.value=="")
				{
					alert("Vui lòng nhập tên đăng nhập");
					tk.focus();
					return false;
				}
				var pattk = /^[A-Za-z0-9]{5,20}/;
				if(!pattk.test(tk.value)){
					alert("tên đăng nhập không hợp lệ");
					tk.focus();
					return false;
				}
				
				if(pwd.value==""){
					alert("Vui long nhap mat khau");
					pwd.focus();
					return false;
				}
				var pattpwd= /^[A-Za-z0-9_-]{8,}$/;
				/*if(!pattpwd.test(pwd.value)){
					alert("Mat khau khong hop le");
					pwd.focus();
					return false;
				}*/
				if(nlmk.value==""){
					alert("Vui long nhap mat khau vua tao");
					nlmk.focus();
					return false;
				}
				if(pwd.value!=nlmk.value){
				   alert("Mat khau vua nhap khong khop voi mat khau da tao")
				   nlmk.focus();
					return false;
				   }
				if(sdt.value==""){
					alert("Vui long nhap so dien thoai");
					sdt.focus();
					return false;
				}
				var pattsdt= /^0[0-9]{9}/gi;
				if(!pattsdt.test(sdt.value)){
					alert("SĐT khong hop le");
					sdt.focus();
					return false;
				}
				if(email.value==""){
					alert("Vui long nhap dia chi email");
					email.focus();
					return false;
				}
				var pattmail= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{3})+$/;
				if(!pattmail.test(email.value)){
					alert("Email khong hop le");
					//email.value="";
					email.focus();
					return false;
				}
				alert(" Đăng ký thành công");
				return true;

	}
		
</script>