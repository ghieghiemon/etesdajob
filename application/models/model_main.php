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
         public function get_eventno(){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT eventno FROM etesda.events");
        foreach ($query->result() as $row)
        {
         return $row->eventno;}
        $db1->close();
    }

     public function all_events(){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("  
        SELECT events.eventno,eventpic, eventtitle, venue,  COUNT(*) AS participantscount, r.region ,c.city,hosts,sponsors,purpose,
        DATE_FORMAT(startdate, '%M %d %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime,
        DATE_FORMAT(endtime, '%h:%i %p') as endtime
                                FROM events
                                JOIN event_participants on event_participants.eventno = events.eventno 
                                JOIN event_venue v on v.eventno = events.eventno 
                                JOIN reference_region r ON r.regionid = v.region  
				JOIN reference_city c ON c.cityid = v.city
                                where startdate >= curdate()
                                GROUP BY eventtitle,events.eventno  HAVING COUNT(*)>0
                                ORDER BY startdate ASC 
                               ");
            
        return $query->result_array();
        
        $db1->close();
    }
    
    public function get_eventdetails($eno){
    $db1 = $this->load->database('local', TRUE);
     $query = $db1->query("SELECT events.eventno,eventpic, eventtitle, venue,  COUNT(*) AS participantscount,
        r.region ,c.city,hosts,sponsors,purpose,
        DATE_FORMAT(startdate, '%M %d %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime,
        DATE_FORMAT(endtime, '%h:%i %p') as endtime
                                FROM events
                                JOIN event_participants on event_participants.eventno = events.eventno 
                                JOIN event_venue v on v.eventno = events.eventno 
                                JOIN reference_region r ON r.regionid = v.region  
				JOIN reference_city c ON c.cityid = v.city
                                WHERE events.eventno = $eno

            ");
     
    return $query->result_array();

    $db1->close();
    }
   
  
     
     

//employer

    
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
 
}




/* End of file user.php */
/* Location: ./application/models/user.php */