<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pub extends CI_Model {
    
    public function get_industryVacancies()
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT SUM(v.vacanciesleft) as totalvacancies,s.* from etesda.job_vacancies v 
                              JOIN tesda_centraldb.sectors s ON v.sectorid = s.sectorID
                              GROUP BY sectorid ORDER BY totalvacancies DESC");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
   
}


/* End of file user.php */
/* Location: ./application/models/user.php */