<?php

class Model_employer extends CI_Model {
    //employer
    public function get_ename(){
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $query = $db2->query("SELECT companyName from employer_profile WHERE userID = $id");
        return $query->result_array();
        $db2->close();
    }
    public function get_epic(){
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $query = $db2->query("SELECT companypic from employer_profile WHERE userid = $id");
        foreach ($query->result() as $row)
        {
         return $row->companypic;}
        $db2->close();
    }  
    
    public function get_appcomp($appid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * FROM applicants_competency j
                             join nccoc c on c.ncoid = j.compid where j.appid= $appid 
                            ");
        return $query->result_array();
        $db1->close();
    }
    public function get_appcert($appid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * FROM applicants_certificates j
                             join nc_reference c on c.ncid = j.certificateid where j.appid= $appid 
                            ");
        return $query->result_array();
        $db1->close();
    }
     function get_comps($cert = null)
     {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncoid,ncid, cocname,description FROM nccoc where ncid ='$cert'");
        $comp = array();
        if($query->result())
        {
            foreach ($query->result() as $comps) 
            {
            $comp[$comps->ncoid] = $comps->cocname;
            }
            return $comp;
        }
        else
            {
            return FALSE;
            }
     }
     function age_from_dob($dob) {
        return floor((time() - strtotime($dob)) / 31556926);
    }
     public function get_qualifiedjs($sex, $startage, $endage)
    {
        $db1 = $this->load->database('default', TRUE);
        
        if ($sex=='Male')
        {
            $query = $db1->query("SELECT * from applicants a where (a.ismale = '1' ) 
                AND (year(curdate())-year(a.birthday)  BETWEEN $startage AND $endage) 
                                      order by lastname asc  ");
        }
        else if ($sex == "Female")
        {
            $query = $db1->query("SELECT * from applicants a where (a.ismale = '0' ) 
                AND (year(curdate())-year(a.birthday)  BETWEEN $startage AND $endage) 
                                        order by lastname asc  ");
        }
        else if ($sex == "Both")
        {
            $query = $db1->query("SELECT * from applicants a where 
                (year(curdate())-year(a.birthday)  BETWEEN $startage AND $endage) 
                                        order by lastname asc  ");
        }
        return $query->result_array();
        $db1->close();
    }
     function in_notifs($jobno, $id)
     {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT jobno, userid, notification from notifications WHERE jobno = $jobno and
                            userid = $id");
        $comp = array();
        if($query->num_rows() >= 1)
        {
            return false;
        }
        else
        {
            return true;
        }
      $db1->close();
     }      
     function get_competencyname($comp = null) 
     {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncoid,ncid, cocname,description FROM nccoc where ncoid ='$comp'");
        $data=array();
        foreach ($query->result() as $row)
        {  
            $data[$row->ncoid] = $row->cocname;
        }
            return ($data);     
     }
     
     function get_competencydesc($comp = null) 
     {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncoid,ncid, cocname,description FROM nccoc where ncoid ='$comp'");
        $data=array();
        foreach ($query->result() as $row)
        {

            $data[$row->ncoid] = $row->description;
        }
            return ($data); 
     }
     
      public function get_jobdescription($jobno)
    {
       $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT description from job_vacancies where jobno = $jobno");
       foreach ($query->result() as $row)
       {return $row->description;}
       $db1->close();
    }
     
     function getAllComp() 
     {
      $db2 = $this->load->database('default', TRUE);
      $query = $db2->query("SELECT ncoid,ncid, cocname,description FROM nccoc");
      $data=array();
      foreach ($query->result() as $row)
      {
       $data[$row->ncoid] = $row->cocname;
      }
      return ($data);
     }

    function getAllCerts() 
    {
      $db2 = $this->load->database('default', TRUE);
      $query = $db2->query("SELECT  ncid, ncname,description, level FROM nc_reference");
      $data=array();
      foreach ($query->result() as $row)
      {
        $data[$row->ncid] = $row->ncname;
      }
      return ($data);
    }

     function get_certificationname($cert = null) 
     {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncid, ncname,level,description FROM nc_reference where ncid ='$cert'");
        $data=array();

        foreach ($query->result() as $row)
        {
            $data[$row->ncid] = $row->ncname;
        }
            return ($data);   
     }
         public function get_certName($cert)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncname FROM nc_reference where ncid =$cert");
        foreach ($query->result() as $row)
        {
            return $row->ncname;
        }
        $db2->close();
    }
     function get_certificationdesc($cert = null) 
     {  
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncid, ncname,level,description FROM nc_reference where ncid ='$cert'");
        $data=array();
        foreach ($query->result() as $row)
        {    
         $data[$row->ncid] = $row->description;
        }
         return ($data);   
     }
     
     function get_certificationlevel($cert = null) 
     {         
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ncid, ncname,level,description FROM nc_reference where ncid ='$cert'");
        $data=array();

        foreach ($query->result() as $row)
        {
            $data[$row->ncid] = $row->level;
        }
            return ($data);        
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
     public function add_jobvacancy($jobtitle,$desc,$companyid, $nov, $region, $city,$industry,$gender, $ageto, $agefrom)
     {
        $db1 = $this->load->database('local', TRUE);

        $sql = "INSERT INTO job_vacancies(jobtitle,description, companyid, vacanciesleft,dateposted,expirationdate,  
                region,city, sectorid,sex,agestart,ageend,status,lastedited) VALUES(?,?,?,?,CURDATE(), DATE_ADD(curdate(), INTERVAL 2 WEEK),?,?,?,?,?,?,1,CURDATE())";
        $db1->query($sql,array($jobtitle,$desc,$companyid, $nov, $region,$city, $industry,$gender, $ageto, $agefrom));
        $jobpostid = $db1->insert_id();
        return $jobpostid;
        $db1->close();
     }
     public function add_notification($userid,$notif,$jobno)
     {
        $db1 = $this->load->database('local', TRUE);

        $sql = "INSERT INTO notifications(userid, notification, date, seen, jobno)VALUES(?,?,NOW(),0,?)";
        $db1->query($sql,array($userid, $notif, $jobno));
        $db1->close();
     }
     public function add_jobvacancy3w($jobtitle,$desc,$companyid, $nov, $region, $city,$industry,$gender, $ageto, $agefrom)
     {
        $db1 = $this->load->database('local', TRUE);

        $sql = "INSERT INTO job_vacancies(jobtitle,description, companyid, vacanciesleft,dateposted,expirationdate,  
                region,city, sectorid,sex,agestart,ageend,status,lastedited) VALUES(?,?,?,?,CURDATE(), DATE_ADD(curdate(), INTERVAL 3 WEEK),?,?,?,?,?,?,1,CURDATE())";
        $db1->query($sql,array($jobtitle,$desc,$companyid, $nov, $region,$city, $industry,$gender, $ageto, $agefrom));
        $jobpostid = $db1->insert_id();
        return $jobpostid;
        $db1->close();
     }

     public function add_jobvacancy4w($jobtitle,$desc,$companyid, $nov, $region, $city,$industry,$gender, $ageto, $agefrom)
     {
        $db1 = $this->load->database('local', TRUE);

        $sql = "INSERT INTO job_vacancies(jobtitle,description, companyid, vacanciesleft,dateposted,expirationdate,  
                region,city, sectorid,sex,agestart,ageend,status,lastedited) VALUES(?,?,?,?,CURDATE(), DATE_ADD(curdate(), INTERVAL 4 WEEK),?,?,?,?,?,?,1,CURDATE())";
        $db1->query($sql,array($jobtitle,$desc,$companyid, $nov, $region,$city, $industry,$gender, $ageto, $agefrom));
        $jobpostid = $db1->insert_id();
        return $jobpostid;
        $db1->close();
    }

    
    public function add_certifications($jobno, $ncid)
    {
        $db1 = $this->load->database('local', TRUE);
        $sql = "INSERT INTO job_certifications (jobno,ncid) VALUES(?,?)";
        $db1->query($sql,array($jobno,$ncid));
        $db1->close();

    }
    
    public function add_competencies($jobno, $ncoid)
    {
        $db1 = $this->load->database('local', TRUE);
        $sql = "INSERT INTO job_competencies(jobno,ncoid) VALUES(?,?)";
        $db1->query($sql,array($jobno,$ncoid));
        $db1->close();
    }
    public function get_myvacancies($id)
    {
        $db1 = $this->load->database('local', TRUE);
        
       $sql = $db1->query("SELECT *,jobno, jobtitle, DATE_FORMAT(expirationdate, '%m/%d/%Y') as expirationdate, expirationdate as exp,
                           DATE_FORMAT(dateposted, '%m/%d/%Y') as dateposted, CURDATE() as currentdate, vacanciesleft
                           from job_vacancies v
                           JOIN etesda.reference_city c ON c.cityid = v.city
                           JOIN etesda.reference_region r ON r.regionid = v.region
                           JOIN tesda_centraldb.sectors i ON i.sectorID = v.sectorid
                           WHERE companyID = $id AND vacanciesleft >0
                           ORDER BY lastedited DESC
                           
                           ");
        return $sql->result_array();
        $db1->close();
    }
    public function get_myClosedvacancies($id)
    {
        $db1 = $this->load->database('local', TRUE);
        
       $sql = $db1->query("SELECT *,jobno, jobtitle, DATE_FORMAT(expirationdate, '%M %d %Y') as expirationdate, 
                           DATE_FORMAT(dateposted, '%M %d %Y') as dateposted, CURDATE() as currentdate, vacanciesleft
                           from job_vacancies v
                           JOIN etesda.reference_city c ON c.cityid = v.city
                           JOIN etesda.reference_region r ON r.regionid = v.region
                           WHERE companyID = $id  AND vacanciesleft = 0
                           ORDER BY jobtitle ASC
                           
                           ");
        return $sql->result_array();
        $db1->close();
    }
    public function get_myvacanciesExpired($id)
    {
        $db1 = $this->load->database('local', TRUE);
        
       $sql = $db1->query("SELECT *,jobno, jobtitle, DATE_FORMAT(expirationdate, '%M %d %Y') as expirationdate, 
                           DATE_FORMAT(dateposted, '%m/%d/%Y') as dateposted, CURDATE() as currentdate, vacanciesleft
                           from job_vacancies v
                           JOIN etesda.reference_city c ON c.cityid = v.city
                           JOIN etesda.reference_region r ON r.regionid = v.region
                           WHERE companyID = $id AND expirationdate < curdate()
                           ORDER BY jobtitle ASC
                           
                           ");
        return $sql->result_array();
        $db1->close();
    }
    public function get_appdetails($id)
    {
        $db1 = $this->load->database('local', TRUE);
        
       $sql = $db1->query("SELECT *,a.jobno, v.jobtitle, DATE_FORMAT(v.expirationdate, '%M %d %Y') as expirationdate, 
                           DATE_FORMAT(v.dateposted, '%m/%d/%Y') as dateposted, CURDATE() as currentdate, v.vacanciesleft
                           from applications a
                           JOIN job_vacancies v ON a.jobno = v.jobno
                           JOIN etesda.reference_city c ON c.cityid = v.city
                           JOIN etesda.reference_region r ON r.regionid = v.region
                           WHERE a.appid = $id
                           ");
        return $sql->result_array();
        $db1->close();
    }
    public function employer_checkjobstatus($jobtitle,$region,$city)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT * FROM job_vacancies WHERE jobtitle = '$jobtitle' AND region=$region AND city=$city");
		
        if($query->num_rows() == 1){
            
            return false;            
        }
        else{
            
            return true;
        }
        $db1->close();
    }
     public function check_if_invite($appid, $jobno)
    {
        $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT * 
             FROM job_invitation 
             WHERE appid = $appid AND jobno = $jobno and applied=0");
        if ($query->num_rows()>0)
            return false;
        else return true;
       $db1->close();
    }
    public function get_appid($applicationid)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT appid FROM applications WHERE applicationid = $applicationid");
        foreach ($query->result() as $row)
        {
            return $row->appid;
        }
        $db1->close();
    }
    public function get_applicationid($appid)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT applicationid FROM applications WHERE appid = $applicationid");
        foreach ($query->result() as $row)
        {
            return $row->applicationid;
        }
        $db1->close();
    }
    public function get_jobno($applicationid)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT jobno FROM applications WHERE applicationid = $applicationid");
        foreach ($query->result() as $row)
        {
            return $row->jobno;
        }
        $db1->close();
    }
    public function get_jobsex($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT sex FROM job_vacancies WHERE jobno = $jobno");
        foreach ($query->result() as $row)
        {
            return $row->sex;
        }
        $db1->close();
    }
    public function get_jobagestart($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT agestart FROM job_vacancies WHERE jobno = $jobno");
        foreach ($query->result() as $row)
        {
            return $row->agestart;
        }
        $db1->close();
    }
    public function get_jobageend($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT ageend FROM job_vacancies WHERE jobno = $jobno");
        foreach ($query->result() as $row)
        {
            return $row->ageend;
        }
        $db1->close();
    }
    public function get_appstatus($applicationid)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT status FROM applications WHERE applicationid = $applicationid");
        foreach ($query->result() as $row)
        {
            return $row->status;
        }
        $db1->close();
    }
    public function get_appage($appid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT DATE_FORMAT(birthday, '%m/%d/%Y') as  birthday from applicants where appid = $appid");
        foreach ($query->result() as $row)
        {
            return $row->birthday;
        }
        $db2->close();
    }
    
    public function get_appsex($appid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT ismale from applicants where appid = $appid");
        foreach ($query->result() as $row)
        {
            return $row->ismale;
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
    public function count_jobApplicationsNew($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT COUNT(*) as appcount FROM applications WHERE jobno = $jobno AND status = 'New Applicant'");
        foreach ($query->result() as $row)
        {
            return $row->appcount;
        }
        $db1->close();
    }
    public function count_jobApplicationsExam($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT COUNT(*) as appcount FROM applications WHERE jobno = $jobno AND status = 'Exam'");
        foreach ($query->result() as $row)
        {
            return $row->appcount;
        }
        $db1->close();
    }
    public function count_jobApplicationsInterview($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT COUNT(*) as appcount FROM applications WHERE jobno = $jobno AND status = 'Interview'");
        foreach ($query->result() as $row)
        {
            return $row->appcount;
        }
        $db1->close();
    }
    public function count_jobApplicationsHired($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT COUNT(*) as appcount FROM applications WHERE jobno = $jobno AND status = 'Hired'");
        foreach ($query->result() as $row)
        {
            return $row->appcount;
        }
        $db1->close();
    }
     public function get_jobCerts($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * FROM etesda.job_certifications j
                             join tesda_centraldb.nc_reference c on c.ncid = j.ncid where j.jobno = $jobno 
                            ");
        return $query->result_array();
        $db1->close();
    }
    public function get_jobComps($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * FROM etesda.job_competencies j
                             join tesda_centraldb.nccoc c on c.ncoid = j.ncoid where j.jobno = $jobno 
                            ");
        return $query->result_array();
        $db1->close();
    }
    public function get_allnewApplicant($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived FROM applications a 
                            JOIN job_vacancies j ON a.jobno = j.jobno
                            JOIN etesda.reference_city c ON c.cityid = j.city
                        JOIN etesda.reference_region r ON r.regionid = j.region
                            WHERE j.companyID = $id AND a.status = 'New Applicant' 
                            ORDER BY a.datereceived DESC");
        return $query->result_array();
        $db1->close();
    }
    public function get_newApplicant($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                        FROM applications WHERE jobno = $jobno AND status = 'New Applicant'
                        ORDER BY datereceived DESC ");
        return $query->result_array();
        $db1->close();
    }
    public function get_exam($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                        FROM applications WHERE jobno = $jobno AND status = 'Exam'
                        ORDER BY datereceived DESC");
        return $query->result_array();
        $db1->close();
    }
    public function get_interview($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                            FROM applications WHERE jobno = $jobno AND status = 'Interview'
                            ORDER BY datereceived DESC");
        return $query->result_array();
        $db1->close();
    }
    public function get_allapps($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                            FROM applications WHERE jobno = $jobno 
                            ORDER BY datereceived ASC ");
        return $query->result_array();
        $db1->close();
    }
    public function get_allApplications($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                            FROM applications WHERE companyID = $id 
                            ORDER BY datereceived ASC");
        return $query->result_array();
        $db1->close();
    }
    public function get_hired($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                            FROM applications WHERE jobno = $jobno AND status = 'Hired'
                            ORDER BY datereceived DESC");
        return $query->result_array();
        $db1->close();
    }
    public function get_jobApplications($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%M %d %Y') as datereceived 
                        FROM applications WHERE jobno = $jobno 
                        ORDER BY datereceived DESC");
        return $query->result_array();
        $db1->close();
    }
   
    public function get_jobInvites($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT appid FROM job_invitation WHERE jobno = $jobno");
        return $query->result_array();
        $db1->close();
    }
    public function get_jobInvitesApps($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT appid FROM job_invitation i  JOIN job_vacancies v ON i.jobno = v.jobno
                            WHERE v.companyID = $id AND applied = 1");
        return $query->result_array();
        $db1->close();
    }
    public function get_jobdetails($jobno)
    {
       $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT *,v.description,CURDATE() as currentdate
                        from job_vacancies v
                        JOIN etesda.reference_city c ON c.cityid = v.city
                        JOIN etesda.reference_region r ON r.regionid = v.region
                        JOIN tesda_centraldb.sectors i ON i.sectorID = v.sectorid
                        where jobno = $jobno");
       return $query->result_array();
       $db1->close();
    }
    
//    public function match($jobpost_id, $seeker_id)
//    {
//        $total_skill = $this->getMatchedSkills($jobpost_id, $seeker_id);
////        $total_cert = $this->getMatchedCertifications($jobpost_id, $seeker_id);;
////        $total_comp = $this->getMatchedCompetencies($jobpost_id, $seeker_id);;
//        $total_cert = 0;
//        $total_comp = $this->getMatchedSkills($jobpost_id, $seeker_id);
//        if($total_skill >0 || $total_cert > 0 || $total_comp > 0)
//            return true;
//        else
//            return false;
//    }
    public function get_jobseekers()
    {
        $db2 = $this->load->database('default', TRUE);
            $sql = $db2->query("SELECT appid from applicants order by lastname asc ");
            return $sql->result_array();
        $db2->close();
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
    public function change_status($what,$applicationid,$jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        
        $db1->query("UPDATE applications SET status = '$what' where applicationid = $applicationid");
        $this->fill_vacancy($jobno);
        $query1 = $db2->query("SELECT vacanciesleft from job_vacancies where jobno = $jobno");
        foreach ($query1->result() as $row)
        {
          $left = $row->vacanciesleft;
        }
        if($left <= 0)
        {
            $query2 = $db2->query("SELECT appid from applications WHERE status != 'Hired'");
            return $query2->result_array();
        }
        else return 0;
        $db1->close();
    }
     public function add_schedule($scheduledate,$what, $venue, $contactperson, $contactno,$applicationid)
    {
        $db1 = $this->load->database('local', TRUE);
        $sql = "INSERT INTO schedule(scheduledate, venue, contactperson,contactno) VALUES(?,?,?,?)";
        $db1->query($sql,array($scheduledate,$venue, $contactperson, $contactno));
        $scheduleid = $db1->insert_id();
        $db1->query("UPDATE applications SET scheduleid = $scheduleid, status = '$what' where applicationid = $applicationid");
        return $scheduleid;
        $db1->close();
    }
    public function add_scheduleslot($scheduleid, $starttime,$endtime)
    {
        $db1 = $this->load->database('local', TRUE);
        $sql2 = "INSERT INTO schedule_slots(scheduleid, starttime,endtime, appid) VALUES(?,?,?,0)";
        $db1->query($sql2,array($scheduleid, $starttime,$endtime, $appid));
        $db1->close();
    }
     public function fill_vacancy($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db1->query("UPDATE job_vacancies SET vacanciesleft = vacanciesleft-1 WHERE jobno=$jobno");
        $db1->close();
    }
        public function employer_briefcase($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT  v.jobtitle, a.jobno, a.status, a.appid, ap.firstname,ap.lastname,
                    DATE_FORMAT(a.requirementdate, '%M %d %Y') as requirementdate,
                    DATE_FORMAT(a.requirementtime, '%h:%i %p') as requirementtime
                    FROM etesda.applications a
                    JOIN etesda.job_vacancies v ON a.jobno = v.jobno

                    JOIN tesda_centraldb.applicants ap ON ap.appid = a.appid
                    where v.companyID =$id  AND (a.status ='Exam' or a.status ='Interview')
                    AND requirementdate >= curdate() 
                            ");
        return $query->result_array();


        $db1->close();
  }
  public function get_applicantDetails($appid)
  {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT  *,DATE_FORMAT(a.birthday,'%M %d, %Y') as birthday 
            from applicants a JOIN address d ON d.appid = a.appid  where a.appid = $appid
                            ");
        $db2->close();
        return $query->result_array();
  }
  public function get_applicationDetails($appid,$jobno)
  {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT  * from applications  where appid = $appid and jobno = $jobno
                            ");
        $db1->close();
        return $query->result_array();

  }
  public function get_email($userid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT email from users where userid = $userid");
        foreach ($query->result() as $row)
        {
            return $row->email;
        }
        $db2->close();
    }
     public function get_userid($appid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT userid from applicants where appid = $appid");
        foreach ($query->result() as $row)
        {
            return $row->userid;
        }
        $db2->close();
    }
  public function get_alljobdetails($jobno)
    {
       $db1 = $this->load->database('local', TRUE);

       $query = $db1->query("SELECT *, r.region,v.description,c.city,CURDATE() as currentdate,
                        DATE_FORMAT(dateposted, '%M %d %Y') as dateposted,
                        DATE_FORMAT(expirationdate, '%M %d %Y') as expirationdate from job_vacancies v
                        join etesda.job_certifications jc on jc.jobno = v.jobno 
                        join etesda.job_competencies jco on jco.jobno = v.jobno 
                        JOIN etesda.reference_city c ON c.cityid = v.city
                        JOIN etesda.reference_region r ON r.regionid = v.region
                        JOIN tesda_centraldb.sectors i ON i.sectorID = v.sectorid
                        
                        JOIN tesda_centraldb.nc_reference nc ON nc.ncid = jc.ncid
                        
                        where v.jobno = $jobno");
       return $query->result_array();
       $db1->close();
 
    }
    public function save_applicantnotes($appid,$notes)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE applications SET notes = '$notes' WHERE applicationid=$appid");
        $db1->close();
    }
     public function update_jobvacancy($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE job_vacancies SET expirationdate =DATE_ADD(expirationdate, INTERVAL 2 WEEK) WHERE jobno = $jobno");
        $db1->close();
    }
        public function update_jobvacancy3w($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE job_vacancies SET expirationdate =DATE_ADD(expirationdate , INTERVAL 3 WEEK) WHERE jobno = $jobno");
        $db1->close();
    }
        public function update_jobvacancy4w($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE job_vacancies SET expirationdate =DATE_ADD(expirationdate, INTERVAL 4 WEEK) WHERE jobno = $jobno");
        $db1->close();
    }
         public function renew_jobvacancy($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE job_vacancies SET expirationdate =DATE_ADD(curdate(), INTERVAL 2 WEEK) WHERE jobno = $jobno");
        $db1->close();
    }
         public function renew_jobvacancy3w($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE job_vacancies SET expirationdate =DATE_ADD(curdate(), INTERVAL 3 WEEK) WHERE jobno = $jobno");
        $db1->close();
    }
         public function renew_jobvacancy4w($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
 
        $db1->query("UPDATE job_vacancies SET expirationdate =DATE_ADD(curdate(), INTERVAL 4 WEEK) WHERE jobno = $jobno");
        $db1->close();
    }
    public function invite_jobseeker($appid,$jobno)
    {
       
      $db1 = $this->load->database('local', TRUE);
           
      $sql = "INSERT INTO job_invitation(appid,jobno,applied) VALUES(?,?,0)";
            
      $db1->query($sql,array($appid,$jobno));
      
    }
    public function get_createdleagues($userid)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT s.sectorName, v.*, DATE_FORMAT(v.datecreated , '%M %Y') as since  FROM etesda.league v 
                                JOIN tesda_centraldb.sectors s on s.sectorID = v.leagueindustry
                                WHERE v.createdby = $userid
                                ORDER BY v.leaguename ASC  ");
        $db1->close();
        $db2->close();
        return $query->result_array();
    }
    public function get_allleagues()
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT s.sectorName, v.*, DATE_FORMAT(v.datecreated , '%M %Y') as since from etesda.league v 
                                JOIN tesda_centraldb.sectors s on s.sectorID = v.leagueindustry
                                ORDER BY v.leaguename ASC  ");
        return $query->result_array();
        $db1->close();
    }
    public function get_myleagues($userid)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT s.sectorName, v.*, DATE_FORMAT(v.datecreated , '%M %Y') as since  FROM etesda.league_members l   
                                JOIN etesda.league v on l.leagueno = v.leagueno 
                                JOIN tesda_centraldb.sectors s on s.sectorID = v.leagueindustry
                                WHERE l.userid = $userid
                                ORDER BY v.leaguename ASC  ");
        $db1->close();
        $db2->close();
        return $query->result_array();
    }
    public function get_leaguemembers($leagueno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query(" SELECT userid FROM league_members
                            WHERE leagueno = $leagueno ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_leagueDetails($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT l.*, s.sectorName, s.sectorIcon, COUNT(m.userid) as members,DATE_FORMAT(l.datecreated,'%M %Y') as since 
           
                    FROM  etesda.league l JOIN etesda.league_members m ON l.leagueno = m.leagueno
                            JOIN tesda_centraldb.sectors s on s.sectorID = l.leagueindustry
                            WHERE l.leagueno = $id");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function join_league($lno,$id){
        $db1 = $this->load->database('local', TRUE);
        $query = "INSERT INTO league_members(leagueno,userid) VALUES(?,?) ";
        $db1->query($query,array($lno,$id));
        $db1->close();
    }
    
   public function add_league($lname,$id,$det,$industry,$leaguepic)
     {
        
    $db1 = $this->load->database('local', TRUE);
    $sql = "INSERT INTO league(leaguename,createdby,leaguedescription,leagueindustry,leaguepic,
        datecreated) VALUES(?,?,?,?,?,curdate())";
    $db1->query($sql,array($lname,$id,$det,$industry,$leaguepic));
    $leagueno = $db1->insert_id();  
    return $leagueno;
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
    public function post_comment($repliedno, $disc, $postedby, $leagueno, $likes){
        $db1 = $this->load->database('local', TRUE);
        $query = "INSERT INTO league_discussions(repliedno, discussion, postedby, leagueno, likes, datereplied) VALUES(?,?,?,?,?,NOW()) ";
        $db1->query($query,array($repliedno, $disc, $postedby, $leagueno, $likes ));
        $db1->close();
    }
    public function add_topics($disc, $postedby, $leagueno){
        $db1 = $this->load->database('local', TRUE);
        $query = "INSERT INTO league_discussions(repliedno, discussion, postedby, leagueno, likes, datereplied) VALUES(0,?,?,?,0,NOW()) ";
        $db1->query($query,array( $disc, $postedby, $leagueno));
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
     public function get_createdevents($userid){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,COUNT(*)-1 AS participantscount,  e.eventno,eventpic, e.eventtitle, venue, r.region ,c.city, 
        DATE_FORMAT(startdate, '%M %d, %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime
                                FROM events e 
                                JOIN event_venue ev on ev.eventno = e.eventno  
				JOIN event_participants ep on ep.eventno = e.eventno       
                                JOIN reference_region r ON r.regionid = ev.region  
                                JOIN reference_city c ON c.cityid = ev.city        
                                WHERE e.createdby = '$userid' and startdate >= curdate()
				GROUP BY eventtitle,e.eventno  HAVING COUNT(*)>=0
                                ORDER BY startdate DESC ");
        return $query->result_array();
        $db1->close();
    }
    
    
      public function get_eventdetails($eno){
        $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT ep.companyName, e.createdby, e.eventno,e.eventpic, e.eventtitle, venue,  COUNT(*)-1 AS participantscount,
        r.region ,c.city,sponsors,purpose,
        DATE_FORMAT(startdate, '%M %d %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime,
        DATE_FORMAT(endtime, '%h:%i %p') as endtime
                                FROM events e
                                JOIN event_participants on event_participants.eventno = e.eventno 
                                JOIN tesda_centraldb.employer_profile ep on ep.userID = e.createdby
                                JOIN event_venue v on v.eventno = e.eventno 
                                JOIN reference_region r ON r.regionid = v.region  
							    JOIN reference_city c ON c.cityid = v.city
                                WHERE e.eventno = $eno

            ");
     
    return $query->result_array();

    $db1->close();
    }
    
    public function add_event($eventname,$startdate,$timestart,$id, $details,$industry,$sponsor,$eventpic)
     {
        
    $db1 = $this->load->database('local', TRUE);
    $sql = "INSERT INTO events(eventtitle,startdate,starttime,createdby,purpose,
        eventindustry,sponsors,eventpic) VALUES(?,?,?,?,?,?,?,?)";
    $db1->query($sql,array($eventname,$startdate,$timestart,$id,$details,$industry,$sponsor,$eventpic));
    $eventno = $db1->insert_id();  
    return $eventno;
    $db1->close();

   
            }
            
public function add_eventvenue($eventno,$eventvenue,$region,$city)
    {
      $db1 = $this->load->database('local', TRUE);    
      $sql = "INSERT INTO event_venue(eventno,venue,region,city) VALUES(?,?,?,?)";           
      $db1->query($sql,array($eventno,$eventvenue,$region,$city));
           

    }
        
    // attend event

public function attend_event($userid, $eventno){ 
         
       $db1 = $this->load->database('local', TRUE);
        $sql = "INSERT INTO event_participants(userid, eventno) VALUES(?,?)";
        $db1->query($sql,array($userid, $eventno));
        $db1->close();
    }
    
     public function getMatchedindustries ($id, $eventno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * FROM etesda.events e 
          JOIN tesda_centraldb.nc_reference nc ON nc.sectorid = e.eventindustry
          JOIN tesda_centraldb.applicants_certificates ac ON ac.certificateid = nc.ncid
          WHERE ac.appid = $id AND eventno = $eventno group by eventno");
        return $query->num_rows();
        $db1->close(); 
    }
    
    public function check_if_einvite($id, $event)
    {
        $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT * 
             FROM event_invitation 
             WHERE userid = $id AND eventno = $event");
        if ($query->num_rows()>0)
            return false;
        else return true;
       $db1->close();
    }
    public function getMatchedindustriesL ($id, $lno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * FROM etesda.league l 
          JOIN tesda_centraldb.nc_reference nc ON nc.sectorid = l.leagueindustry
          JOIN tesda_centraldb.applicants_certificates ac ON ac.certificateid = nc.ncid
          WHERE ac.appid = $id AND l.leagueno = $lno group by leagueno");
        return $query->num_rows();
        $db1->close(); 
    }

public function check_if_linvite($id, $lno)
    {
        $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT * 
             FROM league_invitation 
             WHERE userid = $id AND leagueno = $lno");
        if ($query->num_rows()>0)
            return false;
        else return true;
       $db1->close();
    }
    
      public function event_attendees($eno)
    {
        $db1 = $this->load->database('local', TRUE);
         $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT *,e.eventno, e.eventtitle,ep.userid
        FROM etesda.events e
        JOIN etesda.event_participants ep ON  ep.eventno= e.eventno
        JOIN tesda_centraldb.applicants a ON a.userid = ep.userid
        where e.eventno = $eno");
             
         return $query->result_array();
         $db1->close();
     }
     
       public function add_invleague($userid,$leagueno)
    {
       
      $db1 = $this->load->database('local', TRUE);
           
      $sql = "INSERT INTO league_invitation(userid,leagueno,accepted) VALUES(?,?,0)";
            
      $db1->query($sql,array($userid,$leagueno));
      
    }
    
         public function add_invevent($userid,$eventno)
    {
       
      $db1 = $this->load->database('local', TRUE);
           
      $sql = "INSERT INTO event_invitation(userid,eventno,accepted) VALUES(?,?,0)";
            
      $db1->query($sql,array($userid,$eventno));
      
    }
}
?>
