<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tuna extends CI_Model {
    
	function __construct() 
	{
		parent::__construct();
	}
	
	function add_event($date, $status){
		
		$dbconn = $this->load->database('local', TRUE);
		$query = 'insert into events (`eventdate`, `status`) values (?, ?)';
		$result = $dbconn->query($query, array($date, $status));
		$dbconn->close();
		return $result;
		
	}
	
	function get_events($year, $month, $day = -1){
	
		$dbconn = $this->load->database('local', TRUE);
		if($day == -1):
			$query = 'select appid, status, day(requirementdate) as eday from applications where month(requirementdate) = ? AND year(requirementdate) = ?';
			$results = $dbconn->query($query, array($month, $year));
		else:
			$query = 'select appid, status, requirementdate from applications where month(requirementdate) = ? AND year(requirementdate) = ? and day(requirementdate) = ?';
			$results = $dbconn->query($query, array($month, $year, $day));
		endif;
		$dbconn->close();
		return $results->result();
		
	}
   
}

/* End of file user.php */
/* Location: ./application/models/user.php */