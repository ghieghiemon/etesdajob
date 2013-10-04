<!--jobdetails modal-->
<?php
foreach($invites as $a)
{
?>
   <div class="modal hide fade" id="view<?php echo $a['jobno']?>">
<?php
    echo '<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Vacancy Summary</h3>
  	</div>

	<div class="modal-body">
                <span id="label1"></span>
		<h4 class="media-heading previewColor">| GENERAL INFORMATION </h4>
        	<div class="row-fluid">
            	<div class="span6">
                	<table class="previewMarg">
                          <thead>
                              <tr>
                                  <th class="span1"></th>
                                  <th class="span4"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                              <tr>
                                  <td class="previewDet">
                                      Job Title:
                                  </td>
                                  <td>
                                      <font class="previewDet2">';
     echo $a['jobtitle'];
     echo '</font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">';
    echo $a['description'];                                  
    echo '</font>
                                  </td>
                              </tr>
                               <tr>
                                  <td class="previewDet">
                                      Industry:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="industry" name="industry"></span>
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<table class="previewMarg2">
                          <thead>
                              <tr>
                                  <th class="span3"></th>
                                  <th class="span2"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                          	  <tr>
                                  <td class="previewDet">
                                      Region: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<span id="region" name="region"></span>
                                      </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<span id="city" name="city"></span>	
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Number of Vacancies: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<span id="vacant" name="vacant"></span>
                                      </font>	
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td class="previewDet">
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<span id="effect" name="effect"></span>	
                                      </font>
                                  </td>
                              </tr>
                              
                          </tbody>
                      </table>
                </div>
            </div><!--end row-fluid-->
        <hr class="hrLeagTab">
            
        <h4 class="media-heading previewColor">| QUALIFICATIONS </h4>
        	<div class="row-fluid">
            	<div class="span6">
                	<table class="previewMarg">
                          <thead>
                              <tr>
                                  <th class="span2"></th>
                                  <th class="span4"></th>
                              </tr>
                          </thead>
                          
                          <tbody class="proPI">
                              <tr>
                                  <td class="previewDet">
                                      Sex:
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      	<span id="msex" name="msex"></span>	
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="sAge" name="sAge"></span> - <span id="eAge" name="eAge"></span>	
                                      </font>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                </div><!--end span-->
                
                <div class="span6">
                	<p class="previewCCS">
                		<strong>CERTIFICATION/S:</strong> 
                        <font class="previewCCS2">
                        	hii, je sdjfs NCII, jdfjdfj a, jkdnfjs d, ajdsjkdnfsnf ajn
                        </font>
                    </p>
                   
                   <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">
                        	hii, je sdjfs NCII, jdfjdfj a, jkdnfjs d, ajdsjkdnfsnf ajn
                        </font>
                    </p>
                    
                   <p class="previewCCS">
                		<strong>SKILLS:</strong> 
                        <font class="previewCCS2">
                        	hii, je sdjfs NCII, jdfjdfj a, jkdnfjs d, ajdsjkdnfsnf ajn
                        </font>
                    </p>
                </div><!--end span-->
                
               
            </div><!--end row-fluid-->
        <hr class="hrLeagTab">
        
        <h4 class="media-heading previewColor">| PHASES</h4>
        	<p class="previewPhase">
            	Unscreened, Screened, Exam, Interview, Hire, Reject
            </p>
	</div>
  
  	<div class="modal-footer">';
        ?>
  	
    	<a class="btn btn-primary" data-dismiss="modal">Close</a> 
  	
     </div>
    </div>
<?php
}
?>  
<!--end jobdetails modal-->

<!--jobdetails modal-->
<?php
foreach($invites as $a)
{
?>
   <div class="modal hide fade" id="decline<?php echo $a['jobno']?>">
<?php
    echo '<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<br>
  	</div>
    
	<div class="modal-body">
    	<p class="delete">
           <strong> Are you sure you want to decline?</strong>
        </p>
    </div>
  	<div class="modal-footer">';
        ?>
  	<a  href="<?php echo base_url()?>main/decline_job/<?php echo $a['invitationno']?>" class="btn btn-danger">Decline</a>
    	<a class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	
     </div>
    </div>
<?php
}
?>
  	
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well">
            	<h5 class="media-heading">
            		<img src="<?php echo base_url()?>assets/img/icons/glyphicons_341_briefcase.png" width="20"> Briefcase
                </h5>
              
                <div style="width:280px;height:160px;overflow:auto; margin-top:10px"><!--start scrollable table-->
                <ul class="nav nav-list">
                    <li>
                        <a href="#" class="Comm">
                            <div class="notifAgenda">
                                <font class="boldSched">
                                	09/23/2013 | 10:00am-11:00am
                                </font>
                    			<br> 
                                
                                <p class="notifAgenda2">
                                	Interview with Meralco for Welder Assistant
                                </p>
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="Comm">
                            <div  class="notifAgenda">
                                <font class="boldSched">
                                	09/23/2013 | 11:00am-12:00nn
                                </font>
                    			<br> 
                                
                                <p class="notifAgenda2">
                                	Exam with Century for Welder Assistant
                                </p>
                            </div>
                        </a>
                    </li>
                    
                </ul>
               </div><!--end scrollable-->
               
               <div class="row-fluid">
                    <div align="right" style="margin-top:-15px">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/img/icons/glyphicons_187_more.png">
                        </a>
                    </div>
                </div> <!--end row fluid-->
            </div><!--end well-->
            
            <div class="well wellUpMarg">
            	<h5 class="media-heading">
                	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="20"> Notifications
                </h5>
                
                <div style="width:280px;height:140px;overflow:auto;"><!--start scrollable table-->
      				<ul class="nav nav-list">
                        <li>
                            <a href="#" class="Comm">
                                <p class="notifAgenda3">
                                    Meralco scheduled you an interview 
                                </p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" class="Comm">
                                <p class="notifAgenda3">
                                    Your application for welder assistant is now screened by XYZ company
                                </p>	
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" class="Comm">
                                <p class="notifAgenda3">
                                    SM Corp invited you to apply as Lead Welder
                                </p>	
                            </a>
                        </li>
                        
                    </ul>
                </div><!--end scrollable table-->
            </div><!--end notifs-->
            
            <div class="well wellUpMarg">
            	<h6 class="media-heading">
                	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
                </h6>
                
                <div style="width:280px;height:160px;overflow:auto;"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStyleQS">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStyleQS2">
                            <input type="text" id="COMP" name="COMP" placeholder="Company">
                        </div>
                    </div><!-- end div company -->

					<div class="myStyle2QS">
                        <select>
                            <option>Agriculture & Fishery</option>
                            <option>Automotive & Land Transportation</option>
                            <option>Construction</option>
                            <option>Decorative Arts</option>
                        </select>
                    </div>
                    
                    <div class="myStyle2QS2">
                        <select name="Region">
                            <option>NCR</option>
                            <option>Region I</option>
                        </select>
                        
                        <select name="City">
                        <option>Pasig</option>
                        <option>Makati</option>
                  	</select>
                    </div>
                    
                    <div align="right">
                    	<a href="#" class="btn btn-info">
                        	Search
                        </a>
                    </div>
                    
                </div><!--end scrollable-->
            </div><!--end quick job search-->
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well wellMarg">
            	<h4 class="media-heading">
                	| MY APPLICATIONS
                </h4>
                
                <div style="width:930px;height:250px;overflow:auto;"><!--start scrollable table-->
                	<table class="tableMA table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                
                                <th class="span2" style="text-align:center">Job Title</th>
                                <th class="span3" style="text-align:center">Description</th>
                                <th class="span2" style="text-align:center">Company Name</th>
                                <th class="span2" style="text-align:center">Location</th>
                                <th class="span2" style="text-align:center">Date & Time Applied</th>
                                <th class="span4" style="text-align:center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="recName">
                        <?php
                        foreach($myapp as $a)
                        {
                            echo '<tr>
                                
                                
                                <td>';
                            echo $a['jobtitle'];
                            echo '</td>
                                <td>';
                            echo $a['description'];
                            echo '</td>
                                <td>
                                    <a href="#" class="recAppName">';
                            echo $a['companyName'];
                            echo '</a>
                                </td>
                                
                                <td>
                                    NCR | Pasig City
                                </td>
                                <td>';
                             echo $a['datereceived'];
                              echo  '</td>
                                <td>
                                    <div class="statusB">';
                            echo $a['status'];
                            echo '<br>
                                        <font class="more">
                                            3 out of 4 Phases
                                        </font>
                                    </div>
                                </td>
                            </tr>';
                        }
			?>				
                                                  
                            
                        </tbody>
                    </table>
                </div><!--end scrollable-->
            </div><!--end well-->
            
            <div class="well wellMarg wellUpMarg">
            	<h4 class="media-heading">
                	| JOB INVITES
                </h4>
               
                <div style="width:930px;height:250px;overflow:auto;"><!--start scrollable table-->
                	<table class="tableMA table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                
                                <th class="span2" style="text-align:center">Job Title</th>
                                <th class="span2" style="text-align:center">Description</th>
                                <th class="span2" style="text-align:center">Company Name</th>
                                <th class="span2" style="text-align:center">Location</th>
                                <th class="span2" style="text-align:center">Effectivity</th>
                                <th class="span1" style="text-align:center"></th>
                                <th class="span4" style="text-align:center">Options</th>
                            </tr>
                        </thead>
                        
                        <tbody class="recName">
                          <?php  
                          foreach($invites as $a)
                          {
                            echo '<tr>
                                
                                <td>';
                            echo $a['jobtitle'];
                            echo '</td>
                                 <td>';
                            $desc = $this->model_main->get_jobdescription($a['jobno']);
                            echo $desc;
                            echo '</td>
                                <td>
                                    <a href="#" class="recAppName">';
                            echo $a['companyName'];
                            echo '</a>
                                </td>
                                <td>';
                            echo '</td>
                               
                                <td>';
                            $date2 = $a['expirationdate'];
                                $date = date('Y-m-d');
                                $diff = abs(strtotime($date2) - strtotime($date));

                                $days = round((($diff/24)/60)/60);
                                echo $days. " days left";
                            echo '</td>
                                <td>
                                    <span class="label">';
                            echo $a['vacanciesleft'];
                            echo ' Left </span>
                                </td>
                                <td>';
                                ?>
                                    <a href="<?php echo base_url()?>main/apply_jobinvite/<?php echo $a['jobno']?>/<?php echo $a['invitationno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_190_circle_plus.png" width="12"> Accept 
                                    </a>
                                    
                                    <button type="button" data-toggle="modal" data-target="#decline<?php echo $a['jobno']?>" class="btn btn-mini">
                                        <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_191_circle_minus.png" width="12"> Decline 
                                    </button>
                                </td>
                            </tr>
                            <?php
                          }
                            ?>
                        </tbody>
                    </table>
                </div><!--end scrollable-->
                
            </div><!--end well-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.fancybox.pack.js?v=2.1.4"></script>

<script type="text/javascript">
    $(document).ready(function(){
       
        // Okay ngayon gumagana na, ganito mangyayari
        // 1. Pag ni click ni USER yun PUBLISH VACANCY, tatawagin nun system itong function na ito 
        // (yun nasa baba)
        // 2. Yun function na yun, nandoon yun paglipat mo ng entries from page's form to modal's form
        // 3. Wait papakita ko example'
        // browser
        
        $("#pub").click(function(){
            
           $("#jobname").html($("#JN").val());
           $("#description").html($("#desc").val());
           $("#vacant").html($("#NOV").val());
           $("#effect").html($("#effectivity").val());
           $("#region").html($("#regions").val());
           $("#industry").html($("#industries").val());
           $("#city").html($("#cities").val())
           $("#msex").html($("#sex").val())
           $("#sAge").html($("#ageto").val())
           $("#eAge").html($("#agefrom").val())
        });
       
        
    });
</script>

<script type="text/javascript">
       
   $(document).ready(function(){
	  
	   $('#test').dataTable({
			"sPaginationType": "full_numbers"
		});
	   
   });
	
</script>

    
</body>


