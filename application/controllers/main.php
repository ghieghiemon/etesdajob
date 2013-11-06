<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function index()
    {
        $this->publicpage();
    }
//public
    public function publicpage()
    {
        $this->load->model('model_pub');
        $this->load->model('model_main');
        
        $data['industries'] = $this->model_pub->get_industryVacancies();
        $data['companies'] = $this->model_pub->get_companyVacancies();
         $data['vacancies'] = $this->model_pub->get_allVacancies();
        $data['event'] = $this->model_main->all_events();
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $data['leagues'] = $this->model_pub->get_leagues();
        
        $this->load->view('public/header');
        $this->load->view('public/Public',$data);
        //ADD FOOTER
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
                'email' => $this->input->post('email'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($data); 
            $this->load->model('model_main');
                if($this->model_main->get_usertype()=='APPLICANT')
            redirect('jobseeker/jobseeker_myappspage');
            else if($this->model_main->get_usertype()=='EMPLOYER')
                redirect('employer/employer_dashboard');
            else if ($this->model_main->get_usertype()=='JOBADMIN')
                redirect('tesda/tesda_dashboard');

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

    public function get_cities($region)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_cities($region)));
    }
    
     public function get_citiesRepost($region)
    {
        $this->load->model('model_main');
        $cityid= $this->session->userdata('cityid');
        $cityname=  $this->model_main->get_cityname($cityid);
        $cities = $this->model_main->get_cities($region);
        if(($key = array_search($cityname,$cities))!= false)
                unset($cities[$key]);
        
        header('Content-Type: application/x-json; charset=utf-8');
        
        echo(json_encode($cities));
        
    }
 
    
//tesda
    public function tesda_dashboard()
    {
        $this->load->view('tesda/TesdaDash');
    }
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */