<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total Job Postings Per Month'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: '# of Postings'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: '<?php echo $industry?>',
                data: [
                <?php
                $ctra = 1;
                      while($ctra <= 12){
                          if(isset($posting1[$ctra])){
                             echo $posting1[$ctra];
                            if($ctra != 12){
                                echo ", ";
                                }
                          }
                          else{
                              echo '0';
                              if($ctra != 12){
                                echo ", ";
                                }
                          }
                          $ctra++;
                      }
                      ?>
                      ]
    
            }]
        });
    });
    

</script>

<script>
$(function () {
        $('#container2').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Number of Partners Per Month'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: '# of Partners'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'New Partners',
                data: [<?php
                      //$ctr = count($indexedReportData);
                      $ctra = 1;
                      while($ctra <= 12){
                          if(isset($newP[$ctra])){
                             echo $newP[$ctra];
                            if($ctra != 12){
                                echo ", ";
                                }
                          }
                          else{
                              echo '0';
                              if($ctra != 12){
                                echo ", ";
                                }
                          }
                          $ctra++;
                      }
                      
//                      foreach ($indexedReportData as $a)
//                      {
//                          echo $a;
//                          if($ctr > 1)
//                              echo ", ";
//                          $ctr--;
//                      }
                      ?>]
    
            }, {
                name: 'Total Partners',
                data: [<?php
                       $ctrb = 1;
                      while($ctrb <= 12){
                          if(isset($totalP[$ctrb])){
                             echo $totalP[$ctrb];
                            if($ctrb != 12){
                                echo ", ";
                                }
                          }
                          else{
                              echo '0';
                              if($ctrb != 12){
                                echo ", ";
                                }
                          }
                          $ctrb++;
                      }
                      ?>]
    
            }]
        });
    });
    

</script>
<script>
    $(function () {
        $('#container1').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Graduates & Hired'
            },
            subtitle: {
                text: 'TESDA'
            },
             xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                   text: '# of Graduates & Hired'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Graduates',
                data: [<?php
                      //$ctr = count($indexedReportData);
                      $ctra = 1;
                      while($ctra <= 12){
                          if(isset($mreportData[$ctra])){
                             echo $mreportData[$ctra];
                            if($ctra != 12){
                                echo ", ";
                                }
                          }
                          else{
                              echo '0';
                              if($ctra != 12){
                                echo ", ";
                                }
                          }
                          $ctra++;
                      }
                      
//                      foreach ($indexedReportData as $a)
//                      {
//                          echo $a;
//                          if($ctr > 1)
//                              echo ", ";
//                          $ctr--;
//                      }
                      ?>]
    
            }, {
                name: 'Hired',
                data: [<?php
                       $ctrb = 1;
                      while($ctrb <= 12){
                          if(isset($mreportData2[$ctrb])){
                             echo $mreportData2[$ctrb];
                            if($ctrb != 12){
                                echo ", ";
                                }
                          }
                          else{
                              echo '0';
                              if($ctrb != 12){
                                echo ", ";
                                }
                          }
                          $ctrb++;
                      }
                      ?>]
    
            }]
        });
    });
    
		</script>
           

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>