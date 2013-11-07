<div class="container">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="well wellUpMarg">
            	<h3 class="media-heading"> 
                	<img src="assets/img/SUnew.png" style="margin-left:-8px; margin-top:-4px;">
                </h3>
                
                <hr class="hrPV2">
                
            	<div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLinkSJS">
                        	<a href="#tab1" data-toggle="tab">
                            	<img src="assets/img/icons/glyphicons_352_nameplate.png" width="20"> Personal Information
                         	</a>
                        </li>
                        
                        <li class="rTabLinkSJS">
                        	<a href="#tab2" data-toggle="tab">
                            	<img src="assets/img/icons/glyphicons_332_certificate.png" width="15"> Educational Background
                         	</a>
                        </li>
                        
                        <li class="rTabLinkSJS">
                        	<a href="#tab3" data-toggle="tab">
                            	<img src="assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                         	</a>
                        </li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        	<div style="width:950px;height:520px;overflow:auto;"><!--start scrollable table-->
                            	<div class="row-fluid">
                                	<div class="span12">
                                		<div class="well GIWellMarg">
                                        	<p class="welcome" align="center">
                                                <font class="resNote">*Please take note that all information will be used as your resume whenever you apply for a job.</font>
                                            </p>
                                            <br>
                                               <form method ="post" action ="<?php echo base_url()?>main/register_jsdetails/<?php echo $userid?>">
                                              <div class="form-horizontal2 regMarg regMarg2">
                                              <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="control-group">
                                                            <label class="control-label">First Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="FN" name="FN" placeholder="" >
                                                            </div>
                                                        </div> <!--end FN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Middle Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="MN" name="MN" placeholder="" >
                                                            </div>
                                                        </div> <!--end MN field-->
                                                    
                                                        <div class="control-group">
                                                            <label class="control-label">Last Name: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="LN" name="LN" placeholder="" >
                                                            </div>
                                                        </div> <!--end LN field-->
                                                        
                                                                      <div class="control-group">
                                                            <label class="control-label">Birthday: &nbsp;</label>
                                                            <div class="controls">
                                                                <div class="row-fluid">

                                                                <input type="text" id="bday" name="bday" placeholder="YYYY/MM/DD" >
                                                                </div> 
                                                            </div>
                                                        </div> <!--end Bday field-->
                                                        
                                                         <div class="control-group">
                                                            <label class="control-label">Gender: &nbsp;</label>
                                                            <div class="controls">
                                                            <?php 
                                                            echo form_dropdown('gender',array('1' =>'Male', 
                                                            '0' => 'Female')) ?>
                                                            </div>
                                                        </div> <!--end RGN field-->
                                                    
                                          
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Civil Status: &nbsp;</label>
                                                            <div class="controls">
                                                            <?php 
                                                            echo form_dropdown('civstatus',array('Single' =>'Single', 'Married' =>'Married', 
                                                            'Widowed' => 'Widowed')) ?>
                                                            </div>
                                                        </div><!--end ES-->
                                                        
<!--                                                        <div class="control-group">
                                                            <label class="control-label">Upload Picture: &nbsp;</label>
                                                            <div class="controls">
                                                                <form method="post" action="upload-page.php" enctype="multipart/form-data">
                                                                    <input name="pic" id="pic" type="file" class="upPic" />
                                                                </form>  
                                                            </div>
                                                        </div> -->
                                                        <!--end Picture field--> 
                                                        
                                                          
                                                          
<!--                                                          <div class="control-group">
                                                            <label class="control-label">Email Address: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="email" id="email" name="email" placeholder="" >
                                                            </div>
                                                        </div> end LN field-->
                                                          
                                                               <div class="control-group">
                                                            <label class="control-label">Telephone No: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="TEL" name="TEL" placeholder="" >
                                                            </div>
                                                        </div> <!--end LN field-->
                                                        
                                                         <div class="control-group">
                                                            <label class="control-label">Cell No: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="CELL" name="CELL" placeholder="" >
                                                            </div>
                                                        </div> <!--end LN field-->
                                                        
                                                  
                                                      
                                                    </div><!--end left-->
                                                    
                                                    
                                                    <div class="span6 addMarg">
                                                        <p class="address">Address</p>
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Street No: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="SN" name="SN" placeholder="" >
                                                            </div>
                                                        </div> <!--end SN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Brgy: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="BGY" name="BGY" placeholder="" >
                                                            </div>
                                                        </div> <!--end BGY field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">District: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="DIS" name="DIS" placeholder="" >
                                                            </div>
                                                        </div> <!--end DIS field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Region: &nbsp;</label>
                                                            <div class="controls">
                                                                  <?php $regions['#'] = 'Please Select'; ?>
                                                                <?php $cities['#'] = 'Please Select'; ?>
                                                                <?php 
                                                                  $params = 'id="regions"'; 
                                                                 echo form_dropdown('regionid', $regions, '#',$params);
                                                                ?> 
                                                            </div>
                                                        </div> <!--end CoP field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">City/Province: &nbsp;</label>
                                                            <div class="controls">
                                                                 <?php 
                                                                $params = 'id="cities"'; 
                                                                echo form_dropdown('cityid', $cities, '#', $params);
                                                                ?> 
                                                            </div>
                                                        </div> <!--end RGN field-->
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label">Zipcode: &nbsp;</label>
                                                            <div class="controls">
                                                                <input type="text" id="ZIP" name="ZIP" placeholder="" >
                                                            </div>
                                                        </div> <!--end Zip field-->
                                                       
                                                    </div> <!--end span-->
                                                </div> <!--end row-->
                                            
                                              </div>
                                            
                                            
                                		</div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                        <div class="tab-pane" id="tab2">
                        	<div class="well">
                            	<h5 class="media-heading">
                                	<img src="assets/img/icons/glyphicons_064_lightbulb.png" width="10"> Your Education	
                                </h5>
                                
                                 <div style="width:700px;height:70px;overflow:auto;margin-left:130px;"><!--start scrollable table-->
                                <table class="tableYE table-condensed" style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th class="span3"></th>
                                            <th class="span3"></th>
                                            <th class="span4"></th>
                                            <th class="span2"></th>
                                            <th class="span1"></th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    
                                   
                                    <tbody class="WorkE">
                                        <tr>
                                            <td>Technical Diploma</td>
                                            <td>TESDA</td>
                                            <td>Weldering</td>
                                            <td>2009 - 2010</td>
                                            <td><button class="btn btn-danger btn-mini">Delete</button></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Technical Diploma</td>
                                            <td>TESDA</td>
                                            <td>Electrician</td>
                                            <td>2009 - 2013</td>
                                            <td><button class="btn btn-danger btn-mini">Delete</button></td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                                </div><!--end scrollable table-->

                            </div>
                        
                        	<div class="well">
                        	<div class="form-horizontal4 qualiMarg">
                                        <div class="row-fluid">
                                            <div class="span7">
                                                <div class="control-group">
                                                    <label class="control-label lLabel2" style="margin-left:126px;">TESDA Course: &nbsp;</label>
                                                    <div class="controls">
                                                        <select>
                                                            <option>Baking</option>
                                                            <option>Weldering</option>
                                                        </select>
                                                    </div>
                                                </div> <!--end TC field-->
                                            </div><!--end span-->
                                            
                                            <div class="span5">
                                                <div class="control-group">
                                                    <label class="control-label lLabel2" style="margin-left:-84px;">Time Period: &nbsp;</label>
                                                    <div class="control-group"><!-- start div TP -->
                                                        <div class="myStyle12">
                                                            <input type="text" id="YRS" name="YRS"><strong> to </strong>
                                                            <input type="text" id="YRE" name="YRE">
                                                        </div>
                                                    </div>
                                                   </div> <!--end TP range field-->
                                            </div><!--end span-->
                                        </div><!--end row-fluid-->
                                    </div>
                                    
                                    <hr class="hrDicussBig">
                                    <div class="row-fluid">
                                    	<div class="span6">
                                        	<div class="well">
                                            	<h4 class="media-heading previewColor">
                                                    | CERTIFICATION/S
                                                </h4>
                                                
                                                <div class="myStyle2VD" align="right">
                                                    <select name="Industry">
                                                        <option>Choose Industry</option>
                                                        <option>Agriculture & Fishery</option>
                                                    </select>
                                                    
                                                    <select name="NC Level">
                                                        <option>NCI</option>
                                                        <option>NCII</option>
                                                    </select>
                                                </div>
                                        
                                        		<div style="width:455px;height:160px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC2 table-hover table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="span5" style="text-align:center;">Certificate Name</th>
                                                            <th class="span4" style="text-align:center;">Description</th>
                                                            <th class="span1" style="text-align:center;">Level</th>
                                                            <th class="span2" style="text-align:center;">Options</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC I
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires, Connect wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC II
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC III
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div><!--end scrollable-->
                                            </div><!--end well-->
                                        </div><!--end span-->
                                        
                                        <div class="span6">
                                        	<div class="well">
                                            	<h4 class="media-heading previewColor">
                                                    | YOUR CHOSEN CERTIFICATION/S
                                                </h4>
                                        
                                        		<div style="width:455px;height:180px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC2 table-hover table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="span5" style="text-align:center;">Certificate Name</th>
                                                            <th class="span3" style="text-align:center;">Description</th>
                                                            <th class="span1" style="text-align:center;">Level</th>
                                                            <th class="span3" style="text-align:center;">Options</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC I
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires, Connect wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC II
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC III
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div><!--end scrollable-->
                                            </div><!--end well cert-->
                                        </div><!--end span-->
                                    </div><!--end row-fluid-->
                                    
                                    <hr class="hrDicussBigA">
                                    <div class="row-fluid">
                                    	<div class="span6">
                                        	<div class="well">
                                            	<h4 class="media-heading previewColor">
                                                    | COMPETENCIES
                                                </h4>
                                                
                                        		<div style="width:455px;height:160px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC2 table-hover table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="span5" style="text-align:center;">Competency</th>
                                                            <th class="span4" style="text-align:center;">Description</th>
                                                            <th class="span1" style="text-align:center;">Level</th>
                                                            <th class="span2" style="text-align:center;">Options</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC I
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires, Connect wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC II
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC III
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div><!--end scrollable-->
                                            </div><!--end well-->
                                        </div><!--end span-->
                                        
                                        <div class="span6">
                                        	<div class="well">
                                            	<h4 class="media-heading previewColor">
                                                    | YOUR CHOSEN COMPETENCIES
                                                </h4>
                                        
                                        		<div style="width:455px;height:160px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC2 table-hover table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="span5" style="text-align:center;">Competency</th>
                                                            <th class="span3" style="text-align:center;">Description</th>
                                                            <th class="span1" style="text-align:center;">Level</th>
                                                            <th class="span3" style="text-align:center;">Options</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC I
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires, Connect wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC II
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Electrical Installation & Maintenance
                                                            </td>
                                                            
                                                            <td>
                                                                Install wires
                                                            </td>
                                                            
                                                            <td>
                                                                NC III
                                                            </td>
                                                            
                                                            <td>
                                                                 <button class="btn btn-mini actionPHMarg">
                                                                    <img src="assets/img/icons/glyphicons_191_circle_minus.png" width="12"> Remove
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div><!--end scrollable-->
                                                
                                            </div><!--end well-->
                                        </div><!--end span-->
                                    </div><!--end row-fluid-->
                                    
                                    <div class="row-fluid">
                                        <div align="right" style="margin-top:-10px;">
                                            <button class="btn btn-info btn-mini addEd">Add</button> 
                                        </div>
                                    </div><!--end row-->
                          	</div><!--end well-->
                            
                            <div class="well">
                            	<p class="boldEd">
                                    Others
                                </p>
                                <div class="form-horizontal2 fMarg" style="margin-left:280px;">
                                <div class="control-group">
                                  <label class="control-label">Educational Level: &nbsp;</label>
                                  <div class="controls">
                                      <select>
                                          <option value="null">Please choose</option>
                                          <option>None</option>
                                          <option>High School Graduate</option>
                                          <option>Technical Diploma</option>
                                          <option>College Graduate</option>
                                          <option>Master's Degree</option>
                                          <option>Doctorate Degree</option>
                                      </select>
                                  </div>
                              </div> <!--end EL field-->
                              
                              <div class="control-group">
                                  <label class="control-label">Institution: &nbsp;</label>
                                  <div class="controls">
                                      <input type="text" id="Inst" name="Inst" placeholder="School or University" >
                                  </div>
                              </div> <!--end Inst field-->
                              
                              <div class="control-group">
                                  <label class="control-label">Course: &nbsp;</label>
                                  <div class="controls">
                                      <input type="text" id="Crs" name="Crs" placeholder="" >
                                  </div>
                              </div> <!--end Crs field-->
                              
                              <div class="control-group">
                                  <label class="control-label">Time Period: &nbsp;</label>
                                  <div class="controls">
                                      <div class="row-fluid">
                                      <input class="span2 help-inline" type="text" id="SYr" name="SYr" placeholder="YYYY" >
                                      to
                                      <input class="span2 help-inline" type="text" id="EYr" name="EYr" placeholder="YYYY" >
                                      <a href="SUpJS.html" class="btn btn-mini btn-info addEd" style="margin-left:5px;margin-top:-8px">
                                          Add
                                      </a>
                                      </div> 
                                  </div>
                              </div> <!--end TP field-->
							</div>
                            </div><!--end well-->
                        </div><!--end educational background-->
                       
                        
                        <div class="tab-pane" id="tab3">
                        	<div class="row-fluid">
                            	<div class="span6">
                                	<div class="well">
                                    	<div class="form-horizontal2" style="margin-left:80px;margin-top:95px;margin-bottom:115px;">
                                        <div class="control-group">
                                            <label class="control-label lLabel2">Company Name: &nbsp;</label>
                                            <div class="controls">
                                                <input  class="input-medium companyname" type="text" id="companyname" name="companyname" placeholder="" >
                                            </div>
                                        </div> <!--end Company Name field-->
                                        
                                        <div class="control-group">
                                            <label class="control-label lLabel2">Position: &nbsp;</label>
                                            <div class="controls">
                                                <input  class="input-medium position" type="text" id="position" name="position" placeholder="" >
                                            </div>
                                        </div> <!--end Company Name field-->
                                        
                                        <div class="control-group">
                                            <label class="control-label lLabel2">Time Period: &nbsp;</label>
                                            <div class="controls">
                                                <div class="row-fluid">
                                                    <input class="span2 help-inline start" type="text" id="start" name="end" placeholder="YYYY" > to
                                                    <input class="span2 help-inline end" type="text" id="start" name="end" placeholder="YYYY" > &nbsp; 
                                                     <a  class="btn btn-mini" id="addtoItemWTable" style="margin-left:-8px;margin-top:-8px">
                                                        <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                       </a> 
                                                </div>               
                                            </div> 
                                            
                                        </div><!--end Time Period field-->
                                        
                                        </div>

                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	<div class="well">
                                    	<h5 class="media-heading">
                                        	| Your Work
                                        </h5>
                                    	<div style="width:470px;height:320px;overflow:auto;"><!--start scrollable table-->
                                        <table id="item_table" class="tableYE2 table-condensed" style="text-align:center">
                                            <thead>
                                                <tr>
                                                    <th class="span5">Company Name</th>
                                                    <th class="span4">Position</th>
                                                    <th class="span2">Start</th>
                                                    <th class="span2">End</th>
                                                   
                                                </tr>
                                            </thead>
                                            
                                              <input type="hidden" id="baseurl" value="<?php echo base_url()?>"/>
                                           
                                            <tbody class="WorkE">
                                             
                                                <tr><td>
                                                        
                                               <select id="cname" name= "cname[]" style="background-color:#f5f5f5; height:20em;width:100%" multiple="multiple"> </select>
                                             
                                                </td>
                                                
                                                 <td>
                                                <select id="position" name= "position[]" style="background-color:#f5f5f5; height:20em;width:100%" multiple="multiple"> </select>
                                                </td>
                                                  
                                                    <td>
                                                <select id="start" name= "start[]" style="background-color:#f5f5f5; height:20em;width:100%" multiple="multiple"> </select>
                                                </td>
                                                    
                                                      <td>
                                                <select id="end" name= "end[]" style="background-color:#f5f5f5; height:20em;width:100%" multiple="multiple"> </select>
                                                </td></tr>
                                           
                                                
                                            </tbody>
                                            
                                        </table>
                                </div><!--end scrollable table-->
                                    </div><!--end well-->
                                </div><!--end span-->
                            </div><!--end row-->
                        </div><!--end Work experience-->
                        
                </div> <!--end tab content-->
                </div> <!--end tabbable-->
                                 <div class="row-fluid">
                	<div class="pull-right">
                            
                    	<button type="submit" class="btn btn-primary">Done</button>
                        
                    </div>
                             </form>
                                		</div><!--end well-->
                
            </div><!--end well-->
        </div><!--end span-->
    </div><!--end row-->
    
    </div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="<?php echo base_url()?>assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="j<?php echo base_url()?>assets/bootstrap/s/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.min.js"></script>


<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.mousewheel-3.0.6.pack.js"></script>


<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.fancybox.pack.js?v=2.1.4"></script>

   <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/certification.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/competency.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/regions.js"></script>
 
<script type="text/javascript">

$(function(){ //WORK
 
 $('#addtoItemWTable').click(function(){
     
  var ctr = 0 ;

if(sessionStorage.counterInt == null){
    ctr = 0;
    
}else{
    ctr = sessionStorage.counterInt;
} 
var companyname= $('.companyname').val();
var position= $('.position').val();
var start= $('.start').val();
var end= $('.end').val();

var baseurl= $('#baseurl').val();

work = new Array();
work[0] = ctr;
work[1] = companyname; // question
work[2] = position; // question
work[3] = start; // question
work[4] = end; // question



var newRowContent = $("<tr><td>" + companyname + "</td>\
<td>" + position + "</td>\
<td>" + start + "</td>  \
<td>" + end + "</td>   \
<td><input type='button' class='btn btn-mini btn-danger' value='Delete'></td>\
</tr>");
$("#item_table tbody").append(newRowContent); 
$("#item_table").trigger("update");
$('.companyname').val('');
$('.position').val('');
$('.start').val('');
$('.end').val('');

$('input[type="button"]').click(function(){
   $(this).closest('tr').remove()
})

 $.ajax({               
                type: "POST",
                data: {work:work},
                url: baseurl+"main/add_workex",
                success: function(data){
                         alert(data);
                }
        });

  ctr++;
  sessionStorage.counterInt = ctr;
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

