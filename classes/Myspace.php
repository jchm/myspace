<?php
class Myspace
{
	public $url = 'http://collect.myspace.com/index.cfm?fuseaction=bandprofile.listAllShows&friendid=';
	public $new_url;
	public $test_url = 'http://myspace.com/';
	
	function __construct()
	{
		$this->db = new Database;
	}
	
	function check_myspace($myspace_id)
	{
		$url  = $this->test_url . $myspace_id;
		
		// Set up cURL
		$ch = curl_init();
		$timeout = 5; // set to zero for no timeout
		
		curl_setopt ($ch, CURLOPT_URL, $url); // Get the public $url
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		
		$html = curl_exec($ch);
		curl_close($ch);
		
		if(preg_match('/Sorry, an error occurred and the page you requested is unavailable/', $html, $match))
			return false;
		else
			return true;
	}	
	
	function fetch_data($myspace_id, $user_id)
	{
		//timers
		$now = time() + (0 * 12 * 0 * 0);
		$time_start = microtime(true);
		
		$queryUrl = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D%22http%3A%2F%2Fwww.myspace.com%2F" . $myspace_id . "%2Fshows%22%20and%0A%20%20%20%20%20%20xpath%3D'%2F%2Ful%5B%40class%3D%22eventsContainer%20eventsList%20moduleList%22%5D%2Fli'&diagnostics=false";
		$session = curl_init($queryUrl);
		
		curl_setopt($session, CURLOPT_HEADER, false);
		
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		
		$xml = curl_exec($session);
		
		curl_close($session);
		
		$xml = new SimpleXMLElement($xml);
		
		$this->db->query("
			delete 
				ms_event.*,
				ms_user_event.*
			from
				ms_event,
				ms_user_event
			where 1
				and ms_user_event.ms_user_id = '" . $user_id . "'
				and ms_event.ms_event_id =  ms_user_event.ms_event_id
		");
		
		$i = 0;
		
		foreach($xml->results->li as $event)
		{
			$month = date('m', strtotime($event->div->span[1] . "-" . $event->div->span[0]));
			
			$date = date('Y-m-d H:i', strtotime($event->div->span[1] . "-" . $event->div->span[0] . "-2012 " . $event->div[1]->p->span[1] . ":00"));
			
			$this->db->query("
				insert into 
					ms_event
				set
					date = '" . mysql_real_escape_string($date) . "',
					city = '" . mysql_real_escape_string($event->div[1]->p->span[0]->span->span[1] . ", " . $event->div[1]->p->span[0]->span->span[2]) . "',
					country = '" . mysql_real_escape_string($event->div[1]->p->span[0]->span->span[3]) . "',
					venue = '" . mysql_real_escape_string($event->div[1]->p->span[0]->span->span[0]) . "'
			");
			
			$last_id_rs = $this->db->getResult("select `ms_event_id` from `ms_event` order by `ms_event_id` desc limit 1");
			$last_id = $last_id_rs[0]['ms_event_id'];
			
			$this->db->query("insert into `ms_user_event` set `ms_user_id` = '" . mysql_real_escape_string($user_id) . "', `ms_event_id` = '" . mysql_real_escape_string($last_id) . "'");
			$i++;
		}
		
		$time_end = microtime(true);
	
		$arr['load_time'] = $time_end - $time_start;
		$arr['added_shows'] = $i;
		
		return $arr;
	}
}
?>