  <script src="<?php echo base_url()?>assets/bootstrap/js/survey.js"></script>
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="assets/img/icons/glyphicons_114_list.png" width="25"> Manage Survey
                </h3>
                
                <h4 class="proDetCol media header" style="margin-top:-10px;margin-left:30px;">
                    <span id="sectorTitle">Select Sector/Industry </span>
                </h4>

                <div align="right" style="margin-top:-40px;">
                	<?php 
                        echo form_dropdown('sectorDropdown', $sectors,'0','id = "sectorsDrop"') ?>
                </div>
                
                <hr class="hrCV" style="margin-top:-5px;">
                <input type="hidden" id="siteurl" value="<?php echo site_url() ?>" >
                <div style="width:1200px;height:370px;overflow:auto;"><!--start scrollable table-->      
                      <table class="tableInv table-hover table-condensed table-striped">
                      <thead>
                          <tr>
                              <th class="span2" style="text-align:center">Courses</th>
                              <th class="span2" style="text-align:center">Number of questions</th>
                              <th class="span2" style="text-align:center"></th>
                          </tr>
                      </thead>
                      
                      <tbody class="recName" id="report">
<!--                          <tr>
                              <td>
                              	 Animation
                              </td>
                              
                              <td>
                                  2
                              </td>
                              
                              <td>
                              	  <a href="<?php echo site_url('adminsurvey/courseSurvey').'/1'?>" class="btn btn-primary btn-mini">Edit</a>
                              </td>
                              
                          </tr>
                          
                          <tr>
                              <td>
                                 Software Development
                              </td>
                              
                              <td>
                                  1
                              </td>
                             
                              <td>
                              	  <a href="TSurveyQ.html" class="btn btn-primary btn-mini">Edit</a>
                              </td>
                              
                          </tr>                         -->
                          
                      </tbody>
                  </table>	
                  </div><!--end scrollable-->   
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
