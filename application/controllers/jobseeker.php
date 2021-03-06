<?php

class Jobseeker extends CI_Controller {
    //jobseeker
    
        public function jobseeker_dashboard()
    {
        $this->jobseeker_header();
       // $this->load->view('jobseeker/JSDash');
        $this->load->view('footer');
    }
      public function jobseeker_header()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $data['name'] = $this->model_jobseeker->get_jsname();
        $data['pic'] = $this->model_jobseeker->get_jspic();
        $this->load->view('jobseeker/header', $data);
    }
    
    public function jobseeker_myappspage()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['invites'] = $this->model_jobseeker->get_myinvites($id);
        $data['myapp'] = $this->model_jobseeker->get_myapplications($id);
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $data['briefcase'] = $this->model_jobseeker->js_briefcase($id);
        $data['notif'] = $this->model_jobseeker->get_notifications($id);
        
        $data['id'] = $id;
        
        
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyApps', $data);
      //  $this->load->view('footer');
    }
    public function jobseeker_myappsdetail($jobno)
    {
         $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $appdetails = $this->model_jobseeker->get_appdetails($jobno,$id);
        $data['appdetails'] = $appdetails;
        $data['jobdetails'] = $this->model_jobseeker->get_jobdetails($jobno);
        $data['myapps'] =$this->model_jobseeker->get_mysideapplications($id,$jobno);
        $data['cert'] = $this->model_jobseeker->get_jobCerts($jobno);
        $data['comp'] = $this->model_jobseeker->get_jobComps($jobno); 
        $data['jobno'] = $jobno;
        
        $this->model_jobseeker->seen_notif($jobno,$id);
        
        foreach($appdetails as $a)
        {
            $scheduleid = $a['scheduleid'];
        }
        
        $data['schedule'] = $this->model_jobseeker->get_schedule($scheduleid);
        $data['scheduleslots'] = $this->model_jobseeker->get_scheduleSlots($scheduleid);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyAppDetail',$data);
        $this->load->view('footer');
    }
    public function add_schedule($jobno)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        
        $slotid = $this->input->post('check');
        
        $this->model_jobseeker->add_schedule($jobno,$id);
        
        $this->jobseeker_myappsdetail($jobno);
    }
    public function match($jobno, $id)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $matchedCert = $this-> model_jobseeker->get_matchedCert($jobno, $id);
        $requiredCert = $this-> model_jobseeker->get_jobcert($jobno);
        $matchedComp = $this-> model_jobseeker->get_matchedComp($jobno, $id);
        $requiredComp = $this-> model_jobseeker->get_jobcomp($jobno);
        
        //print_r($matchedCert." - ".$requiredCert);
        if($matchedCert >= $requiredCert)
        {

            if($matchedComp >= $requiredComp)
            {
                return "True";
                
            }
            else 
            {
                return false;
            }
        }
        else
        {
            return false;
        } 
    }
    
    public function jobseeker_jobmarketpage()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_pub');
        
        $data['industries'] = $this->model_pub->get_industryVacancies();
      //  $data['vacancies'] = $this->model_pub->get_perIndustryVacancies($sectorid);
        //$data['sectorName'] = $this->model_pub->get_industryName($sectorid);
        
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['myapp'] = $this->model_jobseeker->get_myapplications($id);
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $jobs = $this->model_jobseeker->get_alljobs();
        $dob = $this->model_jobseeker->get_dob($id);
        $sex = $this->model_jobseeker->get_sex($id);
        $qualified = $this->model_jobseeker->get_qualifiedjobs($dob, $sex);
        
        
        
        
        $suggested = array();
        foreach($jobs as $a)
        {
            if($this->match($a['jobno'],$id) == "True")
            {
                array_push($suggested, $a);
            }
        }
        
        foreach($qualified as $a)
        {
            $jobno[]= $a['jobno'];
        }
         
        $final = array();
        foreach ($suggested as $a)
        {
            if(in_array($a['jobno'],$jobno))
                    array_push($final, $a);
        }
        //print_r($final);
        
        $data['suggested'] = $final;
        
        $data['jobs'] = $jobs;
        $data['job'] = $this->model_jobseeker->get_alljobs();
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSJobMarket',$data);
        $this->load->view('footer2');
    }  
    
    public function jobseeker_profilepage()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_employer');
        
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        
        $data['educ'] = $this->model_jobseeker->get_educ($id);
        $data['work'] =$this->model_jobseeker->get_work($id);
        $data['jsdetails'] = $this->model_jobseeker->get_jsdetails($id);
        $userid = $this->model_employer->get_userid($id);
        $data['email'] = $this->model_employer->get_email($userid);
        $data['cert'] = $this->model_jobseeker->get_certifications2($id);
        $data['appid'] = $id;
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/oldJSProfile',$data);
        $this->load->view("footer");
    }
    public function jobseeker_editprofilepage()
    {
   
        
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_employer');
        
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        
        $data['educ'] = $this->model_jobseeker->get_educ($id);
        $data['work'] =$this->model_jobseeker->get_work($id);
        $data['jsdetails'] = $this->model_jobseeker->get_jsdetails($id);
        $userid = $this->model_employer->get_userid($id);
        $data['email'] = $this->model_employer->get_email($userid);
        $data['cert'] = $this->model_jobseeker->get_certifications($id);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSProfile',$data);
         $this->load->view("footer");
    }
    
    public function jobseeker_editprofile()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_employer');
        
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $userid = $this->model_employer->get_userid($id);
       
//              $config['upload_path'] = './employerpics/';
//		$config['allowed_types'] = 'gif|jpg|png|docx|zip';
//		$config['max_size']	= '10000000';
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
//                
//              $this->load->library('upload', $config);
//              $this->upload->do_upload();
//              $data = $this->upload->data();
//              $u = $this->upload->data();

            $fn = $this->input->post('FN');
            $mn = $this->input->post('MN');
            $ln = $this->input->post('LN');
            $bday = $this->input->post('bday');
            $gender = $this->input->post('gender');
            $cn = $this->input->post('CN');
            $civ = $this->input->post('civstatus');

            $streetno = $this->input->post('SN');
            $brgy = $this->input->post('brgy');
            $district = $this->input->post('dis');
            $cityprov = $this->input->post('cityid');
            
            $ref1name = $this->input->post('ref1name');
            $ref1contact = $this->input->post('ref1contact');
            $ref1relation = $this->input->post('ref1relation');
            
               $ref2name = $this->input->post('ref2name');
            $ref2contact = $this->input->post('ref2contact');
            $ref2relation = $this->input->post('ref2relation');
            
            
         //   $employerpic = $u['file_name'];

            $this->model_jobseeker->update_jsdetails($userid,$fn,$mn,$ln,$bday,$gender,$cn,$civ,$ref1name,$ref1contact,$ref1relation,$ref2name,$ref2contact,$ref2relation);
            $appid = $this->model_main->get_jsappid($userid);
            $this->model_jobseeker->update_jsadd($appid,$streetno,$brgy,$district,$cityprov);

            redirect(base_url()."jobseeker/jobseeker_profilepage/");

    }
    
    public function jobseeker_addwork()
    {
        
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_employer');

        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $userid = $this->model_employer->get_userid($id);

        $companyname = $this->input->post('COMP');
        $position = $this->input->post('POS');
        $start = $this->input->post('WSY1');
        $end = $this->input->post('WEY1');

        $appid = $this->model_main->get_jsappid($userid);
        $this->model_jobseeker->add_jswork($appid,$companyname,$position,$start,$end);

        redirect(base_url()."jobseeker/jobseeker_profilepage/");
        
        }

    public function jobseeker_addeduc()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_employer');

        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $userid = $this->model_employer->get_userid($id);

        $schoolname = $this->input->post('IN1');
        $level = $this->input->post('LVL1');
        $course = $this->input->post('CO1');
        $estart = $this->input->post('SY1');
        $eend = $this->input->post('EY1');

        $appid = $this->model_main->get_jsappid($userid);
        $this->model_jobseeker->add_jsed($appid,$schoolname,$level,$course,$estart,$eend);

        redirect(base_url()."jobseeker/jobseeker_profilepage/");

     
    }
    
    
    
   public function employer_profilepage($id)
   {
        $this->load->model('model_pub');
        
        $data['profile'] = $this->model_pub->get_employerProfile($id);
        $data['postedvacancies'] = $this->model_pub->get_postedVacancies($id);
        $data['events'] = $this->model_pub->get_postedEvents($id);
        $data['leagues'] = $this->model_pub->get_createdLeagues($id);
                
        $this->jobseeker_header();
        $this->load->view("jobseeker/JSEmployerProfile",$data);
        $this->load->view("footer");
   }
   
    public function apply_jobinvite($jobno,$invno)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $this->model_jobseeker->apply_job($id,$jobno);
        $this->model_jobseeker->accept_job($invno);
        
        $this->jobseeker_myappsdetail($jobno);
    }
    public function apply_job($jobno)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $this->model_jobseeker->apply_job($id,$jobno);
        
        $invites = $this->model_jobseeker->get_myinvites($id);
        
        $ifinvite = $this->model_jobseeker->check_if_invite($id,$jobno);
        if($ifinvite)
        {
            $invno = $this->model_jobseeker->get_invno($id,$jobno);
            $this->model_jobseeker->accept_job($invno);
        }
        $this->jobseeker_myappsdetail($jobno);
    }
    
    public function decline_job($invno)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->model_jobseeker->decline_job($invno);
        
        $this->jobseeker_myappspage();
    }
    
    public function js_searchjob()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['regions'] = $this->model_main->get_regions();
        $jobs = $this->model_jobseeker->get_alljobs();
        $dob = $this->model_jobseeker->get_dob($id);
        $sex = $this->model_jobseeker->get_sex($id);
        $qualified = $this->model_jobseeker->get_qualifiedjobs($dob, $sex);
        
        $data['search'] = $this->search_job();
        $data['myapps'] = $this->model_jobseeker->get_myapplications($id);
        
        
        $suggested = array();
        foreach($jobs as $a)
        {
            if($this->match($a['jobno'],$id))
            {
                array_push($suggested, $a);
            }
        }
        foreach($qualified as $a)
        {
            $jobno[]=$a['jobno'];
        }
        
        $final = array();
        foreach ($suggested as $a)
        {
            if(in_array($a['jobno'],$jobno))
                    array_push($final, $a);
        }
        
        
        $data['suggested'] = $final;
        $data['jobs'] = $jobs;
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSJobSearch',$data);
      //  $this->load->view('footer');
    }
     public function jobseeker_briefcase()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['myapp'] = $this->model_jobseeker->js_briefcase($id);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSBriefcase', $data);
        $this->load->view('footer2');
    }
    
      public function search_job()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
         $this->load->model('model_pub');
         
        $jobtitle = $this->input->post('JT');
        $industry = $this->input->post('industry');
        $city = $this->input->post('cityid');
        $company = $this->input->post('COMP');
        $search = $this->model_pub->search_job($jobtitle,$industry,$city,$company);
        return $search;        
   }
       public function jobseeker_eventspage()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_pub');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $id = $this->model_jobseeker->get_userid($appid);
        
        $data['eventall'] = $this->model_jobseeker->get_allevents();
        $data['myevents'] = $this->model_jobseeker->get_myevents($id);
        $data['invevents'] = $this->model_jobseeker->get_invevents($id);
      //$data['eventup'] = $this->model_main->all_events();
      //$data['eventinv'] = $this->model_main->all_events();
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSEvents',$data);  
        $this->load->view('footer');
   }
   
     public function js_searchevents()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $id = $this->model_jobseeker->get_userid($appid);
        $data['myevents'] = $this->model_jobseeker->get_myevents($id);
        $data['invevents'] = $this->model_jobseeker->get_invevents($id);
        $data['eventsearch'] = $this->search_events();
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSEventsSearch',$data);
        $this->load->view('footer');
    }
       public function search_industries($sectorid)
   {	
         $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_pub');
        
               
        $data['industries'] = $this->model_pub->get_industryVacancies();
        $data['vacancies'] = $this->model_pub->get_perIndustryVacancies($sectorid);
        $data['sectorName'] = $this->model_pub->get_industryName($sectorid);
        
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['myapp'] = $this->model_jobseeker->get_myapplications($id);
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $jobs = $this->model_jobseeker->get_alljobs();
        $dob = $this->model_jobseeker->get_dob($id);
        $sex = $this->model_jobseeker->get_sex($id);
        $qualified = $this->model_jobseeker->get_qualifiedjobs($dob, $sex);
        
        
        
        
        $suggested = array();
        foreach($jobs as $a)
        {
            if($this->match($a['jobno'],$id) == "True")
            {
                array_push($suggested, $a);
            }
        }
        
        foreach($qualified as $a)
        {
            $jobno[]= $a['jobno'];
        }
         
        $final = array();
        foreach ($suggested as $a)
        {
            if(in_array($a['jobno'],$jobno))
                    array_push($final, $a);
        }
        //print_r($final);
        
        $data['suggested'] = $final;
        
        $data['jobs'] = $jobs;
        $data['job'] = $this->model_jobseeker->get_alljobs();
        
    
 
        
        $this->jobseeker_header();
        $this->load->view("jobseeker/JSJobMarketIndustries",$data);
        $this->load->view("footer2");
   }
   
       public function search_events()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $search = $this->model_jobseeker->search_events($this->input->post('EN'),
                 ($this->input->post('industry')),($this->input->post('cityid')));
        return $search;        
   }
      public function event_details($eno)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_pub');
        $data['details'] = $this->model_jobseeker->get_eventdetails($eno); 
         $data['attendees'] = $this->model_jobseeker->event_attendees($eno);    
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSEventDetails', $data);
        $this->load->view('footer2');
    }
    
    public function attend_event($eno)
    {
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
        
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $id = $this->model_jobseeker->get_userid($appid);
        $this->model_jobseeker->attend_event($eno,$id);
        
        redirect(base_url()."jobseeker/event_details/".$eno);
        
    }
     
    public function attend_invite($eno,$invno)
    {
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
              
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
       $id = $this->model_jobseeker->get_userid($appid);
        $this->model_jobseeker->attend_event($eno,$id);
        $this->model_jobseeker->accept_invite($invno);
        
        redirect(base_url()."jobseeker/event_details/".$eno);
        
    }
    
    public function decline_invite($invno)
    {
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
       // $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $this->model_jobseeker->decline_invite($invno);
        redirect(base_url()."jobseeker/jobseeker_eventspage");
        
    }
   
   public function jobseeker_leaguespage()
   {
       $this->load->model('model_main');
       $this->load->model('model_jobseeker');
       
       $appid = $this->model_main->get_appid($this->session->userdata('email'));
       $id = $this->model_jobseeker->get_userid($appid);
       $data['drpindustries'] = $this->model_main->get_drpindustries();
       $data['regions'] = $this->model_main->get_regions();
       $data['myleagues'] = $this->model_jobseeker->get_myleagues($id);
       $data['all'] = $this->model_jobseeker->get_allleagues();
       $data['invleagues'] = $this->model_jobseeker->get_invleagues($id);
               
       $this->jobseeker_header();
       $this->load->view('jobseeker/JSLeagues',$data); 
          $this->load->view('footer');
   }
   public function jobseeker_leagueview($lno)
   {
       $this->load->model('model_main');
       $this->load->model('model_jobseeker');
       
       $appid = $this->model_main->get_appid($this->session->userdata('email'));
       $id = $this->model_jobseeker->get_userid($appid);
       $data['myleagues'] = $this->model_jobseeker->get_myleagues($id);
       $data['discs'] = $this->model_jobseeker->get_leagueDiscussions($lno);
       $data['leaguedetails'] = $this->model_jobseeker->get_leagueDetails($lno);
       $data['replies'] = $this->model_jobseeker->get_leagueDetails($lno);
       
       $this->jobseeker_header();
       $this->load->view('jobseeker/JSLeagView',$data); 
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

            $this->jobseeker_header();
            $this->load->view('jobseeker/JSLeagDisc', $data);
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
            
            $this->jobseeker_header();
            $this->load->view('jobseeker/JSLeagDisc', $data);
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
            
            $this->jobseeker_header();
            $this->load->view('jobseeker/JSLeagDisc', $data);
        endif;

    }
    public function postcomment($dno, $lno)
    {
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
       
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $id = $this->model_jobseeker->get_userid($appid);
        $repliedno = $dno;
        $disc = $this->input->post('comment');
        $postedby = $id;
        $leagueno = $lno;
        $likes = 0;
        $this->model_jobseeker->post_comment($repliedno, $disc, $postedby, $leagueno, $likes);
        redirect(base_url()."jobseeker/view_topic/". $repliedno);
    }
    public function posttopic($lno)
    {
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
       
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $id = $this->model_jobseeker->get_userid($appid);
        $disc = $this->input->post('topic');
        $postedby = $id;
        $this->model_jobseeker->add_topics($disc, $postedby, $lno);
        redirect(base_url()."jobseeker/jobseeker_leagueview/".$lno);
    }
    public function join_league($lno)
    {
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
        
        $appid = $this->model_main->get_appid($this->session->userdata('email'));
        $id = $this->model_jobseeker->get_userid($appid);
        $this->model_jobseeker->join_league($lno,$id);
        
        redirect(base_url()."jobseeker/jobseeker_leagueview/".$lno);
    }
    
     public function jobseeker_lcreate()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $this->load->model('model_pub');
        $id = $this->model_main->get_userid($this->session->userdata('email'));

        $config['upload_path'] = './leaguepics/';
        $config['allowed_types'] = 'gif|jpg|png|docx|zip';
        $config['max_size']	= '10000000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $u = $this->upload->data();
        $leaguepic= $u['file_name'];
          
         $lname = $this->input->post('LN');  
         $det = $this->input->post('Det');
         $industry = $this->input->post('industry'); 
        

        
        $leagueno = $this->model_jobseeker->add_league($lname,$id,$det,$industry,$leaguepic);   
        $this->model_jobseeker->join_league($leagueno,$id);
           
       redirect(base_url()."jobseeker/jobseeker_leagueview/".$leagueno);
    }
}
?>
