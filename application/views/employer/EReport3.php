

 <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
        $('#container').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Annual Graduates Vs. Hired Graduates'
            },
            subtitle: {
                text: 'TESDA'
            },
            xAxis: [{
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}°C',
                    style: {
                        color: '#89A54E'
                    }
                },
                title: {
                    text: 'No. of Graduates',
                    style: {
                        color: '#89A54E'
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Rainfall',
                    style: {
                        color: '#4572A7'
                    }
                },
                labels: {
                    format: '{value} mm',
                    style: {
                        color: '#4572A7'
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: '#FFFFFF'
            },
            series: [{
                name: 'Annual Graduates',
                color: '#4572A7',
                type: 'column',
                yAxis: 1,
                data: [<?php
                      $ctr = count($indexedReportData);
                      foreach ($indexedReportData as $a)
                      {
                          echo $a;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>],
                tooltip: {
                    valueSuffix: ' mm'
                }
    
            }, {
                name: 'Hired Graduates',
                color: '#89A54E',
                type: 'spline',
                data: [<?php
                      $ctr = count($indexedReportData2);
                      foreach ($indexedReportData2 as $b)
                      {
                          echo $b;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>],
                tooltip: {
                    valueSuffix: '°C'
                }
            }]
        });
    });
    

		</script>
           
                
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

