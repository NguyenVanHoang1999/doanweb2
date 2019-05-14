<?php

    if (isset($_POST['fupdu'])) {
        $updu = "UPDATE `nguoidung` SET `hoten`='".$_POST['tenngdung']."',`matkhau`='".$_POST['matkhau']."',`sodienthoai`='".$_POST['sdt']."',`email`='".$_POST['email']."' WHERE `manguoidung`=".$_POST['mangdung'];
        select($updu);
        header('location:admin.php?id=tv');
    } else {
        $ngdung=$_GET['updu'];
        if (isset($ngdung)){
            $qry = 'select * from `nguoidung` where `manguoidung`="'.$ngdung.'"';
            $result = select($qry);
            $row = $result->fetch_assoc();
        }
    }
?>
<form action="suanguoidung.php" method="post" onsubmit="return dangky()">
	<div align="center"> <label> SỬA THÀNH VIÊN </label>  </div>
	<div class="form-group"> 
		<label>Họ tên người dùng: </label> 
        <input type="text" class="form-control"  maxlength="30" size="30" value="<?php echo $row['hoten'] ?>" name="tenngdung" id="tenngdung" />
    </div>
    <div class="form-group"> 
		<label>Mật khẩu: </label> 
        <input type="text" class="form-control"  maxlength="30" size="30" value="<?php echo $row['matkhau'] ?>" name="matkhau" id="matkhau" />
    </div>
    <div class="form-group"> 
        <label>Nhập lại mật khẩu: </label> 
        <input type="text" class="form-control"  maxlength="30" size="30" value="<?php echo $row['matkhau'] ?>" name="nlmatkhau" id="nlmatkhau" />
    </div>
    <div class="form-group"> 
		<label>Số điện thoại: </label> 
        <input type="text" class="form-control"  maxlength="30" size="30" value="<?php echo $row['sodienthoai'] ?>" name="sdt" id="sdt" />
    </div>
    <div class="form-group"> 
		<label>Email: </label> 
        <input type="text" class="form-control"  maxlength="30" size="30" value="<?php echo $row['email'] ?>" name="email" id="email" />
    </div>
    <div>
    	<input type="hidden" value="<?php echo $row['manguoidung'] ?>" name="mangdung">
		<input type="submit" class="btn btn-success" style="background-color:black" name="fupdu" value="update">
    </div>
</form>
<script type="text/javascript">

    function dangky() {
        var name=document.getElementById("tenngdung");
                var pwd=document.getElementById("matkhau");
                var nlmk=document.getElementById("nlmatkhau");
                var sdt=document.getElementById("sdt");
                var email=document.getElementById("email");
                
                if(name.value==""){
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