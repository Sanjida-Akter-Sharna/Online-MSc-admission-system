<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="http://www.amcharts.com/lib/amcharts.js" type="text/javascript"></script>
</head>

<body>

<script>

var chart;

AmCharts.ready(function() {
    // XY CHART
    chart = new AmCharts.AmXYChart();
    chart.pathToImages = "http://www.amcharts.com/lib/images/";
    chart.marginRight = 0;
    chart.marginTop = 0;    
    chart.dataProvider = [];
    chart.autoMarginOffset = 0;

    // AXES
    // X
    var xAxis = new AmCharts.ValueAxis();
    xAxis.position = "bottom";
    xAxis.axisAlpha = 0;
    xAxis.autoGridCount = true;
    chart.addValueAxis(xAxis);

    // Y
    var yAxis = new AmCharts.ValueAxis();
    yAxis.position = "left";
    yAxis.axisAlpha = 0;
    yAxis.autoGridCount = true;
    chart.addValueAxis(yAxis);
    
    // graph
    var graph = new AmCharts.AmGraph();
    graph.yField = "value1";
    graph.xField = "x";
    chart.addGraph(graph);

    // CURSOR
    var chartCursor = new AmCharts.ChartCursor();
    chart.addChartCursor(chartCursor);

    // SCROLLBAR
    var chartScrollbar = new AmCharts.ChartScrollbar();
    chart.addChartScrollbar(chartScrollbar);

    // WRITE                                                
    chart.write("chartdiv");
});

function generateData(){
    var dataProvider = [];
    for(var i = 1; i < 7; i++)
    {
        var value = Number(document.getElementById("input"+i).value);
        dataProvider.push({x:i, value1:value});
    }
    chart.dataProvider = dataProvider;
    chart.validateData();    
}

</script>
<div id="chartdiv" style="width: 100%; height: 359px;"></div>
Day 0 <input type="text" id="input1"></input><br>
Day 1 <input type="text" id="input2"></input><br>
Day 2 <input type="text" id="input3"></input><br>
Day 3 <input type="text" id="input4"></input><br>
Day 4 <input type="text" id="input5"></input><br>
Day 5 <input type="text" id="input6"></input><br>
<input type="button" id="submit" onclick="generateData()" value="make graph"></input>
</body>
</html>