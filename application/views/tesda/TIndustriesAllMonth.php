
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="25"> Industries
            </h4>
            
                    <div class="myStyle2T" align="right" class="form-horizontal">
                        <form method="post" action="<?php echo base_url()?>tesda/permonth_industries">
                        <select name="month" id="month" class="span2">
                           
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
                            
                            <select name="year" class="span2">
                                <option>Choose year</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                            </select>
                        
                        <button type="submit" class="btn btn-info" style="margin-top:-35px;">
                        	<img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_211_right_arrow.png" width="20">
                        </button>
                     </form>
                    </div>
       	 	
            <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                Legend:  (#) - no. of vacancies
            </div>
            
            <div class="nav" style="width:1160px;height:420px;margin-top:10px;margin-bottom:-5px;margin-left:50px;overflow:auto;">
                <?php 
                foreach ($industries as $a)
                {
                ?>
                    <a href="<?php echo base_url('tesda/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd2">
                    <h5 class="media-heading">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>" class="PProfE"> 
                        <br>(<?php echo $a['totalopenings']?>)
                    </h5>
                    </a>
                <?php
                }
                ?>
                       
                </div><!--end scrollable-->
            
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>

</body>

