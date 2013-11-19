
<!--start ModLeagMembers-->
<div class="modal hide fade" id="ModLeagMembers">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_088_adress_book.png"> Members</h3>
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

<!--start edit league details-->
<div class="modal hide fade" id="editLD">
  	<div class="modal-header">
            <a class="close" data-dismiss="modal">x</a>
            <h3> Edit League Details</h3>
  	</div><!--end modal-header-->

  	<div class="modal-body"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
        	<div align="center">
            	<div class="control-group"><!-- start div LN-->
                    <div class="myStyleQS3">
                        <input type="text" id="LN" name="LN" placeholder="League Name">
                    </div>
                </div><!-- end div LN -->
                
                <div class="myStyle3QS" style="margin-top:-10px">
                    <select>
                        <option>Choose Industry</option>
                        <option>Agriculture & Fishery</option>
                        <option>Automotive & Land Transportation</option>
                        <option>Construction</option>
                        <option>Decorative Arts</option>
                    </select>
                </div><!--end industry-->
                
                <div class="control-group" style="margin-top:-5px;"><!-- start div Desc-->
                    <div class="myStyle3EventDet">
                        <textarea id="Desc" name="Det" rows="3" placeholder="Description"></textarea>
                    </div>
                </div><!-- end div Desc -->
                
                <div class="control-group eWellMarg">
                    <label class="ePicUpload" style="margin-left:-200px">Picture: &nbsp;</label>
                    <div class="controls" style="margin-left:60px; margin-top:-30px;">
                        <form method="post" action="upload-page.php" enctype="multipart/form-data">
                            <input name="pic" id="pic" type="file" style="font-size:10px" />
                        </form>  
                    </div>
                </div> <!--end Picture field-->
             </div><!--end align center-->
    	</div><!--end modal-->
  	</div><!--end modal-body-->
    
    <div class="modal-footer">
    	<button data-dismiss="modal" class="btn btn-info">Save</button>
    </div>
</div>
<!--end edit league details-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
     <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg3b">
                <h5 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_355_bullhorn.png" width="18"> Create New League
                </h5>
                
                <div style="width:315px;height:500px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="well">
                    	<h5 class="media-heading previewColor">
                            | Details
                        </h5>
                                 <form method ="post" enctype="multipart/form-data" action ="<?php echo base_url()?>employer/employer_lcreate/">
                        
                        <div class="control-group"><!-- start div LN-->
                            <div class="myStyleQS3">
                                <input type="text" id="LN" name="LN" placeholder="League Name">
                            </div>
                        </div><!-- end div LN -->
                        
                        <div class="myStyle3QS" style="margin-top:-10px;">
                               <?php    
             $drpindustries['0'] = 'Choose Industry';
            echo form_dropdown('industry', $drpindustries,'0');     
            ?> 
                        </div><!--end industry-->
                        
                        <div class="control-group" style="margin-top:-5px;"><!-- start div Desc-->
                            <div class="myStyle3EventDet">
                                <textarea id="Desc" name="Det" rows="3" placeholder="Description"></textarea>
                            </div>
                        </div><!-- end div Desc -->
                        
                             <div class="control-group eWellMarg">
                            <label class="ePicUpload">League Picture: &nbsp;</label>
                            <div class="controls" style="margin-left:100px; margin-top:-30px;">
                                   <input value ="upload" name="userfile" id="pic" type="file" />
                            </div>
                        </div>
                    </div><!--end well-->
                    
                       <div align="right" class="eDnBtn">
                      <button type="submit" class="btn btn-info">Create</button>
                    </div>
                    </form>
                    
                    
                </div><!--end scrollable-->
                
                	
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="35"> Leagues
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#JND" data-toggle="tab">Joined</a></li>
                        <li><a href="#CTD" data-toggle="tab">Created</a></li>
                        <li><a href="#All" data-toggle="tab">All</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="JND">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            <table> <!--start one league-->
                            <tr>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                              <?php
                                foreach($myleagues as $a)
                                {
                                ?>
                            	<tr>
                                	
                                	<td>
                                    	<img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="thumbnail5 ePicMarg">
                                    </td>
                                   
                                    <td>
                                        
                                        <p class="LeaDetails4">
                                            <a href="<?php echo base_url()?>employer/employer_leagueview/<?php echo $a['leagueno']?>" class="LeaName3"> <?php echo $a['leaguename']?></a>
                                            <br>
                                        	<a href="#" class="label label-info"><?php echo $a['sectorName']?>  Industry</a><br>
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2"><?php 
                                                $name = $this->model_employer->get_companyName($a['createdby']);
                                                echo $name;
                                                ?></a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since  <?php echo $a['since']?>
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="assets/img/icons/glyphicons_088_adress_book.png" width="10">
                                                <?php 
                                                $members = $this->model_employer->get_leaguemembers($a['leagueno']);
                                                echo count($members);
                                                ?>  Members</a>
                                        
                                            <br>
                                            <?php echo $a['leaguedescription']?></p>
                                        </font>
                                        </p>
                                        
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                    	</table><!--end one league-->
                        <hr class="hrLeagTab">

                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invited-->
                    
                    <div class="tab-pane" id="CTD">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                        	 <table> <!--start one league-->
                            <tr>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                    <?php
                                foreach($createdleagues as $a)
                                {
                                ?>
                                <tr>
                                	<td>
                                    	<img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="thumbnail5 ePicMarg">
                                    </td>
                                   
                                    <td>
                                        
                                        <p class="LeaDetails4">
                                            <a href="<?php echo base_url()?>employer/employer_leagueview/<?php echo $a['leagueno']?>" class="LeaName3"> <?php echo $a['leaguename']?></a>
                                            <br>
                                        	<a href="#" class="label label-info"><?php echo $a['sectorName']?> Industry</a><br>
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2"><?php 
                                                $name = $this->model_employer->get_companyName($a['createdby']);
                                                echo $name;
                                                ?></a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since <?php echo $a['since']?>
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="assets/img/icons/glyphicons_088_adress_book.png" width="10"> <?php 
                                                $members = $this->model_employer->get_leaguemembers($a['leagueno']);
                                                echo count($members);
                                                ?> Members</a>
                                        
                                            <br>
                                            <?php echo $a['leaguedescription']?></p>
                                        </font>
                                        </p>
                                        
                                        <div class="pull-right" style="margin-top:7px">
                                         	<span>
                                            	<a href="#editLD" data-toggle="modal" role="button" class="btn btn-mini btn-info">
                                                    &nbsp; Edit League Details
                                                </a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                    	</table><!--end one league-->
                        <hr class="hrLeagTab">
                        </div><!--end scrollable-->
                    </div> <!--end tab pane invited-->
                    <div class="tab-pane" id="All">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                        	 <table> <!--start one league-->
                            <tr>
                                <table style="margin-left:10px;">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tbody>
                                    <?php
                                foreach($all as $a)
                                {
                                ?>
                                <tr>
                                	<td>
                                    	<img src="<?php echo base_url()?>leaguepics/<?php echo $a['leaguepic']?>" class="thumbnail5 ePicMarg">
                                    </td>
                                   
                                    <td>
                                        
                                        <p class="LeaDetails4">
                                            <a href="<?php echo base_url()?>employer/employer_leagueview/<?php echo $a['leagueno']?>" class="LeaName3"> <?php echo $a['leaguename']?></a>
                                            <br>
                                        	<a href="#" class="label label-info"><?php echo $a['sectorName']?> Industry</a><br>
                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_003_user.png" width="11">
                                            by <a href="#" class="Name2"><?php 
                                                $name = $this->model_employer->get_companyName($a['createdby']);
                                                echo $name;
                                                ?></a>
                                            | <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> since <?php echo $a['since']?>
                                            |  <a data-toggle="modal" href="#ModLeagMembers" class="Name2"><img src="assets/img/icons/glyphicons_088_adress_book.png" width="10"> <?php 
                                                $members = $this->model_employer->get_leaguemembers($a['leagueno']);
                                                echo count($members);
                                                ?> Members</a>
                                        
                                            <br>
                                            <?php echo $a['leaguedescription']?></p>
                                        </font>
                                        </p>
                                       
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                    	</table><!--end one league-->
                        <hr class="hrLeagTab">
                        </div><!--end scrollable-->
                    </div> <!--end tab pane invited-->
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Leagues-->
        	
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
    
</body>