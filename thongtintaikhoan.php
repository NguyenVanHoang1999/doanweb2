<?php session_start();
	if(isset($_SESSION['islogin']) == false)
	{
		$_SESSION['islogin']=0;
	}
	if(isset($_SESSION['quyen']))
	{
		if($_SESSION['quyen'] == '1')
		{
			header("location:admin/admin.php");
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'layinfotk.php';
	?>
	
<title>PCWorld</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">

	
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome/css/all.css" /> <!--thu vien hinnh anh icon-->
  
  <style>
  /* Make the image fully responsive */
	.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #737373;
}
    .navbar{
    	padding:0;

    }
}
  </style>
</head>

<body>
	
<div class="container" >


<div class="row bg-light" style="margin-top:2px">
		<div class ="ic col-md-4">
			<div class="row">
                <div class="col-md-7">
                	<div class="row">    
                    	<span style="margin:0 auto;"><img class="img-fluid mx-auto d-block" src="images/logohinh.png"></span>
					</div>
                </div>
		  </div>
		</div> <!-- dong div class ic-->
	  	<!--tao popup tai khoan-->
        
		
           	
	<div class="col-md-8" >
			<nav class="navbar navbar-expand-sm bg-light  navbar-light ">
				 
				  <!-- Links -->
				  <ul class="navbar-nav ">
				    <li class="nav-item">
				      <a class="nav-link" href="index.php"><b class="text-info"><i class="fas fa-home"></i>Trang chủ</b></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#"><b class="text-info"><i class="fas fa-user-shield"></i>Bảo mật tài khoản</b></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#"><b class="text-info"><i class="fas fa-history"></i>Lịch sử đăng nhập</b></a>
				    </li>
				  </ul>
				</nav>
	</div>
            
    </div>
 
            
            	
           
              <!--het menu-->     
	
        <!-----het class hinh--->
        <div class="text-center text-muted"><h3>Thông Tin Tài Khoản</h3></div>
        <div class="row" id="bang">
		        <div class="col-md-3"></div>
				<div class="col-md-8 ">
					<form method="post" onsubmit="return kiemtrathongtin();" action="capnhatthongtintk.php">
					<div class="row">
						<div class="col-sm-3"><h6>Họ và tên</h6></div>
						<div class="col-sm-6"><input type="text" class="form-control-lg" name="hovaten" id="hovaten" value="<?php echo $error['HoTen']; ?>"><span class="help-block"></span></div>
						<div class="col-sm-3"></div>
					</div>
					<div class="row">
						<div class="col-sm-3"><h6>Tên đăng nhập</h6></div>
						<div class="col-sm-6"><input type="text" class="form-control-lg" name="tendangnhap" id="tendangnhap" disabled="disable" value="<?php echo $error['TenDangNhap']; ?>"><span class="help-block"></span></div>
						<div class="col-sm-3"></div>
					</div>
					<div class="row">
						<div class="col-sm-3"><h6>Mật khẩu</h6></div>
						<div class="col-sm-6"><input type="password" class="form-control-lg" id="matkhau" disabled="disable" value="<?php echo $error['MatKhau']; ?>"><span class="help-block"></span></div>
						<div class="col-sm-3"></div>
					</div>
					<div class="row">
						<div class="col-sm-3"><h6>Số điện thoại</h6></div>
						<div class="col-sm-6"><input type="text" class="form-control-lg" name="sodienthoai" id="sdt" value="<?php echo $error['Sdt']; ?>"><span class="help-block"></span></div>
						<div class="col-sm-3"></div>
					</div>
					<div class="row">
						<div class="col-sm-3"><h6>Email</h6></div>
						<div class="col-sm-6"><input type="text" class="form-control-lg" name="email" id="email" value="<?php echo $error['Email']; ?>"><span class="help-block"></span></div>
						<div class="col-sm-3"></div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-1"><input type="checkbox"  id="changepass" value="checked" onClick="mycheck()"></div>
						<div class="col-sm-5"><span>Thay đổi mật khẩu</span></div>
						<div class="col-sm-3"></div>
					</div>
					<div id="change" style="display: none">
						<div class="row">
							<div class="col-sm-3"><h6>Mật khẩu cũ</h6></div>
							<div class="col-sm-6"><input type="password" class="form-control-lg" id="passcu"  placeholder="Nhập mật khẩu cũ">
								<span class="help-block" id="trungmatkhau"></span>
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="row">
							<div class="col-sm-3"><h6>Mật khẩu mới</h6></div>
							<div class="col-sm-6"><input type="password" name="matkhau" class="form-control-lg" id="passmoi"  placeholder="Mật khẩu từ 8 đến 32 kí tự"><span class="help-block"></span></div>
							<div class="col-sm-3"></div>
						</div>
						<div class="row">
							<div class="col-sm-3"><h6>Nhập lại</h6></div>
							<div class="col-sm-6"><input type="password" class="form-control-lg" id="repassmoi"  placeholder="Nhập lại mật khẩu mới"><span class="help-block"></span></div>
							<div class="col-sm-3"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-4"><input type="submit" name="sub" value="Cập nhật thông tin"class="btn btn-info btn-block"></div>
						<div class="col-sm-6"></div>
					</div>
					</form>
				</div>
				<div class="col-md-1"></div>
    </div>
        
   
       
  
        
        
       
        
        <!--dong phan than-->
        <div class="row" style="margin-top:6%">
			<div class="col-md-12"><hr/></div>
		</div>
        <div class="row" style="margin-top:6%">
        	<div class="col-md-12">
				<?php include 'footer.php' ?>
			</div>
        </div>
        <script type='text/javascript'>
			$( function () {
				$( window ).scroll( function () {
					if ( $( this ).scrollTop() != 0 ) { //neu scroll cua window bi keo xuong thi nut mui ten se dan hien len
						$( "#noop-top" ).
						fadeIn()
					} 
					else {
					$( "#noop-top" ).fadeOut()//nguoc lai bi mo dan
					}
				} );
				$( "#noop-top" ).
				click( function () { //khi click vao mui ten thì thanh scroll se tro ve ban dau , sau 0.7 s
					$( "body,html" ).animate( {
						scrollTop: 0
					}, 700 );
					return false
				} )
			} );
		</script> 
		<a id = 'noop-top' style = 'display: none; position: fixed; bottom: 20px; right:4%; cursor:pointer;font:12px arial;' title="Back to top"> <img src="images/up.png" width="75" height="75" class="img-fluid"/>
		</a>

</div> <!--ket thuc container-->

	
	<script>
		function mycheck(){
			var checkbox=document.getElementById("changepass");
			var text=document.getElementById("change");
			if(checkbox.checked== true){
				text.style.display="block";
			} else {
				 text.style.display = "none";
			  }
		}
	</script>
	<script>
	$(document).ready(function()
{
    // Khai báo đối tượng timeout để dùng cho hàm
    // clearTimeout
    var timeout = null;
 
    // Sự kiện keyup
    $('#passcu').keyup(function()
    {
        // Xóa đi những gì ta đã thiết lập ở sự kiện 
        // keyup của ký tự trước (nếu có)
        
        clearTimeout(timeout);
 
        // Sau khi xóa thì thiết lập lại timeout
        timeout = setTimeout(function ()
        {
            // Lấy nội dung search
            $('#trungmatkhau').html("");
           var nlmkcu = $("#passcu").val();
           var mkcu = $("#matkhau").val();
 
            // Gửi ajax search
            $.ajax({
                type : 'post',
                dataType : 'json',
                data : {password : nlmkcu},
                url : 'mahoapassword.php',
                success : function (result){
                  if (!result.hasOwnProperty('matkhau') || result['matkhau'] != 'success')
            {
                alert('Có vẻ như bạn đang hack website của tôi');
                return false;
            }
            var html="";
            if(result['password'] != "")
            {
            	nlmkcu=result['password'];
            }
           if(nlmkcu != mkcu)
           {
           		html="lỗi";
           }
 	
            
 
            
 
            // Cuối cùng kiểm tra xem có lỗi không
            // Nếu có thì xuất hiện lỗi
            if (html != ''){
                $('#trungmatkhau').append('<span style="color:red;font-weight:bold">Mật khẩu không trùng khớp<i class="fas fa-times-circle" ></i></span>');
            }
            
                },
                error : function (error){
                	alert("không trả về được");
                }
            });
        }, 1000);
    });
});
	function kiemtrathongtin()
	{

				var name=document.getElementById("hovaten");
				
				var sdt=document.getElementById("sdt");
				
				var tk = document.getElementById("tendangnhap");
				
				var passcu=document.getElementById("matkhau")

				var repasscu=document.getElementById("passcu");

				var passmoi=document.getElementById("passmoi");
			
				var repassmoi=document.getElementById("repassmoi");
				
				var sdt=document.getElementById("sdt");
				var email=document.getElementById("email");
				var suamk=document.getElementById("change");

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
				valrepasscu = repasscu.value;
				if(suamk.style.display != "none")
				{
							
							   

							 
							if(repasscu.value==""){
								alert("Vui lòng nhập mật khẩu cũ");
								repasscu.focus();
								return false;
							}
					
							if(document.getElementById("trungmatkhau").innerHTML == '<span style="color:red;font-weight:bold">Mật khẩu không trùng khớp<i class="fas fa-times-circle"></i></span>')
							{
								alert("Mật khẩu cũ không đúng");
								repasscu.focus();
								return false;
							}
							if(passmoi.value==""){
							alert("Vui lòng nhập mật khẩu mới");
							passmoi.focus();
							return false;
							}
							var pattpwd= /^[A-Za-z0-9_-]{8,}$/;
							if(!pattpwd.test(passmoi.value)){
								alert("Mật khẩu mới không hợp lệ");
								passmoi.focus();
								return false;
							}
							if(repassmoi.value==""){
								alert("Vui lòng nhập mật khẩu vừa tạo");
								repassmoi.focus();
								return false;
							}
							if(passmoi.value!=repassmoi.value){
							   alert("Mật khẩu không trùng khớp");
							   repassmoi.focus();
								return false;
						   }

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
				
				
				alert("Cập nhật tài khoản thành công");
				return true;
				
	}
				
 </script>

</body>
</html>
