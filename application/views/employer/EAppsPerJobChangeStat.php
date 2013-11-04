<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title> Schedule</title>
	<meta charset="UTF-8">
	<style type="text/css">
		.calendar {
			font-family: Arial; font-size: 12px;
		}
		table.calendar {
			margin: auto; border-collapse: collapse;
		}
		.calendar .days td {
			width: 80px; height: 80px; padding: 4px;
			border: 1px solid #999;
			vertical-align: top;
			background-color: #DEF;
		}
		.calendar .days td:hover {
			background-color: #FFF;
		}
		.calendar .highlight {
			font-weight: bold; color: #00F;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
	<?php echo $calendar; ?>

    <div class="modal hide fade" id="changeStat<?php echo $a['applicationid']?>">
    <form method="post" action="<?php echo base_url()?>employer/employer_changeStatus/<?php echo $a['applicationid']?>">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Change Status</h3>
  	</div>

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
                              <input type="radio" name="group1" value="Interview1" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  1st Interview
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Interview2" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  2nd Interview
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Requirements" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                 Requirements
                              </label>
                              
                          </td>
                      </tr>
                      <tr>                                           
                          <td>
                              <input type="radio" name="group1" value="Hired" style="margin-left:40px;margin-top:-10px;">
                              <label class="checkbox jCrNC3">
                                  Hired
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
                              <label style="margin-left:1px;">
                                   <strong>Select Date:</strong>
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
                                   <strong>Select Time:</strong>
                              </label>
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
<br>
        </div><!--end well-->
	</div>
  
  	<div class="modal-footer">
  		<button type="submit" class="btn btn-info" >Save</button>
    	<a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> 
  	</div>
     </form>
</div>
</body>
</html>