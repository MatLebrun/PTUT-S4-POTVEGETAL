<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="style.css">

    
    <title>Document</title>
</head>
<body>
    
    
<div style="width: 75%">
    <canvas id="myChart"></canvas>
</div>

<script>
   Chart.defaults.global.title.display = true;
   Chart.defaults.global.title.text = 'Température';

    var jsonData = <?=$listTemperature;?>;

    var listLabels = [];
    var listDatas = [];

    for(var i in jsonData) {
        listLabels.push(jsonData[i]["date"]);
        listDatas.push(jsonData[i]["temperature"]);
    }

    console.log(listLabels);

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
    
        // The data for our dataset
        data: {
            labels: listLabels,
            datasets: [{
                label: 'Température',
                borderColor: 'rgb(58, 142, 186)',
                data: listDatas
            }]
        },
    
        // Configuration options go here
        options: {
            tiltle: {}
        }
    });
</script>

</body>
</html>