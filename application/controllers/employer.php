<?php
class Employer extends CI_Controller {
//employer
    
    function employer_view()
    { 
        @session_start();
        $_SESSION['ids'] = array();
        
        $this->load->model('model_employer');
        $ids = $this->input->post('info');
        $_SESSION['ids'] = $ids;
        echo '
        <div class="modal-header">
        <a class="close" data-dismiss="modal">x</a>
        <h3>Change Status</h3>
        </div>
        <div class="modal-body">
            <div class="well">
                <table style="width:700px;" class="tableUR2b table-hover table-condensed table-stripedB">
                    <thead>
                        <tr>
                            <th class="span2" style="text-align:center">Name</th>
                            <th class="span1" style="text-align:center">Age</th>
                            <th class="span1" style="text-align:center">Sex</th>
                            <th class="span3" style="text-align:center">Certification</th>
                            <th class="span3" style="text-align:center">Competencies</th>
                            <th class="span2" style="text-align:center">Status</th>
                        </tr>
                    </thead>

                    <tbody class="recName">';
                    foreach($ids as $a)
                    {
                          echo '<tr>
                                <td>
                                    <a href="EAppsProf.html" class="recAppName">';
                          $id = $this->model_employer->get_appid($a);
                          
                          $name = $this->model_employer->get_jsName($id);
                              foreach($name as $b)
                              {
                                  echo $b['firstname'];
                                  echo " ";
                                  echo $b['middlename'];
                                  echo " ";
                                  echo $b['lastname'];
                              }
                          echo '</a>
                                </td>
                               
                                <td>';
                          $birthday = $this->model_employer->get_appage($id);
                          $birthDate = explode("/", $birthday);
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
                          echo $age;
                          echo '</td>
                                
                                <td>';
                          $ismale = $this->model_employer->get_appsex($id);
                          if ($ismale == 1)
                              echo 'M';
                          else 
                              echo 'F';
                          echo '</td>
                                
                                <td>';
                          $nc = $this->model_employer->get_appcert($id);
                          $count = count($nc);
                          foreach($nc as $c)
                          {
                              echo $c['ncname']. " ". $c['level']; 
                              if ($count >1)
                                echo ", ";

                             $count--;
                          }
                          echo '</td>
                                
                                <td>';
                          $coc = $this->model_employer->get_appcomp($id);
                          $count = count($coc);
                          foreach($coc as $d)
                          {
                              echo $d['cocname']; 
                              if ($count >1)
                                echo ", ";

                             $count--;
                          }
                          echo '
                                </td>
                                
                                <td>
                                    <p class="statusB">';
                          $status = $this->model_employer->get_appstatus($a);
                          echo $status;
                          echo '</p>
                                </td>
                            </tr>';
                    
                    } 
                        echo '</tbody>
                                        </table>
                            </div><!--end well-->
                            </div>
                                       <div class="modal-footer">'?>
                        <a id="confirm" href="<?php echo base_url(); ?>employer/view_calendar/" class="btn btn-info" data-toggle="modal">Confirm</a>
                      <?php echo'  <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a>';
        
    }
    public function employer_dashboard()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker');
        
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $myvacancies = $this->model_employer->get_myvacancies($id);
        $postedvac = $this->model_employer->get_postedvacancies($id);
        $data['briefcase'] = $this->model_employer->employer_briefcase($id);
        $data['newapplicant'] = $this->model_employer->get_allNewApplicant($id);
        $data['myvacancies'] = $myvacancies;
        $data['postedvac'] = $postedvac;
        $data['invites'] = $this->model_employer->get_jobInvitesApps($id);
        $data['event'] = $this->model_employer->get_createdevents($id);
        $data['notif'] = $this->model_jobseeker->get_notifications($id);
        
        foreach($myvacancies as $a)
        {
            $date2 = $a['expirationdate'];                                          
            $date = date('Y-m-d');
            $diff = abs(strtotime($date2) - strtotime($date));

            $days = round((($diff/24)/60)/60);
            $notif = $a['jobtitle']." is nearing its expiration. Would you like to extend?";
            if($this->model_employer->in_notifs($a['jobno'],$id))
                if ($days <= 5)
                {
                    $this->model_employer->add_notification($id,$notif,$a['jobno']);
                }
        }
        //
        
        $this->employer_header();
        $this->load->view('employer/EDash',$data);
        $this->load->view('footer');
    }
    public function get_age($birthdate)
    {
         $birthDate = explode("/", $birthDate);
         $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
         return $age;
    }
    public function employer_header()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['myvacancies'] = $this->model_employer->get_myvacancies($id);
        $data['name'] = $this->model_employer->get_ename();
        $data['pic'] = $this->model_employer->get_epic();
        $this->load->view('employer/header',$data);
    }
    public function employer_survey()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        
        $data['surveys'] = $this->model_main->check_survey($id);
        
        $this->employer_header();
        $this->load->view('employer/ESurvey',$data);
    }
    
    public function employer_postvacancypage()
    {
        
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $jobpost = array(
        'comp'=> $this->model_employer->getAllComp(),  
        'cert'=> $this->model_employer->getAllCerts(),
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
       $this->load->model('model_employer');
       	
       $this->load->library('form_validation');
       $this->form_validation->set_rules('JN', 'Job Name', 'required');
       $this->form_validation->set_rules('effectivity', 'Effectivity', 'required');
       $this->form_validation->set_rules('NOV', '# of Vacancy', 'required');
       $this->form_validation->set_rules('regionid', 'Region', 'required');
       $this->form_validation->set_rules('cityid', 'City', 'required');
       $this->form_validation->set_rules('desc', 'Description', 'required');
       $this->form_validation->set_rules('industry', 'Industry', 'required');
       $this->form_validation->set_rules('sex', 'Sex', 'required');
//       $this->form_validation->set_rules('ageto', 'Age', 'numeric');
//       $this->form_validation->set_rules('agefrom', 'Age', 'numeric');
       
       if ($this->form_validation->run())
	{

       $companyid = $this->model_main->get_userid($this->session->userdata('email'));
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
           $jobpost_id = $this->model_employer->add_jobvacancy($jobname,$desc,$companyid, $nov,$region, $city,$industry,$gender,$ageto,$agefrom);
       }

       if($effect == 3)
       {    
           $jobpost_id = $this->model_employer->add_jobvacancy3w($jobname,$desc,$companyid, $nov,$region, $city,$industry,$gender,$ageto,$agefrom);
       }

       if($effect == 4)
       {    
           $jobpost_id = $this->model_employer->add_jobvacancy4w($jobname,$desc,$companyid, $nov,$region, $city,$industry,$gender,$ageto,$agefrom);
       }

       $co = $this->input->post('compselect');
       $ce = $this->input->post('certselect');
//       print_r($_POST);
      
       
       
       if(!empty($co))
       {
         
            foreach ($co as $a)
            {
                $this->model_employer->add_competencies($jobpost_id, $a);
            }
       }
       

         if(!empty($ce))
      {
          foreach ($ce as $a)
          {
             $this->model_employer->add_certifications($jobpost_id, $a);
          }
      }
      
      //invite
      $this->invite_jobseekers($jobpost_id);
        }
        else{
//            print_r(validation_errors());
            $this->employer_postvacancypage();
        }
    }
    
     public function match($jobno, $id)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $matchedCert = $this-> model_jobseeker->get_matchedCert($jobno, $id);
        $requiredCert = $this-> model_jobseeker->get_jobcert($jobno);
        $matchedComp = $this-> model_jobseeker->get_matchedComp($jobno, $id);
        $requiredComp = $this-> model_jobseeker->get_jobcomp($jobno);
        
       if($matchedCert >= $requiredCert)
        {
            if($matchedComp >= $requiredComp)
            {
                return "True";
            }
            else 
            {
                return false;
            }
        }
        else
        {
            return false;
        } 
    }
public function invite_jobseekers2($jobpost_id)
    {
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker');
        $jobseekers = $this->model_employer->get_jobseekers();
        $applied = $this->model_employer->get_jobApplications($jobpost_id);
        $sex = $this->model_employer->get_jobsex($jobpost_id);
        $startage = $this->model_employer->get_jobagestart($jobpost_id);
        $endage = $this->model_employer->get_jobageend($jobpost_id);
        
        $qualified = $this->model_employer->get_qualifiedjs($sex, $startage, $endage);
        
        $stack = array(); 
        foreach($jobseekers as $a)
        {
            if($this->match($jobpost_id, $a['appid'])== "True")
            {
                array_push($stack, $a['appid']);
            }
        }
        foreach($qualified as $a)
        {
            $appid[]= $a['appid'];
        }
        $suggested = array();
        foreach($stack as $a)
        {
           // if(in_array($a['appid'],$appid))
            if(in_array($a,$appid))
                    array_push($suggested, $a);
        }
        $data  = array();
        
       foreach ($suggested as $a)
       {
           $name =$this->model_employer->get_jsName($a);
           
           $row['name'] = $name;
           $row['appid'] = $a;
           $row['pic'] = $this->model_jobseeker->get_jspic2($a);
//           $row['competencies'] = $this->model_main->get_jscomp($a);
//           $row['details'] = $this->model_main->get_jsdetails($a);
           //$row['certifications'] = 
           if($this->model_employer->check_if_invite($a, $jobpost_id))
           {
                array_push($data, $row);
           }
       }
       
       foreach ($applied as $a)
       {
           $appid[] = $a['appid'];
       }
       
       $final = array();
       if (count($applied) != 0)
       {
            foreach($data as $a)
            {
                if(!(in_array($a['appid'],$appid)))
                         array_push($final, $a);
            }
            $invite['invites'] = $final;
       }
       else
       {
           $invite['invites'] = $data;
       }
            
       
       $invite['jobno'] = $jobpost_id;
       
      $this->employer_header();
      $this->load->view("employer/EInviteJSSkip",$invite);
    }
   public function invite_jobseekers($jobpost_id)
    {
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker');
        $jobseekers = $this->model_employer->get_jobseekers();
        $applied = $this->model_employer->get_jobApplications($jobpost_id);
        $sex = $this->model_employer->get_jobsex($jobpost_id);
        $startage = $this->model_employer->get_jobagestart($jobpost_id);
        $endage = $this->model_employer->get_jobageend($jobpost_id);
        
        $qualified = $this->model_employer->get_qualifiedjs($sex, $startage, $endage);
        
        $stack = array(); 
        foreach($jobseekers as $a)
        {
            if($this->match($jobpost_id, $a['appid'])== "True")
            {
                array_push($stack, $a['appid']);
            }
        }
        foreach($qualified as $a)
        {
            $appid[]= $a['appid'];
        }
        $suggested = array();
        foreach($stack as $a)
        {
           // if(in_array($a['appid'],$appid))
            if(in_array($a,$appid))
                    array_push($suggested, $a);
        }
        $data  = array();
        
       foreach ($suggested as $a)
       {
           $name =$this->model_employer->get_jsName($a);
           
           $row['name'] = $name;
           $row['appid'] = $a;
           $row['pic'] = $this->model_jobseeker->get_jspic2($a);
//           $row['competencies'] = $this->model_main->get_jscomp($a);
//           $row['details'] = $this->model_main->get_jsdetails($a);
           //$row['certifications'] = 
           if($this->model_employer->check_if_invite($a, $jobpost_id))
           {
                array_push($data, $row);
           }
       }
       
       foreach ($applied as $a)
       {
           $appid[] = $a['appid'];
       }
       
       $final = array();
       if (count($applied) != 0)
       {
            foreach($data as $a)
            {
                if(!(in_array($a['appid'],$appid)))
                         array_push($final, $a);
            }
            $invite['invites'] = $final;
       }
       else
       {
           $invite['invites'] = $data;
       }
            
       
       $invite['jobno'] = $jobpost_id;
       
      $this->employer_header();
      $this->load->view("employer/EInviteJS",$invite);
    }
    public function invite_jobseeker($jobpost_id)
    {
        $this->load->model('model_employer');
//        if($this->input->post('check'))
//       {
           $data = $this->input->post('check');//$_POST['check1'];
           $message = $this->input->post('invite');
           $details = $this->model_employer->get_jobdetails($jobpost_id);
           
            foreach ($details as $b)
            {
                $jobtitle = $b['jobtitle'];
                $company = $b['companyID'];
            }
            $name = $this->model_employer->get_companyName($company);
           
             $notif = "We at $name are inviting you to apply as an <font color ='blue'>$jobtitle </font> ";
             
           foreach($data as $a)
            {
                $this->model_employer->invite_jobseeker($a, $jobpost_id,$message);
            }
//       }
       
       redirect(base_url().'employer/employer_appsperjob/'.$jobpost_id);
    }
     public function get_industrycerts($industry)
    {
        $this->load->model('model_main');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_main->get_industrycerts($industry)));
    }
    
    public function get_comps($cert)
    {
        $this->load->model('model_employer');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_employer->get_comps($cert)));
    }
    public function get_certificationname($cert)
    {
        $this->load->model('model_employer');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_employer->get_certificationname($cert)));
    }
     public function get_certificationdesc($cert)
    {
        $this->load->model('model_employer');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_employer->get_certificationdesc($cert)));
    }
    
     public function get_certificationlevel($cert)
    {
        $this->load->model('model_employer');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_employer->get_certificationlevel($cert)));
    }
    
    public function get_competencyname($comp)
    {
        $this->load->model('model_employer');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_employer->get_competencyname($comp)));
    }
    
    public function get_competencydesc($comp)
    {
        $this->load->model('model_employer');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->model_employer->get_competencydesc($comp)));
    }
    

    public function employer_appsperjob($jobno)
    {
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
        
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['jobno'] = $jobno;
        $data['details'] = $this->model_employer->get_jobdetails($jobno);
        $data['alldetails'] = $this->model_employer->get_alljobdetails($jobno);
        $data['apps'] = $this->model_employer->get_jobApplications($jobno);
        $data['newapplicant'] = $this->model_employer->get_newApplicant($jobno);
        $data['exam'] = $this->model_employer->get_exam($jobno);
        $data['interview'] = $this->model_employer->get_interview($jobno);
        $data['all'] = $this->model_employer->get_allapps($jobno);
        $data['hired'] = $this->model_employer->get_hired($jobno);
         $data['denied'] = $this->model_employer->get_denied($jobno);
        $data['invites'] = $this->model_employer->get_jobInvites($jobno);
        
        $data['cert'] = $this->model_employer->get_jobCerts($jobno);
        $data['comp'] = $this->model_employer->get_jobComps($jobno);
        
        $this->model_jobseeker->seen_notif($jobno,$id);
        
        $this->employer_header();
        $this->load->view('employer/EAppsPerJob',$data);
        $this->load->view('footer2');
    }
    
    public function employer_vacancypage()
    {
        $this->load->model('model_employer');
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['myvacancies'] = $this->model_employer->get_myvacancies2($id);
        $data['closed'] = $this->model_employer->get_myClosedvacancies($id);
        $this->employer_header();
        $this->load->view('employer/EVacancies',$data);
        $this->load->view('footer2');
    }
    public function employer_updatevacancy($data)
    {
        $this->employer_header();
        $this->load->view('employer/ERepostVacancy',$data);
        $this->load->view('footer');
    }
    
    public function employer_extend($jobno)
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $effect = $this->input->post('effectivity');
        if($effect == 2)
       {    
         $this->model_employer->update_jobvacancy($jobno);
       }

       if($effect == 3)
       {    
           $this->model_employer->update_jobvacancy3w($jobno);
       }

       if($effect == 4)
       {    
           $this->model_employer->update_jobvacancy4w($jobno);
       }

        $this-> employer_appsperjob($jobno);
    }
    
     public function employer_renew($jobno)
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $effect = $this->input->post('effectivity');
        if($effect == 2)
       {    
         $this->model_employer->renew_jobvacancy($jobno);
       }

       if($effect == 3)
       {    
           $this->model_employer->renew_jobvacancy3w($jobno);
       }

       if($effect == 4)
       {    
           $this->model_employer->renew_jobvacancy4w($jobno);
       }
       
        $this-> employer_appsperjob($jobno);
    }
    public function employer_appsprof($appid,$jobno)
    {
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker');
        $this->load->model('model_main');
          
      
        
        
        $data['jobdetails'] = $this->model_employer->get_jobdetails($jobno);   
        $data['appdetails'] = $this->model_employer->get_applicantDetails($appid);  
        $data['application'] = $this->model_employer->get_applicationDetails($appid,$jobno);  
        
       // $data['email'] = $this->model_employer->get_email($userid);
        
        $data['educ'] = $this->model_jobseeker->get_educ($appid);
        $data['work'] =$this->model_jobseeker->get_work($appid);
        $data['appid'] = $appid;
        $data['cert'] = $this->model_jobseeker->get_certifications2($appid);
        
        $this->employer_header();
        $this->load->view('employer/EAppsProf',$data);
    }
    public function save_applsicantnotes($applicationid,$appid,$jobno)
    {
        $this->load->model('model_employer');
        
        $note = $this->input->post('notes');
        $this->model_employer->save_applicantnotes($applicationid,$note);
        redirect(base_url().'employer/employer_appsprof/'.$appid."/".$jobno);
    }
    public function employer_repost()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker'); 
        $data['comp'] = $this->model_employer->getAllComp();  
        $data['cert'] = $this->model_employer->getAllCerts();


        $jobno = $this->input->post('jobvacancy');   
        $data['jobdetails'] = $this->model_employer->get_jobdetails($jobno);   
        //$data['cert'] = $this->model_employer->get_jobCerts($jobno);
        //$data['comp'] = $this->model_employer->get_jobComps($jobno);
        $job = $this->model_employer->get_jobdetails($jobno);
        $data['jobdetails'] = $job;
        //print_r($job);
        $competency = $this->model_employer->getCompetencies($job[0]['jobno']);
        $certification = $this->model_employer->getCertifications($job[0]['jobno']);
        //print_r($competency);
        if(!empty($competency)){
            $competencies = array();
            
            foreach($competency as $comp){
                array_push($competencies,$comp['ncoid']);
            }
            //print_r($competencies);
          $data['competencyID'] = $competencies;  
        }else{
            
            
            
            $data['competencyID'] = '#';  
        }
        
        if(!empty($certification)){
            
            $certifications = array();
            
            foreach($certification as $cert){
                array_push($certifications, $cert['ncid']);
            }
            
           $data['certificationID'] = $certifications;
        }else{
            $data['certificationID'] = '#';
        }
        
        
        $data['industry'] = $this->model_main->get_drpindustries();
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        foreach ($job as $a)
        {
        $city = array('cityid'=> $a['city']);
        }
        $this->session->set_userdata($city);
        $this->employer_updatevacancy($data);

     }
     
       public function employer_repostjob($jobno)
    {
//        $this->load->model('model_main');
//        $this->load->model('model_employer');
//        $this->load->model('model_jobseeker'); 
//        $data['comp'] = $this->model_employer->getAllComp();  
//      $data['cert'] = $this->model_employer->getAllCerts();
//         
//     
//        $data['jobdetails'] = $this->model_employer->get_jobdetails($jobno);   
//        $data['cert'] = $this->model_employer->get_jobCerts($jobno);
//        $data['comp'] = $this->model_employer->get_jobComps($jobno);
//        $job = $this->model_employer->get_jobdetails($jobno);
//        $data['jobdetails'] = $job;
//        $data['industry'] = $this->model_main->get_drpindustries();
//        $data['drpindustries'] = $this->model_main->get_drpindustries();
//        $data['regions'] = $this->model_main->get_regions();
//        foreach ($job as $a)
//        {
//        $city = array('cityid'=> $a['city']);
//        }
//        $this->session->set_userdata($city);
//        $this->employer_updatevacancy($data);
        
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker'); 
        $data['comp'] = $this->model_employer->getAllComp();  
        $data['cert'] = $this->model_employer->getAllCerts();


      //  $jobno = $this->input->post('jobvacancy');   
        $data['jobdetails'] = $this->model_employer->get_jobdetails($jobno);   

        $job = $this->model_employer->get_jobdetails($jobno);
        $data['jobdetails'] = $job;

        $competency = $this->model_employer->getCompetencies($job[0]['jobno']);
        $certification = $this->model_employer->getCertifications($job[0]['jobno']);

        if(!empty($competency)){
            $competencies = array();
            
            foreach($competency as $comp){
                array_push($competencies,$comp['ncoid']);
            }
            //print_r($competencies);
          $data['competencyID'] = $competencies;  
        }else{
            
            
            
            $data['competencyID'] = '#';  
        }
        
        if(!empty($certification)){
            
            $certifications = array();
            
            foreach($certification as $cert){
                array_push($certifications, $cert['ncid']);
            }
            
           $data['certificationID'] = $certifications;
        }else{
            $data['certificationID'] = '#';
        }
        
        
        $data['industry'] = $this->model_main->get_drpindustries();
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        foreach ($job as $a)
        {
        $city = array('cityid'=> $a['city']);
        }
        $this->session->set_userdata($city);
        $this->employer_updatevacancy($data);
        

     }
    

    public function employer_checkvalidrepost()
	{
        $this->load->model('model_main');
       
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jobtitle', 'Age', 'required');
        $this->form_validation->set_rules('regionid', 'Age', 'required');
        $this->form_validation->set_rules('cityid', 'Age', 'required');
        
        if ($this->form_validation->run())
	{
            $jobtitle = $this->input->post('jobtitle');
            $region = $this->input->post('regionid');
            $city = $this->input->post('cityid');
            if($this->model_main->employer_checkjobstatus($jobtitle,$region,$city))
            {
                echo json_encode(array('result' => true));
            }
            else 
            {
                echo json_encode(array('result' => false));
            }
        }
    }
    public function employer_setSched($jobno,$applicationid)
    {
        @session_start();
        $this->load->model('model_employer'); 
//        
//        $this->load->library('form_validation');
////        $this->form_validation->set_rules('what', 'Age', 'required');
////        $this->form_validation->set_rules('TR1', 'Age', 'required');
////        $this->form_validation->set_rules('TR2', 'Age', 'required');
//        $this->form_validation->set_rules('date1', 'Date', 'required');
////        $this->form_validation->set_rules('duration', 'Age', 'required');
//        $this->form_validation->set_rules('VN', '', 'required');
//        $this->form_validation->set_rules('CP', 'Age', 'required');
//        $this->form_validation->set_rules('CD', 'Age', 'required');
        
//        if ($this->form_validation->run())
//	{
            
            $status = $this->input->post('what');
//            echo $status;
            $starttime = $this->input->post('TR1');
            $endtime = $this->input->post('TR2');
            $date = $this->input->post('date1');
            $duration = $this->input->post('duration');
            //$date = $month.",".$day.",".$year; 
            $venue = $this->input->post('VN');
            $cp = $this->input->post('CP');
            $cd = $this->input->post('CD');


            $jobno = $this->model_employer->get_jobno($applicationid);
            $details = $this->model_employer->get_jobdetails($jobno);  
               
            foreach ($details as $b)
            {
                $jobtitle = $b['jobtitle'];
                $company = $b['companyID'];
            }
            $name = $this->model_employer->get_companyName($company);

            if ($status == "Exam")
            {
                $notif = "You are qualified for the next step for <font color ='blue'>$jobtitle </font> , please confirm your schedule for exam";
            } else if ($status == "Interview")
            {
                $notif = "You are qualified for the next step for <font color ='blue'>$jobtitle </font> , please confirm your schedule for interview ";
            } else if ($status == "Denied")
            {
                $notif = "We have reviewed your qualifications and, unfortunately, 
                    are not able to pursue your application for <font color ='blue'>$jobtitle </font> further.";
            }
            $appid = $this->model_employer->get_appid($applicationid);

            $this->model_employer->add_notification($appid,$notif,$jobno);

            $scheduleid = $this->model_employer->add_schedule($date, $venue, $cp, $cd, $starttime, $endtime);

            $this->model_employer->update_app($status,$applicationid,$scheduleid);
//            print_r($status);
            
//          }else{
//              print_r(validation_errors());
//          }

        $this->employer_appsperjob($jobno);
        }
    
    
    public function set_intervals($scheduleid,$duration,$starttime,$endtime){
        $timeF = explode(":", $starttime);
        $timeT = explode(":", $endtime);
        //print_r($timeF);
        $timeFH = $timeF[0];
        $timeF1 = explode(" ",$timeF[1]);
        $timeFM = $timeF1[0];
        $timeFD = $timeF1[1];
        
        $timeTH = $timeT[0];
        $timeT1 = explode(" ",$timeT[1]);
        $timeTM = $timeT1[0];
        $timeTD = $timeT1[1];
        
        $timeslotsF = array();
        $timeslotsT = array();
        
        $temptimeFH = 0;
        $totalmins = 0;
        
         if($timeTM != $timeFM){ 
            $totalmins = $timeTM+$timeFM;
        }
        
        
        if($timeFD == "AM" && $timeTD == "PM"){
          
          $totalmins +=  (($timeTH+12)-$timeFH)*60;
          
           if($timeTM == "00" && $timeFM == "00"){
              
                 $newtimeH = $timeFH;
                 $newtimeM = $timeFM;
                 $oldtimeH = $timeFH;
                 $oldtimeM = $timeFM;
                 
                 
                 while($newtimeH < $timeTH+12){
                    
                     if($duration == ".5"){
                        $newtimeM = $newtimeM;
                        $newtimeM +=30;
                         
                         if($newtimeM >= 60){
                             $newtimeH++;
                             $newtimeM = "00";
                         }
                         
                         if($newtimeH > 12){
                               $temptimeFH = $oldtimeH;
                               
                               if($oldtimeH > 12){
                                   $temptimeFH = $oldtimeH-12;
                               }
                               
                               $temptimeTH = $newtimeH-12;
                               
                               array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                               array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                           }else{
                               
                               array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                               array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                           }
                           
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     else if($duration == "1"){
                       
                         $newtimeH++;
                         $newtimeM = "00";
                         
                           if($newtimeH > 12){
                               $temptimeFH = $oldtimeH;
                               
                               if($oldtimeH > 12){
                                   $temptimeFH = $oldtimeH-12;
                               }
                               
                                $temptimeTH = $newtimeH-12;
                                
                               array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                               array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                           }else{
                               array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                               array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                               // htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                           }
                         
                        
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     else if($duration == "2"){
                        
                         $newtimeH+=2;
                         
                         $newtimeM = "00";
                         
                         if($newtimeH > 12){
                               $temptimeFH = $oldtimeH;
                               
                               if($oldtimeH > 12){
                                   $temptimeFH = $oldtimeH-12;
                               }
                               
                               $temptimeTH = $newtimeH-12;
                               
                                array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                               array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                           }else{
                               array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                               array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                           }
                           
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     
                     
                 }
                  
              }
              
             else{
                  
               $newtimeH = $timeFH;
               $newtimeM = $timeFM;
               $oldtimeH = $timeFH;
               $oldtimeM = $timeFM;
               
                 
                 
                 
                 while($newtimeH < $timeTH+12){
                    
                     if($duration == ".5"){
                        $newtimeM = $newtimeM;
                        $newtimeM +=30;
                         
                         if($newtimeM >= 60){
                             $newtimeH++;
                             $newtimeM = $newtimeM-60;
                             
                             if($newtimeM == 0){
                                 $newtimeM = "00";
                             }
                            
                         }
                         
                         
                         if($totalmins >= 30){
                         $totalmins = $totalmins-30; 
                         
                            if($newtimeH > 12){
                                  $temptimeFH = $oldtimeH;

                                  if($oldtimeH > 12){
                                      $temptimeFH = $oldtimeH-12;
                                  }

                                  $temptimeTH = $newtimeH-12;
                                    array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                                    array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                   //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                              }else{
                                    array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                                    array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                   //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                              }
                         }
                           
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     else if($duration == "1"){
                       
                         $newtimeH++;
                     
                         if($totalmins >= 60){
                         $totalmins = $totalmins-60;   
                             
                             
                                if($newtimeH > 12){
                                    $temptimeFH = $oldtimeH;

                                    if($oldtimeH > 12){
                                        $temptimeFH = $oldtimeH-12;
                                    }
                                     
                                    $temptimeTH = $newtimeH-12;
                                    array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                                    array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                     //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                }else{
                                    array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                                    array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                     //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                }
                         }
                         
                        
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }else if($duration == "2"){
                        
                         $newtimeH+=2;
                         
                          
                         if($totalmins >= 120){
                         $totalmins = $totalmins-120; 
                         
                                if($newtimeH > 12){
                                      $temptimeFH = $oldtimeH;

                                      if($oldtimeH> 12){
                                          $temptimeFH = $oldtimeH-12;
                                      }

                                      $temptimeTH = $newtimeH-12;
                                       array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                                    array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                       //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                  }else{
                                       array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                                    array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                       //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                  }
                         }
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     
                     
                 }
                  
              }
          
          
      }
      else{ 
          
              if($timeTM == "00" && $timeFM == "00"){
                 $newtimeH = $timeFH;
                 $newtimeM = $timeFM;
                 $oldtimeH = $timeFH;
                 $oldtimeM = $timeFM;
                 while($newtimeH < $timeTH){
                    
                     if($duration == ".5"){
                         $newtimeM = $newtimeM;
                        $newtimeM +=30;
                         
                         if($newtimeM >= 60){
                             $newtimeH++;
                             $newtimeM = "00";
                         }
                         
                          array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                          array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                         
                         //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }else if($duration == "1"){
                        
                         $newtimeH++;
                         $newtimeM = "00";
                         
                          array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                          array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                         //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }else if($duration == "2"){
                        
                         $newtimeH+=2;
                         
                         $newtimeM = "00";
                          array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                          array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                         //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     
                     
                 }
                  
              }
              else{
                  
                $newtimeH = $timeFH;
                 $newtimeM = $timeFM;
                  $oldtimeH = $timeFH;
                 $oldtimeM = $timeFM;
                 while($newtimeH <= $timeTH){
                     
                     if($duration == ".5"){
                           $newtimeM = $newtimeM;
                        $newtimeM +=30;
                         
                         if($newtimeM >= 60){
                             $newtimeH++;
                             $newtimeM = $newtimeM-60;
                         }
                          array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                          array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                         //htmlOutput += ' '+ oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                    }else if($duration == "1"){
                         $newtimeH++;
                        
                        
                        
                       if($timeTH-$oldtimeH<=1 && $timeTM-$newtimeM!= 0){
                       
                       }else{
                     
                            if($newtimeH > 12){
                                    $temptimeFH = $oldtimeH;

                                    if($oldtimeH> 12){
                                        $temptimeFH = $oldtimeH-12;
                                    }

                                    $temptimeTH = $newtimeH-12;
                                    array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                                    array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                     //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                }else{
                                    array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                                    array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                     //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                }
                        }  
                           
                         $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                         
                         
                     }
                     else if($duration == "2"){
                        
                         $newtimeH+=2;
                        if($timeTH-$oldtimeH<=2 && $timeTM-$newtimeM!= 0){
                       
                       }else{
                     
                            if($newtimeH > 12){
                                    $temptimeFH = $oldtimeH;

                                    if($oldtimeH> 12){
                                        $temptimeFH = $oldtimeH-12;
                                    }

                                    $temptimeTH = $newtimeH-12;
                                    array_push($timeslotsF, $temptimeFH.':'.$oldtimeM);
                                    array_push($timeslotsT, $temptimeTH.':'.$newtimeM);
                                     //htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                }else{
                                    array_push($timeslotsF, $oldtimeH.':'.$oldtimeM);
                                    array_push($timeslotsT, $newtimeH.':'.$newtimeM);
                                     //htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                }
                        }  
                        $oldtimeM = $newtimeM;
                         $oldtimeH = $newtimeH;
                     }
                     
                 }
                  
              }
          
      }
        $ctr = 0;
      foreach($timeslotsF as $t){
           $this->model_employer->add_scheduleslot($scheduleid, $t,$timeslotsT[$ctr], 0);
          $ctr++;
      }
//        print_r($timeslotsF);
//        print_r($timeslotsT);
        
    }
    
    
    public function employer_changeStatus($jobno,$applicationid)
    {
        @session_start();
        $this->load->model('model_employer'); 
        $this->load->model('model_main');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $status = $this->input->post('group1');
        $details = $this->model_employer->get_jobdetails($jobno);
        $appid = $this->model_employer->get_appid($applicationid);
            foreach ($details as $b)
            {
                $jobtitle = $b['jobtitle'];
                $company = $b['companyID'];
            }
            $name = $this->model_employer->get_companyName($id);    
        if ($status == "Hired")
        {
            //$this->model_employer->fill_vacancy($jobno);
            $this->model_employer->change_employment($appid);
            $notif = "We at $name are pleased to announce that you have been accepted as <font color ='blue'> $jobtitle!</font>";
        } 
        else if ($status == "Denied")
        {
            $notif = "We have reviewed your qualifications and, unfortunately, are not able to pursue your application for <font color='blue'>$jobtitle</font> further.";
        }
        else if($status == "Exam")
        {
            redirect(base_url().'employer/setEI/Exam/'.$jobno.'/'.$applicationid);
        }
        else if($status == "Interview")
        {
            redirect(base_url().'employer/setEI/Interview/'.$jobno.'/'.$applicationid);
        }
        $left = $this->model_employer->change_status($status,$applicationid,$jobno); 
        
        $this->model_employer->add_notification($appid,$notif,$jobno);
        if($left != 0)
        {
            foreach($left as $b)
            {
             $notif = "We are sorry to inform you that the vacancy, $jobtitle, you are applying for has already been filled. Thank you for your time and effort.";
             $this->model_employer->add_notification($b['appid'],$notif,$jobno);
             $this->model_employer->change_status2("Denied",$b['appid'],$jobno); 
            }
        }
        //print_r($status);     
        redirect(base_url().'employer/employer_appsperjob/'.$jobno);
    }
    public function employer_viewchecked()
    {
        print_r($this->input->post('check'));
    }
    public function employer_leaguespage()
   {
       $this->load->model('model_main');
       $this->load->model('model_employer');
       
       $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['drpindustries'] = $this->model_main->get_drpindustries();
       $data['myleagues'] = $this->model_employer->get_myleagues($id);
       $data['createdleagues'] = $this->model_employer->get_createdleagues($id);
       $data['all'] = $this->model_employer->get_allleagues();
        
       $this->employer_header();
       $this->load->view('employer/ELeagues',$data); 
   }
     public function employer_leagueview($lno)
   {
       $this->load->model('model_main');
       $this->load->model('model_employer');
       
       $id = $this->model_main->get_userid($this->session->userdata('email'));
       $data['myleagues'] = $this->model_employer->get_myleagues($id);
       $data['createdleagues'] = $this->model_employer->get_createdleagues($id);
       $data['discs'] = $this->model_employer->get_leagueDiscussions($lno);
       $data['leaguedetails'] = $this->model_employer->get_leagueDetails($lno);
       $data['replies'] = $this->model_employer->get_leagueDetails($lno);
       
       $this->employer_header();
       $this->load->view('employer/ELeagView',$data); 
   }
   public function view_topic($id = -1, $page = -1)
   {
        if(isset($_GET['id']) && isset($_GET['page'])):

            $this->load->model('model_pub');
            $data['discussion'] = $this->model_pub->get_discDetails($_GET['id']);
            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($_GET['id']));
            $data['display'] = $items[$_GET['page']];
            $data['pages'] = count($items);
            $data['current_page'] = $_GET['page'];
            $data['id'] = $_GET['id'];

            $this->employer_header();
            $this->load->view('employer/ELeagDisc', $data);
            return;

        endif;

        if($page < 0):

            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
            $pages = count($items);
            if($pages == 0):
//                echo 'no posts available <a href="'.base_url('macandcheese').'">go back to topic list</a>';
//                return;
                $this->load->model('model_pub');
            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
            $data['discussion'] = $this->model_pub->get_discDetails($id);
            $data['display'] = $items[$page];
            $data['pages'] = count($items);
            $data['current_page'] = $page;
            $data['id'] = $id;
            
            $this->employer_header();
            $this->load->view('employer/ELeagDisc', $data);
            endif;
            $this->view_topic($id, $pages);

        endif;

        if($page > 0):
            $this->load->model('model_pub');
            $this->load->model("model_leagues");
            $items = $this->model_leagues->paginate($this->model_leagues->get_topics($id));
            $data['discussion'] = $this->model_pub->get_discDetails($id);
            $data['display'] = $items[$page];
            $data['pages'] = count($items);
            $data['current_page'] = $page;
            $data['id'] = $id;
            
            $this->employer_header();
            $this->load->view('employer/ELeagDisc', $data);
        endif;

    }
    public function postcomment($dno, $lno)
    {
        $this->load->model('model_employer');
        $this->load->model('model_main');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $repliedno = $dno;
        $disc = $this->input->post('comment');
        $postedby = $id;
        $leagueno = $lno;
        $likes = 0;
        $this->model_employer->post_comment($repliedno, $disc, $postedby, $leagueno, $likes);
        redirect(base_url()."employer/view_topic/". $repliedno);
    }
    public function posttopic($lno)
    {
        $this->load->model('model_employer');
        $this->load->model('model_main');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $disc = $this->input->post('topic');
        $postedby = $id;
        
        $this->model_employer->add_topics($disc, $postedby, $lno);
        redirect(base_url()."employer/employer_leagueview/".$lno);
    }
    public function employer_profilepage()
   {
        $this->load->model('model_pub');
        $this->load->model('model_employer');
        $this->load->model('model_main');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['profile'] = $this->model_pub->get_employerProfile($id);
        $data['postedvacancies'] = $this->model_pub->get_postedVacancies($id);
        $data['events'] = $this->model_pub->get_postedEvents($id);
        $data['leagues'] = $this->model_pub->get_createdLeagues($id);
                
        $this->employer_header();
        $this->load->view("employer/EEmployerProfile",$data);
   }
   // EMPLOYER CALENDAR
 

                
 function view_ecalendar($year = -1, $month = -1){ //CALENDAR
                       
   
     $config = array (
               'show_next_prev'  => TRUE,
               'next_prev_url'   =>  base_url() . 'employer/view_ecalendar'
             );
			// 1. Get current year and month
			$yr = $year == -1 ? date("Y") : $year;
			$mo = $month == -1 ? date("m") : $month;
			
			// Load the javascript
                           $this->load->model('model_main');
                           $this->load->model('model_employer');
                           
                         
                          // $data['apps'] = $this->model_employer->get_jobApplications($jobno);
                           
                           $id = $this->model_main->get_userid($this->session->userdata('email'));
                           $this->employer_header();
                           $this->load->view('employer/ECalendar');
                           echo '<br><font size="6"><div align="center">
                               <strong>Calendar</strong><br><br></font>
                                <font size="4"> <strong>Select Date to view schedule</strong></div><br></font></div>';
                                        //edit here
                               //
			 //  $this->load->view('footer2');
			// Initialize the template 
			$config['template'] = '
                                        
					{table_open}<table style="width:700px"class="table-condensed table-bordered table-striped"border="0" style ="margin-top:40px" align="center" cellpadding="1" cellspacing="10">{/table_open}

					{heading_row_start}<tr>{/heading_row_start}

					{heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
					{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
					{heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

					{heading_row_end}</tr>{/heading_row_end}

					{week_row_start}<tr>{/week_row_start}
					{week_day_cell}<td>{week_day}</td>{/week_day_cell}
					{week_row_end}</tr>{/week_row_end}

					{cal_row_start}<tr>{/cal_row_start}
					{cal_cell_start}<td>{/cal_cell_start}

					{cal_cell_content}<a href="javascript:void(0)" onclick="openWindow({day},' . $yr . ',' . $mo . ',' . $id . ');">{day}</a>{/cal_cell_content}
					{cal_cell_content_today}<div class="highlight"><a href="{content}" target="_blank">{day}</a></div>{/cal_cell_content_today}

					{cal_cell_no_content}{day}{/cal_cell_no_content}
					{cal_cell_no_content_today}<b>{day}</b>{/cal_cell_no_content_today}

					{cal_cell_blank}&nbsp;{/cal_cell_blank}

					{cal_cell_end}</td>{/cal_cell_end}
					{cal_row_end}</tr>{/cal_row_end}

					{table_close}</table>{/table_close}
                                        ';
			
			$this->load->library('calendar', $config);
			$this->load->model('tuna');
                

			// 2. Get the events
			$events = $this->tuna->get_events($id,$yr, $mo);
			$events_arr = array();
				
			foreach($events as $event):
					
				$events_arr[$event->eday] = base_url('employer/view_event2/'.$yr.'/'.$mo.'/'.$event->eday);
				
			endforeach;
				
			// 3. Pass the events and generate the calendar
			echo $this->calendar->generate($yr, $mo, $events_arr);
			
			// Content DIV
			echo '<div id="contentdiv"></div><br>';
 
		}
		
		function view_event2($year, $month, $day){
			
			$this->load->model('tuna');
                        $this->load->model('model_main');
                        $this->load->model('model_employer');
                        $id = $this->model_main->get_userid($this->session->userdata('email'));
			$events = $this->tuna->get_events($id, $year, $month, $day);
			
			// EJ EJ EJ EJ
//			print_r($events);
//			return;
                        
			 echo '<div class="row-fluid">';
                          echo '<div class="span9">';
                        echo '<div class="well" style="margin-top:10px;margin-left:350px">';
			echo "<br><b>Schedule for $month-$day-$year</b> <hr class='hrLeagTab'>";
			echo"  <table style='width:700px'class=''>
                      <thead>
                          <tr>
                          	
                              <th class='span3' style='text-align:center'>Name</th>
                              <th class='span3' style='text-align:center'>Job Title</th>
                              <th class='span2' style='text-align:center'>Status</th>
               
                              <th class='span2' style='text-align:center'>Start</th>
                              <th class='span2' style='text-align:center'>End</th>
                          </tr>
                      </thead>";
			foreach($events as $event):
			echo"    <tbody class='recName'>
                          <tr>
                              
                              <td>
                              	 <a href='#' class='recAppName'>
                                 
                              ";
                         $name = $this->model_employer->get_jsName($event->appid);
                         foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo " ";
                                                      echo $b['lastname'];
                                                  }
                                 echo"</a>
                              </td>
 <td>
                                 $event->jobtitle
                              </td>                              

                              <td>
                                 $event->status
                              </td>
                              
                           
                              
                              <td>
                                 $event->starttime
                              </td>
                              
                              <td>
                                 $event->endtime
                              </td>
                             

                          </tr>
                          
                      </tbody>";				
			
			endforeach;
                echo '<table></div></div></div>';
		}
       
		function add_event(){
			
			$this->load->view('add_form');
			
		}
		
	
                
     public function employer_eventall()
    {
        $this->load->model('model_employer');
        $this->load->model('model_main');
        $this->load->model('model_pub');
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['createdevents'] = $this->model_employer->get_createdevents($id);
        $data['drpindustries'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        $this->employer_header();
        $this->load->view('employer/EEventsUpcoming',$data);
        $this->load->view('footer');
    }
    
     public function employer_evcreated($eno)
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_pub');
        $data['details'] = $this->model_employer->get_eventdetails($eno);    
        $data['attendees'] = $this->model_employer->event_attendees($eno);    
        $this->employer_header();
        $this->load->view('employer/EEventDetailsCreated', $data);
        $this->load->view('footer');
    }
    public function ematch($userid, $eventno)
    {
        $this->load->model('model_employer');
        
        $total_ind = $this->model_employer->getMatchedindustries($userid,$eventno);
        if($total_ind >0)
            return true;
        else
            return false;
    }
        public function employer_evinvite($eventno)
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
       
        $jobseekers = $this->model_employer->get_jobseekers();
        $stack = array(); 
        foreach($jobseekers as $a)
        {
            if($this->ematch($a['appid'], $eventno))
            {
                array_push($stack, $a);
            }
        }
        $final = array();
        foreach ($stack as $a)
        {
           if($this->model_employer->check_if_einvite($a['appid'], $eventno))
           {
                array_push($final, $a);
           }
        }
       
        $data['invites'] = $final;
        $data['eventno'] = $eventno;
        $this->employer_header();
        $this->load->view('employer/EEventInvite',$data);
        $this->load->view('footer2');
    }
    
    public function employer_evcreate()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_pub');
        $id = $this->model_main->get_userid($this->session->userdata('email'));

        $config['upload_path'] = './eventpics/';
        $config['allowed_types'] = 'gif|jpg|png|docx|zip';
        $config['max_size']	= '10000000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $u = $this->upload->data();
        $eventpic= $u['file_name'];
          
         $eventname = $this->input->post('EN');  
         $startdate = $this->input->post('date');
         $timestart = $this->input->post('time');
         $details = $this->input->post('Det');
         $industry = $this->input->post('industry'); 
        
        $eventvenue = $this->input->post('VEN');
        $region = $this->input->post('regionid');
        $city = $this->input->post('cityid');
        
        $sponsor = $this->input->post('SP');
        
        $eventno = $this->model_employer->add_event($eventname,$startdate,$timestart,$id,$details,$industry,$sponsor,$eventpic);   
        $this->model_employer->add_eventvenue($eventno,$eventvenue,$region,$city);
        $this->model_employer->attend_event($id,$eventno);
           
        $this->employer_evcreated($eventno);
    }
    
     public function employer_evupdate($eventno)
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_pub');
        $id = $this->model_main->get_userid($this->session->userdata('email'));

        $config['upload_path'] = './eventpics/';
        $config['allowed_types'] = 'gif|jpg|png|docx|zip';
        $config['max_size']	= '10000000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $u = $this->upload->data();
        $eventpic= $u['file_name'];
          
         $eventname = $this->input->post('EN');  
         $startdate = $this->input->post('date');
         $timestart = $this->input->post('time');
         $details = $this->input->post('Det');
      
        
        $eventvenue = $this->input->post('VEN');
 
        
        $this->model_employer->up_event($eventno,$eventname,$startdate,$timestart,$details,$eventpic);   
        $this->model_employer->up_eventvenue($eventno,$eventvenue);
           
         redirect(base_url()."employer/employer_evcreated/".$eventno);
   
    }
    
     public function employer_lcreate()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_pub');
        $id = $this->model_main->get_userid($this->session->userdata('email'));

        $config['upload_path'] = './leaguepics/';
        $config['allowed_types'] = 'gif|jpg|png|docx|zip';
        $config['max_size']	= '10000000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $u = $this->upload->data();
        $leaguepic= $u['file_name'];
          
         $lname = $this->input->post('LN');  
         $det = $this->input->post('Det');
         $industry = $this->input->post('industry'); 
        

        
        $leagueno = $this->model_employer->add_league($lname,$id,$det,$industry,$leaguepic);   
        $this->model_employer->join_league($leagueno,$id);
           
       redirect(base_url()."employer/employer_leagueview/".$leagueno);
    }
    
 public function lmatch($userid, $leagueno)
    {
        $this->load->model('model_employer');
        
        $total_ind = $this->model_employer->getMatchedindustriesL($userid,$leagueno);
        if($total_ind >0)
            return true;
        else
            return false;
    }
     public function employer_leagueinvite($lno)
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
       
        $jobseekers = $this->model_employer->get_jobseekers();
        $stack = array(); 
        foreach($jobseekers as $a)
        {
            if($this->lmatch($a['appid'], $lno))
            {
                array_push($stack, $a);
            }
        }
        $final = array();
        foreach ($stack as $a)
        {
           if($this->model_employer->check_if_linvite($a['appid'], $lno))
           {
                array_push($final, $a);
           }
        }
       
        $data['invites'] = $final;
        $data['leagueno'] = $lno;
        
        $this->employer_header();
        $this->load->view('employer/ELeagInvite',$data);
        $this->load->view('footer2');
    }
    
    public function invite_league($leagueno)
    {
       $this->load->model('model_employer');
       $userid = $this->input->post('check');
       
       foreach ($userid as $a)
       {
           $id = $this->model_employer->get_userid($a);
           $this->model_employer->add_invleague($id,$leagueno);
       }
        redirect(base_url()."employer/employer_leagueview/".$leagueno);
    }
    
       public function invite_event($eventno)
    {
       $this->load->model('model_employer');
       $userid = $this->input->post('check');
       
       foreach ($userid as $a)
       {
           $id = $this->model_employer->get_userid($a);
           $this->model_employer->add_invevent($id,$eventno);
       }
        redirect(base_url()."employer/employer_evcreated/".$eventno);
    }
    public function setEI($what,$jobno,$applicationid)
    {
        $this->load->model('model_employer');
          $this->load->model('model_main');
       
        
        $data['details'] = $this->model_employer->get_jobdetails($jobno);
        $data['alldetails'] = $this->model_employer->get_alljobdetails($jobno);
        $data['apps'] = $this->model_employer->get_jobApplications($jobno);
        $data['newapplicant'] = $this->model_employer->get_newApplicant($jobno);
        $data['exam'] = $this->model_employer->get_exam($jobno);
        $data['interview'] = $this->model_employer->get_interview($jobno);
        $data['all'] = $this->model_employer->get_allapps($jobno);
        $data['hired'] = $this->model_employer->get_hired($jobno);
        $data['what'] = $what;
        $data['invites'] = $this->model_employer->get_jobInvites($jobno);
        $data['name'] = $this->model_employer->get_ename();
        $data['cert'] = $this->model_employer->get_jobCerts($jobno);
        $data['comp'] = $this->model_employer->get_jobComps($jobno);
        $data['jobno'] = $jobno;
        $data['applicationid'] = $applicationid;
        
        $appid = $this->model_employer->get_appid($applicationid);
        $name = $this->model_employer->get_jsName($appid);
        
        $data['appname'] = $name;
        
        
        $this->employer_header();
        $this->load->view('employer/ESetSched',$data);
        $this->load->view('footer2');
    }
    public function employer_reports()
    {
        $this->employer_header();
        $this->load->view('employer/EReports');
    }
    public function employer_editprofilepage()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
        $this->load->model('model_pub');
        
       
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['profile'] = $this->model_pub->get_employerProfile($id);
        
        $this->employer_header();
        $this->load->view('employer/EUpdateProf',$data);
         $this->load->view("footer");
    }
      public function employer_editprofile()
    {
        $this->load->model('model_main');
        $this->load->model('model_employer');
  
       $userid= $this->model_main->get_userid($this->session->userdata('email'));
       // $userid = $this->model_employer->get_userid($id);
       

           
                $cname = $this->input->post('CName');
                $cb = $this->input->post('CB');
                $cp = $this->input->post('CP');
                $ce = $this->input->post('CE');
                $cn = $this->input->post('CN');
                $br = $this->input->post('Br');
                
        $this->model_employer->update_edetails($userid,$cname,$cb,$cp,$ce,$cn,$br);
            redirect(base_url()."employer/employer_profilepage/");

    }
    
}
?>
