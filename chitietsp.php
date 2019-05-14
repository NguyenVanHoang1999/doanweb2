<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chi Tiết Sản Phẩm</title>

<link rel="shortcut icon" href="images/icons1.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dropdown.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome/css/all.css" /> <!--thu vien hinnh anh icon-->
<?php session_start();
	
	if(isset($_SESSION['islogin']) == false)
	{
		$_SESSION['islogin']=0;
	}
	if(isset($_SESSION['quyen']))
	{
		if($_SESSION['quyen'] == '1')
		{
			//header("location:admin/admin.php");
		}
	}
 ?>
 <?php 
	$total = 0;
	if(isset($_SESSION['cart']) && $_SESSION['cart'] != null)
	{
		foreach($_SESSION['cart'] as $list)
			$total += $list['qty'];
	}
?>

 
<style>
.imgleft{
	padding-top: 20px;
    width: 64px;
    height: 64px;
}
#hinh_sp{
    float:left; 
    width:400px;
    text-align:center;
}
#ten_sp{
    font-size:35px;
    font-style:italic;
}
#gia_sp{
    font-size:30px;
    color: red;
}
#mua_ngay{
    background-color:#C00; 
    color:#FFF; 
    text-align:center; 
    
}
#gio_hang{
    background:#FFF; 
    color:red; 
    height:45px; 
    width:250px; 
    border: 1px solid red;
}
#tttk a:active{
	background-color:whitesmoke;
	color:red;
}

</style>
 <script type="text/javascript">
 function dangky()
	{
		var name=document.getElementById("ten");
				var tk = document.getElementById("taikhoandk");
				var pawd=document.getElementById("pwd");
				var nlmk=document.getElementById("nlmk");
				var sdt=document.getElementById("sdt");
				var email=document.getElementById("email");
				var trungtaikhoan = document.getElementById("trungtaikhoan");
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
				if(document.getElementById("trungtaikhoan").innerHTML=='<span style="color:red;font-weight:bold">Tài khoản đã tồn tại <i class="fas fa-times-circle"></i></span>')	
				{
					alert("Tài khoản đã tồn tại");
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
				   alert("Mat khau vua nhap khong khop voi mat khau da tao");
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
				
				
				alert("Tạo tài khoản thành công mời bạn đăng nhập");
				return true;
		<?php
				
				if(!($conn = mysqli_connect('localhost','root','','web',3306)))
				die ('Không thể kết nối tới database');
			if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
          
    //Lấy dữ liệu từ file dangky.php
			if(isset($_POST['tendangnhap']))
			{


			
    $username   = addslashes($_POST['tendangnhap']);
    $password   = addslashes($_POST['matkhau']);
    $email      = addslashes($_POST['email']);
    $hoten      = addslashes($_POST['hovaten']);
    $sdt        = addslashes($_POST['sodienthoai']);
    $password = md5($password);
	//Lưu thông tin thành viên vào bảng
    // Tiến hành lưu vào CSDL nếu không có lỗi
	$sql="insert into nguoidung(hoten,taikhoan,matkhau,sodienthoai,email,marole) value ('$hoten','$username','$password','$sdt','$email',3)";
	if(isset($_POST['tendangnhap'])){
    $conn->query($sql);
	// Ngắt kết nối
	$conn->close();
	}
	$_POST['tendangnhap'] = false;
}
				
	?>
				
	}
 </script>
<script type="text/javascript">
function thongbao(){
			alert("Thêm vào giỏ thành công");

		}
$(document).ready(function()
{
$('#formdn').submit(function (e)
{
    // Xóa trắng thẻ div show lỗi
     $('#loidn').html('');

    e.preventDefault();
    var sub = this;
    var username = $('#taikhoandn').val();
    var password = $('#matkhaudn').val();
 
    // Kiểm tra dữ liệu có null hay không
    if ($.trim(username) == ''){
        alert('Bạn chưa nhập tên đăng nhập');
		document.getElementById("taikhoandn").focus();
        return false;
    }
 
    if ($.trim(password) == ''){
        alert('Bạn chưa nhập mật khẩu');
		document.getElementById("matkhaudn").focus();
        return false;
    }
    var dangnhap = true;
    
    
 
    // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
    // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
    // vì sợ bài dài sẽ rối
 
    $.ajax({
        url : 'kiemtradangnhap.php',
        type : 'post',
        dataType : 'json',
        data : {
            username : username,
            password : password
        },
        success : function (result)
        {
            // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
            // Đây là kết quả trả về từ file do_validate.php
            if (!result.hasOwnProperty('error') || result['error'] != 'success')
            {
                alert('Có vẻ như bạn đang hack website của tôi');
                dangnhap = false;
                return false;
            }
 
            var html = '';
			var html1='';
			
			
 
            // Lấy thông tin lỗi username
            if ($.trim(result.username) != ''){
                html += result.username;
            }
            // Lấy thông tin lỗi email
            if ($.trim(result.password) != ''){
                html1 += result.password;
            }
 
            // Cuối cùng kiểm tra xem có lỗi không
            // Nếu có thì xuất hiện lỗi
            if (html != '' || html1 != ''){
                $('#loidn').append('<span style="color:red;font-weight:bold">Tài khoản hoặc mật khẩu không đúng <i class="fas fa-times-circle" ></i></span>');
                dangnhap = false;
   
                return false;
            }
            
			if(html == '' && html1 == '')
			{
				alert("Đăng nhập thành công");
				

				sub.submit();
				return true;
			}
           
        },
        error : function(error){
        	alert("error");
        },
    });
   

});          
});
</script>
<script>
function thaydoihinh(giatri, hinh) {
	hinhsp = hinh.split('.');
    switch (giatri) {
        case 0:
            document.getElementById("hinh_sp").innerHTML = '<img src="' + hinh + '" width="350px" height="350px" />';
            break;
        case 1:
            document.getElementById("hinh_sp").innerHTML = '<img src="' + hinhsp[0] + '_1.' + hinhsp[1] + '"width="350px" height="350px"/>';
            break;
        case 2:
            document.getElementById("hinh_sp").innerHTML = '<img src="' + hinhsp[0] + '_2.' + hinhsp[1] + '"width="350px" height="350px"/>';
            break;
        case 3:
            document.getElementById("hinh_sp").innerHTML = '<img src="' + hinhsp[0] + '_3.' + hinhsp[1] + '"width="350px" height="350px"/>';
            break;
    }
}
</script>
<?php 
	include 'csdl.php';
	$masp = isset($_GET["masp"]) ? $_GET["masp"] : "";
	$sql = 'select * from `sanpham` where `masanpham`="'.$masp.'"';
	$result = select($sql);
	$row = $result->fetch_assoc();
	$hinh = $row["hinh"];
	$hinhsp = explode(".",$hinh);
?>
<div class="container" >
	<div class="row bg-light" style="margin-top:2px">
		<div class ="ic col-md-4">
			<div class="row">
                <div class="col-md-7">
                	<div class="row">    
                    	<a href="index.php"><span style="margin:0 auto;"><img class="img-fluid mx-auto d-block" src="images/logohinh.png"></span></a>
					</div>
                </div>
		  </div>
		</div> <!-- dong div class ic-->
	  	<!--tao popup tai khoan-->
        
		<div class="tkhoan col-md-8 ">
      		<div class="row">
				<div  class="taikhoan col-md-12">
					<div class="row">
						<?php if($_SESSION['islogin'] == 1)
									echo '<div class="col-md-4 ">
									<li class="nav-item dropdown">
								   <a class="nav-link" style="padding:0px" href="#" id="navbarDropdown"> <b> Chào '.$_SESSION['username'].'</b></a>
								   <div class="dropdown-content" >
								   <a class="dropdown-item" href="thongtintaikhoan.php"><i class="fas fa-user-cog"></i>Thông Tin Tài Khoản</a>
								   <div class="dropdown-divider"></div>
								   <a class="dropdown-item" href="#"><i class="far fa-bell"></i>Thông báo của bạn</a>
								   <div class="dropdown-divider"></div>
								   <a class="dropdown-item" href="donhang.php"><i class="far fa-clipboard"></i>Xem đơn hàng đang đặt</a>
								   <div class="dropdown-divider"></div>
								   <a class="dropdown-item" href="#"><i class="far fa-list-alt"></i>Xem lịch sử mua hàng</a>
								   </div>
								</li>
									</div>';
									else
									echo '<div  class="col-md-4"><a href="#" id="taik" data-toggle="modal" data-target="#myModal"><i class="fas fa-user" style="margin:0 auto;color: black;margin-top:3%">Đăng Nhập</i></a></div>';
							  ?>
						<?php if($_SESSION['islogin'] == 1)
									{
										$ma=$_GET['masp'];
									echo '<div class="col-md-4"><a href="dangxuat.php?tr=ctsp&masp='.$ma.'" ><i class="fas fa-sign-out-alt" style="margin:0 auto;color:black;margin-top:3%">Đăng Xuất</i></a></div>';
								}
									else
									echo '<div  class="col-md-4"><a href="#" id="dki" data-toggle="modal" data-target="#myModal1"><i class="fas fa-user" style="margin:0 auto;color: black;margin-top:3%">Đăng Ký</i></a></div>'
							  ?>
						
						
						<div class="col-md-4"><a href="giohang.php" id="giohang"><i class="fas fa-shopping-cart" style="color: black;margin-top:3%;">Giỏ Hàng<?php
							if($total !=0)
							{
								echo '<sup><span class="badge badge-info">'.$total.'</span><sup>';
							}
							else
							{
								
							}
						?>
						</i></a></div>
					</div>
				</div> 
			</div>	
           
           
           
           
			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
				  <div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
					  <h4 class="modal-title">Đăng Nhập Tài Khoản</h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<form action="chitietsp.php?masp=<?php echo $masp;?>" id="formdn" method="post">
						  <div class="form-group">
							<label for="taikhoandn">Tài Khoản</label>
							<input type="text" class="form-control" id="taikhoandn" name="taikhoandn">
							
						  </div>
						  <div class="form-group">
							<label for="passdn">Mật Khẩu</label>
							<input type="password" class="form-control" id="matkhaudn" name="matkhaudn">
							
						  </div>
						  <div id="loidn"></div>
						  <div class="custom-control custom-checkbox">
						  	
							<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
							<label class="custom-control-label" for="customCheck">Nhớ Mật Khẩu</label>
						  </div>

					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
						  <button type="submit" class="btn btn-dark" id="btndangnhap" >Đăng Nhập</button>
						</form>
					</div>
				  </div>
				</div>
			</div>
  
		</div>
		

<!-----------het------------->
 <!-- The Modal -->

	

		<div class="modal" id="myModal1">
			<div class="modal-dialog">
				<div class="modal-content">
      
        		<!-- Modal Header -->
        		<div class="modal-header">
          			<h4 class="modal-title">Đăng Kí Tài Khoản</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        
        		<!-- Modal body -->
        		<div class="modal-body">
          			<form method="post" onsubmit="return dangky();" >
              			<div class="form-group">
                			<label for="ten">Họ và tên</label>
                			<input type="text" class="form-control" id="ten" name="hovaten">
              			</div>
              			<div class="form-group">
              				<label for="taikhoandk">Tên Đăng Nhập</label>
                			<input type="text" class="form-control" id="taikhoandk" name="tendangnhap" />
                			<div id="trungtaikhoan" style="margin-top:1%"></div>
              			</div>
              			<div class="form-group">
                			<label for="pwd">Mật Khẩu</label>
                			<input type="password" class="form-control" id="pwd" name="matkhau">
              			</div>
               			<div class="form-group">
               				<label for="nlmk">Nhập Lại Mật Khẩu</label>
                			<input type="password" class="form-control" id="nlmk" name="nhaplaimatkhau"/>               
              			</div>
               			<div class="form-group">
               				<label for="sdt">Số Điện Thoại</label>
                			<input type="text" class="form-control" id="sdt" name="sodienthoai" />
               			</div>
              			<div class="form-group">
                			<label class="email">Email</label>
                  			<input class="form-control" type="text" id="email" name="email" />
               			</div>
          		</div>
        
        		<!-- Modal footer -->
        		<div class="modal-footer">
          			<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            		<input type="submit" class="btn btn-success" value="Đăng Kí">
    				</form>
        		</div>
        
      			</div>
    		</div>
		</div>
	</div><!--dong div class tkoan-->
	
	<!-- script ajax dang ky-->
	<script>


		//
		
		$(document).ready(function()
{
    // Khai báo đối tượng timeout để dùng cho hàm
    // clearTimeout
    var timeout = null;
 
    // Sự kiện keyup
    $('#taikhoandk').keyup(function()
    {
        // Xóa đi những gì ta đã thiết lập ở sự kiện 
        // keyup của ký tự trước (nếu có)
        
        clearTimeout(timeout);
 
        // Sau khi xóa thì thiết lập lại timeout
        timeout = setTimeout(function ()
        {
            // Lấy nội dung search
            $('#trungtaikhoan').html("");
           var username = $("#taikhoandk").val();
 
            // Gửi ajax search
            $.ajax({
                type : 'post',
                dataType : 'json',
                data : {user : username},
                url : 'kttktontai.php',
                success : function (result){
                  if (!result.hasOwnProperty('error') || result['error'] != 'success')
            {
                alert('Có vẻ như bạn đang hack website của tôi');
                return false;
            }
            var pattk = /^[A-Za-z0-9]{5,20}$/;
				if(!pattk.test(username)){
					$('#trungtaikhoan').append('<span style="color:red;font-weight:bold">Tài khoản không hợp lệ <i class="fas fa-times-circle" ></i></span>');
					return false;
				}
            var html = '';
 	
            // Lấy thông tin lỗi username
            if ($.trim(result.username) != ''){
                html += result.username + '<br/>';
            }
 
            
 
            // Cuối cùng kiểm tra xem có lỗi không
            // Nếu có thì xuất hiện lỗi
            if (html != ''){
                $('#trungtaikhoan').append('<span style="color:red;font-weight:bold">Tài khoản đã tồn tại <i class="fas fa-times-circle" ></i></span>');
            }
            else {
                // Thành công
                $('#trungtaikhoan').append('<span style="color:green;font-weight:bold">Tài khoản có thể đăng kí <i class="fas fa-check-circle" ></span></i>');
            }
                }
            });
        }, 1000);
    });
});
	</script>
            
           	
	<div class="row bg-light" ><a href="index.php" style="margin-left: auto; margin-right: auto"><img class="img-fluid"  src="images/logochu.png"></a></div>
            
        
            <nav class="navbar navbar-expand-md bg-light navbar-light row">
            	<a class="navbar-brand" href="#"></a>

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			  </button>
							 
              	<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php"><b><i class="fas fa-home"></i>Trang chủ</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?id=gt"><b><i class="far fa-list-alt"></i>Giới Thiệu</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?id=tt"><b><i class="far fa-copy"></i>Tin Tức</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?id=hd"><b><i class="fab fa-weixin"></i>Hỏi Đáp</b></a>
						</li> 
						<li class="nav-item">
							<a class="nav-link" href="index.php?id=lh"><b><i class="fas fa-phone"></i>Liên Hệ</b></a>
						</li>    
					</ul>

					<form  action="index.php"  method="get" class="navbar-nav ml-auto">               
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Bạn cần tìm ..." name="search" />
							<div class="input-group-append" >
							<button class="btn btn-dark" type="submit"><i class="fas fa-search"></i></button> 
							</div>
						</div>
					</form>             
  				</div>
              
            </nav>
            
            	
            <br/>
              <!--het menu-->     
	<div class="row"> 
		<div class="col-md-1" style="width:70px; float:left;"> 
			<a href="#" id="hinh_sp1" onclick="thaydoihinh(1,$hinh)"> <img class="imgleft" src='<?php  echo $hinhsp[0]."_1.".$hinhsp[1]; ?>'> </a>
		 	<a href="#" id="hinh_sp2" onclick="thaydoihinh(2,$hinh)"> <img class="imgleft" src='<?php echo $hinhsp[0]."_2.".$hinhsp[1]; ?>'> </a>            <a href="#" id="hinh_sp3" onclick="thaydoihinh(3,$hinh)"> <img class="imgleft" src='<?php echo $hinhsp[0]."_3.".$hinhsp[1]; ?>'> </a>
			<img src="images/3cham.jpg" class="imgleft" onclick="thaydoihinh(0)"/>
		</div>
		<div class="col-md-5" id="hinh_sp"> <img src='<?php echo $row["hinh"]; ?>' width="350px" height="350px" /> </div>
		<div class="col-md-6" style="float:left; width:550px"> 
			<p id="ten_sp"> <?php echo $row["tensanpham"]; ?> </p>
			<p id="gia_sp"> Giá: <?php echo $row["gia"]; ?> </p>
  			<hr/>
            <p>Khuyến mãi: &nbsp;&nbsp;&nbsp;&nbsp;Thanh toán trực tuyến để nhận được nhiều ưu đãi </p>
            <hr/>
  			<p> Vận chuyển: &nbsp;&nbsp;&nbsp;&nbsp; <img src="images/freeship.jpg" width="36" height="32"/> Miễn phí</p>
  			<hr/>
  			<div class="row"> 
            	<div class="col-4"> Chọn số lượng: </div> 
                <span class="col-6">
				<!--	<input type="button" value="-" onClick="giamsoluong()"><input type="text" id="sl" size="1" style="text-align: center" value="1" onChange="KTslhople()"><input type="button" value="+" onClick="tangsoluong()">-->
					<form method="post" action="themvaogiohang.php?masp=<?php echo $masp; ?>&ht=yes">
					  <span class="input-group mb-3">
						    <span class="input-group-prepend">
						      <button class="btn btn-outline-primary" type="button" onClick="giamsoluong()" >-</button>  
						    </span>
						     <input type="text" id="sl" name="sl" size="1" style="text-align: center" value="1" onChange="KTslhople()" >
						      <span class="input-group-append">
						      <button class="btn btn-outline-primary" type="button" onClick="tangsoluong()">+</button>  
						     </span>
						  </span>	
                	 </span>
                <div class="col-2"></div>
            </div>
            <br>
  			<button class="btn btn-danger btn-lg" > <b> Mua Ngay </b> </button>
  			<input class="btn btn-outline-danger btn-lg" type="submit" value="Đưa vào giỏ hàng" style="font-weight:bold;" onclick="thongbao();" > 
  			</form>
		</div>
	</div>
	<br>
<?php
	$masp = isset($_GET["masp"]) ? $_GET["masp"] : "";
	$sql_ctsp = 'select * from `ctsanpham` where `masanpham`="'.$masp.'"';
	$result = select($sql_ctsp);
	$row = $result->fetch_assoc();  
?>
	<div class="row" > 
		<div class="col-md-7"> 
        	<table class="table table-striped" >
                    <tr><td colspan="2" class="text-center"> <b > CẤU HÌNH CHI TIẾT </b> </td> </tr>
                    <tr> 
                    	<td style="width:27%" > Thời gian bảo hành: </td>  
                        <td id="baohanh"> <?php echo $row["baohanh"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td> Thương hiệu: </td>   
                        <td id="thuonghieu"> <?php echo $row["thuonghieu"]; ?> </td> 
					</tr>
                    <tr> 
                    	<td> Màn hình: </td>  
                        <td id="manhinh"> <?php echo $row["monitor"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td> CPU: </td>  
                        <td id="cpu"> <?php echo $row["cpu"]; ?> </td> 
                    </tr>
					<tr> 
                    	<td>RAM: </td>  
                        <td id="ram" > <?php echo $row["ram"]; ?> </td> 
                    </tr>                            
                    <tr> 
                    	<td>Chip đồ họa: </td>  
                        <td id="dohoa" > <?php echo $row["graphics"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td>Các cổng kết nối: </td>
                        <td id="congketnoi" > <?php echo $row["congketnoi"]; ?> </td> 
                    </tr>      
                    <tr> 
                    	<td>Lưu trữ: </td> 
                        <td id="ocung" > <?php echo $row["harddisk"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td>Bàn phím: </td>   
                        <td id="phim" > <?php echo $row["banphim"]; ?> </td> 
					</tr>
                    <tr> 
                    	<td>Hệ điều hành: </td>    
                        <td id="hedieuhanh" > <?php echo $row["hedieuhanh"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td>Pin: </td>  
                        <td id="pin" > <?php echo $row["pin"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td>Khối lượng: </td>   
                        <td id="kl" > <?php echo $row["trongluong"]; ?> </td> 
                    </tr>
                    <tr> 
                    	<td>Kết nối khác: </td> 
                        <td id="khac"> <?php echo $row["khac"]; ?>  </td> 
                    </tr>
                </table>
          </div>
          <div class="col-md-5">
                <table class="table">
                	<tr class="table-info text-center"> <td><b> KHUYẾN MÃI HẤP DẪN </b></td></tr>
                    <tr> <td>
                    	<b>Quà tặng kèm khi mua sản phẩm:</b>
                        <ul>
                            <li>1 Miếng lót chuột Kingmaster Q6 (từ 01/11/2018 đến hết 30/12/2018).</li>
                            <li>1 Chuột máy tính Logitech M331 (Đỏ) (từ 01/11/2018 đến hết 30/12/2018).</li>  
                            <li>1 Túi đựng laptop.</li> 
                        </ul>
                    </td></tr>
			  </table>
          </div>
          </div>
		<div>
			<?php
				include 'footer.php'
			?>
	</div>
</div>

<script>
	function giamsoluong(){
		var sl=document.getElementById("sl");
		var a=parseInt(sl.value);
		if( a>0)
		a=a-1;
		sl.value=a;
	}
	function tangsoluong(){
		var sl=document.getElementById("sl");
		var b=parseInt(sl.value);
		if(b<100)
		b=b+1;
		sl.value=b;
	}
	function KTslhople(){
		var sl=document.getElementById("sl");
		var c=parseInt(sl.value);
		if( c<0 || c>100){
			alert("Vượt quá số lượng tồn kho");
			sl.value=1;
		}
	}
</script>
<div class="modal" id="myModal">
				<div class="modal-dialog">
				  <div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
					  <h4 class="modal-title">Giỏ hàng của bạn</h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<table class="table table-striped" >
						<tr><td class="text-center"> <b ></b> </td>
							<td class="text-center"><b>Sản phẩm</b></td>
							<td class="text-center"><b>Số lượng</b></td>
							<td class="text-center"><b>Thành tiền</b></td>
						</tr>
						<tr>
							<td></td>
						</tr>
						
                </table>

					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
						  <button type="submit" class="btn btn-primary" style="background-color: black">Đăng Nhập</button>
						</form>
					</div>
				  </div>
				</div>
			</div>