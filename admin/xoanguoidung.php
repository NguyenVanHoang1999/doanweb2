<?php
	include '../csdl.php';
	if (isset($_POST['xoanguoidung'])){
		$sql_ngd = "DELETE FROM `nguoidung` WHERE manguoidung='" . $_POST['xoanguoidung'] ."'";
		select($sql_ngd);
	}
	header('location:admin.php?id=tv');
?>