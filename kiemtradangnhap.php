
 
<?php
     
// Lấy thông tin username và email
$username = isset($_POST['username']) ? $_POST['username'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;
 
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$username && !$password){
    die ('{error:"bad_request"}');
}
 
// Kết nối database
$conn = mysqli_connect('localhost','root','','web',3306) or die ('{error:"bad_request"}');
 
 
// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'username' => '',
    'password' => ''
);
 
 $password = md5($password);
// Kiểm tra tên đăng nhập
if ($username)
{
    $query = mysqli_query($conn, 'select count(*) as count from nguoidung where taikhoan = "'.  addslashes($username).'" and matkhau = "'.  addslashes($password).'"');
 
    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ((int)$row['count'] == 0){
            $error['username'] = 'Tên đăng nhập không đúng';
             $error['password'] = 'Mật Khẩu không đúng';
        }
    }
    else{
        die ('{error:"bad_request"}');
    }
}
 



 $query1 = mysqli_query($conn, 'select marole from nguoidung where taikhoan = "'.  addslashes($username).'"');
 
    if ($query1){
        $row = mysqli_fetch_array($query1, MYSQLI_ASSOC);
            $quyen = (int)$row['marole'];
        
    }
    else{
        die ('{error:"bad_request"}');
    }

 
    
 session_start();
 $_SESSION['islogin']=0;
 if($error['username'] == '' && $error['password'] == '' && $quyen == 3)
 {
    $_SESSION['islogin'] = 1;
     $_SESSION['username'] = $username;
     $_SESSION['quyen'] = $quyen;
 }
 else
 {
    $error['username'] = 'Tài khoản không được quyền sử dụng tại trang này';
 }

 
  
// Trả kết quả về cho client
die (json_encode($error));
?>
