<?php

if (isset($_POST['submit']))
{
	$user = $_POST['user'];
    $pass = $_POST['pass'];
	
	
	if($user=="admin" && $pass=="admin"){
		header("Location: ../../Homer/index.html");
		exit();
	}
    
    else if($user!="admin" && $pass=="admin"){
        echo '<script language="javascript">';
        echo 'alert("Username salah")';
        echo '</script>';
    }
    
    else if($user=="admin" && $pass!="admin"){
        echo '<script language="javascript">';
        echo 'alert("Password salah")';
        echo '</script>';
    }
    
	else
	{
        echo '<script language="javascript">';
        echo 'alert("Username dan password salah")';
        echo '</script>';
        
	}
}
?>