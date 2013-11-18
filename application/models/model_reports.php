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
                   where month(dateposted) = ? and year(dateposted) = ? and sectorid =?";
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
        $query1 = "select COUNT(*) as noapplicants,j.jobtitle, s.sectorName from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
        where month(j.dateposted) = ? and year(j.dateposted) = ?
        group by a.jobno order by noapplicants DESC limit 15";
        $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
        
        //print_r($result);
        
    }//end report Indemand jobs
    
     public function get_indemand_industries($month, $year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select COUNT(*) as noapplicants, s.sectorName from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
        where month(j.dateposted) = ? and year(j.dateposted) = ?
        group by j.sectorid order by noapplicants DESC limit 15";
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
        where month(j.dateposted) = ? and year(j.dateposted) = ?
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
        $query1 = "select COUNT(*) as noapplicants, s.sectorName from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
        where month(j.dateposted) = ? and year(j.dateposted) = ?
        group by j.sectorid order by noapplicants DESC limit 15";
        $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
        
        
        
}
}

/* End of file nutella.php */
/* Location: ./application/models/nutella.php */