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
                         <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="35"> Leagues
                    </h3>
                    
                    <div style="width:1210px;height:500px;overflow:auto;margin-left:30px;"><!--start scrollable table-->
                    
                    <?php
                    foreach($leagues as $a)
                    {
                    ?>
                    <table style="margin-left:10px;">
                    <thead>
                    <tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<a href="<?php echo base_url()?>pub/leagueviewpage/<?php echo $a['leagueno']?>" class="LeaName3"><?php echo $a['leaguename']?> </a>
                                	<td>
                                    	<img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="thumbnail5 ePicMarg">
                                    </td>
                                   
                                    <td>
                                        
                                        <p class="LeaDetails4">
                                        	<a href="<?php echo base_url('pub/search_industries/' . $a['leagueindustry']); ?>" class="label label-info">
                                            <?php
                                            $sector = $this->model_pub->get_industryName($a['leagueindustry']);
                                            echo $sector;
                                            ?>
                                                </a><br>
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2"> 
                                            <?php
                                            $type = $this->model_pub->get_userType($a['createdby']);
                                            if($type == 'EMPLOYER')
                                                $by = $this->model_pub->get_companyName($a['createdby']);
                                            else if ($type == 'JOBADMIN')
                                                $by = 'TESDA';
                                            echo $by;
                                            ?></a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since <?php echo $a['since']?>
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png" width="10"> <?php echo $a['members']?> Members</a>
                                        	<br>
                                            <br>
                                            <?php echo $a['leaguedescription']?></p>
                                        </font>
                                        </p>
                                        
                                        <div align="right" style="margin-top:7px;margin-right:-300px;">
                                         	<span>
                                            	<a href="#signIn" data-toggle="modal" role="button" class="btn btn-primary">
                                                    Join
                                                </a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                    	</table><!--end one league-->
                        <hr class="hrLeagTab">
                        <?php
                        }
                        ?>
<!--                       
                        </div><!--end scrollable-->   	
                </div><!--end well-->
            </div><!--end job market-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
      </body>