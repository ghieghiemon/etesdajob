<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function index()
    {
        $this->publicpage();
    }
//public
    public function publicpage()
    {
        $this->load->view('public/Pub');
    }
//register
    public function  registerpage()
    {
    $this->load->view('public/Pheader');  
    $this->load->view('register/SUp');     
    $this->load->view('footer');
      
    }
    
    public function register_validation()
    {
            
            $this->load->library('form_validation');
            $this->load->model('model_main');
//                
            // for users table
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|callback_unique_email');
            $this->form_validation->set_rules('userpassword', 'Password', 'required|trim|md5');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|md5|callback_confirm_password');  
            
            if($this->form_validation->run())
            {
                
//                //generate a random key
               $key = md5(uniqid());
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
                $this->email->to($this->input->post('email'));
                $this->email->subject('Welcome to e-Tesda Work! Please confirm your account');
                
                $message = "<p>Thank you for signing up!</p>";
                $message .= "<p><a href = '".base_url()."main/register_user/$key'>Click here</a> to confirm account</p>";
                $this->email->message($message);
                 
               
                 $this->model_main->add_tempuser($key);
                 

                    if($this->email->send())
                    {
                       // $userid = $this->model_main->add_user($key);
                       // $this->registerJS($userid);
                      //  echo 'Check email to proceed to the registration process';
                        switch ($this->input->post('btnAction'))
                        {
                                case 'Jobseeker':
                                    $this->registerJSpage(11);
                                  // redirect('registerJSpage/11');
                                        break;
                                case 'Employer':
                                        $this->registerEpage(11);
                                        //redirect('registerEpage');
                                     break;
                                default:
                                        redirect('jobseeker');
                                        break;
                        }
                           //$this->registerJS(143);
                    } 
                    else {
                        echo "Could not send email";
                        echo $this->email->print_debugger();
                    }
              
                 
            } 
//            }
            else {
                $this->load->view('public/Pheader');
         $this->load->view('register/SUp');
         $this->load->view('footer');
            }
        
    }
        
    public function unique_email()
        {
             $this->load->model('model_main');
             if($this->model_main->unique_email($this->input->post('email')))
                {
                    return true;
                }
             else{
                 $this->form_validation->set_message('unique_email', 'Email already exists');
                 return false;
             }
        }
    public function register_user($key)
    {
        $this->load->model('model_main');

        if($this->model_main->is_key_valid($key))
        {
            $userid = $this->model_main->add_user($key);
            $this->registerJSpage($userid);

        }
        else 
        {
            echo 'invalid key';
        }
    }
    public function confirm_password()
    {
        $password = $this->input->post('userpassword');
        $cpassword = $this->input->post('cpassword');
        if(strcmp($password,$cpassword) == 0)
        {
            return true;
        }
        else 
        {
            $this->form_validation->set_message('confirm_password', 'Passwords does not match');
            return false;
        }
    }
        
    public function registerJSpage($userid)
    {
        $userid =11;
        $this->load->model('model_main');
        $data = array(
                'comp'=> $this->model_main->getAllComp(),  
                'cert'=> $this->model_main->getAllCerts(),
                'industry'=> $this->model_main->get_drpindustries(),  
                'regions'=> $this->model_main->get_regions(),  
                'userid' =>$userid);
   
        $this->load->view('public/Pheader');  
        $this->load->view('register/SUpJS', $data);     
       // $this->load->view('footer');
      
    }

    public function registerEpage($userid)
    {
        $this->load->model('model_main');
        $data = array(
              'industry'=> $this->model_main->get_drpindustries(),  
              'regions'=> $this->model_main->get_regions(),      
              'userid' =>$userid);
             
        $this->load->view('public/Pheader'); 
        $this->load->view('register/SUpE',$data);     
        $this->load->view('footer');
      
    }   
  
   public function register_edetails($userid)       
    {
             
       $this->load->model('model_main');
       $infoid=  $this->model_main->add_edetails($userid);
       $this->model_main->add_eaddress($infoid);

    }
    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('userpassword','Password','required|trim');

        if($this->form_validation->run())
        {
            $data = array(
                'email'=> $this->input->post('email'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($data); 
            $this->load->model('model_main');
                if($this->model_main->get_usertype()=='APPLICANT')
            redirect('jobseeker_myappspage');
            else if($this->model_main->get_usertype()=='EMPLOYER')
                redirect('employer_dashboard');
            else if ($this->model_main->get_usertype()=='JOBADMIN')
                redirect('tesda_dashboard');

        }          
        else {
           $this->publicpage();


        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }
    
    public function validate_credentials()
    {
        $this->load->model('model_main');
        if($this->model_main->can_log_in())
            return true;
        else
        {
            $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
            return false;
        }
    }
//employer
    public function employer_dashboard()
    {
        $this->employer_header();
        $this->load->view('employer/EDash');
        $this->load->view('footer');
    }
    public function employer_header()
    {
        $this->load->model('model_main');
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['myvacancies'] = $this->model_main->get_myvacancies($id);
        $data['name'] = $this->model_main->get_ename();
        $data['pic'] = $this->model_main->get_epic();
        $this->load->view('employer/header',$data);
    }
    
    public function employer_postvacancypage()
    {
        $this->load->model('model_main');

        $jobpost = array(
        'comp'=> $this->model_main->getAllComp(),  
        'cert'=> $this->model_main->getAllCerts(),
        'regions'=>  $this->model_main->get_regions(),
        'industry' =>$this->model_main->get_drpindustries()
        );

        $this->employer_header();
        $this->load->view('employer/EPostVacancy', $jobpost);
        $this->load->view('footer');
    }
    

    public function employer_postvacancy()
    {
       $this->load->model('model_main');
       $companyid = $this->model_main->get_userid($this->session->userdata('email'));
       //$companyid = 1;
       $jobname = $this->input->post('JN');
       $effect = $this->input->post('effectivity');
       $nov = $this->input->post('NOV');
       $region = $this->input->post('regionid');
       $city = $this->input->post('cityid');
       $desc = $this->input->post('desc');
       $industry = $this->input->post('industry');
       $gender = $this->input->post('sex');
       $ageto = $this->input->post('ageto');
       $agefrom = $this->input->post('agefrom');

       if($effect == 2)
       {    
           $jobpost_id = $this->model_main->add_jobvacancy($jobname,$desc,$companyid, $nov,$region, $city,$industry,$gender,$ageto,$agefrom);
       }

       if($effect == 3)
       {    
           $jobpost_id = $this->model_main->add_jobvacancy3w($jobname,$desc,$companyid, $nov,$region, $city,$industry,$gender,$ageto,$agefrom);
       }

       if($effect == 4)
       {    
           $jobpost_id = $this->model_main->add_jobvacancy4w($jobname,$desc,$companyid, $nov,$region, $city,$industry,$gender,$ageto,$agefrom);
       }

       $co = $this->input->post('compselect');
       $ce = $this->input->post('certselect');

       if(count($co)>=0)
       {
            foreach ($co as $a)
            {
                $this->model_main->add_competencies($jobpost_id, $a);
            }
       }


         if(count($ce)>=0)
      {
          foreach ($ce as $a)
          {
             $this->model_main->add_certifications($jobpost_id, $a);
          }
      }

     redirect('employer_dashboard');

    }
    
        
    public function get_cities($region)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_cities($region)));
    }

    public function get_industrycerts($industry)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_industrycerts($industry)));
    }
    
    public function get_comps($cert)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_comps($cert)));
    }
    public function get_certificationname($cert)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_certificationname($cert)));
    }
    
    public function get_competencyname($comp)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_competencyname($comp)));
    }
    
     public function get_certificationdesc($cert)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_certificationdesc($cert)));
    }
    public function get_competencydesc($comp)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_competencydesc($comp)));
    }
    
    public function get_certificationlevel($cert)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_certificationlevel($cert)));
    }
    public function add_cert()
    {     
        $this->session->set_userdata('cert',$_POST);
    }
    
    public function employer_appspage()
    {
        $this->employer_header();
        $this->load->view('employer/EAppsPerJob');
        $this->load->view('footer');
    }
    public function employer_appsperjob()
    {
        $this->employer_header();
        $this->load->view('employer/EAppsPerJob');
        $this->load->view('footer');
    }
    public function employer_vacancypage()
    {
        $this->employer_header();
        $this->load->view('employer/EVacancies');
        $this->load->view('footer');
    }
    public function employer_updatevacancy($data)
    {
        $this->employer_header();
        $this->load->view('employer/ERepostVacancy',$data);
        $this->load->view('footer');
    }
    public function employer_appsprof()
    {
        $this->employer_header();
        $this->load->view('employer/EAppsProf');
        $this->load->view('footer');
    }
    public function employer_repost()
    {
        $this->load->model('model_main');
        $jobno = $this->input->post('jobvacancy');
        
        $data['jobdetails'] = $this->model_main->get_jobdetails($jobno);
        $data['industry'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $this->employer_updatevacancy($data);
    }
    public function employer_checkvalidrepost()
	{
        $this->load->model('model_main');
       

        $jobtitle = $this->input->post('jobtitle');
        $region = $this->input->post('regionid');
        $city = $this->input->post('cityid');
        if($this->model_main->employer_checkjobstatus('Agribusiness',1,1))
        {
            echo json_encode(array('result' => true));
        }
        else 
        {
            echo json_encode(array('result' => false));
        }
        
    }

//jobseeker
    public function jobseeker_header()
    {
        $this->load->model('model_main');
        $data['name'] = $this->model_main->get_jsname();
        $data['pic'] = $this->model_main->get_jspic();
        $this->load->view('jobseeker/header', $data);
    }
    public function jobseeker_dashboard()
    {
        $this->jobseeker_header();
       // $this->load->view('jobseeker/JSDash');
        $this->load->view('footer');
    }
    
    public function jobseeker_myappspage()
    {
        $this->load->model('model_main');
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['invites'] = $this->model_main->get_myinvites($id);
        $data['myapp'] = $this->model_main->get_myapplications($id);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyApps', $data);
        $this->load->view('footer');
    }
    public function jobseeker_myappsdetail($jobno)
    {
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['appdetails'] = $this->model_main->get_jobdetails($jobno);
        $data['myapps'] =$this->model_main->get_mysideapplications($id,$jobno);
        
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSMyAppDetail',$data);
        $this->load->view('footer');
    }
    public function jobseeker_jobmarketpage()
    {
        $this->jobseeker_header();
        $this->load->view('jobseeker/JSJobMarket');
        $this->load->view('footer');
    }  
    public function apply_job($jobno,$invno)
    {
        $this->load->model('model_main');
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $this->model_main->apply_job($id,$jobno);
        $this->model_main->accept_job($invno);
        
        $this->jobseeker_myappsdetail($jobno);
    }
    public function decline_job($invno)
    {
        $this->load->model('model_main');
        $this->model_main->decline_job($invno);
        
        
        $this->jobseeker_myappspage();
    }
    
//tesda
    public function tesda_dashboard()
    {
        $this->load->view('tesda/TesdaDash');
    }
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */