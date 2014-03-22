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

      <div class="modal hide fade" id="editED">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3> Edit Event Details</h3>
  	</div><!--end modal-header-->

  	<div class="modal-body"> <!--Modal members-->
    	<h5 class="media-heading previewColor">
            | Summary
        </h5>
        
  		<div class="well" style="margin-left: 1%; margin-top: 1%">
            	<div class="control-group"><!-- start div EN-->
                    <div class="myStyleQS3">
                        <input type="text" id="EN" name="EN" placeholder="Event Name">
                    </div>
                </div><!-- end div EN -->
                
                <div class="control-group" style="margin-top:-10px"><!-- start div HST-->
                    <div class="myStyleQS3">
                        <input type="text" id="HST" name="HST" placeholder="Hosts">
                    </div>
                </div><!-- end div HST -->
                
                <div class="control-group" style="margin-top:-10px;"><!-- start div Details-->
                    <div class="myStyle3EventDet">
                        <textarea id="Dets" name="Det" rows="3" placeholder="Details"></textarea>
                    </div>
                </div><!-- end div Details -->
                
                <div class="myStyle3QS" style="margin-top:-10px">
                    <select>
                        <option>Choose Industry</option>
                        <option>Agriculture & Fishery</option>
                        <option>Automotive & Land Transportation</option>
                        <option>Construction</option>
                        <option>Decorative Arts</option>
                    </select>
                </div><!--end industry-->
                
                <div class="control-group" a>
                      <label class="ePicUpload2">Date:</label>
                       <div class="myStyle3EventDate" style="margin-left:60px;margin-top:-25px;">
                            <input type="text" id="Mn" name="Mn" placeholder="MM" class="span2">
                            <input type="text" id="Dy" name="Dy" placeholder="DD" class="span2">
                            <input type="text" id="Yr" name="Yr" placeholder="YYYY" class="span2">
                        </div>
                  </div><!--end date-->
                  
                  <div class="control-group">
                      <label class="ePicUpload2">Time: </label>
                       <div class="myStyle3EventDate" style="margin-left:60px;margin-top:-35px;">
                            <input type="text" id="ST" name="ST" placeholder="Start" class="span3">
                            <input type="text" id="ET" name="ET" placeholder="End" class="span3">
                        </div>
                  </div><!--end date-->
                
                <div class="control-group eWellMarg">
                    <label class="ePicUpload" style="margin-left:0px">Picture: &nbsp;</label>
                    <div class="controls" style="margin-left:60px; margin-top:-30px;">
                        <form method="post" action="upload-page.php" enctype="multipart/form-data">
                            <input name="pic" id="pic" type="file" style="font-size:10px" />
                        </form>  
                    </div>
                </div> <!--end Picture field-->
    	</div><!--end well-->
        
        <h5 class="media-heading previewColor">
                | Location
            </h5>
            
            <div class="well" style="margin-left: 1%; margin-top: 1%">
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
            </div><!--end well-->
  	</div><!--end modal-body-->
    
    <div class="modal-footer">
    	<button data-dismiss="modal" class="btn btn-info">Save</button>
    </div>
</div>
<!--end edit event details-->         
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