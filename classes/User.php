<?php
class User
{
	function __construct()
	{
		$this->db = new Database;
		$this->myspace = new Myspace;
		$this->smarty = new Smarty;
	}
	
	function get($ms_user_id = false)
	{
		$rs = $this->db->getResult("
			select
				*
			from
				ms_user
			where
				active = '1'
		");
		
		return $rs;
	}
	
	function check_by_ms_user_id($id)
	{
		$rs = $this->db->getResult("
			select
				*
			from
				ms_user
			where
				myspace_id = '" . $id . "'
		");
		
		if($rs)
			return true;
		else
			return false;
	}
	
	function add_band()
	{
		$this->smarty->clear_cache('index.tpl');
		
		$id = filter_var($_REQUEST['ms_id'], FILTER_SANITIZE_NUMBER_INT);

		if(is_numeric($id))
		{	
			if($this->check_by_ms_user_id($id))
			{
				$this->smarty->assign('succes_message', "The band was already added, go check out their <a href='http://myspace.jochemschutte.nl/api/?format=rss&myspace_id=" . $id . "'>RSS feed:</a>");
			}
			elseif(!$this->myspace->check_myspace($id))
			{
				$this->smarty->assign('error_message', "There was no Myspace profile page found. Please try again.");
			}
			else
			{
				$this->db->query("
					insert into
						ms_user
					set
						myspace_id = '" . $id . "',
						signup_date = NOW()
				");
				
				$last_id_rs = $this->db->getResult("select ms_user_id from ms_user order by ms_user_id desc limit 1");
				$last_user_id = $last_id_rs[0]['ms_user_id'];
				
				$rs = $this->myspace->fetch_data($id, $last_user_id);
									
				$this->smarty->assign('succes_message', "The band is now added. There were " . $rs['added_shows'] . " shows found on your myspace.");
				
				$message = "A new user is added to the system with myspace_id: " . $id;
				mail("jochemschutte@gmail.com", "New user added", $message);
			}
		}
		else
		{
			$this->smarty->assign('error_message', "Please provide a valid Myspace id.");
		}
		
		$this->smarty->display('index.tpl');
		$this->smarty->clear_cache('index.tpl');
	}
}
?>