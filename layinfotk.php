<?php 
	$user=$_SESSION['username'];
	
	$conn = mysqli_connect('localhost','root','','web',3306) or die ('{error:"bad_request"}');
	if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
	$error = array(
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
				$error = array(
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