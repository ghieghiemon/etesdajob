<?php

class Jobseeker extends CI_Controller {
    //jobseeker
      public function jobseeker_header()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $data['name'] = $this->model_jobseeker->get_jsname();
        $data['pic'] = $this->model_jobseeker->get_jspic();
        $this->load->view('jobseeker/header', $data);
    }
    public function jobseeker_dashboard()
    {
        $this->jobseeker_header();
       // $this->load->view('jobseeker/JSDash');
        $this->load->view('footer');
    }
    
    public function jobseeker_myappspage()
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['invites'] = $this->model_jobseeker->get_myinvites($id);
        $data['myapp'] = $this->model_jobseeker->get_myapplications($id);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyApps', $data);
        $this->load->view('footer');
    }
    public function jobseeker_myappsdetail($jobno)
    {
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $data['appdetails'] = $this->model_main->get_jobdetails($jobno);
        $data['myapps'] =$this->model_main->get_mysideapplications($id,$jobno);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyAppDetail',$data);
        $this->load->view('footer');
    }
    public function match($jobno, $id)
    {
        $this->load->model('model_main');
        $matchedCert = $this->model_main->get_matchedCert($jobno, $id);
        $requiredCert = $this->model_main->get_jobcert($jobno);
        
        if(!($matchedCert < $requiredCert))
        {
            return true;
        }
        else
        {
            return false;
        }
            
    }
    public function jobseeker_jobmarketpage()
    {
        $this->load->model('model_main');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $jobs = $this->model_main->get_alljobs();
        $dob = $this->model_main->get_dob($id);
        $sex = $this->model_main->get_sex($id);
        $qualified = $this->model_main->get_qualifiedjobs($dob, $sex);
        
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
        $this->load->view('footer');
    }  
    public function apply_jobinvite($jobno,$invno)
    {
        $this->load->model('model_main');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $this->model_main->apply_job($id,$jobno);
        $this->model_main->accept_job($invno);
        
        $this->jobseeker_myappsdetail($jobno);
    }
    public function apply_job($jobno)
    {
        $this->load->model('model_main');
        $id = $this->model_main->get_appid($this->session->userdata('email'));
        $this->model_main->apply_job($id,$jobno);
        
        $this->jobseeker_myappsdetail($jobno);
    }
    public function decline_job($invno)
    {
        $this->load->model('model_main');
        $this->model_main->decline_job($invno);
        
        $this->jobseeker_myappspage();
    }
}
?>
