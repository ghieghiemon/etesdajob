$(document).ready(function(){
    
    var siteurl = $('#siteurl').val();
$('#sectorsDrop').val(0);
    $('#sectorsDrop').change(function(){

        var sectorid = $(this).val();
        $('#sectorTitle').text($('#sectorsDrop :selected').text());
        $('div #report').load(siteurl+'adminsurvey/showCourses?id='+sectorid);

    })
    
    $('.editQ').click(function(){
//        alert($('#itemid',$(this).closest("td")).val());
//         alert($('#question',$(this).closest("td")).val());
//          alert($('#type',$(this).closest("td")).val());
          
          $('#questiontTxt').val($('#question',$(this).closest("td")).val());
          $('#typeDrp').val($('#type',$(this).closest("td")).val());
          $('#itemidv').val($('#itemid',$(this).closest("td")).val());

    });
    
    $('.deleteQ').click(function(){
                //alert($('#itemid',$(this).closest("td")).val());
        $('#itemidd').val($('#itemid',$(this).closest("td")).val());
    });
    
   
});
    
    
    


//
//
////$(document).ready(function(){
//    alert('hey');
//    $('#sectorsDrop').change(function(){
//        alert("HAHAHA");
////        var year=$('#select_year').val();
////        var report=$('#select_report').val();
////        var month=$('#select_month').val();
////        
////        $('div #report').load(SITE_URL+'admin/reports/load_report?year='+year+"&report="+report+"&month="+moth);
////        n
//    })
//    
//    
//});
//
//
