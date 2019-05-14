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
	require_once 'csdl.php';
// Load thư viện phân trang
	include_once 'pagination.php';
	
	$sql = 'select * from sanpham ';
	$result = select($sql);
	
	//
									
								 
								
								
								 
								// Phân trang
								$config = array(
									'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1,
									'total_record'  => $result->num_rows, // tổng số thành viên
									'limit'         => 6,
									'link_full'     => 'index.php?page={page}',
									'link_first'    => 'index.php',
									'range'         => 6
								);
								 
								$paging = new Pagination();
								$paging->init($config);
								 
								// Lấy limit, start
								$limit = $paging->get_config('limit');
								$start = $paging->get_config('start');
								 
								// Lấy danh sách sản phẩm
					$member = get_all_member($limit, $start,$sql);
					 
				// Kiểm tra nếu là ajax request thì trả kết quả
				if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
					die (json_encode(array(
						'member' => $member,
						'paging' => $paging->html()
					)));
				}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<link rel="shortcut icon" href="images/laptop.png">

<title>PCWorld</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">

	
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/dropdown.css">
  <link rel="stylesheet" href="font-awesome/css/all.css" /> <!--thu vien hinnh anh icon-->
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
  <style>
  /* Make the image fully responsive */
  
   .image_box{
   
   
   
  transition: all 0.4s ease-out;/* phong to hình anh theo thoi gian va no giup hinh anh muot hon*/
    
	
}
 	.image_box:hover{
    
    transform: scale(1.01,1.01);/*phong to hinh anh theo kieu 2d*/
    opacity: 1;
}

.link{
	color:blue;
	font-size:18px;
	font-family:Arial, Helvetica, sans-serif;
	text-shadow:#09C;
	text-decoration:none;
	
}
.link a:hover{
	color:red;
	text-decoration:none;
}
.link a:visited{
	text-decoration:none;
}


.chinh{
	margin:2% 0;
	color:#09C;
}
.linh a:hover{
     text-decoration:none;
	 color:#00F;
}
#myid a:hover{
	background-color:#999;
	color:red;
	text-decoration:none;
	
}
#tttk a:active{
	background-color:whitesmoke;
	color:red;
}

.caret {
			display: inline-block;
			width: 0;
			height: 0;
			margin-left: 2px;
			vertical-align: middle;
			border-top: 4px dashed;
			border-right: 4px solid transparent;
			border-left: 4px solid transparent;
		}



  </style>

<script type="text/javascript">


	

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
		                alert(html);
		            }
		            // Lấy thông tin lỗi password
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
		        	alert("Đăng Nhập Thất Bại");
		        },
		    });
		   

		});          
		});
</script>
</head>

<body>
	
<div class="container" >


<div class="row bg-light" style="margin-top:2px">
		<div class ="ic col-md-4">
			<div class="row">
                <div class="col-md-7">
                	<div style="margin:0 auto;">    
                    	<a href="index.php"><span><img class="img-fluid mx-auto d-block" src="images/logohinh.png"></span></a>
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
									echo '<div  class="col-md-4"><a href="#" id="taik" data-toggle="modal" data-target="#myModal"><i class="fas fa-user" style="margin:0 auto;color: black">Đăng Nhập</i></a></div>';
							  ?>
						<?php if($_SESSION['islogin'] == 1)
									echo '<div class="col-md-4"><a href="dangxuat.php"><i class="fas fa-sign-out-alt" style="margin:0 auto;color: black">Đăng Xuất</i></a></div>';
									else
									echo '<div  class="col-md-4"><a href="#" id="dki" data-toggle="modal" data-target="#myModal1"><i class="fas fa-user" style="margin:0 auto;color: black">Đăng Ký</i></a></div>'
							  ?>
						
						
						<div class="col-md-4"><a href="giohang.php" id="giohang"><i class="fas fa-shopping-cart" style="margin:0 auto;color: black">Giỏ Hàng<?php
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
						<form action="index.php" id="formdn" method="post">
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
						<?php 
							include_once "menu.php";
						?>
						<li class="nav-item">
							<a class="nav-link"  href="index.php?id=gt"><b><i class="far fa-list-alt"></i>Giới Thiệu</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?id=tt"><b><i class="far fa-copy"></i>Tin Tức</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="index.php?id=hd"><b><i class="fab fa-weixin"></i>Hỏi Đáp</b></a>
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
    	<div id="demo" class="carousel slide" data-ride="carousel"  style="border:2px solid  #999">
                        
        	<!-- Indicators -->
			<ul class="carousel-indicators">
            	<li data-target="#demo" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#demo" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#demo" data-slide-to="2" class="bg-dark"></li>
            </ul>                         
			<!-- The slideshow -->
            <div class="carousel-inner">
            	<div class="carousel-item active">
                	<img src="images/ps1.png" alt="hinh1"  height="400"  class="img-fluid">
                </div>
                <div class="carousel-item">
                	<img src="images/ps2.png" alt="hinh2" height="400" class="img-fluid">
                </div>
                <div class="carousel-item">
                	<img src="images/ps3.png" alt="hinh3" height="400"  class="img-fluid">
                </div>
            </div>
                          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            	<span class="carousel-control-prev-icon bg-dark"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            	<span class="carousel-control-next-icon bg-dark"></span>
            </a>
		</div>
    </div>
        <!-----het class hinh--->
        
        
        
        
        
        
        
        
        
                
        <!--phan noi dung-->
        <form action="index.php" method="get">
        <div class="row" style="margin-top:6%">
            	
            		<?php include"giaodiensearchnc.php";
					?>
        </div>
    	</form>
        <div class="row" id="content" style="margin-top:6%">
             	<div id="list" class="col-md-12">
                            <?php if(isset($_GET["search"]))
                                    include "searchlaptop.php";
								else
									if(isset($_GET["tl"]))
                                    include "content.php";
								else
									if(isset($_GET['searchnc']))
									include "xulytknc.php";
								else
									if(isset($_GET["id"]))
                                    			include "DieuHuong.php";
								else	
								{
						
								$dem = 0;
								$tam = 0;
								$tam2 = 0;
			
					
					
					
					foreach ($member as $item) {
						
						$dem = $dem + 1;
						if($dem % 3 == 1 || $dem == 1) 
						{
							echo '<div class="row card-group card-columns">';
						
							
						}
						echo '<div class="card col-md-4"><a href="chitietsp.php?masp='.$item["masanpham"].'">
								<img class="card-img-top image_box" src="'.$item["hinh"].'" alt="Card image" style="width:100%;height:250px;">
								<div class="card-body" style="padding:15px 0 15px 0">
								  <h5 class="card-title" style="height:70px">'.$item["tensanpham"].'</h5>
								  <p class="card-text"><span class="badge badge-danger">'.$item["gia"].'<sup>đ</sup></span></p>
								  <div class="row">
								  <div class="col-md-5" style="margin-top:2%;"><a href="chitietsp.php?masp='.$item["masanpham"].'" class="btn btn-primary" >Chi tiết</a></div>
								   <div class="col-md-7"  style="margin-top:2%;"><a href="themvaogiohang.php?masp='.$item["masanpham"].'" class="btn btn-primary" onclick="thongbao();">Thêm vào giỏ</a></div>
								</div>
							  </div></a></div>';
						if($dem %3 == 0)
						{
							echo '</div>';
						}
						
				}
				if($dem %3 != 0)
						{
							echo '</div>';
						}
				 	}		

												

								 ?>
								
                </div>
                <div id="paging" class="col-md-12">
                	
                	<div class="row">
                		<div class="col-md-12">
                			<?php 
                			if(isset($_GET["search"]) == false && isset($_GET["tl"]) == false && isset($_GET['searchnc']) == false &&  isset($_GET["id"]) == false)
                			{
                					echo $paging->html();
                			}
                			
                				
                			 ?>
                		</div>	
                		</div>	
                </div> 
                   
                      
                
        </div>

				 <script language="javascript">
             $('#content').on('click','#paging a', function ()
             {
                 var url = $(this).attr('href');
                  
                 $.ajax({
                     url : url,
                     type : 'get',
                     dataType : 'json',
                     success : function (result)
                     {
                         //  kiểm tra kết quả đúng định dạng không
                         if (result.hasOwnProperty('member') && result.hasOwnProperty('paging'))
                         {
							var dem = 0;
								var tam = 0;
								var tam2 = 0;
                             var html="";
                             // lặp qua danh sách thành viên và tạo html
                             $.each(result['member'], function (key, item){
								 dem = dem + 1;
									if(dem % 3 == 1 || dem == 1) 
									{
										html+='<div class="row card-group card-columns">';
									
										
									}
								 
                                html +='<div class="card col-md-4"><a href="chitietsp.php?masp='+item+["masanpham"]+'">\
								<img class="card-img-top image_box" src="'+item["hinh"]+'" alt="Card image" style="width:100%">\
								<div class="card-body" style="padding:15px 0 15px 0">\
								  <h5 class="card-title" style="height:70px">'+item["tensanpham"]+'</h5>\
								  <p class="card-text"><span class="badge badge-danger">'+item["gia"]+'<sup>đ</sup></span></p>\
								  <div class="row">\
								  <div class="col-md-5" style="margin-top:2%;"><a href="chitietsp.php?masp='+item+["masanpham"]+'" class="btn btn-primary" >Chi tiết</a></div>\
								   <div class="col-md-7"  style="margin-top:2%;"><a href="themvaogiohang.php?masp='+item["masanpham"]+'" class="btn btn-primary" onclick="thongbao();">Thêm vào giỏ</a></div>\
								</div>\
							  </div></a></div>';
							  if(dem %3 == 0)
								{
									html+= '</div>';
								}
						
                             });
                              
                            
                              
                             // Thay đổi nội dung danh sách thành viên
                             $('#list').html(html);
                              
                             // Thay đổi nội dung phân trang
                             $('#paging').html(result['paging']);
                              
                             // Thay đổi URL trên website
                             window.history.pushState({path:url},'',url);
                         }
                     }
                 });
                 return false;
             });
         </script>
        
        <!--</div><!--dong phan than-->
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
				} else {
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

	
	<script type="text/javascript">
		function thongbao(){
			alert("Thêm vào giỏ thành công");

		}
			function clickmenu(){
				var a = window.location.href;
				
				var c = document.getElementsByClassName("nav-link");
				for(i = 0 ; i < c.length; i++)
				{

						if(c[i].href == a)
						{
							c[i].classList.add('active')
						}
						else{
							c[i].classList.remove('active')
						}
				}
			}
			window.onload = function(){
				clickmenu();
				 
			}
	</script>


</body>
</html>
