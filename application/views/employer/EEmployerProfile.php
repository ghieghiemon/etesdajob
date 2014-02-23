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
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	
            <div class="row-fluid">
            	<div class="span12">
                	<div class="bigMarg2">
                    <hr class="hrPro">
                    <div class="row-fluid">
                        	<div class="pull-right ">
                            	<a href="<?php echo base_url()?>employer/employer_editprofilepage" class="btn btn-primary btn-mini">Edit Profile</a>
                            </div>
                        </div><!--end row-fluid-->
                    	<table class="tblMarg">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                    <?php
                                        foreach($profile as $a)
                                        {
                                            ?>
                                	<td>
                                    	<img src="<?php echo base_url()?>employerpics/<?php echo $a['companypic']?>" class="thumbnail11">
                                    </td>
                                    
                                    <td>
                                        
                                    	<p class="proName">
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> 
                                        	<?php echo $a['companyName']?>
                                            <?php if ($a['verified'] == 1)
                                            {?>
                                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons-halflings-white_check.png" width="18" class="label-ver">
                                            <?php } ?>
                                        <div class="proName2">
                                            	since <?php echo $a['companyExistence']?>
                                            </div>
                                       	</p>
                                        
                                        <div class="row-fluid">
                                        	<div class="span11">
                                            	<table>
                                                	<thead>
                                                    	<tr>
                                                        	<th class="span7">
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                    	<tr>
                                                        	<td>
                                                            	<p class="eProPi">
                                                                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="15"> 
                                                                    <strong>INDUSTRY:
                                                                    <?php
                                                                        $industry = $this->model_pub->get_industryName($a['companyIndustry']);
                                                                        echo $industry;
                                                                        ?>
                                                                    </strong> 
                                                                    | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_419_e-mail.png" width="15"> 
                                                                    <strong>COMPANY EMAIL: <?php echo $a['companyEmail']?></strong> 
                                                                    | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_087_log_book.png"  width="15">
                                                                    <strong>CONTACTNO. <?php echo $a['companyContact']?></strong>
                                                                    
                                                                    <br>
                                                                    <strong>ADDRESS:<?php echo $a['companyLocations']?></strong>
                                                                    
                                                                    <br>
                                                                    <strong>CONTACT PERSON:</strong> <?php echo $a['companyContactPerson']?>
                                                                    <font class="eProCPPos">
                                                                    	(HR Manager)
                                                                    </font>
			                                                    </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!--end span-->
                                        </div><!--end row-fluid-->
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <hr class="hrPro">
                        
                        	<div class="row-fluid">
                            	<div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_263_bank.png" width="20">
                                            Company Background
                                        </h4>
                                        
                                        <div style="width:510px;height:60px;overflow:auto;"><!--start scrollable table-->
                                        	<p class="eProCPBg">
                                                <?php echo $a['companyBG']?>
                                            </p>
                                        </div><!--end scrollable-->
                                        <?php
                                        }
                                        ?>
                                        <h4 class="proDetCol media header">
                                        	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="20"> Events
                                        </h4>
                                        
                                        <div style="width:590px;height:100px;overflow:auto;" class="PProfE2" ><!--start scrollable table-->
                                        <?php
                                        foreach ($events as $a)
                                        {
                                            ?>   
                                            <a href='<?php echo base_url()?>pub/pevent_details/<?php echo $a['eventno']?>'>
                                            <img src="<?php echo base_url()?>eventpics/<?php echo $a['eventpic']?>" class="PProfE"/></a>
                                            <?php
                                        }
                                        ?>
                                               
                                        </div> <!--end scrillable-->
                                        
                                        <h4 class="proDetCol media header">
                                        	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="25"> Leagues
                                        </h4>
                                        
                                         <div style="width:590px;height:100px;overflow:auto;" class="PProfE2" ><!--start scrollable table-->
                                        <?php
                                        foreach($leagues as $a)
                                        {
                                            ?>
                                             <a href="<?php echo base_url()?>pub/leagueviewpage/<?php echo $a['leagueno']?>"><img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="PProfE"/></a>
                                            <?php
                                        }
                                        ?>
                                        
                                               
                                        </div> <!--end scrillable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	<div class="well wellMarg">
                                    	
                                        <div style="width:600px;height:368px;overflow:auto;"><!--start scrollable table-->
                                        	<h4 class="media-heading">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25" height="15"> Job Market |
                                                <font class="pJTitle2">
                                                    Posted Vacancies
                                                </font>
                                             </h4>
											
                                            <table class="tablePPV table-condensed table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="span3" style="text-align:center">Job Title </th>
                                                        <th class="span3" style="text-align:center">Location</th>
                                                        <th class="span4" style="text-align:center">Effectivity</th>
                                                  

                                                    <tr>
                                                </thead>
                                                
                                                <tbody class="recName">
                                                    <?php
                                                    foreach($postedvacancies as $a)
                                                    {
                                                        ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $a['jobtitle']?> 
                                                        </td>
                                                        
                                                           <?php
                                                            echo' <td>';
                                                            echo $a['region'];
                                                            echo ' |  ';
                                                            echo $a['city'];
                                                            echo' </td>';
                                                            ?>
                                                        
                                                        <td>
                                                            <?php
                                                            $date2 = $a['expirationdate'];
                                                            $date = date('Y-m-d');
                                                            $diff = abs(strtotime($date2) - strtotime($date));

                                                            $days = round((($diff/24)/60)/60);
                                                            echo $days. " days left";
                                                            ?>
                                                        </td>
                                                        
                                                     
                                                        
                                                    
                                                        
                                                       
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </tbody>
                                            </table>

                                        
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
    

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>