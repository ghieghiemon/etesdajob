
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>TESDA</title>
	
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/layout.css" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/bootstrap/js/hideshow.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/bootstrap/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

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
                    <img src="<?php echo base_url()?>assets/bootstrap/img/work-logo.png"  width ="120" ></img></a>
                    
                    <div class="nav-collapse collapse">
                    	
                        <ul class="nav pull-right">
                        	
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                	<img src="<?php echo base_url()?>assets/bootstrap/img/TESDA.jpg" width="20"style="margin-left:-15px;"> TESDA
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

<!--start ModEventAttend-->
<div class="modal hide fade" id="ModEventAttend">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_148_folder_flag.png"> Attendees</h3>
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
                            	<a href="#"><img src="<?php echo base_url()?>assets/bootstrap/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            	<a href="#"><img src="<?php echo base_url()?>assets/bootstrap/img/user.png" alt="" class="members2"></a>
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



	<aside id="sidebar" class="column" style="margin-top:10px">
		
		<h3>Home</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="#">Dashboard</a></li>
            <li class="icn_new_article"><a href="#">Verify Accounts</a></li>
		</ul>	
			
		<h3>
        	<a href="#" class="Comm">
        	Industries
            </a>
        </h3>
		
		
		<h3>Reports</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Generate</a></li>
			<li class="icn_security"><a href="#">Employment Status of Graduates</a></li>
		</ul>
        
        <h3>Events</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#"></a></li>
			<li class="icn_security"><a href="#"></a></li>
		</ul>
        
        <h3>Leagues</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#"></a></li>
			<li class="icn_security"><a href="#"></a></li>
		</ul>
		
		<footer>
			<p><strong>Copyright &copy; 2013 e-TESDA</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		
		
		<article class="module width_4" style="margin-left:5px">
		<header>
        <h3 class="tabs_involved"> 
        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_010_envelope.png" width="20">
        	Invite people to join
        </h3>
		<ul class="tabs" style="margin-top:-44px;">
   			<li><a href="#tab1">Certified TESDA Graduates</a></li>
    		<li><a href="#tab2">Companies</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
            	
				<div style="width:650px;height:260px;overflow:auto;"><!--start scrollable table-->
                	<table class="tableInvCJS2 table-hover table-condensed tablesorter">
                            <thead>
                                <tr>
                                    <th class="span1" style="text-align:center">
                                    	<button class="btn btn-info btn-mini">Invite</button>
                                    	<input type="checkbox">
                                    </th>
                                    <th class="span3" style="text-align:center">Name</th>
                                    <th class="span4" style="text-align:center">Certification</th>
                                    <th class="span2" style="text-align:center">Certified Date</th>
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    
                                    <td>
                                        Edward Jones
                                    </td>
                                    
                                    <td>
                                       	Electrical Installation & Maintenance NCII
                                    </td>
                                   
                                    <td>
                                        August 2013
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    
                                    <td>
                                        Michael Gomez
                                    </td>
                                    
                                    <td>
                                        Electrical Installation & Maintenance NCI
                                    </td>
                                   
                                    <td>
                                        July 2013
                                    </td>
                                </tr>                          
                                
                            </tbody>
                        </table>
                </div><!--end scrollable-->
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
				<div style="width:650px;height:260px;overflow:auto;"><!--start scrollable table-->
                	<table class="table-condensed" style="margin-left:50px;margin-top:10px">
                    	<thead>
                        	<tr>
                            	<th class="span4"></th>
                                <th class="span7"></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        	<tr>
                            	<td class="lLabel">
                                	To: (use comma to separate emails)
                                </td>
                                
                                <td>
                                	<textarea class="span4" placeholder="" rows="3"></textarea>
                                </td>
                            </tr>
                            
                            <tr>
                            	<td class="lLabel">
                                	Message:
                                </td>
                                
                                <td>
                                	<textarea class="span4" placeholder="" rows="3">Join TESDA Job Portal and tralala.
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="row-fluid">
                    	<div align="right">
                    	<button class="btn btn-primary" style="margin-right:115px;">Invite</button>
                        </div>
                    </div><!--end invite button-->
                </div><!--end scrollable-->
			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3 class="tabs_involved"><img src="assets/img/icons/glyphicons_266_flag.png" width="17"> Upcoming Events</h3></header>
			
            <div style="width:350px;height:255px;overflow:auto;"><!--start scrollable table-->
      				<div class="row-fluid"> <!--start row fluid upcoming events-->
						
                        <div class="span2">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="assets/img/ld5.jpg" class="thumbnail" style="margin-left:10px;">
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
                            	<span class="btn btn-info btn-mini"><a href="#ModEventAttend" data-toggle="modal" class="attendBtn">10 Attendees</a></span>
                            </p>
					
						</div>
					</div> <!--end row-fluid-->
    				
     				<div class="row-fluid">
						<div class="span2">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld6.jpg" class="thumbnail" height="12" style="margin-left:10px;">
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
                                <span class="btn btn-info btn-mini "><a href="#ModEventAttend" data-toggle="modal" class="attendBtn">800 Attendees </a></span>
                            </p>
						</div>
					</div> <!--end row-fluid-->
                    </div><!--end scrollable table-->
					<div class="row-fluid">
    					<div align="right" style="margin-top:-15px;margin-right:5px;">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
		</article><!-- end of messages article -->
        
        
        <article class="module width_5" style="margin-left:5px;margin-top:10px;">
			<header>
            <h3 class="tabs_involved"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_041_charts.png" width="20"> Employment Report</font>
            	<form class="form-horizontal" style="margin-right:-80px;">
                    <div class="myStyle2T2" align="right">
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
            </header>
			<div class="module_content">
                <div style="width:960px;height:185px;overflow:auto;"><!--start scrollable table-->
                	<br>
                    <br>
                    <br>
                    
                </div><!--end scrollable table-->
			</div>
		</article><!-- end of stats article -->
		<div class="spacer"></div>
	</section>
	
   
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
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-typeahead.js"></script>>
</body>


</html>