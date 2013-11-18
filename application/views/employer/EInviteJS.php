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
             
                <div style="width:1200px;height:470px;overflow:auto;"><!--start scrollable table-->  
                   
                     
                        <div id="container">
                             <form method="post" action="<?php echo base_url()?>employer/invite_jobseeker/<?php echo $jobno?>">
                    <div align="right">
                	<button type ="submit" class="btn btn-primary" >Invite</button>
                    </div>
                                 <table id ="newtableinv" >
                      <thead>
                          <tr>
                          	  <th class="span1" style="text-align:center">
                              	<input type="checkbox" onclick="checkall(this);">
                              </th>
                              <th class="span3" style="text-align:center">Name</th>
                              <th class="span2" style="text-align:center">Age</th>
                              <th class="span2" style="text-align:center">Gender</th>
                              <th class="span2" style="text-align:center">Certifications</th>
                              <th class="span3" style="text-align:center">Competencies</th>
                          </tr>
                      </thead>
                      
                      <tbody class="recName">
                          <?php
                          foreach($invites as $a)
                          {
                              ?>
                          
                          <tr>
                          	  <td>
                              	<input type="checkbox" name="check[]" value="<?php echo $a['appid']?>">
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
                                  <?php
                                              $birthday = $this->model_employer->get_appage($a['appid']);
                                              $birthDate = explode("/", $birthday);
                                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
                                              echo $age;
                                                ?>
                              </td>
                              
                              <td>
                              	    <?php
                                                $ismale = $this->model_employer->get_appsex($a['appid']);
                                                if ($ismale == 1)
                                                    echo 'M';
                                                else 
                                                    echo 'F';
                                                ?>
                              </td>
                              
                              <td>
                                      <?php
                                              $nc = $this->model_employer->get_appcert($a['appid']);
                                              $count = count($nc);
                                              foreach($nc as $c)
                                              {
                                                  echo $c['ncname']. " ". $c['level'];  
                                                  if ($count >1)
                                                    echo ", ";

                                                 $count--;
                                              }
                                              ?>
                              </td>
                              
                              <td>
                              	   <?php
                                              $coc = $this->model_employer->get_appcomp($a['appid']);
                                              $count = count($coc);
                                              foreach($coc as $d)
                                              {
                                                  echo $d['cocname']; 
                                                  if ($count >1)
                                                    echo ", ";

                                                 $count--;
                                              }
                                              ?> 
                              </td>
                              
                              
                          </tr>
                          
                          <?php } ?>                  
                          
                      </tbody>
                  </table>
                   
                    </form>
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
          
           $('#newtableinv').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
 </body>