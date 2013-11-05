 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

<!--change status modal start-->
<div class="modal hide fade" id="changeStat">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Change Status</h3>
  	</div>

	<div class="modal-body">
		<div class="well">
                    <table class="tableUR2b table-hover table-condensed table-stripedB">
                        <thead>
                            <tr>
                                <th class="span1" style="text-align:center"><input type="checkbox"></th>
                                <th class="span2" style="text-align:center">Name</th>
                                <th class="span1" style="text-align:center">Age</th>
                                <th class="span1" style="text-align:center">Sex</th>
                                <th class="span2" style="text-align:center">Certification</th>
                                <th class="span1" style="text-align:center">Competencies</th>
                                <th class="span2" style="text-align:center">Status</th>
                            </tr>
                        </thead>
                        
                        <tbody class="recName">
                            <tr>
                                <td>
                                    <input type="checkbox"> <img src="assets/img/icons/glyphicons_049_star.png" width="15" style="margin-right:-20px;"> 
                                </td>
                                
                                <td>
                                    <a href="EAppsProf.html" class="recAppName">
                                       Angelica Guerrero
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
                                    <p class="statusB">Pending</p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                
                                <td>
                                    <a href="EAppsProf.html" class="recAppName">
                                        Shenne Layug
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
                                    <p class="statusB">Pending</p>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
        </div><!--end well-->
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-info" data-dismiss="modal">Confirm</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--change status modal end-->
<!--change status modal start-->
<?php foreach ($apps as $a)
{
    ?>

<div class="modal hide fade" id="changeStatus<?php echo $a['applicationid']?>">
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
                                  Interview
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
                              <label style="margin-left:1px;">
                                   <strong>Select Date:</strong>
                              </label>
                                             <select name="month" style = " width:30%" >
	<option value="1">January
	<option value="2">February
	<option value="3">March
	<option value="4">April
	<option value="5">May
	<option value="6">June
	<option value="7">July
	<option value="8">August
	<option value="9">September
	<option value="10">October
	<option value="11">November
	<option value="12">December
</select>
<select name="day"style = " width:20%">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
	<option value="5">5
	<option value="6">6
	<option value="7">7
	<option value="8">8
	<option value="9">9
	<option value="10">10
	<option value="11">11
	<option value="12">12
	<option value="13">13
	<option value="14">14
	<option value="15">15
	<option value="16">16
	<option value="17">17
	<option value="18">18
	<option value="19">19
	<option value="20">20
	<option value="21">21
	<option value="22">22
	<option value="23">23
	<option value="24">24
	<option value="25">25
	<option value="26">26
	<option value="27">27
	<option value="28">28
	<option value="29">29
	<option value="30">30
	<option value="31">31
</select>
<select name="year"style = " width:20%">
	<option value="2013">2013
	<option value="2014">2014
	<option value="2015">2015

</select>
                          </td>
                      </tr>

              </table>

        </div><!--end well-->
        
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
                              <label style="margin-left:1px;">
                                   <strong>Select Time:</strong>
                              </label>
<select nAMe="time">
  <option value="00:00">12:00 AM</option>
  <option value="1:00">1:00 AM</option>
  <option value="2:00">2:00 AM</option>
  <option value="3:00">3:00 AM</option>
  <option value="4:00">4:00 AM</option>
  <option value="5:00">5:00 AM</option>
  <option value="6:00">6:00 AM</option>
  <option value="7:00">7:00 AM</option>
  <option value="8:00">8:00 AM</option>
  <option value="9:00">9:00 AM</option>
  <option value="10:00">10:00 AM</option>
  <option value="11:00">11:00 AM</option>
  <option value="12:00">12:00 PM</option>
  <option value="13:00">1:00 PM</option>
  <option value="14:00">2:00 PM</option>
  <option value="15:00">3:00 PM</option>
  <option value="16:00">4:00 PM</option>
  <option value="17:00">5:00 PM</option>
  <option value="18:00">6:00 PM</option>
  <option value="19:00">7:00 PM</option>
  <option value="20:00">8:00 PM</option>
  <option value="21:00">9:00 PM</option>
  <option value="22:00">10:00 PM</option>
  <option value="23:00">11:00 PM</option>
</select>
                          </td>
                      </tr>

              </table>
<br>
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
                <form method="post" action="<?php echo base_url()?>employer/employer_viewchecked"> 
                <div align="right" class="changeBtnMarg">
                	<button type="submit" >
                            <!--href="#changeStat" data-toggle="modal" class="btn btn-info"-->
                    	CHANGE STATUS
                    </button>
                </div>
                <br>
                <hr class="hrDicussBigA">
                
                   <div class="tabbable"> <!-- start tabs-->
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">New Applicants</a></li>
                          <li><a href="#tab2" data-toggle="tab">Exam</a></li>
                          <li><a href="#tab3" data-toggle="tab">Interview</a></li>
                          <li><a href="#tab4" data-toggle="tab">Hired</a></li>
                          <li><a href="#tab5" data-toggle="tab">All</a></li>
                      </ul>
            
                      <div class="tab-content"> <!--start tab content-->
                      <div class="tab-pane active" id="tab1">
                          <div style="width:920px;height:440px;overflow:auto;"><!--start scrollable table-->
                              <!--<table class="tableUR2 table-hover table-condensed table-striped">-->
                               <div id="container">
                        	<table id ="newapplicant">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"><input type="checkbox" onclick="checkall(this);"></th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($newapplicant as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <input type="checkbox" class="chk" name="check[]" value="<?php echo $a['applicationid']?>">
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
                                          
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                               </div>
                          </div><!--end scrollable-->   	
                      </div> <!--end tab pane unscreened-->
                      
                      <div class="tab-pane" id="tab2">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <div id="container">
                        	<table  id="exam">
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"><input type="checkbox" onclick="checkall(this);"></th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($exam as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <input type="checkbox" class="chk" name="check[]" value="<?php echo $a['applicationid']?>">
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
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane Exam-->
                      
                      <div class="tab-pane" id="tab3">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              
                                   <div id="container">
                        	<table  id="interview1" >
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"><input type="checkbox" onclick="checkall(this);"></th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($interview as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <input type="checkbox" class="chk" name="check[]" value="<?php echo $a['applicationid']?>">
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
<!--                                          <td>
                                               <a href="#changeStat<?php echo $a['applicationid']?>" data-toggle="modal" class="cStatLink">
                                              	CHANGE STATUS
                                              </a>
                                          </td>-->
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                                   </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane 1st int-->
                      
                      <div class="tab-pane" id="tab4">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                              <div id="container">
                        	<table  id="hired" >
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"><input type="checkbox" onclick="checkall(this);"></th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($hired as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <input type="checkbox" class="chk" name="check[]" value="<?php echo $a['applicationid']?>">
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
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                              </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane 2ns int-->
                      
                      <div class="tab-pane" id="tab5">
                          <div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                               <div id="container">
                        	<table  id="all" >
                                  <thead>
                                      <tr>
                                          <th class="span1" style="text-align:center"><input type="checkbox" onclick="checkall(this);"></th>
                                          <th class="span3" style="text-align:center">Date</th>
                                          <th class="span2" style="text-align:center">Name</th>
                                          <th class="span1" style="text-align:center">Age</th>
                                          <th class="span1" style="text-align:center">Sex</th>
                                          <th class="span2" style="text-align:center">Certification</th>
                                          <th class="span2" style="text-align:center">Competencies</th>
                                          <th class="span1" style="text-align:center">Status</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody class="recName">
                                  <?php
                                  foreach ($all as $a)
                                  {
                                  ?>   
                                      <tr>
                                          <td>
                                              <input type="checkbox" class="chk" name="check[]" value="<?php echo $a['applicationid']?>">
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
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                               </div>
                          </div><!--end scrollable-->
                      </div> <!--end tab pane hire-->
                      
                      
                     
                  </div> <!--end tab content-->
                  </div> <!--end tabbable-->
                </form>
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
      <hr>
      </body>
      <SCRIPT LANGUAGE="JavaScript">

<!-- 
var date_arr = new Array;
var days_arr = new Array;

date_arr[0]=new Option("January",31);
date_arr[1]=new Option("February",28);
date_arr[2]=new Option("March",31);
date_arr[3]=new Option("April",30);
date_arr[4]=new Option("May",31);
date_arr[5]=new Option("June",30);
date_arr[6]=new Option("July",31);
date_arr[7]=new Option("August",30);
date_arr[8]=new Option("September",30);
date_arr[9]=new Option("October",31);
date_arr[10]=new Option("November",31);
date_arr[11]=new Option("December",30);

function fill_select(f)
{
        document.writeln("<SELECT name=\"months\"               onchange=\"update_days(FRM)\">");
        for(x=0;x<12;x++)
                document.writeln("<OPTION value=\""+date_arr[x].value+"\">"+date_arr[x].text);
        document.writeln("</SELECT><SELECT name=\"days\"></SELECT>");
        selection=f.months[f.months.selectedIndex].value;
}

function update_days(f)
{
        temp=f.days.selectedIndex;
        for(x=days_arr.length;x>0;x--)
        {
                days_arr[x]=null;
                f.days.options[x]=null;
         }
        selection=parseInt(f.months[f.months.selectedIndex].value);
        ret_val = 0;
        if(f.months[f.months.selectedIndex].value == 28)
        {
                year=parseInt(f.years.options[f.years.selectedIndex].value);
                if (year % 4 != 0 || year % 100 == 0 ) ret_val=0;
                else
                        if (year % 400 == 0)  ret_val=1;
                        else
                                ret_val=1;
        }
        selection = selection + ret_val;
        for(x=1;x < selection+1;x++)

        {
                days_arr[x-1]=new Option(x);
                f.days.options[x-1]=days_arr[x-1];
        }
        if (temp == -1) f.days.options[0].selected=true;
        else
             f.days.options[temp].selected=true;
}
function year_install(f)
{
        document.writeln("<SELECT name=\"years\" onchange=\"update_days(FRM)\">")
        for(x=2001;x<2101;x++) document.writeln("<OPTION value=\""+x+"\">"+x);
        document.writeln("</SELECT>");
        update_days(f)
}

//-->

      </SCRIPT>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#newapplicant').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#exam').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#interview1').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>

<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#all').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#hired').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>