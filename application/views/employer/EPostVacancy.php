<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
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
                                      	<input type="hidden" id="industry" name="industry">
                                      <span id="industryname" name="industryname"></span>
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
                                      <input type="hidden" id="region" name="region">
                                      	<span id="regionname" name="regionname"></span>
                                        	
                                      </font>	
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      City/Province: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      <input type="hidden" id="city" name="city">
                                      	<span id="cityname" name="cityname"></span>	
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
                        <span id="cert1" name= "cert1"></span>
                          
                        	
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
               
<form class="container" method="post" action="employer_postvacancy" id="publish">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="well">
                      
            	<h4 class="media-heading">Post Vacancy</h4>
                
                <div class="row-fluid">
                    <div align="right">
                        
                        <a id="pub" style="margin-top:-50px;" data-toggle="modal" href="#pubV" class="btn btn-primary pubVMarg">
                            Publish Vacancy
                        </a>
                    </div>
                </div><!--browserend publish button-->
                <hr class="hrPV">
                
            	<div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLink"><a href="#tab1" data-toggle="tab">General Information</a></li>
<!--                        <li class="rTabLink"><a href="#tab2" data-toggle="tab">Qualifications</a></li>-->
                       <li class="rTabLink"><a href="#tab3" data-toggle="tab">Qualifications</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<!--<div style="width:1010px;height:360px;overflow:auto;">start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well">
                                        	<div class="form-horizontal4 GIMarg">
                                            	    	<div class="row-fluid">
                                                            
                                                	<div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Job Title: &nbsp;</label>
                                                            <div class="controls">
                                                             
                                                                <input type="text" id="JN" name="JN" placeholder="" >
                                                            </div>
                                                        </div> <!--end JT field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Description: &nbsp;</label>
                                                            <div class="controls">
                                                                <textarea type="text" rows="7" id="desc" name="desc" placeholder="" ></textarea>
                                                            </div>
                                                        </div> <!--end Desc field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">Industry: &nbsp;</label>
                                                            <div class="controls">
                                                                   <?php    
                                                                $industry['0'] = 'Please Select';
                                                                $params = 'id="industries"'; 
                                                               echo form_dropdown('industry', $industry,'0',$params);     
                                                               ?> 
                                                            </div>
                                                        </div> <!--end Desc field-->
                                                        
                                                    </div><!--end span-->
                                                    
                                                    <div class="span6">
                                                    	<div class="control-group">
                                                            <label class="control-label lLabel2">Region: &nbsp;</label>
                                                            <div class="controls">
                                                                <?php $regions['0'] = 'Please Select'; ?>
                                                                <?php $cities['0'] = 'Please Select'; ?>
                                                                <?php 
                                                                  $params = 'id="regions"'; 
                                                                 echo form_dropdown('regionid', $regions, '0',$params);
                                                                ?> 
                                                            </div>
                                                        </div> <!--end RGN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label lLabel2">City/Province: &nbsp;</label>
                                                            <div class="controls">
                                                                <?php 
                                                                $params = 'id="cities"'; 
                                                                echo form_dropdown('cityid', $cities, '0', $params);
                                                                ?> 
                                                            </div>
                                                        </div> <!--end CoP field-->
                                                        
                                                		<div class="control-group">
                                                            <label class="control-label lLabel2">Number of Vacancies: &nbsp;</label>
                                                            <div class="controls">
                                                                    <input type="text" id="NOV" name="NOV" placeholder="" >
                                                            </div>
                                                        </div> <!--end NOV field-->
                                                        
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
                            <!--</div>end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                      <!--ADD HERE ADD HERE ADD HERE ADD HERE ADD HERE ADD HERE ADD HERE-->
                           <div class="tab-pane" id="tab3">
                            <div class="row-fluid">
                            	<div class="span12">
                                <div class="well">
                                    <form class="form-horizontal4 qualiMarg">
                                        <div class="row-fluid">
                                            <div class="span7">
                                                <div class="control-group">
                                                    <!--<label class="control-label lLabel2" style="margin-right:-26px;">Sex: &nbsp;</label>-->
                                                    <div class="controls">
                                                       <strong>  Sex:</strong>  <?php 
                                                        $options = array(
                                                        'Female'  => 'Female',
                                                        'Male'    => 'Male',
                                                        'Both'   => 'Not Specified',

                                                        );
                                                        $js = 'id="sex"';

                                                        echo form_dropdown('sex', $options, 'Male', $js);

                                                        ?>
                                                    </div>
                                                </div> <!--end sex field-->
                                            </div><!--end span-->
                                            
                                            <div class="span5">
                                                <div class="control-group">
                                                    <!--<label class="control-label lLabel2" style="margin-left:-184px;">Age Range: &nbsp;</label>-->
                                                    <div class="control-group"><!-- start div age -->
                                                        <div class="myStyle12 ">
                                                       <strong> Age: </strong><input type="text" id="ageto" name="ageto"><strong> to </strong>
                                                       <input type="text" id="agefrom" name="agefrom">
                                                        </div>
                                                    </div>
                                                   </div> <!--end age range field-->
                                            </div><!--end span-->
                                        </div><!--end row-fluid-->
                                        <br>
                                      
                                          <div class="myStyle2VD" style="margin-top:5px;" >
                                                       <?php    
                                                                $industry['0'] = 'Choose Industry';
                                                                $params = 'id="industrycert" style="width:40%" '; 
                                                               echo form_dropdown('industrycert', $industry,'0',$params);    
                                                               
                                                          ?> 
                                                
                                                </div>
                                    </form>
                                    
                                    
                                    <hr class="hrDicussBig">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <h5 class="media-heading previewColor">
                                                | CERTIFICATION/S
                                            </h5>
                                            
                                            
                                                <?php 
             
                                        $params = 'multiple="multiple" style="width:75%" size="10" name= "cert[]" id="lstcert1"'; 
                                        echo form_multiselect('certs', $cert, '#', $params ); ?> 
                                            
                                            <a class="btn btn-mini actionPHMarg"style="margin-left:15px; margin-top:-30px;" id="btnAddCert">
                                     <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> &nbsp;Add&nbsp;&nbsp;  </a>
                                   
                                       

                                        </div><!--end span4-->	
                                        
                                         <div class="span4">
                                            <h5 class="media-heading previewColor">
                                                | COMPETENCIES
                                            </h5>
                                            
                                              <?php 
                                         
                                         $params = 'multiple="multiple"style="width:70%" size="10" name= "comp[]" id="lstcomp1"'; 
                                         echo form_multiselect('competencies', $comp, '#', $params); ?>   
                                            
                                               <a class="btn btn-mini actionPHMarg"style="margin-left:20px; margin-top:-30px;" id="btnAddComp">
                                     <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> &nbsp;Add&nbsp;&nbsp;  </a>
                                  
                                        </div><!--end span4-->	
                                        
                                           <div class="span4">
                                            <h5 class="media-heading previewColor">
                                                | YOUR CHOSEN CERTIFICATION/S
                                            </h5>
                                            
                                           <select id="lstcert2" name= "certselect[]"multiple="multiple">
                                         </select>
                                               <a class="btn btn-mini actionPHMarg"style ="margin-left:15; margin-top:-10px;"id="btnDelCert">
                                     <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove</a>
                                      
                                            <h5 class="media-heading previewColor">
                                                | YOUR CHOSEN COMPETENCIES
                                            </h5>
                                            
                                             <select id="lstcomp2" name= "compselect[]" multiple="multiple">

                                        </select>
                                               
                                                    <a class="btn btn-mini actionPHMarg"style ="margin-left:10px; margin-top:-10px;"id="btnDelComp">
                                     <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove</a>
                                        </div><!--end span4-->	
                                        
                                    </div><!--end row-fluid-->
                                    
                                    <br>
<!--                                    <div class="row-fluid" align="center">
                                      	<textarea name="Desc" rows="10" class="span7" readonly style="margin-left:-120px;"></textarea>
                                    </div>end row-fluid-->
                                    
                                   
                                    	
                                  </div><!--end well-->
                            	</div><!--end span-->
                            </div><!--end row-fluid-->
                            
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
           
                        var certs = '';
			var competencies = '';
                       // var ind = '';
             var ind = $('#industries').find(":selected").text();
             var reg = $('#regions').find(":selected").text();
             var cit = $('#cities').find(":selected").text();
               //    var ind = $('#aioConceptName :selected').text();
                   
           $("#jobname").html($("#JN").val());
           $("#description").html($("#desc").val());
           $("#vacant").html($("#NOV").val());
           $("#effect").html($("#effectivity").val());
           $("#region").html($("#regions").val());
           $("#city").html($("#cities").val());
           $("#industry").html($("#industries").val());
            		   
            $("#industryname").html(ind);
            $("#regionname").html(reg);
            $("#cityname").html(cit);
            
           
           $("#msex").html($("#sex").val());
           $("#sAge").html($("#ageto").val());
           $("#eAge").html($("#agefrom").val());
           
           $("#cert1").html($("#lstcert2").val());
		   $('#lstcert2').each(function(index){
				certs += $(this).text() + ' , ';
		   });
		   
           $("#cert1").html(certs);
           
            
             $("#comp").html($("#lstcomp2").val());
		   $('#lstcomp2').each(function(index){
				competencies += $(this).text() + ' , ';
		   });
		   
           $("#comp").html(competencies);
           
        });
            // wait search lng
            
        $("#trigger").click(function(){
                
        $("#publish").submit();
        });
            
        
    });
</script>
    

