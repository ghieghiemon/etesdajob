

 <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
    $(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Annual Graduates Vs. Hired Graduates'
            },
            subtitle: {
                text: 'TESDA'
            },
            xAxis: [{
                categories: ['<?php echo $year1?>', '<?php echo $year2?>']
            }],
            yAxis: {
                min: 0,
                title: {
                   text: 'Percentage of Graduates'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
                      $ctr = count($indexedReportData);
                      foreach ($indexedReportData as $a)
                      {
                          echo $a;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>]
    
            }, {
                name: 'Hired Graduates',
                data: [<?php
                      $ctr = count($indexedReportData2);
                      foreach ($indexedReportData2 as $b)
                      {
                          echo $b;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>]
    
            }]
        });
    });
    
//
//    
//    
//$(function () {
//        $('#container').highcharts({
//            chart: {
//                zoomType: 'xy'
//            },
//            title: {
//                text: 'Annual Graduates Vs. Hired Graduates'
//            },
//            subtitle: {
//                text: 'TESDA'
//            },
//            xAxis: [{
//                categories: ['<?php echo $year1?>', '<?php echo $year2?>']
//            }],
//            yAxis: [{ // Primary yAxis
//                labels: {
//                    format: '{value}',
//                    style: {
//                        color: '#89A54E'
//                    }
//                },
//                title: {
//                    text: 'No. of Graduates',
//                    style: {
//                        color: '#89A54E'
//                    }
//                }
//            }, { // Secondary yAxis
//               
//            }],
//            tooltip: {
//                shared: true
//            },
//            legend: {
//                layout: 'vertical',
//                align: 'left',
//                x: 120,
//                verticalAlign: 'top',
//                y: 100,
//                floating: true,
//                backgroundColor: '#FFFFFF'
//            },
//            series: [{
//                name: 'Annual Graduates',
//                color: '#4572A7',
//                type: 'column',
//                yAxis: 1,
//                data: [<?php
                      $ctr = count($indexedReportData);
                      foreach ($indexedReportData as $a)
                      {
                          echo $a;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>//],
//                tooltip: {
//                    valueSuffix: ' mm'
//                }
//    
//            }, {
//                name: 'Hired Graduates',
//                color: '#89A54E',
//                type: 'spline',
//                data: [<?php
                      $ctr = count($indexedReportData2);
                      foreach ($indexedReportData2 as $b)
                      {
                          echo $b;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>//],
//                tooltip: {
//                    valueSuffix: '°C'
//                }
//            }]
//        });
//    });
//    

		</script>
           
                
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<br><br><br>
<br><br><br>