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
    
     public function add_jsuser()
    {
        
        $email = $this->input->post('email');
        $password = $this->input->post('userpassword'); 
        $db2 = $this->load->database('default', TRUE);
        $query = "INSERT into users(email, userpassword, usertype) VALUES (?,?,?)";
        $db2->query($query,array($email, $password, 'APPLICANT'));
        $userid = $db2->insert_id();
        return $userid;
      
        
        $db2->close();
    }
    
      public function add_empuser()
    {
        
         $email = $this->input->post('email');
         $password = $this->input->post('userpassword');
         $db2 = $this->load->database('default', TRUE);   
         $query = "INSERT into users(email, userpassword, usertype) VALUES (?,?,?)";
         $db2->query($query,array($email, $password, 'EMPLOYER'));
         $userid = $db2->insert_id();
         return $userid;
        
        $db2->close();
    }
   
      public function add_jsdetails($userid)
    {
        
        $db2 = $this->load->database('default', TRUE);
        
        $query="INSERT into applicants(userid, firstname, lastname, 
           civilstatus, birthday, ismale,telno, cellno, profile_pic) 
           VALUES (?,?,?,?,?,?,?,?,?)";
           $db2->query($query,array($userid,'1','1','1','1','1','1','1','JSnopic.jpg'));
        
         $appid = $db2->insert_id();
         return $appid;
         
        $db2->close();
    }
    
       public function add_jswork($appid)
    {
        
        $db2 = $this->load->database('default', TRUE); 
        $query="INSERT into applicants_workexperience(appid, companyname, position, 
           start, end) 
           VALUES (?,?,?,?,?)";
           $db2->query($query,array($appid,'','','',''));
           
        $db2->close();
    }
    
         public function add_jsed($appid)
    {
        
        $db2 = $this->load->database('default', TRUE); 
        $query="INSERT into applicants_education(appid, schoolname, level,description, 
           startyear, endyear) 
           VALUES (?,?,?,?,?,?)";
           $db2->query($query,array($appid,'','','','',''));
           
        $db2->close();
    }
    
           public function add_jsadd($appid)
    {
        
        $db2 = $this->load->database('default', TRUE); 
        $query="INSERT into address(appid, streetno, brgy,district, 
           cityprov,zipcode, regionid) 
           VALUES (?,?,?,?,?,?,?)";
           $db2->query($query,array($appid,'','','','','',''));
           
        $db2->close();
    }
    
     public function add_edetails($userid)
    {
        
        $db2 = $this->load->database('default', TRUE);
        
        $query="INSERT into employer_profile(userID,companyName,position,companyBG,companyIndustry,companyExistence,
            companyEmail,companyContact,companyContactPerson,license,companypic,verified,companyLocations) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $db2->query($query,array($userid,'1','1','1','1','2013','1','1','1','1','nopic.jpg','0',''));
        $db2->close();
        
    }
    
        public function update_jsdetails($userid,$fn,$ln,$bday,$gender,$tn,$cn,$civ){
     
        $db2 = $this->load->database('default', TRUE);
        $db2->query("UPDATE applicants SET firstname = '$fn' WHERE userID = $userid");
        $db2->query("UPDATE applicants SET lastname = '$ln' WHERE userID = $userid");
        $db2->query("UPDATE applicants SET birthday = '$bday' WHERE userID = $userid");
        $db2->query("UPDATE applicants SET ismale = '$gender' WHERE userID = $userid");
        $db2->query("UPDATE applicants SET telno = '$tn' WHERE userID = $userid");
        $db2->query("UPDATE applicants SET cellno = '$cn' WHERE userID = $userid");
        $db2->query("UPDATE applicants SET civilstatus = '$civ' WHERE userID = $userid");

                  
           $db2->close();
    }
    
        public function update_jsed($appid,$schoolname,$level,$description,$estart,$eend){
     
        $db2 = $this->load->database('default', TRUE);
        $db2->query("UPDATE applicants_education SET schoolname = '$schoolname' WHERE appid = $appid");
        $db2->query("UPDATE applicants_education SET level = '$level' WHERE  appid= $appid");
        $db2->query("UPDATE applicants_education SET description = '$description' WHERE  appid = $appid");
        $db2->query("UPDATE applicants_education SET startyear = '$estart' WHERE  appid = $appid");
        $db2->query("UPDATE applicants_education SET endyear = '$eend' WHERE  appid = $appid");
        $db2->close();     
    }
        public function update_jsadd($appid,$streetno,$brgy,$district,$cityprov,$zipcode,$regionid){
     
        $db2 = $this->load->database('default', TRUE);
        $db2->query("UPDATE address SET streetno = '$streetno' WHERE appid = $appid");
        $db2->query("UPDATE address SET brgy = '$brgy' WHERE  appid= $appid");
        $db2->query("UPDATE address SET district = '$district' WHERE  appid = $appid");
        $db2->query("UPDATE address SET cityprov = '$cityprov' WHERE  appid = $appid");
        $db2->query("UPDATE address SET zipcode = '$zipcode' WHERE  appid = $appid");
         $db2->query("UPDATE address SET regionid = '$regionid' WHERE  appid = $appid");
        $db2->close();     
    }
    
        public function update_jswork($appid,$companyname,$position,$start,$end){
     
        $db2 = $this->load->database('default', TRUE);
        $db2->query("UPDATE applicants_workexperience SET companyname = '$companyname' WHERE appid = $appid");
        $db2->query("UPDATE applicants_workexperience SET position = '$position' WHERE  appid= $appid");
        $db2->query("UPDATE applicants_workexperience SET start = '$start' WHERE  appid = $appid");
        $db2->query("UPDATE applicants_workexperience SET end = '$end' WHERE  appid = $appid");
        $db2->close();     
    }
    
   public function update_edetails($userid,$in,$cname,$yr,$cb,$lin,$cp,$pos,$ce,$cn,$br)
   {
        $db2 = $this->load->database('default', TRUE);
        $db2->query("UPDATE employer_profile SET companyIndustry = '$in' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET companyName = '$cname' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET companyExistence = '$yr' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET companyBG = '$cb' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET license = '$lin' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET companyContactPerson = '$cp' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET position = '$pos' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET companyEmail = '$ce' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET companyContact = '$cn' WHERE userid = $userid");
        $db2->query("UPDATE employer_profile SET  companyLocations = '$br' WHERE userid = $userid");
      //  $db2->query("UPDATE employer_profile SET companypic = '$employerpic' WHERE userid = $userid");
     
   
        
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
    
      public function get_jsappid($userid){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT appid from applicants WHERE userid = '$userid'");
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
     $query = $db1->query("SELECT ep.companyName, e.createdby, e.eventno,e.eventpic, e.eventtitle, venue,  COUNT(*) AS participantscount,
        r.region ,c.city,hosts,sponsors,purpose,
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