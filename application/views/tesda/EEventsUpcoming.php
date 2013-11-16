<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/datepicker.css"> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
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
    	<div class="span3">
            <div class="well wellMarg3b">
                <h5 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_355_bullhorn.png" width="18"> Create New Event
                </h5>
                
                <div style="width:315px;height:500px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="well">
                    	<h5 class="media-heading previewColor">
                            | Summary
                        </h5>
                          <form method ="post" enctype="multipart/form-data" action ="<?php echo base_url()?>employer/employer_evcreate/">
                  
                        <div class="control-group"><!-- start div EN-->
                            <div class="myStyleQS3">
                                <input type="text" id="EN" name="EN" placeholder="Event Name">
                            </div>
                        </div><!-- end div EN -->
                        <div class="myStyle3QS" style="margin-top:-10px;">
                                      <?php    
             $drpindustries['0'] = 'Choose Industry';
            echo form_dropdown('industry', $drpindustries,'0');     
            ?> 
                        </div><!--end industry-->
                        
                        <div class="control-group"  style="margin-top:-5px;"><!-- start div HOSTS-->
                            <div class="myStyleQS3">
                                <input type="text" id="SP" name="SP" placeholder="Sponsors">
                            </div>
                        </div><!-- end div HOSTS -->
                        
                        <div class="control-group" style="margin-top:-15px;"><!-- start div Det-->
                            <div class="myStyle3EventDet">
                                <textarea id="Det" name="Det" rows="3" placeholder="Details"></textarea>
                            </div>
                        </div><!-- end div Det -->
                        
                        
                        
                          <div class="control-group"  style="margin-top:-15px;"><!-- start div HOSTS-->
                            <div class="myStyleQS3">
                                <input type="text" id="date" name="date" placeholder="Date">
                            </div>
                        </div><!-- end div HOSTS -->
                        
                        <div class="control-group"  style="margin-top:-15px;"><!-- start div HOSTS-->
                            <div class="myStyleQS3">
                                <input type="text" id="time" name="time" placeholder="Time">
                            </div>
                        </div><!-- end div HOSTS -->
                        
<!--                        <div class="control-group eWellMarg">
                            <label class="ePicUpload">Event Picture: &nbsp;</label>
                            <div class="controls" style="margin-left:100px; margin-top:-30px;">
                                <form method="post" action="upload-page.php" enctype="multipart/form-data">
                                    <input name="pic" id="pic" type="file" style="font-size:10px" />
                                </form>  
                            </div>
                        </div> end Picture field-->

                    </div><!--end well-->
                    
                    <div class="well wellUpMarg">
                    	<h5 class="media-heading previewColor">
                            | Location
                        </h5>
                        
                        <div class="myStyle3QS2">
                            
                      <?php $regions['0'] = 'Region'; ?>
                    <?php $cities['0'] = 'City'; ?>
                    <?php 
                    $params = 'id="regions"'; 
                    echo form_dropdown('regionid', $regions, '0',$params);
                    ?>
                        </div><!--end region-->
                    
                        <div class="myStyle3QS2" style="margin-top:-10px;">                        
                                  <?php 
                    $params = 'id="cities"'; 
                    echo form_dropdown('cityid', $cities, '0', $params);
                    ?> 
                        </div><!--end city-->
                        
                        <div class="control-group eWellMarg2"><!-- start div VEN-->
                            <div class="myStyleQS3" style="margin-top:-6px;">
                                <input type="text" id="VEN" name="VEN" placeholder="Venue">
                            </div>
                        </div><!-- end div VEN -->
                    </div><!--end well-->
                    
                	
                    
                    <div align="right" class="eDnBtn">
                      <button type="submit" class="btn btn-info">Create</button>
<!--                    	<a href="#" class="btn btn-info">
                        	Done
                        </a>-->
                    </div>
                    </form>
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="25"> Events
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#SGS" data-toggle="tab">All</a></li>
                       <li class="active"><a href="#All" data-toggle="tab">Created</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    
                    <div class="tab-pane active" id="SGS">
                    	<div style="height:420px;overflow:auto;"><!--start scrollable table-->
                             <?php
                                  
                                  foreach ($createdevents as $a)
                                  {
                                      
                                  ?>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<a href='<?php echo base_url()?>employer/employer_evcreated/<?php echo $a['eventno']?>' class="LeaName3"><?php echo $a['eventtitle']?></a>
                                	<td>
                                  <img src="<?php echo base_url()?>eventpics/<?php echo $a['eventpic']?>" class="thumbnail5 ePicMarg"/>
                                    	
                                    </td>
                                   
                                    <td>
                                       <p class="LeaDetails4">
                                        	<strong><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11"> Hosted By:</strong> <?php
                                                $companyName = $this->model_pub->get_companyName($a['createdby']);
                                            echo $companyName;
                                            ?>
                                            | <em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> <?php echo $a['startdate']?>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> <?php echo $a['starttime']?>
                                            </em>
                                            | <a data-toggle="modal" href="#ModEventAttend" class="Name3">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10">  <?php echo $a['participantscount']?> Attendees
                                              </a><br>
                                            <strong>Location</strong>: <?php echo $a['region']?> | <?php echo $a['city']?> <br>
                                            <strong>Venue:</strong> <?php echo $a['venue']?> <br>
                                         </p>
                                         
                                         <p class="LeaDetails4">
                                         	<strong>Details:</strong> 
                                                <?php echo $a['purpose']?>
                                         </p>
                                      
                                        
                                    </td>
                                   
                                </tr>
                            </tbody>
                            
                    	</table><!--end one event-->
                        <hr class="hrLeagTab">
                        <?php
                                  }
                        ?>
                        
                         
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

    
<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#test').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>

    <script>
$("#date").datepicker( {
    format: 'yyyy-mm-dd'
});
</script>
</body>
