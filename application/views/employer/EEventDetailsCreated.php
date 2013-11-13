<!--modal myModal content-->       
<div class="modal hide fade" id="ModAttend">
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
    		<a href="#">Register</a>
 		</div>
	</div>
	<!--end myModal content-->

               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
     <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="25">
                <a href="JSEvents.html" class="Comm"> 
                	Events
                </a>
            </h3>
            
            <div class="row-fluid">
              	<div class="span11">
                	<div class="well" style="margin-left:120px;">
                    	<table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span5"></th>
                                </tr>
                            </thead>
                             <?php foreach ($details as $row)
                     {
                           echo' <tbody>
                            	<tr>
                                	<td>';?>
                            <img src="<?php echo base_url()?>eventpics/<?php echo $row['eventpic']?>"class="thumbnail3 "/>
                                 
                                    </td>
                                    <a href='<?php echo $row['eventno']?>' class="Name4">
                                        </a>
                                   <?php
                                    echo'<td>
                                        
                                    	<p class="evName">';
                                       echo $row['eventtitle'];
                                       echo' </p>
                                        <p class="evDetails">
                                        	<strong>';?>
                                       <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11"> 
                                       <?php echo' Hosted By:';?>
                                   
                                         <a href="<?php echo base_url()?>pub/employer_profilepage/<?php echo $row['createdby']?>" class="Name4">
                                            <?php
                                            $companyName = $this->model_pub->get_companyName($row['createdby']);
                                            echo $companyName;
                                            ?>
                                        </a>
                                      <?php //echo $row['companyName'];
                                           echo' | ';?>
                                               <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> 
                                      
                                                   <?php 
                                                 echo $row['startdate'];
                                           echo' | ' ;?>
                                                 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> 
                                                  <?php 
                                                 echo $row['starttime'];
                                                 echo' <br></strong>
                                           	<strong> Location: </strong>' ;
                                                echo $row['region'];
                                                echo ' | ';
                                                echo $row['city'];
                                                echo ' <br>
                                            <strong>Venue:</strong> ';
                                            echo $row['venue'];
                                            echo'<br>
                                            
                                 <div class="row marg3">
                                            
                                                <span class="btn btn-info btn-mini pull-right">
                                                <a data-toggle="modal" href="#ModAttend" class="attendBtn">Edit</a>
                                                </span>
                                    </div>
                                       <hr class="hrRApp2">
                                        </p>
                                        <p class="evDetails2">
                                        	<em><strong>Details:</strong></em> <br>';
                                               echo $row['purpose'];
                                        echo'</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                	<td>
                                    	<p>
                                        	<hr class="hrRApp2">
                                        </p>
                                    </td>
                                    
                                    <td>
                                    	<p>
                                        	<hr class="hrRApp2">
                                        </p>
                                    </td>
                                </tr>
                                
                            </tbody>
                            
                    	</table>
                        
                        <p class="evAttendees">Attendees'; 
                       echo' (' ;
                        echo $row['participantscount'];
                       echo')';
                        echo'</p>
                            <br>
                                    <div class="row marg3">
                                            	<span class="btn btn-primary btn-mini pull-right">
                                                <a data-toggle="modal" href="#ModAttend" class="attendBtn">Invite</a>
                                                </span>
                                               
                                    </div>

                        <div style="width:1005px;height:150px;overflow:auto;"><!--start scrollable table-->
                        <table class="table-condensed table-hover" style="margin-left:43px;">
                        <thead>
                        <tr>
                            <th class="span2"></th>
                            <th class="span2"></th>
                            <th class="span2"></th>
                            <th class="span2"></th>
                            
                        </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#">' ?>
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/user.png" alt="" class="attendeesPic"></a>
                                   <?php echo'  <p class="attendeeName">Angelica Guerrero</p>
                                </td>
                            
                           
                                
                            
                             </tr> <!--one row-->
                        </tbody>
                     ';}  ?>
                    </table><!--end table-->
                    </div><!--end scrollable table-->
                    </div><!--end well-->
                </div><!--end span-->
              </div><!--end row-fluid-->
            
            </div><!--end events-->
        </div><!--end span-->
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

     

    
</body>