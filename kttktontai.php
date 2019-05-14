<?php
// Lấy thông tin username và email
$username = isset($_POST['user']) ? $_POST['user'] : false;

 
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$username){
    die ('{error:"bad_request"}');
}
 
// Kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'web',3306) or die ('Loi Roi');
 
 
// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'username' => '',
    
);
 
// Kiểm tra tên đăng nhập
if ($username)
{
    $query = mysqli_query($conn, 'select count(*) as count from nguoidung where taikhoan = "'.  addslashes($username).'"');
 if ($query){
    
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ((int)$row['count'] > 0){
            $error['username'] = 'Tên đăng nhập đã tồn tại';
        }
    }
    else{
        die ('{error:"bad_request"}');
    }
}
 
 
 

     
 
// Trả kết quả về cho client
die (json_encode($error));
?>