<?php
	require_once "csdl.php";
	$sql="select * from sanpham";
	$result=select($sql);
	$product = array();
	if ($result->num_rows > 0) 
	{
	    // Sử dụng vòng lặp while để lặp kết quả
	    while($row = $result->fetch_assoc())
	    {
	        $product[]=array(
	        	"masp" => $row['masanpham'],
	        	"tensanpham" => $row['tensanpham'],
	        	"gia" => $row["gia"],
	        	"hinh" => $row["hinh"],
	        	"dongia" => $row["dongia"]
	        );
	    }
	} 
		
	
?>