<?php
	session_start();
	if(isset($_SESSION['islogin']))
	{
		if($_SESSION['islogin'] == 0)
		{
			echo "0";
		}
		else
		{
			echo "1";
		}
	}
	
?>