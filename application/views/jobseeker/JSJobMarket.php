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
         
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg2b">
                <h5 class="media-heading">
                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
            </h5>
                <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>jobseeker/js_searchjob'/>
                <div style="width:310px;height:480px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStyleQS3">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStyleQS3">
                            <input type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

					<div class="myStyle3QS">
                                      <?php    
             $drpindustries['0'] = 'Industry';
            echo form_dropdown('industry', $drpindustries,'0');     
            ?> 
                    </div>
                    
                    <div class="myStyle3QS2">
                         <?php $regions['0'] = 'Region'; ?>
                    <?php $cities['0'] = 'City'; ?>
                    <?php 
                    $params = 'id="regions"'; 
                    echo form_dropdown('regionid', $regions, '0',$params);
                    ?> 
                    </div>
                    
                    <div class="myStyle3QS2">                        
                          <?php 
                    $params = 'id="cities"'; 
                    echo form_dropdown('cityid', $cities, '0', $params);
                    ?> 
                    </div>
                    
                 
                    <div align="right">
                    <?php 

                    echo" <input class='qsBtn btn btn-info'";
                    echo form_submit('submit', 'Search');
                    echo form_close(); 
                    ?>
                    </form>
                    </div>
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Job Market
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li><a href="#SGS" data-toggle="tab">Suggested</a></li>
                        <li><a href="#All" data-toggle="tab">All</a></li>
                        <li class="active"><a href="#Ind" data-toggle="tab">Industry</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane" id="SGS">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            <div id="container">
                        	<table id ="newtablejb" >
                                    
                            <thead>
                                <tr>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                             <?php
                    $ctr = 1;
                    if(count($suggested) == 0)
                     {
                         echo '<p class = "noCommYet"> There are no jobs available</p>';
                     }
                     else
                     {
                            foreach ($myapp as $a)
                            {
                                $myjobno[] = $a['jobno'];
                            }
                           
                            foreach($suggested as $row){
                                  if($ctr >=1){

                               echo'
                                <tr>
                                    
                                    <td>';?>
                                <a data-toggle="modal"href='#view<?php echo $row['jobno']?>'>
                                   <?php echo $row['jobtitle'];?> </a>
                                   
                                         <?php
                                    echo'</td>
                                   
                                    <td>'?>
                                        <a href="<?php echo base_url()?>jobseeker/employer_profilepage/<?php echo $a['companyID']?>" class="recAppName">
                                    <?php echo $row['companyName'];
                                       
                                       echo' </a>
                                    </td>
                                    
                                    <td>';
                                       echo $row['region'];
                                        echo ' |  ';
                                        echo $row['city'];
                                     
                                        echo' </td>
                                    
                                              <td>' ?>
                                                            <?php
                                                            $date2 = $row['expirationdate'];
                                                            $date = date('Y-m-d');
                                                            $diff = abs(strtotime($date2) - strtotime($date));

                                                            $days = round((($diff/24)/60)/60);
                                                            echo $days. " days left";
                                                            ?>
                                
                                                       <?php echo' </td>
                                    
                                    <td>
                                        <span class="label label-info">'?>
                                         <?php
                                                $appcount = $this->model_jobseeker->count_jobApplications($row['jobno']);
                                                echo $appcount;
                                            ?>
                                            Applied
                                        
                                    <?php echo'</span>
                                    </td>
                                    
                                    <td>';
                                        echo'<span class="label">';
                                       echo $row['vacanciesleft'];
                                       echo' Left </span>
                                    </td>
                                    
                                    
                                    <td>'?>
                                     <?php
                                     if(count($myapp) != 0)
                                     {
                                         if(in_array($row['jobno'],$myjobno))
                                         {
                                             echo' <span class="label label-info">';
                                             echo 'Applied';
                                             echo'</span>';
                                         }
                                         else
                                     {
                                     ?>
<!--                                    	<button class="btn btn-mini btn-info">Apply</button>-->
                                         <a class="btn btn-mini btn-info" href="<?php echo base_url()?>jobseeker/apply_job/<?php echo $row['jobno']?>">Apply</a>
                                     <?php
                                     
                                     }
                                             
                                     }
                                     else
                                     {
                                     ?>
<!--                                    	<button class="btn btn-mini btn-info">Apply</button>-->
                                         <a class="btn btn-mini btn-info" href="<?php echo base_url()?>jobseeker/apply_job/<?php echo $row['jobno']?>">Apply</a>
                                     <?php
                                     
                                     }
                                     echo'</td>
                                </tr>
                                
                              ' ;                       
                           }
                     $ctr += 1;
                     }
                     }
                    ?>
                               
                            </tbody>
                            
                        </table>
                            </div>
                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invited-->
                    
                    <div class="tab-pane" id="All">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            
                            <div id="container">
                        	<table  id="second">
                            <thead>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center">Action</th>
                            </thead>
                            
<!--                            <tbody class="recName">-->
                            <tbody class="recName">
                                <?php
                            foreach($suggested as $b)
                            {
                                $jobno[]=$b['jobno'];
                            }
                            foreach($jobs as $a)
                            {
                                echo '<tr>
                                    
                                    <td>';?>
                                <a data-toggle="modal"href='#view<?php echo $a['jobno']?>'>
                                   <?php echo $a['jobtitle'];?> </a>
                                   
                                         <?php
                                    echo '</td>
                                   
                                    <td>'?>
                                <a href="<?php echo base_url()?>jobseeker/employer_profilepage/<?php echo $a['companyID']?>" class="recAppName">
                                <?php echo $a['companyName'];
                                echo '</a>
                                    </td>
                                    
                                     <td> ';
                                    echo $a['region'];
                                     echo'   |  ';
                                   echo $a['city'];
                                  echo' </td>
                                    
                                    <td>';
                                $date2 = $a['expirationdate'];
                                $date = date('Y-m-d');
                                $diff = abs(strtotime($date2) - strtotime($date));

                                $days = round((($diff/24)/60)/60);
                                echo $days. " days left";
                                 echo '</td>
                                    
                                    <td>
                                        <span class="label label-info">';
                                 $count = $this->model_jobseeker->count_jobApplications($a['jobno']);
                                echo $count;
                                 echo ' Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">';
                                 echo $a['vacanciesleft'];
                                 echo ' Left </span>
                                    </td>
                                    
                                    
                                    <td>';
                                 if(count($suggested) >0)
                                 {
                                    if(in_array($a['jobno'],$jobno))
                                    	echo '<button class="btn btn-mini btn-info">Apply</button>';
                                 }
                                    echo '</td>
                                </tr>';
                                
                                }
                                ?>
                            </tbody>
                        </table>
                            </div>
                        </div><!--end scrollable-->
                    </div> <!--end tab pane invited-->
                  <div class="tab-pane active" id="Ind">
                    	 <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                            Legend:  (#) - no. of vacancies
                        </div>
                        
                        <div class="nav PProfE2" style="width:900px;height:130px;margin-top:10px;margin-bottom:-5px;overflow:auto;">
                                 <?php 
                foreach ($industries as $a)
                {
                    ?>
                    <a href="<?php echo base_url('pub/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd2">
                    <h5 class="media-heading">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>"  class="PProfE"> 
                        <br>(<?php echo $a['totalopenings']?>)
                    </h5>
                    </a>
                <?php
                }
                ?>   
                        </div><!--end scrollable-->
                        <br>
                        <br>
                        <div class="row-fluid" style="margin-top:10px;">
                            <div class="pull-right">
                              
                            </div>
                        </div><!--end row-->
                        
                    	<div class="well" style="width:900px;height:228px;overflow:auto;"><!--start scrollable table-->
                        	
                        </div><!--end scrollable-->
                    </div> <!--end tab pane IND-->
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Job market-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->

      <hr>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newtablejb').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>

<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#second').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>

</body>