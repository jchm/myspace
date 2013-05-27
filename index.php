<?php
	session_start();

	ini_set('display_errors', 0);

	function __autoload($class)
	{
		require_once "./classes/".$class.".php";
	}

	new Init;
?>