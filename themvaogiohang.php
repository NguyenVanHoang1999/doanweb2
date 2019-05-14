<?php
	session_start();
	include "danhsachsanpham.php";
	$sl = isset($_POST['sl']) ? $_POST['sl'] : 0;

	echo  $idproduct = $_GET["masp"] ;
	$newproduct = array();

	foreach($product as $val)
	{
		$newproduct[$val["masp"]] = $val;
	}

	
	if(!isset($_SESSION['cart']) || $_SESSION['cart'] == null)
	{
		
		if($sl != 0)
		{
			$newproduct[$idproduct]['qty'] = $sl;
		}
		else
		{
			$newproduct[$idproduct]['qty'] = 1;
		}
		
		
		
		$_SESSION['cart'][$idproduct] = $newproduct[$idproduct];
		$_SESSION['cart'][$idproduct]['tensanpham'] = $newproduct[$idproduct]['tensanpham'];
		$_SESSION['cart'][$idproduct]['hinh'] = $newproduct[$idproduct]['hinh'];
		$_SESSION['cart'][$idproduct]['dongia'] = $newproduct[$idproduct]['dongia'];
		$_SESSION['cart'][$idproduct]['gia'] = $newproduct[$idproduct]['gia'];
		$_SESSION['cart'][$idproduct]['masp'] = $newproduct[$idproduct]['masp'];
		print_r($_SESSION['cart'][$idproduct]);
	}
	else
	{
		
		if(array_key_exists($idproduct, $_SESSION['cart'])) //ton tai trong gio
		{
			if($sl != 0)
			{
				$_SESSION['cart'][$idproduct]['qty'] += $sl;
			}
			else
			{
				$_SESSION['cart'][$idproduct]['qty'] += 1;
			}

			
		}
		else
		{
			
		
		$_SESSION['cart'][$idproduct] = $newproduct[$idproduct];
		if($sl != 0)
			{
				$_SESSION['cart'][$idproduct]['qty'] = $sl;
			}
			else
			{
				$_SESSION['cart'][$idproduct]['qty'] = 1;
			}
		$_SESSION['cart'][$idproduct]['tensanpham'] = $newproduct[$idproduct]['tensanpham'];
		$_SESSION['cart'][$idproduct]['hinh'] = $newproduct[$idproduct]['hinh'];
		$_SESSION['cart'][$idproduct]['dongia'] = $newproduct[$idproduct]['dongia'];
		$_SESSION['cart'][$idproduct]['gia'] = $newproduct[$idproduct]['gia'];
		$_SESSION['cart'][$idproduct]['masp'] = $newproduct[$idproduct]['masp'];
		print_r($_SESSION['cart'][$idproduct]);
		echo "san pham co id =".$idproduct."chua ton tai trong gio";
		}
	}
	$str="location:chitietsp.php?masp=".$idproduct;
	if(isset($_GET[ht]))
		header($str);
	else
		header("location:index.php");
	
?>