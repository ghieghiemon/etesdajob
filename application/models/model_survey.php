
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
	
        
        
}
?>