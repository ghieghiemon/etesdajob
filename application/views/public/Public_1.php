<!--start ModEventAttend-->
    <div class="modal hide fade" id="eventModal">
  	<div class="modal-header">
    <a class="close" data-dismiss="modal">x</a>
    <h3><img src="assets/img/icons/glyphicons_148_folder_flag.png"> Attendees</h3>
  	</div><!--end modal-header-->

  	<div class="modal-footer"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
  		 			<div class="nav" style="width:460px;height:420px;margin-bottom:-5px;margin-left:-10px;overflow:auto;">
                       <?php foreach ($attendees as $a)
                     {
                      echo'  <a href="#" class="btn btn-group PInd2">
                        <h5 class="media-heading">
                            <img src="assets/img/user.png"class="PProfE"> 
                            <br>Angelica Guerrero
                        </h5>
                        </a>';
                     }?>
                         
                </div><!--end scrollable-->
            

    	</div><!--end modal members-->
 	</div><!--end modal-footer-->
</div>
<!--end ModEventAttend-->
        <!--modal join Modal content-->       
<div class="modal hide fade" id="signModal">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In Required</h3>
  		</div>
        
  		<div class="modal-body">
           <form method="post" action="<?php echo base_url()?>main/login_validation"  name="login_form">
            <p><input type="text" class="span3" name="email" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="userpassword" id="userpassword" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
            </p>
   	 	</form>
        </div>
        <div class="modal-footer">
    		Not a member?
    		<a href="<?php echo base_url()?>pub/pub_signup">Register</a>
 		</div>
	</div>
	<!--end join Modal content-->
<!--start ModEventAttend-->
<div class="modal hide fade" id="memberModal">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3><img src="assets/img/icons/glyphicons_148_folder_flag.png"> Attendees</h3>
  	</div><!--end modal-header-->

  	<div class="modal-footer"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
  			<div class="nav" style="width:460px;height:420px;margin-bottom:-5px;margin-left:-10px;overflow:auto;">
                        <a href="#" class="btn btn-group PInd2">
                        <h5 class="media-heading">
                            <img src="assets/img/user.png"class="PProfE"> 
                            <br>Angelica Guerrero
                        </h5>
                        </a> 
                </div><!--end scrollable-->
            
    	</div><!--end modal members-->
 	</div><!--end modal-footer-->
</div>
<!--end ModEventAttend-->

<!--modal join Modal content-->       
<div class="modal hide fade" id="joinModal">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In Required</h3>
  		</div>
        
  		<div class="modal-body">
           <form method="post" action="<?php echo base_url()?>main/login_validation"  name="login_form">
            <p><input type="text" class="span3" name="email" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="userpassword" id="userpassword" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
            </p>
   	 	</form>
        </div>
        
        <div class="modal-footer">
    		Not a member?
    		<a href="#">Register</a>
 		</div>
	</div>
	<!--end join Modal content-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellUpMarg wellShadow qjsBG">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_027_search.png" width="18"> 
                        <font color ="white">Quick Job Search</font>
                </h5>
            	<br>
            
    
            <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>pub/pub_searchjob'/>
                
                <div style="width:300px;height:210px;overflow:auto;"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStylePQS">
                            <input style = " width:85%" type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStylePQS2">
                            <input style = " width:85%" type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

	
                    <div class="myStyle2PQS" >
                        <?php    
             $drpindustries['0'] = 'Industry';
             $params = 'style = " width:90%"'; 
            echo form_dropdown('industry', $drpindustries,'0',$params);     
            ?> 
                    </div>
                    
                    <div class="myStyle2PQS2">
                    <?php $regions['0'] = 'Region'; ?>
                    <?php $cities['0'] = 'City'; ?>
                    <?php 
                    $params = 'id="region" style = " width:45%" '; 
                    echo form_dropdown('regionid', $regions, '0',$params);
                    ?> 

                    <?php 
                    $params = 'id="cities" style = " width:45%"'; 
                    echo form_dropdown('cityid', $cities, '0', $params);
                    ?> 
                    </div>
                    
                    <div style="margin-left:200px;">
                    	 <?php 
                      
                echo" <input class='btn btn-info'";
                echo form_submit('submit', 'Search');
                echo form_close(); 
                ?>
                        
                        </form>
          
                    </div>
                    
                </div><!--end scrollable-->
    
            </div><!--end well-->
            
            <div class="well wellUpMarg wellShadow">
            	<h5 class="media-heading">
                      <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_029_notes_2.png" width="15"> Features
                  </h5>
                
                <div style="width:280px;height:380px;overflow:auto;"><!--start scrollable table-->
                	<br>
                    
                   	<p class="PDescMarg">
                    	<img src="<?php echo base_url()?>assets/bootstrap/img/browser.png" width="40px" class="pTagPic"> 
                        <a  data-toggle="modal" href="#signModal" class="pTagLink"><strong>PROFILE</strong></a>
                        <br>
                        <font class="pTag" style="margin-left:40px;">
                        	Build your profile, monitor your applications and get hired!
                        </font>
                    </p>
                    <br>
                    
      				<p class="PDescMarg">
                    	<img src="<?php echo base_url()?>assets/bootstrap/img/globe.png" width="40px" class="pTagPic"> 
                        <a href="<?php echo base_url()?>pub/leaguepage" class="pTagLink"><strong>LEAGUES</strong></a>
                        <br>
                        <font class="pTag" style="margin-left:40px;">
                        	Connect with people who share the same interests and insights through discussions to help you to be great in your career.
                        </font>
                    </p>
                    <br>
                    <p class="PDescMarg">
                    	<img src="<?php echo base_url()?>assets/bootstrap/img/calendar.png" width="40px" class="pTagPic"> 
                        <a href="<?php echo base_url()?>pub/pub_allevents" class="pTagLink"><strong>EVENTS</strong></a>
                        <br>
                        <font class="pTag" style="margin-left:40px;">
                        	Be updated with current job fairs, trainings and other events that suits your profile.
                        </font>
                    </p>
                    
                </div><!--end scrollable table-->
                    
            </div><!--end features-->
        </div><!--end span left folumn-->
        
        <div class="span6">
        	<div class="well wellMarg wellUpMarg wellShadow">
            	<div style="width:625px;height:190px;overflow:auto;"><!--start scrollable table-->
                    <h5 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_341_briefcase.png" width="25" height="15">&nbsp;e-Tesda WORK</h5>
                    
                   <object width="620" height="150">
                 
                    <embed src="<?php echo base_url()?>assets/bootstrap/flash/theflash1.swf" width="620" height="150">
                    </embed>
                </object>
              
                </div><!--end scrollable-->
            </div><!--end whats new-->
            	<div class="well wellMarg wellUpMarg wellShadow">
            	<h5 class="media-heading"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_327_sampler.png" width="25" height="15">&nbsp;What's New?</h5>
               		<p class="whatsNFont" >
                	<a href='<?php echo base_url()?>pub/pub_alljob'><font color ="AD3288">
                   
                   
                          34  JOBS NATIONWIDE!</a><br><br>
                </font>
                        </p>
            </div><!--end whats new-->
          
            <div class="well wellMarg wellUpMarg wellShadow">
            	<h5 class="media header"><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="18"> Browse Job Vacancies</h5>
                <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                    Legend:  (#) - no. of vacancies
                </div>
                
                <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab12" data-toggle="tab">Industries</a></li>
                        <li><a href="#tab11" data-toggle="tab">Location</a></li>
                    </ul>
      
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab12">
                            <div class="nav" style="width:615px;height:282px;margin-top:10px;margin-bottom:-5px;overflow:auto;" align="center">
                            	<p style="margin-top:-20px;">
                                </p>
                                
                              
                                 <?php 
                    foreach ($industries as $a)
                    {
                        ?>
                        <a href="<?php echo base_url('pub/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd3">
                        <h5 class="media-heading">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>" class="PIndPic"> 
                            <br>(<?php echo $a['totalopenings']?>)
                        </h5>
                        </a>
                    <?php
                    }
                    ?>  
                                
                
                        </div><!--end scrollable-->
                        
                        
                        <div class="row-fluid">
                        <div class="pull-right">
                            <a href="<?php echo base_url()?>pub/industries" class="pull-right">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                    </a>
                        </div>
                        </div><!--end row-->
                        </div>  <!--end Industries-->
                       
                        <div class="tab-pane" id="tab11">
                            <div style="margin-left:40px;width:500px;height:307px;overflow:auto;"><!--start scrollable table-->
                               
                                             <?php 
                    foreach ($regionvacancies as $a)
                    {
                        ?>
                                        	<td>
                                            	<p class="locLink2">
                                                	<?php echo $a['region']?>
                                                   <a href="<?php echo base_url('pub/search_regions/' . $a['regionid']); ?>" class="locLink">
                                                 
                                                    (<?php echo $a['totalopenings']?>)
                                                    </a>
                                                </p>
                                            </td>     
                                              <?php
                    }
                    ?>  
                                   
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane-->
                
                    </div> <!--end tab content-->
                  </div> <!--end tabbable-->
                
                  
            </div><!--end industries-->
        </div><!--end span middle column-->
        
        <div class="span3">
        	  <div class="accordion well wellShadow wellMarg wellUpMarg" id="accordion3"><!--well signup-->
  
    <div class="accordion-heading">
      <!--<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">-->
       <h5 class="media-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
           <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_358_file_import.png" width="20"> Sign up to e-TESDA WORK &#9660;
         </h5>
      <!--</a>-->
   
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
            <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>main/register_validation'/>
                
                      <table>
                	<thead>
                    	<tr>
                        	<th class="span1"></th>
                            <th class="span3"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    	<tr>
                        	<td>
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont">Email</label>
                            	 <?php
                                    
                                    echo "<input style = ' width:85%'  class='input-prepend'";
                                    echo form_input('email');
                                    
                                    ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont2">Password</label>
                            	  <?php
                                    echo "<input class='input-prepend'";
                                    echo    form_password('userpassword');
                                    
                                    ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="SUpFont">
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont2">Confirm Password</label>
                             <?php
                                    echo "<input class='input-prepend'";
                                    echo    form_password('cpassword');
                                    
                                    ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="SUpFont">
                            </td>
                            
                            <td align="center">
                                <div class="help-inline" style="margin-left:-20px;">
                                    <p>
                             
                                       <input type="radio" name="type" value="JS">Jobseeker</input>&nbsp;&nbsp;
                                      <input type="radio" name="type" value="EM">Employer</input>
                                     
                                      
                                  </p>
                                </div> <!--end employer-->
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                
                    
                    <div style="margin-left:185px;">
                    	 <?php 
                      
                echo" <input class='btn btn-primary'";
                echo form_submit('submit', 'Sign-up');
                echo form_close(); 
                ?>
                        
                        </form>
           
                    </div>
                    
                </div><!--end scrollable-->
      </div>
    </div>
 
</div>
            
            <div class="well wellMarg wellUpMarg wellShadow">
            	<a  data-toggle="modal" href="#signModal">
                    
                	<img src="<?php echo base_url()?>assets/bootstrap/img/PV.jpg">
                </a>
            </div><!--end post vacancy-->
            
            <div class="well wellMarg wellUpMarg wellShadow">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_037_coins.png" width="20"> Top Employers
                </h5>
                <br>
           
                <div style="width:295px;height:485px;overflow:auto;"><!--start scrollable table-->
                	<?php
                foreach($compopenings as $a)
                {
                    ?>
                    <div class="row-fluid"> <!--start row fluid companies-->
                        <div class="span2">
                        	<a href="#">
                                <?php    $pic = $this->model_pub->get_companyPic($a['companyID']); ?>
                            	<img src="<?php echo base_url()?>employerpics/<?php echo $pic?>" class="thumbnail compPicMarg" alt="">
                            </a>
                        </div>
        				<div class="span9">
                                        <p class="marg2">
                        		<a href="<?php echo base_url()?>pub/employer_profilepage/<?php echo $a['companyID']?>" class="Name4">
                                            <?php
                                            $companyName = $this->model_pub->get_companyName($a['companyID']);
                                            echo $companyName;
                                            ?>
                                        </a>
                                <br>
                                <font class="pVac">
                                    No. of Vacancies: 
                                    	<a href="#" class="industLabel2">
                                        	<?php echo $a['totalopenings']?>
                                        </a>
                                </font>
                                        </p>
                                        </div>
                        
                    </div> <!--end row-fluid-->
                    <?php
                }
    		?>
                    </div><!--end scrollable table-->
                      <div class="row-fluid">
    					<div align="right" style="margin-top:-15px">
                          
                        </div>
    		</div> <!--end row fluid upcoming events-->
            </div><!--end well companies-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

    
    
</body>
