<?php

class Survey extends CI_Controller {
    
    
    public function __construct()
    {		
	parent::__construct();
         $this->load->model('model_survey');
         $this->load->library('form_validation');
		
    }
    
    public function answerSurvey($courseid){
       
        $questions = $this->model_survey->getQuestions($courseid);
        $modules = $this->model_survey->getModules($courseid);
        
        $ctr = 0;
        foreach($modules as $m){
            //print_r($section);
          
                //echo $i;
            $ctr1 = $ctr+1;
            $this->form_validation->set_rules('a'.$ctr, 'Question '.$ctr1, 'required');
            
            $ctr++;
        }
        
        foreach($questions as $q){
            $ctr1 = $ctr+1;
            if($q['type']=='rating'){
                $this->form_validation->set_rules('a'.$ctr, 'Question '.$ctr1, 'required');
                $ctr++;
            }
            
        }
        
        foreach($questions as $q){
            $ctr1 = $ctr+1;
            if($q['type']=='open'){
                $this->form_validation->set_rules('a'.$ctr, 'Question '.$ctr1, 'required');
                $ctr++;
            }
            
        }
        
        
        $this->form_validation->set_message('required', 'You forgot to answer %s');
        
        if($this->form_validation->run()){
          
            $ctra = 0;
            $postModules = array();
            $postAnsRate = array();
            $postAnsOpen = array();
            
            $arraycount= count($modules);
            $ratingcount = 0;
            $opencount = 0;
            
            foreach($_POST as $key=>$p){
                echo $ctra;
                if($ctra < $arraycount){
                    
                    $postModules[] = $p;
                    unset($_POST[$key]);
                    $ctra++;
                }
            }
            
            foreach($questions as $q){
                if($q['type']== 'rating'){
                    $ratingcount++;
                }else{
                    $opencount++;
                }
            }
            
            $ctrb = 0;
            foreach($_POST as $key=>$p){
                
                if($ctrb < $ratingcount){
                    
                    $postAnsRate[] = $p;
                    unset($_POST[$key]);
                    $ctrb++;
                }
            }
            
             $ctrc = 0;
            foreach($_POST as $key=>$p){
                
                if($ctrc < $opencount){
                    
                    $postAnsOpen[] = $p;
                    unset($_POST[$key]);
                    $ctrc++;
                }
            }
            
            $ctrd = 0;
            foreach($modules as $m){
                $this->model_survey->addModuleRating($m['moduleid'],$postModules[$ctrd]);
                $ctrd++;
            }
            
            $ctre = 0;
            $ctrf = 0;
            foreach($questions as $q){
                if($q['type']=='rating'){
                   $this->model_survey->AddItemRating($q['itemID'],$postAnsRate[$ctre],''); 
                    $ctre++;
                }else{
                    $this->model_survey->addItemRating($q['itemID'],'',$postAnsOpen[$ctrf]);
                    $ctrf++;
                }
            }
            
           
        }
        
       
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $data['name'] = $this->model_jobseeker->get_jsname();
        $data['pic'] = $this->model_jobseeker->get_jspic();
        $this->load->view('jobseeker/header', $data);
        $this->load->view('survey/JSSurvey',array('questions' => $questions,'modules'=>$modules));
        $this->load->view('footer2');
        
    }
}