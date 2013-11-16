<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {
    
	function __construct() 
	{
		parent::__construct();
	}
        
       public function generate_report()
        {
            $type = $this->input->post('reporttype');
            $month = $this->input->post('month');
            $year = $this->input->post('year');
            //print_r($type);
            if( $type == 2)
            {
                //echo "IN DEMAND JOBS";
                redirect('report/in_demand_jobs/'.$month.'/'.$year);
            }else if($type  == 3)
            {
                redirect('report/in_demand_industries/'.$month.'/'.$year);
            }else if ($type == 1)
            {
                redirect('report/company_vacancies/'.$month.'/'.$year);
            }else if ($type == 4)
            {
                redirect('report/employment_industry/'.$month.'/'.$year);
            }else if ($type == 5)
            {
                redirect('report/employment_region/'.$month.'/'.$year);
            }
        }
        
}

/* End of file banana.php */
/* Location: ./application/controllers/banana.php */