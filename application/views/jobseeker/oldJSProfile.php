
<!--start newmessage modal-->    
<div class="modal hide fade" id="newmessage">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>New Message</h3>
  	</div>

	<div class="modal-body">
    <form class="form-horizontal" style="margin-left:-75px;">
    <div class="control-group2"><!-- start div Keyword -->
    		<label class="control-label2"  for="recipient">To: &nbsp;</label>
      		<div class="controls">
        		<input type="text" id="recipient" name="recipient" placeholder="Recipient" >
      		</div>
    	</div><!-- end div keyword -->
    </form>
     <br>
    <form class="form-horizontal" style="margin-left:-75px;">
    <div class="control-group2"><!-- start div Keyword -->
      		<div class="controls">
        		<textarea id="message" name="message" class="span6" rows="6" placeholder="Type your message" ></textarea>
      		</div>
    	</div><!-- end div keyword -->
    </form>
    </div>
    
  	<div class="modal-footer">
  		<a href="#" class="btn btn-primary">Send</a>
    	<a href="#" class="btn" data-dismiss="modal">Close</a> 
  	</div>
</div>
<!--end newmessage modal-->
        
<!--Reply modal start-->
<div class="modal hide fade" id="reply">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Reply</h3>
  	</div>

	<div class="modal-body">
		<form style="margin-left:29px; margin-bottom:-12px;">
        	To: <a href="#">Shenne Layug</a> <br>
        	<textarea rows="6" class="span6" placeholder="Type your message"></textarea><br>
        </form>
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-primary">Send</a>
    	<a href="#" class="btn" data-dismiss="modal">Close</a> 
  	</div>
</div>
<!-- Reply modal end-->
        
<!--are you sure modal start-->
<div class="modal hide fade" id="areyousure">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Delete Message</h3>
  	</div>

	<div class="modal-body">
		<p class="delete">Are you sure you want to delete your message?</p>
	</div>
  
  	<div class="modal-footer">
  		<a data-toggle="modal" data-dismiss="modal" href="#msgdeleted" role="button" class="btn btn-danger">Delete</a>
    	<a href="#" class="btn" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!-- are you sure modal end-->
    
    <div class="container">
    <div style="margin-left: 6%; margin-bottom:-75px;">
    <div class="row-fluid">    
	<div class="span11">
    	<div class="well">
        	
            <div class="row-fluid">
            	<div class="span12">
                	<div class="bigMarg2">
                    <hr class="hrPro">
                    	<table class="tblMarg">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                	<td>
                                    <?php foreach ($jsdetails as $a)
                                    {
                                    ?>
                                    	<img src="<?php echo base_url()?>profilepics/<?php echo $a['profile_pic']?>" class="thumbnail11">
                                    <?php
                                    }
                                    ?>
                                        </td>
                                    
                                    <td>
                                    	<p class="proName">
                                        	<img src="<?php echo base_url(); ?>assets/img/icons/glyphicons_352_nameplate.png" width="20"> 
                                        	<?php foreach ($jsdetails as $a)
                                                {
                                                    echo $a['firstname'];
                                                    echo ' ';
                                                    echo $a['middlename'];
                                                    echo ' ';
                                                    echo $a['lastname'];
                                                }
                                                    
                                                    ?>
                                            <div class="proName2">
                                            	
                                            </div>
                                       	</p>
                                        
                                        <div class="row-fluid">
                                        	<div class="span6">
                                            	<table class="proPIMarg">
                                            	<thead>
                                                	<tr>
                                                    	<th class="span4"></th>
                                                        <th class="span6"></th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="proPI">
                                                   <?php
                                                   foreach($jsdetails as $b)
                                                   {
                                                	echo '<tr>
                                                    	<td class="lLabel4">
                                                        	<img src="'.base_url().'assets/img/icons/glyphicons_024_parents.png" width="18"> SEX:
                                                        </td>
                                                        
                                                        <td>';
                                                        if($a['ismale'] == 0)
                                                            echo 'Female';
                                                        else echo 'Male';
                                                        echo '</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="'.base_url().'assets/img/icons/glyphicons_278_birthday_cake.png" width="15">  BIRTHDAY:
                                                        </td>
                                                        
                                                        <td>';
                                                        echo $a['birthday'];
                                                        echo '</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="'.base_url().'assets/img/icons/glyphicons_248_asterisk.png" width="15"> CIVIL STATUS: 
                                                        </td>
                                                        
                                                        <td>';
                                                        echo $a['civilstatus'];	
                                                        echo '</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            </div>
                                            
                                            <div class="span6">
                                            	<table class="proPIMarg3">
                                            	<thead>
                                                	<tr>
                                                    	<th class="span4"></th>
                                                        <th class="span7"></th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="proPI">
                                                	<tr>
                                                    	<td class="lLabel4">
                                                        	<img src="'.base_url().'assets/img/icons/glyphicons_163_iphone.png" width="11"> CONTACT NUMBER: 
                                                        </td>
                                                        
                                                        <td>';
                                                        	echo $a['cellno'];	
                                                        echo '</td>
                                                    </tr>
                                                	
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="'.base_url().'assets/img/icons/glyphicons_419_e-mail.png" width="15"> EMAIL: 
                                                        </td>
                                                        
                                                        <td>';
                                                        echo $email;	
                                                        echo '</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="'.base_url().'assets/img/icons/glyphicons_087_log_book.png" width="15"> ADDRESS:
                                                        </td>
                                                        
                                                        <td>';
                                                        echo $a['streetno'];
                                                        echo ' ';
                                                        echo $a['brgy'];
                                                        echo ' ';
                                                        echo $a['district'];
                                                        echo ' ';
                                                        echo $a['cityprov'];
                                                        echo '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div><!--end row-fluid-->
                                      
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="row-fluid">
                        	<div class="pull-right btnRcmnd">
                            	<font class="numRec"><br>';
                                                        
                                //echo $a['recommendations'];
                                echo '</font>
                            
                            </div>
                        </div><!--end row-fluid-->';
                                                    }
                                                ?>
                                                    <div class="row-fluid">
<div align="pull-right">
	<a href="<?php echo base_url()?>jobseeker/jobseeker_editprofilepage" class="btn btn-primary btn-mini">
		Edit Profile
	</a>
        <a href="<?php echo base_url()?>report/generate_cv/<?php echo $appid?>" class="btn btn-info btn-mini">
		Generate Resume
	</a>
</div>
</div>
                        
                        <hr class="hrPro">
                        
                        	<div class="row-fluid">
                            	<div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                            <img src="<?php echo base_url(); ?>assets/img/icons/glyphicons_332_certificate.png" width="15">
                                            Educational Background
                                        </h4>
                                       <strong> TESDA</strong>
                                        <div style="width:510px;height:280px;overflow:auto;"><!--start scrollable table-->
                                        <table class="table-condensed table-bordered certTb">
                                            <thead>
                                                <tr>
                                                    <th class="span3">CERTIFICATE/S</th>
                                                    <th class="span5">COMPETENCIES</th>
                                                    <th class="span1">YEAR</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php 
                                                foreach ($cert as $a)
                                                {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $a['ncname']?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php echo $a['description']?>
                                                    </td>
                                                    
                                                    <td>
                                                    	<?php echo $a['dateacquired']?>
                                                    </td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                            </tbody>
                                         </table>                                    
                                            <br>
                                            
                                      <?php 
                                      foreach($educ as $a)
                                      {
                                          if($a['schoolname'] != "TESDA")
                                          {
                                      ?>
                                          <strong>
                                              <?php echo $a['schoolname']?>
                                          </strong>

                                          <div class="resEdDet2"><!--start course details-->
                                              <strong>
                                                  Course: <?php echo $a['course']?>
                                              </strong>

                                              <font class="resEdYear">
                                                  &nbsp;<?php echo $a['startyear']?> - <?php echo $a['endyear']?> <br>
                                              </font>

                                              <div class="resEdSCC"> <!--start div SCC-->
                                                 Level: <?php echo $a['level']?><br>
                                              </div>
                                              <!--end div SCC-->
                                          </div>
                                      <?php 
                                          }
                                      }
                                      ?>      
                                            <!--end course details-->
<!--                                        <br>
                                        <font class="resEdHead2">
                                            De La Salle University
                                        </font>
                                        
                                        <div class="resEdDet2">start course details
                                            <font class="resEdCrs">
                                                Course: Hotel & Restaurant Management
                                            </font>
                                            
                                            <font class="resEdYear">
                                                &nbsp;2009 - 2010 <br>
                                            </font>
                                            
                                            <div class="resEdSCC"> start div SCC
                                                Certificates: NCIII 
                                                
                                                <br>
                                                Skills: <br>
                                                Competencies: <br>
                                            </div> end div SCC
                                        </div>end course details-->
                                        </div><!--end scrollable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                        	 <img src="<?php echo base_url(); ?>assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                                        </h4>
                                        
                                        <div style="width:510px;height:280px;overflow:auto;"><!--start scrollable table-->
                                        
                                            <?php
                                        foreach($work as $a)
                                        { 
                                            echo '<strong>';
                                            echo $a['companyname'];
                                        echo '</strong>
                                        
                                        <br>
                                        <div class="resWrkDet"><!--start course details-->
                                            <font class="resEdCrs">
                                                Position: ';
                                        echo $a['position'];
                                         echo '</font>
                                            
                                            <font class="resEdYear">
                                                &nbsp;';
                                        echo $a['start'];
                                        echo '-';
                                        if ($a['present'] == 0)
                                            echo $a['end'];
                                        else echo 'Present';
                                        
                                        echo '<br></font></div>'
                                            ;
                                                }
                                                ?>
                                        
                                        
                                        
                                        
                                       </div><!--end scrollable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                            </div> <!--end row-fluid-->
                        	
                            
                           
                           </div><!--end scrollable-->
                    </div><!--end well-->
                </div><!--end span-->
            </div><!--end row-fluid-->
       	 
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    </div> <!--end div-->
    </div> <!--end container-->
 
 <!-- END OF CONTENT -->   
        
        

 <!-- FOOTER -->           
        
         <hr>
  
   
   </body>
   