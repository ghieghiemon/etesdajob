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
    		<a href="#">Register</a>
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
                        
                        <a href="#" class="btn btn-group PInd2">
                        <h5 class="media-heading">
                            <img src="assets/img/user2.jpg"class="PProfE"> 
                            <br>Dyanne Ocampo
                        </h5>
                        </a>
                        
                        <a href="#" class="btn btn-group PInd2">
                        <h5 class="media-heading">
                            <img src="assets/img/user3.jpg"class="PProfE"> 
                            <br>Robert Miller
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
                	<img src="assets/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
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
                      <img src="assets/img/icons/glyphicons_144_folder_open.png" width="25"> My Activity 
                  </h5>
                
                <div style="width:280px;height:290px;overflow:auto;"><!--start scrollable table-->
                	<br>
                    <a href="">
                        <p class="PDescMarg">
                    
                        JOIN LEAGUES
                         </p>
                    </a>
                   
                   <a href="">
                    <p class="PDescMarg">
                    	JOIN EVENTS
                    </p>
                    </a>
                     <a href="">
                   	<p class="PDescMarg">
                    	ACCOMPLISH PROFILE
                    </p>
                    </a>
                </div><!--end scrollable table-->
                    
            </div><!--end features-->
        </div><!--end span left folumn-->
        
        <div class="span6">
        	<div class="well wellMarg wellUpMarg wellShadow">
            	<div style="width:625px;height:190px;overflow:auto;"><!--start scrollable table-->
                    <h5 class="media-heading"><img src="assets/img/icons/glyphicons_327_sampler.png" width="25" height="15">&nbsp;What's New?</h5>
                    <p class="whatsNFont" ><a href='pub/pub_alljob'>
                            <?php 
                    foreach ($vacancies as $a)
                    {
                             echo $a['totalvacancies'];
                    }
                    ?> job vacancies nationwide!
                    </p></a>
                </div><!--end scrollable-->
            </div><!--end whats new-->
            
          
            <div class="well wellMarg wellUpMarg wellShadow">
            	<h5 class="media header"><img src="assets/img/icons/glyphicons_264_vcard.png" width="18"> Vacancies</h5>
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
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/it.png"class="PIndPic"> 
                                    <br>50
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/auto.png"class="PIndPic"> 
                                    <br> 45
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/const.png"class="PIndPic"> 
                                    <br>30
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/deco.png"class="PIndPic"> 
                                    <br>20
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/elec.png"class="PIndPic"> 
                                    <br>10
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/foot.png"class="PIndPic"> 
                                    <br>10
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/furni.png"class="PIndPic"> 
                                    <br>9
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/garments.png"class="PIndPic"> 
                                    <br>9
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/health.png"class="PIndPic"> 
                                    <br>9
                                </h5>
                                </a>
                                
                                <a href="#" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/heat.png"class="PIndPic"> 
                                    <br>7
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/agri.png"class="PIndPic"> 
                                    <br>6
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/maritime.png"class="PIndPic"> 
                                    <br>6
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/metals.png"class="PIndPic"> 
                                    <br>5
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/processed.png"class="PIndPic"> 
                                    <br>5
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/pyro.png"class="PIndPic"> 
                                    <br>5
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/tourism.png"class="PIndPic"> 
                                    <br>4
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/tvet.png"class="PIndPic"> 
                                    <br>4
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/util.png"class="PIndPic"> 
                                    <br>3
                                </h5>
                                </a>
                                
                                <a href="PIndustryResult.html" class="btn btn-group PInd3">
                                <h5 class="media-heading">
                                    <img src="assets/img/whole.png"class="PIndPic"> 
                                    <br>2
                                </h5>
                                </a>
                        </div><!--end scrollable-->
                        
                        
                        <div class="row-fluid">
                        <div class="pull-right">
                            <a href="PIndustriesAll.html" class="pull-right">
                               <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
                        </div><!--end row-->
                        </div>  <!--end Industries-->
                        
                        <div class="tab-pane" id="tab11">
                            <div style="width:615px;height:307px;overflow:auto;"><!--start scrollable table-->
                                <table style="width:600px;text-align:center;margin-top:50px;">
                                	<thead>
                                    	<tr>
                                        	<th class="span4"></th>
                                            <th class="span4"></th>
                                        </tr>
                                    </thead>
                                    
                                	<tbody>
                                    	<tr>
                                        	<td>
                                            	<p class="locLink2">
                                                	NCR 
                                                    <a href="#" class="locLink">
                                                    	(50)
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            	<p class="locLink2">
                                                ARMM 
                                                    <a href="#" class="locLink">
                                                        (20)
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            	<p class="locLink2">
                                                Region I
                                                    <a href="#" class="locLink">
                                                        (30)
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                            	<p class="locLink2">
                                                Region II
                                                    <a href="#" class="locLink">
                                                        (5)
                                                    </a>
                                                </p>
                                            </td>
                                        
                                        	<td>
                                            	<p class="locLink2">
                                                Region III
                                                    <a href="#" class="locLink">
                                                        (5)
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            	<p class="locLink2">
                                                Region IV
                                                    <a href="#" class="locLink">
                                                        (17)
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>
                                            	<p class="locLink2">
                                                Region V
                                                    <a href="#" class="locLink">
                                                        (17)
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            	<p class="locLink2">
                                                Region VI
                                                    <a href="#" class="locLink">
                                                        (9)
                                                    </a>
                                                </p>
                                            </td>
                                        
                                        	<td>
                                            	<p class="locLink2">
                                                Region VII
                                                    <a href="#" class="locLink">
                                                        (1)
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>    
                                            <td>
                                            	<p class="locLink2">
                                                Region VIII
                                                    <a href="#" class="locLink">
                                                        (0)
                                                    </a>
                                                </p>
                                            </td>
                                        
                                        	<td>
                                            	<p class="locLink2">
                                                Region IX
                                                    <a href="#" class="locLink">
                                                        (11)
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            	<p class="locLink2">
                                                Region X
                                                    <a href="#" class="locLink">
                                                        (0)
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>
                                            	<p class="locLink2">
                                                Region XI
                                                    <a href="#" class="locLink">
                                                        (0)
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            	<p class="locLink2">
                                                Region XII
                                                    <a href="#" class="locLink">
                                                        (1)
                                                    </a>
                                                </p>
                                            </td>
                                        
                                        	<td>
                                            	<p class="locLink2">
                                                Region XIII
                                                    <a href="#" class="locLink">
                                                        (2)
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>  
                                            <td>
                                            	<p class="locLink2">
                                                    <a href="#" class="locLink">
                                                       
                                                    </a>
                                                </p>
                                            </td>
                                            
                                            <td>
                                            </td>
                                            
                                            <td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane-->
                
                    </div> <!--end tab content-->
                  </div> <!--end tabbable-->
                
                  
            </div><!--end industries-->
        </div><!--end span middle column-->
        
        <div class="span3">
        	<div class="well wellMarg wellUpMarg wellShadow">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_358_file_import.png" width="20"> Sign up to e-TESDA WORK
                </h5>
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
                                    
                                    echo "<input style = ' width:80%'  class='input-prepend'";
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
                
                  <div style="margin-left:200px;">
                    	 <?php 
                      
                echo" <input class='btn btn-primary'";
                echo form_submit('submit', 'Sign-up');
                echo form_close(); 
                ?>
                        
                        </form>
           
                    </div>
                
            </div><!--end well signup-->
            
            <div class="well wellMarg wellUpMarg wellShadow">
            	<a  data-toggle="modal" href="#signModal">
                    
                	<img src="<?php echo base_url()?>assets/bootstrap/img/PV.jpg">
                        
                </a>
            </div><!--end post vacancy-->
            
            <div class="well wellMarg wellUpMarg wellShadow">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/icons/glyphicons_037_coins.png" width="20"> Top Employers
                </h5>
                <br>
                <div align="left" class="legendIn" style="margin-bottom:15px;margin-top:-20px;">
                    Legend:  <img src="<?php echo base_url()?>assets/bootstrap/assets/img/tesda.jpg" width="15"> - TESDA Partner Companies
                </div>
                
                <div style="width:295px;height:255px;overflow:auto;"><!--start scrollable table-->
                	<?php
                foreach($companies as $a)
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
                                        	<?php echo $a['totalvacancies']?>
                                        </a>
                                </font>
                                        </p>
                                        </div>
                    </div> <!--end row-fluid-->
                    <?php
                }
    		?>
                    </div><!--end scrollable table-->
            </div><!--end well companies-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

    
    
</body>
