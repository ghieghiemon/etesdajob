<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/datepicker.css"> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
<div class="container">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="well wellUpMarg">
            	<h3 class="media-heading"> 
                	<img src="<?php echo base_url()?>assets/bootstrap/img/SUnew.png" style="margin-left:-8px; margin-top:-4px;">
                </h3>
                
                <hr class="hrPV2">
                
            	<div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLinkSJS">
                        	<a href="#tab1" data-toggle="tab">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> Personal Information
                         	</a>
                        </li>
                        
                        <li class="rTabLinkSJS">
                        	<a href="#tab2" data-toggle="tab">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_332_certificate.png" width="15"> Educational Background
                         	</a>
                        </li>
                        
                        <li class="rTabLinkSJS">
                        	<a href="#tab3" data-toggle="tab">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                         	</a>
                        </li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<div style="width:950px;height:430px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well GIWellMarg">
                                        	<p class="welcome" align="center">
                                                <font class="resNote">*Please take note that all information will be used as your resume whenever you apply for a job.</font>
                                            </p>
                                            <br>
                                            <br>
                                              <form method ="post" enctype="multipart/form-data" action ="<?php echo base_url()?>main/register_jsdetails/<?php echo $userid?>" class="form-horizontal2 regMarg regMarg2">
                                              <div class="row-fluid">
                                                 <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label">First Name: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="FN" name="FN" placeholder="" >
                                                </div>
                                            </div> <!--end FN field-->
                                            
                                             <div class="control-group">
                                                <label class="control-label">Middle Name: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="MN" name="MN" placeholder="" >
                                                </div>
                                            </div> <!--end LN field-->
                                                               
                                            <div class="control-group">
                                                <label class="control-label">Last Name: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="LN" name="LN" placeholder="" >
                                                </div>
                                            </div> <!--end LN field-->
                                        
                                            <div class="control-group">
                                                <label class="control-label">Birthday: &nbsp;</label>
                                                <div class="controls">
                                                    <div class="row-fluid">
                                                    <input class="span5 help-inline" type="text" id="bday" name="bday" placeholder="YYYY/MM/DD" >

                                                    </div> 
                                                </div>
                                            </div> <!--end Bday field-->
                                            
                                              <div class="control-group">
                                                <label class="control-label">Gender &nbsp;</label>
                                                <div class="controls">
                                                  <?php 
                                                    echo form_dropdown('gender',array('1' =>'Male', 
                                                    '0' => 'Female')) ?>
                                                </div>
                                            </div><!--end ES-->
                                            
                                                  <div class="control-group">
                                                <label class="control-label">Telephone No: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="TN" name="TN" placeholder="" >
                                                </div>
                                            </div> <!--end DIS field-->
                                               <div class="control-group">
                                                <label class="control-label">Contact No: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="CN" name="CN" placeholder="" >
                                                </div>
                                            </div> <!--end DIS field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Civil Status: &nbsp;</label>
                                                <div class="controls">
                                                   <?php 
                                                    echo form_dropdown('civstatus',array('Single' =>'Single', 'Married' =>'Married', 
                                                    'Widowed' => 'Widowed')) ?>
                                                </div>
                                            </div><!--end ES-->
                                            
                                          
                                           <div class="control-group">
                                                             <label class="control-label">Upload Picture: &nbsp;</label>
                                                            <div class="controls" style="margin-left:30px;">
                                                                <!--<form method="post" action="upload-page.php" enctype="multipart/form-data" />-->
                                                                   <input value ="upload" name="userfile" id="pic" type="file" />
                                                                <!--</form>-->  
                                                            </div>
                                                        </div>
                                            
                                            
                                          
                                        </div><!--end left-->
                                                    
                                                       <div class="span6 addMarg">
                           
                                       <br>
                                            
                                            <div class="control-group">
                                                <label class="control-label">Street No: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="SN" name="SN" placeholder="" >
                                                </div>
                                            </div> <!--end SN field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Brgy: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="brgy" name="brgy" placeholder="" >
                                                </div>
                                            </div> <!--end BGY field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">District: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="dis" name="dis" placeholder="" >
                                                </div>
                                            </div> <!--end DIS field-->
                                            
                                            <div class="control-group">
                                            <label class="control-label">Region: &nbsp;</label>
                                            <div class="controls">
                                             <?php $cities['0'] = 'Please Select'; ?>
                                            <?php $regions['0'] = 'Please Select'; ?>
                                            <?php 
                                            $params = 'id="region"'; 
                                            //echo form_dropdown('regionid', $regions, '0', 'id="region"');
                                            echo form_dropdown('regionid', $regions, '0',$params);

                                            ?>
                                            </div>
                                            </div> <!--end CoP field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">City/Province: &nbsp;</label>
                                                <div class="controls">
                                                    <?php  
                                                     $params = 'id="cities"'; 
                                                    echo form_dropdown('cityid', $cities, '0', $params);
                                                    ?>
                                                </div>
                                            </div> <!--end RGN field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Zipcode: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="zip" name="zip" placeholder="" >
                                                </div>
                                            </div> <!--end Zip field-->
                                           
                                        </div> <!--end span-->
                                                    
                                                </div> <!--end row-->
                                        
                                		</div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                        <div class="tab-pane" id="tab2">
                        	<div style="width:950px;height:430px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well GIWellMarg">
                                        	
                                              <!--<form class="form-horizontal2 regMarg regMarg2">-->
                                              <div class="form-horizontal2 regMarg regMarg2 row-fluid">
                                                    <div class="span6">
													 <label class=""><strong>School: &nbsp;</strong></label>
                                                        <div class="control-group">
                                                            <label class="control-label">Educational Level: &nbsp;</label>
															
                                                        <div class="controls">
                                                <?php $att = ' id="LVL1" id="LVL1" class="LVL1"'; 
                                                 echo form_dropdown('LVL1',array('None' =>'None', 
                                                'High School Graduate' => 'High School Graduate', 
                                                 'Technical Diploma'=> 'Technical Diploma',
                                                 'College Graduate'=>'College Graduate',
                                                      'Masters Degree' =>'Masters Degree',
                                                'Doctorate Degree'=>'Doctorate Degree'),'',$att) ?>
                                                            </div>
                                                        </div> <!--end FN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Institution: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="IN1" name="IN1" placeholder="" >
                                                            </div>
                                                        </div> <!--end MN field-->
                                                    
                                                        <div class="control-group">
                                                            <label class="control-label">Course: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="CO1" name="CO1" placeholder="" >
                                                            </div>
                                                        </div> <!--end LN field-->

                                                        <div class="control-group">
                                                            <label class="control-label">Years Attended: &nbsp;</label>
                                                            <div class="controls">
                                                                <div class="row-fluid">
                                                                <input class="span2 help-inline" type="text" id="SY1" name="SY1" placeholder="YYYY" >  -
                                                                <input class="span2 help-inline" type="text" id="EY1" name="EY1" placeholder="YYYY" >
                                                                </div> 
                                                            </div>
                                                        </div> <!--end Bday field-->
                                                    </div><!--end left-->
                                                </div> <!--end row-->
												
                                        
                                		</div><!--end well-->
										
                                    </div><!--end span-->
									
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div><!--end educational background-->
                       
                        
                        <div class="tab-pane" id="tab3">
                        	<div style="width:950px;height:430px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well GIWellMarg">
                                              <!--<form class="form-horizontal2 regMarg regMarg2">-->
                                              <div class="form-horizontal2 regMarg regMarg2 row-fluid">
                                                    <div class="span6">
							 <label class=""><strong>Company 1: &nbsp;</strong></label>
                                                         <div class="control-group">
                                                            <label class="control-label">Company Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="COMP" name="COMP" placeholder="" >
                                                            </div>
                                                        </div> <!--end MN field-->
                                                    
                                                        <div class="control-group">
                                                            <label class="control-label">Position: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="POS" name="POS" placeholder="" >
                                                            </div>
                                                        </div> <!--end LN field-->

                                                        <div class="control-group">
                                                            <label class="control-label">Time Period: &nbsp;</label>
                                                            <div class="controls">
                                                                <div class="row-fluid">
                                                                <input class="span2 help-inline" type="text" id="WSY1" name="WSY1" placeholder="YYYY" >  -
                                                                <input class="span2 help-inline" type="text" id="WEY1" name="WEY1" placeholder="YYYY" >
                                                                </div> 
                                                            </div>
                                                        </div> <!--end Bday field-->
                                                    </div><!--end left-->
                                                </div> <!--end row-->
                                                        
						<div class="form-horizontal2 regMarg regMarg2 row-fluid">
                                                    <div class="span6">
													 <label class=""><strong>Company 2: &nbsp;</strong></label>
                                                         <div class="control-group">
                                                            <label class="control-label">Company Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="COMP2" name="COMP2" placeholder="" >
                                                            </div>
                                                        </div> <!--end MN field-->
                                                    
                                                        <div class="control-group">
                                                            <label class="control-label">Position: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="POS2" name="POS2" placeholder="" >
                                                            </div>
                                                        </div> <!--end LN field-->

                                                        <div class="control-group">
                                                            <label class="control-label">Time Period: &nbsp;</label>
                                                            <div class="controls">
                                                                <div class="row-fluid">
                                                                <input class="span2 help-inline" type="text" id="WSY2" name="WSY2" placeholder="YYYY" >  -
                                                                <input class="span2 help-inline" type="text" id="WEY2" name="WEY2" placeholder="YYYY" >
                                                                </div> 
                                                            </div>
                                                        </div> <!--end Bday field-->
                                                    </div><!--end left-->
                                                </div> <!--end row-->
                                                        
                                                      
                                                    </div><!--end left-->
                                                    
                                                    
                                                </div> <!--end row-->
                                       
                                		</div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                                
                            </div><!--end scrollable table-->
                             <div class="row-fluid">
                	<div class="pull-right">
                            
                    	<button type="submit" class="btn btn-primary">Done</button>
                        
                    </div>
                                			</form>
                                		</div><!--end well-->
                        </div><!--end Work experience-->
                            
                </div> <!--end tab content-->

                </div> <!--end tabbable-->
            </div><!--end well-->
        </div><!--end span-->
    </div><!--end row-->
    
    </div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

    
    
</body>

<script>
$("#WSY1").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
<script>
$("#WEY1").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
<script>
$("#WSY2").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
<script>
$("#WEY2").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
<script>
$("#SY1").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
<script>
$("#EY1").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
