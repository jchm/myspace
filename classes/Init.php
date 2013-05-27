<?php
class Init
{
	public $offset = 0;
	public $limit = 50;
	public $cache_params;
	
	function __construct()
	{
		$this->db = new Database;
		$this->myspace = new Myspace;
		$this->user = new User;
		$this->smarty = new Smarty;
				
		$this->init();
	}
	
	function init()
	{
		switch($_REQUEST['action'])
		{
			case "add_band":
				$this->user->add_band();
			break;
			case "api":
				$cleanRequest = $this->cleanRequest($_REQUEST);
				$this->showCached($cleanRequest['myspace_id'], $cleanRequest['format'], $cleanRequest['offset'], $cleanRequest['limit']);
			break;
			default:
				$this->smarty->display('index.tpl');
			break;
		}
	}
	
	function insert_callback()
	{
		$callback = 'ji';
	}
	
	function cleanRequest($array)
	{	
		if(is_array($array))
		{
			foreach($array as $key=>$value)
			{
				if($key == "myspace_id" || $key == "offset" || $key == "limit")
				{
					$value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
				}
				
				if($key == "offset" && $value && !is_numeric($value))
				{
					$value = false;
				}
				
				if($key == "limit" && $value && !is_numeric($value))
				{
					$value = false;
				}
				
				$array[$key] = $value;
			}
			
			return $array;
		}
	}
	
	function showCached($myspace_id, $format, $offset, $limit)
	{
		if(!$offset) $offset = $this->offset;
		if(!$limit) $limit = $this->limit;
		
		if(!$myspace_id)
		{
			echo "Error: there is no myspace_id.";
			exit();
		}
		
		switch($format)
		{
			case "json":
				$this->cache_params = $myspace_id . "|JSON|" . $offset . "|" .  $limit;
				
				if(!$this->smarty->is_cached('json.tpl', $this->cache_params)) 
					$this->get($myspace_id, 'json_cache', $offset, $limit);	
				else
				{
					header("Content-type: application/x-javascript; charset=utf-8");
					$this->smarty->display('json.tpl', $this->cache_params);	
				}
			break;
			case "rss":
				$this->cache_params = $myspace_id . "|RSS2|" . $offset . "|" .  $limit;
				
				
				if(!$this->smarty->is_cached('rss.tpl', $this->cache_params)) 
					$this->get($myspace_id, 'rss_cache', $offset, $limit);
				else
				{
					header("Content-type: application/rss+xml; charset=utf-8");
					$this->smarty->display('rss.tpl', $this->cache_params);	
				}
			break;
			default:
				echo "Error: unsupported format.";
			break;
		}	
	}

	function get($myspace_id, $format, $offset, $limit)
	{	
		$now = time() + (0 * 12 * 0 * 0);
		
		if(!$offset) $offset = $this->offset;
		if(!$limit) $limit = $this->limit;
		
		$rs['info'] = $this->db->getResult("
			select
				*
			from
				ms_user
			where
				myspace_id = '" . $myspace_id . "'
			limit 
				0,1
		");
		
		if($rs['info']):
		
		$rs['events'] =  $this->db->getResult("
			select 
				ms_event.date,
				ms_event.city,
				ms_event.venue,
				ms_event.country
			from 
				ms_event,
				ms_user_event
			where 1
				and ms_user_event.ms_user_id = '" . $rs['info'][0]['ms_user_id'] . "'
				and ms_event.ms_event_id = ms_user_event.ms_event_id
				and ms_event.date > NOW()
			order by
				date ASC
			limit " . $offset .", " . $limit
		);	
			
		switch($format)
		{
			case "rss_cache":
				$this->smarty->cache_lifetime = 86400;
				$this->smarty->assign('events', $rs['events']);
				header("Content-type: application/rss+xml; charset=utf-8");
				$this->smarty->display('rss.tpl', $this->cache_params);
			break;
			case "json_cache":
			default:
				$this->smarty->cache_lifetime = 86400;
				$this->smarty->assign('json', json_encode($rs['events']));
				header("Content-type: application/x-javascript; charset=utf-8");
				$this->smarty->display('json.tpl', $this->cache_params);
			break;
		}
		
		else:
			echo "Error: the call failed.";
		endif;
	}
}
?>