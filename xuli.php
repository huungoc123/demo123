<?php
	$username=$_POST["textname"];
	$password=$_POST["textpass"];
	
	if($username=="admin"&& $password=="123456")
	{
		echo"Đang nhập thành công.";
		
	}
	else
	{
		echo"đang nhập thất bại!";
	}
?>