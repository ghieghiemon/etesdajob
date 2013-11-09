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
}
?>
