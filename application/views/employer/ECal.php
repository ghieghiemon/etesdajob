<br>
<br>

<script type="text/javascript">
					
	function openWindow(jobno,day,year,month,company){
		
		// window.open($('#base').val() + 'employer/view_event/'+year+'/'+month+"/"+day+"/"+company,'List of Events','width=400,height=600');
		$('#contentdiv').load($('#base').val() + 'employer/view_event/'+jobno+'/'+year+'/'+month+"/"+day+"/"+company);
		
	}
</script>

<?php foreach ($apps as $a)
{ ?>
<div class="" id="changemodal">
  	
</div> 
<div class="" id="changeStatus">
    <form method="post" action="<?php echo base_url()?>employer/employer_changeStatus">
  	
    	<div class ="well" style="margin-top: -60px">
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
                            <div align ="right">
                                <!--<a id="cal" class="btn btn-primary btn-mini">View Calendar</a>-->
                                
                                <a id="cal" class="btn btn-primary btn-mini" href="javascript:void(0)" onclick="openWindow();">View Calendar</a>
                            </div>
                              </label>
                              
                                             <select name="month" style = " width:30%" >
	<option value="1">January
	<option value="2">February
	<option value="3">March
	<option value="4">April
	<option value="5">May
	<option value="6">June
	<option value="7">July
	<option value="8">August
	<option value="9">September
	<option value="10">October
	<option value="11">November
	<option value="12">December
</select>
<select name="day"style = " width:20%">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
	<option value="5">5
	<option value="6">6
	<option value="7">7
	<option value="8">8
	<option value="9">9
	<option value="10">10
	<option value="11">11
	<option value="12">12
	<option value="13">13
	<option value="14">14
	<option value="15">15
	<option value="16">16
	<option value="17">17
	<option value="18">18
	<option value="19">19
	<option value="20">20
	<option value="21">21
	<option value="22">22
	<option value="23">23
	<option value="24">24
	<option value="25">25
	<option value="26">26
	<option value="27">27
	<option value="28">28
	<option value="29">29
	<option value="30">30
	<option value="31">31
</select>
<select name="year"style = " width:20%">
	<option value="2013">2013
	<option value="2014">2014
	<option value="2015">2015

</select>
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
<?php } ?>
<!--change status modal end-->
<br>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.8.3.min.js'); ?>"></script>
<input type="hidden" value="<?php echo base_url(); ?>" id="base" />
