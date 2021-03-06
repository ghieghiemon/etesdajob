   <?php
foreach ($jobs as $a)
{
?>
<div class="modal hide fade modal-wide" id="view<?php echo $a['jobno']?>">
    
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Vacancy Details</h3>
  	</div>
	<div class="modal-body">
                <span id="label1"></span>
		<h4 class="media-heading previewColor">| GENERAL INFORMATION </h4>
        	<div class="row-fluid">
            	<div class="span6">
                	<table class="previewMarg">
                          <thead>
                              <tr>
                                  <th class="span1"></th>
                                  <th class="span4"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                              <tr>
                                  <td class="previewDet">
                                      Job Title:
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<?php 
                                            echo $a['jobtitle'];
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      		<?php $desc = $this->model_jobseeker->get_jobdescription($a['jobno']);
                                            echo  $desc;
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                               <tr>
                                  <td class="previewDet">
                                      Industry:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      		<?php 
                                            echo $a['sectorName'];
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<table class="previewMarg2">
                          <thead>
                              <tr>
                                  <th class="span3"></th>
                                  <th class="span2"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                          	  <tr>
                                  <td class="previewDet">
                                      Region: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<?php 
                                            echo $a['region'];
                                        ?>
                                      </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      		<?php 
                                            echo $a['city'];
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Number of Vacancies: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      		<?php 
                                            echo $a['vacanciesleft'];
                                        ?>
                                      </font>	
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td class="previewDet">
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	 <?php
                                                  $date2 = $a['expirationdate'];
//                                                  
                                                  $date = date('Y-m-d');
                                                  $diff = abs(strtotime($date2) - strtotime($date));

                                                  $days = round((($diff/24)/60)/60);
                                                  if ($a['expirationdate'] > $a['currentdate'])
                                                  {
                                                  echo $days;
                                                  echo " days left";
                                                  }
                                                  else
                                                  {
                                                    echo '<font color="red"><strong>EXPIRED</strong></font>';
                                                  }
                                                ?>
                                      
                                      </font>
                                  </td>
                              </tr>
                              
                          </tbody>
                      </table>
                </div>
            </div><!--end row-fluid-->
        <hr class="hrLeagTab">
            
        <h4 class="media-heading previewColor">| QUALIFICATIONS </h4>
        	<div class="row-fluid">
            	<div class="span6">
                	<table class="previewMarg">
                          <thead>
                              <tr>
                                  <th class="span2"></th>
                                  <th class="span4"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                              <tr>
                                  <td class="previewDet">
                                      Sex:
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      		<?php 
                                            echo $a['sex'];
                                        ?>
                                        
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="sAge" name="sAge">
                                            	<?php 
                                            echo $a['agestart'];
                                        ?>
                                        </span>
                                        - 
                                        <span id="eAge" name="eAge">
                                            	<?php 
                                            echo $a['ageend'];
                                        ?>
                                        </span>	
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<p class="previewCCS">
                		<strong>CERTIFICATION/S:</strong> 
                        <font class="previewCCS2">
                          <?php
                                  $cert = $this->model_jobseeker->get_jobCerts($a['jobno']);
                                                         $count = count($cert);
                                                         foreach ($cert as $b)
                                                         {
                                                             echo $b['ncname'];
                                                             echo " ". $b['level'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        </font>
                    </p>
                   <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">
                        <?php
                                  $comp = $this->model_jobseeker->get_jobComps($a['jobno']);
                                                         $count = count($cert);
                                                         foreach ($comp as $c)
                                                         {
                                                             echo $c['cocname'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        	
                        </font>
                    </p>
                </div><!--end span-->
                
               
            </div><!--end row-fluid-->
	</div>
 
  	<div class="modal-footer">
      
        <a href="" class="btn btn-primary" data-dismiss="modal">Close</a> 
  	</div>
</div>
<?php 
}
?>
<body>
             <!--modal join Modal content-->       
<div class="modal hide fade" id="signModal">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In Required</h3>
  		</div>
        
  		<div class="modal-body">
           <form method="post" action="<?php echo base_url()?>main/login_validation"  name="login_form">
            <p><input type="text" class="span3" name="email" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="userpassword" id="userpassword" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
            </p>
   	 	</form>
        </div>
        <div class="modal-footer">
    		Not a member?
    		<a href="<?php echo base_url()?>pub/pub_signup">Register</a>
 		</div>
	</div>
	<!--end join Modal content-->          
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg2b">
                <h5 class="media-heading">
                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
            </h5>
                <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>pub/pub_searchjob'/>
                <div style="width:310px;height:460px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStyleQS3">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStyleQS3">
                            <input type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

					<div class="myStyle3QS">
                                      <?php    
             $drpindustries['0'] = 'Industry';
            echo form_dropdown('industry', $drpindustries,'0');     
            ?> 
                    </div>
                    
                    <div class="myStyle3QS2">
                         <?php $regions['0'] = 'Region'; ?>
                    <?php $cities['0'] = 'City'; ?>
                    <?php 
                    $params = 'id="regions"'; 
                    echo form_dropdown('regionid', $regions, '0',$params);
                    ?> 
                    </div>
                    
                    <div class="myStyle3QS2">                        
                          <?php 
                    $params = 'id="cities"'; 
                    echo form_dropdown('cityid', $cities, '0', $params);
                    ?> 
                    </div>
                    
                 
                    <div align="right">
                    <?php 

                    echo" <input class='qsBtn btn btn-info'";
                    echo form_submit('submit', 'Search');
                    echo form_close(); 
                    ?>
                    </form>
                    </div>
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_264_vcard.png" width="25"> Job Market
            </h3>
            <br>
            <br>
            <div class="tabbable"> <!-- start tabs-->
               
          
                 
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            
                        	<table id="test">
                            <thead>
                                <tr>
                                    <?php
                                    if(count($search) != 0)
                     {
                        echo' <th class="span3" style="text-align:center">Job Title</th>
                             <th class="span4" style="text-align:center">Description</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                        <th class="span3" style="text-align:center">Effectivity</th>
                                       <th class="span1" style="text-align:center">Vacancies</th>
                             
                                  
                                  
                                    <th class="span1" style="text-align:center">Action</th>';
                     }
                     ?>
                                    
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                                                                      
                  	<?php
                    $ctr = 1;
                    if(count($search) == 0)
                     {
                         echo '<p class = "noCommYet"> There are no jobs available</p>';
                     }
                     else
                     {
             foreach($search as $row){
                   if($ctr >=1){
             
                echo'
                                <tr>
                                    
                                    <td>';?>
                                    
                                    
                                        <a data-toggle="modal"href='#view<?php echo $row['jobno']?>'>
                                   <?php echo $row['jobtitle'];?> </a>
                                                                  

                                  <?php  echo'</td>
                                   
                                    <td>
                                       ';
                                    echo $row['description'];
                                       
                                       echo' 
                                    </td>
                                    
  <td>
                                        <a href="#" class="recAppName">';
                                    echo $row['companyName'];
                                       
                                       echo' </a>
                                    </td>
                                    
                                    <td>';
                                       echo $row['region'];
                                        echo ' |  ';
                                        echo $row['city'];
                                     
                                        echo' </td>';
                                        
                                            echo' <td>
                                    
                                              ' ?>
                                                       
                                                            <?php
                                                            $date2 = $row['expirationdate'];
                                                            $date = date('Y-m-d');
                                                            $diff = abs(strtotime($date2) - strtotime($date));

                                                            $days = round((($diff/24)/60)/60);
                                                            echo $days. " days left";
                                                            ?>
                                
                                                       <?php echo' </td>
                                    
                               
                                    
                                    <td>';
                                        echo'<span class="label">';
                                       echo $row['vacanciesleft'];
                                       echo' Left </span>
                                    </td>'?>
                                        
                                
                                                       <?php echo'                                     
                                 
                                    
                                 
                                    
                                    
                                    <td>
                                    <a data-toggle="modal" href="#signModal" class="btn btn-mini btn-info">
                                    	Apply</a>
                                    </td>
                                </tr>
                                
                              ' ;                       
                           }
                     $ctr += 1;
                     }
                     }
                    ?>
                  
                            </tbody>
                        </table>	
                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invited-->
                    
                 
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Job market-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

 

      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.fancybox.pack.js?v=2.1.4"></script>

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
