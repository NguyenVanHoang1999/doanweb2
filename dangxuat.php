<?php
	session_start();
	$_SESSION['islogin']=0;
	unset($_SESSION['username']);
	unset($_SESSION['quyen']);
	if(isset($_GET['tr']))
	{
		if($_GET['tr']=="giohang")
		{
			header("location:giohang.php");
		}
		else
		{
			if(isset($_GET['masp']))
			{
				header("location:chitietsp.php?masp=".$_GET["masp"]);
			}
			

		}
	}
	else
	{
		header("location:index.php");

	}
	?>
	