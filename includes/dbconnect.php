<?php 
	try
	{
		
		$dsn = 'mysql:dbname=instore;host=mysql';
		$dbUser = 'instore';
		$password = 'mutisya';
 
		$db = new PDO($dsn,$dbUser,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
	catch(PDOException $e)
	{
		echo "PDO Error".$e->getMessage();
		die();
	}
?>