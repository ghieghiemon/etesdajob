
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
                        	<div class="pull-right ">
                            	<a href="#" class="btn btn-primary btn-mini">Done</a>
                            </div>
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
                                	<td>
                                    	<img src="<?php echo base_url()?>assets/bootstrap/img/a10.jpg" class="thumbnail11">
                                    </td>
                                    
                                    <td>
                                        <div class="control-group"><!-- start div nm-->
                                            <div class="myStyleEPrN">
                                                <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_352_nameplate.png" width="20"> &nbsp;
                                                <input type="text" id="nm" name="nm">
                                            </div>
                                        </div><!-- end div name -->

                                        
                                        <div class="row-fluid">
                                        	<div class="span12">
                                            	<table class="proPIMarg" style="margin-left:-5px;">
                                            	<thead>
                                                	<tr>
                                                    	<th class="span2"></th>
                                                        <th class="span3"></th>
                                                        <th class="span3"></th>
                                                        <th class="span3"></th>
                                                        <th class="span2"></th>
                                                        <th class="span3"></th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="proPI">
                                                	<tr>
                                                    	<td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="15">  INDUSTRY:
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div IND-->
                                                                <div class="myStyleEPr2">
                                                                    <select>
                                                                        <option>Information & Technology</option>
                                                                    </select>
                                                                </div>
                                                            </div><!-- end div IND -->
                                                        	
                                                        </td>
                                                        
                                                        <td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_419_e-mail.png" width="15"> COMPANY EMAIL: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div ce-->
                                                                <div class="myStyleEPrB">
                                                                    <input type="text" id="ce" name="ce">
                                                                </div>
                                                            </div><!-- end div ce-->
                                                        	
                                                        </td>
                                                        
                                                        <td class="lLabel4">
                                                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_087_log_book.png"  width="15"> CONTACT NO: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cn-->
                                                                <div class="myStyleEPrB">
                                                                    <input type="text" id="cn" name="cn">
                                                                </div>
                                                            </div><!-- end div cn-->
                                                        	
                                                        </td>
                                                    </tr>
                                              </tbody>
                                              </table>
                                              <table class="proPIMarg" style="margin-left:-5px;">
                                              <thead>
                                                  <tr>
                                                      <th class="span2"></th>
                                                      <th class="span3"></th>
                                                      <th class="span3"></th>
                                                      <th class="span3"></th>
                                                      <th class="span2"></th>
                                                      <th class="span3"></th>
                                                  </tr>
                                              </thead>
                                              
                                              <tbody class="proPI">
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	ADDRESS
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div ADD -->
                                                                <div class="myStyleEPrN">
                                                                    <input type="text" id="ADD" name="ADD">
                                                                </div>
                                                            </div><!-- end ADD-->
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	CONTACT PERSON
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div ADD -->
                                                                <div class="myStyleEPrN">
                                                                    <input type="text" id="ADD" name="ADD">
                                                                </div>
                                                            </div><!-- end ADD-->
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
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
                                        <textarea class="span12" rows="3"></textarea>
                                        </div><!--end scrollable-->
                                        
                                        <h4 class="proDetCol media header">
                                        	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_045_calendar.png" width="20"> Events
                                        </h4>
                                        
                                        <div style="width:590px;height:100px;overflow:auto;" class="PProfE2" ><!--start scrollable table-->
                                        
                                        	<a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/b1.jpg" class="PProfE"/></a>
                                            <a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/b2.jpg" class="PProfE"/></a>
                                               
                                        </div> <!--end scrillable-->
                                        
                                        <h4 class="proDetCol media header">
                                        	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_043_group.png" width="25"> Leagues
                                        </h4>
                                        
                                         <div style="width:590px;height:100px;overflow:auto;" class="PProfE2" ><!--start scrollable table-->
                                        
                                        	<a href=""><img src="<?php echo base_url()?>assets/bootstrap/img/b3.jpg" class="PProfE"/></a>
                                               
                                        </div> <!--end scrillable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	<div class="well wellMarg">
                                    	
                                        <div style="width:600px;height:388px;overflow:auto;"><!--start scrollable table-->
                                        	<h4 class="media-heading">
                                            	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_264_vcard.png" width="25" height="15"> Job Market |
                                                <font class="pJTitle2">
                                                    Posted Vacancies
                                                </font>
                                             </h4>
											
                                            <table class="table-condensed table-striped" width="530px">
                                                <thead>
                                                    <tr>
                                                        <th class="span3" style="text-align:center">Job Title </th>
                                                        <th class="span3" style="text-align:center">Location</th>
                                                        <th class="span4" style="text-align:center">Effectivity</th>
                                                        <th class="span1" style="text-align:center"></th>
                                                        <th class="span1" style="text-align:center"></th>
                                                        <th class="span1" style="text-align:center">Action</th>
                                                    <tr>
                                                </thead>
                                                
                                                <tbody class="recName">
                                                    <tr>
                                                        <td>
                                                            Animator 
                                                        </td>
                                                        
                                                        <td>
                                                        	NCR | Makati City
                                                        </td>
                                                        
                                                        <td>
                                                            09/23/2013 to 10/28/2013
                                                        </td>
                                                        
                                                        <td>
                                                            <span class="label label-info">5 Applied</span>
                                                        </td>
                                                        
                                                        <td>
                                                            <span class="label">20 Left</span>
                                                        </td>
                                                        
                                                        <td>
                                                        	<a href="#signIn" data-toggle="modal" class="btn btn-info btn-mini">
                                                            	Apply
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            Mobile App Developer 
                                                        </td>
                                                        
                                                        <td>
                                                        	NCR | Pasig City
                                                        </td>
                                                        
                                                        <td>
                                                            09/12/2013 to 10/26/2013
                                                        </td>
                                                        
                                                        <td>
                                                            <span class="label label-info">1 Applied</span>
                                                        </td>
                                                        
                                                        <td>
                                                            <span class="label">5 Left</span>
                                                        </td>
                                                        
                                                        <td>
                                                        	<a href="#signIn" data-toggle="modal" class="btn btn-info btn-mini">
                                                            	Apply
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>

                                        
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
        
        

 <!-- FOOTER -->           
        
 