
<!--start ModLeagMembers-->
<div class="modal hide fade" id="ModLeagMembers">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png"> Members</h3>
  	</div><!--end modal-header-->

  	<div class="modal-footer"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
  			<div style="width:500px;height:300px;overflow:auto;margin-top:-20px;"><!--start scrollable table-->
            	<table class="table-condensed table-hover">
                	<thead>
                	<tr>
                    	<th class="span2"></th>
                        <th class="span3"></th>
                        <th class="span1"></th>
                        <th class="span2"></th>
                        <th class="span3"></th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    	<tr>
                        	<td>
                            	<a href="#"><img src="<?php echo base_url()?>assets/bootstrap/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            	<a href="#"><img src="<?php echo base_url()?>assets/bootstrap/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                         </tr> <!--one row-->
                    </tbody>
                </table><!--end table-->
            </div><!--end scrollable table-->
    	</div><!--end modal members-->
  	</div><!--end modal-footer-->
</div>
<!--end ModLeagMembers-->

<!--start edit league details-->
<div class="modal hide fade" id="editLD">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3> Edit League Details</h3>
  	</div><!--end modal-header-->

  	<div class="modal-body"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
        	<div align="center">
            	<div class="control-group"><!-- start div LN-->
                    <div class="myStyleQS3">
                        <input type="text" id="LN" name="LN" placeholder="League Name">
                    </div>
                </div><!-- end div LN -->
                
                <div class="myStyle3QS" style="margin-top:-10px">
                    <select>
                        <option>Choose Industry</option>
                        <option>Agriculture & Fishery</option>
                        <option>Automotive & Land Transportation</option>
                        <option>Construction</option>
                        <option>Decorative Arts</option>
                    </select>
                </div><!--end industry-->
                
                <div class="control-group" style="margin-top:-5px;"><!-- start div Desc-->
                    <div class="myStyle3EventDet">
                        <textarea id="Desc" name="Det" rows="3" placeholder="Description"></textarea>
                    </div>
                </div><!-- end div Desc -->
                
                <div class="control-group eWellMarg">
                    <label class="ePicUpload" style="margin-left:-200px">Picture: &nbsp;</label>
                    <div class="controls" style="margin-left:60px; margin-top:-30px;">
                        <form method="post" action="upload-page.php" enctype="multipart/form-data">
                            <input name="pic" id="pic" type="file" style="font-size:10px" />
                        </form>  
                    </div>
                </div> <!--end Picture field-->
             </div><!--end align center-->
    	</div><!--end modal-->
  	</div><!--end modal-body-->
    
    <div class="modal-footer">
    	<button data-dismiss="modal" class="btn btn-info">Save</button>
    </div>
</div>
<!--end edit league details-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
     <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg3b">
                <div class="tabbable"> <!-- start tabs-->
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Joined Leagues</a></li>
    				<li><a href="#tab11" data-toggle="tab">Created Leagues</a></li>
  				</ul>
  
  				<div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:308px;height:492px;overflow:auto;"><!--start scrollable table-->
                        	<div class="well wellMargLeag">
                        	<table> <!--start 1st league-->
                                <tr>
                                    <a href="#">
                                        <div class="LeaName2">
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/worldwide.jpg" width ="25" class="img-rounded "> Worldclass Welders
										</div>
                                    </a>
                                    
                                    
                                    <td style="width:25px">
                                    </td>
                                    
                                    <td style="width:260px">
                                        <a href="#" class="label label-info">Welding Industry</a>
                                        
                                        <br>
                                        <font class="LeaDetails3"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2">Miguel</a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since Jan 2012
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10"> 114 Members</a>
                                        
                                            <br>
                                            Share the same experience with the welders all over the world.</p>
                                        </font>
                        
                                    </td>
                                </tr>
                            </table> <!--end 1st league-->
                            </div><!--end well-->
                            <hr class="hrLeagTabNew">
                            
                            <div class="well wellMargLeag">
                        	<table> <!--start 1st league-->
                                <tr>
                                    <a href="#">
                                        <div class="LeaName2">
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/ld4.jpg" width ="25" class="img-rounded "> Welders Everywhere
										</div>
                                    </a>
                                    
                                    
                                    <td style="width:25px">
                                    </td>
                                    
                                    <td style="width:260px">
                                        <a href="#" class="label label-info">Welding Industry</a>
                                        
                                        <br>
                                         <font class="LeaDetails3"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2">Miguel</a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since May 2012
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10"> 100 Members</a>
                                        
                                            <br>
                                             Community of welders who help each other look for jobs locally and internationally.</p>
                                        </font>
                        
                                    </td>
                                </tr>
                            </table> <!--end 1st league-->
                            </div><!--end well-->
                            <hr class="hrLeagTabNew">
                        </div><!--end scrollable table-->
                        
                    </div>  <!--end tab-pane-->
                    
                    <div class="tab-pane" id="tab11">
                        <div style="width:308px;height:492px;overflow:auto;"><!--start scrollable table-->
                            <div class="well wellMargLeag">
                        	<table> <!--start 1st league-->
                                <tr>
                                    <a href="#">
                                        <div class="LeaName2">
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/worldwide.jpg" width ="25" class="img-rounded "> Worldclass Welders
										</div>
                                    </a>
                                    
                                    
                                    <td style="width:25px">
                                    </td>
                                    
                                    <td style="width:260px">
                                        <a href="#" class="label label-info">Welding Industry</a>
                                        
                                        <br>
                                        <font class="LeaDetails3"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2">Miguel</a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since Jan 2012
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10"> 114 Members</a>
                                        
                                            <br>
                                            Share the same experience with the welders all over the world.</p>
                                        </font>
                        				
                                        <div align="right" class="editMargLeag">
                                            <a href="#editLD" data-toggle="modal" role="button" class="btn btn-mini btn-info">
                                                &nbsp; Edit League Details
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table> <!--end 1st league-->
                            </div><!--end well-->
                            <hr class="hrLeagTabNew">
                            
                            <div class="well wellMargLeag">
                        	<table> <!--start 1st league-->
                                <tr>
                                    <a href="#">
                                        <div class="LeaName2">
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/ld4.jpg" width ="25" class="img-rounded "> Welders Everywhere
										</div>
                                    </a>
                                    
                                    
                                    <td style="width:25px">
                                    </td>
                                    
                                    <td style="width:260px">
                                        <a href="#" class="label label-info">Welding Industry</a>
                                        
                                        <br>
                                         <font class="LeaDetails3"><img src="<?php echo base_url()?>assets/bootstrap//img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2">Miguel</a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since May 2012
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10"> 100 Members</a>
                                        
                                            <br>
                                             Community of welders who help each other look for jobs locally and internationally.</p>
                                        </font>
                        				
                                        <div align="right" class="editMargLeag">
                                            <a href="#editLD" data-toggle="modal" role="button" class="btn btn-mini btn-info">
                                                &nbsp; Edit League Details
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table> <!--end 1st league-->
                            </div><!--end well-->
                            <hr class="hrLeagTabNew">
                        </div><!--end scrollable table-->
                        
                        
                       
                    </div> <!--end tab pane-->
            
                </div> <!--end tab content-->
              </div> <!--end tabbable-->
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            	<div class="row-fluid">
                	<div class="span11">
                    	<div class="well" style="margin-left:10px;width:880px">
                    	<table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span1"></th>
                                    <th class="span5"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                foreach($leaguedetails as $a)
                                {
                                ?>
                            	<tr>
                                	<td>
                                    	<img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['leaguepic']?>" class="thumbnail4" alt="">
                                    </td>
                                   
                                    <td>
                                    	<p class="lDetMarg">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>" class="LeagueInIcon pull-right" alt="Auto Industry"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png"><a href="JSLeagues.html" class="LeaName"> <?php echo $a['leaguename']?></a>
                                        </p>
                                        <p class="LeaDetails lDetMarg2">
                                        	<strong><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name3"><?php 
                                                $name = $this->model_jobseeker->get_companyName($a['createdby']);
                                                echo $name;
                                                ?> </a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11" heaight="10"> since <?php echo $a['since']?>
                                            | <a data-toggle="modal" href="#ModLeagMembers" class="Name3"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10">
                                            	<?php 
                                                $members = $this->model_jobseeker->get_leaguemembers($a['leagueno']);
                                                echo count($members);
                                                ?> Members
                                              </a>
                                            </strong>
                                            <hr class="hrRApp2">
                                        </p>
                                        <p class="LeaDetails2">
                                        	<em><strong>League Description: </strong></em><?php echo $a['leaguedescription']?>
                                        </p>
                                        
                                        <br>
                                        <div class="pull-right" style="margin-left:-60px; margin-top:-55px;">
                                            <span class="LeagueLeave btn-group">
                                            <li class="dropdown">
                                                <a class="btn btn-mini btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_136_cogwheel.png" width="13"> Settings</a>
                                                <ul class="dropdown-menu">
                                                <font class="lOptions">
                                                     
                                                     <li>
                                                        <a href="ELeagEdit.html" class="dropdown-toggle">Edit League Details</a>
                                                     </li>
                                                     <hr class="hrLeagTab">
                                                     <li>
                                                        <a href="#" class="dropdown-toggle">Create League</a>
                                                     </li>
                                                </font>
                                                </ul>         	
                                            </li> 
                                            
                                            </span>
                                           </div>
                                    </td>
                                    
                                </tr>
                                <?php
                                }
                                ?>
                                <tr>
                                	<td>
                                    	<p>
                                        	<hr class="hrRApp2">
                                        </p>
                                    </td>
                                    
                                    <td>
                                    	<p>
                                        	<hr class="hrRApp2">
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                    	</table>
                        <?php
                        foreach($leaguedetails as $a)
                        {
                        ?>
                        <form accept-charset="UTF-8" action="<?php echo base_url()?>jobseeker/posttopic/<?php echo $a['leagueno']?>" method="POST" class="form-horizontal" style="margin-left:10px; margin-bottom:5px;">
                        <?php
                        }
                        ?>
                            <textarea class="span9" id="topic" name="topic"
                                placeholder="Start a topic." rows="1"></textarea>&nbsp;&nbsp;
                                <a href="#" class="btn"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_011_camera.png" width="13"><strong>&nbsp;Photo</strong></a>
                                <button class="btn" type="submit"><strong>Post</strong></button>
                        </form> <!--End post-->

						</div><!--end well-->
                    </div><!--end span-->
                </div><!--end row-->
                
                <div class="row-fluid">
                	<div class="span12">
            			<h4 class="media header dMarg"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_319_sort.png">
                        	<a href="#"  class="media header DiscHead"> DISCUSSIONS </a>
                        </h4>
                        
                        <div style="width:910px;height:250px;overflow:auto;"><!--start scrollable table-->
                        <ul class="nav nav-list">
                            <?php
                            foreach ($discs as $a)
                            {
                            ?>
                            <li style="margin-left:30px;">
                                <a href="<?php echo base_url()?>jobseeker/view_topic/<?php echo $a['discussionno']?>" class="DisTitle2">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_194_circle_question_mark.png" width="14">
                                    <?php echo $a['discussion']?>
                                </a>
                                
                                <font style="margin-left:50px;">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                    Last post by <a href="#" class="Name3">
                                          <?php
                                            $type = $this->model_jobseeker->get_userType($a['postedby']);
                                            if($type == 'EMPLOYER')
                                            {
                                                $by = $this->model_jobseeker->get_companyName($a['postedby']);
                                                echo $by;
                                            }
                                            else if ($type == 'JOBADMIN')
                                            {
                                                $by = 'TESDA';
                                                echo $by;
                                            }
                                            else if ($type == 'APPLICANT')
                                            {
                                                $by = $this->model_jobseeker->get_jsName2($a['postedby']);
                                                foreach($by as $b)
                                                {
                                                    echo $b['firstname'];
                                                    echo " ";
                                                    echo $b['lastname'];
                                                }
                                            }
                                            
                                            ?>
                                    </a> 
                                    | <font class="tnd"> <?php echo $a['dateposted']?> at <?php echo $a['timeposted']?></font>
                                    | <a href="#" class="Name3">
                                    <?php 
                                     $replies = $this->model_jobseeker->get_discReplies($a['discussionno']);
                                    echo count($replies);
                                     if(count($replies) <=1 )
                                         echo " reply";
                                     else echo " replies";
                                    ?> 
                                    </a>
                                </font>
                            </li> 
                            <br>
                            <?php
                            }
                            ?>
                            
                        </ul>
                        </div><!--end scrollable table-->
                    
                    </div><!--end span-->
               </div><!--end row-fluid-->

            	
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
    
</body>