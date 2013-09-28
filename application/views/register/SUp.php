<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
<title>Home | e-TESDA: Work</title>
 
 <style type="text/css">
      body {
        padding-top: 80px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

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
  
 <!-- Add jQuery library -->
	<script type="text/javascript" src="assets/js/jquery-1.9.0.min.js"></script>


	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="assets/css/jquery.fancybox.js?v=2.1.4">
    
    </script>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css?v=2.1.4" media="screen" />

 
 <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="assets/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
 
 <!--Date Picker-->
 <link href="assets/css/datepicker.css" rel="stylesheet">
 
 
 <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	
	<!--From TableCloth.js-->

	<link href="assets/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />	
	<script type="text/javascript" src="assets/js/jquery.tablecloth.js"></script>
  
   </head>
   
   
   <body>
   

        <!-- Modal -->
       
		<div id="inlineSIGNIN" style="width:30%;display: none;">
			<div class="span4">
				<div class="container span3">
			<form class="form-signin">                   
      			<h2 class="form-signin-heading">Sign in</h2>
                      	<input type="text" class="input-block-level" placeholder="Email address">
                      	<input type="password" class="input-block-level" placeholder="Password">
                      	<label class="checkbox">
                        	<input type="checkbox" value="remember-me"> Remember me
                      	</label>
                      	<button class="btn btn-primary" type="submit">Sign in</button>
                      	<button class="btn">Clear</button>
                    </form>
	  
				<div class="alert">
					<span>No account? <a href="/accounts/login/">Sign up now</a>!</span>
				</div>  <!--end alert-->
    			</div>	<!--end container-->		
			</div> <!--end span4-->
		</div><!--end inlineSIGNIN-->
    
    <div class="container">
    <div style="margin-left: 13%; margin-top: 1%; margin-bottom:-5%">
    <div class="row">    
	<div class="span12">
    	<div class="well">
        	<img src="<?php echo base_url(); ?>assets/img/SUnew.png" style="margin-left:-9px;">
            <br>
            <br>
            <br>
            
            <div class="row">
            <div class="span11" style="margin-left:50px; margin-top:-35px;">
            	<div class="well">
                	<br>
                	<div align="center" style="margin-left:50px">
            
                        
                    </div>
                    <br>
                    

                             <?php 
                             echo '<form class="form-horizontal" style="margin-left:220px"';
                             
                             echo form_open('register_validation')?>
                     <div class="row">
                     	<div class="span5">
                            <div class ="erMsg">       
                              <?php echo validation_errors();?></div>
                            
                            	<div class="control-group">
                                <label class="control-label" style="margin-left:-10px;">Email: &nbsp;</label>
                                <div class="input-prepend">
                                    <span class="add-on">@</span>
                                    <?php
                                    
                                    echo "<input class='input-prepend'";
                                    echo form_input('email');
                                    
                                    ?>
                                </div>
                            </div> <!--end Email field-->
                            
                            <div class="control-group">
                                
                                <label class="control-label" style="margin-left:-10px;">Password: &nbsp;</label>
                                <div class="input-prepend">
                                    <span class="add-on">*</span>
                                    <?php
                                    echo "<input class='input-prepend'";
                                    echo    form_password('userpassword');
                                    
                                    ?>
                                </div>
                            </div> <!--end PW field-->
                            
                            <div class="control-group">
                                <label class="control-label" style="margin-left:-10px;">Confirm Password: &nbsp;</label>
                                <div class="input-prepend">
                                    <span class="add-on">**</span>
                                    <?php
                                    echo "<input class='input-prepend'";
                                    echo    form_password('cpassword');
                                    
                                    ?>
                                </div>
                            </div> <!--end CPW field-->
                            
                            <div class="help-inline" style="margin-left:170px;">
                                
                                
                                
                            
                              
                            </div> 
                            

                            
                            <div class="help-inline pull-right" style="margin-right:24px; margin-bottom:-15px">
                              
                                    <button class="btn btn-mini btn-info" type="submit" name="btnAction" value="Jobseeker">
                                        Jobseeker
                                    </button>
                                
                                     <button class="btn btn-mini btn-primary" type="submit" name="btnAction" value="Employer">
                                        Employer
                                    </button>
                            </form>
                            </div> <!--end button-->
                        </div> <!--end span 3-->
                    </div> <!--end row-->
                    </form>
                </div><!--end well-->
            </div> <!--end span10-->
            </div> <!--end row-->
		</div> <!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    </div> <!--end div-->
    </div> <!--end container-->
 
 <!-- END OF CONTENT -->   
        

 <!-- FOOTER -->           
        <br><br><br><br>
  <hr>    

</body>
</html>
