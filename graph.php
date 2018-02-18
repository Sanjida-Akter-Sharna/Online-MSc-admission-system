<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="Chart.bundle.min.js"></script>
<script src="Chart.min.js"></script>

</head>

<body>
<h1>Users usages Chart :</h1>
<div style="height:200px; width:400px">
<canvas id="myChart" width="100" height="100"></canvas>
</div>
<script>
$a=100;
$b=200;
$c=150;
$d=250;
$e=50;
$f=180;
$g=220;
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6","Day 7"],
        datasets: [{
            label: '# of Votes',
            data: [$a,$b,$c,$d,$e,$f,$g],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>



</body>
</html>