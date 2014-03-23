$(document).ready(function(){
    var monthNames = ["0","January","February","March","April","April","June","July","August","September","October","November","December"];

    var recepients = new Array();
    
    $(".chk").change(function() {
         var name ="";
        if(this.checked) {
           name= $('#chknName',$(this).closest("td")).val();
            recepients.push(name);
            //alert(recepients);
           
        }else{
            name = $('#chknName',$(this).closest("td")).val();
            var index = recepients.indexOf(name);
            
            recepients.splice(index,1);
            
        }
        
    });
    
     $(".chk2").change(function() {
         var name ="";
        if(this.checked) {
           name= $('#chkeName',$(this).closest("td")).val();
            recepients.push(name);
            //alert(recepients);
           
        }else{
            name = $('#chkeName',$(this).closest("td")).val();
            var index = recepients.indexOf(name);
            
            recepients.splice(index,1);
            
        }
        
    });
    
     $(".chk3").change(function() {
         var name ="";
        if(this.checked) {
           name= $('#chkiName',$(this).closest("td")).val();
            recepients.push(name);
            //alert(recepients);
           
        }else{
            name = $('#chkiName',$(this).closest("td")).val();
            var index = recepients.indexOf(name);
            
            recepients.splice(index,1);
            
        }
        
    });
        
    $('#preview').click(function(){
        $('#times').empty();
      var date = $('#date1').val();
      //alert(date.substring(5,7));
      var month = monthNames[parseInt(date.substring(5,7))];
      var day = date.substring(8, 10);
      var year = date.substring(0, 4);
      var timeF = $('#TR1').val();
      var timeT = $('#TR2').val();
      var contactP = $('#CP').val();
      var contactD = $('#CD').val();
      var venue = $('#VN').val();
      var duration = $('#DR').val();
      
      var names = "";
      //alert(recepients);
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
      
      
      
      

      timeF = timeF.split(':');
      var timeFD = timeF[1].split(' '); //AM or PM
      
      timeT = timeT.split(':');
      var timeTD = timeT[1].split(' '); // AM o PM
      
      var timeFH = timeF[0];
      var timeFM = timeFD[0];
      
      var timeTH = timeT[0];
      var timeTM = timeTD[0];
      var htmlOutput = "";
      
        var totalmins = 0;
       if(timeTM != timeFM){ 
            totalmins = parseInt(timeTM)+parseInt(timeFM);
       }
       //alert(totalmins);
        
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
          
          totalmins +=  ((parseInt(timeTH)+12)-parseInt(timeFH))*60;
          //alert(totalmins);
           if(timeTM == "00" && timeFM == "00"){
              
                 var newtimeH = parseInt(timeFH);
                 var newtimeM = parseInt(timeFM);
                 var oldtimeH = timeFH;
                 var oldtimeM = timeFM;
                 while(newtimeH < parseInt(timeTH)+12){
                    
                     if(duration == ".5"){
                        newtimeM = parseInt(newtimeM);
                        newtimeM +=30;
                         
                         if(newtimeM >= 60){
                             newtimeH++;
                             newtimeM = "00";
                         }
                         
                         if(parseInt(newtimeH) > 12){
                               var temptimeFH = oldtimeH;
                               
                               if(parseInt(oldtimeH)> 12){
                                   temptimeFH = oldtimeH-12;
                               }
                               
                               var temptimeTH = parseInt(newtimeH)-12;
                                htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                           }else{
                                htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                           }
                           
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }else if(duration == "1"){
                       
                         newtimeH++;
                         newtimeM = "00";
                         
                           if(parseInt(newtimeH) > 12){
                               var temptimeFH = oldtimeH;
                               
                               if(parseInt(oldtimeH)> 12){
                                   temptimeFH = oldtimeH-12;
                               }
                               
                               var temptimeTH = parseInt(newtimeH)-12;
                                htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                           }else{
                                htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                           }
                         
                        
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }else if(duration == "2"){
                        
                         newtimeH+=2;
                         
                         newtimeM = "00";
                         
                         if(parseInt(newtimeH) > 12){
                               var temptimeFH = oldtimeH;
                               
                               if(parseInt(oldtimeH)> 12){
                                   temptimeFH = oldtimeH-12;
                               }
                               
                               var temptimeTH = parseInt(newtimeH)-12;
                                htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                           }else{
                                htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                           }
                           
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }
                     
                     
                 }
                  
              }
              
             else{
                  
               var newtimeH = parseInt(timeFH);
                 var newtimeM = parseInt(timeFM);
                 var oldtimeH = timeFH;
                 var oldtimeM = timeFM;
               
                 
                 
                 
                 while(newtimeH < parseInt(timeTH)+12){
                    
                     if(duration == ".5"){
                        newtimeM = parseInt(newtimeM);
                        newtimeM +=30;
                         
                         if(newtimeM >= 60){
                             newtimeH++;
                             newtimeM = parseInt(newtimeM)-60;
                             
                             if(newtimeM == 0){
                                 newtimeM = "00";
                             }
                            
                         }
                         
                          //alert(totalmins);
                         if(parseInt(totalmins) >= 30){
                         totalmins = totalmins-30; 
                         
                            if(parseInt(newtimeH) > 12){
                                  var temptimeFH = oldtimeH;

                                  if(parseInt(oldtimeH)> 12){
                                      temptimeFH = oldtimeH-12;
                                  }

                                  var temptimeTH = parseInt(newtimeH)-12;
                                   htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                              }else{
                                   htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                              }
                         }
                           
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }else if(duration == "1"){
                       
                         newtimeH++;
                         //alert(totalmins);
                         if(parseInt(totalmins) >= 60){
                         totalmins = totalmins-60;   
                             
                             
                                if(parseInt(newtimeH) > 12){
                                    var temptimeFH = oldtimeH;

                                    if(parseInt(oldtimeH)> 12){
                                        temptimeFH = oldtimeH-12;
                                    }
                                    // alert(temptimeFH+':'+newtimeM);
                                    var temptimeTH = parseInt(newtimeH)-12;
                                     htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                }else{
                                     htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                }
                         }
                         
                        
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }else if(duration == "2"){
                        
                         newtimeH+=2;
                         
                          //alert(totalmins);
                         if(parseInt(totalmins) >= 120){
                         totalmins = totalmins-120; 
                         
                                if(parseInt(newtimeH) > 12){
                                      var temptimeFH = oldtimeH;

                                      if(parseInt(oldtimeH)> 12){
                                          temptimeFH = oldtimeH-12;
                                      }

                                      var temptimeTH = parseInt(newtimeH)-12;
                                       htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                  }else{
                                       htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                  }
                         }
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                     }
                     
                     
                 }
                  
              }
          
          
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
                    
                     if(duration == ".5"){
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
                     
                     if(duration == ".5"){
                           newtimeM = parseInt(newtimeM);
                        newtimeM +=30;
                         
                         if(newtimeM >= 60){
                             newtimeH++;
                             newtimeM = newtimeM-60;
                         }
                         
                         htmlOutput += ' '+ oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                    }else if(duration == "1"){
                         newtimeH++;
                        
                        
                        
                       if(parseInt(timeTH)-parseInt(oldtimeH)<=1 && parseInt(timeTM)-parseInt(newtimeM)!= parseInt('0')){
                       
                       }else{
                     
                            if(parseInt(newtimeH) > 12){
                                    var temptimeFH = oldtimeH;

                                    if(parseInt(oldtimeH)> 12){
                                        temptimeFH = oldtimeH-12;
                                    }

                                    var temptimeTH = parseInt(newtimeH)-12;
                                     htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                }else{
                                     htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                }
                        }  
                           
                         oldtimeM = newtimeM;
                         oldtimeH = newtimeH;
                         
                         
                     }
                     else if(duration == "2"){
                        
                         newtimeH+=2;
                        if(parseInt(timeTH)-parseInt(oldtimeH)<=2 && parseInt(timeTM)-parseInt(newtimeM)!= parseInt('0')){
                       
                       }else{
                     
                            if(parseInt(newtimeH) > 12){
                                    var temptimeFH = oldtimeH;

                                    if(parseInt(oldtimeH)> 12){
                                        temptimeFH = oldtimeH-12;
                                    }

                                    var temptimeTH = parseInt(newtimeH)-12;
                                     htmlOutput +=  ' '+temptimeFH+':'+oldtimeM+'-'+temptimeTH+':'+newtimeM+' '+timeTD[1]+'&nbsp;';
                                }else{
                                     htmlOutput +=  ' '+oldtimeH+':'+oldtimeM+'-'+newtimeH+':'+newtimeM+' '+timeFD[1]+'&nbsp;';
                                }
                        }  
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