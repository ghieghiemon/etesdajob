 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
 <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/certification.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/competency.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/regions.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/region.js"></script>
         
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_195_circle_info.png" width="25"> Invite Job Seekers
                </h3>
                
                <div align="right">
                	<button class="btn btn-primary" style="margin-top:-65px;">Invite</button>
                </div><!--end invite button-->
                
                <div style="width:1200px;height:470px;overflow:auto;"><!--start scrollable table-->      
                      <div id="container">
                        	<table id ="newtable" >
                      <thead>
                          <tr>
                          	  <th class="span1" style="text-align:center">
                              	<input type="checkbox">
                              </th>
                              <th class="span3" style="text-align:center">Name</th>
                              <th class="span2" style="text-align:center">Age</th>
                              <th class="span2" style="text-align:center">Gender</th>
                              <th class="span2" style="text-align:center">Location</th>
                              <th class="span2" style="text-align:center">Date Graduated</th>
                              <th class="span3" style="text-align:center">Years of Work</th>
                          </tr>
                      </thead>
                      
                      <tbody class="recName">
                          <?php
                          foreach($invites as $a)
                          {
                              ?>
                          
                          <tr>
                          	  <td>
                              	<input type="checkbox">
                              </td>
                              
                              <td>
                              	 <a href="#" class="recAppName">
                                     <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo " ";
                                                      echo $b['middlename'];
                                                      echo " ";
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                 </a>
                              </td>
                              
                              <td>
                                  29
                              </td>
                              
                              <td>
                              	  M
                              </td>
                              
                              <td>
                                  NCR | Makati City
                              </td>
                              
                              <td>
                              	Feb 2004
                              </td>
                              
                              <td>
                                  8
                              </td>
                          </tr>
                          <?php } ?>                  
                          
                      </tbody>
                  </table>
                      </div>
                  </div><!--end scrollable-->   
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
      <hr>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newtable').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
 </body>