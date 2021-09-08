<?php

if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	if (empty($name) || empty($email) || empty($pass))
	{
		header("Location: fail.html");
		exit();
	}
	else
	{
		header("Location: /./FPTekweb/Homer/index.html");
	}
}
?>