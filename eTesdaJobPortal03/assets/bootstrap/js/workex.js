$(function(){ //WORK
 
 $('#addtoItemWTable').click(function(){
     
  var ctr = 0 ;

if(sessionStorage.counterInt == null){
    ctr = 0;
    
}else{
    ctr = sessionStorage.counterInt;
} 
var companyname= $('.companyname').val();
var position= $('.position').val();
var start= $('.start').val();
var end= $('.end').val();

//var baseurl= $('#baseurl').val();

work = new Array();
work[0] = ctr;
work[1] = companyname; // question
work[2] = position; // question
work[3] = start; // question
work[4] = end; // question

 $.ajax({
                
                type: "POST",
                data: {work:work},
                url: "main/add_worke",
                 // url: "mycontroller/sessions"
                success: function(data){
                         alert(data);
                }
        });

var newRowContent = $("<tr><td>" + companyname + "</td>\
<td>" + position + "</td>\
<td>" + start + "</td>  \
<td>" + end + "</td>   \
<td><input type='button' class='btn btn-mini' value='Delete'></td>\
</tr>");
$("#item_table tbody").append(newRowContent); 
$("#item_table").trigger("update");
$('.companyname').val('');
$('.position').val('');
$('.start').val('');
$('.end').val('');

$('input[type="button"]').click(function(){
   $(this).closest('tr').remove()
})

  ctr++;
  sessionStorage.counterInt = ctr;
});
});



