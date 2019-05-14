function dangky()
	{
		var name=document.getElementById("ten");
				var tk = document.getElementById("taikhoandk");
				var pawd=document.getElementById("pwd");
				var nlmk=document.getElementById("nlmk");
				var sdt=document.getElementById("sdt");
				var email=document.getElementById("email");
				var ttk = document.getElementById("trungtaikhoan");
				
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
				if(ttk.innerText=="Tài khoản đã tồn tại ")
				{
					alert("Tài khoản đã tồn tại . Vui lòng đổi tên khác !");
					tk.focus();
					return false;
				}
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
				if(!pattpwd.test(pwd.value)){
					alert("Mat khau khong hop le");
					pwd.focus();
					return false;
				}
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
				<?php
				
				if(!($conn = mysqli_connect('localhost','root','','web',3306)))
				die ('Không thể kết nối tới database');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['tendangnhap']);
    $password   = addslashes($_POST['password']);
    $email      = addslashes($_POST['email']);
    $hoten      = addslashes($_POST['hovaten']);
    $sdt        = addslashes($_POST['sodienthoai']);
	//Lưu thông tin thành viên vào bảng
    // Tiến hành lưu vào CSDL nếu không có lỗi
	$sql="insert into khachhang(hoten,taikhoan,matkhau,sodienthoai,email,marole) value ('$hoten',$username','$password','$sdt','$email',2)";
	if(isset($_POST['tendangnhap'])){
    $conn->query($sql);
	// Ngắt kết nối
	$conn->close();
	}
				
	?>
				alert("Tạo tài khoản thành công mời bạn đăng nhập");
				return true;

	}
		