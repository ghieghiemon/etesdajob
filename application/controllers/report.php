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
            $data['cert'] = $this->model_jobseeker->get_certifications($appid);
            
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
        $mpdf->WriteHTML('</div><!--end course details-->
        </div><!--end span-->
    </div><!--end row-fluid-->
</body>
</html>
');
     $mpdf->Output();
     exit;
            
        }



}
