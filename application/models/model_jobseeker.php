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
    public function get_jspic(){
        $db2 = $this->load->database('default', TRUE);
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $query = $db2->query("SELECT profile_pic from applicants WHERE appid = $id");
        foreach ($query->result() as $row)
        {
         return $row->profile_pic;
        }
        $db2->close();
    } 
    public function get_notifications($id)
    {
        $db1 = $this->load->database('local', TRUE);
            $sql = $db1->query("SELECT * from notifications where userid = $id ORDER BY date DESC");
            return $sql->result_array();
        $db1->close();
    }
    public function seen_notif($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db1->query("UPDATE notifications
                                    SET seen = 1
                                    WHERE jobno = $jobno");
        $db1->close();
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
       $query = $db1->query("SELECT distinct appid,companyid,agestart,ageend, i.sectorName,sex,r.region, c.city, message,  j.invitationno,v.jobno, v.vacanciesleft, v.jobtitle, v.description, e.companyName, DATE_FORMAT(dateposted, '%m/%d/%Y') 
                                as dateposted, DATE_FORMAT(expirationdate, '%m/%d/%Y') as expirationdate
                                FROM etesda.job_invitation j JOIN etesda.job_vacancies v ON j.jobno = v.jobno
                                JOIN tesda_centraldb.employer_profile e ON e.userID = v.companyID
                                JOIN tesda_centraldb.sectors i ON i.sectorID = v.sectorid
                                JOIN etesda.reference_city c ON c.cityid = v.city
				JOIN etesda.reference_region r ON r.regionid = v.region
                                 join etesda.job_certifications jc on jc.jobno = v.jobno 
                                join etesda.job_competencies jco on jco.jobno = v.jobno 
                                WHERE j.appid = $userid AND j.applied = 0 AND expirationdate >= curdate() 
               ORDER BY dateposted DESC");
        return $query->result_array();
       $db1->close();
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
    
        public function get_companyNum($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT companyContact FROM employer_profile WHERE userid = $id");
        foreach ($query->result() as $row)
        {
            return $row->companyContact;
        }
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
//    public function get_jobdetails($jobno)
//    {
//       $db1 = $this->load->database('local', TRUE);
//       $query = $db1->query("SELECT *, r.region, c.city, companyName  from job_vacancies j
//                            JOIN etesda.reference_city c ON c.cityid = j.city
//                            JOIN etesda.reference_region r ON r.regionid = j.region
//                            JOIN tesda_centraldb.employer_profile e ON e.userID = j.companyID
//                            where jobno = $jobno");
//       return $query->result_array();
//       $db1->close();
//    }
    
       public function get_jobdetails($jobno)
    {
       $db1 = $this->load->database('local', TRUE);
       $db2 = $this->load->database('default', TRUE);
       $query = $db1->query("SELECT *,DATE_FORMAT(dateposted, '%M %d %Y') as dateposted from etesda.job_vacancies j join tesda_centraldb.employer_profile e
                            on e.userID = j.companyID
                            JOIN etesda.reference_region r ON r.regionid = j.region
                            JOIN etesda.reference_city c ON c.cityid = j.city
                            where j.jobno = $jobno");
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
    public function get_jsdetails($id){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * FROM applicants a
                            JOIN address d ON d.appid = a.appid
                             WHERE a.appid = $id  ");
                          
        return $query->result_array();
        $db2->close();
    }
    public function get_educ($id){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * from applicants_education
                            WHERE appid = '$id'");
        return $query->result_array();
        $db2->close();
    }
    public function get_work($id){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT * from applicants_workexperience
                            WHERE appid = '$id'");
        return $query->result_array();
        $db2->close();
    }
    public function get_appdetails($jobno,$appid){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *, DATE_FORMAT(requirementdate, '%b. %d, %Y') as requirementdate, 
                              DATE_FORMAT(requirementtime, '%h:%i %p') as requirementtime FROM applications
                             WHERE jobno = $jobno and appid = $appid  ");
                          
        return $query->result_array();
        $db1->close();
    }
    public function get_myapplications($userid){
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT *,DATE_FORMAT(datereceived, '%b. %d, %Y') as datereceived,a.status, 
                                DATE_FORMAT(a.requirementdate, '%b. %d, %Y') as requirementdate,
                                DATE_FORMAT(a.requirementtime, '%h:%i %p') as requirementtime
                                from etesda.applications a
                                JOIN etesda.job_vacancies v ON v.jobno = a.jobno
                                JOIN tesda_centraldb.employer_profile e ON e.userID = v.companyID
                                JOIN etesda.reference_city c ON c.cityid = v.city
				JOIN etesda.reference_region r ON r.regionid = v.region
                                WHERE a.appid = $userid 
                                AND v.expirationdate >= curdate()    
                                GROUP BY v.jobno

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
        $query = $db1->query("SELECT *, c.city, r.region, e.companyName FROM etesda.job_vacancies j 
                            JOIN tesda_centraldb.employer_profile e ON e.userID = j.companyID
                            JOIN etesda.reference_region r ON r.regionid = j.region
                            JOIN etesda.reference_city c ON c.cityid = j.city
                            WHERE j.status = 1 AND j.expirationdate >= curdate()
                            GROUP BY j.jobno ORDER BY j.dateposted DESC 
                            ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    function age_from_dob($dob) {
        return floor((time() - strtotime($dob)) / 31556926);
    }
    public function get_qualifiedjobs($dob,$sex)
    {
        if ($sex==1)
                $sex='Male';
        else 
            $sex='Female';
        $age = $this->age_from_dob($dob);

        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *, r.region, ci.city 
            from job_vacancies j 
            join job_certifications c on j.jobno = c.jobno 
            JOIN etesda.reference_region r ON r.regionid = j.region
            JOIN etesda.reference_city ci ON ci.cityid = j.city
                                    where (j.sex = '$sex' or j.sex = 'Both') 
                                    AND ($age BETWEEN j.agestart AND j.ageend) 
                                    AND j.expirationdate >= curdate()    
                                    GROUP BY j.jobno");
        return $query->result_array();
        $db1->close();
    }
    public function get_jobcert($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * FROM etesda.job_certifications j
                             where j.jobno = $jobno 
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
    public function get_jobcomp($jobno)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * FROM etesda.job_competencies j
                             where j.jobno = $jobno 
                            ");
        return $query->num_rows();
        $db1->close();
    }
    public function get_matchedComp($jobno,$id)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT * from etesda.job_competencies jc
                                JOIN etesda.job_vacancies v ON v.jobno = jc.jobno
                                JOIN tesda_centraldb.applicants_competency ac ON ac.compid = jc.ncoid
                                WHERE ac.appid = $id AND jc.jobno = $jobno
                                ORDER BY v.dateposted DESC
                            ");
        $result = $query->num_rows();
        return $result;
        
        $db1->close();
        $db2->close();
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
                                AND v.city= $cityid AND v.status = 1
                                AND expirationdate >= curdate() 
                                ORDER BY dateposted DESC");
        return $query->result_array();
        

        $db1->close();
    }
    
    public function js_briefcase($id)
    {
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT  v.jobtitle, a.jobno, a.status,  p.companyName,a.location,
                            DATE_FORMAT(a.requirementdate, '%M %d %Y') as requirementdate,
                            DATE_FORMAT(a.requirementtime, '%h:%i %p') as requirementtime
                            FROM etesda.applications a
                            JOIN etesda.job_vacancies v ON a.jobno = v.jobno
                            JOIN tesda_centraldb.employer_profile p ON p.userID = v.companyID
                            where a.appid =$id
                            AND (a.status ='Exam' or a.status ='Interview' )
                            AND requirementdate >= curdate() ORDER BY requirementdate ASC
                            ");
        return $query->result_array();


        $db1->close();
  }
  
   public function all_events(){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("  
        SELECT events.eventno,eventpic, eventtitle, venue,  COUNT(*) AS participantscount, r.region ,c.city,sponsors,purpose,
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
      public function get_allevents()
    {
        $db1 = $this->load->database('local', TRUE);
      
        $query = $db1->query("SELECT *,COUNT(*) AS participantscount, e.eventno,eventpic, e.eventtitle, venue, r.region ,c.city, 
        DATE_FORMAT(startdate, '%M %d, %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime
                                FROM events e 
				JOIN event_venue ev on ev.eventno = e.eventno  
				JOIN event_participants ep on ep.eventno = e.eventno       
                                JOIN reference_region r ON r.regionid = ev.region  
                                JOIN reference_city c ON c.cityid = ev.city        
                                where startdate >= curdate()
                                GROUP BY eventtitle,e.eventno  HAVING COUNT(*)>=0
                                ORDER BY startdate DESC");
        return $query->result_array();
        $db1->close();
    }
    
       public function get_myevents($appid)
    {
        $db1 = $this->load->database('local', TRUE);
    
        $query = $db1->query("SELECT *,COUNT(*) AS participantscount,  e.eventno,eventpic, e.eventtitle, venue, r.region ,c.city, 
        DATE_FORMAT(startdate, '%M %d, %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime
                                FROM event_participants ep 
        JOIN events e on ep.eventno = e.eventno  
        JOIN event_venue ev on ev.eventno = e.eventno       
        JOIN reference_region r ON r.regionid = ev.region  
        JOIN reference_city c ON c.cityid = ev.city        
        where startdate >= curdate() AND ep.userid = '$appid'
        GROUP BY eventtitle,e.eventno  HAVING COUNT(*)>=0
                                ORDER BY startdate DESC ");
        return $query->result_array();
        $db1->close();
    }
       public function get_invevents($appid)
    {
        $db1 = $this->load->database('local', TRUE);
    
        $query = $db1->query("SELECT *,COUNT(*) AS participantscount,  e.eventno,eventpic, e.eventtitle, venue, r.region ,c.city, 
        DATE_FORMAT(startdate, '%M %d, %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime
        FROM event_invitation i 
        JOIN events e on e.eventno = i.eventno 
        JOIN event_participants ep on ep.eventno = e.eventno 
        JOIN event_venue ev on ev.eventno = e.eventno       
        JOIN reference_region r ON r.regionid = ev.region  
        JOIN reference_city c ON c.cityid = ev.city        
        where startdate >= curdate() AND i.userid = '$appid' and accepted= 0 
        GROUP BY eventtitle,e.eventno  HAVING COUNT(*)>=0
                                ORDER BY startdate DESC ");
        return $query->result_array();
        $db1->close();
    }
    
     public function attend_event($eno,$id){
        $db1 = $this->load->database('local', TRUE);
        $query = "INSERT INTO event_participants(eventno,userid) VALUES(?,?)";
        $db1->query($query,array($eno,$id));
        $db1->close();
    }
    
       public function accept_invite($invno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("UPDATE event_invitation
                                    SET accepted = 1
                                    WHERE invno = $invno");
        $db1->close();
    }
       public function decline_invite($invno)
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("UPDATE event_invitation
                                    SET accepted = 2
                                    WHERE invno = $invno");
        $db1->close();
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
    
    
    public function get_myleagues($appid)
    {//JOIN etesda.league_members m ON l.leagueno = m.leagueno 
        $db1 = $this->load->database('local', TRUE);
        $db2 = $this->load->database('default', TRUE);
        $query = $db1->query("SELECT s.sectorName, v.*, DATE_FORMAT(v.datecreated , '%M %Y') as since 
                                FROM etesda.league_members l   
                                JOIN etesda.league v on l.leagueno = v.leagueno 
                                JOIN tesda_centraldb.sectors s on s.sectorID = v.leagueindustry
                                WHERE l.userid = $appid
                                ORDER BY v.leaguename ASC ");
        return $query->result_array();
        $db1->close();
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
    public function get_userType($id)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT usertype from users WHERE userid = '$id'");
        foreach ($query->result() as $row)
        {
         return $row->usertype;}
        $db2->close();
    }
    public function get_jsName2($id){
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT firstname, middlename, lastname from applicants WHERE userid = $id");
        return $query->result_array();
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
    
          public function get_eventdetails($eno){
        $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT ep.companyName, e.createdby, e.eventno,e.eventpic, e.eventtitle, venue,  COUNT(*) AS participantscount,
        r.region ,c.city,sponsors,purpose,
        DATE_FORMAT(startdate, '%M %d %Y') as startdate, 
        DATE_FORMAT(starttime, '%h:%i %p') as starttime
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
     public function check_if_invite($appid, $jobno)
    {
        $db1 = $this->load->database('local', TRUE);
       $query = $db1->query("SELECT * 
             FROM job_invitation 
             WHERE appid = $appid AND jobno = $jobno");
        if ($query->num_rows()>0)
            return true;
        else return false;
       $db1->close();
    }
     public function get_invno($appid,$jobno){
        $db1 = $this->load->database('local', TRUE);
        
        $query = $db1->query("SELECT invitationno FROM job_invitation 
             WHERE appid = $appid AND jobno = $jobno");
        foreach ($query->result() as $row)
        {
         return $row->invitationno;
        }
        $db1->close();
    } 
}?>

