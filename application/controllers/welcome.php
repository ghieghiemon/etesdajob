<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function index(){
           
		   // Load the calendar
		   $this->view_calendar();
		   
		}
        
		// Change the year/month parameter accdg to your preference
		function view_calendar($year = -1, $month = -1){
			
			// 1. Get current year and month
			$yr = $year == -1 ? date("Y") : $year;
			$mo = $month == -1 ? date("m") : $month;
			
			// Load the javascript
			$this->load->view('js');
			
			// Initialize the template 
			$config['template'] = '

					{table_open}<table border="0" cellpadding="1" cellspacing="10">{/table_open}

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

					{cal_cell_content}<a href="javascript:void(0)" onclick="openWindow({day},' . $yr . ',' . $mo . ');">{day}</a>{/cal_cell_content}
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
			$events = $this->tuna->get_events($yr, $mo);
			$events_arr = array();
				
			foreach($events as $event):
					
				$events_arr[$event->eday] = base_url('welcome/view_event/'.$yr.'/'.$mo.'/'.$event->eday);
				
			endforeach;
				
			// 3. Pass the events and generate the calendar
			echo $this->calendar->generate($yr, $mo, $events_arr);

		}
		
		function view_event($year, $month, $day){
			
			$this->load->model('tuna');
			$events = $this->tuna->get_events($year, $month, $day);
			
			echo "<b>Events for $month-$day-$year</b><br><hr>";
			
			foreach($events as $event):
			
				echo $event->status . ' ' . $event->requirementdate;
				echo '<br>';
			
			endforeach;

		}
		
		function add_event(){
			
			$this->load->view('add_form');
			
		}
		
		function add_event_handler(){
			
			$this->load->model('tuna');
			$this->tuna->add_event($this->input->post('datetime'), $this->input->post('event'));
			redirect('welcome');
			
		}
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */