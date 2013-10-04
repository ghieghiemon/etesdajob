<?php

class Pub extends CI_Controller {
   public function industries()
   {
       $this->load->view("public/header");
       $this->load->view("public/PIndustries");
       $this->load->view("footer");
   }
}
?>
