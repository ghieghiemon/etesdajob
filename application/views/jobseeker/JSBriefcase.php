<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
               <img src="<?php echo base_url()?>assets/img/icons/glyphicons_341_briefcase.png" width="20"> Briefcase
                </h3>
                
                <div style="width:1200px;height:470px;overflow:auto;"><!--start scrollable table-->      
                      <table class="tableInv table-hover table-condensed table-striped">
                      <thead>
                          <tr>
                              <th class="span3" style="text-align:center">Job Title</th>
                              <th class="span2" style="text-align:center">Company</th>
                              <th class="span1" style="text-align:center">Status</th>
                              <th class="span2" style="text-align:center">Date</th>
                              <th class="span2" style="text-align:center">Time</th>
                              <th class="span3" style="text-align:center">Location</th>

                          </tr>
                      </thead>
                      
                      <tbody class="recName">
                             <?php
                        foreach($myapp as $a)
                        {
                        echo'  <tr>
                          	       <td>';
                            ?>
                        <a href='<?php echo base_url()?>jobseeker/jobseeker_myappsdetail/<?php echo $a['jobno']?>'>
                            <?php
                            echo $a['jobtitle'];
                            echo '</a></td>
                              
                              <td>
                              	  <a href="#" class="recAppName">';
                            echo $a['companyName'];
                            echo '</a>
                              </td>
                              
                              <td>
                              <strong>
                             <div class="statusB">';
                            echo $a['status'];
                             echo' </div>
                              </strong>
                              </td>
                              
                              <td>
                              	  <strong>
                             <font class="more">';
                            echo $a['requirementdate'];
                             echo' </div>
                              </font>
                              </td>
                              
                              <td>
                                  <strong>
                             <font class="more">';
                            echo $a['requirementtime'];
                             echo' </div>
                              </font>
                              </td>
                              
                              <td>
                              	<div class="">';
                            echo $a['location'];
                             echo' </div>
                              </td>
                              
                             
                          </tr>';
                        }?>
                                          
                      </tbody>
                  </table>	
                  </div><!--end scrollable-->   
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        
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

    
</body>

