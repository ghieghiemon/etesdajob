<div class="modal hide fade" id="addW">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3 class="proDetCol media header">
                 <img src="assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
            </h3>

  	</div><!--end modal-header-->
	
    <div class="modal-body" align="center">
    
          <form method ="post" action ="<?php echo base_url()?>jobseeker/jobseeker_addwork/">
        <div class="resWrkDet" style="margin-top:-10px;"><!--start course details-->
            <br>
          	<div class="control-group"><!-- start div CoN -->
            <div class="myStyleEPrCN">
                  <font class="resEdCrs">
                Company:
                   <input type="text" id="COMP" name="COMP" placeholder="" >
            </div>
        </div><!-- end CoN -->
        
                <div class="control-group"><!-- start div pos -->
                    <div class="myStyleEPrPOS">
                        Position:
                       <input type="text" id="POS" name="POS" placeholder="" >
                    </div>
                </div><!-- end pos-->
                
                <div class="control-group"><!-- start div tp -->
                    <div class="myStyleEPrC">
                        Time Period:
                        <input class="span2 help-inline" type="text" id="WSY1" name="WSY1" placeholder="YYYY" >  -
                                                                <input class="span2 help-inline" type="text" id="WEY1" name="WEY1" placeholder="YYYY" >
                    </div>
                </div><!-- end tp-->
                                               
            </font>
        </div><!--end course details-->
                                        
    </div><!--end modal body-->
    
  	<div class="modal-footer"> 
  		<button type="submit" class="btn btn-info">Add</button>
                </form>
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
          <form method ="post" action ="<?php echo base_url()?>jobseeker/jobseeker_addeduc/">
              
    	<div class="form-horizontal2" style="margin-left:80px;margin-top:55px;margin-bottom:75px;">
        <div class="control-group">
            <label class="control-label lLabel2">Educational Level: &nbsp;</label>
            <div class="controls">
                <?php $att = ' id="LVL1" id="LVL1" class="LVL1"'; 
                                                 echo form_dropdown('LVL1',array('None' =>'None', 
                                                'High School Graduate' => 'High School Graduate', 
                                                 'Technical Diploma'=> 'Technical Diploma',
                                                 'College Graduate'=>'College Graduate',
                                                      'Masters Degree' =>'Masters Degree',
                                                'Doctorate Degree'=>'Doctorate Degree'),'',$att) ?>
            </div>
        </div> <!--end EL field-->
        
        <div class="control-group">
            <label class="control-label lLabel2">Institution: &nbsp;</label>
            <div class="controls">
               <input type="text" id="IN1" name="IN1" placeholder="" >
            </div>
        </div> <!--end Inst field-->
        
        <div class="control-group">
          <label class="control-label lLabel2">Course: &nbsp;</label>
          <div class="controls">
                <input type="text" id="CO1" name="CO1" placeholder="" >
          </div>
      </div> <!--end Crs field-->
        
        <div class="control-group">
            <label class="control-label lLabel2">Time Period: &nbsp;</label>
            <div class="controls">
                <div class="row-fluid">
                    <input class="span2 help-inline" type="text" id="SY1" name="SY1" placeholder="YYYY" > to
                     <input class="span2 help-inline" type="text" id="EY1" name="EY1" placeholder="YYYY" > &nbsp; 
                </div>               
            </div> 
            
        </div><!--end Time Period field-->
        
        </div>
    </div><!--end modal body-->
    
  	<div class="modal-footer"> 
            	<button type="submit" class="btn btn-info">Add</button>
  		<!--<button class="btn btn-info" data-dismiss="modal">Add</button>-->
                </form>
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
                                    	   <?php foreach ($jsdetails as $a)
                                    {
                                    ?>
                                    	<img src="<?php echo base_url()?>profilepics/<?php echo $a['profile_pic']?>" class="thumbnail11">
                                    <?php
                                    }
                                    ?>
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
                                                                             <input style="width:170px;" type="text" id="SN" name="SN" value="<?php echo $a['streetno'];
                                                    
                                                  ?>"><strong> Unit/Street  </strong>
                                                               <input style="width:170px;" type="text" id="brgy" name="brgy" value="<?php echo $a['brgy'];
                                                    
                                                  ?>">
                                                        	<strong> Brgy.  </strong>
                                                                 <input style="width:170px;" type="text" id="dis" name="dis" value="<?php echo $a['district'];
                                                    
                                                  ?>">
                                                        	<strong> District  </strong>
                                                                 <input style="width:170px;" type="text" id="cityid" name="cityid" value="<?php echo $a['cityprov'];
                                                    
                                                  ?>">
                                                        	<strong> City/ Prov</strong>
                                                                
                                                          
                                                        </td>
                                                               <br>
                                                               
                                                    </tr>
                                                          </tbody>
                                                          </table>
                                                                            <hr class="hrPro">
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
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="15"> Reference 1: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cs-->
                                                                <div class="myStyleEPr2">
                                            <input style="width:170px;" type="text" id="ref1name" name="ref1name" value="<?php echo $a['ref1name'];
                                                    
                                                  ?>"><strong> Name</strong>
                                               <input style="width:170px;" type="text" id="ref1contact" name="ref1contact" value="<?php echo $a['ref1contact'];
                                                    
                                                  ?>"><strong> Contact No.</strong>
                                                  <input style="width:170px;" type="text" id="ref1relation" name="ref1relation" value="<?php echo $a['ref1relation'];
                                                    
                                                  ?>"><strong> Rel.</strong>
                                                                </div>
                                                            </div><!-- end div cs -->	
                                                        </td>
                                                    </tr>
                                                               <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="15"> Reference 2: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cs-->
                                                                <div class="myStyleEPr2">
                                            <input style="width:170px;" type="text" id="ref2name" name="ref2name" value="<?php echo $a['ref2name'];
                                                    
                                                  ?>"><strong> Name</strong>
                                               <input style="width:170px;" type="text" id="ref2contact" name="ref2contact" value="<?php echo $a['ref2contact'];
                                                    
                                                  ?>"><strong> Contact No.</strong>
                                                  <input style="width:170px;" type="text" id="ref2relation" name="ref2relation" value="<?php echo $a['ref2relation'];
                                                    
                                                  ?>"><strong> Rel.</strong>
                                                                </div>
                                                            </div><!-- end div cs -->	
                                                        </td>
                                                    </tr>
       <?php
                                                                }
                                                                ?>
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
                                            <br>
                                            <table>
                                                    <?php 
                                                                foreach($jsdetails as $a)
                                                                {
                                                                ?>
                                               <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/img/icons/glyphicons_248_asterisk.png" width="15"> Reference 1: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cs-->
                                                                <div class="myStyleEPr2">
                                            <input style="width:170px;" type="text" id="ref1name" name="ref1name" value="<?php echo $a['ref1name'];
                                                    
                                                  ?>">
                                                                </div>
                                                            </div><!-- end div cs -->	
                                                        </td>
                                                    </tr>
                                                    
                                                                <?php
                                                                }
                                                                ?>
                                                    </table>
<!--                                        <div class="control-group"> start div CoN 
                                            <div class="myStyleEPrCN">
                                                
                                                <input type="text" id="CoN" name="CoN" placeholder="Company Name">
                                            </div>
                                        </div> end CoN 
                                        
                                        <div class="resWrkDet" style="margin-top:-10px;">start course details
                                            <font class="resEdCrs">
                                                <div class="control-group"> start div pos 
                                                    <div class="myStyleEPrPOS">
                                                    	Position:
                                                        <input type="text" id="pos" name="pos">
                                                    </div>
                                                </div> end pos
                                                
                                                <div class="control-group"> start div tp 
                                                    <div class="myStyleEPrC">
                                                    	Time Period:
                                                        <input type="text" id="tpS" name="tpS"> -
                                                        <input type="text" id="tpE" name="tpE">
                                                    </div>
                                                </div> end tp-->
                                               
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