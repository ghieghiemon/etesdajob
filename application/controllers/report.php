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
                                    <td align="right" style="font-family:Arial, Helvetica, sans-serif;">' . $vacancy->vacanciesleft . '</td>

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

        function generate_cv($appid){
            
            
            $this->load->model('model_employer');
            $this->load->model('model_jobseeker');

            //$data['jobdetails'] = $this->model_employer->get_jobdetails($jobno);   
            $data['appdetails'] = $this->model_employer->get_applicantDetails($appid);  
            //$data['application'] = $this->model_employer->get_applicationDetails($appid,$jobno);  
            $data['educ'] = $this->model_jobseeker->get_educ($appid);
            $data['work'] =$this->model_jobseeker->get_work($appid);
            
            $mpdf = new mPDF();
            $mpdf->setFooter('{PAGENO}');
            
            
            
              $mpdf->WriteHTML('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
            foreach ($appdetails as $a):
            $mpdf->WriteHTML('<h1>'.$a['firstname'].'</h1>');
            endforeach;
            $mpdf->WriteHTML('
            
            <p style="font-weight:bold">
            	12 BC Marconi St. Makati City 1890
                <br />
                09179231212
                <br />
               	ghieguerrero@gmail.com
            </p>
            
            <div class="row-fluid">
            	<div align="right" style="margin-right:10px;margin-top:-150px;">
                	<img src="assets/img/user.png" class="thumbnail11" />
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
                    <font class="resEdCrs">
                        Course: Hotel & Restaurant Management
                    </font>
                    
                    
                    <div class="resEdSCC"> <!--start div SCC-->
                        <table class="table-condensed certTbCV">
                          <thead>
                              <tr>
                              	  
                                  <th class="span1">YEAR</th>
                                  <th class="span5">CERTIFICATE/S</th>
                                  <th class="span5">COMPETENCIES</th>
                              </tr>
                          </thead>
                          
                          <tbody>
                              <tr>
                                  <td>
                                      2010
                                  </td>
                                  
                                  <td>
                                      2D Game Art Development
                                  </td>
                                  
                                  <td>
                                      Develop GUI, Create Storyboard
                                  </td>
                                  
                              </tr>
                              
                              <tr>
                                  <td>
                                      2011
                                  </td>
                                  
                                  <td>
                                      3D Game Art Development
                                  </td>
                                  
                                  <td>
                                      Develop GUI, Create Storyboard, Learn 3D animation
                                  </td>
                              </tr>
                          </tbody>
                       </table>
                    </div> <!--end div SCC-->
                </div><!--end course details-->
                
                <br />
                <font class="resEdHead2">
                    MANILA UNIVERSITY
                </font>
                
                <div class="resEdDet2"><!--start course details-->
                    <font class="resEdCrs">
                        Course: Hotel & Restaurant Management
                    </font>
                    
                    <font class="resEdYear">
                        &nbsp;2009 - 2010 <br>
                    </font>
                    
                </div><!--end course details-->
                
         <br />
         <hr class="hrCV">       
         <h3>
            | Work Experience
        </h3>
        
        <font class="resWrkHead">
            7TH MEDIA DESIGN STUDIO
        </font>
        
        <br>
        <div class="resWrkDet"><!--start course details-->
            <font class="resEdCrs">
                Position: 2D Game Art Developer
            </font>
            
            <font class="resEdYear">
                &nbsp;2011 - 2012 <br>
            </font>
            
        </div><!--end course details-->
        </div><!--end span-->
    </div><!--end row-fluid-->
</body>
</html>
');
        
    
            $mpdf->Output();
            exit;
            
        }



}
