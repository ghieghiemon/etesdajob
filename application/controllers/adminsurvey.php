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
    
    public function courseSurvey($courseid){
        
        $coursedetails = $this->model_survey->getCourseDetails($courseid);
        $questions = $this->model_survey->getQuestions($courseid);
        $modules = $this->model_survey->getModules($courseid);
        $ratings = array();
        
        foreach($modules as $m){
            $rating =  $this->model_survey->getAverageRating($m['moduleid']);
            array_push($ratings, $rating);
        }
        
        $this->load->view('tesda/header');
        $this->load->view('survey/TSurveyQ',array('courseid' => $courseid,'questions' => $questions,'coursedetails'=>$coursedetails, 'modules' =>$modules, 'ratings' => $ratings));
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
           
       $this->load->view('survey/courseTableRows',array('entries' =>$tableEntries));
    }
    
    public function addSurvey($courseid){
        
        $this->model_survey->addSurvey($courseid);
        
        redirect(site_url('adminsurvey/courseSurvey/'.$courseid));
    }
    
    public function addQuestion($courseid){
        $question = $this->input->post('question');
        $type = $this->input->post('surveyType');
       
        $testbankID =  $this->model_survey->getTestbankID($courseid);
         $this->model_survey->addQuestion($testbankID,$question,$type);
         
         redirect(site_url('adminsurvey/courseSurvey/'.$courseid));
    }
    
    public function editQuestion($courseid){
        $question = $this->input->post('questionE');
        $type = $this->input->post('surveyTypeE');
        $itemid = $this->input->post('itemIDe');
       
        $this->model_survey->editQuestion($itemid,$question,$type);
       
         redirect(site_url('adminsurvey/courseSurvey/'.$courseid));
        
    }
    
    public function deleteQuestion($courseid){
         $itemid = $this->input->post('itemidd');
         $this->model_survey->deleteQuestion($itemid);
       
         redirect(site_url('adminsurvey/courseSurvey/'.$courseid));
        
    }
    
   

    
}