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
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyApps', $data);
        $this->load->view('footer');
    }
    public function jobseeker_myappsdetail($jobno)
    {
         $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['appdetails'] = $this->model_jobseeker->get_appdetails($jobno,$id);
        $data['jobdetails'] = $this->model_jobseeker->get_jobdetails($jobno);
        $data['myapps'] =$this->model_jobseeker->get_mysideapplications($id,$jobno);
        $data['cert'] = $this->model_jobseeker->get_jobCerts($jobno);
        $data['comp'] = $this->model_jobseeker->get_jobComps($jobno); 
        
        $this->model_jobseeker->seen_notif($jobno);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyAppDetail',$data);
        $this->load->view('footer');
    }
    public function match($jobno, $id)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $matchedCert = $this-> model_jobseeker->get_matchedCert($jobno, $id);
        $requiredCert = $this-> model_jobseeker->get_jobcert($jobno);
        $matchedComp = $this-> model_jobseeker->get_matchedComp($jobno, $id);
        $requiredComp = $this-> model_jobseeker->get_jobcomp($jobno);
        
        if(!($matchedCert < $requiredCert))
        {
//              return true;
            if(!($matchedComp < $requiredComp))
            {
                return true;
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
        $this->load->view('jobseeker/JSJobMarket',$data);
      //  $this->load->view('footer');
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
    
      public function search_job()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $search = $this->model_jobseeker->search_job($this->input->post('JT'),
                 ($this->input->post('industry')),($this->input->post('cityid')),
                 ($this->input->post('COMP')));
        return $search;        
   }
       public function jobseeker_eventspage()
    {
        $this->load->model('model_main');
        
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        
        $data['eventall'] = $this->model_jobseeker->all_events();
      //  $data['eventup'] = $this->model_main->all_events();
        //$data['eventinv'] = $this->model_main->all_events();
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSEvents',$data);     
   }

}
?>
