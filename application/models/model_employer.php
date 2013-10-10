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
}
?>
