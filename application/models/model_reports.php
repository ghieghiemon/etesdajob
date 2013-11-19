<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_reports extends CI_Model {
    
	function __construct() 
	{
		parent::__construct();
	}
        
          public function get_company_vacancies($month, $year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select j.jobno, j.companyID, j.jobtitle, j.vacanciesleft, j.description, j.expirationdate, e.companyName, c.city from etesda.job_vacancies j 
                    join tesda_centraldb.employer_profile e on j.companyID = e.userID
                    join etesda.reference_city c on c.cityid = j.city
                   where month(dateposted) = ? and year(dateposted) = ?";
        $result = $dbconn->query($query1, array($month, $year))->result();
        $dbconn->close();
        return $result;
        
    }//end report JV
    public function get_companyindustry_vacancies($month, $year, $sectorid){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select j.jobno, j.companyID, j.jobtitle, j.vacanciesleft, j.description, j.expirationdate, e.companyName, c.city from etesda.job_vacancies j 
                    join tesda_centraldb.employer_profile e on j.companyID = e.userID
                    join etesda.reference_city c on c.cityid = j.city
					join etesda.job_certifications jc on jc.jobno = j.jobno
                   where month(dateposted) = ? and year(dateposted) = ? and jc.ncid = ?";
        $result = $dbconn->query($query1, array($month, $year,$sectorid))->result();
        $dbconn->close();
        return $result;
        
    }
    function getAllCerts() 
    {
      $db2 = $this->load->database('default', TRUE);
      $query = $db2->query("SELECT  ncid, ncname,description, level FROM nc_reference");
      $data=array();
      foreach ($query->result() as $row)
      {
        $data[$row->ncid] = $row->ncname." ".$row->level;
      }
      return ($data);
    }
    
    public function get_indemand_jobs($month, $year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
//        $query1 = "select COUNT(*) as noapplicants,j.jobtitle, s.sectorName from etesda.applications a 
//        join etesda.job_vacancies j on j.jobno = a.jobno 
//        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
//        where month(j.dateposted) = ? and year(j.dateposted) = ?
//        group by a.jobno order by noapplicants DESC limit 15";
        $query1 = "SELECT count(v.jobno) as totalopenings, n.ncname, n.level from etesda.job_vacancies v 
                              JOIN etesda.job_certifications c ON c.jobno = v.jobno
                              JOIN tesda_centraldb.nc_reference n ON c.ncid = n.ncid
                              where month(v.dateposted) = ? and year(v.dateposted) = ?
                              GROUP BY c.ncid ORDER BY totalopenings DESC limit 15";
        $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
        
    }//end report Indemand jobs
    
     public function get_indemand_industries($month, $year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
//        $query1 = "select COUNT(*) as noapplicants, s.sectorName from etesda.applications a 
//        join etesda.job_vacancies j on j.jobno = a.jobno 
//        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
//        where month(j.dateposted) = ? and year(j.dateposted) = ?
//        group by j.sectorid order by noapplicants DESC limit 15";
        $query1 = "SELECT count(j.jobno) as totalopenings,s.* from etesda.job_vacancies j 
                              JOIN tesda_centraldb.sectors s ON j.sectorid = s.sectorID
                              where month(j.dateposted) = ? and year(j.dateposted) = ?
                              GROUP BY j.sectorid ORDER BY totalopenings DESC limit 15";
        $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
        
        //print_r($result);
        
    }//end report Indemand jobs
    
     public function get_employment_industry($month, $year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        
        
        $query1 = "select COUNT(*) as noapplicants, s.sectorName from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
        where month(j.dateposted) = ? and year(j.dateposted) = ? and a.status = 'Hired'
        group by j.sectorid order by noapplicants DESC limit 15";
        $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
        
        //print_r($result);
        
    }//end report Indemand jobs
    public function get_employment_region($month, $year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select COUNT(*) as noapplicants, s.sectorName, r.region  from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
		join etesda.reference_region r on r.regionid = j.region
        where month(j.dateposted) = ? and year(j.dateposted) = ? and a.status = 'Hired'
        group by r.region order by noapplicants DESC limit 15";
        $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
        
        
        
}
}

/* End of file nutella.php */
/* Location: ./application/models/nutella.php */