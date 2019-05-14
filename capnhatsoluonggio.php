<?php
session_start();
	if(isset($_POST['btnupdate']))
	{
		echo '<pre>';
		
		foreach($_POST['qty'] as $key => $value)
		{
			if($value <= 0)
			{
				unset($_SESSION['cart'][$key]);
			}
			else
			{
			$_SESSION['cart'][$key]['qty'] = $value;
		}
		}
	}

	header("location:giohang.php");
?>