<?php
class Database {
	var $connection = "";
	var $host = "";
	var $username = "";
	var $email = "";
	var $database = "";
	var $password = "";
	var $query = "";
	var $link = "";
	function __construct($sql){
	$this->username = "connection";
	$this->password = "mutisya";
	$this->host="127.0.0.1";
	$this->database = "instore";
	$this->connection = mysql_connect($this->host,$this->username,$this->password) or die("Couldn't connect to SQL Server on $this->host");
	mysqli_select_db($this->connection,$this->database) or die("Couldn't open database $this->database");
	$this->query = $sql;
	}
	function execute_non_query(){
		mysqli_query($this->connection,$this->query) or die (mysql_error());
		}
	function execute_query(){
		$resp = mysqli_query($this->connection,$this->query)or die(mysql_error());
		return $resp;
		}
	function getNumRows(){
		return mysqli_num_rows($this->execute_query());
		}
	}
?>