<?php
	include '../csdl.php';
	if (isset($_POST['xoasp'])){
		$sql_sp = "DELETE FROM sanpham WHERE masanpham='" . $_POST['xoasp'] ."'";
		$sql_ctsp = "DELETE FROM ctsanpham WHERE masanpham='" . $_POST['xoasp'] ."'";
		select($sql_sp);
		select($sql_ctsp);
	}
	header('location:admin.php?id=sp');
?>