<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leagues_model extends CI_Model {
    
	function __construct() 
	{
		parent::__construct();
	}
              
        function get_total_page($postid = -1, $itemperpage = 20){
            
            $dbconn = $this->load->database('local', TRUE);
            $query = 'select count(*) as c from league_discussions where repliedno = ?';
            $result = $dbconn->query($query, array($postid));
            $dbconn->close();
            return (($result->result()[0]->c - ($result->result()[0]->c % $itemperpage)) / $itemperpage) + ($result->result()[0]->c % $itemperpage);
            
        }
        
        function get_page($postno = -1, $pageno = -1, $itemperpage = 20){
            
            $dbconn = $this->load->database('local', TRUE);
            $query = 'select * from league_discussions where repliedno = ? ';
            $query2 = 'select count(*) as c from league_discussions where repliedno = ?';
            $result = $dbconn->query($query, array($postno))->result();
            $count = $dbconn->query($query2, array($postno))->result()[0]->c;
            $pages = array();
            $final = array();
            $ctr = 0;
            
            foreach($result as $r):
                
                $pages[] = array('reply' => $r->discussion, 
                                'timestamp' => $r->datereplied, 
                                'postedby' => $r->postedby,
                                'likes' => $r->likes);
                $ctr++;
                
                if($ctr == $itemperpage):
                    
                    $ctr = 0;
                    
                    $final[] = array_reverse($pages);
                    $pages = array();
                    
                endif;
                
            endforeach;
          
            if(($count % $itemperpage) > 0):
                
                $final[] = array_reverse($pages);
                
            endif;
            
            return $final[$pageno - 1];

        }
        
}

/* End of file leagues_model.php */
/* Location: ./application/models/leagues_model.php */