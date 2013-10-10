
               
<div class="container">
    <input type="hidden" id="last" value="<?php echo $recentpage; ?>" />
        <input type="hidden" id="dsc" value="<?php echo $discno; ?>" />
<input id="loading" type="hidden" value="<?php echo base_url('pub/EJ_GET_PAGE_DISCUSSION'); ?>" />
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
            <div class="span12">
            	<div class="well wellUpMarg">
                	<h3 class="media-heading">
                    	<a href="PLeagues.html" class="Comm">
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
                                
                                <div id="page">
                                    
                                </div>
                                
                                
                               
                            </ul>
                        </div> <!--end Div-->
                        
                        <?php 
                            
                            $ctr = 1;
                            $b = $recentpage;
                            while($ctr <= $recentpage):
                                
                                echo '<span id="'.$b.'"><button id="change">' . $ctr . '</button></span>';
                                $ctr++;
                                $b--;
                                
                            endwhile;
                        
                        ?>
  	
                </div><!--end well-->
            </div><!--end job market-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
<hr>

<script type="text/javascript">

    $(document).ready(function(){
       
       $('#page').load($('#loading').val() + '/' + $('#dsc').val() + '/' + $('#last').val());
       
       $(document).on('click', '#change', function(){
           
            $('#page').load($('#loading').val() + '/' + $('#dsc').val() + '/' + $(this).parent().attr('id'));
      
       });
       
    });


</script>

</body>