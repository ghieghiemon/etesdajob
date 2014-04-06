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
        $result = $dbconn->query($query1, array($month,$year,$sectorid))->result();
        $dbconn->close();
        return $result;
        
    }
    public function get_company_vacancies2($year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select j.jobno, j.companyID, j.jobtitle, j.vacanciesleft, j.description, j.expirationdate, e.companyName, c.city from etesda.job_vacancies j 
                    join tesda_centraldb.employer_profile e on j.companyID = e.userID
                    join etesda.reference_city c on c.cityid = j.city
                   where year(dateposted) = ?";
        $result = $dbconn->query($query1, array( $year))->result();
        $dbconn->close();
        return $result;
        
    }//end report JV
    public function get_companyindustry_vacancies2( $year, $sectorid){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select j.jobno, j.companyID, j.jobtitle, j.vacanciesleft, j.description, j.expirationdate, e.companyName, c.city from etesda.job_vacancies j 
                    join tesda_centraldb.employer_profile e on j.companyID = e.userID
                    join etesda.reference_city c on c.cityid = j.city
					join etesda.job_certifications jc on jc.jobno = j.jobno
                   where year(dateposted) = ? and jc.ncid = ?";
        $result = $dbconn->query($query1, array($year,$sectorid))->result();
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
    public function get_employment_region($month, $year)
    {
  
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
     public function get_indemand_jobs2($year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);

        $query1 = "SELECT count(v.jobno) as totalopenings, n.ncname, n.level from etesda.job_vacancies v 
                              JOIN etesda.job_certifications c ON c.jobno = v.jobno
                              JOIN tesda_centraldb.nc_reference n ON c.ncid = n.ncid
                              where year(v.dateposted) = ?
                              GROUP BY c.ncid ORDER BY totalopenings DESC limit 15";
        $result = $dbconn->query($query1, array($year))->result();
        return $result;
        $dbconn->close();
        
    }//end report Indemand jobs
    
     public function get_indemand_industries2($year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        $query1 = "SELECT count(j.jobno) as totalopenings,s.* from etesda.job_vacancies j 
                              JOIN tesda_centraldb.sectors s ON j.sectorid = s.sectorID
                              where year(j.dateposted) = ?
                              GROUP BY j.sectorid ORDER BY totalopenings DESC limit 15";
        $result = $dbconn->query($query1, array($year))->result();
        return $result;
        $dbconn->close();
        
        //print_r($result);
        
    }//end report Indemand jobs
    
     public function get_employment_industry2($year){
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        
        
        $query1 = "select COUNT(*) as noapplicants, s.sectorName from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
        where year(j.dateposted) = ? and a.status = 'Hired'
        group by j.sectorid order by noapplicants DESC limit 15";
        $result = $dbconn->query($query1, array($year))->result();
        return $result;
        $dbconn->close();
        
        //print_r($result);
        
    }//end report Indemand jobs
    public function get_employment_region2($year)
    {
  
        $dbconn = $this->load->database('local', TRUE);
        $dbconn2 = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select COUNT(*) as noapplicants, s.sectorName, r.region  from etesda.applications a 
        join etesda.job_vacancies j on j.jobno = a.jobno 
        join tesda_centraldb.sectors s on j.sectorid = s.sectorID
		join etesda.reference_region r on r.regionid = j.region
        where year(j.dateposted) = ? and a.status = 'Hired'
        group by r.region order by noapplicants DESC limit 15";
        $result = $dbconn->query($query1, array($year))->result();
        return $result;
        $dbconn->close();  
    }
    public function get_vacancies($year,$id)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT j.jobtitle, a.jobno from applications a 
                join job_vacancies j ON j.jobno = a.jobno where year(j.dateposted)
                = ? AND companyID = ? group by j.jobno";
        
        $result = $dbconn->query($query1, array($year,$id))->result_array();
        return $result;
        $dbconn->close();
    }
    public function get_applicationno($jobno)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT Count(*) as count from applications a 
                where jobno = ?";
        
        $result = $dbconn->query($query1, array($jobno))->result();
        return $result;
        $dbconn->close();
    }
    public function get_hiredno($jobno)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT Count(*) as count from applications a 
                where jobno = ? AND status = 'Hired' ";
        
        $result = $dbconn->query($query1, array($jobno))->result();
        return $result;
        $dbconn->close();
    }
    public function get_applicants($jobno)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT Count(*) as count, month(datereceived) as month from applications a 
                where jobno = ?
                group by month(datereceived)";
        
        $result = $dbconn->query($query1, array($jobno))->result_array();
        return $result;
        $dbconn->close();
    }
    public function get_scholars($month,$year,$cert)
    {
        $dbconn = $this->load->database('default', TRUE);
        //insert query
        $query1 = "select * from applicants_certificates c join applicants a on a.appid = c.appid
                join nc_reference n on c.certificateid = n.ncid where a.scholar = 1
                and year(c.dateacquired) = ? and month(c.dateacquired) = ? and c.certificateid = ?
                group by a.appid ";
        
        $result = $dbconn->query($query1, array($year,$month,$cert))->result();
        return $result;
        $dbconn->close();
    }
    public function get_scholars2($year,$cert)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "select * from applicants_certificates c join applicants a on a.appid = c.appid
                join nc_reference n on c.certificateid = n.ncid where a.scholar = 1
                and year(c.dateacquired) = ?  and c.certificateid = ?
                group by a.appid ";
        
        $result = $dbconn->query($query1, array($year,$cert))->result();
        return $result;
        $dbconn->close();
    }
    public function get_annualGraduates($year1,$year2)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(c.appid) as count, year(c.dateacquired) as dateacquired from applicants_certificates c
                join applicants a on a.appid = c.appid where year(c.dateacquired) = ?
                or year(c.dateacquired) = ?
                group by year(c.dateacquired) ORDER BY  c.dateacquired asc";
        
        $result = $dbconn->query($query1, array($year1,$year2))->result_array();
        return $result;
        $dbconn->close();
    }
    public function get_hiredGraduates($year1,$year2)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(c.appid) as count, year(c.dateacquired) as dateacquired from applicants_certificates c
            join applicants a on a.appid = c.appid
            where a.employment = 1 AND  year(c.dateacquired) = ?
                or year(c.dateacquired) = ?
            group by year(c.dateacquired) ORDER BY  year(c.dateacquired) asc";
        
        
        $result = $dbconn->query($query1, array($year1,$year2))->result_array();
        return $result;
        $dbconn->close();
    }
   
    public function get_activeGraduates($year)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(appid), month(datereceived)  FROM applications  where year(datereceived) = ? group by month(datereceived)";
        
        $result = $dbconn->query($query1, array($year))->result_array();
        return $result;
        $dbconn->close();
    }
    
      public function get_bigContributor($month, $year)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(j.companyID) as vacancies, e.companyName from etesda.job_vacancies j
                    join tesda_centraldb.employer_profile e on e.userID = j.companyID
                    where month(j.dateposted) = ? and year(j.dateposted) = ? group by j.companyID order by vacancies DESC";

       $result = $dbconn->query($query1, array($month, $year))->result();
        return $result;
        $dbconn->close();
    }
     public function get_bigContributor2($year)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(j.companyID) as vacancies, e.companyName from etesda.job_vacancies j
                    join tesda_centraldb.employer_profile e on e.userID = j.companyID
                    where year(j.dateposted) = ? group by j.companyID order by vacancies DESC ";

       $result = $dbconn->query($query1, array($year))->result();
        return $result;
        $dbconn->close();
    }
    public function getModules($courseid){
        $db = $this->load->database('default', TRUE);
       
        $query = $db->select('*')
                ->where('ncid',$courseid)
               
                ->get('nccoc')
                
                ->result_array();
        
        return $query;
    }
     public function get_resultsQ1($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        $modules = $this->getModules($courseid);
       // print_r($modules);
        $moduleResults = array();
        foreach($modules as $a)
        {
            $moduleid = $a['ncoid'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_modules m ON  d.resultID =  m.resultID
            WHERE (MONTH(d.DATE ) =1
            OR MONTH( d.DATE ) =2
            OR MONTH( d.DATE ) =3) AND YEAR(d.DATE) = $year
            AND m.moduleID = $moduleid
            AND  d.courseID = $courseid"
            );
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            print_r($rating);
            $moduleResults[$moduleid] = $rating/$ctr;
        }
       return $moduleResults;
         
        $db1->close();
    }
    
    
    public function get_resultsQ2($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        $modules = $this->getModules($courseid);
       // print_r($modules);
        $moduleResults = array();
        foreach($modules as $a)
        {
            $moduleid = $a['ncoid'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_modules m ON  d.resultID =  m.resultID
            WHERE (MONTH(d.DATE ) =4
            OR MONTH( d.DATE ) =5
            OR MONTH( d.DATE ) =6) AND YEAR(d.DATE) = $year
                AND m.moduleID = $moduleid
            AND  d.courseID = $courseid");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $moduleResults[$moduleid] = $rating/$ctr;
        }
       return $moduleResults;
         
        $db1->close();
    }
    public function get_resultsQ3($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        $modules = $this->getModules($courseid);
       // print_r($modules);
        $moduleResults = array();
        foreach($modules as $a)
        {
            $moduleid = $a['ncoid'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_modules m ON  d.resultID =  m.resultID
            WHERE (MONTH(d.DATE ) =7
            OR MONTH( d.DATE ) =8
            OR MONTH( d.DATE ) =9) AND YEAR(d.DATE) = $year
                AND m.moduleID = $moduleid
            AND  d.courseID = $courseid");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $moduleResults[$moduleid] = $rating/$ctr;
        }
       return $moduleResults;
         
        $db1->close();
    }
    public function get_resultsQ4($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        $modules = $this->getModules($courseid);
       // print_r($modules);
        $moduleResults = array();
        foreach($modules as $a)
        {
            $moduleid = $a['ncoid'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_modules m ON  d.resultID =  m.resultID
            WHERE (MONTH(d.DATE ) =10
            OR MONTH( d.DATE ) =11
            OR MONTH( d.DATE ) =12) AND YEAR(d.DATE) = $year
                AND m.moduleID = $moduleid
            AND  d.courseID = $courseid");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $moduleResults[$moduleid] = $rating/$ctr;
        }
       return $moduleResults;
         
        $db1->close();
    }
    public function getAverageRatingMonthly($moduleid,$resultID){
        $db = $this->load->database('local', TRUE);
            $result = $db->select('rating')
                ->where('moduleID',$moduleid)
                ->get('survey_results_modules')
                ->result_array();
            
            $rating = 0;
            $ctr = 0;
            foreach($result as $r){
                $rating += $r['rating'];
                $ctr++;
            }
            
            
            return $rating/$ctr;
    }
    
    public function getTestBankID($courseid){
        $db = $this->load->database('local', TRUE);
        
        $result = $db->select('testbankID')
                ->where('courseid',$courseid)
                ->get('survey_testbank')
                ->row();
        
        return $result;
    }
    
    public function getAddQMc($testbankid){
          $db = $this->load->database('local', TRUE);
        
        $result = $db->select('*')
                ->where('testbankID',$testbankid)
                ->where('type','rating')
                ->get('survey_itembank')
                ->result_array();
        
        return $result;
    }
    
    public function getAddQOf($testbankid){
          $db = $this->load->database('local', TRUE);
        
        $result = $db->select('*')
                ->where('testbankID',$testbankid)
                ->where('type','open')
                ->get('survey_itembank')
                ->result_array();
        
        return $result;
    }
    
    public function getAllOpenForm($year,$courseid){
        $db1 = $this->load->database('local', TRUE);
        
        
        $testbankid = $this->getTestBankID($courseid);
        $mc = $this->getAddQOf($testbankid->testbankID);
       // print_r($modules);
        $ofResults = array();
        foreach($mc as $a)
        {
            $itemid = $a['itemID'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_questions q ON  d.resultID =  q.resultID
            WHERE YEAR(d.DATE) = $year
            AND  d.courseID = $courseid
            AND q.rating = 0
            ORDER BY d.DATE DESC"
                    
                    );
            $results = $query->result_array();
            
            $ofResults[$itemid] = $results;
        }
       return $ofResults;
         
        $db1->close();
    }
    
     public function get_AresultsQ1($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        
        $testbankid = $this->getTestBankID($courseid);
        $mc = $this->getAddQMc($testbankid->testbankID);
       // print_r($modules);
        $mcResults = array();
        foreach($mc as $a)
        {
            $itemid = $a['itemID'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_questions q ON  d.resultID =  q.resultID
            WHERE (MONTH(d.DATE ) =1
            OR MONTH( d.DATE ) =2
            OR MONTH( d.DATE ) =3) AND YEAR(d.DATE) = $year
            AND  d.courseID = $courseid
                AND q.itemID = $itemid
            AND q.rating != 0");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $mcResults[$itemid] = $rating/$ctr;
        }
       return $mcResults;
         
        $db1->close();
    }
    
    public function get_AresultsQ2($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        
        $testbankid = $this->getTestBankID($courseid);
        $mc = $this->getAddQMc($testbankid->testbankID);
       // print_r($modules);
        $mcResults = array();
        foreach($mc as $a)
        {
            $itemid = $a['itemID'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_questions q ON  d.resultID =  q.resultID
            WHERE (MONTH(d.DATE ) =1
            OR MONTH( d.DATE ) =2
            OR MONTH( d.DATE ) =3) AND YEAR(d.DATE) = $year
            AND  d.courseID = $courseid
                AND q.itemID = $itemid
            AND q.rating != 0");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $mcResults[$itemid] = $rating/$ctr;
        }
       return $mcResults;
         
        $db1->close();
    }
    
    public function get_AresultsQ3($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        
        $testbankid = $this->getTestBankID($courseid);
        $mc = $this->getAddQMc($testbankid->testbankID);
       // print_r($modules);
        $mcResults = array();
        foreach($mc as $a)
        {
            $itemid = $a['itemID'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_questions q ON  d.resultID =  q.resultID
            WHERE (MONTH(d.DATE ) =1
            OR MONTH( d.DATE ) =2
            OR MONTH( d.DATE ) =3) AND YEAR(d.DATE) = $year
            AND d.courseID = $courseid
                AND q.itemID = $itemid
            AND q.rating != 0");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $mcResults[$itemid] = $rating/$ctr;
        }
       return $mcResults;
         
        $db1->close();
    }
    
    public function get_AresultsQ4($year,$courseid)
    {
        $db1 = $this->load->database('local', TRUE);
        
        
        $testbankid = $this->getTestBankID($courseid);
        $mc = $this->getAddQMc($testbankid->testbankID);
       // print_r($modules);
        $mcResults = array();
        foreach($mc as $a)
        {
            $itemid = $a['itemID'];
            
            $query = $db1->query("SELECT * 
            FROM  etesda.survey_results_details d
            JOIN  etesda.survey_results_questions q ON  d.resultID =  q.resultID
            WHERE (MONTH(d.DATE ) =1
            OR MONTH( d.DATE ) =2
            OR MONTH( d.DATE ) =3) AND YEAR(d.DATE) = $year
            AND  d.courseID = $courseid
                AND q.itemID = $itemid
            AND q.rating != 0");
            $results = $query->result_array();
            $rating = 0;
            $ctr=0;
            foreach($results as $b)
            {
                $rating += $b['rating'];
                $ctr++;
            }
            $mcResults[$itemid] = $rating/$ctr;
        }
       return $mcResults;
         
        $db1->close();
    }
    
       public function get_newPartner($year)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(ep.userID) as companies,month(ep.dateregistered) as month  from tesda_centraldb.employer_profile ep
        where year(ep.dateregistered) = ? group by month(ep.dateregistered)";

       $result = $dbconn->query($query1, array($year))->result_array();
        return $result;
        $dbconn->close();
    }
    public function get_totalPartner($year)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(ep.userID) as companies, month(ep.dateregistered) as month from tesda_centraldb.employer_profile ep
        where  year(ep.dateregistered) <= ?  group by month(ep.dateregistered)";

       $result = $dbconn->query($query1, array($year))->result_array();
        return $result;
        $dbconn->close();
        
    }
    public function get_postings($year)
    {
        $dbconn = $this->load->database('local', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(*) as count, month(dateposted) as month from job_vacancies where 
            year(dateposted) = ?  group by month(dateposted)";

       $result = $dbconn->query($query1, array($year))->result_array();
        return $result;
        $dbconn->close();
    }
   
    



   
    public function get_monthlyGraduates($year)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(c.appid) as count, year(c.dateacquired) as dateacquired,  month(c.dateacquired) as montha from applicants_certificates c
                join applicants a on a.appid = c.appid
                join nc_reference nc on nc.ncid = c.certificateid
                where year(c.dateacquired) = ?
                
               
                
                group by month(c.dateacquired) ORDER BY  month(c.dateacquired) asc";
        
        $result = $dbconn->query($query1, array($year))->result_array();
        return $result;
        $dbconn->close();
    }
    
    public function get_mhiredGraduates($year)
    {
        
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(c.appid) as count, year(c.dateacquired) as dateacquired, month(c.dateacquired) as montha 
            from applicants_certificates c
            join applicants a on a.appid = c.appid
             join nc_reference nc on nc.ncid = c.certificateid
            where a.employment = 1 AND  year(c.dateacquired) = ?
            group by month(c.dateacquired) ORDER BY  month(c.dateacquired) asc";
        
        
        $result = $dbconn->query($query1, array($year))->result_array();
      // $result = $dbconn->query($query1, array($year,$industry))->result_array();
        return $result;
        $dbconn->close();
    }
    
    public function get_cmonthlyGraduates($industry, $year)
    {
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
                $query1 = "SELECT COUNT(c.appid) as count, year(c.dateacquired) as dateacquired,  month(c.dateacquired) as montha from applicants_certificates c
                join applicants a on a.appid = c.appid
                join nc_reference nc on nc.ncid = c.certificateid
                where year(c.dateacquired) = ? AND
                 nc.sectorid= ?

                
                group by month(c.dateacquired) ORDER BY  month(c.dateacquired) asc";
        
        $result = $dbconn->query($query1, array($year,$industry))->result_array();
        return $result;
        $dbconn->close();
    }
    
    public function get_cmhiredGraduates($industry,$year)
    {
        
        $dbconn = $this->load->database('default', TRUE);
        
        //insert query
        $query1 = "SELECT COUNT(c.appid) as count, year(c.dateacquired) as dateacquired, month(c.dateacquired) as montha 
            from applicants_certificates c
            join applicants a on a.appid = c.appid
             join nc_reference nc on nc.ncid = c.certificateid
            where a.employment = 1 AND  year(c.dateacquired) = ?
            AND  nc.sectorid= ?
            group by month(c.dateacquired) ORDER BY  month(c.dateacquired) asc";
        
        
       $result = $dbconn->query($query1, array($year,$industry))->result_array();
      // $result = $dbconn->query($query1, array($year,$industry))->result_array();
        return $result;
        $dbconn->close();
    }
//    
//     public function get_monthlyPostings($month,$year)
//    {
//        $dbconn = $this->load->database('local', TRUE);
//        $where = "MONTH(job_vacancies.dateposted) = '".$month."' AND YEAR(job_vacancies.dateposted) = '".$year."'";
//        $result = $dbconn->select('*')               
//                ->where($where)
//                ->get('job_vacancies');
//        
//        return $result->num_rows();
//
//    }
//    
      public function get_population()
    {
        $dbconn = $this->load->database('default', TRUE);
        
            $result = "select userid,
            sum(case when usertype = 'employer' then 1 else 0 end) as employers,
            sum(case when usertype= 'applicant' then 1 else 0 end) as graduates
            from users
            ";
        
        return $result;
        $dbconn->close();
    }

    
	 public function get_monthlyPostings($industry,$month,$year)
 	    {
 	        $dbconn = $this->load->database('local', TRUE);
 	        $where = "MONTH(job_vacancies.dateposted) = '".$month."' AND YEAR(job_vacancies.dateposted) = '".$year."'";
                

                $result = $dbconn->select('*')
                ->join('job_certifications','job_certifications.jobno = job_vacancies.jobno')
                ->where('job_certifications.ncid',$industry)
                ->where($where)
                ->get('job_vacancies');

               return $result->num_rows();
            }
    
    
}

/* End of file nutella.php */
/* Location: ./application/models/nutella.php */