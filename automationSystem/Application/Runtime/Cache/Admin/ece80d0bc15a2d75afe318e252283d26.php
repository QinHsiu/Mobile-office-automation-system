<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>
    <script type="text/javascript" src="/automationSystem/Public/Admin/js/jquery.js"></script>
    <style type="text/css">
    ${
        demo.css
    }
    </style>
    <script type="text/javascript">
    $(function() {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '部门人数统计表'
            },
            subtitle: {
                text: '数据来源: <a href="#">顶级部门</a>'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '人数 (个)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: '截至当前: <b>{point.y:.0f} 人</b>'
            },
            series: [{
                name: 'Population',
                data: <?php echo ($str); ?>,
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.0f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    });
    </script>
</head>

<body>
    <script src="/automationSystem/Public/Admin/plugin/charts/js/highcharts.js"></script>
    <script src="/automationSystem/Public/Admin/plugin/charts/js/modules/exporting.js"></script>
    <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
</body>

</html>