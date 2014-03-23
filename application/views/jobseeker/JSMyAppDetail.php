 <!--choose schedule modal start-->
<div class="modal hide fade" id="chSched">
    <form method="post" action="<?php echo base_url()?>jobseeker/add_schedule/<?php echo $jobno?>"
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3 class="inModEm2">
            <?php
            foreach ($jobdetails as $a)
                {
            ?>
            <img src="<?php echo base_url()?>employerpics/<?php echo $a['companypic']?>" style="width:90px">
                <?php
                
                    echo $a['companyName'];
                ?>
        </h3>
  	

	<div class="modal-body">
		<p>
            
        	<strong><em>Greetings,</em></strong>
            <br><br>
            Following consideration of your application for <font class="inModEm"><?php echo $a['jobtitle'] ?></font> 
            - <em><strong>develops software</strong></em> -, 
                <?php
                }
                ?>
            we are pleased to inform that you have been short-listed for 
            <b>
                <?php 
                foreach($appdetails as $a)
                {
                    echo $a['status'];
                }
                ?>
            </b>
            This will be held in <strong><?php 
            foreach ($schedule as $a)
            {
            echo $a['venue'];?></strong> on
            
            	<?php 
                echo $a['scheduledate'];
               
                ?>
           
                <?php 
                echo $a['starttime']. " - ". $a['endtime'];
                
             }
                ?>
            
            <br><br>
            Should you need more assistance, please contact <strong>
                <?php 
                foreach ($schedule as $a)
                {
                    echo $a['contactperson'];
                    ?>
                </strong> at <strong>
                <?php echo $a['contactno']; }?></strong>. Thank you and we look forward in seeing you.
            
            <br><br>
            <strong>Best Regards,</strong>
            <br>
            <em><strong> <?php
                foreach ($jobdetails as $a)
                {
                    echo $a['companyName'];
                }
                ?></strong></em>
        </p>
	</div>
  
  	<div class="modal-footer"> 
    	<button type="submit" class="btn btn-info btn-mini">Done</button>
        <button data-dismiss="modal" class="btn btn-danger btn-mini">Cancel</button>
  	</div>
</form>
</div>
<!--choose schedule modal end-->  

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
                                          $sched = $this->model_jobseeker->get_myschedule($b['scheduleid']);
                                       ?>   <font color="black">&nbsp; Status:&nbsp;</font>
                                          
                                              <?php
                                        $status =  $b['status'];
                                        if($status == "New Applicant")
                                        {
                                            echo "In Process";
                                        }
                                        else if ($status == "Exam")
                                        {
                                            echo "For Exam";
                                        }
                                        else if ($status == "Interview")
                                        {
                                            echo "For Interview";
                                        }
                                       if ($b['status'] != "New Applicant")
                                       {
                                           ?>
                                         <br>
                                         <?php
                                        foreach($sched as $c)
                                        {
                                        ?>
                                         <font color="black">&nbsp; Date and Time: </font>
                                         <?php echo $c['scheduledate']; ?>
                                       
                                        <font color="black"> &nbsp;- &nbsp;</font>
                                        <?php  echo $c['starttime']. " - ".$c['endtime']; ?>
                                        <br>
                                         <font color="black">&nbsp; Location: &nbsp;</font>
                                          <?php
                                          echo $c['venue']; 
                                          ?>
                                          <br>
                                        <?php
                                        }
                                        ?>
                                       <?php if($b['confirmed'] == 0)
                                        {?>
                                        <a href="#chSched" data-toggle="modal" class="more">
                                            Confirm Schedule
                                        </a>
                                          <?php }?>
                                          <?php
                                          
                                       }
                                      }
                                      ?>
                                      
                                      <?php
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
                             ?>
                            <a href="<?php echo base_url()?>jobseeker/jobseeker_myappsdetail/<?php echo $a['jobno']?>" class="otherApps">
                           
                            <?php echo $a['jobtitle'];
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