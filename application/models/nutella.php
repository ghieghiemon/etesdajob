<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nutella extends CI_Model {
    
	function __construct() 
	{
		parent::__construct();
	}
        
        function retrieve_new(){
            
            $dbconn = $this->load->database('local', TRUE);
            $query = "select * from notifs where isread = 0 order by notifid asc";
            $results = $dbconn->query($query);
            
            foreach($results->result() as $item):
                
                $this->mark_as_read($item->notifid);
                
            endforeach;
            
            $dbconn->close();
            return $results->result();
            
        }
        
        function mark_as_read($id){
            
            $dbconn = $this->load->database('local', TRUE);
            $query = "update notifs set isread = 1 where notifid = ?";
            $result = $dbconn->query($query, array($id));
            $dbconn->close();
            return $result;
            
        }
        
        function insert($msg){
            
            $dbconn = $this->load->database('local', TRUE);
            $query = "insert into notifs (`msg`) values(?)";
            $result = $dbconn->query($query, array($msg));
            $dbconn->close();
            return $result;
        }
        
        
        
}

/* End of file nutella.php */
/* Location: ./application/models/nutella.php */