<?php

class Adminsurvey extends CI_Controller {
    
    
    public function __construct()
    {		
            
       
        
	parent::__construct();
         $this->load->model('model_survey');
		
    }
    
    public function index(){
        $this->indexSurvey();
    }
    
    public function indexSurvey(){

      
        $sectors = $this->model_survey->getAllSectors();
        
        
        
        $this->load->view('tesda/header');
        $this->load->view('survey/TSurvey',array('sectors' => $sectors));
        $this->load->view('footer2');
    }
    
    public function courseSurvey($id){

        $this->load->view('tesda/header');
        $this->load->view('survey/TSurveyQ',array('courseid' => $id));
        $this->load->view('footer2');
    }
    
    public function showCourses(){
        $sectorid = $this->input->get('id');
        
        $tableEntries = $this->model_survey->getCourses($sectorid);
       
        
        foreach($tableEntries as $key=>$row){
            
            $row = array('courseid' => $row['courseid'],'coursename' =>$row['coursename'],'count'=>$this->model_survey->getQCount($row['courseid']));
            //$row['count'] = $this->model_survey->getQCount($row['courseid']);
            $tableEntries[$key] = $row;
        }
         print_r($tableEntries);
        
       $this->load->view('survey/courseTableRows',array('entries' =>$tableEntries));
    }
    
    public function addSurvey($courseid){
        
        $this->model_survey->addSurvey($courseid);
        
        redirect(site_url('adminsurvey/courseSurvey/'.$courseid));
    }
    
    public function addQuestion($courseid){
        $question = $this->input->post('question');
        $type = $this->input->post('surveyType');
        print_r($type);
        $testbankID =  $this->model_survey->getTestbankID($courseid);
         $this->model_survey->addQuestion($testbankID,$question,$type);
         
         redirect(site_url('adminsurvey/courseSurvey/'.$courseid));
    }

    
}