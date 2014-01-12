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
                                    	<img src="assets/img/user.png" class="thumbnail11">
                                    </td>
                                    
                                    <td>
                                        <div class="control-group"><!-- start div nm-->
                                            <div class="myStyleEPrN">
                                                <img src="assets/img/icons/glyphicons_352_nameplate.png" width="20"> &nbsp;
                                                <input type="text" id="nm" name="nm">
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
                                                        	<img src="assets/img/icons/glyphicons_024_parents.png" width="18"> GENDER:
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div gender-->
                                                                <div class="myStyleEPr2">
                                                                    <select>
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div><!-- end div gender -->
                                                        	
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="assets/img/icons/glyphicons_278_birthday_cake.png" width="15">  BIRTHDAY:
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div bday -->
                                                                <div class="myStyleEPrB">
                                                                    <input type="text" id="bd" name="bd">
                                                                </div>
                                                            </div><!-- end bday-->
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="assets/img/icons/glyphicons_248_asterisk.png" width="15"> CIVIL STATUS: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cs-->
                                                                <div class="myStyleEPr2">
                                                                    <select>
                                                                        <option>Single</option>
                                                                        <option>Married</option>
                                                                    </select>
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
                                                        	<img src="assets/img/icons/glyphicons_163_iphone.png" width="11"> CONTACT NUMBER: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div cn -->
                                                                <div class="myStyleEPr">
                                                                    <input type="text" id="Cn" name="cn">
                                                                </div>
                                                            </div><!-- end cn -->	
                                                        </td>
                                                    </tr>
                                                	
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="assets/img/icons/glyphicons_419_e-mail.png" width="15"> EMAIL: 
                                                        </td>
                                                        
                                                        <td>
                                                        	<div class="control-group"><!-- start div em -->
                                                                <div class="myStyleEPr">
                                                                    <input type="text" id="em" name="em">
                                                                </div>
                                                            </div><!-- end em -->	
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td class="lLabel4">
                                                        	<img src="assets/img/icons/glyphicons_087_log_book.png" width="15"> ADDRESS:
                                                        </td>
                                                        
                                                        <td>
                                                        	<textarea rows="3" class="myStyleEPr3"></textarea>
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
                                            <img src="assets/img/icons/glyphicons_332_certificate.png" width="15">
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
                                                <tr>
                                                    <td>
                                                        2D Game Art Development
                                                    </td>
                                                    
                                                    <td>
                                                        Develop GUI, Create Storyboard
                                                    </td>
                                                    
                                                    <td>
                                                    	2010
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        3D Game Art Development
                                                    </td>
                                                    
                                                    <td>
                                                        Develop GUI, Create Storyboard, Learn 3D animation
                                                    </td>
                                                    
                                                    <td>
                                                    	2011
                                                    </td>
                                                </tr>
                                            </tbody>
                                         </table>
                                        </div><!--end scrollable-->
                                    </div><!--end well-->
                                </div><!--end span-->
                                
                                <div class="span6">
                                	<div class="well">
                                    	<h4 class="proDetCol media header">
                                        	 <img src="assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                                        </h4>
                                        
                                        <div class="row-fluid">
                                            <div class="pull-right" style="margin-top:-30px;">
                                                <a href="#addW" data-toggle="modal" class="btn btn-info btn-mini">Add</a>
                                            </div>
                                        </div><!--end row-fluid-->
                                        
                                        <div style="width:510px;height:280px;overflow:auto;"><!--start scrollable table-->
                                        
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
   