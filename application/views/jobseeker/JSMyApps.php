<!--jobdetails modal-->
<!--modal job invite content-->    
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
foreach($invites as $a)
{
?>
   <div class="modal hide fade" id="jInv<?php echo $a['invitationno']?>">
<?php
    echo '<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Job Invite </h3>
  	</div>

	<div class="modal-body">
        <p>
                We would like to invite you to apply for this job since you passed our qualifications. We look forward in seeing you so you could proceed to the next procedure (exam/interview).
                
                <br><br>
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
     echo '</font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">';
    echo $a['description'];                                  
    echo '</font>
                                  </td>
                              </tr>
                               <tr>
                                  <td class="previewDet">
                                      Industry:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">';
                                      	 echo $a['sectorName'];
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
                                      	  echo $a['region'];
                                     echo'
                                      </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';
                                     echo $a['city'];
                                     echo'
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Number of Vacancies: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">';
                                      	echo $a['vacanciesleft'];
                                     echo' </font>	
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td class="previewDet">
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<span id="effect" name="effect">';
                                          $date2 = $a['expirationdate'];
                                $date = date('Y-m-d');
                                $diff = abs(strtotime($date2) - strtotime($date));

                                $days = round((($diff/24)/60)/60);
                                echo $days. " days left";
                            echo '</td>
                           
                            </span>	
                                      </font>
                                  
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
                                      		  echo $a['sex'];
                                     echo'	
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="sAge" name="sAge">'; echo $a['agestart'];
                                     echo'	</span> 
                                        - <span id="eAge" name="eAge">'; echo $a['ageend'];
                                     echo'	</span>	
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
                        	hii, je sdjfs NCII, jdfjdfj a, jkdnfjs d, ajdsjkdnfsnf ajn
                        </font>
                    </p>
                   
                   <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">
                        	hii, je sdjfs NCII, jdfjdfj a, jkdnfjs d, ajdsjkdnfsnf ajn
                        </font>
                    </p>
                    
                  
                </div><!--end span-->
                
               
            </div><!--end row-fluid-->
        <hr class="hrLeagTab">
        
        
	</div>
  
  	<div class="modal-footer">';
        ?>
  	
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
                    <div align="right" style="margin-top:-15px">
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
                
                <div style="width:930px;height:250px;overflow:auto;"><!--start scrollable table-->
                	<table class="tableMA table-hover table-condensed table-striped">
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
                                <th class="span3" style="text-align:center">Description</th>
                                <th class="span2" style="text-align:center">Company Name</th>
                                <th class="span2" style="text-align:center">Location</th>
                                <th class="span2" style="text-align:center">Date Applied</th>
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
                                <td>
                                    <a href="#" class="recAppName">';
                            echo $a['companyName'];
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
                            echo $a['status'];
                            echo '<br>
                                        <font class="more">';
                            if($a['status']!= "New Applicant")
                            {
                                echo $a['requirementdate'];
                                echo '<br>';
                                echo $a['requirementtime'];
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
               
                <div style="width:930px;height:250px;overflow:auto;"><!--start scrollable table-->
                	<table class="tableMA table-hover table-condensed table-striped">
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
                                <td>
                                    <a href="#" class="recAppName">';
                            echo $a['companyName'];
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
<!--                                    <a href="<?php echo base_url()?>jobseeker/apply_jobinvite/<?php echo $a['jobno']?>/<?php echo $a['invitationno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_190_circle_plus.png" width="12"> Accept 
                                    </a>
                                    <input type="hidden" value="<?php echo base_url(); ?>" id="base" />
                                    <button type="button" data-toggle="modal" data-target="#decline<?php echo $a['jobno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_191_circle_minus.png" width="12"> Decline 
                                    </button>-->
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
	  
	   $('#test').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>

    
</body>


