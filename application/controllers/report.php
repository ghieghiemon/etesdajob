<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
    
	function __construct() 
	{
            parent::__construct();
            $this->load->helper('mpdf');            
        }
        
      
  
    
        //browser localhost/..../report/company_vacancies
        
        
        //  params: 7 2013  dibyaea
 
        // where month(dateposted) = ? and year(dateposted)
        //company_vacancies
        //in_demand_report
        
        function company_vacancies($month, $year){
            
            $this->load->model('model_reports');
            if($month == 0)
            {
                $vacancies = $this->model_reports->get_company_vacancies2($year);
            }
            elseif ($month != 0)
            {
                $vacancies = $this->model_reports->get_company_vacancies($month, $year);
            }
            $mpdf = new mPDF();
            $mpdf->setFooter('{PAGENO}');
            
            
              $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                                
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;JOB VACANCIES REPORT</h3>
                             </div>');
      
             
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
                                if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('<td width="350">Month: ' . $m . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Company</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Location</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Title</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Description</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Effectivity</th>
 			<th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Slots Left</th>
                                
                              
                                </tr>
                             ');
            
            foreach($vacancies as $vacancy):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->companyName . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->city . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->jobtitle . '</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->description . '</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->expirationdate . '</td>
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->vacanciesleft . '</td>

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
            
        }
        
        function companyindustry_vacancies($month, $year,$cert){
            
            $this->load->model('model_reports');
            $this->load->model('model_employer');
            if($month == 0)
            {
                $vacancies = $this->model_reports->get_companyindustry_vacancies2($year,$cert);
            }
            elseif ($month != 0)
            {            
                $vacancies = $this->model_reports->get_companyindustry_vacancies($month, $year,$cert);
            }
            $mpdf = new mPDF();
            $mpdf->setFooter('{PAGENO}');
            
            $certification = $this->model_employer->get_certName($cert);
            
              $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                                
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;EXECUTIVE SUMMARY REPORT</h3>
                             </div>');
      
             
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
                      if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('<td width="350">Month: ' . $m. ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                        <td width="350">Certification: ' . $certification . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Company</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Location</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Title</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Description</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">No. of Applications</th>
 			<th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Hired</th>
                                
                              
                                </tr>
                             ');
            foreach($vacancies as $vacancy):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->companyName . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->city . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->jobtitle . '</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->description . '</td>');
                                    $mpdf->writeHTML('<td align="right" style="font-family:Arial, Helvetica, sans-serif;">'); 
                                    $applicants = $this->model_reports->get_applicationno($vacancy->jobno);
            
                                    foreach($applicants as $a):
                                        print_r($a->count);
                                        $mpdf->writeHTML(''.$a->count.'');
                                    endforeach;
                                            $mpdf->writeHTML('</td>
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">');
                                    $hired = $this->model_reports->get_hiredno($vacancy->jobno);
                                    foreach($hired as $b):
                                        $mpdf->writeHTML(''.$b->count.'');
                                    endforeach;
                                    $mpdf->writeHTML('</td>

                             </tr>');
                              
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
            
        }
        
        
    
       
        public function in_demand_jobs($month, $year){
		
                        $this->load->model('model_reports');
			$this->load->helper('mpdf'); 
                        if($month == 0)
                        {
                            $trends = $this->model_reports->get_indemand_jobs2($year);
                        }
                        elseif ($month != 0)
                        {
                            $trends = $this->model_reports->get_indemand_jobs($month, $year);
                        }
			$mpdf = new mPDF();
                        $mpdf->setFooter('{PAGENO}');
			
                        //$print_r($trends);
                        $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                             
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;IN DEMAND JOBS REPORT</h3>
                              </div>');
           
                        
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
                      if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('
                                    <td width="350">Month: ' . $m . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Certification</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Total Openings</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($trends as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->ncname ." ".$job->level. '</td> 
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $job->totalopenings . '</td> 
                                        
                                   

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
	
  
        }

        
        
          function in_demand_industries($month, $year){
		
                        $this->load->model('model_reports');
			$this->load->helper('mpdf'); 
                        if($month == 0)
                        {
                            $trends = $this->model_reports->get_indemand_industries2( $year);
                        }
                        elseif ($month != 0)
                        {
                            $trends = $this->model_reports->get_indemand_industries($month, $year);
                        }
			$mpdf = new mPDF();
                        $mpdf->setFooter('{PAGENO}');
			
                        //$print_r($trends);
                        $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                               
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;IN DEMAND INDUSTRIES REPORT</h3>
                              </div>');
           
                        
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
                      if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('
                                    <td width="350">Month: ' . $m . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Industry</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Total Openings</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($trends as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->sectorName . '</td> 
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $job->totalopenings . '</td> 
                                    
                                        
                                   

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
	
  
        }
        
           function employment_industry($month, $year){
		
                        $this->load->model('model_reports');
			$this->load->helper('mpdf'); 
                        if($month == 0)
                        {
                            $employment = $this->model_reports->get_employment_industry2($year);
                        }
                        elseif ($month != 0)
                        {
                            $employment = $this->model_reports->get_employment_industry($month, $year);
                        }  
			$mpdf = new mPDF();
                        $mpdf->setFooter('{PAGENO}');
			
                        //$print_r($trends);
                        $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                               
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;EMPLOYMENT PER INDUSTRY REPORT</h3>
                              </div>');
           
                        
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
                      if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('
                                    <td width="350">Month: ' . $m . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Industry</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">No. of Employed TESDA Graduates</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($employment as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->sectorName . '</td> 
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $job->noapplicants . '</td> 
                                    
                                        
                                   

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
	
  
        }
        
            function employment_region($month, $year){
		
                        $this->load->model('model_reports');
			$this->load->helper('mpdf'); 
                        if($month == 0)
                        {
                            $employment = $this->model_reports->get_employment_region2( $year);
                        }
                        elseif ($month != 0)
                        {
                            $employment = $this->model_reports->get_employment_region($month, $year);
                        }
			$mpdf = new mPDF();
                        $mpdf->setFooter('{PAGENO}');
			
                        //$print_r($trends);
                        $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                              
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;EMPLOYMENT PER REGION REPORT</h3>
                              </div>');
           
                        
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
                      if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('
                                    <td width="350">Month: ' . $m . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Region</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">No. of Employed TESDA Graduates</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($employment as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->region . '</td> 
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $job->noapplicants . '</td> 
                                    
                                        
                                   

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
	
  
        }
        function scholar_employment($month, $year, $cert){
		
                        $this->load->model('model_reports');
                        $this->load->model('model_employer');
			$this->load->helper('mpdf'); 
                        if($month == 0)
                        {
                            $employment = $this->model_reports->get_scholars2($year,$cert);
                        }
                        elseif ($month != 0)
                        {
                            $employment = $this->model_reports->get_scholars($month, $year,$cert);
                        }
                        $certification = $this->model_employer->get_certName($cert);
			$mpdf = new mPDF();
                        $mpdf->setFooter('{PAGENO}');
			
                       $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                                
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;EMPLOYMENT OF SCHOLARS REPORT</h3>
                             </div>');
      
             
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                    <td width="350">Certification: ' . $certification . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Name</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Certificate</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Date Acquired</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Employment Status</th>
                              
                                </tr>
                             ');
            foreach($employment as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                   <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->firstname .' '.$job->middlename.'. '.$job->lastname. '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->ncname . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->dateacquired . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' );
                                    if($job->employment == 1)
                                         $mpdf->writeHTML('Employed');
                                    else
                                         $mpdf->writeHTML('Unemployed');

            $mpdf->writeHTML('</td> 

                             </tr>');
                              
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
            
            //print_r($employment);
    
            $mpdf->Output();
            exit;
	
  
        }
           function big_contribute($month, $year){
		
                        $this->load->model('model_reports');
			$this->load->helper('mpdf'); 
                        if($month == 0)
                        {
                           $employment = $this->model_reports->get_bigContributor2($year);
                        }
                        elseif ($month != 0)
                        {
                            $employment = $this->model_reports->get_bigContributor($month, $year);
                        }
                        
            
			$mpdf = new mPDF();
                        $mpdf->setFooter('{PAGENO}');
			
                        //$print_r($trends);
                        $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                              
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;BIGGEST EMPLOYMENT CONTRIBUTOR</h3>
                              </div>');
           
                        
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>');
              
                      if ($month == 1)
                                {
                                    $m = "January";
                                }
                                else if($month == 2)
                                {
                                    $m = "February";
                                }
                                else if($month == 3)
                                {
                                    $m = "March";
                                }
                                else if($month == 4)
                                {
                                    $m = "April";
                                }
                                else if($month == 5)
                                {
                                    $m = "May";
                                }
                                else if($month == 6)
                                {
                                   $m = "June";
                                }
                                else if($month == 7)
                                {
                                    $m = "July";
                                }
                                else if($month == 8)
                                {
                                    $m = "August";
                                }
                                else if($month == 9)
                                {
                                    $m = "September";
                                }
                                else if($month == 10)
                                {
                                    $m = "October";
                                }
                                else if($month == 11)
                                {
                                    $m = "November";
                                }
                                else if($month == 12)
                                {
                                    $m= "December";
                                }
                                else if ($month == 0)
                                {
                                    $m = "";
                                }
                                    $mpdf->WriteHTML('
                                    <td width="350">Month: ' . $m . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                                                        <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Company Name</th>

                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Job Vacancies</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($employment as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->companyName . '</td> 

                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $job->vacancies . '</td> 
                                    
                                        
                                   

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
	
  
        }
        function generate_applicants()
        {
            $this->load->model('model_reports');
            $this->load->model('model_main');
            $year = $this->input->post('year');
            $id = $this->model_main->get_userid($this->session->userdata('email'));
            $report1 = $this->model_reports->get_vacancies($year,$id);
            
            $reportdata = array();
            
            foreach($report1 as $r){
               $applicants = $this->model_reports->get_applicants($r['jobno']);
//               print_r($applicants);
               foreach($applicants as $a){
                   $reportdata[$r['jobtitle']][$a['month']] = $a['count'];
               }
            }
            
            $indexedReportData = array();
            
            $monthCtr = 1;
            
            foreach($reportdata as $key=>$r){
                while($monthCtr <=12){
                    if(isset($r[$monthCtr])){
                        $indexedReportData[$key][$monthCtr] = $r[$monthCtr];
                    }else{
                         $indexedReportData[$key][$monthCtr] = 0;
                    }
                    $monthCtr++;
                }
                $monthCtr = 1;
            }
             $this->load->model('model_employer');
            $name = $this->model_employer->get_ename();
         
            $this->employer_header();
            $this->load->view('employer/EReport1',array('reportData' => $indexedReportData,'name' => $name));
            $this->load->view('footer2');
//            
        }
        public function generate_activeGrads($year)
        {
            $this->load->model('model_reports');
            
            $activegrads = $this->model_reports->get_activeGraduates($year);
           
            $monthctr = 1;
            
            $reportdata = array();
            
            foreach($activegrads as $a){
                $reportdata[$a['month(datereceived)']] = $a['COUNT(appid)'];
            }
            
            //print_r($reportdata);
            
            $indexedReportData = array();
            
            
            while($monthctr <=12){
                if(isset($reportdata[$monthctr])){
                    $indexedReportData[$monthctr] = $reportdata[$monthctr];
                }else{
                    $indexedReportData[$monthctr] = 0;
                }
                $monthctr++;
            }

           // print_r($indexedReportData);
            $data['indexedReportData'] = $indexedReportData;
            
            $this->load->view('tesda/header');
            $this->load->view('employer/EReport2',$data);
            $this->load->view('footer2');
        }
        
        public function annual_hired($year)
        {
            $this->load->model('model_reports');
            
            $annualgrads = $this->model_reports->get_annualGraduates($year-1,$year);
            $hiredgrads = $this->model_reports->get_hiredGraduates($year-1,$year);
            $monthctr = 1;
            
            $reportdata = array();
                 $reportdata2 = array();
            foreach($annualgrads as $a){
                $reportdata[$a['dateacquired']] = $a['count'];
            }
            foreach($hiredgrads as $b){
                $reportdata2[$b['dateacquired']] = $b['count'];
            }
            //print_r($reportdata);
            
            $indexedReportData = array();
            
            
            while($monthctr <= 2){
                if(isset($reportdata[$monthctr])){
                    $indexedReportData[$monthctr] = $reportdata[$monthctr];
                }else{
                    $indexedReportData[$monthctr] = 0;
                }
                $monthctr++;
            }
            
            $indexedReportData2 = array();
            $monthctr = 1;
            
            while($monthctr <=2){
                if(isset($reportdata2[$monthctr])){
                    $indexedReportData2[$monthctr] = $reportdata2[$monthctr];
                }else{
                    $indexedReportData2[$monthctr] = 0;
                }
                $monthctr++;
            }
            $data['indexedReportData'] = $reportdata;
            $data['indexedReportData2'] = $reportdata2;
            $data['year1'] = $year-1;
            $data['year2'] = $year;
//            print_r($annualgrads);
//            echo "<Br><BR>";
//            print_r($hiredgrads);

            $this->load->view('tesda/header');
            $this->load->view('employer/EReport3',$data);
            $this->load->view('footer2');
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
        function generate_cv($appid){
            
            
            $this->load->model('model_employer');
            $this->load->model('model_jobseeker');

            //$data['jobdetails'] = $this->model_employer->get_jobdetails($jobno);   
            $data['appdetails'] = $this->model_employer->get_applicantDetails($appid);  
            //$data['application'] = $this->model_employer->get_applicationDetails($appid,$jobno);  
            $data['educ'] = $this->model_jobseeker->get_educ($appid);
            $data['work'] =$this->model_jobseeker->get_work($appid);
            $data['cert'] = $this->model_jobseeker->get_certifications2($appid);
            
            $mpdf = new mPDF();
            $mpdf->setFooter('{PAGENO}');
            
            
            
              $mpdf->WriteHTML('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.thumbnail11 {
  display: block;
  width:150px;
  padding: 4px;
  margin-top:5px;
  margin-left:20px;
  line-height: 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
     -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
     -moz-transition: all 0.2s ease-in-out;
       -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
}

.hrCV {
	margin: 5px 0;
	margin-top: 12px;
  border: 0;
  border-bottom: 5px solid #000;
}

.resEdHead2 {
	font-size:15px;
	font-weight: bolder;
	margin-left:20px;
}

.resEdDet2 {
	font-size:12px;
	font-style:oblique;
	font-family: Arial, Helvetica, sans-serif;
	margin-left:30px;
}

.resEdSCC {
	margin-left:20px;
}

.resEdCrs {
	font-size:13px;
	font-weight:700;
	color:#000;
}

.table-condensed th,
.table-condensed td {
  padding: 4px 5px;
}

.certTbCV {
	text-align:center;
	width:870px;
	margin-left:22px;
}

.certTbCV td {
  padding: 2px;
  line-height: 20px;
  text-align: center;
  vertical-align: top;
  font-size:12px;
}


.span1 {
  width: 60px;
}

.table td.span5,
.table th.span5 {
  float: none;
  width: 364px;
  margin-left: 0;
}

.table td.span1,
.table th.span1 {
  float: none;
  width: 44px;
  margin-left: 0;
}

.resWrkHead {
	font-size:15px;
	font-weight: bolder;
	margin-left: 20px;
}

.resWrkDet {
	font-size:12px;
	font-style:oblique;
	font-family: Arial, Helvetica, sans-serif;
	margin-left:40px;
}

.resEdYear {
	font-size: 11px;
	color:#333;
}


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
 
 	<link rel="stylesheet" href="css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
        <script src="js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
 
 	<!-- Add jQuery library -->
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="css/jquery.fancybox.js?v=2.1.4"></script>
        
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.4" media="screen" />

 	<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
</head>

<body>
	<div class="row-fluid">
    	<div class="span9" style="margin-left:160px;margin-top:-20px;">
            ');
                                       
            foreach ($data['appdetails'] as $a):
                $userid = $this->model_employer->get_userid($a['appid']);
              $email = $this->model_employer->get_email($userid);
            $mpdf->WriteHTML('<h1>'.$a['firstname'].' '.$a['middlename'].' '.$a['lastname'].'</h1>');
            
            
            $mpdf->WriteHTML('<p style="font-weight:bold">'.
                    $a['birthday'].'<br>'.
             $a['streetno'].' '.$a['brgy'].'<br>'.$a['district'].' '.$a['cityprov'].
                '<br />'.
                $a['cellno'].
                '<br />'.
                $email.
            '</p');
            endforeach;
            $mpdf->WriteHTML('<div class="row-fluid">
            	<div align="right" style="margin-right:10px;margin-top:-150px;">
                	<img src="'.base_url().'profilepics/'.$a['profile_pic'].'" class="thumbnail11" />
            	</div>
            </div><!--end picture-->
            
            <hr class="hrCV">
            <h3>
            	| Educational Background
            </h3>
            	<font class="resEdHead2">
                    TESDA
                </font>
                
                <div class="resEdDet2"><!--start course details-->
      
                    
                    <div class="resEdSCC"> <!--start div SCC-->
                        <table class="table-condensed certTbCV">
                          <thead>
                              <tr>
                              	  
                                  <th class="span1">YEAR</th>
                                  <th class="span5">CERTIFICATE/S</th>
                                  <th class="span5">COMPETENCIES</th>
                              </tr>
                          </thead>
                          
                          <tbody>');
                          foreach ($data['cert'] as $a):  
                          $mpdf->WriteHTML('<tr>
                                  <td>'. 
                                  $a['dateacquired'].
                                  '</td><td>'.
                                      $a['ncname'].
                                  '</td><td>'.
                                      $a['description'].
                                  '</td>
                              </tr>');
                            endforeach;  
                             
                           $mpdf->WriteHTML('</tbody>
                       </table>
                    </div> <!--end div SCC-->
                </div><!--end course details-->
                
                <br />');
                foreach($data['educ'] as $a):
                    if($a['schoolname'] != "TESDA"):
                        $mpdf->WriteHTML('<font class="resEdHead2">'.
                            $a['schoolname']
                        .'</font>

                        <div class="resEdDet2"><!--start course details-->
                            <font class="resEdCrs">
                                Course: '. $a['course']
                            .'</font>

                            <font class="resEdYear">
                                &nbsp;'.$a['startyear'].' - '.$a['endyear'].'<br>
                            </font>

                        </div><!--end course details-->

                        <br />');
                    endif;
                endforeach;
         $mpdf->WriteHTML('<hr class="hrCV">       
         <h3>
            | Work Experience
        </h3>');
        foreach($data['work'] as $a):
            if ($a['present'] == 0)
                $end = $a['end'];
            else $end = 'Present';
        $mpdf->WriteHTML('<font class="resWrkHead">'.
            $a['companyname'].
        '</font>
        
        <br>
        <div class="resWrkDet"><!--start course details-->
            <font class="resEdCrs">
                Position: '.$a['position']
            .'</font>
            
            <font class="resEdYear">
                &nbsp;'.$a['start'].' - '.$end .'<br>
            </font>
            <br>');
        endforeach;
          $mpdf->WriteHTML('<hr class="hrCV">       
         <h3>
            | References
        </h3>');
        foreach($data['appdetails'] as $c):
         
          $mpdf->WriteHTML('<font class="resWrkHead">'.
            $c['ref1name']. '<br>' .
                   $c['ref1relation']. '<br>' .
                 $c['ref1contact']. '<br>' .
        '</font>
        
        <br>
        
            </font>
            <br>');
        endforeach;
        $mpdf->WriteHTML('</div><!--end course details-->
        </div><!--end span-->
    </div><!--end row-fluid-->
</body>
</html>
');
     $mpdf->Output();
     exit;
            
        }

        public function results ($year,$cert)
        {
            $this->load->model('model_reports');
            $this->load->model('model_employer');
            $this->load->model('model_survey');
            
            

            $modules = $this->model_survey->getModules($cert);
            $testbankid = $this->model_reports->getTestBankID($cert);
            $mc = $this->model_reports->getAddQMc($testbankid->testbankID);
            $certification = $this->model_employer->get_certName($cert);
            $numericMonth = date("n");
            
            
             if($numericMonth <6 && $numericMonth >=3){
                 $q1 = $this->model_reports->get_resultsQ1($year,$cert);
                 
                 $aq1 = $this->model_reports->get_AresultsQ1($year,$cert);
                 
             }elseif($numericMonth <9){
                 $q1 = $this->model_reports->get_resultsQ1($year,$cert);
                 $q2 = $this->model_reports->get_resultsQ2($year,$cert);
                 
                  $aq1 = $this->model_reports->get_AresultsQ1($year,$cert);
                 $aq2 = $this->model_reports->get_AresultsQ2($year,$cert);
             }elseif($numericMonth <12){
                $q1 = $this->model_reports->get_resultsQ1($year,$cert);
                $q2 = $this->model_reports->get_resultsQ2($year,$cert);
                $q3 = $this->model_reports->get_resultsQ3($year,$cert);
                
                 $aq1 = $this->model_reports->get_AresultsQ1($year,$cert);
                $aq2 = $this->model_reports->get_AresultsQ2($year,$cert);
                $aq3 = $this->model_reports->get_AresultsQ3($year,$cert);
                
             }elseif($numericMonth <=12){
                 $q1 = $this->model_reports->get_resultsQ1($year,$cert);
                $q2 = $this->model_reports->get_resultsQ2($year,$cert);
                $q3 = $this->model_reports->get_resultsQ3($year,$cert);
                $q4 = $this->model_reports->get_resultsQ4($year,$cert);
                
                 $aq1 = $this->model_reports->get_AresultsQ1($year,$cert);
                $aq2 = $this->model_reports->get_AresultsQ2($year,$cert);
                $aq3 = $this->model_reports->get_AresultsQ3($year,$cert);
                $aq4 = $this->model_reports->get_AresultsQ4($year,$cert);
             }
             
             $openFormQuestions = $this->model_reports->getAddQOf($testbankid->testbankID);
             $openFormResults = $this->model_reports->getAllOpenForm($year,$cert);
            
//             print_r($openFormResults);
             $mpdf = new mPDF();
            $mpdf->setFooter('{PAGENO}');
            
            
$mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                                
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;RESULTS OF SURVEY (USEFUL COURSES)</h3>
                             </div>');
      
             
              $mpdf->WriteHTML('
                  
                <div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                        <td width="350">Course: ' . $certification . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             <h4> Average Rating per Modules </h4>
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Modules</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">1st Quarter</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">2nd Quarter</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">3rd Quarter</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">4th Quarter</th>
                                
                              
                                </tr>
                             ');
            foreach($modules as $a):
                if($numericMonth <6 && $numericMonth >=3): 
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['cocname'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q1[$a['ncoid']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>');
            
               elseif($numericMonth <9 ):
                     $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['modulename'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q1[$a['ncoid']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q2[$a['ncoid']],2) .'</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>');
               
               elseif($numericMonth <12 ):
                     $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['modulename'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q1[$a['ncoid']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q2[$a['ncoid']],2) .'</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q3[$a['ncoid']],2) . '</td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>');
               
               elseif($numericMonth <= 12 ):
                     $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['modulename'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q1[$a['ncoid']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q2[$a['ncoid']],2) .'</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q3[$a['ncoid']],2) . '</td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q4[$a['ncoid']],2) . '</td></tr>');
               
               else:
                  $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['cocname'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td> 
                                   <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td> 
                                     <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td> 
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>'); 
              endif;
              
              
              
              
              
              
              
//                                    $mpdf->writeHTML('<td align="left" style="font-family:Arial, Helvetica, sans-serif;">'); 
//                                    $applicants = $this->model_reports->get_applicationno($vacancy->jobno);
//            
//                                    foreach($applicants as $a):
//                                        print_r($a->count);
//                                        $mpdf->writeHTML(''.$a->count.'');
//                                    endforeach;
//                                            $mpdf->writeHTML('</td>
//                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">');
//                                    $hired = $this->model_reports->get_hiredno($vacancy->jobno);
//                                    foreach($hired as $b):
//                                        $mpdf->writeHTML(''.$b->count.'');
//                                    endforeach;
////                                    $mpdf->writeHTML('</td>
//
//                             </tr>');
                              
                
            endforeach;
            
            $mpdf->writeHTML('</table>');
            
            if(!empty($mc)){
            $mpdf->WriteHTML('
                  
                
                             <h4> Average Rating per Additional Question </h4>
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Question</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">1st Quarter</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">2nd Quarter</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">3rd Quarter</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">4th Quarter</th>
                                
                              
                                </tr>
                             ');
            
            
            
            foreach($mc as $a):
                if($numericMonth <6 && $numericMonth >=3): 
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['question'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq1[$a['itemID']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>');
            
               elseif($numericMonth <9 ):
                     $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                 <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['question'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq1[$a['itemID']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($q2[$a['moduleid']],2) .'</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>');
               
               elseif($numericMonth <12 ):
                     $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['question'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq1[$a['itemID']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq2[$a['itemID']],2) .'</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq3[$a['itemID']],2) . '</td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>');
               
               elseif($numericMonth <= 12 ):
                     $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                  <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['question'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq1[$a['itemID']],2) . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq2[$a['itemID']],2) .'</td>
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq3[$a['itemID']],2) . '</td>
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . round($aq4[$a['itemID']],2) . '</td></tr>');
               
               else:
                  $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $a['question'] . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td> 
                                   <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td> 
                                     <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td> 
                                        <td align="left" style="font-family:Arial, Helvetica, sans-serif;"> N/A </td></tr>'); 
              endif;
            endforeach;
            
            
            
               $mpdf->writeHTML('</table>');
               
               
            }
            if(!empty($openFormQuestions)){
                $mpdf->WriteHTML('
                <br/>
                <div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                <h4>Open Form Questions Results</h4>');
                
                $ctrOF = 0;
                foreach($openFormQuestions as $ofq):
                $ctrOF ++;    
                    
                $mpdf->WriteHTML('
                
                <b>'.$ctrOF.'. '.$ofq['question'].'</b>');
                $aa = '<li>AAA</li>';
               
                 $texts ="";     
                
                    foreach($openFormResults[$ofq['itemID']] as $ofqres):
                        
                        $texts .= '<li>'.$ofqres['text'].'</li>';
                        //$mpdf->WriteHTML('<li>'.$ofqres['text'].'</li>');
                    
                      endforeach;
                  $mpdf->WriteHTML('<ul>'.$texts.'</ul>');
                      
                
                      
                endforeach;
                $mpdf->WriteHTML('</div>');
            }
              
                $mpdf->WriteHTML('</html>');
               
            
        
    
            $mpdf->Output();
            exit;
        }
        public function execsummary($year)
        {
            $this->load->model('model_reports');
            $this->load->model('model_pub');
            $this->load->model('model_main');

            //hiring ratio
            $data['industries'] = $this->model_main->get_industries();
            //for postings
            $postings = $this->model_reports->get_postings($year);
            
            $posting1 = array();
            
            foreach ($postings as $a)
            {
                $posting1[$a['month']] = $a['count'];
            }
            
            $data['posting1'] = $posting1;
            //for partners
            $newParters = $this->model_reports->get_newPartner($year);
            $totalPartners = $this->model_reports->get_totalPartner($year);
            
            $newP = array();
            $totalP = array();
            
            foreach($newParters as $a)
            {
                $newP[$a['month']] = $a['companies'];
            }
            foreach($totalPartners as $a)
            {
                $totalP[$a['month']] = $a['companies'];
            }
            
            $data['newP'] = $newP;
            $data['totalP'] = $totalP;
            
          // $data['industry'] = $this->model_pub->get_industryName($industry);
            $data['year'] = $year;
            
            /* Monthly Grads vs Employed */
            $annualgrads = $this->model_reports->get_monthlyGraduates($year);
            $hiredgrads = $this->model_reports->get_mhiredGraduates($year);
            
            $reportdata = array();
            $reportdata2 = array();
            
            foreach($annualgrads as $a){
                $reportdata[$a['montha']] = $a['count'];
            }
            
            foreach($hiredgrads as $b){
                $reportdata2[$b['montha']] = $b['count'];
            }

            $data['mreportData'] = $reportdata;
            $data['mreportData2'] = $reportdata2;
            
            $ygraduates = array();
            $yhired = array();
            
            foreach($data['industries'] as $a){
                $annualgrads = $this->model_reports->get_cmonthlyGraduates($a['sectorID'],$year);
                if(empty($annualgrads)){
                    array_push($ygraduates, 0);
                }else{
                    array_push($ygraduates, $annualgrads[0]['count']);
                }
            }
            
            foreach($data['industries'] as $a){
                $hiredgrads = $this->model_reports->get_cmhiredGraduates($a['sectorID'],$year);
                //print_r($hiredgrads);
                if(empty($hiredgrads)){
                    array_push($yhired, 0);
                }else{
                    array_push($yhired, $hiredgrads[0]['count']);
                }
            }
            
            $monthlyPostings = array();
            
//            $monthCtr = 1;
//            
////            while($monthCtr <=12){
////                $monthlyPostings[$monthCtr] = $this->model_reports->get_monthlyPostings($monthCtr,$year);
////                $monthCtr++;
////            }
            
             $industriesPostings = array();
            
             foreach($data['industries'] as $a){
             
               $monthCtr = 1;
               $monthlyPostings = array();
           
                    while($monthCtr <=12){
                        $monthlyPostings[$monthCtr] = $this->model_reports->get_monthlyPostings($a['sectorID'],$monthCtr,$year);
                        $monthCtr++;
                    }
                $industriesPostings[$a['sectorID']] = $monthlyPostings;
                    
                    
             }
            $data['industriesPostings'] = $industriesPostings;



            
           // print_r($yhired);
            $data['ygraduates'] = $ygraduates;
            $data['yhired'] = $yhired;
            $data['monthlyPostings'] = $monthlyPostings;
            $this->load->view('tesda/header');
            $this->load->view('tesda/TExecutiveSummary',$data);
            $this->load->view('footer2');
        }
}
