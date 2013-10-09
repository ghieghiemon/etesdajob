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
        $this->load->view("footer");
   }
   
   public function pub_jobmarketpage()
    {
        $this->load->model('model_main');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $this->load->view('public/header');
        $this->load->view('public/PJobMarket');
    }
    
        public function pub_searchjob()
    {
        $this->load->model('model_main');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $data['search'] = $this->search_job();
   
        
        $this->load->view('public/header');
        $this->load->view('public/PJobMarket',$data);
    }
    
        public function pub_alljob()
    {
        $this->load->model('model_main');
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $data['search'] = $this->all_job();
   
        $this->load->view('public/header');
        $this->load->view('public/PJobMarket',$data);
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
   
   public function leagueviewpage()
   {
       $this->load->model('model_pub');
        
       
       $this->load->view("public/header");
       $this->load->view("public/PLeagueView");
       $this->load->view("footer");
   }
    
}
?>
