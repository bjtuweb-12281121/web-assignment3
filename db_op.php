<?php
	//连接
	function db_connect(&$res)
	{
		$res = new MySQLi('localhost','root','123456','logindata');
		if(!$res)
		{
			throw new Exception('Failed to connect to database');
		}
		
		return true;
	}
	
	//添加用户
	function db_add($db,$name,$pas,$email)
	{
		$res = $db->query("insert into UserInfo values('".$name."','".$email."','".$pas."')");
		
		if(!$res)
		{
			throw new Exception('Failed to connect to database');
		}
		
		return true;
	}
	
	//寻找用户
	function find_user($db,$name,$pas)
	{
		$res = $db -> query("select * from UserInfo where userID='".$name."' and password='".$pas."'");
		if(!$res)
		{
			throw new Exception('Failed to connect to database!');	
		}
		
		if($res->num_rows > 0)
			return true;
		else
			throw new Exception('No such user or wrong password !');
	}
	
?>