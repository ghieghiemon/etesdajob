$(document).ready(function(){
    var monthNames = ["0","January","February","March","April","April","June","July","August","September","October","November","December"];

    var recepients = new Array();
    
    $("#check1").change(function() {
         var name ="";
        if(this.checked) {
           name= $('#chknName',$(this).closest("td")).val();
            recepients.push(name);
           
        }else{
            name = $('#chknName',$(this).closest("td")).val();
            var index = recepients.indexOf(name);
            
            recepients.splice(index,1);
            
        }
        
    });
    
     $("#check2").change(function() {
         var name ="";
        if(this.checked) {
           name= $('#chkeName',$(this).closest("td")).val();
            recepients.push(name);
            alert(recepients);
        }else{
            name = $('#chkeName',$(this).closest("td")).val();
            var index = recepients.indexOf(name);
            
            recepients.splice(index,1);
            
        }
        
    });
    
     $("#check3").change(function() {
         var name ="";
        if(this.checked) {
           name= $('#chkiName',$(this).closest("td")).val();
            recepients.push(name);
           
        }else{
            name = $('#chkiName',$(this).closest("td")).val();
            var index = recepients.indexOf(name);
            
            recepients.splice(index,1);
            
        }
        
    });
        
    $('#preview').click(function(){
      var date = $('#date1').val();
      var month = monthNames[parseInt(date.substring(0,2))];
      var day = date.substring(3, 5);
      var year = date.substring(6, 10);
      var timeF = $('#TR1').val();
      var timeT = $('#TR2').val();
      var contactP = $('#CP').val();
      var contactD = $('#CD').val();
      var venue = $('#VN').val();
      var duration = $('#DR').val();
     
      var names = "";
      
      $.each(recepients, function( index, value ) {
           names += value+" ;";
      });
      
      if(date ==""){
          alert("Please select a Date");
          return false;
      }
      
      if(contactD ==""){
          alert("Please input contact details");
          return false;
      }
      
      if(contactP ==""){
          alert("Please input contact person");
          return false;
      }
      
      if(timeF ==""){
          alert("Please input start time");
          return false;
      }
      
      if(timeT ==""){
          alert("Please input end time");
          return false;
      }
      
      if(venue ==""){
          alert("Please input venue");
          return false;
      }
      
      if (typeof recepients == 'undefined' || recepients.length == 0) {
          alert("Please select applicants");
          return false;
      }
      
      

      timeF = timeF.split(':');
      var timeFD = timeF[1].split(' '); //AM or PM
      
      timeT = timeT.split(':');
      var timeTD = timeT[1].split(' '); // AM o PM
      
      var timeFH = timeF[0];
      var timeFM = timeFD[0];
      
      var timeTH = timeT[0];
      var timeTM = timeTD[0];
      var htmlOutput = "";
      $('#times').empty();
      
      if(parseInt(timeFH) > 10 && timeFD[1] =="PM"){
          alert("Invalid time selected");
          return false;
      }else if(parseInt(timeTH) > 10 && timeTD[1] =="PM"){
          alert("Invalid time selected");
           return false;
      }else if(parseInt(timeFH) < 6 && timeFD[1] =="AM"){
          alert("Invalid time selected");
           return false;
      }else if(parseInt(timeTH) < 6 && timeTD[1] =="AM"){
          alert("Invalid time selected");
           return false;
      }
      
      if(timeFD[1] == "AM" && timeTD[1] == "PM"){
          
      }else{ // SAME  SILA AM OR PM
//          alert(timeFH);
//          alert(timeTH);
//          alert(timeFH > timeTH);
         
          
          if(parseInt(timeFH) > parseInt(timeTH)){
            
              alert("Invalid time selected ");
              return false;
          }else if(timeFH == timeTH && parseInt(timeFM) > parseInt(timeTM)){
             
              alert("Invalid time selected ");
              return false;
          }else{
              //if 00 ung minutes
             
              if(timeTM == "00" && timeFM == "00"){
                 var newtimeH = parseInt(timeFH);
                 var newtimeM = parseInt(timeFM);
                 var oldtimeH = timeFH;
                 var oldtimeM = timeFM;
                 while(newtimeH < parseInt(timeTH)){
                    
                     if(duration == "30"){
                         newtimeM = parseInt(newtimeM);
                        newtimeM +=30;
                         
                         if(newtimeM >= 60){
                             newtimeH++;
                             newtimeM = "00";
                         }
                         
                         htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }else if(duration == "1"){
                        
                         newtimeH++;
                         newtimeM = "00";
                         htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }else if(duration == "2"){
                        
                         newtimeH+=2;
                         
                         newtimeM = "00";
                         htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }
                     
                     
                 }
                  
              }else{
                  
                 var newtimeH = parseInt(timeFH);
                 var newtimeM = parseInt(timeFM);
                  var oldtimeH = timeFH;
                 var oldtimeM = timeFM;
                 while(newtimeH <= parseInt(timeTH)){
                     
                     if(duration == "30"){
                           newtimeM = parseInt(newtimeM);
                        newtimeM +=30;
                         
                         if(newtimeM >= 60){
                             newtimeH++;
                             newtimeM = 60-newtimeM;
                         }
                         
                         htmlOutput += ' '+ oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                    }else if(duration == "1"){
                         newtimeH++;
                         newtimeM = "00";
                         htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }
                     
                 }
                  
              }
          }
      }
      

      $('#times').append(htmlOutput);
      
      

      
        $('#tos').text(names);
        $('#iMonth').text(month);
        $('#iDay').text(day);
        $('#iYear').text(year);
        $('#contI').text(contactP);
        $('#contD').text(contactD);
        $('#iAddress').text(venue);
    });
    
});