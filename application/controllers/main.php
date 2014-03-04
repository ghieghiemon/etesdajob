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
        $data['regionvacancies'] = $this->model_pub->get_regionVacancies();
        $data['companies'] = $this->model_pub->get_companyVacancies();
        $data['compopenings'] = $this->model_pub->get_companyOpenings();
        $data['openings'] = $this->model_pub->get_allOpenings();
//        $data['event'] = $this->model_main->all_events();
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
//        $data['leagues'] = $this->model_pub->get_leagues();
       // $eno = $this->model_main->get_eventno();
       // $data['attendees'] = $this->model_main->event_attendees($eno);
  
        $this->load->view('public/header');
        $this->load->view('public/Public',$data);
        // $this->load->view('public/Public');
         $this->load->view('footer2');
        //ADD FOOTER
    }
//register
    public function  registerpage()
    {
    $this->load->view('public/header');  
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
                $this->email->subject('Welcome to E-TESDA Job Portal');
                
                $message = "<p>Thank you for signing up!</p>";
                $message .= "<p><a href = '".base_url()."main/index'>Click here</a> to go verify your account</p>";
                $this->email->message($message);
                 
               
                 $this->model_main->add_tempuser($key);
                 

                    if($this->email->send())
                    {
                       // $userid = $this->model_main->add_user($key);
                       // $this->registerJS($userid);
                      //  echo 'Check email to proceed to the registration process';
                        $type=(isset($_POST['type']))?$_POST['type']:'';
                        switch ($type)
                        {
                                case 'JS':
                                   
                                    $userid= $this->model_main->add_jsuser();
                                    $appid = $this->model_main->add_jsdetails($userid);
                                    $this->model_main->add_jswork($appid);
                                    $this->model_main->add_jsed($appid);
                                    $this->model_main->add_jsadd($appid);
                                    
                                     $this->registerJSpage($userid);
                                     
                                  // redirect('registerJSpage/11');
                                        break;
                                case 'EM':
                                       
                                    $userid= $this->model_main->add_empuser();
                                    $this->model_main->add_edetails($userid);
                                    $this->registerEpage($userid);
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
             $this->publicpage();
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
        $type=(isset($_POST['type']))?$_POST['type']:'';
        if($this->model_main->is_key_valid($key) && $type='JS' )
        {
            $userid = $this->model_main->add_user($key);
            $this->registerJSpage($userid);

        }
        else  if ($this->model_main->is_key_valid($key) && $type='EM' )
        {
             $userid = $this->model_main->add_user($key);
             $this->registerEpage($userid);
        }
        else{
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
        $this->load->model('model_main');
        $data = array(
              'regions'=> $this->model_main->get_regions(),      
              'userid' =>$userid);
   
        $this->load->view('public/header');  
        $this->load->view('register/SUpJS', $data);     
    //   $this->load->view('register/SUpJS');     
        $this->load->view('footer');
      
    }

    public function registerEpage($userid)
    {
        $this->load->model('model_main');
        $data = array(
              'industry'=> $this->model_main->get_drpindustries(),  
              'regions'=> $this->model_main->get_regions(),      
              'userid' =>$userid);
       //$userid = $this->model_main->add_empuser();
        $this->load->view('public/header'); 
        $this->load->view('register/SUpE',$data);     
        $this->load->view('footer');
      
    }   
  
   public function register_edetails($userid)       
    {
       
                // $userid =$this->model_main->add_empuser();
//              $config['upload_path'] = './leaguepics/';
//		$config['allowed_types'] = 'gif|jpg|png|docx|zip';
//		$config['max_size']	= '10000000';
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
//                
//                $this->load->library('upload', $config);
//                $this->upload->do_upload();
//                $data = $this->upload->data();
//                $u = $this->upload->data();
       $this->load->library('form_validation');
        $this->form_validation->set_rules('industry', 'industry', 'required');
        $this->form_validation->set_rules('CName', 'CName', 'required');
        $this->form_validation->set_rules('Yr', 'Yr', 'required');
        $this->form_validation->set_rules('CB', 'CB', 'required');
        $this->form_validation->set_rules('LIN', 'LIN', 'required');
        $this->form_validation->set_rules('CP', 'CP', 'required');
        $this->form_validation->set_rules('Pos', 'Pos', 'required');
        $this->form_validation->set_rules('CE', 'CE', 'required');
        $this->form_validation->set_rules('CN', 'CN', 'required');
        $this->form_validation->set_rules('Br', 'Br', 'required');

        if ($this->form_validation->run())
	{
                $in = $this->input->post('industry');
                $cname = $this->input->post('CName');
                $yr = $this->input->post('Yr');
                $cb = $this->input->post('CB');
                $lin = $this->input->post('LIN');
                $cp = $this->input->post('CP');
                $pos = $this->input->post('Pos');
                $ce = $this->input->post('CE');
                $cn = $this->input->post('CN');
                $br = $this->input->post('Br');
        $this->load->model('model_main');      
        $this->model_main->update_edetails($userid,$in,$cname,$yr,$cb,$lin,$cp,$pos,$ce,$cn,$br);
        
        
          redirect('main/publicpage');
        
//        if ( ! $this->upload->do_upload())
//		{
//                    echo $this->upload->display_errors();
//		}
//		else
//		{
//                    redirect('eleague');
//		}
//                redirect('eleague');
      // $this->model_main->add_eaddress($infoid);
        }
    }
    function do_upload()
{
    $config['upload_path'] = './assets/uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '';
    $config['max_height']  = '';
    $config['overwrite'] = TRUE;
    $config['remove_spaces'] = TRUE;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('members/header');
        $this->load->view('members/upload_form', $error);
        $this->load->view('members/footer');
    }
    else
    {
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('members/header');
        $this->load->view('members/upload_success', $data);
        $this->load->view('members/footer');
    }
}
       public function register_jsdetails($userid)       
    {
       
               $config['upload_path'] = './employerpics/';
		$config['allowed_types'] = 'gif|jpg|png|docx|zip';
		$config['max_size']	= '10000000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('FN', 'FN', 'required');
        $this->form_validation->set_rules('MN', 'MN', 'required');
        $this->form_validation->set_rules('LN', 'LN', 'required');
        $this->form_validation->set_rules('bday', 'bday', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('TN', 'TN', 'required');
        $this->form_validation->set_rules('CN', 'CN', 'required');
        $this->form_validation->set_rules('civstatus', 'civstatus', 'required');
        $this->form_validation->set_rules('COMP', 'COMP', 'required');
        $this->form_validation->set_rules('POS', 'POS', 'required');
        $this->form_validation->set_rules('WSY1', 'WSY1', 'required');
        $this->form_validation->set_rules('WEY1', 'WEY1', 'required');
        $this->form_validation->set_rules('IN1', 'IN1', 'required');
        $this->form_validation->set_rules('LVL1', 'LVL1', 'required');
        $this->form_validation->set_rules('CO1', 'CO1', 'required');
        $this->form_validation->set_rules('SY1', 'SY1', 'required');
        $this->form_validation->set_rules('EY1', 'EY1', 'required');
        $this->form_validation->set_rules('SN', 'SN', 'required');
        $this->form_validation->set_rules('cityid', 'cityid', 'required');
        $this->form_validation->set_rules('brgy', 'brgy', 'required');
        $this->form_validation->set_rules('dis', 'dis', 'required');
        $this->form_validation->set_rules('zip', 'zip', 'required|numeric');
        $this->form_validation->set_rules('regionid', 'regionid', 'required');
        if ($this->form_validation->run())
	{         
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $u = $this->upload->data();
       
                $fn = $this->input->post('FN');
                $mn = $this->input->post('MN');
                $ln = $this->input->post('LN');
                $bday = $this->input->post('bday');
                $gender = $this->input->post('gender');
                $tn = $this->input->post('TN');
                $cn = $this->input->post('CN');
                $civ = $this->input->post('civstatus');
                
                $companyname = $this->input->post('COMP');
                $position = $this->input->post('POS');
                $start = $this->input->post('WSY1');
                $end = $this->input->post('WEY1');
                
                $schoolname = $this->input->post('IN1');
                $level = $this->input->post('LVL1');
                $description = $this->input->post('CO1');
                $estart = $this->input->post('SY1');
                $eend = $this->input->post('EY1');
                
                $streetno = $this->input->post('SN');
                $brgy = $this->input->post('brgy');
                $district = $this->input->post('dis');
                $cityprov = $this->input->post('cityid');
                $zipcode = $this->input->post('zip');
                $regionid = $this->input->post('regionid');
                
             //   $employerpic = $u['file_name'];
                
                $this->load->model('model_main');      
                $this->model_main->update_jsdetails($userid,$fn,$mn,$ln,$bday,$gender,$tn,$cn,$civ);
                $appid = $this->model_main->get_jsappid($userid);
                $this->model_main->update_jswork($appid,$companyname,$position,$start,$end);
                $this->model_main->update_jsed($appid,$schoolname,$level,$description,$estart,$eend);
                $this->model_main->update_jsadd($appid,$streetno,$brgy,$district,$cityprov,$zipcode,$regionid);
               
        
                if ( ! $this->upload->do_upload())
		{
                    echo $this->upload->display_errors();
		}
		else
		{
                   redirect('main/publicpage');
		}
                  redirect('main/publicpage');
        }

    }
    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('userpassword','Password','required|trim');

        
        if($this->form_validation->run())
        {
            $email = $this->input->post('email');
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($data); 
            $this->load->model('model_main');
            if($this->model_main->get_usertype()=='APPLICANT')
            {
                redirect(base_url().'jobseeker/jobseeker_myappspage');
            }
            else if($this->model_main->get_usertype()=='EMPLOYER')
            {
                redirect(base_url().'employer/employer_dashboard');
            }
            else if ($this->model_main->get_usertype()=='JOBADMIN')
            {
                redirect(base_url().'tesda/tesda_dashboard');
            }

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
    
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */