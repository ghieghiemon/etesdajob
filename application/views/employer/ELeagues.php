<!DOCTYPE html>
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
                    			<a data-toggle="modal" href="#postV" class="PNVBtn">
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

<!--start ModLeagMembers-->
<div class="modal hide fade" id="ModLeagMembers">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3><img src="assets/img/icons/glyphicons_088_adress_book.png"> Members</h3>
  	</div><!--end modal-header-->

  	<div class="modal-footer"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
  			<div style="width:500px;height:300px;overflow:auto;margin-top:-20px;"><!--start scrollable table-->
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

<!--start edit league details-->
<div class="modal hide fade" id="editLD">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3> Edit League Details</h3>
  	</div><!--end modal-header-->

  	<div class="modal-body"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
        	<div align="center">
            	<div class="control-group"><!-- start div LN-->
                    <div class="myStyleQS3">
                        <input type="text" id="LN" name="LN" placeholder="League Name">
                    </div>
                </div><!-- end div LN -->
                
                <div class="myStyle3QS" style="margin-top:-10px">
                    <select>
                        <option>Choose Industry</option>
                        <option>Agriculture & Fishery</option>
                        <option>Automotive & Land Transportation</option>
                        <option>Construction</option>
                        <option>Decorative Arts</option>
                    </select>
                </div><!--end industry-->
                
                <div class="control-group" style="margin-top:-5px;"><!-- start div Desc-->
                    <div class="myStyle3EventDet">
                        <textarea id="Desc" name="Det" rows="3" placeholder="Description"></textarea>
                    </div>
                </div><!-- end div Desc -->
                
                <div class="control-group eWellMarg">
                    <label class="ePicUpload" style="margin-left:-200px">Picture: &nbsp;</label>
                    <div class="controls" style="margin-left:60px; margin-top:-30px;">
                        <form method="post" action="upload-page.php" enctype="multipart/form-data">
                            <input name="pic" id="pic" type="file" style="font-size:10px" />
                        </form>  
                    </div>
                </div> <!--end Picture field-->
             </div><!--end align center-->
    	</div><!--end modal-->
  	</div><!--end modal-body-->
    
    <div class="modal-footer">
    	<button data-dismiss="modal" class="btn btn-info">Save</button>
    </div>
</div>
<!--end edit league details-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
     <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg3b">
                <h5 class="media-heading">
                    <img src="assets/img/icons/glyphicons_355_bullhorn.png" width="18"> Create New League
                </h5>
                
                <div style="width:315px;height:500px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="well">
                    	<h5 class="media-heading previewColor">
                            | Details
                        </h5>
                        
                        <div class="control-group"><!-- start div LN-->
                            <div class="myStyleQS3">
                                <input type="text" id="LN" name="LN" placeholder="League Name">
                            </div>
                        </div><!-- end div LN -->
                        
                        <div class="myStyle3QS" style="margin-top:-10px;">
                            <select>
                                <option>Choose Industry</option>
                                <option>Agriculture & Fishery</option>
                                <option>Automotive & Land Transportation</option>
                                <option>Construction</option>
                                <option>Decorative Arts</option>
                            </select>
                        </div><!--end industry-->
                        
                        <div class="control-group" style="margin-top:-5px;"><!-- start div Desc-->
                            <div class="myStyle3EventDet">
                                <textarea id="Desc" name="Det" rows="3" placeholder="Description"></textarea>
                            </div>
                        </div><!-- end div Desc -->
                        
                        <div class="control-group eWellMarg">
                            <label class="ePicUpload">Picture: &nbsp;</label>
                            <div class="controls" style="margin-left:70px; margin-top:-30px;">
                                <form method="post" action="upload-page.php" enctype="multipart/form-data">
                                    <input name="pic" id="pic" type="file" style="font-size:10px" />
                                </form>  
                            </div>
                        </div> <!--end Picture field-->
                    </div><!--end well-->
                    
                    <div align="right" class="eDnBtn">
                    	<a href="#" class="btn btn-info">
                        	Done
                        </a>
                    </div>
                    
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="assets/img/icons/glyphicons_043_group.png" width="35"> Leagues
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#JND" data-toggle="tab">Joined</a></li>
                        <li><a href="#CTD" data-toggle="tab">Created</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="JND">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            <table> <!--start one league-->
                            <tr>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<a href="ELeagView.html" class="LeaName3"> We Love Welders</a>
                                	<td>
                                    	<img src="assets/img/welder1.jpg" class="thumbnail5 ePicMarg">
                                    </td>
                                   
                                    <td>
                                        
                                        <p class="LeaDetails4">
                                        	<a href="#" class="label label-info">Welding Industry</a><br>
                                        	<img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2">John</a>
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> since May 2012
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="assets/img/icons/glyphicons_088_adress_book.png" width="10"> 100 Members</a>
                                        
                                            <br>
                                            Community of welders who help each other look for jobs locally and internationally.</p>
                                        </font>
                                        </p>
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one league-->
                        <hr class="hrLeagTab">

                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invited-->
                    
                    <div class="tab-pane" id="CTD">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                        	 <table> <!--start one league-->
                            <tr>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<a href="ELeagView.html" class="LeaName3"> We Love Welders</a>
                                	<td>
                                    	<img src="assets/img/welder1.jpg" class="thumbnail5 ePicMarg">
                                    </td>
                                   
                                    <td>
                                        
                                        <p class="LeaDetails4">
                                        	<a href="#" class="label label-info">Welding Industry</a><br>
                                        	<img src="assets/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2">John</a>
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> since May 2012
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="assets/img/icons/glyphicons_088_adress_book.png" width="10"> 100 Members</a>
                                        
                                            <br>
                                            Community of welders who help each other look for jobs locally and internationally.</p>
                                        </font>
                                        </p>
                                        
                                        <div class="pull-right" style="margin-top:7px">
                                         	<span>
                                            	<a href="#editLD" data-toggle="modal" role="button" class="btn btn-mini btn-info">
                                                    &nbsp; Edit League Details
                                                </a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one league-->
                        <hr class="hrLeagTab">
                        </div><!--end scrollable-->
                    </div> <!--end tab pane invited-->
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Leagues-->
        	
        </div><!--end span right column-->
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
