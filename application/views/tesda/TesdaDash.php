
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
   <div class="modal hide fade" id="approve<?php echo $a['userID']?>">
<?php
    echo '<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<br>
  	</div>
    
	<div class="modal-body">
    	<p class="delete">
           <strong> Are you sure you want to approve the profile?</strong>
        </p>
    </div>
  	<div class="modal-footer">';
        ?>
  	<a  href="<?php echo base_url()?>tesda/approve_everify/<?php echo $a['userID']?>" class="btn btn-info">Approve</a>
    	<a class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	
     </div>
    </div>
<?php
}
?>    
    
    <?php
foreach($employerverify as $a)
{
?>
   <div class="modal hide fade" id="deny<?php echo $a['userID']?>">
<?php
    echo '<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<br>
  	</div>
    
	<div class="modal-body">
    	<p class="delete">
           <strong> Are you sure you want to deny the profile?</strong>
        </p>
    </div>
  	<div class="modal-footer">';
        ?>
  	<a  href="<?php echo base_url()?>tesda/approve_edeny/<?php echo $a['userID']?>" class="btn btn-danger">Approve</a>
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
            <div class="well">
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
                                	<textarea type="input" id="msg" name="msg" class="span9" placeholder="" rows="3">Join TESDA Job Portal and look for potential applicants that could help your organization.
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
    				<li><a href="#tab11" data-toggle="tab">Job Seekers' Certification</a></li>
  				</ul>
  
  				<div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:705px;height:250px;overflow:auto;"><!--start scrollable table-->
                        	 <div id="container">
                        	<table id ="newtabletd" >
                            	<thead>
                                	<tr>
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
                                        	<a href="#" class="recAppName">
                                                <?php echo $a['companyName']?>
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
                    
                    <div class="tab-pane" id="tab11">
                        <div style="width:705px;height:250px;overflow:auto;"><!--start scrollable table-->
                             <div id="container">
                        	<table id ="second" >
                            	<thead>
                                	<tr>
                                        <th class="span3">Name</th>
                                        <th class="span2">Location</th>
                                        <th class="span4">Certification</th>
                                        <th class="span2"></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="recName">
                                	<tr>
                                        <td>
                                        	<a href="#" class="recAppName">
                                                Angelica Guerrero
                                            </a>
                                        </td>
                                        
                                        <td>
                                        	NCR | Makati City
                                        </td>
                                        
                                        
                                        <td>
                                        	Electrical Installation & Maintenance NCII
                                        </td>
                                        
                                        <td>
                                        	<button class="btn btn-mini">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_198_ok.png" width="20">
                                            </button>
                                            
                                            <button class="btn btn-mini">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_197_remove.png" width="20">
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                             </div>
                        </div><!--end scrollable table-->
                    </div> <!--end tab pane-->
            
                </div> <!--end tab content-->
              </div> <!--end tabbable-->
              
            </div><!--end verification-->
        </div><!--end span left column-->
        
        <div class="span5">
            <div class="well wellMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_041_charts.png" width="20"> Employment Report
                </h5>
                
                <form class="form-horizontal">
                    <div class="myStyle2T" align="right">
                        <select name="Industry">
                            <option>Choose Industry</option>
                            <option>Agriculture & Fishery</option>
                        </select>
                        
                        <select name="Month" class="span2">
                            <option>January</option>
                            <option>February<option>
                        </select>
                        
                        <select name="Year" class="span2">
                            <option>2013</option>
                            <option>2012<option>
                        </select>
                    </div>
                </form>
                
                <div style="width:505px;height:205px;overflow:auto;"><!--start scrollable table-->
                	
                    
                </div><!--end scrollable table-->
            </div><!--end well-->
            
            
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
