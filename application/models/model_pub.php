<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pub extends CI_Model {
    
     public function get_allVacancies()
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT SUM(v.vacanciesleft) as totalvacancies from etesda.job_vacancies v 
                             where status =1 ORDER BY totalvacancies DESC");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
     public function get_allOpenings()
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT count(v.jobno) as totalopenings from etesda.job_vacancies v where expirationdate>=curdate()");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_regionVacancies()
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT count(v.jobno) as totalopenings,r.* from etesda.job_vacancies v 
			      JOIN etesda.reference_region r ON r.regionid = v.region
                              where expirationdate >= curdate()
                              GROUP BY regionid ORDER BY regionid ASC");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    
    public function get_industryVacancies()
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT count(v.jobno) as totalopenings,s.* from etesda.job_vacancies v 
                              JOIN tesda_centraldb.sectors s ON v.sectorid = s.sectorID
                              GROUP BY sectorid ORDER BY totalopenings DESC");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_perIndustryVacancies($sectorid)
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,e.companyName,r.region, c.city FROM etesda.job_vacancies j 
                            JOIN tesda_centraldb.employer_profile e ON e.userID = j.companyID
		     	    JOIN etesda.reference_city c ON c.cityid = j.city
                            JOIN etesda.reference_region r ON r.regionid = j.region
                            WHERE sectorid = $sectorid
                            GROUP BY j.jobno ORDER BY j.dateposted DESC ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
      public function get_perRegionVacancies($region)
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,e.companyName,r.region, c.city FROM etesda.job_vacancies j 
                            JOIN tesda_centraldb.employer_profile e ON e.userID = j.companyID
			    JOIN etesda.reference_city c ON c.cityid = j.city
                            JOIN etesda.reference_region r ON r.regionid = j.region
                            WHERE j.region = $region
                            GROUP BY j.jobno ORDER BY j.dateposted DESC ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_industryName($sectorid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT sectorName FROM sectors WHERE sectorID = $sectorid");
        foreach ($query->result() as $row)
        {
            return $row->sectorName;
        }
        $db2->close();
    }
    public function count_jobApplications($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT COUNT(*) as appcount FROM applications WHERE jobno = $jobno");
        foreach ($query->result() as $row)
        {
            return $row->appcount;
        }
        $db1->close();
    }
    public function get_companyVacancies()
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT SUM(vacanciesleft) as totalvacancies, companyID from job_vacancies  
                                GROUP BY companyid ORDER BY totalvacancies DESC");
        return $query->result_array();
        $db1->close();
    }
     public function get_companyOpenings()
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT count(jobno) as totalopenings, companyID from job_vacancies
where expirationdate >=curdate()  GROUP BY companyid ORDER BY totalopenings DESC");
        return $query->result_array();
        $db1->close();
    }
    public function get_companyName($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT companyName FROM employer_profile WHERE userid = $id");
        foreach ($query->result() as $row)
        {
            return $row->companyName;
        }
        $db2->close();
    }
    public function get_companyPic($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT companypic FROM employer_profile WHERE userid = $id");
        foreach ($query->result() as $row)
        {
            return $row->companypic;
        }
        $db2->close();
    }
    
     public function search_job($jobtitle, $industry ,$cityid,$company){
         $db1 = $this->load->database('local', TRUE);
         $db2 = $this->load->database('default', TRUE);
       
        $query = $db1->query("SELECT v.jobno, v.jobtitle,v.vacanciesleft,v.sectorid, v.description,r.region, c.city,i.sectorName, 
                                DATE_FORMAT(expirationdate, '%M %d, %Y') as expirationdate,v.dateposted,
                                p.companyName FROM 
                                etesda.job_vacancies v
                                JOIN tesda_centraldb.sectors i ON i.sectorID = v.sectorid
                                JOIN etesda.reference_city c ON c.cityid = v.city
                                JOIN etesda.reference_region r ON r.regionid = v.region
                                JOIN tesda_centraldb.employer_profile p ON p.userID = v.companyID
                               
                                WHERE v.jobtitle like '%$jobtitle%' AND p.companyName like '%$company%'  AND v.sectorid =  $industry  
                                AND v.city= $cityid AND status = 1
                                ORDER BY dateposted DESC");
        return $query->result_array();
        

        $db1->close();
    }
    
       public function all_job(){
         $db1 = $this->load->database('local', TRUE);
         $db2 = $this->load->database('default', TRUE);
       
        $query = $db1->query("SELECT v.jobno, v.jobtitle,v.vacanciesleft,v.sectorid, v.description,r.region, c.city,i.sectorName, 
                                DATE_FORMAT(expirationdate, '%M %d, %Y') as expirationdate,v.dateposted,
                                p.companyName FROM 
                                etesda.job_vacancies v
                                JOIN tesda_centraldb.sectors i ON i.sectorID = v.sectorid
                                JOIN etesda.reference_city c ON c.cityid = v.city
                                JOIN etesda.reference_region r ON r.regionid = v.region
                                JOIN tesda_centraldb.employer_profile p ON p.userID = v.companyID     
                                 WHERE v.status = 1 and expirationdate >= curdate()
                                ORDER BY dateposted DESC");
        return $query->result_array();
        

        $db1->close();
    }
    public function get_employerProfile($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * FROM employer_profile WHERE  userID = $id");
        return $query->result_array();
        $db2->close();
    }
    public function get_postedVacancies($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,r.region, c.city  FROM job_vacancies j
        JOIN etesda.reference_city c ON c.cityid = j.city
        JOIN etesda.reference_region r ON r.regionid = j.region
         WHERE companyID = $id AND status = 1 ORDER BY dateposted");
        return $query->result_array();
        $db1->close();
    }
    
    public function get_postedEvents($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT * FROM events WHERE createdby = $id ORDER BY startdate");
        return $query->result_array();
        $db1->close();
    }
    
    public function get_createdLeagues($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT * FROM league l WHERE createdby = $id");
        return $query->result_array();
        $db1->close();
    }
    public function get_leagues()
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT distinct s.sectorName, v.*, DATE_FORMAT(v.datecreated , '%M %Y') as since FROM etesda.league_members l   
                                JOIN etesda.league v on l.leagueno = v.leagueno 
                                JOIN tesda_centraldb.sectors s on s.sectorID = v.leagueindustry
                             
                                ORDER BY v.leaguename ASC ");
        return $query->result_array();
        $db1->close();
    }
    
    public function get_userType($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT usertype from users WHERE userid = '$id'");
        foreach ($query->result() as $row)
        {
         return $row->usertype;}
        $db2->close();
    }
    
    public function get_leagueDetails($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT l.*, COUNT(m.userid) as members,DATE_FORMAT(l.datecreated,'%M %Y') as since 
            FROM  league l JOIN league_members m ON l.leagueno = m.leagueno  WHERE l.leagueno = $id");
        return $query->result_array();
        $db1->close();
    }
    public function get_leagueDiscussions($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *, DATE_FORMAT(datereplied, '%b. %d, %y') as dateposted,
                            DATE_FORMAT(datereplied, '%h:%i %p') as timeposted 
                            FROM league_discussions d WHERE d.leagueno = $id AND d.repliedno = 0");
        return $query->result_array();
        $db1->close();
    }
    public function get_discDetails($discno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *, DATE_FORMAT(d.datereplied, '%b. %d, %y') as dateposted,
                            DATE_FORMAT(d.datereplied, '%h:%i %p') as timeposted 
                            FROM league_discussions d JOIN league l ON l.leagueno = d.leagueno
                            WHERE d.discussionno = $discno");
        return $query->result_array();
        $db1->close();
    }
     public function get_discReplies($discno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *, DATE_FORMAT(d.datereplied, '%b. %d, %y') as dateposted,
                            DATE_FORMAT(d.datereplied, '%h:%i %p') as timeposted
                            FROM league_discussions d 
                            WHERE d.repliedno = $discno 
                            ORDER BY d.datereplied DESC");
        return $query->result_array();
        $db1->close();
    }
    
    public function get_jsName($id){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT firstname, middlename, lastname from applicants WHERE appid = $id");
        return $query->result_array();
        $db2->close();
    }
    public function get_jsName2($id){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT firstname, middlename, lastname from applicants WHERE userid = $id");
        return $query->result_array();
        $db2->close();
    }
    
      public function get_eventattendes($eno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT e.eventno, e.eventtitle, a.firstname, a.lastname,ep.userid
        FROM etesda.events e
        JOIN etesda.event_participants ep ON  ep.eventno= e.eventno
        JOIN tesda_centraldb.applicants a ON a.appid = ep.userid
        where e.eventno = $eno
                                ");
             
         return $query->result_array();
         
         $db1->close();
     }
}


/* End of file user.php */
/* Location: ./application/models/user.php */