<?php
	$username = $_POST["name"];
	$password = $_POST["password"];
	$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

	
	require_once('check.php');
	require_once('db_op.php');
	
	try
	{
		if(!is_filled($_POST))		
		{
			throw new Exception('Please fill it out!');
		}
		
		db_connect($db);
		find_unique($db,$username,$password);
		
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
		exit;
	}
	
	setcookie("mycookie_name", $username);
	setcookie("count", ++$count);

?>

<html>
<head>
</head>
<body>
Welcome <?php echo $_POST["name"] ?>!<br/>
You have visited the site <?php echo $count ?> times.
<a href="logout.php">logout</a>
</body>
</html>
