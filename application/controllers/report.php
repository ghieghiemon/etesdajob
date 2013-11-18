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
            $vacancies = $this->model_reports->get_company_vacancies($month, $year);
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
                                <tr>
                                    <td width="350">Month: ' . $month . ' &nbsp;</td>
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
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->vacanciesleft . '</td>

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
            $vacancies = $this->model_reports->get_companyindustry_vacancies($month, $year,$cert);
            $mpdf = new mPDF();
            $mpdf->setFooter('{PAGENO}');
            
            $certification = $this->model_employer->get_certName($cert);
            
              $mpdf->WriteHTML('<html><div style="text-align:center;">
                             
                              
                              <img src="' . base_url() . 'assets/img/tesda.jpg" width="30" height="30" style="margin-top:2%;">   
                                
                              <h4 style="margin-top:0.5%;margin-bottom:0%;font-family:Arial, Helvetica, sans-serif;">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</h4>
                              <span style="margin-top:-1.7%;font-family:Arial, Helvetica, sans-serif;">East Service Road, South Superhighway, Taguig City</span>
                              <h3 style="margin-top:1%;margin-bottom:1%;font-family:Arial, Helvetica, sans-serif;width:700px;background-color:#606060;color:#FFFFFF;">&nbsp;JOB VACANCIES REPORT</h3>
                             </div>');
      
             
              $mpdf->WriteHTML('<div style="text-align:left;font-family: Arial, Helvetica, sans-serif;position:relative;">
                             <table>
                              <tbody>
                                <tr>
                                    <td width="350">Month: ' . $month . ' &nbsp;</td>
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
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->vacanciesleft . '</td>

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
            
        }
        
        
    
       
        public function in_demand_jobs($month, $year){
		
                        $this->load->model('model_reports');
			$this->load->helper('mpdf'); 
                        $trends = $this->model_reports->get_indemand_jobs($month, $year);
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
                                <tr>
                                    <td width="350">Month: ' . $month . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Job Title</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Industry</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">No. of Applicants</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($trends as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->jobtitle . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->sectorName . '</td> 
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $job->noapplicants . '</td> 
                                        
                                   

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
                        $trends = $this->model_reports->get_indemand_industries($month, $year);
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
                                <tr>
                                    <td width="350">Month: ' . $month . ' &nbsp;</td>
                                    <td width="350">Year: ' . $year . ' &nbsp;</td>
                                </tr>
                                
                              </tbody>
                              
                              </table>
                              </div>
                             
                                      <table border="1" style="border-collapse:collapse;width:700px;margin-top:1.5%;">
                              <tr>
                        
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">Industry</th>
                                <th style="font-family:Arial, Helvetica, sans-serif;background-color:#606060;color:#FFFFFF;">No. of Applicants</th>
                              
                                
                              
                                </tr>
                             ');
            
            foreach($trends as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->sectorName . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->noapplicants . '</td> 
                                    
                                        
                                   

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
                        $employment = $this->model_reports->get_employment_industry($month, $year);
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
                                <tr>
                                    <td width="350">Month: ' . $month . ' &nbsp;</td>
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
            
            foreach($industry as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->sectorName . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->noapplicants . '</td> 
                                    
                                        
                                   

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
                        $employment = $this->model_reports->get_employment_region($month, $year);
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
                                <tr>
                                    <td width="350">Month: ' . $month . ' &nbsp;</td>
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
            
            foreach($region as $job):
                
               $mpdf->writeHTML('
                                <tr style="align:center;">
                                    
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->sectorName . '</td> 
                                    <td align="left" style="font-family:Arial, Helvetica, sans-serif;">' . $job->noapplicants . '</td> 
                                    
                                        
                                   

                                </tr>
                                ');
                
            endforeach;
            
            $mpdf->writeHTML('</table></html>');
        
    
            $mpdf->Output();
            exit;
	
  
        }





}
