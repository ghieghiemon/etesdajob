<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Macandcheese extends CI_Controller {
    
	function __construct() 
	{
		parent::__construct();
	}
        
        function index(){
            
            $this->load->model("model_leagues");
            $topicno = 1;
            foreach($this->model_leagues->get_topics() as $topic):
                
                echo $topicno . '. <a href="'. base_url('macandcheese/view_topic/' . $topic->discussionno) . '">' . $topic->discussion . '</a>';
                echo '<br>';
                $topicno++;
                
            endforeach;

        }
        
        function view_topic($id = -1, $page = -1){
            
            if(isset($_GET['id']) && isset($_GET['page'])):
                
                $this->load->model('model_pub');
                $data['discussion'] = $this->model_pub->get_discDetails($_GET['id']);
                $this->load->model("model_leagues");
                $items = $this->model_leagues->paginate($this->model_leagues->get_topics($_GET['id']));
                $data['display'] = $items[$_GET['page']];
                $data['pages'] = count($items);
                $data['current_page'] = $_GET['page'];
                $data['id'] = $_GET['id'];
                
                $this->load->view("public/header");
                $this->load->view('public/PLeagueDisc', $data);
                return;
                
            endif;
            
            if($page < 0):
                
                $this->load->model("model_leagues");
                $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
                $pages = count($items);
                if($pages == 0):
                    echo 'no posts available <a href="'.base_url('macandcheese').'">go back to topic list</a>';
                    return;
                endif;
                $this->view_topic($id, $pages);
            
            endif;
            
            if($page > 0):
                $this->load->model('model_pub');
                $this->load->model("model_leagues");
                $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
                $data['discussion'] = $this->model_pub->get_discDetails($id);
                $data['display'] = $items[$page];
                $data['pages'] = count($items);
                $data['current_page'] = $page;
                $data['id'] = $id;
                // $this->load->view('kitkat', $data);
                $this->load->view("public/header");
                $this->load->view('public/PLeagueDisc', $data);
            endif;

        }

}

/* End of file ilovemacandcheese.php */
/* Location: ./application/controllers/ilovemacandcheese.php */