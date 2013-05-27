<?php
	ini_set('display_errors', 0);
	
	function __autoload($class)
	{
		require_once "./classes/".$class.".php";
	}
	
	$myspace = new Myspace;
	$smarty = new Smarty;
	$user = new User;
	
	$users = $user->get();
	
	$smarty->clear_all_cache(); // Clear all the caches
	
	$message = "Cronjob started.";
	mail("jochemschutte@gmail.com", "started", $message);
	
	$time_start = microtime(true);
	$i = 0;
	
	print_r($users);
	echo "<hr />jkldfhsjllk";
	
	foreach($users as $user)
	{
		echo "<div style='margin:5px;padding:5px;border:solid 5px #00F;'>user_id " . $user["ms_user_id"] . " - " . $user['myspace_id'];
		echo "<hr />";
			$myspace->fetch_data($user['myspace_id'], $user["ms_user_id"]);
		echo "</div>";
		$i++;
	}
	
	$time_end =  microtime(true);
		
	$message = "Cronjob completed " . $i . " users in : " . ($time_end - $time_start) . " seconds.";
	mail("jochemschutte@gmail.com", "finished", $message);
?>