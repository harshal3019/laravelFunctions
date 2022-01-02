<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>High Charts</title>
</head>
<body>
    <div id="chart-container"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/9.3.2/highcharts.js" integrity="sha512-dm3Cn0X6XyRMz52WqL1wag+e2WCNAnggh2+4mv/9Ngd+IhBIH9NEQYUZ4g3A6GJUbhKrGw5hErqcFIyk73lUgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var datas = <?php echo json_encode($datas) ?>

    Highcharts.chart('chart-container',{
        title:{
            text:'New User Growth ,2021'
        },
        subtitle:{
            text:'Neosoft Technologies'
        },
        xAxis:{
            categories:['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sep','Oct','Nov','Dec']
        },
        yAxis:{
            title:{
                text:'Number of new users'
            }
        },
        legend:{
            layout:'vertical',
            align:'right',
            verticalAlign:'middle'
        },
        plotOptions:{
            series:{
                allowPointSelect:true
            }
        },
        series:[{
            name:'New User',
            data:datas
        }],
        responsive:{
            rules:[
                {
                    condition:{
                        maxWidth:500
                    },
                    chartOptions:{
                        legend:{
                            layout:'horizontal',
                            align:'center',
                            verticalAlign:'bottom'
                        }
                    }
                }
            ]
        }
    })
</script>
</body>
</html>