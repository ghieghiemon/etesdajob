<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leagues_model extends CI_Model {
    
	function __construct() 
	{
		parent::__construct();
	}
        
        function get_topics($id = -1){
            
            $dbconn = $this->load->database('local', TRUE);
            
            if($id < 0):

                $query = "select * from league_discussions where repliedno = 0";
                $results = $dbconn->query($query);
                $dbconn->close();
                return $results->result();
            
            endif;
            
            if($id > 0):
                
                $query = "select * from league_discussions where repliedno = ? order by datereplied asc";
                $results = $dbconn->query($query, array($id));
                $dbconn->close();
                return $results->result();
                
            endif;
 
        }
        
        function paginate($topic){
            
            $counter = 0;
            $page = 1;
            $paginated = array();
            $temp = array();
            
            foreach($topic as $item):
                
                $temp[] = $item;
                
                $counter++;
                
                if($counter == 20):
                    
                    $counter = 0;
                    $paginated[$page] = $temp;
                    $page++;
                    $temp = array();
                    
                endif;
                
            endforeach;
            
            return $paginated;
            
        }
        
        
}

/* End of file leagues_model.php */
/* Location: ./application/models/leagues_model.php */