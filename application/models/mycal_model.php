<?php
class Mycal_model extends CI_Model {
	
	var $conf;
	
	function Mycal_model () {
		//parent::Model();
		
		$this->conf = array(
			'start_day' => 'monday',
			'show_next_prev' => true,
			'next_prev_url' => base_url() . 'employer/employer_cal'
		);
		
		$this->conf['template'] = '
			{table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}
			
			{heading_row_start}<tr>{/heading_row_start}
			
			{heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
			{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
			{heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
			
			{heading_row_end}</tr>{/heading_row_end}
			
			{week_row_start}<tr>{/week_row_start}
			{week_day_cell}<td>{week_day}</td>{/week_day_cell}
			{week_row_end}</tr>{/week_row_end}
			
			{cal_row_start}<tr class="days">{/cal_row_start}
			{cal_cell_start}<td class="day">{/cal_cell_start}
			
			{cal_cell_content}
				<div class="day_num">{day}</div>
				<div class="content">{content}</div>
			{/cal_cell_content}
			{cal_cell_content_today}
				<div class="day_num highlight">{day}</div>
				<div class="content">{content}</div>
			{/cal_cell_content_today}
			
			{cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="day_num highlight">{day}</div>{/cal_cell_no_content_today}
			
			{cal_cell_blank}&nbsp;{/cal_cell_blank}
			
			{cal_cell_end}</td>{/cal_cell_end}
			{cal_row_end}</tr>{/cal_row_end}
			
			{table_close}</table>{/table_close}
		';
		
	}
	function get_calendar_data($year, $month) {
        $query = $this->db->query("SELECT DISTINCT DATE_FORMAT(requirementdate, '%Y-%m-%e') AS requirementdate
                                            FROM applications
                                            WHERE requirementdate LIKE '$year-$month%' "); //date format eliminates zeros make
                                                                           //days look 05 to 5
  
                $cal_data = array();
               
                foreach ($query->result() as $row) { //for every date fetch data
                    $a = array();
                    $i = 0;
                    $query2 = $this->db->query("SELECT status
                                                FROM applications
                                                WHERE requirementdate LIKE DATE_FORMAT('$row->requirementdate', '%Y-%m-%d') ");
                                                            //date format change back the date format
                                                            //that fetched earlier
                     foreach ($query2->result() as $r) {
                         $a[$i] = $r->status;     //make data array to put to specific date
                         $i++;                         
                     }
                        $cal_data[substr($row->requirementdate,8,2)] = $a;
                    
                }

                return $cal_data;
                } 
	
//	function get_calendar_data($year, $month) {
//		
//		$query = $this->db->select('requirementdate, status')->from('applications')
//			->like('requirementdate', "$year-$month", 'after')->get();
//			
//		$cal_data = array();
//		
//		foreach ($query->result() as $row) {
//			$cal_data[substr($row->requirementdate,8,2)] = $row->status;
//		}
//		
//		return $cal_data;
//		
//	}
	
	function add_calendar_data($requirementdate, $status) {
		
		if ($this->db->select('requirementdate')->from('applications')
				->where('requirementdate', $requirementdate)->count_all_results()) {
			
			$this->db->where('requirementdate', $requirementdate)
				->update('applications', array(
				'requirementdate' => $requirementdate,
				'status' => $status			
			));
			
		} else {
		
			$this->db->insert('applications', array(
				'requirementdate' => $requirementdate,
				'status' => $status			
			));
		}
		
	}
	
	function generate ($year, $month) {
		
		$this->load->library('calendar', $this->conf);
		
		$cal_data = $this->get_calendar_data($year, $month);
		
		return $this->calendar->generate($year, $month, $cal_data);
		
	}
	
}
