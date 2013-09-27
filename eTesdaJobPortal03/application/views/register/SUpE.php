<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<title>Sign Up | e-TESDA: Work</title>
 
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
  



<div class="container">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading"> 
                	<img src="assets/img/SUnew.png" style="margin-left:-8px; margin-top:-4px;">
                </h3>
                
                <hr class="hrPV">
                
            	<div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLink">
                        	<a href="#tab1" data-toggle="tab">
                            	<img src="assets/img/icons/glyphicons_352_nameplate.png" width="20"> Company Information
                         	</a>
                        </li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<div style="width:970px;height:520px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well GIWellMarg">
                                        
                                          <form method ="post" action ="<?php echo base_url()?>main/register_edetails/<?php echo $userid?>">
                  
                                            	<div class="form-horizontalGI row-fluid">
                                                	<div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Industry: &nbsp;</label>
                                                            <div class="controls">
                                                                 <?php    
                                                                $industry['#'] = 'Please Select';
                                                                $params = 'id="industries"'; 
                                                               echo form_dropdown('industry', $industry,'#',$params);     
                                                               ?> 
                                                            </div>
                                                        </div> <!--end Industry field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Company Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="CName" name="CName" placeholder="" >
                                                            </div>
                                                        </div> <!--end CN field-->
                                                       
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Year Started: &nbsp;</label>
                                                            <div class="controls">
                                                                <div class="row-fluid">
                                                                <input class="help-inline" type="text" id="Yr" name="Yr" placeholder="YYYY" >
                                                                </div> 
                                                            </div>
                                                        </div> <!--end YS field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Company Background: &nbsp;</label>
                                                            <div class="controls">
                                                                <textarea type="text" rows="3" id="CB" name="CB" placeholder="" ></textarea>
                                                            </div>
                                                        </div> <!--end CB field-->
                                                        
<!--                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Upload Picture: &nbsp;</label>
                                                            <div class="controls" style="margin-left:30px;">
                                                                <form method="post" action="upload-page.php" enctype="multipart/form-data" />
                                                                    <input name="pic" id="pic" type="file" class="upPic" />
                                                                </form>  
                                                            </div>
                                                        </div> end Picture field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">License Number: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="LIN" name="LIN" placeholder="" >
                                                            </div>
                                                        </div> <!--end LIN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Contact Person: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="CP" name="CP" placeholder="" >
                                                            </div>
                                                        </div> <!--end CP field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Position: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="Pos" name="Pos" placeholder="" >
                                                            </div>
                                                        </div> <!--end Pos field-->
                                                    </div><!--end span-->
                                                    
                                                    <div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Company Email: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="email" id="CE" name="CE" placeholder="" >
                                                            </div>
                                                        </div> <!--end CE field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Contact Number: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="tel" id="CN" name="CN" placeholder="" >
                                                            </div>
                                                        </div> <!--end CN field-->
                                                        <br>
                                                      
                                                        <font class="address"> Address</font>
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Street No: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="SN" name="SN" placeholder="" >
                                                            </div>
                                                        </div> <!--end SN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Brgy: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="BGY" name="BGY" placeholder="" >
                                                            </div>
                                                        </div> <!--end BGY field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">District: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="DIS" name="DIS" placeholder="" >
                                                            </div>
                                                        </div> <!--end DIS field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Region: &nbsp;</label>
                                                            <div class="controls">
                                                                 <?php $regions['#'] = 'Please Select'; ?>
                                                                <?php $cities['#'] = 'Please Select'; ?>
                                                        <?php 
                                                          $params = 'id="region"'; 
                                                         echo form_dropdown('regionid', $regions, '#',$params);

                                                        ?> 
                                                            </div>
                                                        </div> <!--end CoP field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">City/Province: &nbsp;</label>
                                                            <div class="controls">
                                                               <?php 

                                                            $params = 'id="cities"'; 
                                                           echo form_dropdown('cityid', $cities, '#', $params);
                                                           ?>
                                                                                                           </div>
                                                        </div> <!--end RGN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Zipcode: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="ZIP" name="ZIP" placeholder="" >
                                                            </div>
                                            			</div> <!--end Zip field-->
                                                        
                                                </div><!--end span-->
                                                </div><!--end row-fluid-->
                                                
                                                 <div class="row-fluid">
                	<div class="pull-right">
                            
                    	<button type="submit" class="btn btn-primary">Done</button>
                        
                    </div>
                                			</form>
                                		</div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                        
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
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
<!-- Add jQuery library -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/region.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.4"></script>

<!--add carousel-->


<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#test').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>



    
</body>

</html>
