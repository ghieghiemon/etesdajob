 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
  
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

     <script type="application/javascript" src="<?php echo base_url()?>assets/bootstrap/js/awesomechart.js"> </script> 

     <?php
foreach ($myvacancies as $a)
{
?>
 <form method="post" action='<?php echo base_url()?>employer/employer_rep/<?php echo $a['jobno']?>'>
<div class="modal hide fade" id="rep<?php echo $a['jobno']?>">
    
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
                                      		<?php 
                                            echo $a['description'];
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
                        <span id="cert" name= "cert">
                        </span>
                        	
                        </font>
                    </p>
                   <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">
                        <span id="cert" name= "cert">
                        </span>
                        	
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
        <button type="submit" class="btn btn-info" >Repost</button>
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
    	<div class="span4">
        	<div class="well">
            	<h5 class="media-heading">
            		<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="20"> Notifications
                     
                </h5>
                    
                    <div style="width:380px;height:140px;overflow:auto;"><!--start scrollable table-->
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
                            <a href="<?php echo base_url()?>employer/employer_appsperjob/<?php echo $a['jobno']?>" class="Comm">
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
            </div><!--end well-->
            <div class="well wellUpMarg">
            <h5 class="media-heading">
            		<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_341_briefcase.png" width="20"> Briefcase
                </h5>
              
                <div style="width:380px;height:220px;overflow:auto; margin-top:10px"><!--start scrollable table-->
              <ul class="nav nav-list">
                    <?php
                      $ctr = 1;
                    if(count($briefcase) == 0)
                     {
                         echo '<p class = "noCommYet"> There are no upcoming Interviews and Exams</p>';
                     }
                     else
                     {
                        foreach($briefcase as $a){
                            if($ctr >=1)
                        { 
                  echo'  <li>'?>
                        <a href="<?php echo base_url()?>employer/view_ecalendar/" class="Comm">
                            <?php echo'<div class="notifAgenda">
                                <font class="boldSched">';
                                	  echo $a['scheduledate'];
                                       echo' |';
                                        echo $a['starttime'];
                               echo' </font>
                    			<br> 
                                
                                <p class="notifAgenda2">';
                                	echo $a['status'];
                                       echo' - ';
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
                        <a href="<?php echo base_url()?>employer/view_ecalendar/">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div> <!--end row fluid-->   
            </div>
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
                         echo '<p class = "noCommYet"> You have no upcoming events</p>';
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
              
                        		<a href='<?php echo base_url()?>employer/employer_evcreated/<?php echo $row['eventno']?>' class="Name4">
                                            
                                            
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
                            	 <hr class="hrLeagTab">
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
                            	<?php
                                    if(count($newapplicant) == 0)
                                    {
                                        echo "<br><p class = 'noCommYet'>No new applicants yet.</p>";
                                    }
                                    else
                                    {
                                ?>
                            	<table id ="app" class="tableUA table-hover table-condensed table-striped">
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
                                    <?php
                                    }
                                    ?>
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
                                            	  <a href="<?php echo base_url()?>employer/employer_appsprof/<?php echo $a['appid'] ?>/<?php echo $a['jobno'] ?>" class="recAppName" id="profile">
                                                   <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo ' ';
                                                      echo $b['middlename'];
                                                       echo ' ';
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
                                    <?php
                                    if(count($invites) == 0)
                                    {
                                        echo "<br><p class = 'noCommYet'>No invited applicants yet.</p>";
                                    }
                                    else
                                    {
                                ?>
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
                                    <?php
                                    }
                                    ?>
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
                                                      <a href="<?php echo base_url()?>employer/employer_appsprof/<?php echo $a['appid'] ?>/<?php echo $a['jobno'] ?>" class="recAppName" id="profile">
                                                      <?php
                                                      $name = $this->model_employer->get_jsName($a['appid']);
                                                      foreach($name as $b)
                                                      {
                                                          echo $b['firstname'];
                                                          echo ' ';
                                                          echo $b['middlename'];
                                                          echo ' ';
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
                <div style="height:305px;overflow:auto;"><!--start scrollable table-->
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
                        	
                                    
                            	<div class="chart_container_centered">

                            <canvas id="chartCanvas<?php echo $a['jobno']?>" width="550" height="300">
                                Your web-browser does not support the HTML 5 canvas element.
                            </canvas>

                        </div>
                            
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
</div>
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
    
          <script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#app').dataTable({
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
            chart1.labels = ['New Applicant','Exam','Interview','Hired',' <?php echo $a['jobno']?>'];
            chart1.colors = ['#99C', '#609', '#6CC', '#33F'];
            chart1.randomColors = true;
            chart1.draw();
   <?php
   }
   ?>     
   </script>
   
</body>