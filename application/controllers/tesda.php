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
}
?>
