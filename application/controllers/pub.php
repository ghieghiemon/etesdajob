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
   
   public function search_industries($sectorid = "")
   {
		
		if($sectorid == ""):
		
			echo "sectorid doesn't exist";
			return;
		
		endif;
   
		$this->load->model('model_pub');
		$data['industries'] = $this->model_pub->get_industryVacancies();
		$this->load->view("public/header");
		$this->load->view("public/PIndustryResult",$data);
		$this->load->view("footer");
   }
   
   public function print_industries(){
   
		$this->load->model('model_pub');
		print_r($this->model_pub->get_industryVacancies());
		
   }
   
}
?>
