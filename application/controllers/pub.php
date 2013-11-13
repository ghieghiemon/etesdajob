<?php

class Pub extends CI_Controller {
   public function industries()
   {
       $this->load->model('model_pub');
        
       $data['industries'] = $this->model_pub->get_industryVacancies();
       
       $this->load->view("public/header");
       $this->load->view("public/PIndustries",$data);
       $this->load->view("footer");
   }
   
   public function search_industries($sectorid)
   {	
        $this->load->model('model_pub');
        
        $data['industries'] = $this->model_pub->get_industryVacancies();
        $data['vacancies'] = $this->model_pub->get_perIndustryVacancies($sectorid);
        $data['sectorName'] = $this->model_pub->get_industryName($sectorid);
        
        
        $this->load->view("public/header");
        $this->load->view("public/PIndustryResult",$data);
        $this->load->view("footer2");
   }
    public function search_regions($region)
   {	
        $this->load->model('model_pub');
        
        $data['industries'] = $this->model_pub->get_industryVacancies();
        $data['vacancies'] = $this->model_pub->get_perRegionVacancies($region);
      //  $data['sectorName'] = $this->model_pub->get_industryName($sectorid);
    
        $this->load->view("public/header");
        $this->load->view("public/PJobMarketRegion",$data);
        $this->load->view("footer2");
   }
   
   public function pub_jobmarketpage()
    {
        $this->load->model('model_main');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $this->load->view('public/header');
        $this->load->view('public/PJobMarket');
         $this->load->view("footer");
    }
     public function pub_signup()
    {
        $this->load->model('model_main');
        $this->load->view('public/header');
        $this->load->view('register/Sup');
        $this->load->view("footer");
    }
    
        public function pub_searchjob()
    {
        $this->load->model('model_main');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $data['search'] = $this->search_job();
   
        
        $this->load->view('public/header');
        $this->load->view('public/PJobMarket',$data);
         $this->load->view("footer");
    }
    
        public function pub_alljob()
    {
        $this->load->model('model_main');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $data['search'] = $this->all_job();
   
        $this->load->view('public/header');
        $this->load->view('public/PJobMarket',$data);
         $this->load->view("footer");
    }
    
    public function search_job()
    {
        $this->load->model('model_main');
        $this->load->model('model_pub');
        $search = $this->model_pub->search_job($this->input->post('JT'),
                 ($this->input->post('industry')),($this->input->post('cityid')),
                 ($this->input->post('COMP')));
        return $search;        
   }
   
   public function all_job()
   {
        $this->load->model('model_main');
        $this->load->model('model_pub');
        $search = $this->model_pub->all_job();
        return $search;        
   }
   
    public function pevent_details($eno)
    {
        $this->load->model('model_main');
        $this->load->model('model_pub');
        $data['details'] = $this->model_main->get_eventdetails($eno);    
        $this->load->view('public/header');
        $this->load->view('public/PEventDetails', $data);
    }

    public function employer_profilepage($id)
   {
        $this->load->model('model_pub');
        
        $data['profile'] = $this->model_pub->get_employerProfile($id);
        $data['postedvacancies'] = $this->model_pub->get_postedVacancies($id);
        $data['events'] = $this->model_pub->get_postedEvents($id);
        $data['leagues'] = $this->model_pub->get_createdLeagues($id);
                
        $this->load->view("public/header");
        $this->load->view("public/PEmployerProfile",$data);
        $this->load->view("footer");
   }
   
   public function pub_allevents()
   {
        $this->load->model('model_main');
        $data['event'] = $this->model_main->all_events();
        $this->load->view("public/header");
        $this->load->view("public/PEventsAll",$data);
        $this->load->view("footer");
   }
   
   public function leaguepage()
   {
       $this->load->model('model_pub');
       
       $data['leagues'] = $this->model_pub->get_leagues(); 
       
       $this->load->view("public/header");
       $this->load->view("public/PLeagues",$data);
       $this->load->view("footer");
   }
   
   public function leagueviewpage($id)
   {
       $this->load->model('model_pub');
       
       $data['details'] = $this->model_pub->get_leagueDetails($id); 
       $data['discs'] = $this->model_pub->get_leagueDiscussions($id); 
       
       $this->load->view("public/header");
       $this->load->view("public/PLeagueView",$data);
       $this->load->view("footer");
   }
//   function index(){
//            
//            $this->load->model("model_leagues");
//            
//            $topicno = 1;
//            foreach($this->model_leagues->get_topics() as $topic):
//                
//                echo $topicno . '. <a href="'. base_url('macandcheese/view_topic/' . $topic->discussionno) . '">' . $topic->discussion . '</a>';
//                echo '<br>';
//                $topicno++;
//                
//            endforeach;
//
//        }
        
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
   public function leaguediscpage($discno)
   {
       $this->load->model('model_pub');
       
       $data['replies'] = $this->model_pub->get_leagueReplies($discno);
       $data['discussion'] = $this->model_pub->get_discDetails($discno);
       
       $this->load->view("public/header");
       $this->load->view("public/PLeagueDisc",$data);
       $this->load->view("footer");
   }
   
   public function EJ_DISCUSSION_VIEW($DISCUSSION_NO){
       
       $this->load->model('model_pub');
       $this->load->model('leagues_model');
       $data['discussion'] = $this->model_pub->get_discDetails($DISCUSSION_NO);
       $data['recentpage'] = $this->leagues_model->get_total_page($DISCUSSION_NO);
       $data['discno'] = $DISCUSSION_NO;
       $this->load->view("public/header", $data);
       $this->load->view("public/Discussion");
       //$this->load->view("footer");
       
   }
   
   public function EJ_GET_PAGE_DISCUSSION($DISCUSSION_NO, $PAGE){
       
       $this->load->model('leagues_model');
       echo '<table>';
       
       foreach($this->leagues_model->get_page($DISCUSSION_NO, $PAGE) as $post):
           
           echo '<tr>';
                
                echo '<td><img src="'.base_url().'assets/bootstrap/img/icons/glyphicons_245_chat.png" width="18" style="margin-left:50px;">' . $post['postedby'] . ' ' . $post['timestamp'] . '</td>';
       
           echo '</tr>';
           
           echo '<tr>
           
           <td width="1200px">
                                        <p style="margin-left:75px">'
                                           . $post['reply'] .'
                                             <div class="pull-right">
                                                <font class="NumLikes">'
                                                	. $post['likes'] . 'likes 
                                                </font>&nbsp;
                                                <a href="#" class="btn btn-mini"><img src="'.base_url().'assets/bootstrap/img/icons/glyphicons_343_thumbs_up.png" width="12">&nbsp;Like</a>
                                            </div>
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr class="hrLeagTab">
                                        </td>
                                    </tr>';

       endforeach;
       
       echo '</table>';

       
   }
    
}
?>
