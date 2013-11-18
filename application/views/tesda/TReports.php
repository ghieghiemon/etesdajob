
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="assets/img/icons/glyphicons_041_charts.png" width="25"> Reports
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
                        	<select name="cert">
                                <option>Choose certification</option>
                                <option>2D Game Art Development NC III</option>
                                <option>Visual Graphics Design NC III</option>
                                <option>2D Animation NC III</option>
                            </select>
                            
                            <br>
                            <select name="reporttype">
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
                                <option>Choose year</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                            </select>
                            
                            <br><br><br>
                            <button type="submit" class="btn btn-info">
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

  

    
</body>

</html>
