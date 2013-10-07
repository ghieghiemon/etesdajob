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
    
    public function search_job(){
            //printf($this->input->post('jobname'));
            $this->load->model('model_main');
            $this->load->model('model_pub');
            $search = $this->model_pub->search_job($this->input->post('JT'),
                     ($this->input->post('industry')),($this->input->post('cityid')),
                     ($this->input->post('COMP')));
            return $search;        
   }
   
       public function all_job(){
            //printf($this->input->post('jobname'));
            $this->load->model('model_main');
            $this->load->model('model_pub');
            $search = $this->model_pub->all_job();
            return $search;        
   }
   
    public function pevent_details($eno){
    $this->load->model('model_main');
    $data['details'] = $this->model_main->get_eventdetails($eno);    
    $this->load->view('public/header');
    $this->load->view('public/PEventDetails', $data);
    //$this->load->view('footer');
}
    
}
?>
