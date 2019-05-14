<?php 
	session_start();
	
	$user=$_SESSION['username'];
	
	$conn = mysqli_connect('localhost','root','','web',3306) or die ('{error:"bad_request"}');

	if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
	$thongtin = array(
				'MaNguoiDung' => '',
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
				'MaNguoiDung' => $row['manguoidung'],
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
	$tongtien=0;
	foreach($_SESSION['cart'] as $list)
	{
		$tongtien+=$list['dongia']*$list['qty'];
	}
	$day = date('d-m-Y');
	//xây dựng sql dat hang
	$sql1 = 'insert into dathang(makhachhang,ngaydathang,tongtien,diachigiaohang,hinhthucvanchuyen,hinhthucthanhtoan,trangthai) values ("'.$thongtin['MaNguoiDung'].'","'.$day.'","'.$tongtien.'","'.$_POST['diachi'].'","'.$_POST['giaohang'].'","'.$_POST['thanhtoan'].'","Chưa Giao")';
	
	$madh=0;
	 if ($conn->query($sql1) === TRUE) {
		    $madh = $conn->insert_id;//lấy id tự động tăng 
		  
		} else {
		    echo $conn->error;
		}

	foreach($_SESSION['cart'] as $list)
	{
		$sql2 = 'insert into ctdathang(masanpham,soluong,dongia,thanhtien,madathang) values("'.$list['masp'].'","'.$list['qty'].'","'.$list['dongia'].'","'.$list['qty']*$list['dongia'].'","'.$madh.'")';
		
		if ($conn->query($sql2) === TRUE) {
		   
		  
		} else {
		    echo "0";
		}
	}
	unset($_SESSION['cart']);
	echo "1";
 ?>