
<!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
 <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/certification.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/competency.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/regions.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/region.js"></script>-->
     <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
        $('#container1').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Annual Graduates Vs. Hired Graduates'
            },
            subtitle: {
                text: 'TESDA'
            },
            xAxis: [{
                categories: ['<?php echo $year1?>', '<?php echo $year2?>']
            }],
            yAxis: {
                min: 0,
                title: {
                   text: 'Percentage of Graduates'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Annual Graduates',
                data: [<?php
                      $ctr = count($indexedReportData);
                      foreach ($indexedReportData as $a)
                      {
                          echo $a;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>]
    
            }, {
                name: 'Hired Graduates',
                data: [<?php
                      $ctr = count($indexedReportData2);
                      foreach ($indexedReportData2 as $b)
                      {
                          echo $b;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>]
    
            }]
        });
    });
    

		</script>
           
<!--invite modal start-->
<div class="modal hide fade" id="invE">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h4><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_010_envelope.png"> Invite people to join TESDA Job Portal </h4>
  	</div>

	<div class="modal-body" align="center">
        <input class="span4" type="email" placeholder="enter email address">
	</div>
 	
    <div class="modal-footer">
    	<div class="pull-right" style="text-align:center">
    	<button class="btn  btn-primary">Invite</button>
        <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a> 
        </div> 
    </div>
</div>
<!--invite modal end-->
<!--are you sure modal-->

    
            <?php
foreach($employerverify as $a)
{
?>
     <div class="modal hide" id="approve<?php echo $a['userID']?>">
     <div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<br>
  	</div>
     <div class="modal-body">
    	<p class="delete">
           <strong> Are you sure you want to approve the profile?</strong>
        </p>
    </div>
        <div class="modal-footer">
            	<a  href="<?php echo base_url()?>tesda/approve_everify/<?php echo $a['userID']?>" class="btn btn-primary">Approve</a>
    	<a class="btn btn-danger" data-dismiss="modal">Cancel</a> 
        </div>
    </div>
     <?php
}
?> 
    
        <?php
foreach($employerverify as $a)
{
?>
     <div class="modal hide" id="deny<?php echo $a['userID']?>">
     <div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<br>
  	</div>
     <div class="modal-body">
    	<p class="delete">
           <strong> Are you sure you want to deny the profile?</strong>
        </p>
    </div>
        <div class="modal-footer">
            	<a  href="<?php echo base_url()?>tesda/deny_everify/<?php echo $a['userID']?>" class="btn btn-danger">Deny</a>
    	<a class="btn btn-primary" data-dismiss="modal">Cancel</a> 
        </div>
    </div>
     <?php
}
?> 
             
 
   
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span7">
            <div class="well" style="height:315px">
                <form method="post" action ="<?php echo base_url()?>tesda/send_invite">
            	<h4 class="media-heading">
                	| Invite companies to join TESDA Job Portal
                </h4>
                
                <!--div class="row-fluid invEmailMarg">
                	<div align="right">
                    	<a href="#invE" data-toggle="modal" class="invEmail">
                        	<img src="assets/img/icons/glyphicons_010_envelope.png" width="15"> Invite through email
                        </a>
                    </div>
                </div><!--end invite email-->
            	
                <table class="table-condensed" style="margin-left:50px;margin-top:10px">
                    	<thead>
                        	<tr>
                            	<th class="span2"></th>
                                <th class="span7"></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        	<tr>
                            	<td class="lLabel">
                                	To: (use comma to separate emails)
                                </td>
                                
                                <td>
                                	<textarea type="input" id="invites" name="invites"class="span9" placeholder="" rows="3"></textarea>
                                </td>
                            </tr>
                            
                            <tr>
                            	<td class="lLabel">
                                	Message:
                                </td>
                                
                                <td>
                                	<textarea type="input" id="msg" name="msg" class="span9" placeholder="" rows="5">Greetings from TESDA,

Want to post a vacancy? Concerned about the advertising expense? Worry no more for TESDA is pleased to inform you that we have provided a job portal that you can use. This is part of the e-TESDA program which consists of e-Learn, e-Certify and e-Work. You are given the chance to post a vacancy, invite matched job seekers, manage applications, schedule an exam/interview, create events and participate in leagues and discussions. 

What's unique about this portal is that most job seekers have acquired their respective certificate/s from TESDA that's why we are ensuring we're presenting quality people with quality trainings. We look forward to your participation in giving possible employment and opportunities to our graduates. 


Register now.
                                        </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="row-fluid">
                    	<div align="right">
                    	<button type="submit" class="btn btn-primary" style="margin-right:135px;">Invite</button>
                        </div>
                    </div><!--end invite button-->
            </form>
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h4 class="media-heading">
                	| Verification
                </h4>
                
            	<div class="tabbable"> <!-- start tabs-->
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Companies' License</a></li>
    			
  				</ul>
  
  				<div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:705px;height:250px;overflow:auto;"><!--start scrollable table-->
                        	 <div id="container">
                        	<table id ="newtabletd" >
                            	<thead>
                                	<tr>
                                        <th class="span3">Date Registered</th>
                                        <th class="span3">Company Name</th>
                                        <th class="span3">License Number</th>
                                        <th class="span2"></th>
                                    </tr>
                                </thead>
                                
                                <tbody  class="recName">
                                <?php
                                foreach ($employerverify as $a)
                                {
                                ?>
                                	<tr>
                                               <td>
                                        	<?php echo $a['dateregistered']?>
                                        </td>
                                        <td>
                                        	
                                                  <a href="<?php echo base_url()?>tesda/employer_profilepage/<?php echo $a['userID']?>" class="Name4">
                                            <?php
                                            $companyName = $this->model_pub->get_companyName($a['userID']);
                                            echo $companyName;
                                            ?>
                                        </a>
                                        </td>
                                        
                                        
                                        
                                        <td>
                                        	<?php echo $a['license']?>
                                        </td>
                                        
                                        <td>
                                        	<a href="#approve<?php echo $a['userID']?>" class="btn btn-mini" data-toggle="modal" >
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_198_ok.png" width="20">
                                            </a>
                                            
                                               <a href="#deny<?php echo $a['userID']?>" class="btn btn-mini" data-toggle="modal">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_197_remove.png" width="20">
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                                 </div>
                        </div><!--end scrollable table-->
                    </div>  <!--end Companies-->
                    
                  
            
                </div> <!--end tab content-->
              </div> <!--end tabbable-->
              
            </div><!--end verification-->
        </div><!--end span left column-->
        
        <div class="span5">
          
            
                
                   <div class="row-fluid">
            	
                	<div class="well wellMarg wellUpMarg">
                    	<h5 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="25"> Reports</h5>
                    	<div style="width:508px;height:295px;overflow:auto;"><!--start scrollable table-->
                                                <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        </div><!--end scrollable table-->
                    </div><!--end well-->
             
                
            </div><!--end row-fluid-->
                
              
           
            
            
            <div class="well wellMarg wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> Upcoming Events
                </h5>
                
            	<div style="width:505px;height:260px;overflow:auto;"><!--start scrollable table-->
      				
    				
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
                    </div><!--end scrollable table-->
                    
    				<div class="row-fluid">
    					<div align="right" style="margin-top:-2px">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
            </div><!--end leagues and discussion-->
        </div><!--end span right column-->
    </div><!--end row-->
    
   
</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>



<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newtabletd').dataTable({
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
