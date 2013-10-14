<!DOCTYPE html>
<html>
<head>


<!-- added c/o chels-->

 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
  
 
 <!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

         

 <!-- end c/o chels-->

<title>Home | e-TESDA: Work</title>
 

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
 
 
 
 
 
 
 

    
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
    
    <!-- c/o chels-->
    
    <script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#test').dataTable({
                "sPaginationType": "full_numbers"
            });
           
       });
        
    </script>
    
    <!--end-->
 
 
 
 
  </head>

  <body>
  
     <div class="navbar navbar-inverse navbar-fixed-top"> <!--start body code-->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo base_url()?>employer/employer_dashboard">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/work-logo.png"  width ="120" ></img></a>
                    
                    <div class="nav" style="margin-left:200px;margin-top:-2px;">
                                <a href="#" class="btn btn-group transBtn" style="margin-left:5px;">
                                <h5 class="media-heading">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="18"> 
                                    <br>Calendar
                                    <input type="hidden" value="<?php echo base_url(); ?>" id="base" />
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="25"> 
                                    <br>Leagues
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> 
                                    <br>Events
                                </h5>
                                </a>
                                <a href="#" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> 
                                    <br>Profile
                                </h5>
                                </a>
                                
                                <a href="<?php echo base_url()?>employer/employer_vacancypage" class="btn btn-group transBtn">
                                    <h5 class="media-heading">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="17"> 
                                        <br>Vacancies
                                    </h5>
                                </a>
                                
                                <a href="<?php echo base_url()?>employer/employer_dashboard" class="btn btn-group transBtn">
                                  <h5 class="media-heading">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_351_book_open.png" width="20"> 
                                      <br>Dashboard
                                  </h5>
                                </a>
                        </div><!--end parallel navs-->
                    <div class="nav-collapse collapse">
                    	
                        <ul class="nav pull-right">
                        	
                        	<li>
                                    <?php
                                    if(count($myvacancies) != 0)
                                    {
                                    ?>
                                        <a data-toggle="modal" href="#postV" class="">
                                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons-halflings-white_addbtn.png" width="15">
                                        Post Vacancy
                                        </a>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <a href="employer_postvacancypage" class="">
                                         <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons-halflings-white_addbtn.png" width="15">
                                        Post Vacancy
                                    </a>
                                    <?php
                                    }
                                    ?>
                    		</li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                	<img src="<?php echo base_url()?>profilepics/<?php echo $pic;?>" width="25" height="15" style="margin-left:-11px;"> 
                                     <?php foreach($name as $a)
                                            {
                                                echo $a['companyName'];
                                            }
                                            ?> 
                                        <b class="caret"></b>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li><a href="#">FAQ</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url()?>logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
               </div> <!--/container fluid-->
               </div> <!--/.navbar-inner -->
               </div> <!--/.navbar -->
               
   <!--postV modal start-->
<div class="modal hide fade" id="postV">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Post Vacancy</h3>
  	</div>
	<div class="modal-body">
		<p class="whatTD"></p>
        
        <div class="row-fluid optionPV">
        	<div class="span6">
                    <form method="post" action="<?php echo base_url()?>employer/employer_repost">
            	<div class="well">
                	<h5 class="media-heading previewColor">| Repost Existing Vacancy</h5>
                    <div style="width:248px;height:150px;overflow:auto;"><!--start scrollable table-->
                    	
                        	<div class="control-group2"><!-- start div Keyword -->
                                <div class="controls">
                                    <table>
                                        <thead>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        </thead>
                                        <tbody>
                                   <?php foreach ($myvacancies as $a)
                                   {
                                       ?>
                                       <tr>
                                       <td><input type="radio" id="recipient" name="jobvacancy" value="<?php echo $a['jobno']?>"></td>
                                       <?php
                                       echo '<td>';
                                       echo $a['jobtitle'];
                                       echo '</td>';
                                       echo '<td>';
                                       echo 'City';
                                       echo ', ';
                                       echo 'Region';
                                       echo '</td><tr>';
                                   }
                                   ?>
                                       </tbody>
                                    </table>
                                </div>
                            </div><!-- end div keyword -->
                    </div><!--end scrollable-->
                    
                    <div align="center" style="margin-top:5px;">
                        <button type="submit" class="btn btn-info btn-mini">Continue</button>
                    </div>
                    
                </div><!--end well-->
                </form>
            </div><!--end span-->
            
            <div class="span1">
           		<p class="pOR">
                	OR
                </p>
            </div><!--end span-->
            
            <div class="span4">
            	<div class="well">
                	<h5 class="media-heading previewColor">| Create a New Vacancy</h5>
                    <div style="width:190px;height:159px;overflow:auto;"><!--start scrollable table-->
                        <div align="center" style="margin-top:15px; margin-left:-38px; " >
                            <br><br>
                            <a href="employer_postvacancypage" class="btn btn-info btn-mini">Post New Vacancy</a>
                        </div>
                    </div><!--end scrollable-->
                </div><!--end well-->
            </div><!--end span-->
        </div><!-end row-fluid-->
	</div>
  
  	<div class="modal-footer">
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
       <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="j<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="j<?php echo base_url()?>assets/bootstrap/js/datatable.js"></script>
<!--postV modal end-->