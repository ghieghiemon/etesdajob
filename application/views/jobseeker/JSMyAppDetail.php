<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span9">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/img/icons/glyphicons_144_folder_open.png" width="25"> My Application 
                    <font class="media-heading vName2">
                        |
                         <?php
                        foreach($jobdetails as $a)
                        {echo $a['jobtitle']; 
                        echo' at ';
                         echo $a['companyName'];
                    echo'</font>
                </h3>
                
                <div style="width:930px;height:420px;overflow:auto;"><!--start scrollable table-->      
                      <div class="row-fluid">
                          <div class="span12">
                          	  
                               <div class="well">
                                  <h5 class="media-heading previewColor">| YOUR STATUS</h5>
                                      <p class="vdDesc2"><font color ="blue"><strong>';
                                      foreach ($appdetails as $b)
                                      {
                                       ?>   <font color="black">&nbsp; Status:&nbsp;</font>
                                          
                                              <?php
                                         echo $b['status']; ?>
                                
                                         <br>
                                       <font color="black">&nbsp; Date and Time: &nbsp;</font>
                                         <?php echo $b['requirementdate']; ?>
                                       
                                        <font color="black"> &nbsp;- &nbsp;</font>
                                        <?php  echo $b['requirementtime']; ?>
                                        <br>
                                         <font color="black">&nbsp; Location: &nbsp;</font>
                                          <?php
                                          echo $b['location']; 
                                      }
                                      
                                          //For Exam on 09/28/2012
                                      echo '</strong></font> </p>
                              </div><!--end well-->
                              	
                              <div class="well">
                                    <h5 class="media-heading previewColor">| DETAILS</h5> 
                                    
                                    <div class="row-fluid">
                                      <div class="span6">
                                          <table class="vdTableMarg4">
                                            <thead>
                                                <tr>
                                                    <th class="span4" style="text-align:center"></th>
                                                    <th class="span5" style="text-align:center"></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody class="recName">
                                                <tr>
                                                  <td class="vdDesc">
                                                      Date Posted:
                                                  </td>
                                                  
                                                  <td>';
                                                       echo $a['dateposted'];
                                                     
                                                     echo' 
                                                      
                                                  </td>
                                                </tr>
                                                
                                                <tr>
                                                  <td class="vdDesc">
                                                      Description:
                                                  </td>
                                                  
                                                  <td>';
                                                      echo $a['description'];
                                                 echo' </td>
                                                </tr>

                                                
                                            </tbody>
                                        </table> 
                                      </div><!--end span-->
                                      
                                      <div class="span6">
                                          <table class="vdTableMarg4B">
                                            <thead>
                                                <tr>
                                                    <th class="span4" style="text-align:center"></th>
                                                    <th class="span5" style="text-align:center"></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody class="recName">
                                                <tr>
                                                  <td class="vdDesc">
                                                      Location:
                                                  </td>
                                                  
                                                  <td>';
                                                      echo $a['region'];
                                                     echo ' | ';
                                                      echo $a['city'];
                                                 echo' </td>
                                                </tr>
                                                
                                                <tr>
                                                  <td class="vdDesc">
                                                      Vacancies Left:
                                                  </td>
                                                  
                                                  <td>';
                                                      echo $a['vacanciesleft'];
                                                      echo'
                                                  </td>
                                                </tr>';
                                                     } ?> 
                                            </tbody>
                                        </table>
                                      </div><!--end span-->
                                    </div><!--end row-fluid-->
                              </div><!--end well-->
                              
                              <div class="well">
                                  <h5 class="media-heading previewColor">| JOB QUALIFICATIONS</h5>
                                  
                                  <div class="row-fluid">
                                      <div class="span6">
                                          <table class="vdTableMarg3">
                                            <thead>
                                                <tr>
                                                    <th class="span4" style="text-align:center"></th>
                                                    <th class="span5" style="text-align:center"></th>
                                                    <th class="span1" style="text-align:center"></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody class="recName">
                                                
                                                <?php
                        foreach($jobdetails as $a)
                        {echo'
                                                <tr>
                                                  <td class="vdDesc">
                                                      SEX:
                                                  </td>
                                                  
                                                  <td>
                                                      <p class="vdDesc2" align="left">';
                                                           echo $a['sex'];
                                                           echo'
                                                      </p>
                                                  </td>
                                                  
                                                </tr>
                                                
                                                <tr>
                                                  <td class="vdDesc">
                                                      AGE RANGE:
                                                  </td>
                                                  
                                                  <td>
                                                      <p class="vdDesc2" align="left">';
                                                           echo $a['agestart'];
                                                             echo'  -  ';
                                                                echo $a['ageend'];
                                                     echo' </p>
                                                  </td>
                                                </tr>';}?>
                                            </tbody>
                                        </table> 
                                      </div><!--end span-->
                                      
                                      <div class="span6">
                                          <table class="vdTableMarg3">
                                            <thead>
                                                <tr>
                                                    <th class="span1" style="text-align:center"></th>
                                                    <th class="span6" style="text-align:center"></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody class="recName">
                                                
                                                <tr>
                                                  <td class="vdDesc">
                                                      CERTIFICATION/S:
                                                  </td>
                                                  
                                                  <td>
                                                      <p class="vdDesc2" align="left">
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
                                                      </p>
                                                  </td>
                                                  
                                                </tr>
                                                
                                                 <tr>
                                                  <td class="vdDesc">
                                                      COMPETENCIES:
                                                  </td>
                                                  
                                                  <td>
                                                      <p class="vdDesc2" align="left">
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
                                                      </p>
                                                  </td>
                                                  
                                                </tr>
                                                
                                            </tbody>
                                        </table> 
                                      </div><!--end span-->
                                  </div><!--end row-fluid-->
                              </div><!--end well-->
                              
                          </div><!--end span-->
                      </div><!--end row-fluid-->
                  </div><!--end scrollable-->   
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span3">
        	<div class="well wellMarg2">
                <div style="width:310px;height:470px;overflow:auto;"><!--start scrollable table-->
                    <h4 class="media-heading">
                        | Other Applications
                    </h4>
                    
                    	<div style="width:287px;height:430px;overflow:auto;margin-left: 20px; margin-top:13px;">
                        <?php
                        foreach($myapps as $a)
                        {
                            echo '<a href="jobseeker" class="otherApps">';
                            echo $a['jobtitle'];
                            echo ' at ';
                            echo $a['companyName'];
                            echo '</a>
                            <br>';
                        }
                        ?>
                    </div><!--end well-->
                </div><!--end scrollable-->
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
<hr>
</body>