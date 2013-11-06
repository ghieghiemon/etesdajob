<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	
        <div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Posted Vacancies
                </h3>
                
                <div class="tabbable"> <!-- start tabs-->
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Active</a></li>
    				<li><a href="#tab11" data-toggle="tab">Expired</a></li>
                                <li><a href="#closed" data-toggle="tab">Closed</a></li>
  				</ul>
  
  				<div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        	<table class="tableJM2 table-hover table-condensed table-striped">
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span1" style="text-align:center">Effectivity</th>
                                      <th class="span2" style="text-align:center">Vacancies Left</th>
                                      <th class="span2" style="text-align:center">Number of Applications</th>
                                      <th class="span3" style="text-align:center"></th>
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
                                                  echo $days;
                                                  echo " days left";
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
                                                <a href="EUpdateVacancy.html" class="invJS btn btn-primary btn-mini">Extend</a>

                                                <a href="EInviteJS.html" class="invJS btn btn-info btn-mini">Invite Job Seekers</a>
                                            </td>
                                        </tr>
                                        <?php
                                  }
                                  ?>
                                                      
                                  
                              </tbody>
                          </table>	
                        </div><!--end scrollable table-->
                        
                       
                    </div>  <!--end Active-->
                    
                    <div class="tab-pane" id="tab11">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        <form method="post" action="<?php echo base_url()?>employer/employer_repost">
                            <table class="tableJM2 table-hover table-condensed table-striped">
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span2" style="text-align:center">Date Expired</th>
                                      <th class="span2" style="text-align:center">Vacancies Left</th>
                                      <th class="span2" style="text-align:center">Number of Applications</th>
                                      <th class="span3" style="text-align:center"></th>
                                  </tr>
                              </thead>
                              
                              <tbody class="recName">
                                  <?php
                                  foreach ($expired as $a)
                                  {
                                      
                                      ?>
                                      <input type="hidden" name="jobvacancy" value="<?php echo $a['jobno']?>">
                                      
                                        
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
                                                 echo $a['expirationdate']; 
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
                                                <button type ="submit" class="invJS btn btn-primary btn-mini">Renew</button>

                                            </td>
                                        </tr>
                                        <?php
                                  }
                                  ?>
                                  
                              </tbody>
                          </table>	
                        </div><!--end scrollable table-->
                        
                        
                    </div> <!--end tab expired-->
                    <div class="tab-pane" id="closed">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        	<table class="tableJM2 table-hover table-condensed table-striped">
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span2" style="text-align:center">Applicants Hired</th>
                                      <th class="span3" style="text-align:center">Duration</th>
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
                                              <a href="#" class="numofApps">
                                              <?php
                                              $count = $this->model_employer->count_jobApplications($a['jobno']);
                                              echo $count;
                                              ?>
                                              </a>
                                            </td>

                                            <td>
                                                <?php
                                                echo $a['dateposted']. " to ". $a['expirationdate'];
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                  }
                                  ?>
                                                      
                                  
                              </tbody>
                          </table>	
                        </div><!--end scrollable table-->
                        
                       
                    </div>  <!--end Active-->
                </div> <!--end tab content-->
              </div> <!--end tabbable-->
                 
            </div><!--end well-->
        	
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
</body>