<?php

class Tesda extends CI_Controller {

    public function tesda_dashboard()
    {
        $this->tesda_header();
        $this->load->view('tesda/TesdaDash');
    }
    public function tesda_header()
    {
//        $this->load->model('model_main');
//        $this->load->model('model_jobseeker');
//        $data['name'] = $this->model_jobseeker->get_jsname();
//        $data['pic'] = $this->model_jobseeker->get_jspic();
        $this->load->view('tesda/header');
    }
}
?>
