<head>
<link rel="shortcut icon" href="images/icons8-shopping-cart-48.png">
<title>Giỏ Hàng Của Bạn</title>
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
<script>
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
</head>
<body>
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
									echo '<div  class="col-md-4"><a href="#" id="taik" data-toggle="modal" data-target="#myModal"><i class="fas fa-user" style="margin:0 auto;color: black;margin-top:3%" id="dn">Đăng Nhập</i></a></div>';
							  ?>
						<?php if($_SESSION['islogin'] == 1)
									echo '<div class="col-md-4"><a href="dangxuat.php?tr=giohang"><i class="fas fa-sign-out-alt" style="margin:0 auto;color: black;margin-top:3%">Đăng Xuất</i></a></div>';
									else
									echo '<div  class="col-md-4"><a href="#" id="dki" data-toggle="modal" data-target="#myModal1"><i class="fas fa-user" style="margin:0 auto;color: black;;margin-top:3%">Đăng Ký</i></a></div>'
							  ?>
						
						
						<div class="col-md-4"><a href="giohang.php" id="giohang"><i class="fas fa-shopping-cart" style="margin:0 auto;color: black;margin-top:3%">Giỏ Hàng<?php
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
						<form action="giohang.php" id="formdn" method="post">
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
		$('#thanhtoan').click(function(){
			 $.ajax({
                type : 'post',
                dataType : 'text',
                url : 'ktthanhtoan.php',
                success : function (result){
                		if(result == "0")
                		{
                			alert("Bạn cần phải đăng nhập để thanh toán");
                			$('#dn').click();
                		}
                		else
                		{
                			window.location.assign("thongtingiaohang.php");
                		}

                },
                error : function (error){
                	alert("lỗi nha");
                }
            });

		});
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
		<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4" >
				<img src="images/hinhanhgiohang.png" class="img-fluid">
				</div>
				<div class="col-md-4"> </div>
				
		</div>
		<?php 

			if( isset($_SESSION['cart']) && $_SESSION['cart']!=null)
			{
				echo '
				<form method="post" action="capnhatsoluonggio.php">
				 <table class="table table-hover table-condensed table-responsive" style="width:100%"> 
				  <thead> 
				    <tr> 
					    <th style="width:40%" >Tên sản phẩm</th> 
					    <th style="width:13%" class="text-center">Giá</th> 
					    <th style="width:15%" class="text-center">Số lượng</th> 
					    <th style="width:20%" class="text-center">Thành tiền</th> 
					    <th style="width:12%" class="text-center"></th> 
				    </tr> 
				  </thead> ';
				foreach($_SESSION['cart'] as $list)
				{
					echo '<tr>
								<td>
									<div><img src="'.$list["hinh"].'"class="img-fluid" style="height:auto;width:100px"></div>
									<div>'.$list["tensanpham"].'<div>
								</td>
								<td>
									<div>'.$list['gia'].'&nbsp;đ</div>
								</td>
								<td class="text-center">
									

								  	<span class="input-group mb-3">
									    <span class="input-group-prepend">
									      	<button class="btn btn-outline-primary" id="btn'.$list['masp'].'" type="button" onClick="giamsoluong(this)" >-</button>  
									    </span>

									     
									     <input type="number" id="'.$list['masp'].'" value="'.$list['qty'].'" style="text-align: center;width:40px" name="qty['.$list['masp'].']" size="2" max-length="2" onChange="KTslhople(this);"/>

									     <span class="input-group-append">
									      	<button class="btn btn-outline-primary" type="button"  id="btt'.$list['masp'].'" onClick="tangsoluong(this)">+</button>  
									     </span>
									  
                	 				</span>


								</td>
								<td class="text-center">
									<div>'.$list['dongia']*$list['qty'].'&nbsp;đ</div>
								</td>
								<td>
									<div><a class="btn btn-light" href="xoasanphamtronggio.php?masp='.$list['masp'].'" ><i class="fas fa-trash-alt" style="color:red">Xóa</i></a></div>

								</td>
						</tr>
						';
				}
				$tongtien = 0;
				foreach($_SESSION['cart'] as $list)
				{
					$tongtien+=$list['dongia']*$list['qty'];
				}

				echo '
					<tfoot> 
				    <tr> 
					    <td ><b>Tổng Tiền</b></td> 
					    <td class="text-center"></td> 
					    <td class="text-center"></td> 
					    <td class="text-center">'.
						$tongtien

						.'&nbsp;đ</td> 
					    <td  class="text-center"></td> 
				    </tr> 
				  </tfoot> 
					</table>
						<div class="row">
							<div class="col-md-3">
							<a href="index.php" class="btn btn-light"><i class="fas fa-fast-backward" style="color:orange">Tiếp tục mua hàng</i></a></div>
							<div class="col-md-3">
							<input type="submit" class="btn btn-secondary" value="Cập nhật số lượng" name="btnupdate" style="float:right"></div>
							</form>
							<div class="col-md-3">
							<a class="btn btn-success" href="xoasanphamtronggio.php?xoahet=1" style="float:right">Xóa giỏ</a></div>
							<div class="col-md-3">
							<a class="btn btn-success" id="thanhtoan" href="#" style="float:right">Thanh Toán</a></div>
							
						</div>';
			}
			else
			{

				echo ' <div class="row" style="margin-top:10%">
							<div class="col-md-5"></div>
							<div class="col-md-4">
								<div style="margin:0 auto"><img src="images/mascot.png" class="img-fluid"></div>
								<p style="font-size:13px;">Không có sản phẩm nào trong giỏ của bạn</p>
								<div><a href="index.php" class="btn btn-light"><i class="fas fa-fast-backward" style="color:orange">Tiếp tục mua hàng</i></a></div>
							<div class="col-md-3">
							<div class="col-md-4"></div>
						<div>
							';
			}
		?>
</div><!--đóng div container-->
<script>
	function giamsoluong(a){
		
		var id = a.getAttribute("id");
		var tam = id.slice(3);
		

		var sl = document.getElementById(tam);

		
	

		var c=parseInt(sl.value);
		

		
		if(c>0)
		c=c-1;
		sl.value=c;
		
	}
	function tangsoluong(a){
		var id = a.getAttribute("id");
		var tam = id.slice(3);
		

		var sl = document.getElementById(tam);

		
	

		var c=parseInt(sl.value);
		

		
		if(c<100)
		c=c+1;
		sl.value=c;
	}
	function KTslhople(sl){
		
		var c=parseInt(sl.value);
		if( c<0 || c>100){
			alert("Vượt quá số lượng tồn kho");
			sl.value=1;
		}
	}

</script>
	
</body>
