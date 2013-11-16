
<!--add note modal start-->
<div class="modal hide fade" id="addNote">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Add notes</h3>
  	</div>

	<div class="modal-body">
		<div class="span6">
			<textarea name="message" id="message" class="input-xlarge noteAreaMarg" rows="10"></textarea>
		</div>
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-info" data-dismiss="modal">Save</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--add note modal end-->


               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_144_folder_open.png" width="30"> 
                    Applications
                        <a href="EAppsPerJob.html" class="media-heading vName2">
                        	|
                                <?php 
                                foreach($jobdetails as $a)
                                {
                                    echo $a['jobtitle'];
                                }
                                ?>
                        </a>
                    </font>
                </h3>
                
                
                        
               
                <div class="row-fluid">
                    <div class="span8">
                        <div class="well">
                        	<div style="width:810px;height:175px;overflow:auto;"><!--start scrollable table-->
                        	<h4 class="media-heading">
                            	| PROFILE
                            </h4>
                                
                            <table>
                                <thead>
                                    <tr>
                                        <th class="span1"></th>
                                        <th class="span5"></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    foreach($appdetails as $a)
                                    {
                                    ?>
                                    
                                    <tr>
                                        
                                        <td>
                                            <img src="<?php echo base_url()?>profilepics/<?php echo $a['profile_pic'];?>" class="thumbnailProf">
                                        </td>
                                        
                                        <td>
                                            <p class="proNameA">
                                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> 
                                                <?php
                                                  echo $a['firstname'];
                                                  echo " ";
                                                  echo $a['middlename'];
                                                  echo " ";
                                                  echo $a['lastname'];
                                                ?>
                                            </p>
                                            
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <table class="proPIMargA">
                                                        <thead>
                                                            <tr>
                                                                <th class="span5"></th>
                                                                <th class="span6"></th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="proPI">
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    SEX:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        <?php
                                                                        if ($a['ismale'] == 1)
                                                                            echo 'Male';
                                                                        else 
                                                                            echo 'Female';
                                                                        ?>
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                     BIRTHDAY:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        <?php
                                                                        echo $a['birthday'];
                                                                        ?>
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    CIVIL STATUS: 
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        <?php
                                                                        echo $a['civilstatus'];
                                                                        ?>	
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!--end span-->
                                                
                                                <div class="span6">
                                                    <table class="proPIMargB">
                                                        <thead>
                                                            <tr>
                                                                <th class="span7"></th>
                                                                <th class="span1"></th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="proPI">
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    Address: 
                                                                </td>
                                                                
                                                                <td>
                                                                    <p class="proPIMarg2">
                                                                        <?php 
                                                                        echo $a['streetno'];
                                                                        echo ' ';
                                                                        echo $a['brgy'];
                                                                        echo ' ';
                                                                        echo $a['district'];
                                                                        echo ' ';
                                                                        echo $a['cityprov'];
                                                                        ?>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                    CONTACT NUMBER:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        <?php
                                                                        echo $a['cellno'];
                                                                        ?>	
                                                                    </font>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="lLabel4">
                                                                     EMAIL:
                                                                </td>
                                                                
                                                                <td>
                                                                    <font class="proPIMarg2">
                                                                        <?php
                                                                        $userid = $this->model_employer->get_userid($a['appid']);
                                                                        $email = $this->model_employer->get_email($userid);
                                                                        
                                                                        echo $email;
                                                                        ?>
                                                                    </font>
                                                                </td>
                                                            </tr>
                                    <?php
                                    }
                                    ?>
                                                        </tbody>
                                                    </table>
                                                </div><!--end span-->
                                            </div><!--end row-fluid-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end span-->
                    
                    <div class="span4">
                        <div class="well wellMarg">
                        	<h4 class="media-heading">
                            	| NOTES
                            </h4>
                            
                            <div style="width:400px;height:150px;overflow:auto;"><!--start scrollable table-->
                            <?php
                            foreach ($application as $a)
                            {
                            ?>
                                <form method='post' action='<?php echo base_url()?>employer/save_applicantnotes/<?php echo $a['applicationid']?>/<?php echo $a['appid']?>/<?php echo $a['jobno']?>'>
                            	<textarea id='notes' name='notes' class="span12" rows="5" ><?php echo $a['notes']?></textarea>
                            <?php
                            }
                            ?>
                                <button type='submit' class="btn pull-right">
                                    <strong>SAVE</strong>
                                </button>
                            </form>
                            </div><!--end scrollable-->
                            
                        </div><!--end well-->
                    </div><!--end span-->
                </div><!--end row-fluid-->
               
                <div class="row-fluid">
                	<div class="span6">
                    	<div class="well wellUpMarg">
                        	<div style="width:595px;height:240px;overflow:auto;"><!--start scrollable table-->
                                  <h4 class="proDetCol media header">
                                      <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_332_certificate.png" width="15">
                                      Educational Background
                                  </h4>
                                  <?php
                                        foreach($educ as $a)
                                        {
                                            if($a['schoolname'] == 'TESDA')
                                            {
                                        echo '<font class="resEdHead2">';
                                        echo $a['schoolname'];
                                        echo '</font>
                                        
                                        <br>
                                        <div class="resEdDet2"><!--start course details-->
                                            <font class="resEdCrs">
                                                Course: ';
                                        echo $a['course'];
                                            echo '</font>
                                            
                                            <font class="resEdYear">
                                                &nbsp;';
                                            echo $a['startyear'];
                                        echo '-';
                                        echo $a['endyear'];
                                            echo '<br>
                                            </font>
                                            
                                            <div class="resEdSCC"> <!--start div SCC-->
                                                Certificates: NCI 
                                                
                                                <br>
                                                Skills: <br>
                                                Competencies: <br>
                                            </div> <!--end div SCC-->
                                        </div><!--end course details-->
                                        
                                        <br>';
                                            }
                                            else
                                            {
                                                echo '<font class="resEdHead2">';
                                        echo $a['schoolname'];
                                        echo '</font>
                                        
                                        <br>
                                        <div class="resEdDet2"><!--start course details-->
                                            <font class="resEdCrs">
                                                Course: Hotel & Restaurant Management
                                            </font>
                                            
                                            <font class="resEdYear">
                                                &nbsp;';
                                        echo $a['startyear'];
                                        echo '-';
                                        echo $a['endyear'];
                                            echo '<br></font>
                                            
                                        </div><!--end course details-->
                                        
                                        <br>';
                                            }
                                         }
                                                    ?>
                                  <font class="resEdHead2">
                                      TESDA
                                  </font>
                                  
                                  <br>
                                  <div class="resEdDet2"><!--start course details-->
                                      <font class="resEdCrs">
                                          Course: Hotel & Restaurant Management
                                      </font>
                                      
                                      <font class="resEdYear">
                                          &nbsp;2009 - 2010 <br>
                                      </font>
                                      
                                      <div class="resEdSCC"> <!--start div SCC-->
                                          Certificates: NCI 
                                        
                                          <br>
                                          Competencies: <br>
                                      </div> <!--end div SCC-->
                                  </div><!--end course details-->
                                  
                                  <br>
                                 
                          
                            </div><!--end scrollable-->
                        </div><!--end well-->
                    </div><!--end span-->
                    
                    <div class="span6">
                    	<div class="well wellMarg wellUpMarg">
                        	<div style="width:595px;height:240px;overflow:auto;"><!--start scrollable table-->
                        	<h4 class="proDetCol media header">
                                 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                            </h4>
                            
                              <?php
                                        foreach($work as $a)
                                        { 
                                            echo '<font class="resWrkHead2">';
                                            echo $a['companyname'];
                                        echo '</font>
                                        
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
                </div><!--end row-fluid-->
                
        	</div><!--end well-->
        </div><!--end span-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->

      <hr>
    
</body>