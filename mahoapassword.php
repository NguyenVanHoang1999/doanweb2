<?php
	$travepass = array(
		'matkhau' => 'success',
		'password'=> ''
	);
	if(isset($_POST['password']))
	{
		$pass = $_POST['password'];
		$travepass['password'] = md5($pass);
		die (json_encode($travepass));
	}
?>