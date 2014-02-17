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
foreach ($details as $a)
{
 

echo'<div class="modal hide fade modal-wide" id="extend">';?>
 
  <form method="post" action='<?php echo base_url()?>employer/employer_extend/<?php echo $a['jobno']?>'>
<?php
  	echo'<div class="modal-header">
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
                                      <font class="previewDet2">';
                                      	
                                            echo $a['jobtitle'];
                                       
                                     echo' </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description: 
                                  </td>
                                  
                                  <td>
                                 <font class="">';
                                  	echo  $a['description'];
                                      echo'</font>
                                  </td>
                              </tr>
                               <tr>
                                  <td class="previewDet">
                                      Industry:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">';
                                      echo  $a['sectorName'];
                                     echo' </font>
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
                                      <font class="previewDet2">';
                                       echo  $a['region'];
                                     echo' </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';
                                      	 echo  $a['city'];
                                      echo'</font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Number of Vacancies: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';
                                      	echo  $a['vacanciesleft'];
                                     echo' </font>	
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td class="previewDet">
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';?>
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
                                                    echo "EXPIRED";
                                                  }
                                                ?>
                                   <?php  echo' </font>
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
                                      <font class="previewDet2">';
                                      		echo  $a['sex'];
                                        
                                     echo' </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="sAge" name="sAge">';
                                        echo  $a['agestart'];
                                        echo'</span>
                                        - 
                                        <span id="eAge" name="eAge">';
                                        echo  $a['ageend'];
                                      echo'  </span>	
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<p class="previewCCS">
                		<strong>CERTIFICATION/S:</strong> 
                        <font class="previewCCS2">';?>
                          <?php
                                                         $count = count($cert);
                                                         foreach ($cert as $a)
                                                         {
                                                             echo $a['ncname'];
                                                             echo " ". $a['level'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        	
                    <?php   echo' </font>
                    </p>
                    <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">';?>
                         <?php
                                                         $count = count($cert);
                                                         foreach ($comp as $a)
                                                         {
                                                             echo $a['cocname'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        	
                    <?php   echo' </font>
                    </p>

                     </div><!--end span-->
                
               
            </div><!--end row-fluid-->
	</div>
         <hr class="hrLeagTab">
         <h4 class="media-heading previewColor"> &nbsp;&nbsp; | SELECT EFFECTIVITY </h4>'  ;  ?>
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
<!--publish vacancy modal end-->
<?php 
}
?>
<?php
foreach ($details as $a)
{
 

echo'<div class="modal hide fade modal-wide" id="renew">';?>
 
  <form method="post" action='<?php echo base_url()?>employer/employer_renew/<?php echo $a['jobno']?>'>
<?php
  	echo'<div class="modal-header">
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
                                      <font class="previewDet2">';
                                      	
                                            echo $a['jobtitle'];
                                       
                                     echo' </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description: 
                                  </td>
                                  
                                  <td>
                                 <font class="">';
                                  	echo  $a['description'];
                                      echo'</font>
                                  </td>
                              </tr>
                               <tr>
                                  <td class="previewDet">
                                      Industry:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">';
                                      echo  $a['sectorName'];
                                     echo' </font>
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
                                      <font class="previewDet2">';
                                       echo  $a['region'];
                                     echo' </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';
                                      	 echo  $a['city'];
                                      echo'</font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Number of Vacancies: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';
                                      	echo  $a['vacanciesleft'];
                                     echo' </font>	
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td class="previewDet">
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';?>
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
                                                    echo "EXPIRED";
                                                  }
                                                ?>
                                   <?php  echo' </font>
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
                                      <font class="previewDet2">';
                                      		echo  $a['sex'];
                                        
                                     echo' </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="sAge" name="sAge">';
                                        echo  $a['agestart'];
                                        echo'</span>
                                        - 
                                        <span id="eAge" name="eAge">';
                                        echo  $a['ageend'];
                                      echo'  </span>	
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<p class="previewCCS">
                		<strong>CERTIFICATION/S:</strong> 
                        <font class="previewCCS2">';?>
                                                         <?php
                                                         $count = count($cert);
                                                         foreach ($cert as $a)
                                                         {
                                                             echo $a['ncname'];
                                                             echo " ". $a['level'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        	
                    <?php   echo' </font>
                    </p>
                    <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">';?>
                         <?php
                                                         $count = count($cert);
                                                         foreach ($comp as $a)
                                                         {
                                                             echo $a['cocname'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                        	
                    <?php   echo' </font>
                    </p>

                     </div><!--end span-->
                
               
            </div><!--end row-fluid-->
	</div>
         <hr class="hrLeagTab">
         <h4 class="media-heading previewColor"> &nbsp;&nbsp; | SELECT EFFECTIVITY </h4>'  ;  ?>
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
        <button type="submit" class="btn btn-info" >Repost</button>
        <a href="" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
                    </form>
</div>
<!--publish vacancy modal end-->
<?php 
}
?>
<!--publish vacancy modal end-->
<!--change status modal end-->
<!--change status modal start-->

<div class="modal hide fade modal-wide" id="changemodal">
  	
</div> 

<?php foreach ($apps as $a)
{
    ?>
<div class="modal hide fade modal-wide" id="changeStatus<?php echo $a['applicationid']?>">
    <form method="post" action="<?php echo base_url()?>employer/employer_changeStatus/<?php echo $jobno?>/<?php echo $a['applicationid']?>">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Change Status</h3>
  	</div>

	<div class="modal-body">
		<div class="well">
        	<table>
                  <thead>
                      <tr>
                          <th class="span8"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Hired" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  Hired
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Denied" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  Denied
                              </label>
                              
                          </td>
                      </tr>
              </table>

	</div>
  
  	<div class="modal-footer">
  		<button type="submit" class="btn btn-info" >Save</button>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
        </div>
    </form>
</div>
<?php } ?>
<!--change status modal end-->
 <!--change status modal end-->

<!--set schedule modal start-->
<div class="modal hide fade" id="setSched">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Set Schedule</h3>
  	</div>

	<div class="modal-body" align="center" style="margin-left:40px">
		<a href="<?php echo base_url()?>employer/setEI/Exam/<?php echo $jobno?>" class="btn btn-primary">For Exam</a>
        <a href="<?php echo base_url()?>employer/setEI/Interview/<?php echo $jobno?>" class="btn btn-info">For Interview</a>
	</div>
  
  	<div class="modal-footer"> 
  	</div>
</div>
<!--set schedule modal end-->
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg2b">
            	<div class="row-fluid">
                  <div align="center">
                  <span class="badge badge-important">
                  	<h6>
                          <?php
                          foreach ($details as $a)
                          {
                          ?>
                          <a href="#" class="numAppC2">
                              <?php 
                              $left =  $a['vacanciesleft'];
                              echo $left;
                              if ($left >1)
                                  echo " Vacancies";
                              else 
                                  echo " Vacancy";
                              ?>  Left
                          </a>
                          <?php
                          }
                          ?>
                     </h6>
                  </span>
                      
                  </div>
              </div><!--end vacancies left-->
              
                <div style="width:310px;height:518px;overflow:auto;margin-top:10px"><!--start scrollable table-->
                	<div class="well">
                            <h3 class="media-heading vNameJA">
                           <?php
                           foreach($details as $a)
                           {
                               echo $a['jobtitle'];
                           }
                           ?>
                        </h3>
                    	<h5 class="media-heading previewColor">
                            | Details
                        </h5>
                        
                    	<table class="vdAppMarg">
                                <thead>
                                    <tr>
                                        <th class="span5" style="text-align:center"></th>
                                        <th class="span5" style="text-align:center"></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="recName">
                                    <tr>
                                      <td class="vdDesc">
                                          Date Posted:
                                      </td>
                                      
                                      <td>
                                          <?php
                                          foreach($details as $a)
                                           {
                                               echo $a['dateposted'];
                                           }
                                           ?>
                                      </td>
                                      
                                    </tr>
                                     <tr>
                                      <td class="vdDesc">
                                          Expiration Date:
                                      </td>
                                      
                                      <td>
                                          <?php
                                          foreach($details as $a)
                                           {
                                               echo $a['expirationdate'];
                                           }
                                           ?>
                                      </td>
                                      
                                    </tr>
                                    </tr>
                                    
                                    <tr>
                                      <td class="vdDesc">
                                          Effectivity:
                                      </td>
                                      
                                      <td>
                                          
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
                                          <br>
                                          <?php
                                            $date2 = $a['expirationdate'];                                          
                                            $date = date('Y-m-d');
                                            $diff = abs(strtotime($date2) - strtotime($date));

                                            $days = round((($diff/24)/60)/60);
                                            $notif = $a['jobno']."is nearing its expiration. Would you like to extend?";
                                            if ($days <= 5)
                                            {
                                               // $this->model_employer->add_notification($id,$notif,$a['jobno']);
                                            
                                                    ?>
                                                
                                              <a href="#extend" data-toggle="modal" class="btn btn-mini btn-danger">Extend</a>
                                                <?php
                                                  }
                                                  else 
                                                  {
                                                ?>
                                               <a href="#renew" data-toggle="modal" class="btn btn-mini btn-info">Extend</a>
                                                <?php
                                                  }
                                                ?>
                                         
                                      </td>
                                     
                                    </tr>
                                    
                                     <tr>
                                      <td class="vdDesc">
                                          Location:
                                      </td>
                                      
                                      <td>
                                          <?php 
                                        echo $a['region'];
                                        echo ' |  ';
                                        echo $a['city'];
                                        ?>
                                      </td>
                                      
                                    </tr>
                                    
                                    <tr>
                                      <td class="vdDesc">
                                          Description:
                                      </td>
                                      
                                      <td>
                                          <?php
                                          foreach($details as $a)
                                           {
                                               echo $a['description'];
                                           }
                                           ?> 
                                      </td>
                                    </tr>

                                </tbody>
                            </table>
                    </div><!--end well-->
                    
                    <div class="well">
                    	<h5 class="media-heading previewColor">
                            | Qualifications
                        </h5>
                        
                    	<table class="vdAppMarg">
                                <thead>
                                    <tr>
                                        <th class="span5" style="text-align:center"></th>
                                        <th class="span5" style="text-align:center"></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="recName">
                                    <tr>
                                      <td class="vdDesc">
                                          Sex:
                                      </td>
                                      
                                      <td><?php	
                                          echo $a['sex'];
                                          ?>
                                      </td>
                                      
                                    </tr>
                                    
                                     <tr>
                                      <td class="vdDesc">
                                          Age Range:
                                      </td>
                                      
                                      <td>
                                          <?php
                                            echo $a['agestart'];
                                            echo'  -';
                                            echo $a['ageend'];
                                            ?>
                                      </td>
                                      
                                    </tr>
                                    
                                    <tr>
                                      <td class="vdDesc">
                                          Certification/s:
                                      </td>
                                      
                                      <td>
                                          <?php
                                                         $count = count($cert);
                                                         foreach ($cert as $a)
                                                         {
                                                             echo $a['ncname'];
                                                             echo " ". $a['level'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                                      </td>
                                     
                                    </tr>
                                    
                                     <tr>
                                      <td class="vdDesc">
                                          Competencies:
                                      </td>
                                      
                                      <td>
                                           <?php
                                                         $count = count($cert);
                                                         foreach ($comp as $a)
                                                         {
                                                             echo $a['cocname'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>
                                      </td>
                                      
                                    </tr>
                                </tbody>
                            </table>
                    </div><!--end well-->
                     
                    
                </div><!--end scrollable-->
            </div><!--end well-->
        	
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_144_folder_open.png" width="30"> 
                    Applications
                    <font class="media-heading vName2">
                    </font>
                </h3>
                
                <div align="left" class="legendMarg">
                	<h4 style="margin-left:40px;">
                    	LEGEND:  
                        <font class="legendFont">
                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15"> - Invited 
                        </font>
                    </h4>
                    
                </div><!--end legend-->
                <form method="post" action="<?php echo base_url()?>employer/employer_viewchecked"> 
                <div align="right" class="changeBtnMarg">
                	<!--<button type="submit" >-->
                        
                        <?php
                          foreach ($details as $a)
                          {
                              $left =  $a['vacanciesleft'];
                              if ($left >=1)
                              {
                              ?> 
                        <!--id="change"-->
                        <a  href="#setSched" data-toggle="modal" class="btn btn-info">
                            Set Schedule
                            </a>
                        <?php
                              }
                              else
                              {
                                  echo "<br><br>";
                              }
                          }
                        ?>
                        
                </div>
                <br>
                <hr class="hrDicussBigA">

                   <div class="tabbable"> <!-- start tabs-->
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">New Applicants</a></li>
                          <li><a href="#tab2" data-toggle="tab">Exam</a></li>
                          <li><a href="#tab3" data-toggle="tab">Interview</a></li>
                          <li><a href="#tab4" data-toggle="tab">Hired</a></li>
                      </ul>
            
                      <div class="tab-content"> <!--start tab content-->
                      <div class="tab-pane active" id="tab1">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <!--<table class="tableUR2 table-hover table-condensed table-striped">-->
                               <div id="container">
                        	<table id ="newapplicant">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span3" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  
                                  foreach ($newapplicant as $a)
                                  {
                                      
                                  ?>   
                                      <tr>
                                          <td>
                                              
                                              <?php
                                              if (count($invites)>0)
                                              {
                                                    foreach ($invites as $c)
                                                    {
                                                        $appid[] = $c['appid'];
                                                    }
                                                    if(in_array($a['appid'],$appid))
                                                    {

                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php
                                                    } 
                                              }
                                              ?>
                                          </td>
                                          
                                          
                                          <td>
                                              <a href="<?php echo base_url()?>employer/employer_appsprof/<?php echo $a['appid'] ?>/<?php echo $a['jobno'] ?>" class="recAppName" id="profile">
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
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          <td><a  href="#changeStatus<?php echo $a['applicationid']?>" data-toggle="modal" class="btn btn-info">Change Status</a> </td>
                                      </tr>
                                  <?php
                                        
                                  }
                                  ?>
                                  </tbody>
                              </table>
                               </div>
                          </div><!--end scrollable-->   	
                      </div> <!--end tab pane unscreened-->
                      
                      <div class="tab-pane" id="tab2">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <div id="container">
                        	<table  id="exam">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span3" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($exam as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              if (count($invites)>0)
                                              {
                                                  foreach ($invites as $c)
                                                  {
                                                      $appid[] = $c['appid'];
                                                  }
                                                  if(in_array($a['appid'],$appid))
                                                  {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php 
                                                  }
                                              } 
                                              ?>
                                          </td>
                                          
                                          <td>
                                              <a href="<?php echo base_url()?>employer/employer_appsprof/<?php echo $a['appid'] ?>/<?php echo $a['jobno'] ?>" class="recAppName">
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
                                          
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          <td><a  href="#changeStatus<?php echo $a['applicationid']?>" data-toggle="modal" class="btn btn-info">Change Status</a></td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane Exam-->
                      
                      <div class="tab-pane" id="tab3">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              
                                   <div id="container">
                        	<table  id="interview1" >
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span3" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($interview as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              
                                              <?php
                                              if (count($invites)>0)
                                              {
                                                  foreach ($invites as $c)
                                                  {
                                                      $appid[] = $c['appid'];
                                                  }
                                                  if(in_array($a['appid'],$appid))
                                                  {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php 
                                                  } 
                                              }
                                              ?>
                                          </td>
                                          
                                          <td>
                                              <a href="<?php echo base_url()?>employer/employer_appsprof/<?php echo $a['appid'] ?>/<?php echo $a['jobno'] ?>" class="recAppName">
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
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
<!--                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>-->
                                          <td> <a  href="#changeStatus<?php echo $a['applicationid']?>" data-toggle="modal" class="btn btn-info">Change Status</a> </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                                   </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane 1st int-->
                      
                         <div class="tab-pane" id="tab4">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <div id="container">
                        	<table  id="hired" >
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center">     </th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span3" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($hired as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          
                                          <td>
                                                <a href="<?php echo base_url()?>employer/employer_appsprof/<?php echo $a['appid'] ?>/<?php echo $a['jobno'] ?>" class="recAppName">
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
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          <td> <a  href="#changeStatus<?php echo $a['applicationid']?>" data-toggle="modal" class="btn btn-info">Change Status</a> </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                              </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane 2ns int-->
                      
<!--                      <div class="tab-pane" id="tab5">
                          <div style="width:920px;height:420px;overflow:auto;">start scrollable table
                               <div id="container">
                        	<table  id="all" >
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"><input type="checkbox" onclick="checkall(this);"></th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span3" style="text-align:center">Date</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($all as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <input type="checkbox" class="chk" name="check[]" value="<?php echo $a['applicationid']?>">
                                              <?php
                                              if (count($invites)>0)
                                              {
                                                  foreach ($invites as $c)
                                                  {
                                                      $appid[] = $c['appid'];
                                                  }
                                                  if(in_array($a['appid'],$appid))
                                                  {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } 
                                              }
                                              ?>
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
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
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                               </div>
                          </div>end scrollable
                      </div> end tab pane hire-->
                      
                      
                     
                  </div> <!--end tab content-->
                  </div> <!--end tabbable-->
                </form>
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->

      <hr>
      </body>
       <script type="text/javascript" >
     
     $(document).ready(function(){
    $("#chkAll").click(function(){
        $(".chk").prop("checked",$("#chkAll").prop("checked"))
    }) 
});
 </script> <script type="text/javascript" >
     
     $(document).ready(function(){
    $("#chkAll2").click(function(){
        $(".chk2").prop("checked",$("#chkAll2").prop("checked"))
    }) 
});
 </script>
  <script type="text/javascript" >
     
     $(document).ready(function(){
    $("#chkAll3").click(function(){
        $(".chk3").prop("checked",$("#chkAll3").prop("checked"))
    }) 
});
 </script>
      <SCRIPT LANGUAGE="JavaScript">

<!-- 
var date_arr = new Array;
var days_arr = new Array;

date_arr[0]=new Option("January",31);
date_arr[1]=new Option("February",28);
date_arr[2]=new Option("March",31);
date_arr[3]=new Option("April",30);
date_arr[4]=new Option("May",31);
date_arr[5]=new Option("June",30);
date_arr[6]=new Option("July",31);
date_arr[7]=new Option("August",30);
date_arr[8]=new Option("September",30);
date_arr[9]=new Option("October",31);
date_arr[10]=new Option("November",31);
date_arr[11]=new Option("December",30);

function fill_select(f)
{
        document.writeln("<SELECT name=\"months\"               onchange=\"update_days(FRM)\">");
        for(x=0;x<12;x++)
                document.writeln("<OPTION value=\""+date_arr[x].value+"\">"+date_arr[x].text);
        document.writeln("</SELECT><SELECT name=\"days\"></SELECT>");
        selection=f.months[f.months.selectedIndex].value;
}

function update_days(f)
{
        temp=f.days.selectedIndex;
        for(x=days_arr.length;x>0;x--)
        {
                days_arr[x]=null;
                f.days.options[x]=null;
         }
        selection=parseInt(f.months[f.months.selectedIndex].value);
        ret_val = 0;
        if(f.months[f.months.selectedIndex].value == 28)
        {
                year=parseInt(f.years.options[f.years.selectedIndex].value);
                if (year % 4 != 0 || year % 100 == 0 ) ret_val=0;
                else
                        if (year % 400 == 0)  ret_val=1;
                        else
                                ret_val=1;
        }
        selection = selection + ret_val;
        for(x=1;x < selection+1;x++)

        {
                days_arr[x-1]=new Option(x);
                f.days.options[x-1]=days_arr[x-1];
        }
        if (temp == -1) f.days.options[0].selected=true;
        else
             f.days.options[temp].selected=true;
}
function year_install(f)
{
        document.writeln("<SELECT name=\"years\" onchange=\"update_days(FRM)\">")
        for(x=2001;x<2101;x++) document.writeln("<OPTION value=\""+x+"\">"+x);
        document.writeln("</SELECT>");
        update_days(f)
}

//-->

      </SCRIPT>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newapplicant').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#exam').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#interview1').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>

<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#all').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#hired').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<input type="hidden" value="<?php echo base_url(); ?>" id="base" />
<script type="text/javascript">

    $(document).ready(function(){
        
        $('#change').on('click', function(){

            var values = [];
            $("#check1:checked").each(function() {
                values.push($(this).val());
            });
            $("#check2:checked").each(function() {
                values.push($(this).val());
            });
            $("#check3:checked").each(function() {
                values.push($(this).val());
            });
            $("#check4:checked").each(function() {
                values.push($(this).val());
            });
            if(values.length > 0){            
                $('#changemodal').html(null);
                $('#changemodal').load($('#base').val() + "employer/employer_view", {info: values});
                $('#changemodal').modal('show');
            } else {
                alert('You have to select'); 
            }

        });
        
    });
    
</script>
<input type="hidden" value="<?php echo base_url(); ?>" id="base" />
<script type="text/javascript">
					
	function openWindow(){
		
		// alert('Clicked');
		// window.open($('#base').val() + 'employer/view_event/'+year+'/'+month+"/"+day+"/"+company,'List of Events','width=400,height=600');
		window.open($('#base').val() + 'employer/view_calendar/','Calendar','width=1400,height=500');

	}
	
</script>
