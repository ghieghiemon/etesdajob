
<!--start ModLeagMembers-->
<div class="modal hide fade" id="ModLeagMembers">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3><img src="assets/img/icons/glyphicons_088_adress_book.png"> Members</h3>
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
        	<div class="well">
            	
                <div class="row-fluid">
                	<div class="span12" style="margin-left:-10px">
                    	<?php
                        foreach($discussion as $a)
                        {
                        ?>
            			<h4 class="media header dMarg"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png">
                        	<a href=<?php echo base_url()?>employer/employer_leagueview/<?php echo $a['leagueno']?>"  class="media header LeaName"><?php echo $a['leaguename']?> </a>
                        </h4>
                        
                        <div>
                            <ul class="nav nav-list">
                                <div style="margin-left:30px;">
                                    <a href="<?php echo base_url()?>employer/employer_leagueview/<?php echo $a['leagueno']?>" class="DisTitleHuge">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_194_circle_question_mark.png" width="18">
                                         <?php echo $a['discussion']?> </font>
                                    </a>
                                    
                                    <br>
                                    <font class="disDetails" style="margin-left:27px;">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                        by <a href="#" class="Name2"><?php
                                            $type = $this->model_employer->get_userType($a['postedby']);
                                            if($type == 'EMPLOYER')
                                            {
                                                $by = $this->model_employer->get_companyName($a['postedby']);
                                                echo $by;
                                            }
                                            else if ($type == 'JOBADMIN')
                                            {
                                                $by = 'TESDA';
                                                echo $by;
                                            }
                                            else if ($type == 'APPLICANT')
                                            {
                                                $by = $this->model_employer->get_jsName2($a['postedby']);
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
                                
                                <div style="width:1183px;height:416px;overflow:auto;"><!--start scrollable table-->
                                    <input type="hidden" id="current_page" value="<?php echo $current_page ?>" />
                        <?php
                        $ctr = 1;
//                         echo "Current page: " . $current_page;
//                         echo 'Page Number: ';
                         ?> 
                                  <form id="toblerone" method="get" action="<?php echo base_url('employer/view_topic/'); ?>" align="right">
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
                                <table width="1180px"> <!--start reply details-->
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
                                            $type = $this->model_employer->get_userType($a->postedby);
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
                                                $by = $this->model_employer->get_jsName2($a->postedby);
                                                
                                                foreach($by as $b)
                                                {
                                                    echo $b['firstname'];
                                                    echo " ";
                                                    echo $b['lastname'];
                                                }
                                            }
                                            
                                            ?>
                                            </a>
                                            <font class="tnd"><?php echo $a->dateposted?> at <?php echo $a->timeposted?></font>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="900px">
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
                                     $dno = $a->discussionno;
                                     $lno = $a->leagueno;
                                    }
                                    ?>
                                    
                                    
                                    
                                </table> <!--end reply details-->
                                </div><!--end scrollable table-->
                               
                                <div class="row-fluid"><!--start table of comment field-->
                                	<div class="span12">
                                        <div class="controls controls-row" style="margin-bottom:2px;  margin-top:0px;"> <!--start comment field and button-->
                                            <input id="EventSearch" name="EventSearch" type="text" class="span10 pull-right" placeholder="Post your comment" style="margin-left:12px;">&nbsp;&nbsp;
                                            <button type="submit" class="btn pull-right">Comment</button>
                                        </div> <!--end comment field and button-->
                                    </div>
                                </div><!--end table of comment field-->
                                             
                            </ul>
                        </div> <!--end Div-->
                    
                    </div><!--end span-->
               </div><!--end row-fluid-->

            	
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

    
</body>
