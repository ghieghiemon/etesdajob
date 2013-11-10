 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

         

           <script type="application/javascript" src="<?php echo base_url()?>assets/bootstrap/js/awesomechart.js"> </script>    
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span4">
        	<div class="well">
            	<h5 class="media-heading">
            		<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_341_briefcase.png" width="20"> Briefcase
                </h5>
              
                <div style="width:380px;height:220px;overflow:auto; margin-top:10px"><!--start scrollable table-->
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
                  echo'  <li>
                        <a href="#" class="Comm">
                            <div class="notifAgenda">
                                <font class="boldSched">';
                                	  echo $a['requirementdate'];
                                       echo' |';
                                        echo $a['requirementtime'];
                               echo' </font>
                    			<br> 
                                
                                <p class="notifAgenda2">';
                                	echo $a['status'];
                                       echo' with ';
                                        echo $a['firstname'];
                                        echo' ';
                                        echo $a['lastname'];
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
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div> <!--end row fluid-->
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> Upcoming Events
                </h5>
                
                <div style="width:380px;height:290px;overflow:auto;"><!--start scrollable table-->
      		  <!--start row fluid upcoming events-->		
                   
                  	<?php
                    $ctr = 1;
                    if(count($event) == 0)
                     {
                         echo '<p class = "noCommYet"> There are no upcoming events</p>';
                     }
                     else
                     {
                    foreach ($event as $row)
                     {
                        if($ctr <3){
                echo'
                  <div class="row-fluid"> 
                                  
						
                        <div class="span2">
                        	<a data-toggle="modal" href="#ModEventDes">'?>
                            	<img src="<?php echo base_url()?>eventpics/<?php echo $row['eventpic']?>"  class="thumbnail" alt="">
                                
                           <?php echo' </a>
                        </div>
        				
        				<div class="span9">
							<p class="marg2">'?>
              
                        		<a href='<?php echo base_url()?>pub/pevent_details/<?php echo $row['eventno']?>' class="Name4">
                                            
                                            
                                       <?php echo $row['eventtitle'];
                                      echo'  </a>
                            </p>
          		
                			<p class="evDetails3">
                            	<em>
                                '?><img src="<?php echo base_url()?>assets/img/icons/glyphicons_045_calendar.png" width="11">
                                <?php echo $row['startdate'];
                                	echo ' | '?>
                                        <img src="<?php echo base_url()?>assets/img/icons/glyphicons_054_clock.png" width="11">
                                           <?php echo $row['starttime'];
                               echo' </em><br>
                                <strong>Location</strong>: ';
                                echo $row['region'];
                               echo' | ';
                               echo $row['city'];
                               echo' <br>
                                <strong>Venue:</strong>';
                                echo $row['venue'];
                               echo'<br>
                            	<span class="btn btn-info btn-mini"><a data-toggle ="modal" href="#eventModal" class="attendBtn">';
                                 echo $row['participantscount'];
                                echo' Attendees
                                </a></span>
                            </p>
					
						</div>
					</div>';
                                         }
                     $ctr += 1;
                     }
                     }
                    ?>
                  
                    <!--end row-fluid-->
    				
     			
                    </div><!--end scrollable table-->
                    
    				<div class="row-fluid">
    					<div align="right" style="margin-top:-15px">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span8">
            <div class="well wellMarg">
            	<h4 class="media-heading">
                	| Received Applications
                </h4>
                
                <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                    	<li class="active"><a href="#UR" data-toggle="tab">New Applicants</a></li>
                        <li><a href="#Inv" data-toggle="tab">Invited</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="UR">
                        	<div style="width:830px;height:172px;overflow:auto;"><!--start scrollable table-->
                            	
                            	<table class="tableUA table-hover table-condensed table-striped">
                                	<thead>
                                    	<tr>
                                            <th class="span2" style="text-align:center">Job Title</th>
                                            <th class="span2" style="text-align:center">Name</th>
                                            <th class="span1" style="text-align:center">Location</th>
                                            <th class="span1" style="text-align:center">Age</th>
                                            <th class="span1" style="text-align:center">Sex</th>
                                            <th class="span3" style="text-align:center">Certification</th>
                                            <th class="span2" style="text-align:center">Competencies</th>
                                            <th class="span1" style="text-align:center">Date Applied</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="recName">
                                    	<?php 
                                        foreach ($newapplicant as $a)
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
                                            	<a href="#" class="recAppName">
                                                   <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                                </a>
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
                                            	   <?php echo $a['datereceived']?> 
                                            </td>
                                        </tr>
                                        <?php  
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div><!--end scrollable table-->
                            
<!--                            <div class="row-fluid">
                                <div align="right">
                                    <a href="">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                    </a>
                                </div>
                            </div> end row fluid-->
                        </div> <!--end tab pane unscreened--> 
            
                    <div class="tab-pane" id="Inv">
                    	<div style="width:830px;height:172px;overflow:auto;"><!--start scrollable table-->
                            	<table class="tableUA table-hover table-condensed table-striped">
                                	<thead>
                                    	<tr>
                                            <th class="span2" style="text-align:center">Job Title</th>
                                            <th class="span2" style="text-align:center">Name</th>
                                            <th class="span1" style="text-align:center">Location</th>
                                            <th class="span1" style="text-align:center">Age</th>
                                            <th class="span1" style="text-align:center">Sex</th>
                                            <th class="span2" style="text-align:center">Certification</th>
                                            <th class="span2" style="text-align:center">Competencies</th>
                                            <th class="span2" style="text-align:center">Date Applied</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="recName">
                                    <?php 
                                        foreach ($invites as $b)
                                        {
                                            $appdetails = $this->model_employer->get_appdetails($b['appid']);
                                            foreach($appdetails as $a)
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
                                                    <a href="#" class="recAppName">
                                                      <?php
                                                      $name = $this->model_employer->get_jsName($a['appid']);
                                                      foreach($name as $b)
                                                      {
                                                          echo $b['firstname'];
                                                          echo $b['middlename'];
                                                          echo $b['lastname'];
                                                      }
                                                      ?>
                                                    </a>
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
                                                    <?php echo $a['datereceived']?> 
                                                </td>
                                            </tr>
                                        <?php  
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div><!--end scrollable table-->
                             
<!--            				<div class="row-fluid">
                                <div align="right">
                                    <a href="">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                    </a>
                                </div>
                            </div> end row fluid-->
                    </div> <!--end tab pane invited-->
                    
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
                
            </div><!--end well-->
            
            <div class="well wellMarg wellUpMarg">
            	<h4 class="media-heading">
                	| Posted Vacancies
                </h4>
                
                 <div class="tabbable tabs-left"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        
                        <?php 
                        $ctr1 = 1;
                        foreach($myvacancies as $a)
                        {
                            if($ctr1 == 1)
                            {
                            ?>
                            <li class="active"><a href="#tab<?php echo $a['jobno']?>" data-toggle="tab"><?php echo $a['jobtitle']?></a></li>
                            <?php
                            }
                            else
                            {
                            ?>
                            <li><a href="#tab<?php echo $a['jobno']?>" data-toggle="tab"><?php echo $a['jobtitle']?></a></li>
                            <?php
                            }
                            $ctr1 +=1;
                        }
                        ?>
                        
                    </ul>
                     <div class="tab-content">
                    <?php 
                    $ctr = 1;
                    foreach ($myvacancies as $a)
                    {
                        if($ctr == 1)
                        {
                    ?>
                     <!--start tab content-->
                            <div class="tab-pane active" id="tab<?php echo $a['jobno']?>">
                        <?php
                        }
                        else
                        {
                        ?>
                            <div class="tab-pane" id="tab<?php echo $a['jobno']?>">
                        <?php
                        }
                        ?>
                        	<div style="width:670px;height:296px;overflow:auto;"><!--start scrollable table-->
                                    
                            	<div class="chart_container_centered">

                            <canvas id="chartCanvas<?php echo $a['jobno']?>" width="500" height="240">
                                Your web-browser does not support the HTML 5 canvas element.
                            </canvas>

                        </div>
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane tab1-->
                       
                    <?php
                        $ctr += 1;
                    }
                    ?>    
                       </div> <!--end tab content-->  
                   
                
                </div> <!--end tabbable-->
            </div><!--end well-->
            
        </div><!--end span right column-->
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
    
    <script type="application/javascript">
    <?php
    foreach($myvacancies as $a)
    {
        $new = $this->model_employer->count_jobApplicationsNew($a['jobno']);
        $exam = $this->model_employer->count_jobApplicationsExam($a['jobno']);
        $interview = $this->model_employer->count_jobApplicationsInterview($a['jobno']);
        $hired = $this->model_employer->count_jobApplicationsHired($a['jobno']);
        
        
            
    ?>    
            var chart1 = new AwesomeChart('chartCanvas<?php echo $a['jobno']?>');
            <?php
                if($new == 0 && $exam == 0 && $interview == 0 && $hired == 0)
                {
            ?>
                    chart1.title = "<?php echo $a['jobtitle']?> - No Applications Yet";
            <?php
                }
                else 
                {
            ?>
                    chart1.title = "<?php echo $a['jobtitle']?>";
            <?php
                }
            ?>
            chart1.data = [<?php echo $new?>,<?php echo $exam?>,<?php echo $interview?>,<?php echo $hired?>];
            chart1.labels = ['New Applicant','Exam','Interview','Hired<?php echo $a['jobno']?>'];
            chart1.colors = ['#99C', '#609', '#6CC', '#33F'];
            chart1.randomColors = true;
            chart1.draw();
   <?php
   }
   ?>     
   </script>
   
</body>