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
    public function get_perIndustryVacancies($sectorid)
    {
        $db2 = $this->load->database('default', TRUE);
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT *,e.companyName FROM etesda.job_vacancies j 
                            JOIN tesda_centraldb.employer_profile e ON e.userID = j.companyID
                            WHERE sectorid = $sectorid
                            GROUP BY j.jobno ORDER BY j.dateposted DESC ");
        return $query->result_array();
        $db1->close();
        $db2->close();
    }
    public function get_industryName($sectorid)
    {
        $db2 = $this->load->database('default', TRUE);
        $query = $db2->query("SELECT sectorName FROM sectors WHERE sectorID = $sectorid");
        foreach ($query->result() as $row)
        {
            return $row->sectorName;
        }
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
    public function get_companyVacancies()
    {
        $db1 = $this->load->database('local', TRUE);
        $query = $db1->query("SELECT SUM(vacanciesleft) as totalvacancies, companyID from job_vacancies  
                                GROUP BY companyid ORDER BY totalvacancies DESC");
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
}


/* End of file user.php */
/* Location: ./application/models/user.php */