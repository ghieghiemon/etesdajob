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
        
        function get_events2($id, $year, $month, $day = -1){
	
		$dbconn = $this->load->database('local', TRUE);
		if($day == -1):
			$query = "select *, day(requirementdate) as eday  from applications 
                            where month(requirementdate) = ? and year(requirementdate) = ? 
                              AND (status ='Exam' or status ='Interview' )
					and jobno in 
                         (select jobno from job_vacancies where
                         companyid = ?)" ;
			$results = $dbconn->query($query, array($month, $year, $id));
		else:
			$query = "select *, day(requirementdate) as eday 
                            from applications where month(requirementdate) = ? and year(requirementdate) = ? 
                            and day(requirementdate) = ?  AND (status ='Exam' or status ='Interview' )
			and jobno in (select jobno from job_vacancies where companyid = ?)";
			$results = $dbconn->query($query, array($month, $year, $day, $id));
		endif;
		$dbconn->close();
		return $results->result();
		
	}
        
           function get_events($id, $year, $month, $day = -1){
	
		$dbconn = $this->load->database('local', TRUE);
		if($day == -1):
			$query = " select j.jobtitle, day(scheduledate) as eday ,a.status,sc.scheduledate, ss.starttime,ss.endtime,
                                    a.appid
                                    from etesda.applications a 
                                    join etesda.job_vacancies j on a.jobno = j.jobno
                                    JOIN tesda_centraldb.applicants ap ON ap.appid = a.appid

                                    join etesda.schedule sc on sc.scheduleid = a.scheduleid
                                    join etesda.schedule_slots ss on ss.scheduleid = sc.scheduleid
                                    JOIN tesda_centraldb.employer_profile p ON p.userID = j.companyid
                                    where month(sc.scheduledate) = ? and year(sc.scheduledate) = ? 
                                    AND (a.status = 'Interview' or a.status ='Exam') and ss.appid!=0
                                    AND scheduledate >= curdate()
                                    and a.jobno in 
                                    (select jobno from job_vacancies where
                                    companyid = ?) group by ss.slotid" ;
			$results = $dbconn->query($query, array($month, $year, $id));
		else:
                    
			$query = "select j.jobtitle, day(scheduledate) as eday , a.status,sc.scheduledate, ss.starttime,ss.endtime,
                                    a.appid
                                    from etesda.applications a 
                                    join etesda.job_vacancies j on a.jobno = j.jobno
                                    JOIN tesda_centraldb.applicants ap ON ap.appid = a.appid

                                    join etesda.schedule sc on sc.scheduleid = a.scheduleid
                                    join etesda.schedule_slots ss on ss.scheduleid = sc.scheduleid
                                    JOIN tesda_centraldb.employer_profile p ON p.userID = j.companyid
                                    where month(sc.scheduledate) = ? and year(sc.scheduledate) = ?  and day(sc.scheduledate) = ? 
                                    AND (a.status = 'Interview' or a.status ='Exam') and ss.appid!=0
                                    AND scheduledate >= curdate()
                                        and a.jobno in 
                                    (select jobno from job_vacancies where
                                    companyid = ?)group by ss.slotid";
			$results = $dbconn->query($query, array($month, $year, $day, $id));
		endif;
		$dbconn->close();
		return $results->result();
		
	}
}

/* End of file user.php */
/* Location: ./application/models/user.php */