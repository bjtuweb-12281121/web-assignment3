<?php
	
	require_once('check.php');
	require_once('db_op.php');
	
	$name = $_POST['reg_name'];
	$pas1 = $_POST['reg_pass'];
	$pas2 = $_POST['confirm_pass'];
	$email = $_POST['email'];
	
	try
	{
		if(!is_filled($_POST))		
		{
			throw new Exception('Please fill it out!');
		}

		if($pas1 != $pas2)				
		{
			throw new Exception('Passwords are not matched');
		}
		
		function register($name , $pas1, $email)
		{
			db_connect($db);
		
			db_add($db,$name,$pas1,$email);
		
			return true;
		}

		echo "Successfully Register! <a href = index.php> To Login Page </a> to login!";
		
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
		exit;
	}
?>