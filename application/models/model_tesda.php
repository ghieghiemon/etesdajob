<?php
class Model_tesda extends CI_Controller{
    public function get_employertoverify(){
        
        $db2 = $this->load->database('default', TRUE);
        
         $query = $db2->query("SELECT * from employer_profile WHERE verified = 0
                            ");
        return $query->result_array();
        $db2->close();
    }
//    public function get_jstoverify(){
//        
//        $db2 = $this->load->database('default', TRUE);
//        
//         $query = $db2->query("SELECT * from applicants_certificates a
//                                JOIN certifications c ON c.certno = a.certificateid
//                                WHERE verified = 0
//                            ");
//        
//        
//        
//        return $query->result_array();
//        $db2->close();
//    }
    public function approve_everify($userid)
    {
        $db2 = $this->load->database('default', TRUE);
        
         $query = $db2->query("UPDATE employer_profile SET verified = 1 WHERE userID = $userid
                            ");
        $db2->close();
    }
    public function deny_everify($userid)
    {
        $db2 = $this->load->database('default', TRUE);
        
         $query = $db2->query("UPDATE employer_profile SET verified = 2 WHERE userID = $userid
                            ");
        $db2->close();
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
    
     public function get_createdevents($userid){
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,COUNT(*) AS participantscount,  e.eventno,eventpic, e.eventtitle, venue, r.region ,c.city, 
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
       $query = $db1->query("SELECT ep.companyName, e.createdby, e.eventno,e.eventpic, e.eventtitle, venue,  COUNT(*) AS participantscount,
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
    
    public function add_event($eventname,$startdate,$timestart,$id, $details,$industry,$sponsor)
     {
        
    $db1 = $this->load->database('local', TRUE);
    $sql = "INSERT INTO events(eventtitle,startdate,starttime,createdby,purpose,
        eventindustry,sponsors) VALUES(?,?,?,?,?,?,?)";
    $db1->query($sql,array($eventname,$startdate,$timestart,$id,$details,$industry,$sponsor));
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
    public function get_industryVacancies()
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT count(v.jobno) as totalopenings,s.* from etesda.job_vacancies v 
                              JOIN tesda_centraldb.sectors s ON v.sectorid = s.sectorID
                               where expirationdate >= curdate()
                              GROUP BY v.sectorid ORDER BY totalopenings DESC");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_industryVacanciesPerMonth($month, $year)
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = "SELECT count(v.jobno) as totalopenings,s.* from etesda.job_vacancies v 
                              JOIN tesda_centraldb.sectors s ON v.sectorid = s.sectorID
                              WHERE month(dateposted) = ? and year(dateposted) = ?
                              GROUP BY v.sectorid ORDER BY totalopenings DESC";
        return $db1->query($query, array($month, $year))->result_array();
        $db1->close();
        $db2->close();
    }
    
     public function get_companySMS()
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT companyName,companyContact FROM employer_profile WHERE sms = 0");
        return $query->result_array();
        $db2->close();
    }
    
       public function get_applicantSMS()
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT firstname,middlename,lastname,cellno FROM applicants WHERE sms = 0");
        return $query->result_array();
        $db2->close();
    }
}
?>
