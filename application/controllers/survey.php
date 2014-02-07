<?php

class Survey extends CI_Controller {
    
    
    public function __construct()
    {		
	parent::__construct();
         $this->load->model('model_survey');
		
    }
    
    public function answerSurvey($courseid){
       
        $questions = $this->model_survey->getQuestions($courseid);
        print_r($questions);
        
        
       
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $data['name'] = $this->model_jobseeker->get_jsname();
        $data['pic'] = $this->model_jobseeker->get_jspic();
        $this->load->view('jobseeker/header', $data);
        $this->load->view('survey/JSSurvey',array('questions' => $questions));
        $this->load->view('footer2');
        
    }
}