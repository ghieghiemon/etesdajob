<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends CI_Model {
    
    function __construct() 
    {
            parent::__construct();
    }
    //register add this
    
    public function unique_email($email)
    {
        $db2 = $this->load->database('default', TRUE);
            $sql = $db2->query("SELECT * from users WHERE email='$email'");
            
            if($sql->num_rows()==1)
                return false;
            else
                return true;
        $db2->close();
    }
    public function is_key_valid($key)
    {
        $db2 = $this->load->database('default', TRUE);
            $sql = $db2->query("SELECT * from temp_users WHERE thekey = '$key'");
            
            if($sql->num_rows()==1)
                return true;
            else
                return false;
        $db2->close();
    }
    
        public function add_tempuser($key)
    {
        
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        //$usertype = "APPLICANT";  
        
        $db2 = $this->load->database('default', TRUE);
        
        $query = "INSERT into temp_users(email, userpassword, thekey) VALUES (?,?,?)";
        $db2->query($query,array($email, $password, $key));
        
        $db2->close();
    }
    public function add_user($key)
    {
        
         $email = $this->input->post('email');
         $password = md5($this->input->post('password'));
        //$usertype = "APPLICANT";  
        
        $db2 = $this->load->database('default', TRUE);
        
        $sql = $db2->query("SELECT * from temp_users WHERE thekey = '$key'");
        
        if ($sql->num_rows()>0)
        {
            $row = $sql->row();
            $email = $row->email;
            $password= $row->userpassword;
              
            $query = "INSERT into users(email, userpassword, usertype) VALUES (?,?,?)";
            $did_add_user = $db2->query($query,array($email, $password, 'APPLICANT'));
            $id = $db2->insert_id();
        }
        
        if($did_add_user)
        {
            $db2->query("DELETE from temp_users WHERE thekey = '$key'");
             return $id;
        }
        
        $db2->close();
    }
//public
    public function can_log_in(){
        $email = $this->input->post('email');
        $userpassword = md5($this->input->post('userpassword'));
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * FROM users WHERE email = '$email' AND userpassword = '$userpassword'");
		
        if($query->num_rows() == 1){
            
            return true;            
        }
        else{
            
            return false;
        }
        $db2->close();
    }   
    public function get_usertype(){
        $email = $this->input->post('email');
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT usertype from users WHERE email = '$email'");
        foreach ($query->result() as $row)
        {
         return $row->usertype;}
        $db2->close();
    }
    public function get_uninvited_applicants()
    {
        $db2 = $this->load->database('default', TRUE);
            $sql = $db2->query("SELECT * from applicants where loggedin = 0 and invited = 0");
            return $sql->result_array();
        $db2->close();
    }
     public function update_invitation($appid)
    {
        $db2 = $this->load->database('default', TRUE);
        $db2->query("UPDATE applicants
                                    SET invited = 1
                                    WHERE appid = $appid");
        $db2->close();
    }
    public function get_regionname($id){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT region from reference_region WHERE regionid = $id");
        foreach ($query->result() as $row)
        {
         return $row->region;}
        $db1->close();
    }
    public function get_cityname($id){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT city from reference_city WHERE cityid = $id");
        foreach ($query->result() as $row)
        {
         return $row->city;}
        $db1->close();
    }
    public function get_appid($email){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT appid from applicants a JOIN users u  ON a.userid=u.userid WHERE u.email = '$email'");
        foreach ($query->result() as $row)
        {
         return $row->appid;}
        $db2->close();
    }
    public function get_userid($email){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT userid from users WHERE email = '$email'");
        foreach ($query->result() as $row)
        {
         return $row->userid;}
        $db2->close();
    }
//employer
    public function get_ename(){
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $query = $db2->query("SELECT companyName from employer_profile WHERE userID = $id");
        foreach ($query->result() as $row)
        {
         return $row->companyName;}
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
    
    function get_drpindustries()
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT  sectorID, sectorName FROM sectors");
        $industries = array();
        if($query->result())
         {
          foreach ($query->result() as $industry) 
           {
            $industries[$industry->sectorID] = $industry->sectorName;
           }
          return $industries;
         }
         else
          {
           return FALSE;
          }
    }
    
    function get_regions()
    {  
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT  regionid, region FROM reference_region");
        $regions = array();
        if($query->result())
        {
        foreach ($query->result() as $region) 
            {
             $regions[$region->regionid] = $region->region;
            }
             return $regions;
        }
        else
         {
          return FALSE;
         }
    }
    
    function get_cities($region = null)
    {
          $db1 = $this->load->database('local', TRUE);
          $query = $db1->query("SELECT  cityid, city FROM reference_city where regionid ='$region'");
          $cities = array();
          if($query->result())
          {
            foreach ($query->result() as $city) 
              {
              $cities[$city->cityid] = $city->city;
              }
              return $cities;
          }
          else
            {
              return FALSE;
            }
     }
     function get_industrycerts($industry = null)
     {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT  ncid, ncname,description, level FROM nc_reference where sectorid ='$industry'");
        $cert = array();
        if($query->result())
        {
            foreach ($query->result() as $certs) 
            {
            $cert[$certs->ncid] = $certs->ncname;
            }
            return $cert;
        }
        else
            {
            return FALSE;
            }
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
        
       $sql = $db1->query("SELECT jobno, jobtitle, DATE_FORMAT(expirationdate, '%m/%d/%Y') as expirationdate, 
                           DATE_FORMAT(dateposted, '%m/%d/%Y') as dateposted, vacanciesleft
                           from job_vacancies 
                           WHERE companyID = $id
                           ORDER BY jobtitle ASC
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
//jobseeker
    public function get_jsname(){
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT firstname, middlename, lastname from applicants WHERE appid = $id");
        return $query->result_array();
        $db2->close();
    }
    public function get_jspic(){
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $query = $db2->query("SELECT profile_pic from applicants WHERE userid = $id");
        foreach ($query->result() as $row)
        {
         return $row->profile_pic;}
        $db2->close();
    } 
    public function get_jscert()
    {
        $db2 = $this->load->database('default', TRUE);
            $sql = $db2->query("SELECT userid from applicants");
            return $sql->result_array();
        $db2->close();
    }
    public function get_myinvites($userid)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
       $query = $db1->query("SELECT j.invitationno,v.jobno, v.vacanciesleft, v.jobtitle, v.description, e.companyName, DATE_FORMAT(dateposted, '%m/%d/%Y') 
           as dateposted, DATE_FORMAT(expirationdate, '%m/%d/%Y') as expirationdate
             FROM etesda.job_invitation j JOIN etesda.job_vacancies v ON j.jobno = v.jobno
             JOIN tesda_centraldb.employer_profile e ON e.userID = v.companyID
             WHERE j.appid = $userid AND j.applied = 0
               ORDER BY dateposted DESC");
        return $query->result_array();
       $db1->close();
       $db2->close();
    }
    public function get_jobdescription($jobno)
    {
       $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT description from job_vacancies where jobno = $jobno");
       foreach ($query->result() as $row)
       {return $row->description;}
       $db1->close();
    }
    public function get_jobdetails($jobno)
    {
       $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT * from job_vacancies where jobno = $jobno");
       return $query->result_array();
       $db1->close();
    }
    public function apply_job($userid, $jobno)
    {    
        $db1 = $this->load->database('local', TRUE);
        $sql = "INSERT INTO applications(userid, jobno, status,statusno, datereceived, timereceived) VALUES(?,?,'Unscreened', 1,CURDATE(), CURTIME())";
        $db1->query($sql,array($userid, $jobno));
        $db1->close();
    }
    public function accept_job($invno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db1->query("UPDATE job_invitation
                                    SET applied = 1
                                    WHERE invitationno = $invno");
        $db1->close();
    }
    public function decline_job($invno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("UPDATE job_invitation
                                    SET applied = 2
                                    WHERE invitationno = $invno");
        $db1->close();
    }
    public function get_myapplications($userid){
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * from etesda.applications a
                                JOIN etesda.job_vacancies v ON v.jobno = a.jobno
                                JOIN tesda_centraldb.employer_profile e ON e.userID = v.companyID
                                WHERE a.appid = $userid
                                ORDER BY a.datereceived DESC
                            ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_mysideapplications($userid,$jobno){
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * from etesda.applications a
                                JOIN etesda.job_vacancies v ON v.jobno = a.jobno
                                JOIN tesda_centraldb.employer_profile e ON e.userID = v.companyID
                                WHERE a.userid = $userid AND v.jobno != $jobno
                                ORDER BY a.datereceived DESC
                            ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_dob($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $query = $db2->query("SELECT birthday from applicants WHERE userid = $id");
        foreach ($query->result() as $row)
        {
         return $row->birthday;
        }
        $db2->close();
    }
    public function get_sex($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $query = $db2->query("SELECT ismale from applicants WHERE userid = $id");
        foreach ($query->result() as $row)
        {
         return $row->ismale;
        }
        $db2->close();
    }
    public function get_alljobs()
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT * FROM job_vacancies GROUP BY jobno ORDER BY dateposted DESC 
                            ");
        return $query->result_array();
        $db1->close();
    }
    function age_from_dob($dob) {
        return floor((time() - strtotime($dob)) / 31556926);
    }
    public function get_qualifiedjobs($sex, $dob)
    {
        if ($sex==1)
                $sex='Male';
        else 
            $sex='Female';
        $age = $this->age_from_dob($dob);

        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT * from job_vacancies j join job_certifications c on j.jobno = c.jobno 
                                    where (j.sex = '$sex' or j.sex = 'Both') 
                                    AND ($age BETWEEN j.agestart AND j.ageend) GROUP BY j.jobno");
        return $query->result_array();
        $db1->close();
    }
    public function get_jobcert($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT * FROM job_certifications where jobno = $jobno 
                            ");
        return $query->num_rows();
        $db1->close();
    }
    public function get_matchedCert($jobno,$id)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * from etesda.job_certifications jc
                                JOIN etesda.job_vacancies v ON v.jobno = jc.jobno
                                JOIN tesda_centraldb.applicants_certificates ac ON ac.certificateid = jc.ncid
                                WHERE ac.appid = $id AND jc.jobno = $jobno
                                ORDER BY v.dateposted DESC
                            ");
        $result = $query->num_rows();
        return $result;
        
        $db1->close();
        $db2->close();
    }
}


/* End of file user.php */
/* Location: ./application/models/user.php */