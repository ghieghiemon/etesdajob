<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/datepicker.css"> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
<?php
foreach ($details as $a)
{
?> 
<form method="post" action='<?php echo base_url()?>employer/employer_evupdate/<?php echo $a['eventno']?>'>
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
                         <!--<label class="ePicUpload2">Title:</label>-->
                        Title: &nbsp;&nbsp; <input type="text" id="EN" name="EN" value="<?php echo $a['eventtitle']?>">
                    </div>
                </div><!-- end div EN -->
                
                
                <div class="control-group" style="margin-top:-10px;"><!-- start div Details-->
                    <div class="myStyle3EventDet">
                         
                        Details:<textarea id="Det" name="Det" rows="3"><?php echo $a['purpose']?> </textarea>
                        
                    </div>
                </div><!-- end div Details -->
                
              
                
                <div class="control-group" a>
                    
                       <div class="myStyleQS3" style="margin-left:20px;">
                             Date:<input type="text" id="date" name="date" value="<?php echo $a['startdate']?>">
                        </div>
                  </div><!--end date-->
                  
                  <div class="control-group">
                  
                       <div class="myStyleQS3" style="margin-left:20px;">
                          Time: <input type="text" id="time" name="time" value="<?php echo $a['starttime']?>">
                        </div>
                  </div><!--end date-->
                
                <div class="control-group eWellMarg">
                    
                    <div class="controls" style="margin-left:20px;">
                          Picture: &nbsp;<input value ="upload" name="userfile" id="pic" type="file" />
                    </div>
                </div> <!--end Picture field-->
                <br><br>
    	</div><!--end well-->
        
        <h5 class="media-heading previewColor">
                | Location
            </h5>
            
            <div class="well" style="margin-left: 1%; margin-top: 1%">
            	
                  
                  <div class="control-group eWellMarg2"><!-- start div VEN-->
                      <div class="myStyleQS3" style="margin-top:-6px;">
                          <input type="text" id="VEN" name="VEN" value="<?php echo $a['venue']?>">
                      </div>
                  </div><!-- end div VEN -->
            </div><!--end well-->
  	</div><!--end modal-body-->
    
    <div class="modal-footer">
    	<button  type="submit" class="btn btn-info">Save</button>
      
    </div>
        </form>
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
                                 ?>
                                   <div class="pull-right" style="margin-top:2px">
                                         	<span>
                                            	<a href="#editED" data-toggle="modal" role="button" class="btn btn-mini btn-info">
                                                    &nbsp; Edit Event Details
                                                </a>
                                            </span>
                                        </div>
                                 
                         <?php  echo' <tbody>
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
                                            
                                            
                                                <br>
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
                                            	<span class="btn btn-primary btn-mini pull-right">'?>
                                                <a href="<?php echo base_url()?>employer/employer_evinvite/<?php echo $row['eventno']?>" class="attendBtn">Invite</a>
                                              <?php echo'  </span>
                                               
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
                        
                        <tbody>';?>
                              <?php foreach ($attendees as $r)
                     {

                           echo' <tr>
                                <td>
                                    <a href="#">'?>
                                                
                               <img src="<?php echo base_url()?>profilepics/<?php echo $r['profile_pic'];?>" alt="" class="attendeesPic"></a>
                                    
                                 <?php echo'  <p class="attendeeName">';
                                      echo $r['firstname'];
                                                  echo " ";
                                                  echo $r['middlename'];
                                                  echo " ";
                                                  echo $r['lastname'];
                                    echo' </p>
                                </td>
                           </tr>';
                     }?>
                          <?php echo '   
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
    <script>
$("#date").datepicker( {
    format: 'yyyy-mm-dd'
});
</script>
       <?php
                                  }
                                  ?>