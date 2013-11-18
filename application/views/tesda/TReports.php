<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/jquery.dataTables_themeroller.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.9.0.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>   
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

<div class="modal hide fade" id="certmodal">
            <div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Generate Report</h3>
  	</div>
                        
         <form method="post" action="<?php echo base_url()?>tesda/generate_report">
  	<div class="modal-body"> <!--Modal members-->
  		<div style="margin-left: 5%; margin-top: 1%">
                    
  			<div class="nav" style="height:220px;margin-bottom:-5px;margin-left:140px;overflow:auto;">
                        <input type="hidden" value="1" name="reporttype">
                           <?php    
                            $cert['0'] = 'Choose Certification';
                            $params = 'id="lstcert1" '; 
                           echo form_dropdown('certs', $cert,'0',$params);    
                                                               
                               ?> 
                              <br>
                            <select name="month" id="month" class="formlist">
                           <option>Choose Month</option>
                             <option value = "1">January</option>
                            <option value = "2">February</option>
                            <option value = "3">March</option>
                            <option value = "4">April</option>
                            <option value = "5">May</option>
                            <option value = "6">June</option>
                            <option value = "7">July</option>
                            <option value = "8">August</option>
                            <option value = "9">September</option>
                            <option value = "10">October</option>
                            <option value = "11">November</option>
                            <option value = "12">December</option> 
                            </select>
                            
                            <br>
                             <select name="year">
                                 <option>Choose Year</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                            </select>
                        
                </div><!--end scrollable-->
            
    	</div><!--end modal cert-->
 	</div><!--end modal-footer-->
        <div class="modal-footer">
            <button type="submit" class="btn btn-info" >Generate</button>
            <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
        </div>
        </form>  
</div>
<!--end modcert-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_041_charts.png" width="25"> Reports
            </h4>
            
            <div class="row-fluid">
            	<div class="span12">
                	<div style="width:950px;height:400px;overflow:auto;"><!--start scrollable table-->
                	<div class="well" style="margin-left:320px;">
                    	<div class="myStyle2PQS" align="center" style="margin-top:40px;margin-bottom:30px;">
                            <form method ="post" action="<?php echo base_url()?>tesda/generate_report">
                        <h4>
                        	GENERATE REPORT
                        </h4>
                        <br>
                        <br>
                        	
                            
                            <br>
                            <select name="reporttype" id="cert">
                                <option>Choose type of report</option>
                                <option value = "1">Job Vacancies</option>
                                <option value = "4">Employment per Industry</option>
                                <option value = "5">Employment per Region</option>
                                <option value = "2">In Demand Jobs</option>
                                <option value = "3">In Demand Industries</option>
                            </select>
                            
                            <br>
                            <select name="month" id="month" class="formlist">
                           
                            <option value = "1">January</option>
                            <option value = "2">February</option>
                            <option value = "3">March</option>
                            <option value = "4">April</option>
                            <option value = "5">May</option>
                            <option value = "6">June</option>
                            <option value = "7">July</option>
                            <option value = "8">August</option>
                            <option value = "9">September</option>
                            <option value = "10">October</option>
                            <option value = "11">November</option>
                            <option value = "12">December</option> 
                            </select>
                            
                            <br>
                            <select name="year">
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                            </select>
                            
                            <br><br><br>
                            <a href="#certmodal" data-toggle="modal">generate</a>
                            <button type="submit" class="btn btn-info" id="cert">
                            	GENERATE
                            </button>
                            </form>
                    	</div>
                    </div><!--end well-->
                    </div><!--end scrollable-->
                </div><!--end span-->
            </div><!--end row-fluid-->
            
            
       	 	
            
            
            
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

<script>
   $(document).ready(function(){
          
          $('#cert').change(function(){ 
              if($(this).val() === '1')
              {  
                  $('#certmodal').modal('show');
              }
          });    
       }); 
  
</script>

    
</body>
