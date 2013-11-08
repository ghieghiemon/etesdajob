

<!--invite modal start-->
<div class="modal hide fade" id="invE">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h4><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_010_envelope.png"> Invite people to join TESDA Job Portal </h4>
  	</div>

	<div class="modal-body" align="center">
        <input class="span4" type="email" placeholder="enter email address">
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary">Invite</button>
        <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a> 
        </div> 
    </div>
</div>
<!--invite modal end-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span7">
            <div class="well">
                <form method="post" action ="<?php echo base_url()?>tesda/send_invite"
            	<h4 class="media-heading">
                	| Invite companies to join TESDA Job Portal
                </h4>
                
                <!--div class="row-fluid invEmailMarg">
                	<div align="right">
                    	<a href="#invE" data-toggle="modal" class="invEmail">
                        	<img src="assets/img/icons/glyphicons_010_envelope.png" width="15"> Invite through email
                        </a>
                    </div>
                </div><!--end invite email-->
            	
                <table class="table-condensed" style="margin-left:50px;margin-top:10px">
                    	<thead>
                        	<tr>
                            	<th class="span2"></th>
                                <th class="span7"></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        	<tr>
                            	<td class="lLabel">
                                	To: (use comma to separate emails)
                                </td>
                                
                                <td>
                                	<textarea type="input" id="email" name="email "class="span9" placeholder="" rows="3"></textarea>
                                </td>
                            </tr>
                            
                            <tr>
                            	<td class="lLabel">
                                	Message:
                                </td>
                                
                                <td>
                                	<textarea type="input" id="msg" name="msg" class="span9" placeholder="" rows="3">Join TESDA Job Portal and look for potential applicants that could help your organization.
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="row-fluid">
                    	<div align="right">
                    	<button type="submit" class="btn btn-primary" style="margin-right:135px;">Invite</button>
                        </div>
                    </div><!--end invite button-->
            </form>
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h4 class="media-heading">
                	| Verification
                </h4>
                
            	<div class="tabbable"> <!-- start tabs-->
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Companies' License</a></li>
    				<li><a href="#tab11" data-toggle="tab">Job Seekers' Certification</a></li>
  				</ul>
  
  				<div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:705px;height:250px;overflow:auto;"><!--start scrollable table-->
                        	<table class="tableV table-condensed table-hover">
                            	<thead>
                                	<tr>
                                        <th class="span3">Company Name</th>
                                        <th class="span3">Location</th>
                                        <th class="span3">License Number</th>
                                        <th class="span2"></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                	<tr>
                                        <td>
                                        	<a href="#" class="recAppName">
                                                7th Media Design Studio
                                            </a>
                                        </td>
                                        
                                        <td>
                                        	NCR | Makati City
                                        </td>
                                                                                
                                        <td>
                                        	129364018
                                        </td>
                                        
                                        <td>
                                        	<button class="btn btn-mini">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_198_ok.png" width="20">
                                            </button>
                                            
                                            <button class="btn btn-mini">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_197_remove.png" width="20">
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end scrollable table-->
                    </div>  <!--end Companies-->
                    
                    <div class="tab-pane" id="tab11">
                        <div style="width:705px;height:250px;overflow:auto;"><!--start scrollable table-->
                            <table class="tableV table-condensed table-hover">
                            	<thead>
                                	<tr>
                                        <th class="span3">Name</th>
                                        <th class="span2">Location</th>
                                        <th class="span1">Age</th>
                                        <th class="span1">Sex</th>
                                        <th class="span4">Certification</th>
                                        <th class="span2"></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                	<tr>
                                        <td>
                                        	<a href="#" class="recAppName">
                                                Angelica Guerrero
                                            </a>
                                        </td>
                                        
                                        <td>
                                        	NCR | Makati City
                                        </td>
                                        
                                        <td>
                                        	29
                                        </td>
                                        
                                        <td>
                                        	F
                                        </td>
                                        
                                        <td>
                                        	Electrical Installation & Maintenance NCII
                                        </td>
                                        
                                        <td>
                                        	<button class="btn btn-mini">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_198_ok.png" width="20">
                                            </button>
                                            
                                            <button class="btn btn-mini">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_197_remove.png" width="20">
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end scrollable table-->
                    </div> <!--end tab pane-->
            
                </div> <!--end tab content-->
              </div> <!--end tabbable-->
              
            </div><!--end verification-->
        </div><!--end span left column-->
        
        <div class="span5">
            <div class="well wellMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_041_charts.png" width="20"> Employment Report
                </h5>
                
                <form class="form-horizontal">
                    <div class="myStyle2T" align="right">
                        <select name="Industry">
                            <option>Choose Industry</option>
                            <option>Agriculture & Fishery</option>
                        </select>
                        
                        <select name="Month" class="span2">
                            <option>January</option>
                            <option>February<option>
                        </select>
                        
                        <select name="Year" class="span2">
                            <option>2013</option>
                            <option>2012<option>
                        </select>
                    </div>
                </form>
                
                <div style="width:505px;height:205px;overflow:auto;"><!--start scrollable table-->
                	
                    
                </div><!--end scrollable table-->
            </div><!--end well-->
            
            
            <div class="well wellMarg wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> Upcoming Events
                </h5>
                
            	<div style="width:505px;height:260px;overflow:auto;"><!--start scrollable table-->
      				<div class="row-fluid"> <!--start row fluid upcoming events-->
						
                        <div class="span3">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld5.jpg" class="thumbnail" width="150px">
                            </a>
                        </div>
        				
        				<div class="span8">
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
						<div class="span3">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld6.jpg" class="thumbnail" width="100px">
                            </a>
                            
                        </div>
        				
                       
        				<div class="span8">
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
    					<div align="right" style="margin-top:-2px">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
            </div><!--end leagues and discussion-->
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
