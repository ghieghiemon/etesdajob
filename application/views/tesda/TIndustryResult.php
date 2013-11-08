<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<title>Industries | e-TESDA: Work</title>


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
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email" style="margin-left:155px;height:30px"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password" style="margin-left:155px;height:30px"></p>
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
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="assets/img/icons/glyphicons_089_building.png" width="25"> Industries
            </h4>
       	 	
            <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                Legend:  (#) - no. of vacancies
            </div>
            
            <div class="nav PProfE2" style="width:1240px;height:130px;margin-top:10px;margin-bottom:-5px;overflow:auto;">
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/it.png"class="PProfE"> 
                            <br>50
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/auto.png"class="PProfE"> 
                            <br>45
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/const.png"class="PProfE"> 
                            <br>30
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/deco.png"class="PProfE"> 
                            <br>20
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/elec.png"class="PProfE"> 
                            <br>10
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/foot.png"class="PProfE"> 
                            <br>10
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/furni.png"class="PProfE"> 
                            <br>9
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/garments.png"class="PProfE"> 
                            <br>9
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/health.png"class="PProfE"> 
                            <br>7
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/heat.png"class="PProfE"> 
                            <br>6
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/agri.png"class="PProfE"> 
                            <br>6
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/maritime.png"class="PProfE"> 
                            <br>5
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/metals.png"class="PProfE"> 
                            <br>5
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/processed.png"class="PProfE"> 
                            <br>5
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/pyro.png"class="PProfE"> 
                            <br>4
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/tourism.png"class="PProfE"> 
                            <br>4
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/tvet.png"class="PProfE"> 
                            <br>3
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/util.png"class="PProfE"> 
                            <br>3
                        </h5>
                        </a>
                        
                        <a href="TIndustryResult.html" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="assets/img/whole.png"class="PProfE"> 
                            <br>2
                        </h5>
                        </a>
                </div><!--end scrollable-->
                
                <div class="row-fluid" style="margin-top:10px;">
                    <div class="pull-right">
                        <a href="TIndustriesAll.html" class="pull-right">
                            <img src="assets/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div><!--end row-->
    	</div><!--end well-->
      
   	</div> <!--end span12-->
    </div> <!--end row-->
    
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellUpMarg wellMarg2b">
                <h5 class="media-heading">
                    <img src="assets/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
                </h5>
                    
                    <div style="width:310px;height:360px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                        <div class="control-group"><!-- start div job title -->
                            <div class="myStyleQS3P">
                                <input type="text" id="JT" name="JT" placeholder="Job Title">
                            </div>
                        </div><!-- end div job title -->
    
                        <div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                            <div class="myStyleQS3P">
                                <input type="text" id="COMP" name="COMP" placeholder="Company">
                            </div>
                        </div><!-- end div company -->
    
                        <div class="myStyle3QS">
                            <select>
                            	<option>Choose Industry</option>
                                <option>Agriculture & Fishery</option>
                                <option>Automotive & Land Transportation</option>
                                <option>Construction</option>
                                <option>Decorative Arts</option>
                            </select>
                        </div>
                        
                        <div class="myStyle3QS2">
                            <select name="Region">
                            	<option>Choose Region</option>
                                <option>NCR</option>
                                <option>Region I</option>
                            </select>
                        </div>
                        
                        <div class="myStyle3QS2">                        
                            <select name="City">
                            <option>Choose City</option>
                            <option>Pasig</option>
                            <option>Makati</option>
                        </select>
                        </div>
                        
                        <div align="right" class="qsBtn">
                            <a href="#" class="btn btn-info">
                                Search
                            </a>
                        </div>
                        
                    </div><!--end scrollable-->
                    
                        
                </div><!--end well-->
        	</div><!--end span left column-->
        
            <div class="span9">
            	<div class="well wellMarg wellUpMarg">
                    <h4 class="media-heading">
                         <img src="assets/img/icons/glyphicons_264_vcard.png" width="25"> Job Market 
                         <font class="media-heading vName2">
                            | Information and Communication Technology
                        </font>
                    </h4>
                    
                    <form class="form-horizontal">
                        <div class="myStyle2T" align="right">
                            <select name="Month" class="span2">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option selected>September</option>
                                <option>October</option>
                            </select>
                            
                            <select name="Year" class="span2">
                                <option>2013</option>
                                <option>2012<option>
                            </select>
                            
                            <button class="btn btn-info" style="margin-top:-35px;">
                                <img src="assets/img/icons/glyphicons_211_right_arrow.png" width="20">
                            </button>
                        </div>
                    </form>
                    
                    <div style="width:920px;height:313px;overflow:auto;"><!--start scrollable table-->
                            
                        	<table class="tableJMP table-hover table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span3" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                                <tr>
                                    
                                    <td>
                                        Animator
                                    </td>
                                   
                                    <td>
                                        <a href="TProfile.html" class="recAppName">
                                            7th Media Design Studio
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Makati City
                                    </td>
                                    
                                    <td>
                                        09/23/2013 to 10/28/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">5 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">20 Left </span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        Software Developer 
                                    </td>
                                   
                                    <td>
                                        <a href="TProfile.html" class="recAppName">
                                            METROSTAR Express
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Quezon City
                                    </td>
                                    
                                    <td>
                                        09/18/2013 to 10/25/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">4 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">10 Left </span>
                                    </td>
                                    
                                </tr> 
                                
                                <tr>
                                    
                                    <td>
                                        Computer Programmer
                                    </td>
                                   
                                    <td>
                                        <a href="TProfile.html" class="recAppName">
                                            Globe Telecom
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Taguig City
                                    </td>
                                    
                                    <td>
                                        09/15/2013 to 10/30/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">20 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">10 Left </span>
                                    </td>
                                    
                                </tr> 
                                
                                <tr>
                                    
                                    <td>
                                        Web Designer
                                    </td>
                                   
                                    <td>
                                        <a href="TProfile.html" class="recAppName">
                                            ABS-CBN
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Quezon City
                                    </td>
                                    
                                    <td>
                                        09/12/2013 to 10/30/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">2 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">5 Left </span>
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        Mobile App Developer
                                    </td>
                                   
                                    <td>
                                        <a href="TProfile.html" class="recAppName">
                                            7th Media Design Studio
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Makati City
                                    </td>
                                    
                                    <td>
                                        09/12/2013 to 10/26/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">1 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">5 Left </span>
                                    </td>
                                    
                                </tr>                                
                                
                            </tbody>
                        </table>	
                        </div><!--end scrollable--> 
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
