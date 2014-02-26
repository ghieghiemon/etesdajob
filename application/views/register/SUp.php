    <div class="container">
    <div style="margin-left: 13%; margin-top: 1%; margin-bottom:-5%">
    <div class="row">    
	<div class="span12">
    	<div class="well">
        	<img src="<?php echo base_url(); ?>assets/img/SUnew.png" style="margin-left:-9px;">
            <br>
            <br>
            <br>
            
            <div class="row">
            <div class="span11" style="margin-left:50px; margin-top:-35px;">
           <div class="well wellMarg wellUpMarg" align ="center">
            	<h5 class="media-heading">

                </h5>
                      <form method='post' accept-charset='utf-8' action='<?php echo base_url()?>main/register_validation'/>
                 <table>
                	<thead>
                    	<tr>
                        	<th class="span1"></th>
                            <th class="span3"></th>
                        </tr>
                    
                    </thead>
                    <tbody>
                    	<tr>
                        	<td>
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont">Email</label>
                            	 <?php
                                    
                                    echo "<input style = ' width:95%'  class='input-prepend'";
                                    echo form_input('email');
                                    
                                    ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont2">Password</label>
                            	  <?php
                                    echo "<input class='input-prepend'";
                                    echo    form_password('userpassword');
                                    
                                    ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="SUpFont">
                            </td>
                            
                            <td  class="myStyleSUp">
                            	<label class="SUpFont2">Confirm Password</label>
                             <?php
                                    echo "<input class='input-prepend'";
                                    echo    form_password('cpassword');
                                    
                                    ?>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="SUpFont">
                            </td>
                            
                            <td align="center">
                                <div class="help-inline" style="margin-left:-20px;">
                                    <p>
                             
                                       <input type="radio" name="type" value="JS">Jobseeker</input>&nbsp;&nbsp;
                                      <input type="radio" name="type" value="EM">Employer</input>
                                     
                                      
                                  </p>
                                </div> <!--end employer-->
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                  <div style="margin-left:200px;">
                    	 <?php 
                      
                echo" <input class='btn btn-primary'";
                echo form_submit('submit', 'Register');
                echo form_close(); 
                ?>
                        
                        </form>
           
                    </div>
                
            </div><!--end well signup-->
            
            </div> <!--end span10-->
            </div> <!--end row-->
		</div> <!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    </div> <!--end div-->
    </div> <!--end container-->
 
 <!-- END OF CONTENT -->   
        

 <!-- FOOTER -->           
        <br><br><br><br>
  <hr>    

</body>
