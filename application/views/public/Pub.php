<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

<title>Welcome! | e-TESDA: Work</title>


    <link href="<?php echo base_url()?>assets/css/bootstrap-responsive.css" rel="stylesheet">

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
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
 	<!-- Add jQuery library -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/css/jquery.fancybox.js?v=2.1.4"></script>
        
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/jquery.fancybox.css?v=2.1.4" media="screen" />

 	<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
 
  </head>

  <body>
  <!--login modal-->
  <div class="modal hide fade" id="login">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Login</h3>
  		</div>
        
  		<div class="modal-body">
        <form method="post" action='<?php echo base_url('main/login_validation'); ?>' name="">
            <p><input type="text" class="span3" name="email" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="userpassword" id="userpassword" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Login</button>
             
                <a href="#">Forgot Password?</a>
            </p>
   	 	</form>
        </div>
        
        <div class="modal-footer">
    		Not a member?
    		<a href="#">Register</a>
 		</div>
	</div>
  <!--end login modal-->
     <div class="navbar navbar-inverse navbar-fixed-top"> <!--start body code-->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#p">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/work-logo.png"  width ="120" ></img></a>
                    <?php echo validation_errors()?>
                    
                    <div class="nav-collapse collapse">
                    	
                        <ul class="nav pull-right">
                        	
                            <li class="dropdown">
                                <ul class="nav pull-right">
                                    <li class="dropdown">
                                        <li><a data-toggle="modal" href="#login">Login</a></li>
                                        <li><a href="#"> Create Account </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
               </div> <!--/container fluid-->
               </div> <!--/.navbar-inner -->
               </div> <!--/.navbar -->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellUpMarg">
            	<h6 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
                </h6>
            	
                <div style="width:280px;height:150px;overflow:auto;"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStyleQS">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStyleQS2">
                            <input type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

					<div class="myStyle2QS">
                        <select>
                            <option>Agriculture & Fishery</option>
                            <option>Automotive & Land Transportation</option>
                            <option>Construction</option>
                            <option>Decorative Arts</option>
                        </select>
                    </div>
                    
                    <div class="myStyle2QS2">
                        <select name="Region">
                            <option>NCR</option>
                            <option>Region I</option>
                        </select>
                        
                        <select name="City">
                        <option>Pasig</option>
                        <option>Makati</option>
                  	</select>
                    </div>
                    
                    <div align="right">
                    	<a href="#" class="btn btn-info btn-mini">
                        	Search
                        </a>
                    </div>
                    
                </div><!--end scrollable-->
            </div><!--end well-->
            
            <div class="row-fluid">
            	<div class="span6">
                	<div class="well wellUpMarg">
                    	<h6 class="media header"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_037_coins.png" width="15" height="15">&nbsp;Top Companies</h6>
                        <div class="row-fluid"> <!--start 1st row fluid top companies-->
                               <div class="span6">
                                  <a href="#">
                                      <img  src="<?php echo base_url()?>assets/bootstrap/img/a1.jpg" class="TcompanyB2" title="P&G">
                                  </a>
                              </div> <!--end span-->
                     
                              <div class="span6">
                                  <a href="#">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/a2.jpg" class="TcompanyB2" title="Nestle">
                                  </a>
                              </div> <!--end span-->
                        </div><!--end 1st row fluid top companies-->
                        
                        <div class="row-fluid"> <!--start 1st row fluid top companies-->
                               <div class="span6">
                                  <a href="#">
                                      <img  src="<?php echo base_url()?>assets/bootstrap/img/a3.jpg" class="TcompanyB2" title="Carlson">
                                  </a>
                              </div> <!--end span-->
                     
                              <div class="span6">
                                  <a href="#">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/a4.jpg" class="TcompanyB2" title="Meralco">
                                  </a>
                              </div> <!--end span-->
                        </div><!--end 2nd row fluid top companies-->
           
                    </div><!--end well-->
                </div><!--end span top companies-->
                
                <div class="span6">
                	<div class="well wellUpMarg">
                    	<h6 class="media header fjs">Featured Job Seekers</h6>
                        <div class="row-fluid"> <!--start 1st row fluid featured JS-->
                               <div class="span6">
                                  <a href="#">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/user.png" class="TcompanyB3" title="Angelica Guerrero">
                                  </a>
                              </div> <!--end span-->
                     
                              <div class="span6">
                                  <a href="#">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/user.png" class="TcompanyB3" title="Shen Layug">
                                  </a>
                              </div> <!--end span-->
                        </div><!--end 1st row fluid featured JS-->
                        
                        <div class="row-fluid"> <!--start 1st row fluid featured JS-->
                               <div class="span6">
                                  <a href="#">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/user.png" class="TcompanyB3" title="Chelsea Oray">
                                  </a>
                              </div> <!--end span-->
                     
                              <div class="span6">
                                  <a href="#">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/user.png" class="TcompanyB3" title="Dyanne Ocampo">
                                  </a>
                              </div> <!--end span-->
                        </div><!--end 2nd row fluid featured JS-->
           
                    </div><!--end well-->
                </div><!--end span featured JS-->
            </div><!--end row-fluid-->
            
            <div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> Events
                </h5>
                
                <div style="width:280px;height:290px;overflow:auto;"><!--start scrollable table-->
      				<div class="row-fluid"> <!--start row fluid upcoming events-->
						
                        <div class="span2">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld5.jpg" class="thumbnail" alt="">
                            </a>
                        </div>
        				
        				<div class="span9">
							<p class="marg2">
                        		<a href="#" class="Name4">Happy to serve you!</a>
                            </p>
          		
                			<p class="evDetails3">
                            	<em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> 02/07/2013 
                                	| <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> 09:00am
                                </em><br>
                                <strong>Location</strong>: NCR | Pasay City <br>
                                <strong>Venue:</strong> SMX Convention Hall <br>
                            	<span class="btn btn-info btn-mini"><a href="#" class="attendBtn">10 Attendees</a></span>
                            </p>
					
						</div>
					</div> <!--end row-fluid-->
    				
     				<div class="row-fluid">
						<div class="span2">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld6.jpg" class="thumbnail" height="12">
                            </a>
                            
                        </div>
        				
                       
        				<div class="span9">
                        	<p class="marg2">
                        		<a href="#" class="Name4">Employment Expo</a>
                            </p>
                            
                            <p class="evDetails3">
                            	<em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> 02/12/2013 
                                	| <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> 10:00am
                                </em><br>
                                <strong>Location</strong>: NCR | Mandaluyong City <br>
                                <strong>Venue:</strong> Mega Trade Hall, SM Mega Mall<br>
                                <span class="btn btn-info btn-mini "><a href="#" class="attendBtn">800 Attendees </a></span>
                            </p>
						</div>
					</div> <!--end row-fluid-->
                    </div><!--end scrollable table-->
                    
    				<div class="row-fluid">
    					<div align="right" style="margin-top:-15px">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
                    
            </div><!--end events-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well wellMarg wellUpMarg">
            	<h4 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_327_sampler.png" width="30" height="15">&nbsp;What's New?</h4>
                <!--¬† Carousel - consult the Twitter Bootstrap docs at
                http://twitter.github.com/bootstrap/javascript.html#carousel -->
                <div id="this-carousel-id" class="carousel slide" align="center" style="margin-bottom:1px;"><!-- class of slide for animation -->
                    <div class="carousel-inner">
                        <div class="item active"><!-- class of active since it's the first item -->
                        <img src="<?php echo base_url()?>assets/bootstrap/img/jobVac.jpg" alt="" />
                            
                        </div>
                
                        <div class="item">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/slide-02.jpg" alt="" />
                            <div class="carousel-caption">
                            <p>TESD2</p>
                            </div>
                         </div>
                
                        <div class="item">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/slide-03.jpg" alt="" />
                            <div class="carousel-caption">
                            <p>TESDA3</p>
                            </div>
                         </div>
                
                    </div><!-- /.carousel-inner -->
                    <!--¬† Next and Previous controls below href values must reference the id for this carousel -->
                    <a class="carousel-control" href="#this-carousel-id" data-slide="next" style="margin-left:898px;">&rsaquo;</a>
                    <a class="carousel-control" href="#this-carousel-id" data-slide="prev" style="margin-left:1px;">&lsaquo;</a>
                </div><!-- /.carousel -->
            </div><!--end whats new-->
            
          
            <div class="well wellMarg wellUpMarg">
            	<h4 class="media header"><img src="assets/img/icons/glyphicons_089_building.png" width="18"> Industries</h4>
                <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                    Legend:  (#) - no. of vacancies
                </div>
                <div style="width:940px;height:130px;overflow:auto;"><!--start scrollable table-->
                    <table class="tableInd">
                        <thead> <!-- start pictures per industry-->
                          <tr>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/agri.png" class="PIndustry2"/></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/auto.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/const.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/deco.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/elec.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/foot.png" class="PIndustry2"/></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/furni.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/garments.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/health.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/heat.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/it.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/maritime.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/metals.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/processed.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/pyro.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/tourism.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/tvet.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/util.png" class="PIndustry2" /></a></th>
                            <th><a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/whole.png" class="PIndustry2" /></a></th>
                            </tr>
                        </thead> <!-- end pictures per industry-->
                        
                        <tbody> <!-- start fields for how many job vacancies per industry-->
                          <tr>
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                            
                            <td>
                                <a href=""><div class="industLabel2">(2)</div></a>
                            </td>
                          </tr>
                        </tbody> <!-- end fields for how many job vacancies per industry-->
                      </table>
                </div> <!--end viewport-->
                
                <div class="row-fluid">
                <div class="pull-right">
                    <a href="#" class="pull-right">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                    </a>
                </div>
                </div><!--end row-->
            </div><!--end industries-->
            
            <div class="row-fluid">
            	<div class="span6">
                	<div class="well wellMarg wellUpMarg">
                    	<h5 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="20" height="15"> Leagues</h5>
                    	<div style="width:460px;height:310px;overflow:auto;"><!--start scrollable table-->
                            <div class="row-fluid"> <!--start row fluid universal leagues-->
                            
                                <div class="span3">
                                    <a data-toggle="modal" href="#">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/welder2.jpg" class="thumbnailLPic" alt="">
                                    </a>
                                </div> <!--end span3-->
                                
                                <div class="span8">
                                    <p class="marg2 evDetails3">
                                        <a href="#" class="Name4">UTG: United TESDA Graduates</a><br>
                                        <a href="#" class="label label-info">Welding Industry</a>
                                        <br>
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                        by <a href="#" class="Name2">John</a>
                                        | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since May 2012 <br>
                                    </p>
                                    
                                    <p class="evDetails3">
                                        Group of TESDA graduates since the year 2000. <br>
                                    
                                        <span class="btn btn-primary btn-mini">
                                            <a data-toggle="modal" href="#myModal" class="attendBtn">
                                                &nbsp; Join &nbsp;
                                            </a>
                                        </span>
                                        <span class="btn btn-info btn-mini"><a data-toggle="modal" href="#ModLeagMembers" class="attendBtn">800 members</a></span>
                                    </p>
                                </div> <!--end span7-->
                            </div> <!--end row-fluid-->
                            <br>
            
                            <div class="row-fluid">
                            <div class="span3">
                                <a data-toggle="modal" href="#ModLeagueDes">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/ld3.jpg" class="thumbnailLPic" alt="">
                                </a>
                            </div> <!--end span3-->
                            
                            <div class="span8">
                                <p class="marg2 evDetails3">
                                   <a href="#" class="Name4">Official Tourism Philippines</a><br>
                                   <a href="#" class="label label-info">Welding Industry</a>
                                   <br>
                                   <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                   by <a href="#" class="Name2">John</a>
                                   | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since May 2012 <br>
                                   </p>
                                
                                <p class="evDetails3">  
                                    Collaborate. Learn. Grow. The official league for Tourism graduates. <br>
                                
                                    <span class="btn btn-primary btn-mini">
                                        <a data-toggle="modal" href="#myModal" class="attendBtn">
                                            &nbsp; Join &nbsp;
                                        </a>
                                    </span>
                                    <span class="btn btn-info btn-mini"><a data-toggle="modal" href="#ModLeagMembers" class="attendBtn">800 members</a></span>
                                </p>
                                
                            </div> <!--end span8-->
                        </div> <!--end row-fluid-->
                        <div align="right">
                                <a href="#">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                </a>
                            </div>
                        </div><!--end scrollable table-->
                    </div><!--end well-->
                </div><!--end leagues-->
                
                <div class="span6">
                	<div class="well wellMarg wellUpMarg">
                    	<h5 class="media-heading"><img src="assets/img/icons/glyphicons_244_conversation.png" width="20" height="15"> Top Discussion</h5>
                    	<div style="width:460px;height:290px;overflow:auto;"><!--start scrollable table-->
                            <div style="margin-top:-8px;">
                            <a href="#">
                                <font class="LeagueHead2 LeagueHeadMarg"> We Love Welders</font>
                            </a><br>
                            </div>
                             <a  href="#" style="color:#000">
                                <div style="margin-top:-5px; margin-bottom:-5px;">
                                    <img src="<?php echo base_url()?><?php echo base_url()?>assets/bootstrap/bootstrap/img/icons/glyphicons_194_circle_question_mark.png" width="14" style="margin-left:50px;">
                                    <font class="DisTSmall">What are the best companies for welders?</font> <br>
                                </div>
                            </a>
                            <hr class="hrDicussBig">
                            <div class="row-fluid">
                                <div class="span3">
                                    <a href="#">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/user.png" class="thumbnailDPic">
                                    </a>
                                 </div> <!--end span1-->
                                
                                <div class="span9">
                                    <p class="Name4"><strong>Shenne Layug</strong></p>
                                    <p class="disPub">Welders Inc. is the best!! I have high compensation and many benefits! </p>
                                    <div class="pull-right NumLikes2">
                                        12 likes
                                    </div><!--end num of likes-->
                                </div> <!--end span3-->
                            </div> <!--end row-fluid-->
                            <hr class="hrDicussSmall">
            
                            <div class="row-fluid">
                                <div class="span3">
                                    <a href="#">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/prof.jpg" class="thumbnailDPic">
                                    </a>
                                </div> <!--end span1-->
                                
                                <div class="span9">
                                    <p class="Name4"><strong>Dyanne Ocampo</strong></p>
                                    <p class="disPub">I am sad that Machine Inc. doesnt have their 13th month pay!! :(  </p>
                                    <div class="pull-right NumLikes2">
                                        12 likes
                                    </div><!--end num of likes-->
                                </div> <!--end span3-->
                            </div> <!--end row-->
                            <hr class="hrDicussSmall">
                            
                             <div class="row-fluid">
                                <div class="span3">
                                    <a href="#">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/prof.jpg" class="thumbnailDPic">
                                    </a>
                                </div> <!--end span1-->
                                
                                <div class="span9">
                                    <p class="Name4"><strong>Dyanne Ocampo</strong></p>
                                    <p class="disPub">I am sad that Machine Inc. doesnt have their 13th month pay!! :(  </p>
                                    <div class="pull-right NumLikes2">
                                        12 likes
                                    </div><!--end num of likes-->
                                </div> <!--end span3-->
                            </div> <!--end row-->
                             <div class="row-fluid">
                                <a href="EDissExtend.html" class="seeComm pull-right">
                                    See more comments
                                </a>
                            </div>
							<hr class="hrDicussSmall">
                         </div><!--end scrollable-->
                         
                         <div align="right">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
                    </div><!--end well-->
                </div><!--end discussion-->
            </div><!--end row-fluid-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

      <div id="footer">
 
<div class="footer">
 
<div class="col1" style="margin-left:16%;">
 
<h5><img src="<?php echo base_url()?>assets/bootstrap/img/footer-tesda.png" width="50px">&nbsp;&nbsp;&nbsp;<img src="assets/img/certify-logo.png"></h5>

&#169; 2012, e-TESDA
 <br>
 <a href=#>About Us</a> | <a href=#>Contact Us</a>
<!--- The First Column of The Four Column Blog Footer --></div>


 
<div class="col2">
 
<h4 class="footer">Other Programs</h4>
<br>
<a href=#><img src="<?php echo base_url()?>assets/bootstrap/img/learn-logo.png"></a>
<br><br>
<a href=#><img src="assets/img/work-logo.png"></a>
<!--- The Second Column of The Four Column Blog Footer --></div>
 

 
<div class="col3">
 
<h4 class="footer">Connect with us</h4>
 <br>
 <img src="<?php echo base_url()?>assets/bootstrap/img/footer-twitter.png">&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com">Follow us on Twitter</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="<?php echo base_url()?>assets/bootstrap/img/footer-fb.png">&nbsp;&nbsp;&nbsp;<a href="http://twitter.com">Like us on Facebook</a>

  <br><br>
 <img src="<?php echo base_url()?>assets/bootstrap/img/footer-site.png">&nbsp;&nbsp;&nbsp;<a href="http://www.tesda.gov.ph">Visit TESDA site</a>
<!--- The Fourth Column of The Four Column Blog Footer --></div>
</div>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/css/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox.pack.js?v=2.1.4"></script>

<!--add carousel-->
<script>
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
 
 
});
</script>

<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#test').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>

    
</body>

</html>
