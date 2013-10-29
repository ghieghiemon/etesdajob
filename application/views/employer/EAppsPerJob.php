<!--change status modal start-->
<?php foreach ($apps as $a)
{
    ?>

<div class="modal hide fade" id="changeStat<?php echo $a['applicationid']?>">
    <form method="post" action="<?php echo base_url()?>employer/employer_changeStatus/<?php echo $a['applicationid']?>">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Change Status</h3>
  	</div>

	<div class="modal-body">
		<div class="well">
        	<table>
                  <thead>
                      <tr>
                          <th class="span8"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Exam" style="margin-left:40px;">
                              <label class="checkbox jCrNC2">
                                   Exam
                              </label>
                              
                          </td>
                      </tr>
                      
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Interview1" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  1st Interview
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Interview2" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  2nd Interview
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Requirements" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                 Requirements
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Hired" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  Hired
                              </label>
                              
                          </td>
                      </tr>
              </table>
               
        </div><!--end well-->
	</div>
  
  	<div class="modal-footer">
  		<button type="submit" class="btn btn-info" >Save</button>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
     </form>
</div>
<?php } ?>
<!--change status modal end-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg2b">
            	<div class="row-fluid">
                  <div align="center">
                  <span class="badge badge-important">
                  	<h6>
                          <?php
                          foreach ($details as $a)
                          {
                          ?>
                          <a href="#" class="numAppC2">
                              <?php 
                              $left =  $a['vacanciesleft'];
                              echo $left;
                              if ($left >1)
                                  echo " Vacancies";
                              else 
                                  echo " Vacancy";
                              ?>  Left
                          </a>
                          <?php
                          }
                          ?>
                     </h6>
                  </span>
                      
                  </div>
              </div><!--end vacancies left-->
              
                <div style="width:310px;height:518px;overflow:auto;margin-top:10px"><!--start scrollable table-->
                	<div class="well">
                            <h3 class="media-heading vNameJA">
                           <?php
                           foreach($details as $a)
                           {
                               echo $a['jobtitle'];
                           }
                           ?>
                        </h3>
                    	<h5 class="media-heading previewColor">
                            | Details
                        </h5>
                        
                    	<table class="vdAppMarg">
                                <thead>
                                    <tr>
                                        <th class="span5" style="text-align:center"></th>
                                        <th class="span5" style="text-align:center"></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="recName">
                                    <tr>
                                      <td class="vdDesc">
                                          Date Posted:
                                      </td>
                                      
                                      <td>
                                          <?php
                                          foreach($details as $a)
                                           {
                                               echo $a['dateposted'];
                                           }
                                           ?>
<!--                                          <br>
                                          <font class="vEditDate2">
                                              Last edited: 09/23/2013
                                          </font>-->
                                      </td>
                                      
                                    </tr>
                                    
                                    </tr>
                                    
                                    <tr>
                                      <td class="vdDesc">
                                          Effectivity:
                                      </td>
                                      
                                      <td>
                                          
                                          3 DAYS LEFT
                                          <br>
                                          <button class="btn btn-mini btn-info">Extend</button>
                                      </td>
                                     
                                    </tr>
                                    
                                     <tr>
                                      <td class="vdDesc">
                                          Location:
                                      </td>
                                      
                                      <td>
                                          NCR | Makati City
                                      </td>
                                      
                                    </tr>
                                    
                                    <tr>
                                      <td class="vdDesc">
                                          Description:
                                      </td>
                                      
                                      <td>
                                          <?php
                                          foreach($details as $a)
                                           {
                                               echo $a['description'];
                                           }
                                           ?> 
                                      </td>
                                    </tr>

                                </tbody>
                            </table>
                    </div><!--end well-->
                    
                    <div class="well">
                    	<h5 class="media-heading previewColor">
                            | Qualifications
                        </h5>
                        
                    	<table class="vdAppMarg">
                                <thead>
                                    <tr>
                                        <th class="span5" style="text-align:center"></th>
                                        <th class="span5" style="text-align:center"></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="recName">
                                    <tr>
                                      <td class="vdDesc">
                                          Sex:
                                      </td>
                                      
                                      <td>	
                                          Male
                                      </td>
                                      
                                    </tr>
                                    
                                     <tr>
                                      <td class="vdDesc">
                                          Age Range:
                                      </td>
                                      
                                      <td>
                                          25-40
                                      </td>
                                      
                                    </tr>
                                    
                                    <tr>
                                      <td class="vdDesc">
                                          Certification/s:
                                      </td>
                                      
                                      <td>
                                          Electrical Istallation & Maintenance NCII
                                      </td>
                                     
                                    </tr>
                                    
                                     <tr>
                                      <td class="vdDesc">
                                          Competencies:
                                      </td>
                                      
                                      <td>
                                          Wiring, Hello, Hi
                                      </td>
                                      
                                    </tr>
                                </tbody>
                            </table>
                    </div><!--end well-->
                     
                    
                </div><!--end scrollable-->
            </div><!--end well-->
        	
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_144_folder_open.png" width="30"> 
                    Applications
                    <font class="media-heading vName2">
                    </font>
                </h3>
                
                <div align="left" class="legendMarg">
                	<h4 style="margin-left:40px;">
                    	LEGEND:  
                        <font class="legendFont">
                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15"> - Invited 
                        </font>
                    </h4>
                    
                </div><!--end legend-->
                
<!--                <div align="right" class="changeBtnMarg">
                	<a href="#changeStat" data-toggle="modal" class="btn btn-info">
                    	CHANGE STATUS
                    </a>
                </div>end div-->
                <br>
                <hr class="hrDicussBigA">
                
                   <div class="tabbable"> <!-- start tabs-->
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">New Applicants</a></li>
                          <li><a href="#tab2" data-toggle="tab">Exam</a></li>
                          <li><a href="#tab3" data-toggle="tab">1st Interview</a></li>
                          <li><a href="#tab4" data-toggle="tab">2nd Interview</a></li>
                          <li><a href="#tab5" data-toggle="tab">Requirements</a></li>
                          <li><a href="#tab6" data-toggle="tab">Hire</a></li>
                      </ul>
            
                      <div class="tab-content"> <!--start tab content-->
                      <div class="tab-pane active" id="tab1">
                          <div style="width:920px;height:440px;overflow:auto;"><!--start scrollable table-->
                              <table class="tableUR2 table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span2" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($newapplicant as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
                                                  <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                              </a>
                                          </td>
                                          
                                          
                                          <td>
                                              29
                                          </td>
                                          
                                          <td>
                                              M
                                          </td>
                                          
                                          <td>
                                              Electrical Installation & Maintenance NCII
                                          </td>
                                          
                                          <td>
                                              Wiring, Hello, HI, 
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          
                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div><!--end scrollable-->   	
                      </div> <!--end tab pane unscreened-->
                      
                      <div class="tab-pane" id="tab2">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <table class="tableUR2 table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span2" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($exam as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
                                                  <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                              </a>
                                          </td>
                                          
                                          
                                          <td>
                                              29
                                          </td>
                                          
                                          <td>
                                              M
                                          </td>
                                          
                                          <td>
                                              Electrical Installation & Maintenance NCII
                                          </td>
                                          
                                          <td>
                                              Wiring, Hello, HI, 
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane Exam-->
                      
                      <div class="tab-pane" id="tab3">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                               <table class="tableUR2 table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span2" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($interview1 as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
                                                  <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                              </a>
                                          </td>
                                          
                                          
                                          <td>
                                              29
                                          </td>
                                          
                                          <td>
                                              M
                                          </td>
                                          
                                          <td>
                                              Electrical Installation & Maintenance NCII
                                          </td>
                                          
                                          <td>
                                              Wiring, Hello, HI, 
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane 1st int-->
                      
                      <div class="tab-pane" id="tab4">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <table class="tableUR2 table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span2" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($interview2 as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
                                                  <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                              </a>
                                          </td>
                                          
                                          
                                          <td>
                                              29
                                          </td>
                                          
                                          <td>
                                              M
                                          </td>
                                          
                                          <td>
                                              Electrical Installation & Maintenance NCII
                                          </td>
                                          
                                          <td>
                                              Wiring, Hello, HI, 
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane 2ns int-->
                      
                      <div class="tab-pane" id="tab5">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                               <table class="tableUR2 table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span2" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($requirements as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
                                                  <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                              </a>
                                          </td>
                                          
                                          
                                          <td>
                                              29
                                          </td>
                                          
                                          <td>
                                              M
                                          </td>
                                          
                                          <td>
                                              Electrical Installation & Maintenance NCII
                                          </td>
                                          
                                          <td>
                                              Wiring, Hello, HI, 
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane hire-->
                      
                      <div class="tab-pane" id="tab6">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                               <table class="tableUR2 table-hover table-condensed table-striped">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"></th>
                                          <th class="span2" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                          <th class="span2" style="text-align:center">Action</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($hired as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <?php
                                              foreach ($invites as $c)
                                              {
                                                  $appid[] = $c['appid'];
                                              }
                                              if(in_array($a['appid'],$appid))
                                              {
                                                  
                                              ?>
                                              <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;">
                                              <?php } ?>
                                          </td>
                                          <td>
                                              <?php echo $a['datereceived']?> 
                                          </td>
                                          
                                          <td>
                                              <a href="EAppsProf.html" class="recAppName">
                                                  <?php
                                                  $name = $this->model_employer->get_jsName($a['appid']);
                                                  foreach($name as $b)
                                                  {
                                                      echo $b['firstname'];
                                                      echo $b['middlename'];
                                                      echo $b['lastname'];
                                                  }
                                                  ?>
                                              </a>
                                          </td>
                                          
                                          
                                          <td>
                                              29
                                          </td>
                                          
                                          <td>
                                              M
                                          </td>
                                          
                                          <td>
                                              Electrical Installation & Maintenance NCII
                                          </td>
                                          
                                          <td>
                                              Wiring, Hello, HI, 
                                              <font class="more">
                                                  more...
                                              </font>
                                          </td>
                                          <td>
                                              <p class="statusB"><?php echo $a['status']?></p>
                                          </td>
                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div><!--end scrollable-->
                      </div> 
                     
                  </div> <!--end tab content-->
                  </div> <!--end tabbable-->
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
      <hr>
      </body>