
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
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="25"> Industries
            </h4>
       	 	
            <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                Legend:  (#) - no. of vacancies
            </div>
            
            <div class="nav PProfE2" style="width:1240px;height:130px;margin-top:10px;margin-bottom:-5px;overflow:auto;">
                <?php 
                foreach ($industries as $a)
                {
                    ?>
                    <a href="<?php echo base_url('pub/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd">
                    <h5 class="media-heading">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>"> 
                        <br>(<?php echo $a['totalvacancies']?>)
                    </h5>
                    </a>
                <?php
                }
                ?>                    

            </div><!--end scrollable-->
                
                <div class="row-fluid">
                    <div class="pull-right">
                        <a href="PIndustries.html" class="pull-right">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div><!--end row-->
    	</div><!--end well-->
      
   	</div> <!--end span12-->
    </div> <!--end row-->
    
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellUpMarg wellMarg2b">
                <h5 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
                </h5>
                    
                    <div style="width:310px;height:320px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                        <div class="control-group"><!-- start div job title -->
                            <div class="myStyleQS3P">
                                <input type="text" id="JT" name="JT" placeholder="Job Title">
                            </div>
                        </div><!-- end div job title -->
    
                        <div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                            <div class="myStyleQS3P">
                                <input type="text" id="COMP" name="COMP" placeholder="Company">
                            </div>
                        </div><!-- end div company -->
    
                        <div class="myStyle3QS">
                            <select>
                                <option>Agriculture & Fishery</option>
                                <option>Automotive & Land Transportation</option>
                                <option>Construction</option>
                                <option>Decorative Arts</option>
                            </select>
                        </div>
                        
                        <div class="myStyle3QS2">
                            <select name="Region">
                                <option>NCR</option>
                                <option>Region I</option>
                            </select>
                        </div>
                        
                        <div class="myStyle3QS2">                        
                            <select name="City">
                            <option>Pasig</option>
                            <option>Makati</option>
                        </select>
                        </div>
                        
                        <div align="right" class="qsBtn">
                            <a href="#" class="btn btn-info">
                                Search
                            </a>
                        </div>
                        
                    </div><!--end scrollable-->
                    
                        
                </div><!--end well-->
        	</div><!--end span left column-->
        
            <div class="span9">
            	<div class="well wellMarg wellUpMarg">
                    <h4 class="media-heading">
                         <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Job Market 
                         <font class="media-heading vName2">
                            | <?php echo $sectorName ?>
                        </font>
                    </h4>
                    
                    <div style="width:920px;height:313px;overflow:auto;"><!--start scrollable table-->
                       <div id="container">
                       <table id ="newtable" >
                        	<!--<table class="tableJMP table-hover table-condensed table-striped">-->
                            <thead>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span3" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center">Action</th>
                            </thead>
                            
                            <tbody class="recName">
                            <?php
                            foreach($vacancies as $a)
                            {   
                            ?>
                                <tr>
                                    <td>
                                       <?php echo $a['jobtitle']?>
                                    </td>
                                   
                                    <td>
                                        <a href="#" class="recAppName">
                                        <?php echo $a['companyName']?>
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Pasig City
                                    </td>
                                    
                                    <td>
                                        <?php
                                        $date2 = $a['expirationdate'];
                                        $date = date('Y-m-d');
                                        $diff = abs(strtotime($date2) - strtotime($date));

                                        $days = round((($diff/24)/60)/60);
                                        echo $days. " days left";
                                        ?>
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">
                                            <?php
                                                $appcount = $this->model_pub->count_jobApplications($a['jobno']);
                                                echo $appcount;
                                            ?> Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label"><?php echo $a['vacanciesleft']?> Left </span>
                                    </td>
                                    
                                    
                                    <td>
                                    	<a href="#signIn" data-toggle="modal" class="btn btn-mini btn-info">Apply</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?> 
                            </tbody>
                        </table>	
                        </div><!--end scrollable--> 
                </div><!--end well-->
            </div><!--end job market-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newtable').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
</body>