<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/semantic.min.css">
  
  <title>Dashboard</title>

</head>

<body>
<p></p>
<h2 class="ui center dividing aligned header">WEB APP Dashboard</h2>
<h1></h1>
<div class="container">
  <ul class="pagination" style = "padding-left:50px;margin:0; list-style:None;">
    <li class="disabled" style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;">
      <a class="page-link" href="page_2.php" aria-label="Previous" style="color:#000; text-align:center; text-decoration:none;">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li  style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;"><a href="index.php" style="color:#000; text-align:center; text-decoration:none;">TRẠM 1</a></li>
    <li  style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;"><a href="page_2.php" style="color:#000; text-align:center; text-decoration:none;">TRẠM 2</a></li>
    <li  style ="float:left; background:#E88686; display:block;  padding:5px; margin:5px;"><a href="#" style="color:#000; text-align:center; text-decoration:none;">TRẠM 3</a></li>
    <li class="page-item" style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;">
      <a class="page-link" href="#" aria-label="Next" style="color:#000; text-align:center; text-decoration:none;">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</div>
<h1></h1>
<h2></h2>
<div class= "row_1" style="width: auto;height: auto;">
    <div class= "column" style = "float: left; width: 50%; height: 400px;"  ><h1 style = " text-align: center;">Data</h1>
        <div class="wrapper">
            <div class="section group">
                <div class="row">
                    <div class="col span_1_of_4" style = "float: left; width: 49%;">
                        <div class="ui cards">
                            <div class="card">
                                <div class="content">
                                    <img class="right floated mini ui image" src="img/thermometer.png">
                                    <div class="header">Nhiệt Độ</div>
                                    <div class="meta">Trạm 3</div>
                                </div>
                                <div style="text-align:center;" class="extra content centered">
                                    <div class="ui labeled button" tabindex="0">
                                        <div id="Temperature30" class="ui basic blue button" >
                                        <p id="temperature" class="ui active small inline loader"></p>
                                        </div>
                                        <button class="ui basic left pointing blue label">°C</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col span_1_of_4" style = "float: right; width: 49%;">
                        <div class="ui cards">
                            <div class="card">
                                <div class="content">
                                    <img class="right floated mini ui image" src="img/humidity.png">
                                    <div class="header">Độ Ẩm</div>
                                    <div class="meta">Trạm 3</div>
                                </div>
                                <div style="text-align:center;" class="extra content centered">
                                    <div class="ui labeled button" tabindex="0">
                                        <div id="Humidity33" class="ui basic blue button" >
                                        <p id="humidity" class="ui active small inline loader"> </p>
                                        </div>
                                        <button class="ui basic left pointing blue label">%</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="section group">
                <div class="row">
            
                    <div class="col span_1_of_4" style = "float: left; width: 49%;">
                        <div class="ui cards">
                            <div class="card">
                                <div class="content">
                                    <img class="right floated mini ui image" src="img/humidity.png">
                                    <div class="header">Độ ẩm đất</div>
                                    <div class="meta">Trạm 3</div>
                                </div>
                                <div style="text-align:center;" class="extra content centered">
                                    <div class="ui labeled button" tabindex="0">
                                        <div id="Soil_moisture30" class="ui basic blue button" >
                                        <p id="Soil_moisture" class="ui active small inline loader"> </p> 
                                        </div>
                                        <button class="ui basic left pointing blue label">%</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_4" style = "float: right; width: 49%;">
                        <div class="ui cards">
                            <div class="card">
                                <div class="content">
                                    <img class="right floated mini ui image" src="img/blood-pressure-control-tool.png">
                                    <div class="header">Lưu lượng</div>
                                    <div class="meta">Trạm 3</div>
                                </div>
                                <div style="text-align:center;" class="extra content centered">
                                    <div class="ui labeled button" tabindex="0">
                                        <div id="rainfall30" class="ui basic blue button" >
                                        <p id="rainfall" class="ui active small inline loader"> </p> 
                                        </div>
                                        <button class="ui basic left pointing blue label">mm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class= "column" style = "float: right; width: 50%; height: 400px; text-align: center;"><h1>Map</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7347226252004!2d105.82823081473104!3d21.00326828601217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d560e506db4ae20!2zMjHCsDAwJzExLjgiTiAxMDXCsDQ5JzQ5LjUiRQ!5e0!3m2!1svi!2s!4v1654886029047!5m2!1svi!2s" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div style="height: 500px"></div>

<div style="height: 410px;min-height: 100px;margin: 0px auto;padding-left: 50px;padding-right: 50px;" id="main"> </div>
<script type="text/javascript">

Highcharts.setOptions({
global: {
useUTC: false
}
});

function activeLastPointToolip(chart) {
var points = chart.series[0].points;
chart.tooltip.refresh(points[points.length -1]);
}

$('#main').highcharts({
chart: {
type: 'spline',
animation: Highcharts.svg,
marginRight: 10,
events: {
load: function () {

var series_temp = this.series[0],
series_humi = this.series[1],
series_soil_moisture = this.series[2],
chart = this;
setInterval(function () {
		var xmlhttp = new XMLHttpRequest();
		var url = "data_3.json";
		xmlhttp .overrideMimeType("application/json");
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var myArr = JSON.parse(this.responseText);
		        json_temp = myArr['temp_3']
		        json_humi = myArr['humi_3']
		        json_soil_moisture = myArr['soil_moisture_3']
		    }
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();
        
        document.getElementById("Temperature30").innerHTML =  json_temp;
        document.getElementById("Humidity33").innerHTML = json_humi;
        document.getElementById("Soil_moisture30").innerHTML = json_soil_moisture;
        
        var x = (new Date()).getTime();
        y_temp = Number(json_temp);
		y_humi = Number(json_humi);
		y_soil_moisture = Number(json_soil_moisture);
		
		series_temp.addPoint([x, y_temp], true, true);		
		series_humi.addPoint([x, y_humi], true, true);
		series_soil_moisture.addPoint([x, y_soil_moisture], true, true);
		activeLastPointToolip(chart);
}, 3000);
}
}
},
title: {
text: 'Temperature and Humidity and Soil Moisture'
},
credits: { 
enabled: false 
},
xAxis: {
type: 'datetime',
tickPixelInterval: 150
},
yAxis: {
title: {
text: 'data sensor'
},
plotLines: [{
value: 0,
width: 1,
color: '#808080'
}]
},
tooltip: {
formatter: function () {
return '<b>' + this.series.name + '</b><br/>' +
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
Highcharts.numberFormat(this.y, 2);
}
},
series: [
{
name: 'temperature',
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -19; i <= 0; i += 1) {
data.push({
x: time + i * 1000,
y: Math.random()
});
}
return data;
}())
},

{
name: 'humidity',
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -19; i <= 0; i += 1) {
data.push({
x: time + i * 1000,
y: Math.random()
});
}
return data;
}())
},

{
name: 'soil_moisture',
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -19; i <= 0; i += 1) {
data.push({
x: time + i * 1000,
y: Math.random()
});
}
return data;
}())
},]
}, 
function(c) {
activeLastPointToolip(c)
});
		
</script>

<div style="height: 410px;min-height: 100px;margin: 0px auto;padding-left: 50px;padding-right: 50px;" id="extra"> </div>
<script type="text/javascript">

Highcharts.setOptions({
global: {
useUTC: false
}
});

function activeLastPointToolip(chart) {
var points = chart.series[0].points;
chart.tooltip.refresh(points[points.length -1]);
}

$('#extra').highcharts({
chart: {
type: 'column',
animation: Highcharts.svg,
marginRight: 10,
events: {
load: function () {

var series_temp = this.series[0],
chart = this;
setInterval(function () {
		var xmlhttp = new XMLHttpRequest();
		var url = "data_3.json";
		xmlhttp .overrideMimeType("application/json");
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var myArr = JSON.parse(this.responseText);
		        json_rainfall = myArr['rainfall_3']
		    }
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();
        
        document.getElementById("rainfall30").innerHTML =  json_rainfall;
        
        var x = (new Date()).getTime();
        y_temp = Number(json_rainfall);
		
		series_temp.addPoint([x, y_temp], true, true);		
		activeLastPointToolip(chart);
}, 3000);
}
}
},
title: {
text: 'Lượng mưa'
},
credits: { 
enabled: false 
},
xAxis: {
type: 'datetime',
tickPixelInterval: 150
},
yAxis: {
title: {
text: 'data sensor'
},
plotLines: [{
value: 0,
width: 1,
color: '#808080'
}]
},
tooltip: {
formatter: function () {
return '<b>' + this.series.name + '</b><br/>' +
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
Highcharts.numberFormat(this.y, 2);
}
},
series: [
{
name: '',
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -19; i <= 0; i += 1) {
data.push({
x: time + i * 1000,
y: Math.random()
});
}
return data;
}())
},]
}, 
function(c) {
activeLastPointToolip(c)
});
		
</script>
</body>



</html> 