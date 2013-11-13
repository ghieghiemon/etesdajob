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
}
?>
