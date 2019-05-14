<html>
<head>
<link href="bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="jquery_321/jquery-3.2.1.js"></script>
<script src="js/navAccordion.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<title>Admin </title>	
<link rel="stylesheet" href="../font-awesome/css/all.css" /><!--thu vien hinnh anh icon-->
<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
<!--<script src="../js/jquery.min.js"></script>-->

<script src="../js/dangkidangnhap.js"></script>
<style>	
	.img-resposive {
		display: block; 
		max-width:100%;
		height:auto;
	}
	#thongke:hover{
		background-color: #36F;
	}
body {
  font-family: sans-serif;
}

</style>

</head>
<body class="container">
	<div class="row" style="margin-top:2px">
		<div class ="ic col-md-7">
			<div class="row">
                <div class="col-md-6">
                	<div class="row">    
                    	<span style="margin:0 auto;"><img class="img-fluid mx-auto d-block" src="../images/logohinh.png"></span>
					</div>
                </div>
		
				<div class="hotline col-md-6">
					<marquee style="color:black;font-weight:bold;">Chào mừng bạn đến với PCWorld</marquee>
				</div>
		  </div>
		</div> <!-- dong div class ic-->
	  	<!--tao popup tai khoan-->
        
		<div class="tkhoan col-md-5">
      		<div class="row">
				<div  class="taikhoan col-md-12">
					<div class="row">
						<div  class="col-md-4"><a href="#" id="taik" data-toggle="modal" data-target="#myModal"><i class="fas fa-user" style="margin:0 auto;color: black">Đăng Nhập</i></a></div>
						<div  class="col-md-4"><a href="#" id="dki" data-toggle="modal" data-target="#myModal1"><i class="fas fa-user" style="margin:0 auto;color: black">Đăng Ký</i></a></div>
						<div class="col-md-4"><a href="#" id="giohang"><i class="fas fa-shopping-cart" style="margin:0 auto;color: black">Giỏ Hàng</i></a></div>
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
							<form action="/action_page.php" onSubmit="return dangky();">
						  		<div class="form-group">
									<label for="taikhoandn">Tài Khoản</label>
								<input type="text" class="form-control" id="taikhoandn">
						  		</div>
						  		<div class="form-group">
									<label for="passdn">Mật Khẩu</label>
									<input type="password" class="form-control" id="passdn">
						  		</div>
						  		<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
									<label class="custom-control-label" for="customCheck">Nhớ Mật Khẩu</label>
						  		</div>
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
          			<form action="/action_page.php" onSubmit="return dangky();" >
              			<div class="form-group">
                			<label for="ten">Họ và tên</label>
                			<input type="text" class="form-control" id="ten">
              			</div>
              			<div class="form-group">
              				<label for="taikhoandk">Tên Đăng Nhập</label>
                			<input type="text" class="form-control" id="taikhoandk" />
              			</div>
              			<div class="form-group">
                			<label for="pwd">Mật Khẩu</label>
                			<input type="password" class="form-control" id="pwd">
              			</div>
               			<div class="form-group">
               				<label for="nlmk">Nhập Lại Mật Khẩu</label>
                			<input type="password" class="form-control" id="nlmk" />               
              			</div>
               			<div class="form-group">
               				<label for="sdt">Số Điện Thoại</label>
                			<input type="text" class="form-control" id="sdt" />
               			</div>
              			<div class="form-group">
                			<label class="email">Email</label>
                  			<input class="form-control" type="text" id="email" />
               			</div>
          		</div>
        
        		<!-- Modal footer -->
        		<div class="modal-footer">
          			<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            		<input type="submit" class="btn btn-success" style="background-color: black" value="Đăng Kí" >
    				</form>
        		</div>
        
      			</div>
    		</div>
		</div>
	</div><!--dong div class tkoan-->
	<div class="row"  ><img class="index.php?id=gt" style="margin-left: auto; margin-right: auto" src="../images/logochu.png"></div>
	<div class="row"> 
   		<div class="col-md-12" >
    		<?php include'menu_ngang.php';	?>
        </div>
    </div> 
	<div class="row">
    	<div class="col-md-3">
        	<?php include'menu_doc.php'; ?>
        </div>
        <div class="col-md-9" id="content" >
			<?php
				include '../csdl.php';
				if (isset($_REQUEST["id"])) 
				  switch($_REQUEST["id"]) {
					case 'sp':
						$result = select('select *from sanpham');
						if ($result->num_rows > 0) {
							echo '<table class="table table-striped table-bordered text-center" > <tr><td class="glyphicon glyphicon-cog">  </td><td> Mã sản Phẩm </td> <td> Tên Sản Phẩm </td> <td> Giá Sản Phẩm</td> <td> Hình Ảnh </td> <td> Mã thể loại </td>  </tr>' ;
							while($row = $result->fetch_assoc()) {
							echo '<tr><td> 
									  	<form action="xoasp.php" method="post">
											<input type="hidden" value="'.$row["masanpham"].'" name="xoasp">
											<button class="btn btn-default glyphicon glyphicon-remove"> XÓA </button>
										</form>
									  	<form method="get">
											<input type="hidden" value="'.$row["masanpham"].'" name="upd">
											<button class="btn btn-default glyphicon glyphicon-wrench"> SỬA </button>	
										</form>
									  </td> 
									  <td  style="padding: auto 0;">'.$row["masanpham"].'</td> 
									  <td>' . $row["tensanpham"]. '</td> 
									  <td>' .$row["gia"] . '</td> 
									  <td><img class="img-responsive" src="'.$row["hinh"].'" width="200" height="200"/></a> </td> 
									  <td>' .$row["matheloai"] .'</td> 
  
								   </tr>';
							}
							echo '</table>';
							} else {	echo "Không có record nào";	}
						break;
					case 'user':
						$result = select('select *from nguoidung');
						if ($result->num_rows > 0) {
							echo '<table class="table table-striped table-bordered text-center" > <tr><td> Mã người dùng </td> <td> Họ tên </td> <td> Tài khoản</td> <td> Mật khẩu </td> <td> Số điện thoại </td> <td> Email </td> <td> Quyền </td> <td> </td> </tr>' ;
							while($row = $result->fetch_assoc()) {
								echo '<tr><td  style="padding: auto 0;">'.$row["manguoidung"].'</td> 
										  <td>' . $row["hoten"]. '</td> 
										  <td>' .$row["taikhoan"] . '</td> 
										  <td>' .$row["matkhau"]. ' </td> 
										  <td>' .$row["sodienthoai"] .'</td>
										  <td>' .$row["email"]. ' </td> 
										  <td>' .$row["marole"] .'</td> 
										  <td> 
										  	<form action="xoanguoidung.php" method="post">
												<input type="hidden" value="'.$row["manguoidung"].'" name="xoanguoidung">
												<button class="btn btn-default glyphicon glyphicon-remove"> XÓA </button>
											</form>
											<form method="get">
												<input type="hidden" value="'.$row["manguoidung"].'" name="updu">
												<button type="submit" class="btn btn-default glyphicon glyphicon-wrench"> SỬA </button>
											</form>
										  </td> 
									   </tr>';
							}
							echo '</table>';
						} else {	echo "Không có record nào";	}
						break;
						case 'tl':
							include 'theloai.php';
							break;
				  }
				if(isset($_REQUEST["add"])) include 'themsp.php';
				if(isset($_REQUEST["upd"])) include 'suasp.php';
				if(isset($_REQUEST["addu"])) include 'themnguoidung.php';
				if(isset($_REQUEST["usernd"])){	include 'dstaikhoan.php'; nguoidung(); }
				if(isset($_REQUEST["userad"])){	include 'dstaikhoan.php'; admin(); }
				if(isset($_REQUEST["usernv"])){	include 'dstaikhoan.php'; nhanvien(); }
				if(isset($_REQUEST["updu"])) include 'suanguoidung.php';
				if(isset($_REQUEST["role"])) include 'phanquyen.php';	
				
			?>
    	</div> 
    </div>
<!-- footer -->
	<div class="row" style="margin-top:6%">
			<div class="col-md-12"><hr/></div>
	</div>
    <div class="row" style="margin-top:6%">
        	<div class="col-md-12">
				<?php include '../footer.php' ?>
			</div>
    </div>

</body>
</html>