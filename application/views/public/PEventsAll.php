<!--start ModEventAttend-->
<div class="modal hide fade" id="ModEventAttend">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3><img src="assets/img/icons/glyphicons_148_folder_flag.png"> Attendees</h3>
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
                            	<a href="#"><img src="assets/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            	<a href="#"><img src="assets/img/user.png" alt="" class="members2"></a>
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

               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
     <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_266_flag.png" width="25">
                <a href="JSEvents.html" class="Comm"> 
                	Events
                </a>
            </h3>
            
            <div style="width:1220px;height:490px;overflow:auto;"><!--start scrollable table-->
                            
                        	
                                               	<?php
               
                    foreach ($event as $row)
                     {
                       
                echo'
                    <table>
                            <tr>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                         </tr>
                            </thead>
                            
                            <tbody>
                           
                            	<tr>
                                	<a href="PEventDetails.html" class="LeaName3"> ';
                                        echo $row['eventtitle'];
                                       echo' </a>
                                	<td>';?>
                                        <img src="<?php echo base_url()?>eventpics/<?php echo $row['eventpic']?>" class="thumbnail7 ePicMarg"/>
                                    	
                                       <?php echo' </td>
                                   
                                    <td>
                                    	<p class="LeaDetails4">'; ?>
                                        	<strong><img src="<?php echo base_url()?>assets/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> 
                                              <?php
                                              echo $row['hosts'];
                                           echo' | ';
                                           echo'<em>'; ?>
                                               
                                        <img src="<?php echo base_url()?>assets/img/icons/glyphicons_045_calendar.png" width="11">
                                       <?php echo  $row['startdate'];
                                           echo' | ';?>
                                           <img src="<?php echo base_url()?>assets/img/icons/glyphicons_054_clock.png" width="11"> 
                                           <?php echo $row['starttime'];
                                           echo' </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">';?>
                                            	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10">
                                                 <?php echo $row['participantscount'];
                                                
                                              echo' Attendees </a><br>
                                            <strong>Location</strong>: ';
                                              echo $row['region'];
                                            echo' | ';
                                            echo $row['city'];
                                            echo'<br>
                                            <strong>Venue:</strong> ';
                                             echo $row['venue'];
                                            echo'<br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> ';
                                              echo $row['purpose'];
                                         echo'</p>
                                      
                                        
                                    </td>
                                </tr>
                            </tbody>
                    	</table>';
                        }
                            ?>
                                
                        
                            
                            <!--end one event-->
                        <hr class="hrLeagTab">
                        
  
                        </div><!--end scrollable--> 
            
            </div><!--end events-->
        </div><!--end span-->
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            

      <hr>
