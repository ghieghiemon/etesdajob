
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_survey extends CI_Model {
    
    public function __construct()
    {		
		parent::__construct();
		$this->load->helper('date');
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
    
    public function getCourseDetails($courseid){
        $db = $this->load->database('default', TRUE);
         
         $query = $db->select('courses.coursename,sectors.sectorName')
                 ->where('courses.courseid',$courseid)
                 ->join('sectors','sectors.sectorID = courses.sectorID')
                 ->get('courses')
                 ->row();
         
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
    
    public function getTestbankID($courseid){
          $db = $this->load->database('local', TRUE);
            $testbankID = $db->select('testbankID')
                ->where('courseID',$courseid)
                ->get('survey_testbank')
                ->row();
            
            return $testbankID->testbankID;
    }
    
    public function addQuestion($testbankID,$question,$type){
        $db = $this->load->database('local', TRUE);
        
        $data = array(
           'testbankID' => $testbankID,
            'question' => $question,
            'type' => $type
           
        );

        $db->insert('survey_itembank', $data); 
    }
    
    public function getQuestions($courseid){
        $db = $this->load->database('local', TRUE);
        $testbankid = $this->getTestbankID($courseid);
        
        $query = $db->select('*')
                ->where('testbankID',$testbankid)
                ->group_by('type')
                ->get('survey_itembank')
                
                ->result_array();
        
        return $query;
        
    }
    
    public function editQuestion($itemid,$question,$type){
        
        $db = $this->load->database('local', TRUE);
        $data = array(
               'question' => $question,
               'type' => $type
            );

        $db->where('itemID', $itemid);
        $db->update('survey_itembank', $data); 
    } 
    
    public function deleteQuestion($itemid){
        $db = $this->load->database('local', TRUE);
        $db->delete('survey_itembank', array('itemID' => $itemid)); 
    }
    
    public function getModules($courseid){
        $db = $this->load->database('default', TRUE);
       
        $query = $db->select('*')
                ->where('courseid',$courseid)
               
                ->get('modules')
                
                ->result_array();
        
        return $query;
    }
    
    public function addRatingDetail($appid){
          $db = $this->load->database('local', TRUE);
        
        $data = array(
           'date' => date('Y-m-d H:i:s', now()),
           'appID' => $appid,
           
          
        );

        $db->insert('survey_results_details', $data); 
        
        return $this->db->insert_id();
    }
    
    public function addModuleRating($moduleID,$rating,$resultID){
         $db = $this->load->database('local', TRUE);
        
        $data = array(
            'resultID' => $resultID,
           'moduleID' => $moduleID,
            'rating' => $rating,
          
        );

        $db->insert('survey_results_modules', $data); 
    }
    
     public function addItemRating($itemID,$rating,$text,$resultID){
         $db = $this->load->database('local', TRUE);
        
        $data = array(
            'resultID' =>$resultID,
           'itemID' => $itemID,
            'rating' => $rating,
            'text' => $text
          
        );

        $db->insert('survey_results_questions', $data); 
    }
    
    
        
}
?>