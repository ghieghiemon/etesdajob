<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/datepicker.css"> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
<div class="container">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading"> 
                	<img src="<?php echo base_url()?>assets/bootstrap/img/SUnew.png" style="margin-left:-8px; margin-top:-4px;">
                </h3>
                
                <hr class="hrPV">
                
            	<div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLink">
                        	<a href="#tab1" data-toggle="tab">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> Company Information
                         	</a>
                        </li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<div style="width:970px;height:520px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well GIWellMarg">
                                        
                                          <form method ="post" enctype="multipart/form-data" action ="<?php echo base_url()?>main/register_edetails/<?php echo $userid?>">
                  
                                            	<div class="form-horizontalGI row-fluid">
                                                	<div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Industry: &nbsp;</label>
                                                            <div class="controls">
                                                                 <?php    
                                                                $industry['0'] = 'Please Select';
                                                                $params = 'id="industries"'; 
                                                           echo form_dropdown('industry', $industry,'0',$params);     
                                                               ?> 
                                                            </div>
                                                        </div> <!--end Industry field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Company Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="CName" name="CName" placeholder="" >
                                                            </div>
                                                        </div> <!--end CN field-->
                                                       
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Year Started: &nbsp;</label>
                                                            <div class="controls">
                                                                <div class="row-fluid">
                                                               <input class="help-inline" type="text" id="Yr" name="Yr" placeholder="YYYY" >
                                                                </div> 
                                                            </div>
                                                        </div> <!--end YS field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Company Background: &nbsp;</label>
                                                            <div class="controls">
                                                                <textarea type="text" rows="3" id="CB" name="CB" placeholder="" ></textarea>
                                                            </div>
                                                        </div> <!--end CB field-->
                                                     
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">License Number: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="number" id="LIN" name="LIN" placeholder="" >
                                                            </div>
                                                        </div> <!--end LIN field-->
                                                        
                                                    
                                                    </div><!--end span-->
                                                    
                                                    <div class="span6">
                                                            <div class="control-group">
                                                            <label class="control-label lLabel2">Contact Person: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="CP" name="CP" placeholder="" >
                                                            </div>
                                                        </div> <!--end CP field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Position: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="Pos" name="Pos" placeholder="" >
                                                            </div>
                                                        </div> <!--end Pos field-->
                                                        
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Company Email: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="email" id="CE" name="CE" placeholder="" >
                                                            </div>
                                                        </div> <!--end CE field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Contact Number: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="number" id="CN" name="CN" placeholder="" >
                                                            </div>
                                                        </div> <!--end CN field-->
                                                        
                                                           <!--  
-->                                                      <div class="control-group">
                                                            <label class="control-label lLabel2">Upload Picture: &nbsp;</label>
                                                            <div class="controls" style="margin-left:30px;">
                                                                <!--<form method="post" action="upload-page.php" enctype="multipart/form-data" />-->
                                                                   <input value ="upload" name="userfile" id="pic" type="file" />
                                                                <!--</form>-->  
                                                            </div>
                                                        </div>
                                                       
                                                           <br>
                                                      
                                                       
                                                </div><!--end span-->
                                                </div><!--end row-fluid-->
                                                
                         <div class="row-fluid">
                	<div class="pull-right">
                            
                    	<button type="submit" class="btn btn-primary">Done</button>
                        
                    </div>
                                			</form>
                                		</div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                        
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
$("#Yr").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
</script>
