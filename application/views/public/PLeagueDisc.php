<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
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
            <h3><img src="assets/img/icons/glyphicons_088_adress_book.png"> Members</h3>
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
                            	<a href="#"><img src="assets/img/user.png" alt="" class="members2"></a>
                            </td>
                            
                            <td class="membersLabel2">
                            	Angelica Guerrero
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            	<a href="#"><img src="assets/img/user.png" alt="" class="members2"></a>
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
                        
                            <?php
                                    foreach($discussion as $a)
                                    {
                                    ?>
                            <a href="<?php echo base_url()?>pub/leagueviewpage/<?php echo $a['leagueno']?>" class="media-heading vName2">
                            | <?php echo $a['leaguename']?>
                        </a>
                    </h3>
                    
                	<div>
                            <ul class="nav nav-list">
                                <div style="margin-left:30px;">
                                    
                                    <a href="#" class="DisTitleHuge">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_194_circle_question_mark.png" width="18">
                                         <?php echo $a['discussion']?>
                                        </font>
                                    </a>
                                    
                                    <br>
                                    <font class="disDetails" style="margin-left:27px;">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                        by <a href="#" class="Name2">
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
                                	</font>
                                    <?php
                                    }
                                    ?>
                                </div> 
                                
                                <hr class="hrDiscuss">
                                
                               <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
                        
                               
                              
                        <input type="hidden" id="current_page" value="<?php echo $current_page ?>" />
                        <?php
                        $ctr = 1;
//                         echo "Current page: " . $current_page;
//                         echo 'Page Number: ';
                         ?>
                        <form id="toblerone" method="get" action="<?php echo base_url('pub/view_topic/'); ?>" align="right">
                        <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
                        Page Number: <select name="page" id="page">

                            <?php 

                                while($ctr <= $pages):

                                    echo '<option value="' . $ctr . '">' . $ctr . '</option>';
                                    $ctr++;

                                endwhile;

                            ?>


                        </select>
                        </form>
                                    <table> <!--start reply details-->
                                        <hr class="hrLeagTab">
                                    <?php
                                    foreach($display as $a)
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                        	<a href="#" class="Name">
                                             	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_245_chat.png" width="18" style="margin-left:50px;">
                                                <?php
                                            $type = $this->model_pub->get_userType($a->postedby);
                                            if($type == 'EMPLOYER')
                                            {
                                                $by = $this->model_pub->get_companyName($a->postedby);
                                                echo $by;
                                            }
                                            else if ($type == 'JOBADMIN')
                                            {
                                                $by = 'TESDA';
                                                echo $by;
                                            }
                                            else if ($type == 'APPLICANT')
                                            {
                                                $by = $this->model_pub->get_jsName($a->postedby);
                                                foreach($by as $b)
                                                {
                                                    echo $b['firstname'];
                                                    echo " ";
                                                    echo $b['lastname'];
                                                }
                                            }
                                            
                                            ?>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="1200px">
                                        <p style="margin-left:75px">
                                           <?php echo $a->discussion?>
                                             <div class="pull-right">
                                                <font class="NumLikes">
                                                	<?php echo $a->likes?> likes 
                                                </font>&nbsp;
                                                <a href="#" class="btn btn-mini"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_343_thumbs_up.png" width="12">&nbsp;Like</a>
                                            </div>
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr class="hrLeagTab">
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    
                                   
                                </table> <!--end reply details-->
                               
                               
                            </ul>
                        </div> <!--end Div-->
  	
                </div><!--end well-->
            </div><!--end job market-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->

      <hr>
      <script type="text/javascript">
    
    
    $(document).ready(function(){
       
       $('#page').val($('#current_page').val());
       
       $('#page').change(function(){
           
        $('#toblerone').submit();
           
       });
        
    });
    
</script>
</body>