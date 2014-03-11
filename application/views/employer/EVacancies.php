<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
     
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
 <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/certification.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/competency.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/regions.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/region.js"></script>

<?php
foreach ($myvacancies as $a)
{
?>
  <form method="post" action='<?php echo base_url()?>employer/employer_extend/<?php echo $a['jobno']?>'>
<div class="modal hide fade modal-wide" id="extend<?php echo $a['jobno']?>">
    
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Vacancy Preview</h3>
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
                                      		<?php $desc = $this->model_employer->get_jobdescription($a['jobno']);
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
                                                  if ($a['exp'] > $a['currentdate'])
                                                  {
                                                  echo $days;
                                                  echo " days left";
                                                  }
                                                  else
                                                  {
                                                    echo "<font color ='red'>EXPIRED </font>";
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
   <hr class="hrLeagTab">
         <h4 class="media-heading previewColor"> &nbsp;&nbsp; | SELECT EFFECTIVITY </h4>
                    <?php 
                    $options = array(
                    '2'  => '2 weeks',
                    '3'    => '3 weeks',
                    '4'   => '4 weeks',

                    );
                    $js = 'style="margin-left:40px;"id="effectivity"';

                    echo form_dropdown('effectivity', $options, '2', $js);

                    ?>
  	<div class="modal-footer">
        <button type="submit" class="btn btn-info" >Extend</button>
        <a href="" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
       </form>
</div>
<?php 
}
?>
<!--publish vacancy modal end-->
<!--publish vacancy modal start-->
<?php
foreach ($myvacancies as $a)
{
?>
  <form method="post" action='<?php echo base_url()?>employer/employer_renew/<?php echo $a['jobno']?>'>
<div class="modal hide fade modal-wide" id="renew<?php echo $a['jobno']?>">
    
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Vacancy Preview</h3>
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
                                      		<?php $desc = $this->model_employer->get_jobdescription($a['jobno']);
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
   <hr class="hrLeagTab">
         <h4 class="media-heading previewColor"> &nbsp;&nbsp; | SELECT EFFECTIVITY </h4>
                    <?php 
                    $options = array(
                    '2'  => '2 weeks',
                    '3'    => '3 weeks',
                    '4'   => '4 weeks',

                    );
                    $js = 'style="margin-left:40px;"id="effectivity"';

                    echo form_dropdown('effectivity', $options, '2', $js);

                    ?>
  	<div class="modal-footer">
        <button type="submit" class="btn btn-info" >Extend</button>
        <a href="" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
       </form>
</div>
<?php 
}
?>
<!--publish vacancy modal end-->

<div class="container">
<div style="margin-left: 1%; margin-top: -1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	
        <div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Manage Vacancies
                </h3>
                
<!--                <div class="tabbable">  start tabs
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Open</a></li>
  				</ul>
  
  				<div class="tab-content"> start tab content
                    <div class="tab-pane active" id="tab12">-->
                    <br>
                    <div class="tabbable"> <!-- start tabs-->
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Processing</a></li>
    				<li><a href="#tab11" data-toggle="tab">Closed</a></li>
  				</ul>
                        <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        	<!--<table class="tableJM2 table-hover table-condensed table-striped">-->
                            
                            <div id="container">
                        	<table id ="newtable" >
                                    
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span1" style="text-align:center">Effectivity</th>
                                      <th class="span2" style="text-align:center">Vacancies Left</th>
                                      <th class="span2" style="text-align:center">Number of Applications</th>
                                      <th class="span1" style="text-align:center">Status</th>
                                      <th class="span1" style="text-align:center"></th>
                                      <th class="span2" style="text-align:center"></th>
                                  </tr>
                              </thead>
                              
                              <tbody class="recName">
                                  <?php
                                  foreach ($myvacancies as $a)
                                  {
                                        ?>
                                        <tr>
                                            <td>
                                                <font class="vColor">	
                                                <a href='<?php echo base_url()?>employer/employer_appsperjob/<?php echo $a['jobno']?>'>
                                                 <?php echo $a['jobtitle']?></a>
                                                </font>
                                            </td>

                                            <td>
                                                <?php 
                                                echo $a['region'];
                                                echo ' |  ';
                                                echo $a['city'];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                  $date2 = $a['expirationdate'];
//                                                  
                                                  $date = date('Y-m-d');
                                                  $diff = abs(strtotime($date2) - strtotime($date));

                                                  $days = round((($diff/24)/60)/60);
                                                  if ($a['exp'] > $a['currentdate'])
                                                  {
                                                  echo $days;
                                                  echo " days left";
                                                  }
                                                  else
                                                  {
                                                    echo "<font color ='red'>EXPIRED </font>";
                                                  }
                                                ?>
                                            </td>

                                            <td>
                                                <badge class="badge badge-important">
                                                <?php echo $a['vacanciesleft']?>
                                            </td>

                                            <td>
                                              <a href="#" class="numofApps">
                                              <?php
                                              $count = $this->model_employer->count_jobApplications($a['jobno']);
                                              echo $count;
                                              ?>
                                              </a>
                                            </td>
                                            <td>
                                                <?php
                                                if ($a['exp'] > $a['currentdate'])
                                                {
                                                    echo "Active";
                                                }
                                                else
                                                {
                                                  echo "<font color ='red'>EXPIRED </font>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($a['exp'] > $a['currentdate'])
                                                  {
                                                    ?>
                                                
                                                <a href="#extend<?php echo $a['jobno']?>" data-toggle="modal" class="invJS btn btn-primary btn-mini">Extend</a>
                                                <?php
                                                  }
                                                  else 
                                                  {
                                                ?>
                                                <a href="#renew<?php echo $a['jobno']?>" data-toggle="modal" class="invJS btn btn-primary btn-mini">Extend</a>
                                                <?php
                                                  }
                                                ?>
                                                
                                            </td>
                                            <td>
                                                 <?php
                                                if ($a['exp'] > $a['currentdate'])
                                                  {
                                                    ?>
                                                
                                                <a href="<?php echo base_url()?>employer/invite_jobseekers2/<?php echo $a['jobno']?>" class="invJS btn btn-info btn-mini">Invite Job Seekers</a>
                                                <?php
                                                  }
                                                  ?>
                                            </td>
                                        </tr>
                                        <?php
                                  }
                                  ?>
                                                      
                                  
                              </tbody>
                          </table>
                        </div>
                            </div>
                        </div><!--end scrollable table--> <!--start tab content-->
                    <div class="tab-pane" id="tab11">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        	<!--<table class="tableJM2 table-hover table-condensed table-striped">-->
                            
                            <div id="container">
                        	<table id ="second" >
                                    
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span1" style="text-align:center">Effectivity</th>
                                      <th class="span2" style="text-align:center">Vacancies Left</th>
                                      <th class="span2" style="text-align:center">Number of Applications</th>
                                      <th class="span1" style="text-align:center">Status</th>
                                      <th class="span1" style="text-align:center"></th>
                                    
                                  </tr>
                              </thead>
                              
                              <tbody class="recName">
                                  <?php
                                  foreach ($closed as $a)
                                  {
                                        ?>
                                        <tr>
                                            <td>
                                                <font class="vColor">	
                                                <a href='<?php echo base_url()?>employer/employer_appsperjob/<?php echo $a['jobno']?>'>
                                                 <?php echo $a['jobtitle']?></a>
                                                </font>
                                            </td>

                                            <td>
                                                <?php 
                                                echo $a['region'];
                                                echo ' |  ';
                                                echo $a['city'];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                  $date2 = $a['expirationdate'];
//                                                  
                                                  $date = date('Y-m-d');
                                                  $diff = abs(strtotime($date2) - strtotime($date));

                                                  $days = round((($diff/24)/60)/60);
                                                  if ($a['exp'] > $a['currentdate'])
                                                  {
                                                  echo $days;
                                                  echo " days left";
                                                  }
                                                  else
                                                  {
                                                    echo "<font color ='red'>EXPIRED </font>";
                                                  }
                                                ?>
                                            </td>

                                            <td>
                                                <badge class="badge badge-important">
                                                <?php echo $a['vacanciesleft']?>
                                            </td>

                                            <td>
                                              <a href="#" class="numofApps">
                                              <?php
                                              $count = $this->model_employer->count_jobApplications($a['jobno']);
                                              echo $count;
                                              ?>
                                              </a>
                                            </td>
                                            <td>
                                                <?php
                                                if ($a['expirationdate'] > $a['currentdate'])
                                                {
                                                    echo "Closed";
                                                }
                                                else
                                                {
                                                  echo "<font color ='red'>EXPIRED </font>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($a['expirationdate'] > $a['currentdate'])
                                                  {
                                                    ?>
                                                
                                                <a href="<?php echo base_url()?>employer/employer_repostjob/<?php echo $a['jobno'] ?>" data-toggle="modal" class="invJS btn btn-primary btn-mini">Repost</a>
                                                <?php
                                                  }
                                                  else 
                                                  {
                                                ?>
                                                <a href="<?php echo base_url()?>employer/employer_repostjob/<?php echo $a['jobno'] ?>" data-toggle="modal" class="invJS btn btn-primary btn-mini">Repost</a>
                                                <?php
                                                  }
                                                ?>
                                                
                                            </td>
                                         
                                        </tr>
                                        <?php
                                  }
                                  ?>
                                                      
                                  
                              </tbody>
                          </table>	
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>  <!--end Active-->
                   
                  
                    
                </div> <!--end tab content-->
              </div> <!--end tabbable-->
                 
            </div><!--end well-->
        	
        </div><!--end span right column-->
  </div>
 
            
 <script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#second').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>            

 <script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newtable').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>   

      <hr>


</body>