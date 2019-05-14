<?php
	
	function select($sql)
	{
		$conn = new mysqli('localhost', 'root','','web',3306);//ten may chu , tai khoan,mat khau,ten database,port
 				if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
			// Nếu kết nối thất bại
			if ($conn->connect_error) {
				die("Kết nối thất bại: " . $conn->connect_error);
			} 
			else
			{
				
				
				
			}
			 $result = $conn->query($sql);
			 $conn->close();
			 return $result;
			 
		
			// Tạo xong thì ngắt kết nối
			
	}
	function get_all_member($limit, $start,$sql)
{
    
		$conn = new mysqli('localhost', 'root','','web',3306);//ten may chu , tai khoan,mat khau,ten database,port
 				if(!(mysqli_query($conn,"set names 'utf8'")))
				{
					die('lỗi font');
				}
			// Nếu kết nối thất bại
			if ($conn->connect_error) {
				die("Kết nối thất bại: " . $conn->connect_error);
			} 
			else
			{
				
				
				
			}
    $sql = $sql .'limit '.(int)$start . ','.(int)$limit;
    $query =  $conn->query($sql);
     
    $result = array();
     
    if ($query)
    {
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $result[] = $row;
        }
    }
     
    return $result;
}
	
	
	
				


?>
