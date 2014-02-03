$(document).ready(function(){
    
    var siteurl = $('#siteurl').val();
    $('#sectorsDrop').val(0);
 $('#sectorsDrop').change(function(){
//        alert($(this).val());
//        alert($('#siteurl').val());
        var sectorid = $(this).val();
//        var year=$('#select_year').val();
//        var report=$('#select_report').val();
//        var month=$('#select_month').val();
//        
        $('div #report').load(siteurl+'adminsurvey/showCourses?id='+sectorid);
//        n
    })
   
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
