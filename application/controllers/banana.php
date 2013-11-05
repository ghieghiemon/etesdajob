<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banana extends CI_Controller {
    
	function __construct() 
	{
		parent::__construct();
	}
        
        function index(){
            
            $this->load->view('strawberry');
            
        }
        
        function retrieve(){
            
            $this->load->model('nutella');
            $items = $this->nutella->retrieve_new();
            $arr = array();
            
            foreach($items as $item):
                
                $arr[] = $item->msg;
                
            endforeach;
            
            echo json_encode($arr);

        }
        
        function insert(){
            
            $this->load->model('nutella');
            $this->nutella->insert($this->input->post('id'));
            
            
        }
        
}

/* End of file banana.php */
/* Location: ./application/controllers/banana.php */