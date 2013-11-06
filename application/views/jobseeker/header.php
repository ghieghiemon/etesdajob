<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

<title>My Applications | e-TESDA: Work</title>


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
 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
 	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
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
                    <a class="brand" href="<?php echo base_url()?>jobseeker/jobseeker_myappspage">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/work-logo.png"  width ="120" ></img></a>
                    
                    <div class="nav" style="margin-left:250px;margin-top:-2px;">
                                  <a href="<?php echo base_url()?>eventcal" class="btn btn-group transBtn">
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
                                
                                <a href="<?php echo base_url()?>jobseeker/jobseeker_eventspage" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> 
                                    <br>Events
                                </h5>
                                </a>
                                
                                <a href="<?php echo base_url()?>jobseeker/jobseeker_jobmarketpage" class="btn btn-group transBtn">
                                    <h5 class="media-heading">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="17"> 
                                        <br>Job Market
                                    </h5>
                                </a>
                                
                                <a href="<?php echo base_url()?>jobseeker/jobseeker_myappspage" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="<?php echo base_url()?>assets/bootstrap//img/icons/glyphicons_144_folder_open.png" width="25"> 
                                    <br>My Applications
                                </h5>
                                </a>
                                
                                
                        </div><!--end parallel navs-->
                    <div class="nav-collapse collapse">
                    	
                        <ul class="nav pull-right">
                        	
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                	<img src="<?php echo base_url()?>profilepics/<?php echo $pic;?>" width="25" height="15" style="margin-left:-11px;"> 
                                            <?php foreach($name as $a)
                                            {
                                                echo $a['firstname'];
                                                echo " ";
                                                echo $a['lastname'];
                                            }
                                            ?> 
                                        <b class="caret"></b>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li><a href="#">FAQ</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url()?>main/logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
               </div> <!--/container fluid-->
               </div> <!--/.navbar-inner -->
               </div> <!--/.navbar -->
               
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
    <script src="j<?php echo base_url()?>assets/bootstrap/s/bootstrap.min.js"></script>