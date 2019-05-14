<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thông tin thanh toán</title>
	<link rel="shortcut icon" href="images/icons1.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dropdown.css">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="font-awesome/css/all.css" /> <!--thu vien hinnh anh icon-->
	<style>
		.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
		.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
		
		
			.shipping-header {
			padding-top: 25px;
			padding-bottom: 15px;
			background: #f8f8f8;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
			box-shadow: 0 1px 2px rgba(0,0,0,.2);
		}
		.h5, h5 {
			font-size: 14px;
		}
		.h3 {
			margin-top: 20px;
			margin-bottom: 10px;
		}
		.panel-body {
			padding: 15px;
		}
		.name {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 5px;
}
		.address .address-item {
    font-size: 13px;
    margin-bottom: 3px;
}
		.panel {
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
		.panel-default {
    border-color: #ddd;
}
	
	.tiki-shipping .wrap .address-item .is-default {
    border: 1px dashed #090;
}
		.tiki-shipping .wrap .address-item.is-default .default {
    position: absolute;
    top: 10px;
    right: 15px;
    display: block;
    font-size: 11px;
    color: #090;
}
	</style>
	<?php 
	session_start();
	if(isset($_SESSION['islogin']))
	{
		if($_SESSION['islogin'] == 0)
		{
			header("location:index.php");
		}
	}
	else
	{
		header("location:index.php");
	}
	$user=$_SESSION['username'];
	
	$conn = mysqli_connect('localhost','root','','web',3306) or die ('{error:"bad_request"}');
	if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
	$thongtin = array(
				'HoTen' => '',
				'TenDangNhap' =>'',
				'MatKhau' => '',
				'Sdt'=> '',
				'Email'=> ''
				);
	if ($user)
	{
		$sql='select * from nguoidung where taikhoan = "'.  addslashes($user).'"';
		$result = $conn->query($sql);

		if ($result->num_rows>0){
			while($row = $result->fetch_assoc())
			{
				$thongtin = array(
				'HoTen' => $row['hoten'],
				'TenDangNhap' =>$row['taikhoan'],
				'MatKhau' => $row['matkhau'],
				'Sdt'=> $row['sodienthoai'],
				'Email'=> $row['email']
				);
			}
		}
		else{
			die ('{error:"bad_request"}');
		}
	}
 ?>
</head>

<body>
<div class="container">
	<div class="row">
		<div class=" col-md-12 navbar navbar-expand-sm bg-light navbar-light">
		<a><img class="img-fluid mx-auto d-block" src="images/logohinh.png"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4>Hình thức giao hàng</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default is-default">
						<div class="panel-body">
							<form action="/action_page.php">
								<div class="custom-control custom-radio ">
								  <input type="radio" class="custom-control-input" id="customRadio1" name="hinhthucgiaohang" value="Giao Hàng Nhanh">
								  <label class="custom-control-label" for="customRadio1">Giao hàng nhanh</label>
								</div>
								<div class="custom-control custom-radio ">
								  <input type="radio" class="custom-control-input" id="defaultRadio1" name="hinhthucgiaohang" value="Giao Hàng Chuẩn" checked="checked">
								  <label class="custom-control-label" for="defaultRadio1">Giao hàng tiêu chuẩn</label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<h4>Hình thức thanh toán</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="/action_page.php">
								<div class="custom-control custom-radio">
								  <input type="radio" class="custom-control-input" id="customRadio" name="hinhthucthanhtoan" value="Thanh Toán Tiền Khi Nhận Hàng" checked="checked">
									<label class="custom-control-label" for="customRadio">Thanh toán tiền mặt khi nhận hàng</label>
								</div>
								<div class="custom-control custom-radio">
								   <input type="radio" class="custom-control-input" id="defaultRadio" name="hinhthucthanhtoan" value="Thanh Toán Trực Tuyến">
									<label class="custom-control-label" for="defaultRadio">Thẻ ATM nội địa/Internet Banking</label>
								</div> 
							</form>
						</div>
					</div>
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-info btn-block" id="dathang">Đặt hàng</button>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<br>
			<div class="panel panel-default is-default">
				<div class="panel-body">
					<p class="name">Họ và tên : <?php echo $thongtin['HoTen']; ?></p>
				<p class="address">Điện thoại: <?php echo $thongtin['Sdt']; ?></p>
				<p class="address">Địa Chỉ : <span id="diachi"><?php if(isset($_POST['diachi'])) echo $_POST['diachi']; ?></span></p>
					<div class="row">
						<p class="list-group-item-action">
						<div class="col-sm-3"><a href="ThongTinGiaoHang.php?suadiachi=<?php echo $_POST['diachi'];?>" class="btn btn-info btn-block" >Sửa</a></div>
						<div class="col-sm-3"></div>
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
<script type="text/javascript">
$(document).ready(function()
{
		$('#dathang').click(function (e)
		{
		   
		    var giaohang= "";
		    var thanhtoan="";
		    var radio = document.getElementsByName("hinhthucgiaohang");
                for (var i = 0; i < radio.length; i++){
                    if (radio[i].checked === true){
                        giaohang = radio[i].value;
                    }
                }
                var radio1 = document.getElementsByName("hinhthucthanhtoan");
                for (var i = 0; i < radio1.length; i++){
                    if (radio1[i].checked === true){
                        thanhtoan = radio1[i].value;
                    }
                }
              var diachi = document.getElementById("diachi").innerHTML;
              alert(diachi);
		 
		 
		    $.ajax({
		        url : 'xulydonhang.php',
		        type : 'post',
		        dataType : 'text',
		        data : {
		            giaohang : giaohang,
		            thanhtoan : thanhtoan,
		            diachi : diachi
		        },
		        success : function (result)
		        {
		        	
		           if(result == "1")
		           {
		           	 alert("Đặt Hàng Thành Công");
		           	 window.location.assign("donhang.php");
		           }
		           else
		           {
		           	 alert("Đặt Hàng Thất Bại");
		           }
		        },
		        error : function(error){
		        	alert("error");
		        },
		    });
		   

		});          
		});
</script>
</body>
</html>