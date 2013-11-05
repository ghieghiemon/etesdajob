 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
    
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

         

           <script type="application/javascript" src="<?php echo base_url()?>assets/bootstrap/js/awesomechart.js"> </script>    
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span4">
        	<div class="well">
            	<h5 class="media-heading">
            		<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_341_briefcase.png" width="20"> Briefcase
                </h5>
              
                <div style="width:380px;height:220px;overflow:auto; margin-top:10px"><!--start scrollable table-->
              <ul class="nav nav-list">
                    <?php
                      $ctr = 1;
                    if(count($briefcase) == 0)
                     {
                         echo '<p class = "noCommYet"> There are no upcoming Exams or Interviews</p>';
                     }
                     else
                     {
                        foreach($briefcase as $a){
                            if($ctr >=1)
                        { 
                  echo'  <li>
                        <a href="#" class="Comm">
                            <div class="notifAgenda">
                                <font class="boldSched">';
                                	  echo $a['requirementdate'];
                                       echo' |';
                                        echo $a['requirementtime'];
                               echo' </font>
                    			<br> 
                                
                                <p class="notifAgenda2">';
                                	echo $a['status'];
                                       echo' with ';
                                        echo $a['firstname'];
                                        echo' ';
                                        echo $a['lastname'];
                                        echo' for ';
                                        echo $a['jobtitle'];
                               echo' </p>
                            </div>
                        </a>
                    </li>';
                        }
                      $ctr += 1;
                     }
                     }
                    ?>
                       
                    
                </ul>
               </div><!--end scrollable-->
               
               <div class="row-fluid">
                    <div align="right" style="margin-top:-15px">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div> <!--end row fluid-->
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_266_flag.png" width="15"> Upcoming Events
                </h5>
                
                <div style="width:380px;height:290px;overflow:auto;"><!--start scrollable table-->
      				<div class="row-fluid"> <!--start row fluid upcoming events-->
						
                        <div class="span3">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld5.jpg" class="thumbnail" alt="">
                            </a>
                        </div>
        				
        				<div class="span8">
							<p class="marg2">
                        		<a href="#" class="Name4">Happy to serve you!</a>
                            </p>
          		
                			<p class="evDetails3">
                            	<em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> 02/07/2013 
                                	| <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> 09:00am
                                </em><br>
                                <strong>Location</strong>: NCR | Pasay City <br>
                                <strong>Venue:</strong> SMX Convention Hall <br>
                            	<span class="btn btn-info btn-mini"><a href="#ModEventAttend" data-toggle="modal" class="attendBtn">10 Attendees</a></span>
                            </p>
					
						</div>
					</div> <!--end row-fluid-->
    				
     				<div class="row-fluid">
						<div class="span3">
                        	<a data-toggle="modal" href="#ModEventDes">
                            	<img src="<?php echo base_url()?>assets/bootstrap/img/ld6.jpg" class="thumbnail" height="12">
                            </a>
                            
                        </div>
        				
                       
        				<div class="span8">
                        	<p class="marg2">
                        		<a href="#" class="Name4">Employment Expo</a>
                            </p>
                            
                            <p class="evDetails3">
                            	<em><img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="11"> 02/12/2013 
                                	| <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_054_clock.png" width="11"> 10:00am
                                </em><br>
                                <strong>Location</strong>: NCR | Mandaluyong City <br>
                                <strong>Venue:</strong> Mega Trade Hall, SM Mega Mall<br>
                                <span class="btn btn-info btn-mini "><a href="#ModEventAttend" data-toggle="modal" class="attendBtn">800 Attendees </a></span>
                            </p>
						</div>
					</div> <!--end row-fluid-->
                    </div><!--end scrollable table-->
                    
    				<div class="row-fluid">
    					<div align="right" style="margin-top:-15px">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                            </a>
                        </div>
    				</div> <!--end row fluid upcoming events-->
            </div><!--end well-->
        </div><!--end span left folumn-->
        
        <div class="span8">
            <div class="well wellMarg">
            	<h4 class="media-heading">
                	| Received Applications
                </h4>
                
                <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                    	<li class="active"><a href="#UR" data-toggle="tab">New Applicants</a></li>
                        <li><a href="#Inv" data-toggle="tab">Invited</a></li>
                        <li><a href="#All" data-toggle="tab">All</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="UR">
                        	<div style="width:830px;height:152px;overflow:auto;"><!--start scrollable table-->
                            	
                            	<table class="tableUA table-hover table-condensed table-striped">
                                	<thead>
                                    	<tr>
                                            <th class="span2" style="text-align:center">Job Title</th>
                                            <th class="span2" style="text-align:center">Name</th>
                                            <th class="span1" style="text-align:center">Location</th>
                                            <th class="span1" style="text-align:center">Age</th>
                                            <th class="span1" style="text-align:center">Sex</th>
                                            <th class="span2" style="text-align:center">Certification</th>
                                            <th class="span2" style="text-align:center">Competencies</th>
                                            <th class="span2" style="text-align:center">Date Applied</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="recName">
                                    	<?php 
                                        foreach ($newapplicant as $a)
                                        {
                                        ?>
                                        <tr>
                                        	
                                            <td>
                                            	Welder Assistant
                                            </td>
                                            <td>
                                            	<a href="#" class="recAppName">
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
                                            	NCR | Makati City
                                            </td>
                                            
                                            <td>
                                            	29
                                            </td>
                                            
                                            <td>
                                            	F
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
                                            	   <?php echo $a['datereceived']?> 
                                            </td>
                                        </tr>
                                        <?php  
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div><!--end scrollable table-->
                            
<!--                            <div class="row-fluid">
                                <div align="right">
                                    <a href="">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                    </a>
                                </div>
                            </div> end row fluid-->
                        </div> <!--end tab pane unscreened--> 
            
                    <div class="tab-pane" id="Inv">
                    	<div style="width:830px;height:152px;overflow:auto;"><!--start scrollable table-->
                            	<table class="tableUA table-hover table-condensed table-striped">
                                	<thead>
                                    	<tr>
                                            <th class="span2" style="text-align:center">Job Title</th>
                                            <th class="span2" style="text-align:center">Name</th>
                                            <th class="span1" style="text-align:center">Location</th>
                                            <th class="span1" style="text-align:center">Age</th>
                                            <th class="span1" style="text-align:center">Sex</th>
                                            <th class="span2" style="text-align:center">Certification</th>
                                            <th class="span2" style="text-align:center">Competencies</th>
                                            <th class="span2" style="text-align:center">Date Applied</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="recName">
                                    <?php 
                                        foreach ($all as $a)
                                        {
                                        ?>	
                                        <tr>
                                            <td>
                                            	Welder Assistant
                                            </td>
                                            
                                            <td>
                                            	<a href="#" class="recAppName">
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
                                            	NCR | Makati City
                                            </td>
                                            
                                            <td>
                                            	29
                                            </td>
                                            
                                            <td>
                                            	F
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
                                            	<?php echo $a['datereceived']?> 
                                            </td>
                                        </tr>
                                        <?php  
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div><!--end scrollable table-->
                             
<!--            				<div class="row-fluid">
                                <div align="right">
                                    <a href="">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                    </a>
                                </div>
                            </div> end row fluid-->
                    </div> <!--end tab pane invited-->
                    
                    <div class="tab-pane" id="All">
                    	<div style="width:830px;height:152px;overflow:auto;"><!--start scrollable table-->
                            	<table class="tableUA table-hover table-condensed table-striped">
                                	<thead>
                                    	<tr>
                                            <th class="span2" style="text-align:center">Job Title</th>
                                            <th class="span2" style="text-align:center">Name</th>
                                            <th class="span1" style="text-align:center">Location</th>
                                            <th class="span1" style="text-align:center">Age</th>
                                            <th class="span1" style="text-align:center">Sex</th>
                                            <th class="span2" style="text-align:center">Certification</th>
                                            <th class="span2" style="text-align:center">Competencies</th>
                                            <th class="span2" style="text-align:center">Date & Time Applied</th>
                                            <th class="span1" style="text-align:center">Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="recName">
                                    	
                                        
                                        <tr>
                                            <td>
                                            	<a href="#" class="recAppName">
                                                    Chelsea Oray
                                                </a>
                                            </td>
                                            
                                            <td>
                                            	Welder Assistant
                                            </td>
                                            
                                            <td>
                                            	NCR | Makati City
                                            </td>
                                            
                                            <td>
                                            	29
                                            </td>
                                            
                                            <td>
                                            	F
                                            </td>
                                            
                                            <td>
                                            	Electrical Installation & Maintenance NCI
                                            </td>
                                            
                                            <td>
                                            	Wiring, Hello, HI, 
                                                <font class="more">
                                                	more...
                                                </font>
                                            </td>
                                            <td>
                                            	09/09/2013  0930pm
                                            </td>
                                            <td>
                                            	<p class="statusB">Pending</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div><!--end scrollable table-->
            
            			<div class="row-fluid">
                            <div align="right">
                                <a href="">
                                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_187_more.png">
                                </a>
                            </div>
                        </div> <!--end row fluid-->
                    </div> <!--end tab pane invited-->
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
                
            </div><!--end well-->
            
            <div class="well wellMarg wellUpMarg">
            	<h4 class="media-heading">
                	| Posted Vacancies
                </h4>
                
                 <div class="tabbable tabs-left"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Welder Assistant</a></li>
                        <li><a href="#tab2" data-toggle="tab">Junior Welder</a></li>
                        <li><a href="#tab3" data-toggle="tab">Lead Welder</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<div style="width:670px;height:296px;overflow:auto;"><!--start scrollable table-->
                            	<div class="chart_container_centered">

                            <canvas id="chartCanvas13" width="500" height="240">
                                Your web-browser does not support the HTML 5 canvas element.
                            </canvas>

                        </div>
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane tab1-->
                        
                        <div class="tab-pane" id="tab2">
                        	<div style="width:670px;height:296px;overflow:auto;"><!--start scrollable table-->
                            	hiiee
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane tab2-->
                        
                        <div class="tab-pane" id="tab3">
                        	<div style="width:670px;height:296px;overflow:auto;"><!--start scrollable table-->
                            	hiiss
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane tab3--> 
            
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            </div><!--end well-->
            
        </div><!--end span right column-->
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
    <script type="application/javascript">
        
            var chart1 = new AwesomeChart('chartCanvas13');
            chart1.title = "Welder";
            chart1.data = [30,10,5,2];
            chart1.labels = ['Unscreened','Exam','Interview','Hired'];
            chart1.colors = ['#99C', '#609', '#6CC', '#33F'];
            chart1.randomColors = true;
            chart1.draw();
            
   </script>
   
</body>