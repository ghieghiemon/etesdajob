<?php

class Tesda extends CI_Controller {

    public function tesda_dashboard()
    {
        $this->load->model('model_tesda');
        $data['employerverify'] = $this->model_tesda->get_employertoverify();
        //$data['jsverify'] = $this->model_tesda->get_jstoverify();
        $this->tesda_header();
        $this->load->view('tesda/TesdaDash',$data);
    }
    public function tesda_header()
    {
//        $this->load->model('model_main');
//        $this->load->model('model_jobseeker');
//        $data['name'] = $this->model_jobseeker->get_jsname();
//        $data['pic'] = $this->model_jobseeker->get_jspic();
        $this->load->view('tesda/header');
    }
    public function approve_everify($userid)
    {
        $this->load->model('model_tesda');
         $this->model_tesda->approve_everify($userid);
         redirect('tesda/tesda_dashboard');
    }
    public function deny_everify($userid)
    {
        $this->load->model('model_tesda');
         $this->model_tesda->deny_everify($userid);
         redirect('tesda/tesda_dashboard');
    }
    public function send_invite()
    {
            //send an email to the user

             $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'tesda.jobportal@gmail.com',
                'smtp_pass' => 'greencollar',
                'mailtype'  => 'html', 
                'charset'  => 'iso-8859-1'
            );  

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->load->library('email', array('mailtype'=>'html'));
            $this->email->from('tesda.jobportal@gmail.com','eTesda-Work');
            
            $this->email->subject('Invitation to join E-TESDA Job Portal');

            $message = $this->input->post('msg');
            $this->email->message($message);

            $email = $this->input->post('invites');
            $email = explode(",", $email);
            
            foreach($email as $a)
            {
                print_r($a);
                $this->email->to($a);
                $this->email->send();
            }
             
    }
    public function tesda_leaguespage()
   {
       $this->load->model('model_main');
       $this->load->model('model_tesda');
       
       $id = $this->model_main->get_userid($this->session->userdata('email'));
       $data['myleagues'] = $this->model_tesda->get_myleagues($id);
       $data['createdleagues'] = $this->model_tesda->get_createdleagues($id);
       $data['all'] = $this->model_tesda->get_allleagues();
        
       $this->tesda_header();
       $this->load->view('tesda/TLeagues',$data); 
   }
     public function tesda_leagueview($lno)
   {
       $this->load->model('model_main');
       $this->load->model('model_tesda');
       
       $id = $this->model_main->get_userid($this->session->userdata('email'));
       $data['myleagues'] = $this->model_tesda->get_myleagues($id);
       $data['createdleagues'] = $this->model_tesda->get_createdleagues($id);
       $data['discs'] = $this->model_tesda->get_leagueDiscussions($lno);
       $data['leaguedetails'] = $this->model_tesda->get_leagueDetails($lno);
       $data['replies'] = $this->model_tesda->get_leagueDetails($lno);
       
       $this->tesda_header();
       $this->load->view('employer/TLeagView',$data); 
   }
   public function view_topic($id = -1, $page = -1)
   {
        if(isset($_GET['id']) && isset($_GET['page'])):

            $this->load->model('model_pub');
            $data['discussion'] = $this->model_pub->get_discDetails($_GET['id']);
            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($_GET['id']));
            $data['display'] = $items[$_GET['page']];
            $data['pages'] = count($items);
            $data['current_page'] = $_GET['page'];
            $data['id'] = $_GET['id'];

            $this->tesda_header();
            $this->load->view('tesda/TLeagDisc', $data);
            return;

        endif;

        if($page < 0):

            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
            $pages = count($items);
            if($pages == 0):
//                echo 'no posts available <a href="'.base_url('macandcheese').'">go back to topic list</a>';
//                return;
                $this->load->model('model_pub');
            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
            $data['discussion'] = $this->model_pub->get_discDetails($id);
            $data['display'] = $items[$page];
            $data['pages'] = count($items);
            $data['current_page'] = $page;
            $data['id'] = $id;
            
            $this->tesda_header();
            $this->load->view('tesda/TLeagDisc', $data);
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
            
            $this->tesda_header();
            $this->load->view('tesda/TLeagDisc', $data);
        endif;

    }
    public function postcomment($dno, $lno)
    {
        $this->load->model('model_tesda');
        $this->load->model('model_main');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $repliedno = $dno;
        $disc = $this->input->post('comment');
        $postedby = $id;
        $leagueno = $lno;
        $likes = 0;
        $this->model_tesda->post_comment($repliedno, $disc, $postedby, $leagueno, $likes);
        redirect(base_url()."tesda/view_topic/". $repliedno);
    }
    public function posttopic($lno)
    {
        $this->load->model('model_tesda');
        $this->load->model('model_main');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $disc = $this->input->post('topic');
        $postedby = $id;
        
        $this->model_tesda->add_topics($disc, $postedby, $lno);
        redirect(base_url()."tesda/tesda_leagueview/".$lno);
    }
    
     public function tesda_smspage()
    {
        $this->load->model('model_tesda');
        $this->load->model('model_main');
       
        //$id = $this->model_main->get_userid($this->session->userdata('email'));

        // $this->load->view('tesda/TInvite', $data);
        $this->tesda_header();
         $this->load->view('tesda/TInvite');
         $this->load->view('footer2');
    }
    
        public function tesda_eventspage()
    {
        
         $this->load->model('model_main');
         $this->load->model('model_tesda');
         $this->load->model('model_pub');
         $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['createdevents'] = $this->model_tesda->get_createdevents($id);
        $data['all'] = $this->model_main->all_events();
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
       

         $this->tesda_header();
         $this->load->view('tesda/TEventsAll',$data);
         $this->load->view('footer2');
    }
         public function tesda_evcreated($eno)
    {
        $this->load->model('model_main');
        $this->load->model('model_tesda');
        $this->load->model('model_pub');
        $data['details'] = $this->model_tesda->get_eventdetails($eno);    
        $this->tesda_header();
        $this->load->view('tesda/TEventDetailsCreated', $data);
        $this->load->view('footer2');
    }
    
    public function tesda_evcreate()
    {
        $this->load->model('model_main');
        $this->load->model('model_tesda');
        $this->load->model('model_pub');
        $id = $this->model_main->get_userid($this->session->userdata('email'));

        $config['upload_path'] = './eventpics/';
        $config['allowed_types'] = 'gif|jpg|png|docx|zip';
        $config['max_size']	= '10000000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $u = $this->upload->data();
        $eventpic= $u['file_name'];
          
         $eventname = $this->input->post('EN');  
         $startdate = $this->input->post('date');
         $timestart = $this->input->post('time');
         $details = $this->input->post('Det');
         $industry = $this->input->post('industry'); 
        
        $eventvenue = $this->input->post('VEN');
        $region = $this->input->post('regionid');
        $city = $this->input->post('cityid');
        
        $sponsor = $this->input->post('SP');
        
        $eventno = $this->model_tesda->add_event($eventname,$startdate,$timestart,$id,$details,$industry,$sponsor,$eventpic);   
        $this->model_tesda->add_eventvenue($eventno,$eventvenue,$region,$city);
        $this->model_tesda->attend_event($id,$eventno);
           
        $this->tesda_evcreated($eventno);
    }
    public function tesda_reports()
    {
        $this->tesda_header();
        $this->load->view('tesda/TReports');
    }
    public function tesda_industries()
    {
        $this->load->model('model_tesda');
        
        $data['industries'] = $this->model_tesda->get_industryVacancies();
       
        $this->tesda_header();
        $this->load->view('tesda/TIndustriesAll',$data);
    }
    public function permonth_industries()
    {
        $this->load->model('model_tesda');
        
        $month = $this->input->post('month');
        $year = $this->input->post('year');
         
        $data['industries'] = $this->model_tesda->get_industryVacanciesPerMonth($month,$year);
        
        $this->tesda_header();
        $this->load->view('tesda/TIndustriesAllMonth',$data);
    }
    public function generate_report()
        {
            $type = $this->input->post('reporttype');
            $month = $this->input->post('month');
            $year = $this->input->post('year');
            //print_r($type);
            if( $type == 2)
            {
                //echo "IN DEMAND JOBS";
                redirect('report/in_demand_jobs/'.$month.'/'.$year);
            }else if($type  == 3)
            {
                redirect('report/in_demand_industries/'.$month.'/'.$year);
            }else if ($type == 1)
            {
                redirect('report/company_vacancies/'.$month.'/'.$year);
            }else if ($type == 4)
            {
                redirect('report/employment_industry/'.$month.'/'.$year);
            }else if ($type == 5)
            {
                redirect('report/employment_region/'.$month.'/'.$year);
            }
        }
}
?>
