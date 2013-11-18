<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
    
	
    <div class="row-fluid">
        
    
        
        <div class="span12">
            
        	<div class="well">
                       <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_163_iphone.png" width="15"> SMS
            </h3>
                     
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#SGS" data-toggle="tab">Jobseekers</a></li>
                        <li><a href="#All" data-toggle="tab">Employers</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="SGS">
                    	<div style="width:1240px;height:420px;overflow:auto;"><!--start scrollable table-->
                            
                     <div id="container">
                             <form method="post" action="<?php echo base_url()?>tesda/call_jobseeker/">
                 
                                 <table id ="js" style="width:1240px">
                      <thead>
                          <tr>
                          	
                              <th class="span5" style="text-align:center">Name</th>
                              <th class="span5" style="text-align:center">Cell No.</th>
                          </tr>
                      </thead>
                      
                      <tbody class="recName">
                          
                          
                          <?php 
                                        foreach ($smsjs as $b)
                                        {
                          
                         echo' <tr>
                          	 
                              
                              <td>
                              	 <a href="#" class="recAppName">';
                               echo $b['firstname'];
                                                          echo ' ';
                                                          echo $b['middlename'];
                                                          echo ' ';
                                                          echo $b['lastname'];
                               echo'  </a>
                              </td>
                              
                              <td>';
                              echo $b['cellno'];
                              echo'</td>
                              
                          </tr>';
                                        }
                                        ?>           
                                        
                          
                      </tbody>
                  </table>
                   
                    </form>
                      </div>
                        
                    </div> <!--end tab pane invited-->
                    </div>
                        
                    
                    <div class="tab-pane" id="All">
                    	<div style="width:1240px;height:420px;overflow:auto;"><!--start scrollable table-->
                            
                        	      <div id="container">
                             <form method="post" action="<?php echo base_url()?>tesda/call_employer/">
                   
                     <table id ="e" style="width:1240px" >
                      <thead>
                          <tr>
                          	 
                              <th class="span5" style="text-align:center">Name</th>
                              <th class="span5" style="text-align:center">Cell No.</th>
                          </tr>
                      </thead>
                      
                      <tbody class="recName">
                          <?php 
                                        foreach ($smsemp as $a)
                                        {
                          
                         echo' <tr>
                          	 
                              
                              <td>
                              	 <a href="#" class="recAppName">';
                              echo $a['companyName'];
                               echo'  </a>
                              </td>
                              
                              <td>';
                              echo $a['companyContact'];
                              echo'</td>
                              
                          </tr>';
                                        }
                                        ?>         
                          
                      </tbody>
                  </table>
                   
                    </form>
                      </div>
                        
                    </div> <!--end tab pane invited-->
                    </div> <!--end tab pane invited-->
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Job market-->
        </div><!--end span right column-->
    </div><!--end row-->

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>


<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#js').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>

<script type="text/javascript">
       
       $(document).ready(function(){
          
           $('#e').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>
    
</body>
