
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="assets/img/icons/glyphicons_114_list.png" width="25"> Survey
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
                            	Effectivity of Modules
                            </h4>
                            
                            <div style="width:590px;height:300px;overflow:auto;"><!--start scrollable table-->      
                                  
                                  <table class="tableRate table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th rowspan="2" class="span7" style="text-align:left">Modules</th>
                                          <th colspan="5" style="text-align:center">Ratings</th>
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
                                      <tr>
                                          <td>
                                             Creation of Storyboard
                                          </td>
                                          
                                          <td>
                                          	<input name="a1" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          	<input name="a2" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a3" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a4" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a5" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                      </tr>
                                      
                                      <tr>
                                          <td>
                                             Changing of Background
                                          </td>
                                          
                                          <td>
                                          	<input name="a6" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          	<input name="a7" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a8" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a9" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a10" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                      </tr>  
                                      
                                      <tr>
                                         <td>
                                             Combining of two animations
                                          </td>
                                          
                                          <td>
                                          	<input name="a11" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          	<input name="a12" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a13" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a14" type="radio" value="" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a15" type="radio" value="" style="margin-left:12px;">
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
                            
                            <div style="width:590px;height:300px;overflow:auto;"><!--start scrollable table-->      
                                 <?php foreach($questions as $q): ?>
                                
                                    <?php if($q['type']== 'open'): ?>
                                
                                        <h5>
                                             <?php echo $q['question'] ?>
                                         </h5>

                                         <textarea rows="3" class="span12"></textarea>
                                 
                                    <?php else: ?>
                                 
                                    
                                    <tr>
                                         <td>
                                            <?php echo $q['question'] ?>
                                          </td>
                                          
                                          <td>
                                          	<input name="a11" type="radio" value="5" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          	<input name="a12" type="radio" value="4" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a13" type="radio" value="3" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a14" type="radio" value="2" style="margin-left:12px;">
                                          </td>
                                          
                                          <td>
                                          <input name="a15" type="radio" value="1" style="margin-left:12px;">
                                          </td>
                                      </tr>          
                                         
                                    <?php endif; ?>
                                 <?php endforeach; ?>
                            </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end additional questions-->
                </div><!--end row-fluid-->
                
                <div class="row-fluid">
                	<div align="right">
                    	<a href="#" class="btn btn-primary">Submit</a>
                    </div>
                </div><!--end row-fluid-->
                   
            </div><!--end well-->
        </div><!--end span left column-->
        
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

