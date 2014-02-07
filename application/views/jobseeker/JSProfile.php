<div class="modal hide fade" id="addW">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3 class="proDetCol media header">
                 <img src="assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
            </h3>

  	</div><!--end modal-header-->
	
    <div class="modal-body" align="center">
    	<div class="control-group"><!-- start div CoN -->
            <div class="myStyleEPrCN">
                <input type="text" id="CoN" name="CoN" placeholder="Company Name">
            </div>
        </div><!-- end CoN -->
        
        <div class="resWrkDet" style="margin-top:-10px;"><!--start course details-->
            <font class="resEdCrs">
                <div class="control-group"><!-- start div pos -->
                    <div class="myStyleEPrPOS">
                        Position:
                        <input type="text" id="pos" name="pos">
                    </div>
                </div><!-- end pos-->
                
                <div class="control-group"><!-- start div tp -->
                    <div class="myStyleEPrC">
                        Time Period:
                        <input type="text" id="tpS" name="tpS"> -
                        <input type="text" id="tpE" name="tpE">
                    </div>
                </div><!-- end tp-->
                                               
            </font>
        </div><!--end course details-->
                                        
    </div><!--end modal body-->
    
  	<div class="modal-footer"> 
  		<button class="btn btn-info" data-dismiss="modal">Add</button>
 	</div><!--end modal-footer-->
</div>
<!--end addWork-->

<!--start addEduc-->
<div class="modal hide fade" id="addE">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3 class="proDetCol media header">
                 <img src="assets/img/icons/glyphicons_332_certificate.png" width="15">
                 Educational Background
            </h3>

  	</div><!--end modal-header-->
	
    <div class="modal-body" >
    	<div class="form-horizontal2" style="margin-left:80px;margin-top:55px;margin-bottom:75px;">
        <div class="control-group">
            <label class="control-label lLabel2">Educational Level: &nbsp;</label>
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
            <label class="control-label lLabel2">Institution: &nbsp;</label>
            <div class="controls">
                <input  class="input-medium" type="text" id="Inst" name="Inst" placeholder="" >
            </div>
        </div> <!--end Inst field-->
        
        <div class="control-group">
          <label class="control-label lLabel2">Course: &nbsp;</label>
          <div class="controls">
              <input type="text" id="Crs" name="Crs" placeholder="" >
          </div>
      </div> <!--end Crs field-->
        
        <div class="control-group">
            <label class="control-label lLabel2">Time Period: &nbsp;</label>
            <div class="controls">
                <div class="row-fluid">
                    <input class="span2 help-inline" type="text" id="YrF" name="YrF" placeholder="YYYY" > to
                    <input class="span2 help-inline" type="text" id="YrT" name="YrT" placeholder="YYYY" > &nbsp; 
                    
                </div>               
            </div> 
            
        </div><!--end Time Period field-->
        
        </div>
    </div><!--end modal body-->
    
  	<div class="modal-footer"> 
  		<button class="btn btn-info" data-dismiss="modal">Add</button>
 	</div><!--end modal-footer-->
</div>
<!--end addEduc-->


    <div class="container">
    <div style="margin-left: 6%; margin-bottom:-75px;">
    <div class="row-fluid">    
	<div class="span11">
    	<div class="well">
        	
            <div class="row-fluid">
            	<div class="span12">
                	<div class="bigMarg2">
                    <hr class="hrPro">
                    	
                        <div class="row-fluid">
                        	
                        </div><!--end row-fluid-->
                    	<table class="tblMarg">
                        	<thead>
                            	<tr>
                                	<th class="span2"></th>
                                    <th class="span7"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                                <form method ="post" action ="<?php echo base_url()?>jobseeker/jobseeker_editprofile/">
                           
                            	<tr>
                                	<td>
                                    	<img src="<?php echo base_url()?>assets/img/user.png" class="thumbnail11">
                                    </td>
                                    
                                    <td>
                                        <div class="control-group"><!-- start div nm-->
                                            <div class="myStyleEPrN">
                                                <div class="lLabel4">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <img src="<?php echo base_url()?>assets/img/icons/glyphicons_352_nameplate.png" width="20"> &nbsp;
                                                NAME:
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php 
                                                foreach($jsdetails as $a)
                                                {
                                                ?>
                                                <input style="width:170px;" type="text" id="FN" name="FN" value="<?php echo $a['firstname'];
                                                    
                                                  ?>">
                                                
                                                   <input style="width:180px;" type="text" id="MN" name="MN" value="<?php echo $a['middlename'];
                                                   ?>">
                                                   
                                                    <input style="width:180px;" type="text" id="LN" name="LN" value="<?php echo $a['lastname'];
                                              
                                                   ?>">
                                                <?php 
                                                }
                                                ?>
                                                    </div>
                                            </div>
                                        </div><!-- end div name -->

                                        
                                        <div class="row-fluid">
                                        	<div class="span6">
                                            	<table class="proPIMarg">
                                            	<thead>
                                                	<tr>
                                                    	<th class="span4"></th>
                                                        <th class="span6"></th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="proPI">
                                                	<tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_024_parents.png" width="18"> SEX:
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div gender-->
                                                                <div class="myStyleEPr2">
                                                                <?php 
                                                                $sex = array("male"=>"Male","female" => "Female");
                                                                foreach($jsdetails as $a)
                                                                {
                                                                    if($a['ismale'] == 0)
                                                                    {
                                                                        echo form_dropdown('sex',$sex,'female');
                                                                    }
                                                                    else
                                                                    {
                                                                        echo form_dropdown('sex',$sex,'male');
                                                                    }
                                                                }
                                                                ?>
                                                                </div>
                                                            </div><!-- end div gender -->
                                                        	
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_278_birthday_cake.png" width="15">  BIRTHDAY:
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div bday -->
                                                                <div class="myStyleEPrB">
                                                                    <?php 
                                                                    foreach($jsdetails as $a)
                                                                    {
                                                                    ?>
                                                                    <input type="text" id="bday" name="bday" value ="<?php echo $a['birthday']?>">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div><!-- end bday-->
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="15"> CIVIL STATUS: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cs-->
                                                                <div class="myStyleEPr2">
                                                                       <?php 
                                                    echo form_dropdown('civstatus',array('Single' =>'Single', 'Married' =>'Married', 
                                                    'Widowed' => 'Widowed')) ?>
                                                                </div>
                                                            </div><!-- end div cs -->	
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            </div>
                                            
                                            <div class="span6">
                                            	<table class="proPIMarg3">
                                            	<thead>
                                                	<tr>
                                                    	<th class="span4"></th>
                                                        <th class="span7"></th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="proPI">
                                                	<tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_163_iphone.png" width="11"> CONTACT NUMBER: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cn -->
                                                                <div class="myStyleEPr">
                                                                    <?php 
                                                                    foreach($jsdetails as $a)
                                                                    {
                                                                    ?>
                                                                    <input type="text" id="CN" name="CN" value="<?php echo $a['cellno'];?>">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div><!-- end cn -->	
                                                        </td>
                                                    </tr>
                                                	
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_419_e-mail.png" width="15"> EMAIL: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div em -->
                                                                <div class="myStyleEPr">
                                                                  
                                                                    <input type="text" id="em" name="em" value="<?php echo $email?>">
                                                                
                                                                </div>
                                                            </div><!-- end em -->	
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_087_log_book.png" width="15"> ADDRESS:
                                                        </td>
                                                        
                                                        <td>
                                                                <?php 
                                                                foreach($jsdetails as $a)
                                                                {
                                                                ?>
                                                        	<textarea rows="3" class="myStyleEPr3"><?php echo $a['brgy'];
                                                                echo ' ';
                                                                echo $a['district'];
                                                                echo ' ';
                                                                echo $a['cityprov'];?></textarea>
                                                                <?php
                                                                }
                                                                ?>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            </div>
                                        </div><!--end row-fluid-->
                                      
                                    </td>
                                </tr>
                                <div class="pull-right ">
                            	<button type="submit" class="btn btn-primary btn-mini">Done</button>
                            </div>
                                </form>
                            </tbody>
                        </table>
                        
                        <hr class="hrPro">
                        
                        	<div class="row-fluid">
                            	<div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                            <img src="<?php echo base_url()?>assets/img/icons/glyphicons_332_certificate.png" width="15">
                                            Educational Background
                                        </h4>
                                        
                                         <div class="row-fluid">
                                            <div class="pull-right" style="margin-top:-30px;">
                                                <a href="#addE" data-toggle="modal" class="btn btn-info btn-mini">Add</a>
                                            </div>
                                        </div><!--end row-fluid-->
                                        
                                        <div style="width:510px;height:280px;overflow:auto;"><!--start scrollable table-->
                                         <font class="resEdHead2">
                                              TESDA
                                          </font>
                                        <table class="table-condensed table-bordered certTb">
                                            <thead>
                                                <tr>
                                                    <th class="span3">CERTIFICATE/S</th>
                                                    <th class="span5">COMPETENCIES</th>
                                                    <th class="span1">YEAR</th>
                                                </tr>
                                            </thead>
                                            
                                             <tbody>
                                                <?php 
                                                foreach ($cert as $a)
                                                {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $a['ncname']?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php echo $a['description']?>
                                                    </td>
                                                    
                                                    <td>
                                                    	<?php echo $a['dateacquired']?>
                                                    </td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                            </tbody>
                                         </table>
                                          <br>
                                          <?php 
                                      foreach($educ as $a)
                                      {
                                          if($a['schoolname'] != "TESDA")
                                          {
                                      ?>
                                          <strong>
                                              <?php echo $a['schoolname']?>
                                          </strong>

                                          <div class="resEdDet2"><!--start course details-->
                                              <strong>
                                                  Course: <?php echo $a['course']?>
                                              </strong>

                                              <font class="resEdYear">
                                                  &nbsp;<?php echo $a['startyear']?> - <?php echo $a['endyear']?> <br>
                                              </font>

                                              <div class="resEdSCC"> <!--start div SCC-->
                                                 Level: <?php echo $a['level']?><br>
                                              </div>
                                              <!--end div SCC-->
                                          </div>
                                      <?php 
                                          }
                                      }
                                      ?>    
                                        </div><!--end scrollable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                        	 <img src="<?php echo base_url()?>assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                                        </h4>
                                        
                                        <div class="row-fluid">
                                            <div class="pull-right" style="margin-top:-30px;">
                                                <a href="#addW" data-toggle="modal" class="btn btn-info btn-mini">Add</a>
                                            </div>
                                        </div><!--end row-fluid-->
                                        
                                        <div style="width:510px;height:280px;overflow:auto;"><!--start scrollable table-->
                                         <?php
                                        foreach($work as $a)
                                        { 
                                            echo '<strong>';
                                            echo $a['companyname'];
                                        echo '</strong>
                                        
                                        <br>
                                        <div class="resWrkDet"><!--start course details-->
                                            <font class="resEdCrs">
                                                Position: ';
                                        echo $a['position'];
                                         echo '</font>
                                            
                                            <font class="resEdYear">
                                                &nbsp;';
                                        echo $a['start'];
                                        echo '-';
                                        if ($a['present'] == 0)
                                            echo $a['end'];
                                        else echo 'Present';
                                        
                                        echo '<br></font></div>'
                                            ;
                                                }
                                                ?>
                                        <div class="control-group"><!-- start div CoN -->
                                            <div class="myStyleEPrCN">
                                                <input type="text" id="CoN" name="CoN" placeholder="Company Name">
                                            </div>
                                        </div><!-- end CoN -->
                                        
                                        <div class="resWrkDet" style="margin-top:-10px;"><!--start course details-->
                                            <font class="resEdCrs">
                                                <div class="control-group"><!-- start div pos -->
                                                    <div class="myStyleEPrPOS">
                                                    	Position:
                                                        <input type="text" id="pos" name="pos">
                                                    </div>
                                                </div><!-- end pos-->
                                                
                                                <div class="control-group"><!-- start div tp -->
                                                    <div class="myStyleEPrC">
                                                    	Time Period:
                                                        <input type="text" id="tpS" name="tpS"> -
                                                        <input type="text" id="tpE" name="tpE">
                                                    </div>
                                                </div><!-- end tp-->
                                               
                                            </font>
                                        </div><!--end course details-->
                                        
                                        <br>
                                        
                                        
                                        
                                        
                                        
                                       </div><!--end scrollable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                            </div> <!--end row-fluid-->
                        	
                            
                           
                           </div><!--end scrollable-->
                    </div><!--end well-->
                </div><!--end span-->
            </div><!--end row-fluid-->
       	 
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    </div> <!--end div-->
    </div> <!--end container-->
 
 <!-- END OF CONTENT -->   
        
        

 
   
   </body>
   <br>
   <br>
    <br>
   <br>
    <br>
   <br>