<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/datepicker.css"> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
<div id="changeStatus">
    <form method="post" action="<?php echo base_url()?>employer/employer_changeStatus">
        <div class="row-fluid">
            <div class="span4 offset8">   
    	<div class ="well" style="margin-top: -193px; margin-left:-110px;">
    	<h3>Change Status</h3>
  	

	<div class="modal-body">
		<div class="well">
        	<table>
                  <thead>
                      <tr>
                          <th class="span8"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Exam" style="margin-left:40px;">
                              <label class="checkbox jCrNC2">
                                   Exam
                              </label>
                              
                          </td>
                      </tr>
                      
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Interview" style="margin-left:40px;">
                              <label class="checkbox jCrNC3">
                                  Interview
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Hired" style="margin-left:40px;">
                              <label class="checkbox jCrNC3">
                                  Denied
                              </label>
                              
                          </td>
                      </tr>
              </table>

        </div><!--end well-->
        	<div class="well">
        	<table>
                  <thead>
                      <tr>
                          <th class="span8"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>                                           
                          <td>
                            
                              <label class="">
                                   <strong>Location</strong>
                              </label>
                              <textarea  style = " width:95%" rows="2" id ="location" name="location"></textarea>
                          </td>
                      </tr>
   
                  
                    
              </table>

        </div><!--end well-->

        
  <div class="well">
        	<table>
                  <thead>
                      <tr>
                          <th class="span8"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>                                           
                          <td>
                              <label style="margin-left:1px;">
                            <strong>Select Date and Time: </strong>
                              </label>
                              
                   <input style ="height:2em;" type="text" id="date" name="date" placeholder="Select Date">
                          
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <select nAMe="time">
  <option value="00:00">12:00 AM</option>
  <option value="1:00">1:00 AM</option>
  <option value="2:00">2:00 AM</option>
  <option value="3:00">3:00 AM</option>
  <option value="4:00">4:00 AM</option>
  <option value="5:00">5:00 AM</option>
  <option value="6:00">6:00 AM</option>
  <option value="7:00">7:00 AM</option>
  <option value="8:00">8:00 AM</option>
  <option value="9:00">9:00 AM</option>
  <option value="10:00">10:00 AM</option>
  <option value="11:00">11:00 AM</option>
  <option value="12:00">12:00 PM</option>
  <option value="13:00">1:00 PM</option>
  <option value="14:00">2:00 PM</option>
  <option value="15:00">3:00 PM</option>
  <option value="16:00">4:00 PM</option>
  <option value="17:00">5:00 PM</option>
  <option value="18:00">6:00 PM</option>
  <option value="19:00">7:00 PM</option>
  <option value="20:00">8:00 PM</option>
  <option value="21:00">9:00 PM</option>
  <option value="22:00">10:00 PM</option>
  <option value="23:00">11:00 PM</option>
</select>
                          </td>
</tr>
              </table>

        </div><!--end well-->
	</div>
  
  	<div align="right">
        <button type="submit" class="btn btn-info" >Save</button>
    	<a href="#" class="btn btn-primary">Cancel</a> 
        </div>
     </form>
</div>
</div>
        </div>
</div>

<!--change status modal end-->
<script type="text/javascript" >
					
	function openWindow(day,year,month,company){
		
		// window.open($('#base').val() + 'employer/view_event/'+year+'/'+month+"/"+day+"/"+company,'List of Events','width=400,height=600');
		$('#contentdiv').load($('#base').val() + 'employer/view_event/'+year+'/'+month+"/"+day+"/"+company);
		
	}
</script>

    <script>
$("#date").datepicker( {
    format: 'yyyy-mm-dd'
});
</script>

<br>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.8.3.min.js'); ?>"></script>
<input type="hidden" value="<?php echo base_url(); ?>" id="base" />
