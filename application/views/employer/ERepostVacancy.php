<body>
<!--publish vacancy modal start-->
<div class="modal hide fade" id="pubV">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Vacancy Preview</h3>
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
                                      <font class="previewDet2">
                                      	<span id="jobname" name="jobname"></span>
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Description:
                                  </td>
                                  
                                  <td>
                                	  <font class="previewDet2">
                                      	<span id="description" name="description"></span>
                                      </font>
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
                                      	<span id="effect" name="effect"></span>	Weeks
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
                        <span id="cert" name= "cert"></span>
                        	
                        </font>
                    </p>
                   
                   <p class="previewCCS">
                		<strong>COMPETENCIES:</strong> 
                        <font class="previewCCS2">
                        	<span id="comp" name= "comp"></span>
                        </font>
                    </p>
                    
                
                </div><!--end span-->
                
               
            </div><!--end row-fluid-->
	</div>
  
  	<div class="modal-footer">
  		<a id="trigger" href="#" class="btn btn-info" data-dismiss="modal">Publish</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--publish vacancy modal end-->
  
<!--add phase modal start-->
<div class="modal hide fade" id="addPhase">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Add Phase</h3>
  	</div>

	<div class="modal-body">
		<table>
        	<thead>
            	<th class="span3">Choose a phase name</th>
                <th class="span3">
                	<input type="text" placeholder="" id="phaseName">
                </th>
            </thead>
        </table>
	</div>
  
  	<div class="modal-footer">
  		<button type="button" onclick="addphase()" class="btn btn-info" data-dismiss="modal">Save</button>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--add phase modal end-->

<!--edit phase modal start-->
<div class="modal hide fade" id="editPhase">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Edit Phase</h3>
  	</div>

	<div class="modal-body">
		<table>
        	<thead>
            	<th class="span3">Choose a phase name</th>
                <th class="span3">
                	<input type="text" placeholder="" id="phaseName">
                </th>
            </thead>
        </table>
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-info" data-dismiss="modal">Save</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--edit phase modal end-->
  
<!--delete phase modal start-->
<div class="modal hide fade" id="delPhase">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Delete Phase</h3>
  	</div>

	<div class="modal-body">
		<p class="delete">Are you sure you want to delete this phase?</p>
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-danger" data-dismiss="modal">Okay</a>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!--delete phase modal end-->

               
<form class="container" method="post" action="employer_postvacancy" id="publish">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="well">
                      
            	<h4 class="media-heading">Post Vacancy</h4>
                
                <div class="row-fluid">
                    <div align="right">
                        
                        <a id="pub" style="margin-top:-50px;" data-toggle="modal" href="#pubV" class="btn btn-primary pubVMarg">
                            Repost Vacancy
                        </a>
                    </div>
                </div><!--browserend publish button-->
                <hr class="hrPV">
                
            	<div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLink"><a href="#tab1" data-toggle="tab">General Information</a></li>
                        <li class="rTabLink"><a href="#tab2" data-toggle="tab">Qualifications</a></li>
                      
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<div style="width:1010px;height:360px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well">
                                        	<div class="form-horizontal4 GIMarg">
                                            	    	<div class="row-fluid">
                                                            
                                                	<div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Job Title: &nbsp;</label>
                                                            <div class="controls">
                                                             <?php 
                                                             foreach ($jobdetails as $a)
                                                             {
                                                             ?>
                                                             
                                                                <input type="text" style="width:50%" id="JN" name="JN" placeholder="" value="<?php echo $a['jobtitle']?>" readonly >
                                                            </div>
                                                        </div> <!--end JT field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Description: &nbsp;</label>
                                                            <div class="myStyleDesc">                                                              
                                                            <input type="text" id="desc" style="width:50%" name="desc" placeholder="" value="<?php echo $a['description']?>"readonly >
                                                            </div>
                                                        </div> <!--end Desc field-->
                                                           
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Industry: &nbsp;</label>
                                                            <div class="controls">
                                                               
                                                             <input type="text" rows="7" style="width:50%" id="industriesname" name="industriesname" value="<?php echo $a['sectorName']?>"readonly >
                                                             <input type="hidden" name="industries" id="industries" value="<?php echo $a['sectorID']?>">
                                                          </div>
                                                        </div> <!--end Desc field-->
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Number of Vacancies: &nbsp;</label>
                                                            <div class="controls">
                                                       <input type="text" style="width:50%" value="<?php echo $a['vacanciesleft']?>" id="NOV" name="NOV" readonly>
                                                            </div>
                                                        </div> <!--end NOV field-->
                                                    </div><!--end span-->
                                                    
                                                    <div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Region: &nbsp;</label>
                                                            <div class="controls">
                                                                <?php $regions['#'] = 'Please Select'; ?>
                                                                <?php $cities['#'] = 'Please Select'; ?>
                                                                <?php 
                                                                  $params = 'id="regionselect"'; 
                                                                 echo form_dropdown('regionid', $regions, '#',$params);
                                                                ?> 
                                                            </div>
                                                        </div> <!--end RGN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">City/Province: &nbsp;</label>
                                                            <div class="controls">
                                                                <?php 
                                                                $params = 'id="cities"'; 
                                                                echo form_dropdown('cityid', $cities, '#', $params);
                                                                ?> 
                                                            </div>
                                                        </div> <!--end CoP field-->
                                                        
                                                		
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Effectivity: &nbsp;</label>
                                                            <div class="controls">
                                                                
                                                                
                                                        <?php 
                                                        $options = array(
                                                        '2'  => '2 weeks',
                                                        '3'    => '3 weeks',
                                                        '4'   => '4 weeks',

                                                        );
                                                        $js = 'id="effectivity"';

                                                        echo form_dropdown('effectivity', $options, '2', $js);

                                                        ?>
                                                                
                                                                
                                                                
                                                            </div>
                                                        </div> <!--end EF field-->
                                                        
                                                </div><!--end span-->
                                                
                                                
                                                </div><!--end row-fluid-->
                                			</div>
                                		</div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                        <div class="tab-pane" id="tab2">
                        	<div style="width:1010px;height:650px;overflow:auto;"><!--start scrollable table-->
                            <div class="row-fluid">
                            	<div class="span12">
                                <div class="well">
                                    <div class="form-horizontal4 qualiMarg">
                                        <div class="row-fluid">
                                            <div class="span7">
                                                <div class="control-group">
                                                    <label class="control-label lLabel2" style="margin-left:126px;">Sex: &nbsp;</label>
                                                    <div class="controls">
                                                      
                                                 <input type="text" value="<?php echo $a['sex']?>" id="sex" name="sex" readonly>
                                                    </div>
                                                </div> <!--end sex field-->
                                            </div><!--end span-->
                                            
                                            <div class="span5">
                                                <div class="control-group">
                                                    <label class="control-label lLabel2" style="margin-left:-84px;">Age Range: &nbsp;</label>
                                                    <div class="control-group"><!-- start div age -->
                                                        <div class="myStyle12 ">
                                                       <input type="text" id="ageto" value="<?php echo $a['agestart']?>" name="ageto" readonly><strong> to </strong>
                                                       <input type="text" id="agefrom" value="<?php echo $a['ageend']?>"name="agefrom" readonly>
                                                        </div>
                                                    </div>
                                                   </div> <!--end age range field-->
                                            </div><!--end span-->
                                        </div><!--end row-fluid-->
                                    </div>
                             <hr class="hrDicussBig">
                                   <h4 class="media-heading previewColor">
                                                    | CERTIFICATION/S
                                                </h4>
                            
                                    
                                    
                                    
                                      

                                           <div class="row-fluid marg17 margCCS">
                                
                                     
                                        <!--<input id="btnAddCert" type="button" class ="btn btn-mini btn-info" style="margin-top:-30px;margin-left:7px;"value="  Add  " />-->
                                        <!--<input id="btnDelCert" type="button" class ="btn btn-mini btn-danger" style="margin-left:-55px;margin-bottom:-20px;"value="Remove" />-->
                                    
                                    
                                                <div class="myStyleDesc">                                                              
                                                            <input type="text" id="certifications" style="width:50%" name="certifications" placeholder="" value="<?php
                                                         $count = count($cert);
                                                         foreach ($cert as $a)
                                                         {
                                                             echo $a['ncname'];
                                                             echo " ". $a['level'];
                                                             if ($count >1)
                                                                echo ", ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>"readonly >
                                                 <input type="hidden" name="certselect[]" id="lstcert2" value="1">
                                                 
                                                            </div>
                                               
<!--                                                 <select id="lstcert2" name= "certselect[]"multiple="multiple">
                                         </select>-->
                                  </div> <!--end row-fluid-->
                                
                                  
                                 
            

                                 <hr class="hrDicussBig">  
                                    <h4 class="media-heading previewColor">
                                        | COMPETENCIES
                                    </h4>
                                   
                                          <div class="row-fluid marg17 margCCS">
                                            
                                        <div class="myStyleDesc">                                                              
                                                            <input type="text" id="competencies" style="width:50%" name="competencies" placeholder="" 
                                                                   value="<?php
                                                         $count = count($cert);
                                                         foreach ($comp as $a)
                                                         {
                                                             echo $a['cocname'];
                                                           
                                                             if ($count >1)
                                                                echo " , ";
                                                             
                                                             $count--;
                                                         }
                                                         ?>"readonly >
                                              <input type="hidden" name="compselect[]" id="lstcomp2" value="1">
                                                            </div> 
                                         
                                  </div> <!--end row-fluid-->
                                  

                            
                                  
                             <?php
                                                             }
                                                             ?>

                            	</div><!--end well-->
                            	</div><!--end span-->
                            </div><!--end row-fluid-->
                       	</div><!--end scrollable table-->
                            
                        </div> <!--end tab pane qualifications-->
                        
                 
                        
                        
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
                    
            </div><!--end well-->
        </div><!--end span-->
    </div><!--end row-->
    
    </div><!--End div-->
</form><!--End Container fluid-->
 
            
             


      <hr>
  
</body>

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
           $("#region").html($("#regionselect").val());
           $("#industry").html($("#industries").val());
           $("#city").html($("#cities").val())
           $("#msex").html($("#sex").val())
           $("#sAge").html($("#ageto").val())
           $("#eAge").html($("#agefrom").val())
           
           $("#cert").html($("#lstcert2").val())
           $("#comp").html($("#lstcomp2").val())
           
            
        });
            // wait search lng
            
        $("#trigger").click(function(){
                
        $("#publish").submit();
        });
            
        
    });
</script>
    

<script>
        $(document).ready(function(){       
    $('#regionselect').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#cities > option").remove(); //first of all clear select items
            var regionid = $('#regionselect').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
               // url: "main/get_cities/"+regionid, //here we are calling our user controller and get_cities method with the country_id
            url: $('#base').val() +"main/get_cities/"+regionid,    
            dataType: "json",
                
                success: function(cities) //we're calling the response json array 'cities'
                {
                    $.each(cities,function(cityid,city) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(cityid);
                        opt.text(city);
                        $('#cities').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
                 
            });
             
        });
    });
    </script>