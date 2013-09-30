<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	
    <div class="row-fluid">
    	<div class="span9">
        	<div class="well">
            <h3 class="media-heading">
            	<img src="assets/img/icons/glyphicons_264_vcard.png" width="25"> Job Market
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
                                    <th class="span1" style="text-align:center">
                                    	<button class="btn btn-mini btn-primary jIBtn">Apply</button>
                                        <input type="checkbox">
                                    </th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                            <?php
                            foreach($suggested as $a)
                            {
                               echo '<tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    
                                    <td>
                                        09/23/2013 to 09/30/2013
                                    </td>
                                    
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
                                        <span class="label label-info">20 Applied</span>
                                    </td>
                                    
                                    <td>
                                        <span class="label">15 Left </span>
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
                        	<table class="tableJM table-hover table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th class="span1" style="text-align:center">
                                    	<button class="btn btn-mini btn-primary jIBtn">Apply</button>
                                        <input type="checkbox">
                                    </th>
                                    <th class="span3" style="text-align:center">Effectivity</th>
                                    <th class="span3" style="text-align:center">Job Title</th>
                                    <th class="span2" style="text-align:center">Company Name</th>
                                    <th class="span3" style="text-align:center">Location</th>
                                    <th class="span1" style="text-align:center"></th>
                                    <th class="span1" style="text-align:center"></th>
                                </tr>
                            </thead>
                            
                            <tbody class="recName">
                            <?php
                            foreach($suggested as $a)
                            {
                                $jobno[]=$a['jobno'];
                            }

//                            $final = array();
//                            foreach ($suggested as $a)
//                            {
//                                if(in_array($a['jobno'],$jobno))
//                                        array_push($final, $a);
//                            }
                            foreach($jobs as $a)
                            {
                                echo '<tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    
                                    <td>
                                        09/23/2013 to 09/30/2013
                                    </td>
                                    
                                    <td>';
                                 echo $jobtitle;
                                    echo '</td>
                                   
                                    <td>
                                        <a href="#" class="recAppName">
                                            SM Corp
                                        </a>
                                    </td>
                                    
                                    <td>
                                        NCR | Pasig City
                                    </td>
                                    
                                    <td>';
                                 if(in_array($a['jobno'],$jobno))
                                        echo '<span class="label label-info">20 Applied</span>';
                                 echo '</td>
                                    
                                    <td>
                                        <span class="label">10 Left </span>
                                    </td>
                                </tr>';
                                }
                                ?>
                                                      
                                
                            </tbody>
                        </table>	
                        </div><!--end scrollable-->
                    </div> <!--end tab pane invited-->
                    
                   
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
            
            
            </div><!--end Job market-->
        </div><!--end span left folumn-->
        
        <div class="span3">
        	<div class="well wellMarg">
                <h5 class="media-heading">
                <img src="assets/img/icons/glyphicons_027_search.png" width="18"> Quick Job Search
            </h5>
                
                <div style="width:280px;height:250px;overflow:auto;"><!--start scrollable table-->
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
                    
                    <div align="right">
                    	<a href="#" class="btn btn-info">
                        	Search
                        </a>
                    </div>
                    
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.4"></script>

<!--add carousel-->
<script>
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
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

</html>
