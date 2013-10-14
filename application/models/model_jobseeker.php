<?php
class Model_jobseeker extends CI_Model {
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
        $query = $db2->query("SELECT profile_pic from applicants WHERE appid = $id");
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
             WHERE j.appid = $userid AND j.applied = 0 GROUP BY j.jobno
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
        $sql = "INSERT INTO applications(appid, jobno, status,statusno, datereceived, timereceived) VALUES(?,?,'New Applicant', 1,CURDATE(), CURTIME())";
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
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%b. %d, %Y') as datereceived from etesda.applications a
                                JOIN etesda.job_vacancies v ON v.jobno = a.jobno
                                JOIN tesda_centraldb.employer_profile e ON e.userID = v.companyID
                                WHERE a.appid = $userid GROUP BY v.jobno
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
                                WHERE a.appid = $userid AND v.jobno != $jobno GROUP BY v.jobno
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
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,e.companyName FROM etesda.job_vacancies j 
                            JOIN tesda_centraldb.employer_profile e ON e.userID = j.companyID
                            GROUP BY j.jobno ORDER BY j.dateposted DESC 
                            ");
        return $query->result_array();
        $db1->close();
        $db2->close();
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
}?>
