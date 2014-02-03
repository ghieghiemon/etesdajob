
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
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Edit Question</h3>
  	</div>

  <div class="modal-body" >
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
    	<button class="btn  btn-primary"> Save</button>
        <a href="#" class="btn btn-info" data-dismiss="modal"> Cancel</a> 
        </div> 
    </div>
</div>
<!--edit modal end-->

<!--delete modal start-->
<div class="modal hide fade" id="delQ">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Delete Question</h3>
  	</div>

	<div class="modal-body">
		<p class="delete"><strong>Are you sure you want to delete?</strong></p>
        
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary"> Yes</button>
        <a href="#" class="btn btn-info" data-dismiss="modal">&nbspNo&nbsp;</a> 
        </div> 
    </div>
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
                    Information & Communication Technology
                     <font class="media-heading vName2">
                          | Animation
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
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                      <tr>
                                          <td>
                                             Creation of Storyboard
                                          </td>
                                      </tr>
                                      
                                      <tr>
                                          <td>
                                             Changing of Background
                                          </td>
                                      </tr>  
                                      
                                      <tr>
                                          <td>
                                             Combining two animations
                                          </td>
                                      </tr>                         
                                      
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
                                          <th class="span2"  style="text-align:left">Type of Answer</th>
                                          <th class="span2" style="text-align:left">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                      <tr>
                                          <td>
                                             Will you recommend this course? Why or why not?
                                          </td>
                                          
                                          <td>
                                          	<p style="text-align:center">
                                          	Open Form
                                            </p>
                                          </td>
                                          
                                          <td>
                                          <a href="#edQ" data-toggle="modal" class="btn btn-mini">&nbsp;Edit&nbsp;</a>
                                          <a href="#delQ" data-toggle="modal" class="btn btn-mini">Delete</a>
                                          </td>
                                      </tr>                      
                                      
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

    