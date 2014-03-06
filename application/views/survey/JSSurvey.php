
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
                     <?php echo form_open($this->uri->uri_string()) ?>
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/img/icons/glyphicons_114_list.png" width="25"> Survey
                </h3>
                
                <h4 class="proDetCol media header" style="margin-top:-10px;margin-left:30px;">
                    <?php echo $details->sectorName ?>
                     <font class="media-heading vName2">
                          | <?php echo $details->coursename ?>
                      </font>
                </h4>
                
                <hr class="hrCV" style="margin-top:-5px;">
                  <?php $errors = validation_errors(); if(empty($errors)): ?>
                      <?php else: ?>
                    <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
                    
                    <?php endif; ?>
                <div class="row-fluid">
                	<div class="span6">
                    	<div class="well">
                        	<h4>
                            	Effectivity of Modules
                            </h4>
                            
                            <div style="width:590px;height:300px;overflow:auto;"><!--start scrollable table-->      
                                  
                                  <table class="tableRate table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th rowspan="2" class="span7" style="text-align:left">Modules</th>
                                          <th colspan="5" style="text-align:center">Rating</th>
                                      </tr>
                                      
                                      <tr>
                                          <th class="span1" >5</th>
                                          <th class="span1" >4</th>
                                          <th class="span1" >3</th>
                                          <th class="span1" >2</th>
                                          <th class="span1" >1</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                      
                                      <?php $ctr = 0 ?>
                                      <?php foreach($modules as $m): ?>
                                      <tr>
                                          <td>
                                            <?php echo $m['cocname'] ?>
                                          </td>
                                          
                                          <td>
                                          	<input name="a<?php echo $ctr?>" type="radio" value="5" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          	<input name="a<?php echo $ctr?>" type="radio" value="4" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a<?php echo $ctr?>" type="radio" value="3" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a<?php echo $ctr?>" type="radio" value="2" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a<?php echo $ctr?>" type="radio" value="1" style="margin-left:12px;">
                                          </td>
                                      </tr>
                                      <?php $ctr++ ?>
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
                            <?php if(!empty($questions)): ?>
                            <div style="width:590px;height:300px;overflow:auto;"><!--start scrollable table-->
                                <table class="tableRate table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th rowspan="2" class="span7" style="text-align:left">Question</th>
                                          <th colspan="5" style="text-align:center">Rating</th>
                                      </tr>
                                      
                                      <tr>
                                          <th class="span1" >5</th>
                                          <th class="span1" >4</th>
                                          <th class="span1" >3</th>
                                          <th class="span1" >2</th>
                                          <th class="span1" >1</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                      
                                     
                                     <?php foreach($questions as $q): ?>
                                       <?php if($q['type']== 'rating'): ?>
                                      <tr>
                                          <td>
                                          <?php echo $q['question'] ?>
                                          </td>
                                          
                                          <td>
                                          	<input name="a<?php echo $ctr?>" type="radio" value="5" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          	<input name="a<?php echo $ctr?>" type="radio" value="4" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a<?php echo $ctr?>" type="radio" value="3" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a<?php echo $ctr?>" type="radio" value="2" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a<?php echo $ctr?>" type="radio" value="1" style="margin-left:12px;">
                                          </td>
                                      </tr>
                                      <?php $ctr++ ?>
                                      <?php endif; ?>
                                      <?php endforeach; ?>
                                      
                                  </tbody>
                              </table>
                                
                                
                                 <?php foreach($questions as $q): ?>
                                
                                    <?php if($q['type']== 'open'): ?>
                                
                                        <h5>
                                             <?php echo $q['question'] ?>
                                         </h5>

                                         <textarea rows="3" class="span12"  name="a<?php echo $ctr?>"></textarea>
                                  <?php $ctr++ ?>
                                          
                                    <?php endif; ?>
                                 <?php endforeach; ?>
                            </div><!--end scrollable-->
                            <?php endif; ?>
                        </div><!--end well-->
                    </div><!--end additional questions-->
                </div><!--end row-fluid-->
                
                <div class="row-fluid">
                	<div align="right">
                    	<button  class="btn btn-primary">Submit</button>
                    </div>
                </div><!--end row-fluid-->
                   
            </div><!--end well-->
        </div><!--end span left column-->
        
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

