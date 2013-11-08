<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<title>Leagues | e-TESDA: Work</title>


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
                    
                    <div class="nav" style="margin-left:260px;margin-top:-2px;">
                                <a href="#" class="btn btn-group transBtn" style="margin-left:5px;">
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
                                    <img src="assets/img/icons/glyphicons_041_charts.png" width="20"> 
                                    <br>Reports
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group transBtn">
                                    <h5 class="media-heading">
                                        <img src="assets/img/icons/glyphicons_089_building.png" width="17"> 
                                        <br>Industries
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
                        	
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                	<img src="assets/img/TESDA.jpg" width="25" height="20" style="margin-left:-11px;"> TESDA
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
               </div> <!--/.navbar-inner -->
               </div> <!--/.navbar -->

<!--modal myModal content-->       
    <div class="modal hide fade" id="signIn">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In</h3>
  		</div>
        
  		<div class="modal-body">
        <form method="post" action='' name="login_form">
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
              <a href="#">Forgot Password?</a>
            </p>
   	 	</form>
        </div>
        
        <div class="modal-footer">
    		Not a member?
    		<a href="#">Register</a>
 		</div>
	</div>
<!--end myModal content-->

<!--start ModLeagMembers-->
<div class="modal hide fade" id="ModLeagMembers">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3><img src="assets/img/icons/glyphicons_088_adress_book.png"> Members</h3>
  	</div><!--end modal-header-->

  	<div class="modal-footer"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
  			
            	<table class="table-condensed table-hover">
                	<thead>
                	<tr>
                    	<th class="span2"></th>
                        <th class="span3"></th>
                        <th class="span1"></th>
                        <th class="span2"></th>
                        <th class="span3"></th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    	<tr>
                        	<td>
                            	<a href="#"><img src="assets/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            	<a href="#"><img src="assets/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                         </tr> <!--one row-->
                    </tbody>
                </table><!--end table-->
            </div><!--end scrollable table-->
    	</div><!--end modal members-->
  	</div><!--end modal-footer-->
</div>
<!--end ModLeagMembers-->

               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
            <div class="span12">
            	<div class="well wellUpMarg">
                	<h3 class="media-heading">
                    	<a href="TLeagues.html" class="Comm">
                        	<img src="assets/img/icons/glyphicons_043_group.png" width="35"> Leagues
                        </a>
                    </h3>
                    
                	<div class="well">
                    <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span1"></th>
                                    <th class="span5"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<td>
                                    	<img src="assets/img/welder1.jpg" class="thumbnail4" alt="">
                                    </td>
                                   
                                    <td>
                                    	<p class="lDetMarg">
                                        <img src="assets/img/util.png" class="LeagueInIcon pull-right" alt="Auto Industry"><img src="assets/img/icons/glyphicons_043_group.png"><a href="TLeagView.html" class="LeaName">We Love Welders</a>
                                        </p>
                                        <p class="LeaDetails lDetMarg2">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name3">John</a>
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11" heaight="10"> since May 2012
                                            | <a data-toggle="modal" href="#ModLeagMembers" class="Name3"><img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10">
                                            	114 Members
                                              </a>
                                            </strong>
                                            <hr class="hrRApp2">
                                        </p>
                                        <p class="LeaDetails2">
                                        	<em><strong>League Description:</strong></em> Welders who help each other look for jobs locally and internationally.
                                        </p>
                                        
                                        <br>
                                        
                                    </td>
                                </tr>
                                
                                <tr>
                                	<td>
                                    	<p>
                                        	<hr class="hrRApp2">
                                        </p>
                                    </td>
                                    
                                    <td>
                                    	<p>
                                        	<hr class="hrRApp2">
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                    	</table>
                        
                        <div class="pull-right" style="margin-left:-60px; margin-top:-105px;">
                            <a href="#signIn" data-toggle="modal" class="LeagueLeave btn btn-primary">
                            	&nbsp; Join &nbsp;
                            </a>
                        </div>
                        </div><!--end well-->
                        
                        <div class="row-fluid">
                	<div class="span12">
            			<h4 class="media header dMarg"><img src="assets/img/icons/glyphicons_319_sort.png">
                        	<a href="#"  class="media header DiscHead"> DISCUSSIONS </a>
                        </h4>
                        
                        <div style="width:910px;height:250px;overflow:auto;"><!--start scrollable table-->
                        <ul class="nav nav-list">
                            <li style="margin-left:30px;">
                                <a href="TLeagDisc.html" class="DisTitle2">
                                    <img src="assets/img/icons/glyphicons_194_circle_question_mark.png" width="14">
                                    Where can I find a job here in Manila?
                                </a>
                                
                                <font style="margin-left:50px;">
                                    <img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                    Last post by <a href="#" class="Name3">John</a> 
                                    | <font class="tnd"> 09/23/2013</font>
                                    | <a href="#" class="Name3"> 5 replies </a>
                                </font>
                            </li> 
                            <br>
                            <li style="margin-left:30px;">
                                <a href="TLeagDisc.html" class="DisTitle2">
                                    <img src="assets/img/icons/glyphicons_194_circle_question_mark.png" width="14">
                                    Welders in Dubai have great salary, is this true? </font>
                                </a>
                                
                                <font style="margin-left:50px;">
                                    <img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                    Last post by <a href="#" class="Name3">Ming</a>
                                    | <font class="tnd"> 09/22/2013</font>
                                    | <a href="#" class="Name3"> 5 replies </a>
                                </font>
                            </li>
                            
                            <br>
                            <li style="margin-left:30px;">
                                <a href="TLeagDisc.html"  class="DisTitle2">
                                    <img src="assets/img/icons/glyphicons_194_circle_question_mark.png" width="14">
                                    Company Y is recruiting welders. Is there any requirements?
                                </a>
                                
                                <font style="margin-left:50px;">
                                    <img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                    Last post by <a href="#"  class="Name3">James</a>
                                    | <font class="tnd"> 09/21/2013</font> 
                                    | <a href="#" class="Name3"> 5 replies </a>
                                </font>
                            </li>
                            
                            <br>
                            <li style="margin-left:30px;">
                                <a href="TLeagDisc.html"  class="DisTitle2">
                                    <img src="assets/img/icons/glyphicons_194_circle_question_mark.png" width="14">
                                    Tips on being an expert welder.
                                </a>
                                
                                <font style="margin-left:50px;">
                                    <img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                    Last post by <a href="#" class="Name3">Bong</a>
                                    | <font class="tnd"> 09/20/2013</font> 
                                    | <a href="#" class="Name3"> 5 replies </a>
                                </font>
                            </li>
                        </ul>
                        </div><!--end scrollable table-->
                    
                    </div><!--end span-->
               </div><!--end row-fluid-->
  	
                </div><!--end well-->
            </div><!--end job market-->
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
