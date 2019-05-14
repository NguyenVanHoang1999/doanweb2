<?php
	session_start();
	$xoahet = isset($_GET['xoahet']) ? $_GET['xoahet'] : 0;
	if($xoahet == 1)
	{
		unset($_SESSION['cart']);
	}
	else
	{
		$id = $_GET['masp'];
		echo '<pre>';
		print_r($_SESSION['cart']);
		echo $id;
		unset($_SESSION['cart'][$id]);
	}
	
	header("location:giohang.php");
	?>