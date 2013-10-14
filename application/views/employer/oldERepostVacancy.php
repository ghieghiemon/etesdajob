<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/regions.js"></script>

<!--update vacancy modal start-->

<div class="modal hide fade" id="pubV">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">x</a>
    <h3>Vacancy Preview</h3>
  </div>

<div class="modal-body">
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
                                      Effectivity: 
                                  </td>
                                  
                                  <td>
                                      <font class="previewDet2">
                                      <span id="effect" name="effect"></span>
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
                                      Male
                                      </font>
                                  </td>
                              </tr>
                              
                              <tr>
                                  <td class="previewDet">
                                      Age Range:
                                  </td>
                                  
                                  <td>
                                 <font class="previewDet2">
                                      25-40 
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
                   
                </div><!--end span-->
                
               
            </div><!--end row-fluid-->
</div>
  
  <div class="modal-footer">
  <button id="repost" class="btn btn-info" >Update</button>
    <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  </div>
</div>
<!--update vacancy modal end-->

<!--Update yes or no modal start-->
<div class="modal hide fade" id="update">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">x</a>
    <h3></h3>
  </div>

<div class="modal-body">
<p class="delete"><strong>
                        The selected job vacancy is still active. 
                                Continuing will update the details of the current vacancy.
                                Would you like to continue?</strong></p>
        
</div>
 
    <div class="modal-footer">
    <div class="pull-right" style="text-align:center">
    <button class="btn  btn-info">Yes</button>
        <a href="#" class="btn" data-dismiss="modal">Cancel</a> 
        </div> 
    </div>
</div>
<!--Update yes or no modal end-->


               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%; margin-bottom:-7%">
    
<div class="row-fluid">
    <div class="span12">
        <div class="well">
                    <?php
                        foreach($jobdetails as $a)
                        {
                    ?>
                 <form method="post" action="<?php echo base_url()?>main/employer_checkvalidrepost" id="publish">   
            <h3 class="media-heading vName">
                    <img src="assets/img/icons/glyphicons_264_vcard.png" width="25"> 
                    <?php
                    echo $a['jobtitle'];
                    ?>
                    </h3>
                    <input type="hidden" name="jobtitle" id="jobtitle" value="<?php echo $a['jobtitle']?>">
                <input type="hidden" name="jobno" id="jobno" value="<?php echo $a['jobno']?>">
                
                <div class="row-fluid">
                    <div align="right">
                        <a id="pub" data-toggle="modal" href="#pubV" class="btn btn-primary pubVMarg2" data-dismiss="modal">
                       
                            Update Vacancy
                        </a>
                    </div>
                <!--end publish button-->
                <hr class="hrPV2">
                
            <div class="tabbable tabs-left PVDetMarg"> <!-- start tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active rTabLink"><a href="#tab1" data-toggle="tab">Summary</a></li>
                        <li class="rTabLink"><a href="#tab2" data-toggle="tab">Qualifications</a></li>
                    </ul>
          
                    <div class="tab-content"> <!--start tab content-->
                        <div class="tab-pane active" id="tab1">
                        <div style="width:1080px;height:360px;overflow:auto;"><!--start scrollable table-->
                            <div class="row-fluid">
                                <div class="span12">
                                <div class="well">
                                        <div  style="margin-bottom:-5px;">
                                            <h5 class="media-heading previewColor">| DETAILS</h5> 
                                          
                                                  <div class="row-fluid">
                                                    <div class="span6">
                                                        <table class="vdTableMarg">
                                                          <thead>
                                                              <tr>
                                                                  <th class="span4" style="text-align:center"></th>
                                                                  <th class="span5" style="text-align:center"></th>
                                                                  <th class="span1" style="text-align:center"></th>
                                                              </tr>
                                                          </thead>
                                                          
                                                          <tbody class="recName">
                                                              <tr>
                                                                <td class="vdDesc">
                                                                    Date Posted:
                                                                </td>
                                                                
                                                                <td>
                                                                    09/23/2013
                                                                    <br>
                                                                    <font class="vEditDate2">
                                                                        Last edited: 09/23/2013
                                                                    </font>
                                                                    
                                                                </td>
                                                                
                                                                <td>
                                                                </td>
                                                              </tr>
                                                              
                                                               <tr>
                                                                <td class="vdDesc">
                                                                    Status:
                                                                </td>
                                                                
                                                                <td>
                                                                    <p class="statMarg">
                                                                    ACTIVE
                                                                    </p>
                                                                </td>
                                                                
                                                                <td>
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td class="vdDesc">
                                                                    Effectivity:
                                                                </td>
                                                                
                                                                <td class="myStyle2EditV">
                                                                   <?php 
                                                                $options = array(
                                                                '2'  => '2 weeks',
                                                                '3'  => '3 weeks',
                                                                '4'  => '4 weeks',

                                                                );
                                                                $js = 'id="effectivity"';
                                                                echo form_dropdown('effectivity', $options, '2', $js);

                                                                ?>
                                                                </td>
                                                                
                                                                <td>
                                                                    
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td class="vdDesc">
                                                                    Description:
                                                                </td>
                                                                
                                                                <td class="myStyle3EditV">
                                                                   <textarea id="desc" name="desc" rows="6"></textarea> 
                                                                </td>
                                                                
                                                                <td>
                                                                    
                                                                </td>
                                                              </tr>        
                                                          </tbody>
                                                      </table> 
                                                    </div><!--end span-->
                                                    
                                                    <div class="span6">
                                                        <strong style="margin-left:70px;">Location</strong>
                                                        <table>
                                                          <thead>
                                                              <tr>
                                                                  <th class="span4" style="text-align:center"></th>
                                                                  <th class="span5" style="text-align:center"></th>
                                                                  <th class="span1" style="text-align:center"></th>
                                                              </tr>
                                                          </thead>
                                                          
                                                          <tbody class="recName">
                                                              <tr>
                                                                <td class="vdDesc">
                                                                    Region:
                                                                </td>
                                                                
                                                                <td class="myStyle2EditV">
                                                                <?php $regions['#'] = 'Please Select'; ?>
                                                                <?php $cities['#'] = 'Please Select'; ?>
                                                                <?php $params = 'id="regions"'; 
                                                                echo form_dropdown('regionid', $regions, '#',$params);
                                                                ?> 
                                                                </td>
                                                                
                                                                <td>
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td class="vdDesc">
                                                                    City:
                                                                </td>
                                                                
                                                                <td class="myStyle2EditV">
                                                                <?php 
                                                                $params = 'id="cities"'; 
                                                                echo form_dropdown('cityid', $cities, '#', $params);
                                                                ?> 
                                                                </td>
                                                                
                                                                <td>
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td class="vdDesc">
                                                                    Vacancies Left:
                                                                </td>
                                                                
                                                                <td class="myStyleEditV">
                                                                    <input type="number" id="NOV">
                                                                </td>
                                                                
                                                                <td>
                                                                </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                    </div><!--end span-->
                                                  </div><!--end row-fluid-->
                                </div>
                                </div><!--end well-->
                                        
                                        <div class="well">
                                    <h5 class="media-heading previewColor">| STATUS</h5>
                                        <font class="vdDesc2">
                                            Unscreened, Screeened, Exam, Interview, Hired
                                            </font>
                                    </div><!--end well-->
                                    </div><!--end span-->
                                </div><!--end row-fluid-->
                            </div><!--end scrollable table-->
                            
                        </div> <!--end tab pane general info-->
                        
                        <div class="tab-pane" id="tab2">
                            <div class="row-fluid">
                            <div class="span12">
                                <div class="well">
                                    <div class="form-horizontal4 qualiMarg">
                                        <div class="row-fluid">
                                            <div class="span7">
                                                <div class="control-group">
                                                    <label class="control-label lLabel2" style="margin-left:126px;">Sex: &nbsp;</label>
                                                    <div class="controls">
                                                        
                                                          <?php 
                                                                $options = array(
                                                                '0'  => 'Female',
                                                                '1'  => 'Male',
                                                                '2'  => 'Both',

                                                                );
                                                                $js = 'id="sex"';
                                                                echo form_dropdown('sex', $options, '1', $js); ?>
                                                        
                                                    </div>
                                                </div> <!--end sex field-->
                                            </div><!--end span-->
                                            
                                            <div class="span5">
                                                <div class="control-group">
                                                    <label class="control-label lLabel2" style="margin-left:-84px;">Age Range: &nbsp;</label>
                                                    <div class="control-group"><!-- start div age -->
                                                        <div class="myStyle12">
                                                            <input type="text" id="ageto" name="ageto"><strong> to </strong>
                                                            <input type="text" id="agefrom" name="agefrom">
                                                        </div>
                                                    </div>
                                                   </div> <!--end age range field-->
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
                                        
                                        <div style="width:498px;height:160px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC table-hover table-condensed">
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
                                        
                                        <div style="width:498px;height:180px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC table-hover table-condensed">
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
                                                </div>                                                            </div><!--end scrollable-->
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
                                                
                                        <div style="width:498px;height:160px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC table-hover table-condensed">
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
                                        
                                        <div style="width:498px;height:160px;overflow:auto;"><!--start scrollable table-->
                                                <table class="tableCC table-hover table-condensed">
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
                                    <?php
                                    }
                                    ?>
                                    </form>
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
</div><!--End Container fluid-->

     <hr>
     <input type="hidden" id="urlcommand" value="<?php echo base_url("main/employer_checkvalidrepost"); ?>" />

 
<script type="text/javascript">
    $(document).ready(function(){
       
        // Okay ngayon gumagana na, ganito mangyayari
        // 1. Pag ni click ni USER yun PUBLISH VACANCY, tatawagin nun system itong function na ito 
        // (yun nasa baba)
        // 2. Yun function na yun, nandoon yun paglipat mo ng entries from page's form to modal's form
        // 3. Wait papakita ko example'
        // browser
        
        $("#pub").click(function(){
            
           $("#jobname").html($("#jobtitle").val());
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
          
                var v = $('#urlcommand').val();
                
                $('#repost').click(function(){
                               $.ajax({
                                        url : v,                        
                                        type: 'post',                   
                                        dataType: 'json',
                                        success : function(data) { 
                                        if(data.result == 'true'){
                                           alert('Repost Successful'); 
                                        
                                        } else { 
                                            $('#pubV').modal('hide');
                                            $("#update").modal('show');
                                        }
                                }
                });
            });
                });

</script>