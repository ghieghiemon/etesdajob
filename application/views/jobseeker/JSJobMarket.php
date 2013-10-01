<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span3">
        	<div class="well wellMarg2b">
                <h5 class="media-heading">
                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
            </h5>
                
                <div style="width:310px;height:500px;overflow:auto;" class="wellMargCE"><!--start scrollable table-->
                	<div class="control-group"><!-- start div job title -->
                        <div class="myStyleQS3">
                            <input type="text" id="JT" name="JT" placeholder="Job Title">
                        </div>
                    </div><!-- end div job title -->

          			<div class="control-group"  style="margin-top:-5px;"><!-- start div company-->
                        <div class="myStyleQS3">
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
        </div><!--end span left folumn-->
        
        <div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25"> Job Market
            </h3>
            
            <div class="tabbable"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#SGS" data-toggle="tab">Suggested</a></li>
                        <li><a href="#All" data-toggle="tab">All</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                    <div class="tab-pane active" id="SGS">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            
                        	<table class="tableJM table-hover table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                                <?php
                            foreach($suggested as $a)
                            {
                                 echo '<tr>
                                    
                                    <td>';
                                       echo $a['jobtitle'];
                                echo '</td>
                                   
                                    <td>
                                        <a href="#" class="recAppName">
                                            SM Corp
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Pasig City
                                    </td>
                                    
                                    <td>
                                        09/23/2013 to 09/30/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">20 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">15 Left </span>
                                    </td>
                                    
                                    
                                    <td>
                                    	<button class="btn btn-mini btn-info">Apply</button>
                                    </td>
                                </tr>';
                            }
                            ?>    
                               
                            </tbody>
                        </table>	
                        </div><!--end scrollable-->   	
                    </div> <!--end tab pane invited-->
                    
                    <div class="tab-pane" id="All">
                    	<div style="width:920px;height:420px;overflow:auto;"><!--start scrollable table-->
                            
                            <div id="container">
                        	<table  id="newtable">
                            <thead>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center">Action</th>
                            </thead>
                            
<!--                            <tbody class="recName">-->
                            <tbody class="recName">
                                <?php
                            foreach($suggested as $a)
                            {
                                $jobno[]=$a['jobno'];
                            }
                            foreach($jobs as $a)
                            {
                                echo '<tr>
                                    
                                    <td>';
                                    echo $a['jobtitle'];
                                    echo '</td>
                                   
                                    <td>
                                        <a href="#" class="recAppName">
                                            SM Corp
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Pasig City
                                    </td>
                                    
                                    <td>
                                        09/23/2013 to 09/30/2013
                                    </td>
                                    
                                    <td>
                                        <span class="label label-info">20 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">15 Left </span>
                                    </td>
                                    
                                    
                                    <td>';
                                    if(in_array($a['jobno'],$jobno))
                                    	echo '<button class="btn btn-mini btn-info">Apply</button>';
                                    echo '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                            </div>
                        </div><!--end scrollable-->
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
          
           $('#newtable').dataTable({
                "sPaginationType": "full_numbers"
            });
		   
       });
        
</script>