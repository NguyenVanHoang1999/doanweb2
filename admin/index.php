<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Login V7</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form validate-form"  id="formdn">
					<span class="login100-form-title p-b-40">
						PCWORLD
					</span>
					
					

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập tên đăng nhập">
						<input class="input100" type="text" name="tendangnhap" placeholder="tên đăng nhập" id="taikhoandn">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Vui lòng nhập mật khẩu">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="matkhau" placeholder="mật khẩu" id="matkhaudn">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng Nhập
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script type="text/javascript">


	

$(document).ready(function()
{





$('#formdn').submit(function (e)
{
    
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
                alert("Tài khoản hoặc mật khẩu không chính xác");
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
</body>

</html>
