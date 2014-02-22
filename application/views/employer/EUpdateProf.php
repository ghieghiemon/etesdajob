
<!--start addWork-->
<div class="modal hide fade" id="addW">
  	<div class="modal-header">
  			<a class="close" data-dismiss="modal">x</a>
			<h3 class="proDetCol media header">
                 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
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
                 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_332_certificate.png" width="15">
                 Educational Background
            </h3>

  	</div><!--end modal-header-->
	
    <div class="modal-body" >
    	<form class="form-horizontal2" style="margin-left:80px;margin-top:55px;margin-bottom:75px;">
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
        
        </form>
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
                            	<tr>
                                     <?php
                                        foreach($profile as $a)
                                        {
                                            ?>
                                	<td>
                                    	<img src="<?php echo base_url()?>employerpics/<?php echo $a['companypic']?>" class="thumbnail11">
                                    </td>
                                    
                                    <td>
                                        <div class="control-group"><!-- start div nm-->
                                            <div class="myStyleEPrN">
                                                       <form method ="post" action ="<?php echo base_url()?>employer/employer_editprofile/">
                                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> &nbsp;
                               
                                         
                  <div class="pull-right ">
<button type="submit" class="btn btn-primary btn-mini">Done</button>
</div>                               

                                                <input type="text" id="CName" name="CName" value="<?php echo $a['companyName']?>">
                                                 
                                            </div>
                                        </div><!-- end div name -->

                                        
                                        <div class="row-fluid">
                                        	<div class="span12">
                                            	<table class="proPIMarg" style="margin-left:-5px;">
                                          
                                                
                                              
                                                	<tr>
                                                        
                                                        <td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_419_e-mail.png" width="15"> COMPANY EMAIL: 
                                                        </td>
                                                        
                                                        <td>
                                                        	
                                                                <div class="myStyleEPrB">
                                                                    <input  style="width:100%" type="text" id="CE" name="CE" value="<?php echo $a['companyEmail']?>">
                                                                </div>
                                                           
                                                        	
                                                        </td>
                                              
                                                        
                                                        <td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_087_log_book.png"  width="15"> CONTACT NO: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cn-->
                                                                <div class="myStyleEPrB">
                                                                    <input style="width:100%" type="text" id="CN" name="CN" value="<?php echo $a['companyContact']?>">
                                                                </div>
                                                            </div><!-- end div cn-->
                                                        	
                                                        </td>
                                                    </tr>
                                       
                                              </table>

                                              <table class="proPIMarg" style="margin-left:-5px;">
                                          
                                              
                                          
                                                         <tr>
                                                    	<td class="lLabel4">
                                                        	CONTACT PERSON:
                                                        </td>
                                                        <br>
                                                        <td>
                                                        	
                                                                    <input type="text" id="CP" name="CP" value="<?php echo $a['companyContactPerson']?>">
                                                           
                                                        </td>
                                          
                                                    	<td class="lLabel4">
                                                        	ADDRESS
                                                        </td>
                                                        
                                                        <td>
                                                        	
                                                                <div class="myStyleEPrN">
                                                                          <textarea type="text" rows="4" id="Br" name="Br"><?php echo $a['companyLocations']?></textarea>
                                                                   
                                                                </div>
                                                          
                                                        </td>
                                                    </tr>
                                                    
                                             
                                                    
                                              
                                            </table>
                                            </div>
                                            
                                            
                                        </div><!--end row-fluid-->
                                      
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        
                        <hr class="hrPro">
                        
                        	<div class="row-fluid">
                            	<div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                            <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_263_bank.png" width="20">
                                            Company Background
                                        </h4>
                                        
                                        <div style="width:500px;height:80px;overflow:auto;"><!--start scrollable table-->
                                        <textarea id="CB" name="CB" class="span12" rows="3" ><?php echo $a['companyBG']?></textarea>
                                        </div><!--end scrollable-->
                                        <?php
                                        }
                                            ?>
                                    
                                        

                                        
                                        
                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	
                                </div><!--end span-->
                            </div> <!--end row-fluid-->
                        	
                            
                           
                           </div><!--end scrollable-->
                    </div><!--end well-->
                </div><!--end span-->
            </div><!--end row-fluid-->
       	 
    	</div><!--end well-->
   	</div> <!--end span12-->
        

</form>
                                                
    </div> <!--end row-->
    </div> <!--end div-->
    </div> <!--end container-->
    <br>
    <br>
    <br>
     <br>
    <br>
 
 
 <!-- END OF CONTENT -->   
        
        

 <!-- FOOTER -->           
        
 