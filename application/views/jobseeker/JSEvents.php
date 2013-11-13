<!--start ModAttend-->   
<div class="modal hide fade" id="ModAttend">
	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	&nbsp;
  	</div>

  	<div class="modal-footer">
    	<h4><center>You are now attending this event.</center></h4>
  	</div>
</div>
<!--end ModAttend-->

<!--decline modal start-->
<div class="modal hide fade" id="decline">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
        <br>
  	</div>

	<div class="modal-body">
		<p class="delete"><strong>Are you sure you want to decline this event?</strong></p>
        
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary"><img src="<?php echo base_url()?>assets/img/icons/glyphicons_198_ok.png" width="15"> Yes</button>
        <a href="#" class="btn btn-info" data-dismiss="modal"><img src="<?php echo base_url()?>assets/img/icons/glyphicons_197_remove.png" width="15"> No &nbsp;</a> 
        </div> 
    </div>
</div>
<!-- decline modal end-->

<!--attendE modal start-->
<div class="modal hide fade" id="attendE">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3><img src="<?php echo base_url()?>assets/img/icons/glyphicons_045_calendar.png"> Attend Event</h3>
  	</div>

	<div class="modal-body">
		<p class="delete"><strong>Do you want to attend this event?</strong></p>
        
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary"><img src="<?php echo base_url()?>assets/img/icons/glyphicons_198_ok.png" width="15"> Yes</button>
        <a href="#" class="btn btn-info" data-dismiss="modal"><img src="<?php echo base_url()?>assets/img/icons/glyphicons_197_remove.png" width="15"> No &nbsp;</a> 
        </div> 
    </div>
</div>
<!-- attendE modal end-->

               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg2b">
                <h5 class="media-heading">
                <img src="<?php echo base_url()?>assets/img/icons/glyphicons_027_search.png" width="18"> Search Event
            </h5>
                
                <div style="width:310px;height:500px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="control-group"><!-- start div EN -->
                        <div class="myStyleQS3">
                            <input type="text" id="EN" name="EN" placeholder="Event Name">
                        </div>
                    </div><!-- end div EN -->


					<div class="myStyle3QS">
                        <select>
                            <option>Agriculture & Fishery</option>
                            <option>Automotive & Land Transportation</option>
                            <option>Construction</option>
                            <option>Decorative Arts</option>
                        </select>
                    </div>
                    
                    <div class="myStyle3QS2">
                        <select name="Region">
                            <option>NCR</option>
                            <option>Region I</option>
                        </select>
                    </div>
                    
                    <div class="myStyle3QS2">                        
                        <select name="City">
                        <option>Pasig</option>
                        <option>Makati</option>
                  	</select>
                    </div>
                    
                    <div align="right" class="qsBtn">
                    	<a href="JSEventsAll.html" class="btn btn-info">
                        	Search
                        </a>
                    </div>
                    
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_266_flag.png" width="25"> Events
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#UP" data-toggle="tab">Upcoming</a></li>
                        <li><a href="#INV" data-toggle="tab">Invitation</a></li>
                        <li><a href="#All" data-toggle="tab">All</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="UP">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            <?php
               
                    foreach ($myevents as $a)
                     {?>
                          <table> <!--start one event-->
                            <tr>
                               
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	 <a href='<?php echo base_url()?>jobseeker/event_details/<?php echo $a['eventno']?>' class="LeaName3">
                                	<?php   echo $a['eventtitle'];?></a>
                                	<td>
                                    	<img src="<?php echo base_url()?>eventpics/<?php echo $a['eventpic']?>" class="thumbnail7 ePicMarg"/>
                                    </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">
                                            <strong><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> Chef Philippines
                                            | <em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> <?php   echo $a['startdate'];?>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> <?php   echo $a['starttime'];?>
                                            </em>
                                          
                                            <br>
                                            <strong>Location</strong>: <?php   echo $a['region'];?> | <?php   echo $a['city'];?> <br>
                                            <strong>Venue:</strong> <?php   echo $a['venue'];?> <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> <?php   echo $a['purpose'];?>
                                         </p>
                                      
                                        
                                    </td>
                                 
                                </tr>
                                
                            </tbody>
                              
                    	</table><!--end one event-->
                         <div class="pull-right">
                                         	<span class="label label-info">
                                            	ATTENDING
                                            </span>
                                        </div>
                        <br>
                        <hr class="hrLeagTab">
                        
                        
                               <?php    }
                            ?>
                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invitation-->
                    
                    <div class="tab-pane" id="INV">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            <?php
               
                    foreach ($invevents as $a)
                     {?>
                         <table> <!--start one event-->
                            <tr>
                               
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            		<tr>
                                	 <a href='<?php echo base_url()?>jobseeker/event_details/<?php echo $a['eventno']?>' class="LeaName3">
                                	<?php   echo $a['eventtitle'];?></a>
                                	<td>
                                    	<img src="<?php echo base_url()?>eventpics/<?php echo $a['eventpic']?>" class="thumbnail7 ePicMarg"/>
                                    </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">
                                            <strong><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> Chef Philippines
                                            | <em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> <?php   echo $a['startdate'];?>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> <?php   echo $a['starttime'];?>
                                            </em>
                                          
                                            <br>
                                            <strong>Location</strong>: <?php   echo $a['region'];?> | <?php   echo $a['city'];?> <br>
                                            <strong>Venue:</strong> <?php   echo $a['venue'];?> <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> <?php   echo $a['purpose'];?>
                                         </p>
                                      
                                        
                                    </td>
                                 
                                </tr>
                                
                            </tbody>
                              
                    	</table><!--end one event-->
                        <div class="pull-right" style="margin-top:7px">
                                         	<span class="btn btn-info btn-mini"><a data-toggle="modal" href="#ModAttend" class="attendBtn">Confirm</a></span>
            								<span class="btn btn-danger btn-mini"><a data-toggle="modal" href="#decline" class="attendBtn">Decline</a></span>
                                        </div>
                        <br>
                        <br>
                        <hr class="hrLeagTab">
                        
                     
                                 
                         <?php
                         
                     }
                            ?>
                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invitation-->
                    
                    <div class="tab-pane" id="All">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                        	  <?php
               
                    foreach ($myevents as $a)
                     {
                        $eno[] = $a['eventno'];
                     }
                       foreach($eventall as $a)
                     {
                           
                       ?>
                          <table> <!--start one event-->
                            <tr>
                               
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            		<tr>
                                	 <a href='<?php echo base_url()?>jobseeker/event_details/<?php echo $a['eventno']?>' class="LeaName3">
                                	<?php   echo $a['eventtitle'];?></a>
                                	<td>
                                    	<img src="<?php echo base_url()?>eventpics/<?php echo $a['eventpic']?>" class="thumbnail7 ePicMarg"/>
                                    </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">
                                            <strong><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> Chef Philippines
                                            | <em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> <?php   echo $a['startdate'];?>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> <?php   echo $a['starttime'];?>
                                            </em>
                                          
                                            <br>
                                            <strong>Location</strong>: <?php   echo $a['region'];?> | <?php   echo $a['city'];?> <br>
                                            <strong>Venue:</strong> <?php   echo $a['venue'];?> <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> <?php   echo $a['purpose'];?>
                                         </p>
                                      
                                        
                                    </td>
                                 
                                </tr>
                                
                            </tbody>
                              
                    	</table><!--end one event-->
                         <div class="pull-right">
                                         	  <?php 
                                        
                                        if(in_array($a['eventno'],$eno))
                                        {
                                            echo '<span class="label label-info">
                                            	JOINED
                                            </span>';
                                        }
                                        else {
                                        ?>
                                        <span>
                                            	<a href="<?php echo base_url()?>jobseeker/attend_event/<?php echo $a['eventno']?>" class="btn btn-primary btn-mini">
                                                    &nbsp; Attend &nbsp;
                                                </a>
                                            </span>
                                        <?php
                                        }
                                        ?>
                                        </div>
                        <br>
                        <hr class="hrLeagTab">
                        
                         <?php
                                }
                                ?>
                        </div><!--end scrollable-->
                    </div> <!--end tab pane invited-->
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Events-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#test').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>
</body>