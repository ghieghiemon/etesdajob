          
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="assets/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
                </h5>
            	<br>
                <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>pub/pub_searchjob'/>
                
                <div style="width:280px;height:215px;overflow:auto;"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStylePQS">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStylePQS2">
                            <input type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

					<div class="myStyle2PQS">
                        <?php    
             $drpindustries['0'] = 'Industry';
            echo form_dropdown('industry', $drpindustries,'0');     
            ?> 
                    </div>
                    
                    <div class="myStyle2PQS2">
                    <?php $regions['0'] = 'Region'; ?>
                    <?php $cities['0'] = 'City'; ?>
                    <?php 
                    $params = 'id="region"'; 
                    echo form_dropdown('regionid', $regions, '0',$params);
                    ?> 

                    <?php 
                    $params = 'id="cities"'; 
                    echo form_dropdown('cityid', $cities, '0', $params);
                    ?> 
                    </div>
                    
                    <div align="right">
                    	 <?php 
                      
                echo" <input class='btn btn-info btn-mini'";
                echo form_submit('submit', 'Search');
                echo form_close(); 
                ?>
                        </form>
                    </div>
                    
                </div><!--end scrollable-->
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="assets/img/icons/glyphicons_266_flag.png" width="17"> Events
                </h5>
                
                <div style="width:280px;height:290px;overflow:auto;"><!--start scrollable table-->
      		  <!--start row fluid upcoming events-->		
                   
                  	<?php
                    $ctr = 1;
                    if(count($event) == 0)
                     {
                         echo '<p class = "noCommYet">There are no upcoming events</p>';
                     }
                     else
                     {
                    foreach ($event as $row)
                     {
                        if($ctr <3){
                echo'
                  <div class="row-fluid"> 
                                  
						
                        <div class="span2">
                        	<a data-toggle="modal" href="#ModEventDes">'?>
                            	<img src="<?php echo base_url()?>eventpics/<?php echo $row['eventpic']?>"  class="thumbnail" alt="">
                                
                           <?php echo' </a>
                        </div>
        				
        				<div class="span9">
							<p class="marg2">'?>
              
                        		<a href='<?php echo base_url()?>pub/pevent_details/<?php echo $row['eventno']?>' class="Name4">
                                            
                                            
                                       <?php echo $row['eventtitle'];
                                      echo'  </a>
                            </p>
          		
                			<p class="evDetails3">
                            	<em><img src="assets/img/icons/glyphicons_045_calendar.png" width="11">'; 
                                echo $row['startdate'];
                                	echo ' | <img src="assets/img/icons/glyphicons_054_clock.png" width="11">';
                                            echo $row['starttime'];
                               echo' </em><br>
                                <strong>Location</strong>: ';
                                echo $row['region'];
                               echo' | ';
                               echo $row['city'];
                               echo' <br>
                                <strong>Venue:</strong>';
                                echo $row['venue'];
                               echo'<br>
                            	<span class="btn btn-info btn-mini"><a href="#" class="attendBtn">';
                                 echo $row['participantscount'];
                                echo' Attendees
                                </a></span>
                            </p>
					
						</div>
					</div>';
                                         }
                     $ctr += 1;
                     }
                     }
                    ?>
                  
                  
                    <!--end row-fluid-->
    				
     			
                    </div><!--end scrollable table-->
                    
    				<div class="row-fluid">
    					<div align="right" style="margin-top:-15px">
                            <a href='pub/pub_allevents'>
                                <img src="assets/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
                    
            </div><!--end events-->
        </div><!--end span left folumn-->
        
        <div class="span6">
        	<div class="well wellMarg wellUpMarg">
            	<h5 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_327_sampler.png" width="25" height="15">&nbsp;What's New?</h5>
               		<p class="whatsNFont" >
                	<a href='pub/pub_alljob'>110 job vacancies nationwide!</a>
                </p>
            </div><!--end whats new-->
            
          
            <div class="well wellMarg wellUpMarg">
            	<h5 class="media header"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="18"> Industries</h5>
                <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                    Legend:  (#) - no. of vacancies
                </div>
                <div class="nav PProfE2" style="width:610px;height:130px;margin-top:10px;margin-bottom:-5px;overflow:auto;">
                   <?php 
                    foreach ($industries as $a)
                    {
                        ?>
                        <a href="<?php echo base_url('pub/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd2">
                        <h5 class="media-heading">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>" class="PProfE"> 
                            <br>(<?php echo $a['totalvacancies']?>)
                        </h5>
                        </a>
                    <?php
                    }
                    ?>  
                </div> <!--end viewport-->
                
                <div class="row-fluid">
                <div class="pull-right">
                    <a href="<?php echo base_url()?>pub/industries" class="pull-right">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                    </a>
                </div>
                </div><!--end row-->
            </div><!--end industries-->
            
            <div class="row-fluid">
            	<div class="span12">
                	<div class="well wellMarg wellUpMarg">
                    	<h5 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="25"> Leagues</h5>
                    	<div style="width:618px;height:295px;overflow:auto;"><!--start scrollable table-->
                            
                            <?php
                            $count = 1;
                            foreach ($leagues as $a)
                            {
                                if($count<3)
                                {
                            ?>
                            <div class="row-fluid"> <!--start row fluid universal leagues-->
                                <div class="span3">
                                    <a data-toggle="modal" href="#">
                                        <img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="pubLpic" alt="">
                                    </a>
                                </div> <!--end span3-->
                                
                                <div class="span8">
                                    <p class="marg2 evDetails3">
                                        <a href="<?php echo base_url()?>pub/leagueviewpage/<?php echo $a['leagueno']?>" class="Name4"><?php echo $a['leaguename']?></a><br>
                                        <a href="<?php echo base_url('pub/search_industries/' . $a['leagueindustry']); ?>" class="label label-info">
                                            <?php
                                            $sector = $this->model_pub->get_industryName($a['leagueindustry']);
                                            echo $sector;
                                            ?>
                                        </a>
                                        <br>
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                        by <a href="#" class="Name2">
                                            <?php
                                            $type = $this->model_pub->get_userType($a['createdby']);
                                            if($type == 'EMPLOYER')
                                                $by = $this->model_pub->get_companyName($a['createdby']);
                                            else if ($type == 'JOBADMIN')
                                                $by = 'TESDA';
                                            echo $by;
                                            ?>
                                        </a>
                                        | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since <?php echo $a['since']?> <br>
                                    </p>
                                    
                                    <p class="evDetails3">
                                        <?php echo $a['leaguedescription']?> <br>
                                    
                                        <span class="btn btn-primary btn-mini">
                                            <a data-toggle="modal" href="#myModal" class="attendBtn">
                                                &nbsp; Join &nbsp;
                                            </a>
                                        </span>
                                        <span class="btn btn-info btn-mini"><a data-toggle="modal" href="#ModLeagMembers" class="attendBtn"><?php echo $a['members']?> members</a></span>
                                    </p>
                                </div> <!--end span7-->
                            </div> <!--end row-fluid-->
                                <br>
                            <?php
                                    $count +=1;
                                }
                            }
                            ?>
                        <div align="right">
                                <a href="<?php echo base_url()?>pub/leaguepage">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                </a>
                            </div>
                        </div><!--end scrollable table-->
                    </div><!--end well-->
                </div><!--end leagues-->
                
            </div><!--end row-fluid-->
        </div><!--end span middle column-->
        
        <div class="span3">
        	<div class="well wellMarg wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_358_file_import.png" width="20"> Sign up to e-TESDA WORK
                </h5>
                
                <table>
                	<thead>
                    	<tr>
                        	<th class="span1"></th>
                            <th class="span3"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    	<tr>
                        	<td>
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont">Email</label>
                            	<input type="text" id="email" name="email">
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont2">Password</label>
                            	<input type="text" id="userpassword" name="userpassowrd">
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="SUpFont">
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont2">Confirm Password</label>
                            	<input type="text" id="CPW">
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="SUpFont">
                            </td>
                            
                            <td align="center">
                                <div class="help-inline" style="margin-left:-20px;">
                                    <p>
                                        <label class="radio SUpFont3">
                                            <input type="radio" name="JS"> Job Seeker
                                        </label>
                                    </p>
                                </div> <!--end js button-->
                        
                                <div class="help-inline">
                                  <p>
                                      <label class="radio SUpFont3">
                                          <input type="radio" name="EM"> Employer
                                      </label>
                                  </p>
                                </div> <!--end employer-->
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="row-fluid">
                	<div align="right" style="margin-right:20px;">
                        <a href="#" class="btn btn-mini btn-primary">
                            Sign Up
                        </a>
                    </div>
                </div><!--end signup button-->
            </div><!--end well signup-->
            
            <div class="well wellMarg wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_037_coins.png" width="20"> Companies
                </h5>
                
                <div style="width:295px;height:290px;overflow:auto;"><!--start scrollable table-->
      		<?php
                foreach($companies as $a)
                {
                    ?>
                    <div class="row-fluid"> <!--start row fluid companies-->
                        <div class="span2">
                        	<a href="#">
                                <?php    $pic = $this->model_pub->get_companyPic($a['companyID']); ?>
                            	<img src="<?php echo base_url()?>employerpics/<?php echo $pic?>" class="thumbnail compPicMarg" alt="">
                            </a>
                        </div>
        				<div class="span9">
                                        <p class="marg2">
                        		<a href="<?php echo base_url()?>pub/employer_profilepage/<?php echo $a['companyID']?>" class="Name4">
                                            <?php
                                            $companyName = $this->model_pub->get_companyName($a['companyID']);
                                            echo $companyName;
                                            ?>
                                        </a>
                                <br>
                                <font class="pVac">
                                    No. of Vacancies: 
                                    	<a href="#" class="industLabel2">
                                        	<?php echo $a['totalvacancies']?>
                                        </a>
                                </font>
                                        </p>
                                        </div>
                    </div> <!--end row-fluid-->
                    <?php
                }
    		?>
                    
     		 </div><!--end scrollable table-->
                 <div class="row-fluid">
    					<div align="right" style="margin-top:-15px">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
            </div><!--end well companies-->
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

