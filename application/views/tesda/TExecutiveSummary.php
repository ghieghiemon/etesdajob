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
                    text: 'Rainfall (mm)'
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
                      ?>
                      ]
    
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
                text: 'Annual Graduates Vs. Hired Graduates'
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
                   text: '# of Graduates & Applicants'
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
                name: 'Annual Graduates',
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
                name: 'Hired Graduates',
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