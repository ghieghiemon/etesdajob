<?php

class Adminsurvey extends CI_Controller {
    
    public function index(){
        $this->indexSurvey();
    }
    
    public function indexSurvey(){

        
        $this->load->model('model_survey');
        
        $sectors = $this->model_survey->getAllSectors();
        
        
        
        $this->load->view('tesda/header');
        $this->load->view('survey/TSurvey',array('sectors' => $sectors));
        $this->load->view('footer2');
    }
    
    public function courseSurvey($id){

        $this->load->view('tesda/header');
        $this->load->view('survey/TSurveyQ');
        $this->load->view('footer2');
    }

    
}