<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	
        <div class="span12">
        	<div class="well">
            	<h3 class="media-heading">
                    <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Posted Vacancies
                </h3>
                
                <div class="tabbable"> <!-- start tabs-->
  				<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab12" data-toggle="tab">Active</a></li>
    				<li><a href="#tab11" data-toggle="tab">Expired</a></li>
  				</ul>
  
  				<div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="tab12">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        	<table class="tableJM2 table-hover table-condensed table-striped">
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span1" style="text-align:center">Effectivity</th>
                                      <th class="span2" style="text-align:center">Vacancies Left</th>
                                      <th class="span2" style="text-align:center">Number of Applications</th>
                                      <th class="span3" style="text-align:center"></th>
                                  </tr>
                              </thead>
                              
                              <tbody class="recName">
                                  <?php
                                  foreach($myvacancies as $a)
                                  {
                                  ?>
                                  <tr>
                                      <td>
                                          <font class="vColor">	
                                          <a href ="<?php echo base_url()?>employer/employer_appsperjob">
                                            <?php echo $a['jobtitle']?> </a>
                                          </font>
                                          <br>
                                          <font class="vEditDate">
                                            Last edited: 09/23/2013
                                          </font>
                                      </td>
                                      <td>
                                          NCR | Makati City
                                      </td>
                                      <td>
                                          4 days left
                                      </td>
                                      <td>
                                          20
                                      </td>
                                      
                                      <td>
                                        <a href="#" class="numofApps">
                                          30
                                        </a>
                                      </td>
                                      
                                      <td>
                                          <a href="EUpdateVacancy.html" class="invJS btn btn-primary btn-mini">Update</a>
                                      
                                          <a href="EInviteJS.html" class="invJS btn btn-info btn-mini">Invite Job Seekers</a>
                                      </td>
                                      
                                  </tr>
                                  <?php
                                  }
                                  ?>
                                                         
                                  
                              </tbody>
                          </table>	
                        </div><!--end scrollable table-->
                        
                       
                    </div>  <!--end Active-->
                    
                    <div class="tab-pane" id="tab11">
                        <div style="width:1240px;height:430px;overflow:auto;"><!--start scrollable table-->
                        	<table class="tableJM2 table-hover table-condensed table-striped">
                              <thead>
                                  <tr>
                                      <th class="span3" style="text-align:center">Job Title</th>
                                      <th class="span1" style="text-align:center">Effectivity</th>
                                      <th class="span2" style="text-align:center">Location</th>
                                      <th class="span2" style="text-align:center">Vacancies Left</th>
                                      <th class="span2" style="text-align:center">Number of Applications</th>
                                      <th class="span3" style="text-align:center"></th>
                                  </tr>
                              </thead>
                              
                              <tbody class="recName">
                                  <tr>
                                      <td>
                                          <font class="vColor">	
                                            Welder Assistant
                                          </font>
                                          <br>
                                          <font class="vEditDate">
                                            Last edited: 09/23/2013
                                          </font>
                                      </td>
                                      
                                      <td>
                                          4 days left
                                      </td>
                                      
                                      <td>
                                          NCR | Makati City
                                      </td>
                                      
                                      <td>
                                          20
                                      </td>
                                      
                                      <td>
                                        <a href="#" class="numofApps">
                                          30
                                        </a>
                                      </td>
                                      
                                      <td>
                                          <a href="EUpdateVacancy.html" class="invJS btn btn-primary btn-mini">Update</a>
                                      
                                          <a href="EInviteJS.html" class="invJS btn btn-info btn-mini">Invite Job Seekers</a>
                                      </td>
                                  </tr>
                                  
                                  <tr>
                                      <td>
                                          <font class="vColor">
                                          Welder
                                          </font>
                                          <br>
                                          <font class="vEditDate">
                                            Last edited: 09/23/2013
                                          </font>
                                      </td>
                                      
                                      <td>
                                          2 weeks left
                                      </td>
                                     
                                      <td>
                                          NCR | Makati City
                                      </td>
                                      
                                      <td>
                                          10
                                      </td>
                                      
                                      <td>
                                        <a href="EAppsPerJob.html" class="numofApps">
                                          20
                                        </a>
                                      </td>
                                      
                                      <td>
                                          <a href="EUpdateVacancy.html" class="invJS btn btn-primary btn-mini">Update</a>
                                      
                                          <a href="EInviteJS.html" class="invJS btn btn-info btn-mini">Invite Job Seekers</a>
                                      </td>
                                  </tr>                         
                                  
                              </tbody>
                          </table>	
                        </div><!--end scrollable table-->
                        
                        
                    </div> <!--end tab expired-->
            
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
    
      </body>