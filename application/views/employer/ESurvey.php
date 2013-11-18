<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_040_stats.png" width="25"> E-Survey
            </h4>
            
            <div class="row-fluid">
            	<div class="span12">
                    <div class="row-fluid">
                        <div class="span10">
                	<div class="well" style="margin-left:150px;">
                    	<div class="myStyle2PQS" align="center" style="margin-top:40px;margin-bottom:30px;">
                        <h4>
                        	Message
                        </h4>
                    	</div>
                    </div><!--end well-->
                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <div class="span10">
                    <div class="well" style="margin-left:150px;">
                        
                    <div style="width:1040px;height:350px;overflow:auto;"><!--start scrollable table-->
                        <h3>January</h3>
                    <table class="table-condensed" style="text-align:center; width:800px; margin-left:40px;" >
                    	<thead>
                        	<tr>
                            	<th class="span2">Job Title</th>
                                <th class="span2">Location</th>
                                <th class="span2">Date Posted</th>
                                <th class="span1">Vacancies</th>
                                <th class="span2">How many hired</th>
                                <th class="span1"></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            foreach($surveys as $a)
                            {
                            ?>
                        	<tr>
                            	<td>
                                	<?php echo $a['jobtitle']?>
                                </td>
                                
                                <td>
                                	NCR | Makati
                                </td>
                                
                                <td>
                                	09/20/2013
                                </td>
                                
                                <td>
                                	23
                                </td>
                                
                                <td>
                                	<input type="text" class="span4">
                                </td>
                                
                                <td>
                                	<button class="btn btn-info" style="margin-top:-10px;">Submit</button>
                                </td>
                            <?php
                            }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                    </div><!--end scrollable-->
                    </div>
                        </div>
                    </div>
                    
                </div><!--end span-->
            </div><!--end row-fluid-->
            
            
       	 	
            
            
            
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>