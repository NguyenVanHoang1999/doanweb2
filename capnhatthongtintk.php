<?php
session_start();
				
				if(!($conn = mysqli_connect('localhost','root','','web',3306)))
				die ('Không thể kết nối tới database');
          
   			if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
			if(isset($_POST['sub']) && $_POST['sub'] == true)
			{


			
				    $username   = addslashes($_SESSION['username']);
				    $password   = addslashes($_POST['matkhau']);
				    $email      = addslashes($_POST['email']);
				    $hoten      = addslashes($_POST['hovaten']);
				    $sdt        = addslashes($_POST['sodienthoai']);
				    $password = md5($password);
					//Lưu thông tin thành viên vào bảng
				    // Tiến hành lưu vào CSDL nếu không có lỗi
					$sql='update nguoidung set hoten="'.$hoten.'",sodienthoai="'.$sdt.'",email="'.$email.'"';
					if($password != "")
					{
						$sql.=',matkhau="'.$password.'" where taikhoan="'.$username.'"';
					}
					else
					{
						$sql.='where taikhoan="'.$username.'"';
					}
					echo $sql;
					    $conn->query($sql);
						// Ngắt kết nối
						$conn->close();
					
						
						header("location:thongtintaikhoan.php");
			}
				
	?>
