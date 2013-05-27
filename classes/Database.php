<?php
class Database
{
	function __construct($db = NULL)
	{
		switch($db)
		{
			default:
				$database = "";
				$user = "";
				$password = "";
				$host = "";
			break;
		}
		
		$this->connection = @mysql_connect($host, $user, $password) or die("Connection failed: ".$database."<br /><br />".mysql_error());
		if(function_exists('mysql_set_charset')) mysql_set_charset("utf8", $this->connection);
		@mysql_select_db($database, $this->connection) or die("Selecting failed: ".$database."<br /><br />".mysql_error());
		if(!function_exists('mysql_set_charset')) $this->query("SET NAMES 'utf8'");
		$this->magic_quotes = get_magic_quotes_gpc();
	}
	
	function __destruct()
	{
		@mysql_close($this->connection);
	}
	
	function escape($input, $trim = true)
	{
		if(is_array($input))
		{
			foreach($input as $k => $v) $return[$k] = $this->escape($v, $trim);
			return $return;
		}
		else
		{
			if($this->magic_quotes) $input = stripslashes($input);
			if($trim) $input = trim($input);
			return mysql_real_escape_string($input, $this->connection);
		}
	}
	
	function query($sql)
	{
		$query = mysql_query($sql, $this->connection) or print("Query failed: ".$sql."<hr /><br />" . mysql_error());
		return $query;
	}
	
	function getResult($sql)
	{
		$query = $this->query($sql);
		if($row = mysql_fetch_assoc($query))
		{
			do $result[] = $row;
			while($row = mysql_fetch_assoc($query));
			return $result;
		}
		else return false;
	}
}
?>