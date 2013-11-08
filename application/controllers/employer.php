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
                <table class="tableUR2b table-hover table-condensed table-stripedB">
                    <thead>
                        <tr>
                            <th class="span2" style="text-align:center">Name</th>
                            <th class="span1" style="text-align:center">Age</th>
                            <th class="span1" style="text-align:center">Sex</th>
                            <th class="span2" style="text-align:center">Certification</th>
                            <th class="span1" style="text-align:center">Competencies</th>
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
                          echo '<font class="more">
                                        more...
                                    </font>
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
                    <div class="modal-footer">
                        <a id="confirm" href="#changeStatus" class="btn btn-info" data-toggle="modal">Confirm</a>
                        <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
                    </div>';
        
    }
    public function employer_dashboard()
    {
        $this->employer_header();
        $this->load->model('model_main');
        $this->load->model('model_employer');
        
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['briefcase'] = $this->model_employer->employer_briefcase($id);
        $data['newapplicant'] = $this->model_employer->get_allNewApplicant($id);
//        $data['all'] = $this->model_employer->get_allApplications($id);
        $data['invites'] = $this->model_employer->get_jobInvitesApps($id);
        
        $this->load->view('employer/EDash',$data);
       // $this->load->view('footer');
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
    public function match($jobno, $id)
    {
        $this->load->model('model_main');
        $this->load->model('model_jobseeker');
        $matchedCert = $this-> model_jobseeker->get_matchedCert($jobno, $id);
        $requiredCert = $this-> model_jobseeker->get_jobcert($jobno);
        $matchedComp = $this-> model_jobseeker->get_matchedComp($jobno, $id);
        $requiredComp = $this-> model_jobseeker->get_jobcomp($jobno);
        
        if(!($matchedCert < $requiredCert))
        {
//              return true;
            if(!($matchedComp < $requiredComp))
            {
                return true;
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

    public function employer_postvacancy()
    {
       $this->load->model('model_main');
       $this->load->model('model_employer');
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

       if(count($co)>=0)
       {
            foreach ($co as $a)
            {
                $this->model_employer->add_competencies($jobpost_id, $a);
            }
       }


         if(count($ce)>=0)
      {
          foreach ($ce as $a)
          {
             $this->model_employer->add_certifications($jobpost_id, $a);
          }
      }
      
      //invite
      
        $jobseeker_list = $this->model_employer->get_jobseekers();
        $stack = array(); 
        foreach($jobseeker_list as $seeker)
        {
            if($this->match($jobpost_id, $seeker['userid']))
            {
                array_push($stack, $seeker['userid']);
            }
        }
        
        $data  = array();
       foreach ($stack as $a)
       {
           $name =$this->model_main->get_jsname($a);
           
           $row['name'] = $name;
           $row['appid'] = $a;
           $row['skills'] = $this->model_main->get_jsskills($a);
           $row['competencies'] = $this->model_main->get_jscomp($a);
           $row['details'] = $this->model_main->get_jsdetails($a);
           //$row['certifications'] = 
           if($this->model_main->check_if_invite($a, $jobpost_id))
           {
                array_push($data, $row);
           }
       }
       
       
       $invite['invites'] = $data;
       $invite['jobno'] = $jobpost_id;
       
      $this->employer_header();
     $this->load->view("employer/EInviteJS",$invite);

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
        
        $data['details'] = $this->model_employer->get_jobdetails($jobno);
        $data['apps'] = $this->model_employer->get_jobApplications($jobno);
        $data['newapplicant'] = $this->model_employer->get_newApplicant($jobno);
        $data['exam'] = $this->model_employer->get_exam($jobno);
        $data['interview'] = $this->model_employer->get_interview($jobno);
        $data['all'] = $this->model_employer->get_allapps($jobno);
        $data['hired'] = $this->model_employer->get_hired($jobno);
        $data['invites'] = $this->model_employer->get_jobInvites($jobno);
        $data['cert'] = $this->model_employer->get_jobCerts($jobno);
        $data['comp'] = $this->model_employer->get_jobComps($jobno);
        
        $this->employer_header();
        $this->load->view('employer/EAppsPerJob',$data);
     //   $this->load->view('footer');
    }
    public function employer_vacancypage()
    {
        $this->load->model('model_employer');
        $this->load->model('model_main');
        
        $id = $this->model_main->get_userid($this->session->userdata('email'));
        $data['myvacancies'] = $this->model_employer->get_myvacancies($id);
        $data['expired'] = $this->model_employer->get_myvacanciesExpired($id);
        $data['closed'] = $this->model_employer->get_myClosedvacancies($id);
        $this->employer_header();
        $this->load->view('employer/EVacancies',$data);
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
        $this->load->model('model_employer');
        $this->load->model('model_jobseeker'); 
        $data['cert'] = $this->model_employer->getAllComp();  
        $data['comp'] = $this->model_employer->getAllCerts();
        $jobno = $this->input->post('jobvacancy');   
        $data['jobdetails'] = $this->model_jobseeker->get_jobdetails($jobno);   
        $data['cert'] = $this->model_employer->getAllComp();  
        $data['comp'] = $this->model_employer->getAllCerts();
        $job = $this->model_jobseeker->get_jobdetails($jobno);
        $data['jobdetails'] = $job;
        $data['industry'] = $this->model_main->get_drpindustries();
        $data['regions'] = $this->model_main->get_regions();
        foreach ($job as $a)
        {
        $city = array('cityid'=> $a['city']);
        }
        $this->session->set_userdata($city);
        $this->employer_updatevacancy($data);

     }
    
//     public function employer_repost()
//    {
//        $this->load->model('model_main');
//        $this->load->model('model_employer');
//        $this->load->model('model_jobseeker');
//        $jobno = $this->input->post('jobvacancy');   
//        $data['cert'] = $this->model_employer->getAllComp();  
//        $data['comp'] = $this->model_employer->getAllCerts();
//
//        $job = $this->model_jobseeker->get_jobdetails($jobno);
//        $data['jobdetails'] = $job;
//
//        $data['jobdetails'] = $this->model_jobseeker->get_jobdetails($jobno);
//		print_r($data['jobdetails']);
//
//        $data['industry'] = $this->model_main->get_drpindustries();
//        $data['regions'] = $this->model_main->get_regions();
//        foreach ($job as $a)
//        {
//            $city = array('cityid'=> $a['city']);
//        }
//        $this->session->set_userdata($city);
//        $this->employer_updatevacancy($data);
//	
//    }

    public function employer_checkvalidrepost()
	{
        $this->load->model('model_main');
       

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
    public function employer_changeStatus()
    {
        @session_start();
        $this->load->model('model_employer'); 
        $status = $this->input->post('group1');
        $day =  $this->input->post('day');
        $month =  $this->input->post('month');
        $year = $this->input->post('year');
        $time = $this->input->post('time');
        $date = $month.",".$day.",".$year; 
        $location = "Manila";
        
        $ids = $_SESSION['ids'];
        
        foreach ($ids as $a)
        {
            $jobno = $this->model_employer->get_jobno($a);
            if ($status == "Hired")
            {
                $this->model_employer->fill_vacancy($jobno);
                $notif = "Hired";
            } else if ($status == "Exam")
            {
                $notif = "Exam";
            } else if ($status == "Interview")
            {
                $notif = "Interview";
            } else if ($status == "Denied")
            {
                $notif = "Denied";
            }
            $this->model_employer->change_status($a,$status,$date,$time,$location);
            $this->model_employer->add_notification($a,$notif,$jobno);
        }
        
        $this->employer_appsperjob($jobno);
    }
    public function employer_viewchecked()
    {
        print_r($this->input->post('check'));
    }
     public function employer_cal($jobno,$appno) {
		$year = null;
                $month = null;
		if (!$year) {
			$year = date('Y');
		}
		if (!$month) {
			$month = date('m');
		}
		
		$this->load->model('Mycal_model');
		
		if ($day = $this->input->post('day')) {
			$this->Mycal_model->add_calendar_data(
				"$year-$month-$day",
				$this->input->post('data')
			);
		}

		$data['calendar'] = $this->Mycal_model->generate($year, $month);
		$this->employer_header();
		$this->load->view('employer/EAppsPerJobChangeStat', $data);
		
	}
    
    // EVENT CALENDAR
    function employer_calendar($year = null, $month = null, $day = null){
                $this->load->model('model_calendar', 'evencal');
		$this->load->library('calendar', $this->_setting());
                
		$year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
		$day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
		
		$date      = $this->evencal->getDateEvent($year, $month);
		$cur_event = $this->evencal->getEvent($year, $month, $day);
		$data      = array(
						'notes' => $this->calendar->generate($year, $month, $date),
						'year'  => $year, 
						'mon'   => $month,
						'month' => $this->_month($month),
						'day'   => $day,
						'events'=> $cur_event
					);
		$this->load->view('employer/ECalendar', $data);
	}
	
	// for convert (int) month to (string) month in Indonesian
	function _month($month){
                $this->load->model('model_calendar', 'evencal');
		$this->load->library('calendar', $this->_setting());
		$month = (int) $month;
		switch($month){
			case 1 : $month = 'Januari'; Break;
			case 2 : $month = 'Februari'; Break;
			case 3 : $month = 'Maret'; Break;
			case 4 : $month = 'April'; Break;
			case 5 : $month = 'Mei'; Break;
			case 6 : $month = 'Juni'; Break;
			case 7 : $month = 'Juli'; Break;
			case 8 : $month = 'Agustus'; Break;
			case 9 : $month = 'September'; Break;
			case 10 : $month = 'Oktober'; Break;
			case 11 : $month = 'November'; Break;
			case 12 : $month = 'Desember'; Break;
		}
		return $month;
	}
	
	// get detail event for selected date
	function detail_event(){
                $this->load->model('model_calendar');
		$this->load->library('calendar', $this->_setting());
                
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$data = $this->evencal->getEvent($this->input->post('year'), $this->input->post('mon'), $this->input->post('day'));
			if($data == null){
				echo json_encode(array('status' => false, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
			}else{			
				echo json_encode(array('status' => true, 'data' => $data));
			}
		}
	}
	
	// popup for adding event
	function add_event(){
                $this->load->model('model_calendar');
		$this->load->library('calendar', $this->_setting());
		$data = array(
					'day'   => $this->input->post('day'),
					'mon'   => $this->input->post('mon'),
					'month' => $this->_month($this->input->post('mon')),
					'year'  => $this->input->post('year'),
				);
		$this->load->view('employer/ECalendarAdd', $data);
	}
	
	// do adding event for selected date
	function do_add(){
                $this->load->model('model_calendar', 'evencal');
		$this->load->library('calendar', $this->_setting());
                
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
		$this->form_validation->set_rules('hour', 'Hour', 'trim|required|xss_clean');
		$this->form_validation->set_rules('minute', 'Minute', 'trim|required|xss_clean');
		$this->form_validation->set_rules('event', 'Event', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$this->evencal->addEvent($this->input->post('year'), 
											 $this->input->post('mon'), 
											 $this->input->post('day'), 
											 $this->input->post('hour').":".$this->input->post('minute').":00",
											 $this->input->post('event'));
			echo json_encode(array('status' => true, 'time' => $this->input->post('time'), 'event' => $this->input->post('event')));
		}
	}
	
	// delete event
	function delete_event(){
                $this->load->model('model_calendar', 'evencal');
		$this->load->library('calendar', $this->_setting());
                
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
		$this->form_validation->set_rules('del', 'ID', 'trim|required|is_natural_no_zero|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false));
		}else{
			$rows = $this->evencal->deleteEvent($this->input->post('year'),$this->input->post('mon'),$this->input->post('day'), $this->input->post('del'));
			if($rows > 0){
				echo json_encode(array('status' => true, 'row' => $rows));
			}else{
				echo json_encode(array('status' => true, 'row' => $rows, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
			}
		}
	}
	
	// same as index() function
	function detail($year = null, $month = null, $day = null){
                $this->load->model('model_calendar', 'eventcal');
		$this->load->library('calendar', $this->_setting());
                
		$year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
		$day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
		
		$date      = $this->evencal->getDateEvent($year, $month);
		$cur_event = $this->evencal->getEvent($year, $month, $day);
		$data 	   = array(
						'notes' => $this->calendar->generate($year, $month, $date),
						'year'  => $year,
						'mon'   => $month,
						'month' => $this->_month($month),
						'day'   => $day,
						'events'=> $cur_event
					);
		$this->load->view('employer/ECalendar', $data);
	}
	
	// setting for calendar
	function _setting(){
		return array(
			'start_day' 		=> 'monday',
			'show_next_prev' 	=> true,
			'next_prev_url' 	=> site_url('employer/employer_calendar'),
			'month_type'   		=> 'long',
            'day_type'     		=> 'short',
			'template' 			=> '{table_open}<table class="date">{/table_open}
								   {heading_row_start}&nbsp;{/heading_row_start}
								   {heading_previous_cell}<caption><a href="{previous_url}" class="prev_date" title="Previous Month">&lt;&lt;Prev</a>{/heading_previous_cell}
								   {heading_title_cell}{heading}{/heading_title_cell}
								   {heading_next_cell}<a href="{next_url}" class="next_date"  title="Next Month">Next&gt;&gt;</a></caption>{/heading_next_cell}
								   {heading_row_end}<col class="weekday" span="5"><col class="weekend_sat"><col class="weekend_sun">{/heading_row_end}
								   {week_row_start}<thead><tr>{/week_row_start}
								   {week_day_cell}<th>{week_day}</th>{/week_day_cell}
								   {week_row_end}</tr></thead><tbody>{/week_row_end}
								   {cal_row_start}<tr>{/cal_row_start}
								   {cal_cell_start}<td>{/cal_cell_start}
								   {cal_cell_content}<div class="date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content}
								   {cal_cell_content_today}<div class="active_date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content_today}
								   {cal_cell_no_content}<div class="no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content}
								   {cal_cell_no_content_today}<div class="active_no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content_today}
								   {cal_cell_blank}&nbsp;{/cal_cell_blank}
								   {cal_cell_end}</td>{/cal_cell_end}
								   {cal_row_end}</tr>{/cal_row_end}
								   {table_close}</tbody></table>{/table_close}');
	}
}
    
?>
