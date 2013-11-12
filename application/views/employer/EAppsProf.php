<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<title>Application Profile | e-TESDA: Work</title>


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
  
     <div class="navbar navbar-inverse navbar-fixed-top"> <!--start body code-->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#p">
                    <img src="work-logo.png"  width ="120" ></img></a>
                    
                    <div class="nav" style="margin-left:190px;margin-top:-2px;">
                                <a href="#" class="btn btn-group transBtn" style="margin-left:5px;">
                                <h5 class="media-heading">
                                    <img src="assets/img/icons/glyphicons_045_calendar.png" width="18"> 
                                    <br>Calendar
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="assets/img/icons/glyphicons_043_group.png" width="25"> 
                                    <br>Leagues
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="assets/img/icons/glyphicons_266_flag.png" width="15"> 
                                    <br>Events
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                <h5 class="media-heading">
                                    <img src="assets/img/icons/glyphicons_352_nameplate.png" width="20"> 
                                    <br>Profile
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                    <h5 class="media-heading">
                                        <img src="assets/img/icons/glyphicons_264_vcard.png" width="17"> 
                                        <br>Vacancies
                                    </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                  <h5 class="media-heading">
                                      <img src="assets/img/icons/glyphicons_351_book_open.png" width="20"> 
                                      <br>Dashboard
                                  </h5>
                                </a>
                        </div><!--end parallel navs-->
                    <div class="nav-collapse collapse">
                    	
                        <ul class="nav pull-right">
                        	
                        	<li>
                    			<a href="EPostVacancy.html" class="PNVBtn">
                                	<img src="assets/img/icons/glyphicons-halflings-white_addbtn.png" width="15">
                                    Post Vacancy
                                </a>
                    		</li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                	<img src="assets/img/a2.jpg" width="40" height="20" style="margin-left:-11px;"> Nestle
                                    <b class="caret"></b>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li><a href="#">FAQ</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
               </div> <!--/container fluid-->
               </div> <!--/.navbar-inner -->
               </div> <!--/.navbar -->
  
<!--add note modal start-->
<div class="modal hide fade" id="addNote">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Add notes</h3>
  	</div>

	<div class="modal-body">
		<div class="span6">
			<textarea name="message" id="message" class="input-xlarge noteAreaMarg" rows="10"></textarea>
		</div>
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-info" data-dismiss="modal">Save</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--add note modal end-->

<!--change status modal start-->
<div class="modal hide fade" id="changeStat">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Change Status</h3>
  	</div>

	<div class="modal-body">
		<div class="well">
        	<table>
                  <thead>
                      <tr>
                          <th class="span8"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>                                           
                          <td>
                              <input type="checkbox" style="margin-left:40px;">
                              <label class="checkbox jCrNC2">
                                  For Exam
                              </label>
                              
                          </td>
                      </tr>
                      
                      <tr>                                           
                          <td>
                              <input type="checkbox" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  For Interview
                              </label>
                              
                          </td>
                      </tr>
              </table>
        </div><!--end well-->
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-info" data-dismiss="modal">Save</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--change status modal end-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="assets/img/icons/glyphicons_144_folder_open.png" width="30"> 
                    Applications
                        <a href="EAppsPerJob.html" class="media-heading vName2">
                        	| Welder Assistant
                        </a>
                    </font>
                </h3>
                
                <div align="right" class="changeBtn2" style="margin-top:-40px;margin-right:2px;margin-bottom:15px;">
                   <a href="#changeStat" data-toggle="modal" class="btn btn-info">
                        CHANGE STATUS
                    </a>
                </div><!--end div-->
                        
               
                <div class="row-fluid">
                    <div class="span8">
                        <div class="well">
                        	<div style="width:810px;height:175px;overflow:auto;"><!--start scrollable table-->
                        	<h4 class="media-heading">
                            	| PROFILE
                            </h4>
                                
                            <table>
                                <thead>
                                    <tr>
                                        <th class="span1"></th>
                                        <th class="span5"></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/img/user.png" class="thumbnailProf">
                                        </td>
                                        
                                        <td>
                                            <p class="proNameA">
                                                <img src="assets/img/icons/glyphicons_352_nameplate.png" width="20"> 
                                                Angelica Sotto Guerrero
                                            </p>
                                            
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <table class="proPIMargA">
                                                        <thead>
                                                            <tr>
                                                                <th class="span5"></th>
                                                                <th class="span6"></th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="proPI">
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    SEX:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        Female
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                     BIRTHDAY:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        01/01/1995
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    CIVIL STATUS: 
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        Single	
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!--end span-->
                                                
                                                <div class="span6">
                                                    <table class="proPIMargB">
                                                        <thead>
                                                            <tr>
                                                                <th class="span7"></th>
                                                                <th class="span1"></th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="proPI">
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    Address: 
                                                                </td>
                                                                
                                                                <td>
                                                                    <p class="proPIMarg2">
                                                                        12 BC Marconi St. Makati City 1890	
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    CONTACT NUMBER:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        09179231212
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                     EMAIL:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        ghieguerrer0@gmail.com
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!--end span-->
                                            </div><!--end row-fluid-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end span-->
                    
                    <div class="span4">
                        <div class="well wellMarg">
                        	<h4 class="media-heading">
                            	| NOTES
                            </h4>
                            
                            <div style="width:400px;height:150px;overflow:auto;"><!--start scrollable table-->
                            	<textarea class="span12" rows="5" id="notes"></textarea>
                                
                                <a href="#" data-toggle="modal" class="btn pull-right">
                                    <strong>SAVE</strong>
                                </a>
                            </div><!--end scrollable-->
                            
                        </div><!--end well-->
                    </div><!--end span-->
                </div><!--end row-fluid-->
               
                <div class="row-fluid">
                	<div class="span6">
                    	<div class="well wellUpMarg">
                        	<div style="width:595px;height:240px;overflow:auto;"><!--start scrollable table-->
                                  <h4 class="proDetCol media header">
                                      <img src="assets/img/icons/glyphicons_332_certificate.png" width="15">
                                      Educational Background
                                  </h4>
                                  
                                  <font class="resEdHead2">
                                      TESDA
                                  </font>
                                  
                                  <br>
                                  <div class="resEdDet2"><!--start course details-->
                                      <font class="resEdCrs">
                                          Course: Hotel & Restaurant Management
                                      </font>
                                      
                                      <font class="resEdYear">
                                          &nbsp;2009 - 2010 <br>
                                      </font>
                                      
                                      <div class="resEdSCC"> <!--start div SCC-->
                                          Certificates: NCI 
                                          <img src="assets/img/icons/glyphicons-halflings-white_check.png" width="16" class="label-ver">
                                          <br>
                                          Competencies: <br>
                                      </div> <!--end div SCC-->
                                  </div><!--end course details-->
                                  
                                  <br>
                                  <div class="resEdDet2"><!--start course details-->
                                      <font class="resEdCrs">
                                          Course: Hotel & Restaurant Management
                                      </font>
                                      
                                      <font class="resEdYear">
                                          &nbsp;2009 - 2010 <br>
                                      </font>
                                      
                                      <div class="resEdSCC"> <!--start div SCC-->
                                          Certificates: NCII 
                                          <img src="assets/img/icons/glyphicons-halflings-white_check.png" width="16" class="label-ver">
                                          <br>
                                          Competencies: <br>
                                      </div> <!--end div SCC-->
                                  </div><!--end course details-->
                                  
                                  <br>
                                  <font class="resEdHead2">
                                      De La Salle University
                                  </font>
                                  
                                  <div class="resEdDet2"><!--start course details-->
                                      <font class="resEdCrs">
                                          Course: Hotel & Restaurant Management
                                      </font>
                                      
                                      <font class="resEdYear">
                                          &nbsp;2009 - 2010 <br>
                                      </font>
                                      
                                      <div class="resEdSCC"> <!--start div SCC-->
                                         Achievements: <br>
                                      </div> <!--end div SCC-->
                                  </div><!--end course details-->
                          
                            </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end span-->
                    
                    <div class="span6">
                    	<div class="well wellMarg wellUpMarg">
                        	<div style="width:595px;height:240px;overflow:auto;"><!--start scrollable table-->
                        	<h4 class="proDetCol media header">
                                 <img src="assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                            </h4>
                            
                            <font class="resWrkHead2">
                                Century Corp
                            </font>
                            
                            <br>
                            <div class="resWrkDet"><!--start course details-->
                                <font class="resEdCrs">
                                    Position: Welder Assistant
                                </font>
                                
                                <font class="resEdYear">
                                    &nbsp;2009 - 2010 <br>
                                </font>
                                
                            </div><!--end course details-->
                            
                            <br>
                            <font class="resWrkHead">
                                Century Corp
                            </font>
                            
                            <br>
                            <div class="resWrkDet"><!--start course details-->
                                <font class="resEdCrs">
                                    Position: Welder Assistant
                                </font>
                                
                                <font class="resEdYear">
                                    &nbsp;2009 - 2010 <br>
                                </font>
                                
                            </div><!--end course details-->
                            
                            <br>
                            <font class="resWrkHead">
                                Century Corp
                            </font>
                            
                            <br>
                            <div class="resWrkDet"><!--start course details-->
                                <font class="resEdCrs">
                                    Position: Welder Assistant
                                </font>
                                
                                <font class="resEdYear">
                                    &nbsp;2009 - 2010 <br>
                                </font>
                            </div><!--end course details-->
                            </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end span-->
                </div><!--end row-fluid-->
                
        	</div><!--end well-->
        </div><!--end span-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

      <div id="footer">
 
<div class="footer">
 
<div class="col1" style="margin-left:16%;">
 
<h5><img src="assets/img/footer-tesda.png" width="50px">&nbsp;&nbsp;&nbsp;<img src="assets/img/certify-logo.png"></h5>

&#169; 2012, e-TESDA
 <br>
 <a href=#>About Us</a> | <a href=#>Contact Us</a>
<!--- The First Column of The Four Column Blog Footer --></div>


 
<div class="col2">
 
<h4 class="footer">Other Programs</h4>
<br>
<a href=#><img src="assets/img/learn-logo.png"></a>
<br><br>
<a href=#><img src="assets/img/work-logo.png"></a>
<!--- The Second Column of The Four Column Blog Footer --></div>
 

 
<div class="col3">
 
<h4 class="footer">Connect with us</h4>
 <br>
 <img src="assets/img/footer-twitter.png">&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com">Follow us on Twitter</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="assets/img/footer-fb.png">&nbsp;&nbsp;&nbsp;<a href="http://twitter.com">Like us on Facebook</a>

  <br><br>
 <img src="assets/img/footer-site.png">&nbsp;&nbsp;&nbsp;<a href="http://www.tesda.gov.ph">Visit TESDA site</a>
<!--- The Fourth Column of The Four Column Blog Footer --></div>
</div>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.4"></script>

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
