 <?php
foreach ($jobs as $a)
{
?>
<div class="modal hide fade modal-wide" id="view<?php echo $a['jobno']?>">
    
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Vacancy Details</h3>
  	</div>
	<div class="modal-body">
                <span id="label1"></span>
		<h4 class="media-heading previewColor">| GENERAL INFORMATION </h4>
        	<div class="row-fluid">
            	<div class="span6">
                	<table class="previewMarg">
                          <thead>
                              <tr>
                                  <th class="span1"></th>
                                  <th class="span4"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                              <tr>
                                  <td class="previewDet">
                                      Job Title:
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<?php 
                                            echo $a['jobtitle'];
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      		<?php $desc = $this->model_jobseeker->get_jobdescription($a['jobno']);
                                            echo  $desc;
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                               <tr>
                                  <td class="previewDet">
                                      Industry:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      		<?php 
                                            echo $a['sectorName'];
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<table class="previewMarg2">
                          <thead>
                              <tr>
                                  <th class="span3"></th>
                                  <th class="span2"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                          	  <tr>
                                  <td class="previewDet">
                                      Region: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<?php 
                                            echo $a['region'];
                                        ?>
                                      </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      		<?php 
                                            echo $a['city'];
                                        ?>
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Number of Vacancies: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      		<?php 
                                            echo $a['vacanciesleft'];
                                        ?>
                                      </font>	
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td class="previewDet">
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	 <?php
                                                  $date2 = $a['expirationdate'];
//                                                  
                                                  $date = date('Y-m-d');
                                                  $diff = abs(strtotime($date2) - strtotime($date));

                                                  $days = round((($diff/24)/60)/60);
                                                  if ($a['expirationdate'] > $a['currentdate'])
                                                  {
                                                  echo $days;
                                                  echo " days left";
                                                  }
                                                  else
                                                  {
                                                    echo '<font color="red"><strong>EXPIRED</strong></font>';
                                                  }
                                                ?>
                                      
                                      </font>
                                  </td>
                              </tr>
                              
                          </tbody>
                      </table>
                </div>
            </div><!--end row-fluid-->
        <hr class="hrLeagTab">
            
        <h4 class="media-heading previewColor">| QUALIFICATIONS </h4>
        	<div class="row-fluid">
            	<div class="span6">
                	<table class="previewMarg">
                          <thead>
                              <tr>
                                  <th class="span2"></th>
                                  <th class="span4"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                              <tr>
                                  <td class="previewDet">
                                      Sex:
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      		<?php 
                                            echo $a['sex'];
                                        ?>
                                        
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="sAge" name="sAge">
                                            	<?php 
                                            echo $a['agestart'];
                                        ?>
                                        </span>
                                        - 
                                        <span id="eAge" name="eAge">
                                            	<?php 
                                            echo $a['ageend'];
                                        ?>
                                        </span>	
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<p class="previewCCS">
                		<strong>CERTIFICATION/S:</strong> 
                        <font class="previewCCS2">
                          <?php
                                  $cert = $this->model_jobseeker->get_jobCerts($a['jobno']);
                                                         $count = count($cert);
                                                         foreach ($cert as $b)
                                                         {
                                                             echo $b['ncname'];
                                                             echo " ". $b['level'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        </font>
                    </p>
                   <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">
                        <?php
                                  $comp = $this->model_jobseeker->get_jobComps($a['jobno']);
                                                         $count = count($cert);
                                                         foreach ($comp as $c)
                                                         {
                                                             echo $c['cocname'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        	
                        </font>
                    </p>
                </div><!--end span-->
                
               
            </div><!--end row-fluid-->
	</div>
 
  	<div class="modal-footer">
      
        <a href="" class="btn btn-primary" data-dismiss="modal">Close</a> 
  	</div>
</div>
<?php 
}
?>
<!--modal myModal content-->       
    <div class="modal hide fade" id="signIn">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In</h3>
  		</div>
        
  		<div class="modal-body">
        <form method="post" action='' name="login_form">
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
              <a href="#">Forgot Password?</a>
            </p>
   	 	</form>
        </div>
        
        <div class="modal-footer">
    		Not a member?
    		<a href="#">Register</a>
 		</div>
	</div>
<!--end myModal content-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="25"> Industries
            </h4>
       	 	
            <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                Legend:  (#) - no. of vacancies
            </div>
            
            <div class="nav PProfE2" style="width:1240px;height:130px;margin-top:10px;margin-bottom:-5px;overflow:auto;">
                <?php 
                foreach ($industries as $a)
                {
                    ?>
                    <a href="<?php echo base_url('tesda/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd2">
                    <h5 class="media-heading">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>"  class="PProfE"> 
                        <br>(<?php echo $a['totalopenings']?>)
                    </h5>
                    </a>
                <?php
                }
                ?>                    

            </div><!--end scrollable-->
                
                <div class="row-fluid">
                    <div class="pull-right">
                        <a href="PIndustries.html" class="pull-right">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div><!--end row-->
    	</div><!--end well-->
      
   	</div> <!--end span12-->
    </div> <!--end row-->
    
    <div class="row-fluid">
               <div class="span12">
           	<div class="well wellUpMarg">

                    <h4 class="media-heading">
                         <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Job Market 
                         <font class="media-heading vName2">
                            | <?php echo $sectorName ?>
                        </font>
                    </h4>
                    
                    <div style="width:1220px;height:313px;overflow:auto;"><!--start scrollable table-->
                       <div id="container">
                       <table id ="newtablep" >
                        	<!--<table class="tableJMP table-hover table-condensed table-striped">-->
                            <thead>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span3" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                  
                            </thead>
                            
                            <tbody class="recName">
                            <?php
                            foreach($vacancies as $a)
                            {   
                            ?>
                                <tr>
                                    <td>
                                         <a data-toggle="modal"href='#view<?php echo $a['jobno']?>'>
                                       <?php echo $a['jobtitle']?></a>
                                    </td>
                                   
                                    <td>
                                        <a href="<?php echo base_url()?>tesda/employer_profilepage/<?php echo $a['companyID']?>" class="Name4">
                                            <?php
                                            $companyName = $this->model_pub->get_companyName($a['companyID']);
                                            echo $companyName;
                                            ?>
                                        </a>
                                    </td>
                                  <?php
                                   echo' <td>';
                                   echo $a['region'];
                                   echo ' |  ';
                                   echo $a['city'];
                                   echo' </td>';
                                   ?>
                                    <td>
                                        <?php
                                        $date2 = $a['expirationdate'];
                                        $date = date('Y-m-d');
                                        $diff = abs(strtotime($date2) - strtotime($date));

                                        $days = round((($diff/24)/60)/60);
                                        echo $days. " days left";
                                        ?>
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">
                                            <?php
                                                $appcount = $this->model_pub->count_jobApplications($a['jobno']);
                                                echo $appcount;
                                            ?> Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label"><?php echo $a['vacanciesleft']?> Left </span>
                                    </td>
                                    
                                    
                               
                                </tr>
                            <?php
                            }
                            ?> 
                            </tbody>
                        </table>	
                        </div><!--end scrollable--> 
                </div><!--end well-->
            </div><!--end job market-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 

      <hr>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newtablep').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
</body>