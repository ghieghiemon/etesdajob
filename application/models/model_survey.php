
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_survey extends CI_Model {
    
    public function __construct()
    {		
		parent::__construct();
		
    }
        
    public function getAllSectors(){
        $db = $this->load->database('default', TRUE);
        
        $query = $db->select('sectorID,sectorName')
                 ->get('sectors')
                 ->result_array();
        
         $form_options = array();
         $form_options[0] = 'Select Industry/Sector';
            foreach ($query as $row)
            {
                 $form_options[$row['sectorID']] = $row['sectorName'];
            }
        
        return $form_options;

    }
    
    public function getCourses($sectorid){
         $db = $this->load->database('default', TRUE);
         
         $query = $db->select('courseid,coursename')
                 ->where('sectorid',$sectorid)
                 ->get('courses')
                 ->result_array();
         
         return $query;
                 
         
    }
    
    public function getQCount($courseid){
        $db = $this->load->database('local', TRUE);
        $count = 0;
        $checker = $db->select('testbankID')
                ->where('courseID',$courseid)
                ->get('survey_testbank')
                ->num_rows();
        
        if($checker == 0){
            // It means test for the course isn't created yet, trigger add to table
            $count = -1;
            
        }else{
            
            $testbankID = $db->select('testbankID')
                ->where('courseID',$courseid)
                ->get('survey_testbank')
                ->row();
            
            $count = $db->select('itemID')
                 ->where('testbankID',$testbankID->testbankID)
                 ->get('survey_itembank')
                 ->num_rows();
        }
         
        
         
        return $count;
    }
    
    public function addSurvey($courseid){
        $db = $this->load->database('local', TRUE);
        
        $data = array(
           'courseID' => $courseid
           
        );

        $db->insert('survey_testbank', $data); 
    }
        
        
}
?>