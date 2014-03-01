  <script src="<?php echo base_url()?>assets/bootstrap/js/survey.js"></script>
<!--add modal start-->
<div class="modal hide fade" id="addQ">
    <?php echo form_open('adminsurvey/AddQuestion/'.$courseid)?>
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Add a Question</h3>
  	</div>

	<div class="modal-body">
            
        <table>
            <tr>
                <td>Question: </td>
                   <td> <?php echo form_input('question', '', 'placeholder="Question" style="width: 350px;"'); ?></td>
            </tr>
            <tr>
                <td>Type: </td>
                <td>  <?php echo form_dropdown('surveyType',array('rating' => 'Rating','open' => 'Open Form')); ?></td>
            </tr>
        </table>    
     
      
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary">Add</button>
        <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a> 
        </div> 
    </div>
      <?php echo form_close() ?>
</div>
<!-- add modal end-->

<!--edit modal start-->
<div class="modal hide fade" id="edQ">
    <?php echo form_open('adminsurvey/editQuestion/'.$courseid)?>
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Edit Question</h3>
  	</div>

  <div class="modal-body" >
	<table>
            <tr>
                <input type="hidden" name="itemIDe" id="itemidv">
                <td>Question: </td>
                <td> <?php echo form_input('questionE', '', 'placeholder="Question" style="width: 350px;" id="questiontTxt"'); ?></td>
            </tr>
            <tr>
                <td>Type: </td>
                <td>  <?php echo form_dropdown('surveyTypeE',array('rating' => 'Rating','open' => 'Open Form'),'','id="typeDrp"'); ?></td>
            </tr>
        </table>    
       
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary"> Save</button>
        <a href="#" class="btn btn-info" data-dismiss="modal"> Cancel</a> 
        </div> 
    </div>
    <?php echo form_close() ?>
</div>
<!--edit modal end-->

<!--delete modal start-->
<div class="modal hide fade" id="delQ">
    <?php echo form_open('adminsurvey/deleteQuestion/'.$courseid)?>
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Delete Question</h3>
  	</div>
    <input type="hidden" name="itemidd" value="" id="itemidd">
	<div class="modal-body">
		<p class="delete"><strong>Are you sure you want to delete?</strong></p>
        
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button href="" class="btn  btn-primary"> Yes</button>
        <a href="#" class="btn btn-info" data-dismiss="modal">&nbspNo&nbsp;</a> 
        </div> 
    </div>
    <?php echo form_close() ?>
</div>
<!--delete modal end-->
 
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="assets/img/icons/glyphicons_114_list.png" width="25"> Manage Survey
                </h3>
                
                <h4 class="proDetCol media header" style="margin-top:-10px;margin-left:30px;">
                    <?php echo $coursedetails->sectorName ?>
                     <font class="media-heading vName2">
                          |  <?php echo $coursedetails->coursename ?>
                      </font>
                </h4>
                
                <hr class="hrCV" style="margin-top:-5px;">
                
                <div class="row-fluid">
                	<div class="span6">
                    	<div class="well">
                        	<h4>
                            	Purpose: To rate module's effectivity
                            </h4>
                            
                            <div style="width:590px;height:370px;overflow:auto;"><!--start scrollable table-->      
                                  <table class="tableRate table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span7" style="text-align:left">Modules</th>
                                         <!-- <th>Average Rating </th>  -->
                                      </tr>
                                      
                                  </thead>
                                  
                                  <tbody class="recName">
                                      <?php $rc = 0; ?>
                                      <?php foreach($modules as $m): ?>
                                      
                                      <tr>
                                          <td>
                                             <?php echo $m['modulename'] ?>
                                          </td>
                                          
<!--                                          <td style="text-align:center" >
                                              <?php if($ratings[$rc] >= 3):?>
                                              <span class="label label-info">
                                              <?php echo $ratings[$rc].'/5';  ?>
                                              </span>
                                              <?php else: ?>
                                               <span class="label label-warning">
                                              <?php echo $ratings[$rc].'/5';  ?>
                                              </span>
                                              <?php endif; ?>
                                          </td>-->
                                          
                                          <?php $rc++ ?>
                                      </tr>
                                      <?php endforeach; ?>
                                                       
                                      
                                  </tbody>
                              </table>	
                              </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end module's effectivity-->
                    
                    <div class="span6">
                    	<div class="well">
                        	<h4>
                            	Additional Questions
                            </h4>
                            
                            <div align="right" style="margin-top:-35px;margin-bottom:8px;">
                            	<a href="#addQ" data-toggle="modal" class="btn btn-mini btn-primary">
                                	Add
                                </a>
                            </div>
                            
                            <div style="width:590px;height:370px;overflow:auto;"><!--start scrollable table-->      
                                  <table class="tableRate table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span5" style="text-align:left">Question</th>
                                          <th class="span2" >Type</th>
                                          <th class="span2" >Actions</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                      <?php foreach($questions as $a): ?>
                                      <tr>
                                          <td>
                                             <?php echo $a['question'] ?>
                                          </td>
                                          
                                          <td>
                                          	
                                              <?php if($a['type'] == 'open'):?>
                                                    Open Form
                                                    
                                              <?php else: ?>
                                                    
                                                    Rating
                                                    
                                              <?php endif; ?>
                                            
                                          </td>
                                          
                                          <td>
                                          <input type="hidden" id="itemid" value="<?php echo $a['itemID']?>" >
                                          <input type="hidden" id="question" value="<?php echo $a['question']?>" >
                                          <input type="hidden" id="type" value="<?php echo $a['type']?>" >
                                          <a href="#edQ" data-toggle="modal"  class="btn btn-mini editQ">&nbsp;Edit&nbsp;</a>
                                            <input type="hidden" id="itemid" value="<?php echo $a['itemID']?>" >
                                          <a href="#delQ" data-toggle="modal" class="btn btn-mini deleteQ">Delete</a>
                                          </td>
                                      </tr>                      
                                      <?php endforeach; ?>
                                  </tbody>
                              </table>	
                              </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end additional questions-->
                </div><!--end row-fluid-->
                
                   
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

    