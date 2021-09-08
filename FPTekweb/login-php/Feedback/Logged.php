<?php

if (isset($_POST['submit']))
{
	$name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
	
	if (empty($name1) || empty($email) || empty($mobile) || empty($comment) || empty($name2))
	{
		header("Location: fail.html");
		exit();
	}
	else
	{
        echo '<script language="javascript">';
        echo 'alert("Thank you for your feedback")';
        echo '</script>';
	}
}
?>