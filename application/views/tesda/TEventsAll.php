<!--start ModEventAttend-->
<div class="modal hide fade" id="ModEventAttend">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3><img src="assets/img/icons/glyphicons_148_folder_flag.png"> Attendees</h3>
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
<!--end ModEventAttend-->

               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
     <div class="row-fluid">
    	<div class="span3">
            <div class="well wellMarg3b">
                <h5 class="media-heading">
                    <img src="assets/img/icons/glyphicons_355_bullhorn.png" width="18"> Create New Event
                </h5>
                
                <div style="width:315px;height:500px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="well">
                    	<h5 class="media-heading previewColor">
                            | Summary
                        </h5>
                        
                        <div class="control-group"><!-- start div EN-->
                            <div class="myStyleQS3">
                                <input type="text" id="EN" name="EN" placeholder="Event Name">
                            </div>
                        </div><!-- end div EN -->
                        
                        <div class="control-group"  style="margin-top:-15px;"><!-- start div HOSTS-->
                            <div class="myStyleQS3">
                                <input type="text" id="HST" name="HST" placeholder="Hosts">
                            </div>
                        </div><!-- end div HOSTS -->
                        
                        <div class="control-group" style="margin-top:-15px;"><!-- start div Det-->
                            <div class="myStyle3EventDet">
                                <textarea id="Det" name="Det" rows="3" placeholder="Details"></textarea>
                            </div>
                        </div><!-- end div Det -->
                        
                        <div class="myStyle3QS" style="margin-top:-10px;">
                            <select>
                                <option>Choose Industry</option>
                                <option>Agriculture & Fishery</option>
                                <option>Automotive & Land Transportation</option>
                                <option>Construction</option>
                                <option>Decorative Arts</option>
                            </select>
                        </div><!--end industry-->
                        
                        <div class="control-group">
                            <label class="ePicUpload2">Date: &nbsp;</label>
                             <div class="myStyle3EventDate" style="margin-left:55px;margin-top:-25px;">
                                  <input type="text" id="Mn" name="Mn" placeholder="MM" >
                                  <input type="text" id="Dy" name="Dy" placeholder="DD" >
                                  <input type="text" id="Yr" name="Yr" placeholder="YYYY" >
                              </div>
                        </div><!--end date-->
                        
                        <div class="control-group">
                            <label class="ePicUpload2">Time: &nbsp;</label>
                             <div class="myStyle3EventDate" style="margin-left:55px;margin-top:-35px;">
                                  <input type="text" id="ST" name="ST" placeholder="Start" >
                                  <input type="text" id="ET" name="ET" placeholder="End" >
                              </div>
                        </div><!--end date-->
                        
                        <div class="control-group eWellMarg">
                            <label class="ePicUpload">Event Picture: &nbsp;</label>
                            <div class="controls" style="margin-left:100px; margin-top:-30px;">
                                <form method="post" action="upload-page.php" enctype="multipart/form-data">
                                    <input name="pic" id="pic" type="file" style="font-size:10px" />
                                </form>  
                            </div>
                        </div> <!--end Picture field-->
                    
                    	<h5 class="media-heading previewColor">
                            | Location
                        </h5>
                        
                        <div class="myStyle3QS2">
                            <select name="Region">
                                <option>NCR</option>
                                <option>Region I</option>
                            </select>
                        </div><!--end region-->
                    
                        <div class="myStyle3QS2" style="margin-top:-10px;">                        
                            <select name="City">
                                <option>Pasig</option>
                                <option>Makati</option>
                            </select>
                        </div><!--end city-->
                        
                        <div class="control-group eWellMarg2"><!-- start div VEN-->
                            <div class="myStyleQS3" style="margin-top:-6px;">
                                <input type="text" id="VEN" name="VEN" placeholder="Venue">
                            </div>
                        </div><!-- end div VEN -->
                        
                        <div align="right" class="eDnBtn3">
                            <a href="#" class="btn btn-info btn-mini">
                                Done
                            </a>
                        </div>
                    
                    </div><!--end well-->
                    
                    <h5 class="media-heading">
                        <img src="assets/img/icons/glyphicons_027_search.png" width="18"> Search Event
                    </h5>
                    
                    <div class="well">
                    
                    
                        <div class="control-group eWellMarg2"><!-- start div event name-->
                            <div class="myStyleQS3" style="margin-top:10px;">
                                <input type="text" id="en" name="en" placeholder="Search by event name">
                            </div>
                        </div><!-- end div event name -->

                    	<div class="myStyle3QS2">
                            <select name="Region">
                                <option>NCR</option>
                                <option>Region I</option>
                            </select>
                        </div><!--end region-->
                    
                        <div class="myStyle3QS2" style="margin-top:-10px;">                        
                            <select name="City">
                                <option>Pasig</option>
                                <option>Makati</option>
                            </select>
                        </div><!--end city-->
                        
                        <div class="myStyle3QS2" style="margin-top:-10px;">                        
                            <select name="ind">
                                <option>Agriculture & Fishery</option>
                            </select>
                        </div><!--end Industry-->
                       
                        
                        <div align="right" class="eDnBtn3">
                            <a href="TEventsSrch.html" class="btn btn-mini btn-info">
                                Search
                            </a>
                        </div>
                        </div><!--end well-->
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="assets/img/icons/glyphicons_266_flag.png" width="25"> Events
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#SGS" data-toggle="tab">Upcoming</a></li>
                        <li><a href="#Ctd" data-toggle="tab">Created</a></li>
                        <li><a href="#All" data-toggle="tab">All</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="SGS">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            <div align="right" class="numSrch">
                            	2 EVENT/S
                            </div><!--num of events-->
                            
                        	<table> <!--start one event-->
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
                                	<a href="TEventDetails.html" class="LeaName3"> Happy to serve you!</a>
                                	<td>
                                    	<img src="assets/img/ld5.jpg" class="thumbnail7 ePicMarg">
                                    </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> Chef Philippines
                                            | <em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11"> 10/08/2013 
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> 09:00am
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10"> 110 Attendees
                                              </a><br>
                                            <strong>Location</strong>: NCR | Pasay City <br>
                                            <strong>Venue:</strong> SMX Convention Hall <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> Chef Philippines would like to introduce the biggest cooking training in the country. Come and join this event for more tips in being a chef. Find out more recipes that you could share to others. Job openings will also be announced so dont forget to grab this opportunity.
                                         </p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one event-->
                        <hr class="hrLeagTab">
                        
                         <table> <!--start one event-->
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
                                	<a href="TEventDetails.html" class="LeaName3">Employment Expo 2</a>
                                	<td>
                                    	<img src="assets/img/ld6.jpg" class="thumbnail5 ePicMarg" alt="">
                                    </td>
                                   
                                    <td>
                                       <p class="LeaDetails4">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> DOLE
                                            | <em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11"> 10/09/2013 
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> 10:00am
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10"> 110 Attendees
                                              </a><br>
                                            <strong>Location</strong>: NCR | Mandaluyong City <br>
                                            <strong>Venue:</strong> Mega Trade Hall, SM Mega Mall <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> DOLE presents to you the annual job expo that will bring several opportunities to many Filipinos. 
                                         </p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one event-->
                        <hr class="hrLeagTab">
                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane upcoming-->
                    
                    <div class="tab-pane" id="Ctd">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                        	<div align="right" class="numSrch">
                            	2 EVENT/S
                            </div><!--num of events-->
                            
                            <table> <!--start one event-->
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
                                	<a href="TEventDetails.html" class="LeaName3"> Service Orientation</a>
                                	<td>
                                    	<img src="assets/img/ld5.jpg" class="thumbnail7 ePicMarg">
                                    </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> Chef Philippines
                                            | <em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11"> 10/10/2013 
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> 09:00am
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10"> 110 Attendees
                                              </a><br>
                                            <strong>Location</strong>: NCR | Pasay City <br>
                                            <strong>Venue:</strong> SMX Convention Hall <br>
                                         </p>

                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> Chef Philippines would like to introduce the biggest cooking training in the country. Come and join this event for more tips in being a chef. Find out more recipes that you could share to others. Job openings will also be announced so dont forget to grab this opportunity.
                                         </p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one event-->
                        <hr class="hrLeagTab">
                        
                         <table> <!--start one event-->
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
                                	<a href="TEventDetails.html" class="LeaName3">Employment Expo</a>
                                	<td>
                                    	<img src="assets/img/ld6.jpg" class="thumbnail5 ePicMarg" alt="">
                                    </td>
                                   
                                    <td>
                                       <p class="LeaDetails4">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> DOLE
                                            | <em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11"> 09/12/2013 
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> 10:00am
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10"> 110 Attendees
                                              </a><br>
                                            <strong>Location</strong>: NCR | Mandaluyong City <br>
                                            <strong>Venue:</strong> Mega Trade Hall, SM Mega Mall <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> DOLE presents to you the annual job expo that will bring several opportunities to many Filipinos. 
                                         </p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one event-->
                        </div><!--end scrollable-->
                    </div> <!--end tab pane created-->
                    
                    <div class="tab-pane" id="All">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                        	<div align="right" class="numSrch">
                            	2 EVENT/S
                            </div><!--num of events-->
                            
                            <table> <!--start one event-->
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
                                	<a href="TEventDetails.html" class="LeaName3"> Service Orientation 2</a>
                                	<td>
                                    	<img src="assets/img/ld5.jpg" class="thumbnail7 ePicMarg">
                                    </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> Chef Philippines
                                            | <em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11"> 10/10/2013 
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> 09:00am
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10"> 110 Attendees
                                              </a><br>
                                            <strong>Location</strong>: NCR | Pasay City <br>
                                            <strong>Venue:</strong> SMX Convention Hall <br>
                                         </p>

                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> Chef Philippines would like to introduce the biggest cooking training in the country. Come and join this event for more tips in being a chef. Find out more recipes that you could share to others. Job openings will also be announced so dont forget to grab this opportunity.
                                         </p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one event-->
                        <hr class="hrLeagTab">
                        
                         <table> <!--start one event-->
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
                                	<a href="TEventDetails.html" class="LeaName3">Employment Expo</a>
                                	<td>
                                    	<img src="assets/img/ld6.jpg" class="thumbnail5 ePicMarg" alt="">
                                    </td>
                                   
                                    <td>
                                       <p class="LeaDetails4">
                                        	<strong><img src="assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> DOLE
                                            | <em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11"> 09/12/2013 
                                            | <img src="assets/img/icons/glyphicons_054_clock.png" width="11"> 10:00am
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10"> 110 Attendees
                                              </a><br>
                                            <strong>Location</strong>: NCR | Mandaluyong City <br>
                                            <strong>Venue:</strong> Mega Trade Hall, SM Mega Mall <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> DOLE presents to you the annual job expo that will bring several opportunities to many Filipinos. 
                                         </p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one event-->
                        </div><!--end scrollable-->
                    </div> <!--end tab pane all-->
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Job market-->
            
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
