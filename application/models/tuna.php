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
	
//	function get_events($id,$year, $month, $day = -1){
//	
//		$dbconn = $this->load->database('local', TRUE);
//		if($day == -1):
//			$query = "select monthname(requirementdate),appid,applicationid,location,a.status,requirementtime, day(requirementdate) as eday 
//                           
//                            from applications a
//                            JOIN job_vacancies v ON a.jobno = v.jobno
//                            JOIN tesda_centraldb.users u ON v.companyID = u.userid
//                            where month(requirementdate) = ? AND year(requirementdate) = ? and v.companyID = '$id'" ;
//			$results = $dbconn->query($query, array($month, $year));
//		else:
//			$query = "select monthname(requirementdate), appid,applicationid,location,requirementtime, a.status, requirementdate 
//                            from applications a
//                            JOIN job_vacancies v ON a.jobno = v.jobno
//                            JOIN tesda_centraldb.users u ON v.companyID = u.userid
//                            where month(requirementdate) = ? AND year(requirementdate) = ? and day(requirementdate) = ?
//                            and v.companyID = '$id'";
//			$results = $dbconn->query($query, array($month, $year, $day));
//		endif;
//		$dbconn->close();
//		return $results->result();
//		
//	}
        
        function get_events($id, $year, $month, $day = -1){
	
		$dbconn = $this->load->database('local', TRUE);
		if($day == -1):
			$query = "select *, day(requirementdate) as eday  from applications where month(requirementdate) = ? and year(requirementdate) = ?
					and jobno in 
                         (select jobno from job_vacancies where
                         companyid = ?)" ;
			$results = $dbconn->query($query, array($month, $year, $id));
		else:
			$query = "select *, day(requirementdate) as eday  from applications where month(requirementdate) = ? and year(requirementdate) = ? and day(requirementdate) = ? 
			and jobno in (select jobno from job_vacancies where companyid = ?)";
			$results = $dbconn->query($query, array($month, $year, $day, $id));
		endif;
		$dbconn->close();
		return $results->result();
		
	}
}

/* End of file user.php */
/* Location: ./application/models/user.php */