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
foreach ($invites as $a)
{
    
?>
    <div class="modal hide fade" id="view<?php echo $a['invitationno']?>">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Job Invite </h3>
  		</div>
        
  		<div class="modal-body">
        	<p>
                We would like to invite you to apply for this job since you passed our qualifications. We look forward in seeing you so you could proceed to the next procedure (exam/interview).
                
                <br><br>
            </p>
        </div>
        
        <div class="modal-footer">
    		<a href="<?php echo base_url()?>jobseeker/apply_jobinvite/<?php echo $a['jobno']?>/<?php echo $a['invitationno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_190_circle_plus.png" width="12"> Accept 
                                    </a>
            <button type="button" data-toggle="modal" data-target="#decline<?php echo $a['jobno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_191_circle_minus.png" width="12"> Decline 
                                    </button>
            <a href="" data-dismiss="modal"> Cancel </a>
        </div>
	</div>
<?php
}
?>

<!--end job invite content-->
<?php 
foreach ($myapp as $z)
{
?>
 <div class="modal hide fade" id="chSched<?php echo $z['jobno']?>">
    <form method="post" action="<?php echo base_url()?>jobseeker/add_schedule/<?php echo $z['jobno']?>"
          <?php
          $jobno = $z['jobno'];
     $appdetails = $this->model_jobseeker->get_appdetails($jobno,$id);
        $jobdetails = $this->model_jobseeker->get_jobdetails($jobno);
        $myapps =$this->model_jobseeker->get_mysideapplications($id,$jobno);
        
        
        foreach($appdetails as $a)
        {
            $scheduleid = $a['scheduleid'];
        }
        
        $schedule = $this->model_jobseeker->get_schedule($scheduleid);
        $scheduleslots = $this->model_jobseeker->get_scheduleSlots($scheduleid);
     ?>
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
            echo $a['venue'];?></strong>. 
            <br><br>
            We have provided the available dates. Please <strong>CHOOSE</strong> from the choices below.
            <br>
            
            <h5>
            	<?php 
                echo $a['scheduledate'];
                }
                ?>
            </h5>
                <?php 
                $ctr=1;
                foreach ($scheduleslots as $a)
                {
                ?>
            <input name="check" class="checkbox" type="radio" value="<?php echo $a['slotid'];?>"> <?php echo $a['starttime']. '-'. $a['endtime']; ?>
                &nbsp;
                <?php 
                $ctr++;
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
          <?php
}
?>
<!--choose schedule modal end-->   
    <?php
foreach($invites as $a)
{
?>
   <div class="modal hide fade" id="jInv<?php echo $a['invitationno']?>">
<?php
    echo '<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3 class="inModEm2">'?>
             <?php    $pic = $this->model_jobseeker->get_companyPic($a['companyid']); ?>
            	<img src="<?php echo base_url()?>employerpics/<?php echo $pic?>" style="width:90px">
                <?php
                                            $companyName = $this->model_jobseeker->get_companyName($a['companyid']);
                                            echo $companyName;
                                            ?>
               <?php echo' </h3>
  		</div>
<div class="modal-body">
        	<p style="margin-top:-10px;">
            	<em><strong> Dear';?>
                
                    <?php
                                                      $name = $this->model_jobseeker->get_jsName($a['appid']);
                                                      foreach($name as $b)
                                                      {
                                                          echo $b['firstname'];
                                                          echo ' ';
                                                          echo $b['middlename'];
                                                          echo ' ';
                                                          echo $b['lastname'];
                                                      }
                                                      ?>
               <?php echo',</strong></em>
                <br><br>
                <strong>'?>
                     <?php
                                            $companyName = $this->model_jobseeker->get_companyName($a['companyid']);
                                            echo $companyName;
                                            ?><?php echo'
                </strong> is pleased to invite you to apply as a
                <font class="inModEm">';
                echo $a['jobtitle'];
                echo' </font> - <em><strong>';
                    echo $a['description'];
                echo'
                 </strong></em> - 
                under the Industry of <em><strong>';
                	 echo $a['sectorName'];
                                     echo'
                </strong></em>
                which is located in <strong>'; echo $a['region'];
                                     echo' | ';  echo $a['city'];
                                     echo'</strong>.
                
                <br><br>
                Here are the <strong>qualifications</strong> that matched your profile:
                <ul>
                <li>Sex:<em>&nbsp;';
                 echo $a['sex'];
                                     echo'
                </em></li>
                <li>Age Range:<em>&nbsp;'; echo $a['agestart'];
                                     echo'
                -';
                 echo $a['ageend'];
                                     echo'</em></li>
                <li>Certification/s:<em>&nbsp; 
                ';?>
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
                                    <?php echo'
                </em></li>
                <li>Competencies:<em>&nbsp; ';?>
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
               <?php echo' </em></li>
                </ul>
                
                There are<strong>&nbsp;';echo $a['vacanciesleft'];
                                     echo' 
                available vacancies</strong> and you were one of the few chosen to apply. We trust that your knowledge, skills, and experience will be among our most available assets. You only have 
                <strong><em>'?>
                 <?php     $date2 = $a['expirationdate'];
                                $date = date('Y-m-d');
                                $diff = abs(strtotime($date2) - strtotime($date));

                                $days = round((($diff/24)/60)/60);
                                echo $days. " days left";?>
                <?php  echo'</em></strong> to accept this invitation. 
                
                <br><br>
                Thank you very much for your time and we look forward in working with you. If you have more clarifications, 
                you can contact <strong>';?>
                        <?php
                                            $companyContactPerson = $this->model_jobseeker->get_companyPerson($a['companyid']);
                                            echo $companyContactPerson;
                                            ?>
                <?php echo' </strong> through this number: <strong>';?>
                   <?php
                                            $companyNum = $this->model_jobseeker->get_companyNum($a['companyid']);
                                            echo $companyNum;
                                            ?>
               <?php echo' </strong>.
                <br><br>
               	<strong> Best Regards,</strong>
                <br>
                <strong><em>';?>
                  <?php
                                            $companyName = $this->model_jobseeker->get_companyName($a['companyid']);
                                            echo $companyName;
                                            ?>
               <?php echo' </em></strong>
                
                 
            </p>
        </div>
        
       '?>
  
  	<div class="modal-footer">
        
  	
    	<a href="<?php echo base_url()?>jobseeker/apply_job/<?php echo $a['jobno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_190_circle_plus.png" width="12"> Accept 
                                    </a>
            <button type="button" data-toggle="modal" data-target="#decline<?php echo $a['jobno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_191_circle_minus.png" width="12"> Decline 
                                    </button>
            <a href="" data-dismiss="modal"> Cancel </a>
  	
     </div>
    </div>

<?php
}
?>  
<!--end jobdetails modal-->

<!--jobdetails modal-->
<?php
foreach($invites as $a)
{
?>
   <div class="modal hide fade" id="decline<?php echo $a['jobno']?>">
<?php
    echo '<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<br>
  	</div>
    
	<div class="modal-body">
    	<p class="delete">
           <strong> Are you sure you want to decline?</strong>
        </p>
    </div>
  	<div class="modal-footer">';
        ?>
  	<a  href="<?php echo base_url()?>jobseeker/decline_job/<?php echo $a['invitationno']?>" class="btn btn-danger">Decline</a>
    	<a class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	
     </div>
    </div>
<?php
}
?>
  	
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well">
            	<h5 class="media-heading">
            		<img src="<?php echo base_url()?>assets/img/icons/glyphicons_341_briefcase.png" width="20"> Briefcase
                </h5>
              
                <div style="width:280px;height:160px;overflow:auto; margin-top:10px"><!--start scrollable table-->
                <ul class="nav nav-list">
                    <?php
                      $ctr = 1;
                    if(count($briefcase) == 0)
                     {
                         echo '<p class = "noCommYet"> There are no upcoming Exams or Interviews</p>';
                     }
                     else
                     {
                        foreach($briefcase as $a){
                            if($ctr >=1)
                        { 
                  echo'  <li>';?>
                            <a href="<?php echo base_url()?>jobseeker/jobseeker_myappsdetail/<?php echo $a['jobno']?>" class="Comm">
                         <?php echo'   <div class="notifAgenda">
                                <font class="boldSched">';
                                	  echo $a['requirementdate'];
                                       echo' |';
                                        echo $a['requirementtime'];
                               echo' </font>
                    			<br> 
                                
                                <p class="notifAgenda2">';
                               
                                	echo $a['status'];
                                       echo' with ';
                                        echo $a['companyName'];
                                        echo' for ';
                                        echo $a['jobtitle'];
                               echo' </p>
                            </div>
                        </a>
                    </li>';
                        }
                      $ctr += 1;
                     }
                     }
                    ?>
                       
                    
                </ul>
               </div><!--end scrollable-->
               
               <div class="row-fluid">
                    <div align="right" style="margin-top:10px">
                             <a href="<?php echo base_url()?>jobseeker/jobseeker_briefcase">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                    </a>
                    </div>
                </div> <!--end row fluid-->
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="20"> Notifications
                </h5>
                
                <div style="width:280px;height:140px;overflow:auto;"><!--start scrollable table-->
      				<ul class="nav nav-list">
                         
                        <?php
                        if (count($notif) == 0)
                        {
                            echo "<br><p class = 'noCommYet'>You don't have any notifications yet.</p>";
                        }
                        foreach ($notif as $a)
                        {
                        ?>
                        <li>
                            <a href="<?php echo base_url()?>jobseeker/jobseeker_myappsdetail/<?php echo $a['jobno']?>" class="Comm">
                                <p class="notifAgenda3">
                                   <?php
                                    if($a['seen'] == 0)
                                    {
                                        echo '<strong>'. $a['notification'].'</strong>';
                                    }
                                    else
                                    {
                                        echo $a['notification'];
                                    }
                                        
                                    ?>
                                </p>
                            </a>
                        </li>
                        <?php 
                            
                        } 
                        ?>
                    </ul>
                </div><!--end scrollable table-->
            </div><!--end notifs-->
            
            <div class="well wellUpMarg">
            	<h6 class="media-heading">
                	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
                </h6>
                   <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>jobseeker/js_searchjob'/>
                
                <div style="width:280px;height:215px;overflow:auto;"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStylePQS">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStylePQS2">
                            <input type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

					<div class="myStyle2PQS">
                        <?php    
             $drpindustries['0'] = 'Industry';
            echo form_dropdown('industry', $drpindustries,'0');     
            ?> 
                    </div>
                    
                    <div class="myStyle2PQS2">
                    <?php $regions['0'] = 'Region'; ?>
                    <?php $cities['0'] = 'City'; ?>
                    <?php 
                    $params = 'id="regions"'; 
                    echo form_dropdown('regionid', $regions, '0',$params);
                    ?> 

                    <?php 
                    $params = 'id="cities"'; 
                    echo form_dropdown('cityid', $cities, '0', $params);
                    ?> 
                    </div>
                    
                    <div align="right">
                    <?php 

                    echo" <input class='btn btn-info btn-mini'";
                    echo form_submit('submit', 'Search');
                    echo form_close(); 
                    ?>
                    </form>
                    </div>
                    
                </div><!--end scrollable-->
            </div><!--end quick job search-->
            
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well wellMarg">
            	<h4 class="media-heading">
                	| MY APPLICATIONS
                </h4>
                
                <div style="width:940px;height:350px;overflow:auto;"><!--start scrollable table-->
                	<table id="app"class="tableMA table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                             <?php
                        if (count($myapp) == 0)
                        {
                            echo "<br><p class = 'noCommYet'> You do not have any applications yet.</p>";
                        }
                        else
                        {
                        ?>
                                <th class="span2" style="text-align:center">Job Title</th>
                                <th class="span2" style="text-align:center">Description</th>
                                <th class="span2" style="text-align:center">Company Name</th>
                                <th class="span1" style="text-align:center">Location</th>
                                <th class="span1" style="text-align:center">Date Applied</th>
                                <th class="span4" style="text-align:center">Status</th>
                        <?php
                        }
                        ?>
                            </tr>
                        </thead>
                        <tbody class="recName">
                        <?php
                       
                        foreach($myapp as $a)
                        {
                             $sched = $this->model_jobseeker->get_myschedule($a['appid'],$a['scheduleid']);
                            echo '<tr>
                                
                                
                                <td>';
                            ?>
                        <a href='<?php echo base_url()?>jobseeker/jobseeker_myappsdetail/<?php echo $a['jobno']?>'>
                            <?php
                            echo $a['jobtitle'];
                            echo '</a></td>
                                <td>';
                            echo $a['description'];
                            echo '</td>
                                <td>'?>
                            <a href="<?php echo base_url()?>jobseeker/employer_profilepage/<?php echo $a['companyID']?>" class="recAppName">
                            <?php echo $a['companyName'];
                            echo '</a>
                                </td>
                                <td>';
                               echo $a['region'];
                                echo ' |  ';
                                echo $a['city'];

                                echo' </td>
                                <td>';
                             echo $a['datereceived'];
                              echo  '</td>
                                <td>
                                    <div class="statusB">';
                            $status =  $a['status'];
                            if($status == "New Applicant")
                            {
                                echo "Processing";
                            }
                            else if ($status == "Exam")
                            {
                                ?>
                                <div class="statusB">
                                    	For Exam <br>
                                        <?php if(empty($sched))
                                        {?>
                                        <a href="#chSched<?php echo $a['jobno']?>" data-toggle="modal" class="more">
                                            Choose Schedule
                                        </a>
                                        <?php }?>
                                    </div>
                                <?php
                            }
                            else if ($status == "Interview")
                            {
                                 ?>
                                <div class="statusB">
                                    	<?php if(empty($sched))
                                        {?>
                                        <a href="#chSched<?php echo $a['jobno']?>" data-toggle="modal" class="more">
                                            Choose Schedule
                                        </a>
                                        <?php }?>
                                    </div>
                                <?php
                            }
                            else if ($status == "Denied")
                            {
                                echo "Denied";
                            }
                            echo '
                                        <font class="more">';
                            if($a['status']!= "New Applicant" && $a['status'] != 'Denied')
                            {
                                
                                foreach($sched as $c)
                                {
                                echo $c['scheduledate'];
                                echo '<br>';
                                echo $c['starttime']. " - ".$c['endtime'];
                                echo " at ";
                                echo $c['venue'];
                                }
                                
                            }
                            echo '</font>
                                    </div>
                                </td>
                            </tr>';
                        }
			?>				
                                                  
                            
                        </tbody>
                    </table>
                </div><!--end scrollable-->
            </div><!--end well-->
            
            <div class="well wellMarg wellUpMarg">
            	<h4 class="media-heading">
                	| JOB INVITES
                </h4>
               
                <div style="width:940px;height:270px;overflow:auto;"><!--start scrollable table-->
                	<table id="inv" class="tableMA table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                
                                <th class="span2" style="text-align:center">Job Title</th>
                                <th class="span2" style="text-align:center">Description</th>
                                <th class="span2" style="text-align:center">Company Name</th>
                                <th class="span2" style="text-align:center">Location</th>
                                <th class="span2" style="text-align:center">Effectivity</th>
                                <th class="span1" style="text-align:center"></th>
                                <th class="span4" style="text-align:center">Options</th>
                            </tr>
                        </thead>
                        
                        <tbody class="recName">
                          <?php  
                          foreach($invites as $a)
                          {
                            echo '<tr>
                                
                                <td>';
                            echo $a['jobtitle'];
                            echo '</td>
                                 <td>';
                            $desc = $this->model_jobseeker->get_jobdescription($a['jobno']);
                            echo $desc;
                            echo '</td>
                                <td>'?>
                        <a href="<?php echo base_url()?>jobseeker/employer_profilepage/<?php echo $a['companyID']?>" class="recAppName">
                            <?php echo $a['companyName'];
                            echo '</a>
                                </td>';
                             echo '</a>
                                </td>
                                <td>';
                               echo $a['region'];
                                echo ' |  ';
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
                                    <span class="label">';
                            echo $a['vacanciesleft'];
                            echo ' Left </span>
                                </td>
                                <td>';
                                ?>

                        <a href="#jInv<?php echo $a['invitationno']?>" data-toggle="modal">View Invitation</a>
                                </td>
                            </tr>
                            <?php
                          }
                            ?>
                        </tbody>
                    </table>
                </div><!--end scrollable-->
                
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>


  

<script type="text/javascript">
    $(document).ready(function(){
       
        // Okay ngayon gumagana na, ganito mangyayari
        // 1. Pag ni click ni USER yun PUBLISH VACANCY, tatawagin nun system itong function na ito 
        // (yun nasa baba)
        // 2. Yun function na yun, nandoon yun paglipat mo ng entries from page's form to modal's form
        // 3. Wait papakita ko example'
        // browser
        
        $("#pub").click(function(){
            
           $("#jobname").html($("#JN").val());
           $("#description").html($("#desc").val());
           $("#vacant").html($("#NOV").val());
           $("#effect").html($("#effectivity").val());
           $("#region").html($("#regions").val());
           $("#industry").html($("#industries").val());
           $("#city").html($("#cities").val())
           $("#msex").html($("#sex").val())
           $("#sAge").html($("#ageto").val())
           $("#eAge").html($("#agefrom").val())
        });
       
        
    });
</script>

<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#app').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>

<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#inv').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>

    
</body>


