<!--modal myModal content-->       
    <div class="modal hide fade" id="signIn">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In</h3>
  		</div>
        
  		<div class="modal-body">
        <form method="post" action='' name="login_form">
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
              <a href="#">Forgot Password?</a>
            </p>
   	 	</form>
        </div>
        
        <div class="modal-footer">
    		Not a member?
    		<a href="#">Register</a>
 		</div>
	</div>
<!--end myModal content-->

<!--start ModLeagMembers-->
<div class="modal hide fade" id="ModLeagMembers">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png"> Members</h3>
  	</div><!--end modal-header-->

  	<div class="modal-footer"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
  			
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

               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
            <div class="span12">
            	<div class="well wellUpMarg">
                	<h3 class="media-heading">
                    	<a href="<?php echo base_url()?>pub/leaguepage" class="Comm">
                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="35"> Leagues
                        </a>
                    </h3>
                    
                	<div class="well">
                            <?php
                            foreach ($details as $a)
                            {
                            ?>
                    <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span1"></th>
                                    <th class="span5"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<td>
                                    	<img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="thumbnail4" alt="">
                                    </td>
                                   
                                    <td>
                                    	<p class="lDetMarg">
                                        
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png">
                                        <a href="" class="LeaName"><?php echo $a['leaguename']?></a><br>
                                        <a href="<?php echo base_url('pub/search_industries/' . $a['leagueindustry']); ?>" class="label label-info">
                                            <?php
                                            $sector = $this->model_pub->get_industryName($a['leagueindustry']);
                                            echo $sector;
                                            ?>
                                                </a><br>
                                        </p>
                                        <p class="LeaDetails lDetMarg2">
                                        	<strong><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name3">
                                                <?php
                                            $type = $this->model_pub->get_userType($a['createdby']);
                                            if($type == 'EMPLOYER')
                                                $by = $this->model_pub->get_companyName($a['createdby']);
                                            else if ($type == 'JOBADMIN')
                                                $by = 'TESDA';
                                            echo $by;
                                            ?>
                                            </a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11" heaight="10"> since <?php echo $a['since']?>
                                            | <a data-toggle="modal" href="#ModLeagMembers" class="Name3"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10" heaight="10">
                                            	<?php echo $a['members']?> Members
                                              </a>
                                            </strong>
                                            <hr class="hrRApp2">
                                        </p>
                                        <p class="LeaDetails2">
                                        	<em><strong>League Description:</strong></em> <?php echo $a['leaguedescription']?>
                                        </p>
                                        
                                        <br>
                                        
                                    </td>
                                </tr>
                                
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
                        }
                        ?>
                        <div class="pull-right" style="margin-left:-60px; margin-top:-105px;">
                            <a href="#signIn" data-toggle="modal" class="LeagueLeave btn btn-primary">
                            	&nbsp; Join &nbsp;
                            </a>
                        </div>
                        </div><!--end well-->
                        
                        <div class="row-fluid">
                	<div class="span12">
            			<h4 class="media header dMarg"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_319_sort.png">
                        	<a href="#"  class="media header DiscHead"> DISCUSSIONS </a>
                        </h4>
                        
                        <div style="width:910px;height:250px;overflow:auto;"><!--start scrollable table-->
                        <ul class="nav nav-list">
                        <?php
                        foreach($discs as $a)
                        {
                        ?>
                            <li style="margin-left:30px;">
                                
                                <a href="<?php echo base_url()?>pub/view_topic/<?php echo $a['discussionno']?>" class="DisTitle2">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_194_circle_question_mark.png" width="14">
                                    <?php echo $a['discussion']?>
                                </a>
                                
                                <font style="margin-left:50px;">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                    Posted by <a href="#" class="Name3">
                                        <?php
                                            $type = $this->model_pub->get_userType($a['postedby']);
                                            if($type == 'EMPLOYER')
                                            {
                                                $by = $this->model_pub->get_companyName($a['postedby']);
                                                echo $by;
                                            }
                                            else if ($type == 'JOBADMIN')
                                            {
                                                $by = 'TESDA';
                                                echo $by;
                                            }
                                            else if ($type == 'APPLICANT')
                                            {
                                                $by = $this->model_pub->get_jsName($a['postedby']);
                                                foreach($by as $b)
                                                {
                                                    echo $b['firstname'];
                                                    echo " ";
                                                    echo $b['lastname'];
                                                }
                                            }
                                            
                                            ?>
                                    </a> 
                                    | <font class="tnd"><?php echo $a['dateposted']?> at <?php echo $a['timeposted']?></font>
                                    | <a href="#" class="Name3">
                                    <?php 
                                    $replies = $this->model_pub->get_discReplies($a['discussionno']);
                                    echo count($replies);
                                     if(count($replies) <=1 )
                                         echo " reply";
                                     else echo " replies";
                                    ?>  </a>
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
            </div><!--end job market-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
</body>