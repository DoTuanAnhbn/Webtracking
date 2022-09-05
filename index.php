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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">   
  
  <title>Solution Intelligent Cooperation</title>
  <link rel = "icon" href = "img/logo_duan.png" type = "image/x-icon">

  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyCihnBz_63PwzikbgoL4Ac7txv05PQUdNQ",
      authDomain: "canh-bao-sac-lo-dat.firebaseapp.com",
      databaseURL: "https://canh-bao-sac-lo-dat-default-rtdb.firebaseio.com",
      projectId: "canh-bao-sac-lo-dat",
      storageBucket: "canh-bao-sac-lo-dat.appspot.com",
      messagingSenderId: "475059644552",
      appId: "1:475059644552:web:e51fad1da22eb54442973d",
      measurementId: "G-Q990B4764L"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    import { getDatabase, ref, get, set, child, update, remove } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-database.js";
    
    const db=getDatabase();
    const dbref = ref(db);
    var data_rain=[];
    function getdata(){
        get(child(dbref,"Station_1")).then((snapshot)=>{
            if(snapshot.exists()){
                var json_temp = snapshot.val().Temperature;
                var json_humi = snapshot.val().Humidity;
                var json_soil_moisture = snapshot.val().HumidityLand;
                var json_rainfall = snapshot.val().RainFall;
                document.getElementById("Temperature30").innerHTML = json_temp;
                document.getElementById("Humidity33").innerHTML = json_humi;
                document.getElementById("Soil_moisture30").innerHTML = json_soil_moisture;
                document.getElementById("rainfall30").innerHTML = json_rainfall;
                }
            }
            )
        }
    setInterval(getdata,1000);

    function getdata_rain(){
        get(child(dbref,"Station_1/Test")).then((snapshot)=>{
            if(snapshot.exists()){
                var json_rain = snapshot.val().T1;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T2;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T3;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T4;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T5;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T6;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T7;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T8;
                data_rain.push(json_rain);  
                var json_rain = snapshot.val().T9;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T10;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T11;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T12;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T13;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T14;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T15;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T16;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T17;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T18;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T19;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T20;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T21;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T22;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T23;
                data_rain.push(json_rain);
                var json_rain = snapshot.val().T24;
                data_rain.push(json_rain);
                //localStorage.clear("data_rain");
                localStorage.setItem("data_rain",JSON.stringify(data_rain));
                }
            }
            )
        }
    getdata_rain();

  </script>
</head>
<body>
<p></p>
<div style = "float: left; width: 80%"  id="logo+ten">
    <div style = "float: left; width: 30%;margin-left:5%" ><img  src="img/logo_duan.png"></div>
    <div style = "float: right; width: 54%;margin-top:11%;margin-right:10%" ><h1 class="ui center dividing aligned header">Research On Landslide Equipment</h1></div>
</div>

<div  style="float: left; width: 100%;margin-left:6%" id="btnchuyentrang">
  <ul class="pagination" style = "padding-left:auto;margin:0; list-style:None;">
    <li class="disabled" style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;">
      <a class="page-link" href="#" aria-label="Previous" style="color:#000; text-align:center; text-decoration:none;">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Trước</span>
      </a>
    </li>
    <li  style ="float:left; background:#E88686; display:block;  padding:5px; margin:5px;"><a href="#" style="color:#000; text-align:center; text-decoration:none;">Station 1</a></li>
    <li  style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;"><a href="page_2.php" style="color:#000; text-align:center; text-decoration:none;">Station 2</a></li>
    <li class="page-item" style ="float:left; background:#DFF0EE; display:block;  padding:5px; margin:5px;">
      <a class="page-link" href="page_2.php" aria-label="Next" style="color:#000; text-align:center; text-decoration:none;">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Sau</span>
      </a>
    </li>
  </ul><br>
</div>

<div class="column" style = "float: left; width: 25%;padding-left:6%;margin-top:5%" id="dulieu">
    <div><h4 style = " text-align: center; font-family:'Times New Roman', Times, serif">Dữ liệu thu thập</h4>
        <div class="wrapper">
            <div class="section group">
                <div class="row">
                    <div class="col span_1_of_4" style = "float: left; width: 49%;">
                        <div class="ui cards">
                            <div class="card">
                                <div class="content">
                                    <img class="right floated mini ui image" src="img/thermometer.png">
                                    <div class="header">Nhiệt Độ</div>
                                    <div class="meta">Station 1</div>
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
                                    <div class="meta">Station 1</div>
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
                                    <div class="meta">Station 1</div>
                                </div>
                                <div style="text-align:center;" class="extra content centered">
                                    <div class="ui labeled button" tabindex="0">
                                        <div id="Soil_moisture30" class="ui basic blue button" >
                                        <p id="soil_moisture" class="ui active small inline loader"> </p> 
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
                                    <div class="header">Lượng mưa</div>
                                    <div class="meta">Station 1</div>
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
</div>

<div class="column" style ="float: left; width: 40%; height: auto;margin-top:5%; text-align: center" id="dulieucanhbao">
    <div><h4 style = " text-align: center;font-family:'Times New Roman', Times, serif"">Dữ liệu cảnh báo</h4></div>
    <form style="padding:50px;text-align: center" autocomplete="on">
        <div style = "float: left; width: 25%;">
        <h5 style = "font-family:'Times New Roman', Times, serif">Nhiệt độ</h5><br>
        <label for="nguyhiem">Nguy hiểm</label><br>
        <input type="number" style="text-align: center;" name="muc2_nhietdo" id="muc2_nhietdo"><br>
        <label for="canhbao">Cảnh báo</label><br>
        <input type="number" style="text-align: center;" name="muc1_nhietdo" id="muc1_nhietdo"><br>
        <label for="antoan">An toàn</label><br>
        <h6 id="hienthicanhbaonhietdo">Chưa có dữ liệu</h6><br>
        <button id="nhapbtnnhietdo" class="btn waves-effect waves-light">Nhập</button>
        </div>

        <div style = "float: left;width: 50%;">
        <h5 style = "font-family:'Times New Roman', Times, serif">Độ ẩm đất</h5><br>
        <label for="nguyhiem">Nguy hiểm</label><br>
        <input type="number" style="text-align: center;" name="muc2_doamdat" id="muc2_doamdat"><br>
        <label for="canhbao">Cảnh báo</label><br>
        <input type="number" style="text-align: center;" name="muc1_doamdat" id="muc1_doamdat"><br>
        <label for="antoan">An toàn</label><br>
        <h6 id="hienthicanhbaodoamdat">Chưa có dữ liệu</h6><br>
        <button id="nhapbtndoamdat" class="btn waves-effect waves-light">Nhập</button>
        </div>

        <div style = "float: right;width: 25%;">
        <h5 style = "font-family:'Times New Roman', Times, serif">Lượng mưa</h5><br>
        <label for="nguyhiem">Nguy hiểm</label><br>
        <input type="number" style="text-align: center;" name="muc2_luongmua" id="muc2_luongmua"><br>
        <label for="canhbao">Cảnh báo</label><br>
        <input type="number" style="text-align: center;" name="muc1_luongmua" id="muc1_luongmua"><br>
        <label for="antoan">An toàn</label><br>
        <h6 id="hienthicanhbaoluongmua">Chưa có dữ liệu</h6><br>
        <button id="nhapbtnluongmua" class="btn waves-effect waves-light">Nhập</button>
        </div>

        <script>
            const nhapbtnnhietdo=document.getElementById("nhapbtnnhietdo");
            const nhapbtndoamdat=document.getElementById("nhapbtndoamdat");
            const nhapbtnluongmua=document.getElementById("nhapbtnluongmua");

            var muc1_nhietdo = localStorage.getItem("muc1_nhietdo");
            var placeholder = document.getElementsByName("muc1_nhietdo")[0];
            placeholder.placeholder=muc1_nhietdo;
            var muc2_nhietdo = localStorage.getItem("muc2_nhietdo");
            placeholder = document.getElementsByName("muc2_nhietdo")[0];
            placeholder.placeholder=muc2_nhietdo;

            var muc1_doamdat = localStorage.getItem("muc1_doamdat");
            placeholder = document.getElementsByName("muc1_doamdat")[0];
            placeholder.placeholder=muc1_doamdat;
            var muc2_doamdat = localStorage.getItem("muc2_doamdat");
            placeholder = document.getElementsByName("muc2_doamdat")[0];
            placeholder.placeholder=muc2_doamdat;

            var muc1_luongmua = localStorage.getItem("muc1_luongmua");
            placeholder = document.getElementsByName("muc1_luongmua")[0];
            placeholder.placeholder=muc1_luongmua;
            var muc2_luongmua = localStorage.getItem("muc2_luongmua");
            placeholder = document.getElementsByName("muc2_luongmua")[0];
            placeholder.placeholder=muc2_luongmua;

            nhapbtnnhietdo.addEventListener("click",(e)=>{
            e.preventDefault();
            muc1_nhietdo=document.getElementById("muc1_nhietdo");
            localStorage.setItem("muc1_nhietdo",(muc1_nhietdo).value);
            muc2_nhietdo=document.getElementById("muc2_nhietdo");
            localStorage.setItem("muc2_nhietdo",(muc2_nhietdo).value);
            })

            nhapbtndoamdat.addEventListener("click",(e)=>{
            e.preventDefault();
            muc1_doamdat=document.getElementById("muc1_doamdat");
            localStorage.setItem("muc1_doamdat",(muc1_doamdat).value);
            muc2_doamdat=document.getElementById("muc2_doamdat");
            localStorage.setItem("muc2_doamdat",(muc2_doamdat).value);
            })

            nhapbtnluongmua.addEventListener("click",(e)=>{
            e.preventDefault();
            muc1_luongmua=document.getElementById("muc1_luongmua");
            localStorage.setItem("muc1_luongmua",(muc1_luongmua).value);
            muc2_luongmua=document.getElementById("muc2_luongmua");
            localStorage.setItem("muc2_luongmua",(muc2_luongmua).value);
            })
            
            function sosanhdulieu(){
                if((0<Number(document.getElementById("Temperature30").innerHTML))&&(Number(document.getElementById("Temperature30").innerHTML)<=muc1_nhietdo.value)){
                    document.getElementById("hienthicanhbaonhietdo").innerHTML="An toàn";
                    document.getElementById("hienthicanhbaonhietdo").style.color="green";
                }
                if((muc1_nhietdo.value<Number(document.getElementById("Temperature30").innerHTML))&&(Number(document.getElementById("Temperature30").innerHTML)<=muc2_nhietdo.value)){
                    document.getElementById("hienthicanhbaonhietdo").innerHTML="Cảnh báo";
                    document.getElementById("hienthicanhbaonhietdo").style.color="#FFC000";
                }
                if((muc2_nhietdo.value<Number(document.getElementById("Temperature30").innerHTML))&&muc2_nhietdo.value>0){
                    document.getElementById("hienthicanhbaonhietdo").innerHTML="Nguy hiểm";
                    document.getElementById("hienthicanhbaonhietdo").style.color="red";
                }
                if((0<Number(document.getElementById("Temperature30").innerHTML))&&(Number(document.getElementById("Temperature30").innerHTML)<=muc1_nhietdo)){
                    document.getElementById("hienthicanhbaonhietdo").innerHTML="An toàn";
                    document.getElementById("hienthicanhbaonhietdo").style.color="green";
                }
                if((muc1_nhietdo<Number(document.getElementById("Temperature30").innerHTML))&&(Number(document.getElementById("Temperature30").innerHTML)<=muc2_nhietdo)){
                    document.getElementById("hienthicanhbaonhietdo").innerHTML="Cảnh báo";
                    document.getElementById("hienthicanhbaonhietdo").style.color="#FFC000";
                }
                if((muc2_nhietdo<Number(document.getElementById("Temperature30").innerHTML))&&muc2_nhietdo>0){
                    document.getElementById("hienthicanhbaonhietdo").innerHTML="Nguy hiểm";
                    document.getElementById("hienthicanhbaonhietdo").style.color="red";
                }

                if((0<Number(document.getElementById("Soil_moisture30").innerHTML))&&(Number(document.getElementById("Soil_moisture30").innerHTML)<=muc1_doamdat.value)){
                    document.getElementById("hienthicanhbaodoamdat").innerHTML="An toàn";
                    document.getElementById("hienthicanhbaodoamdat").style.color="green";
                }
                if((muc1_doamdat.value<Number(document.getElementById("Soil_moisture30").innerHTML))&&(Number(document.getElementById("Soil_moisture30").innerHTML)<=muc2_doamdat.value)){
                    document.getElementById("hienthicanhbaodoamdat").innerHTML="Cảnh báo";
                    document.getElementById("hienthicanhbaodoamdat").style.color="#FFC000";
                }
                if((muc2_doamdat.value<Number(document.getElementById("Soil_moisture30").innerHTML))&&muc2_doamdat.value>0){
                    document.getElementById("hienthicanhbaodoamdat").innerHTML="Nguy hiểm";
                    document.getElementById("hienthicanhbaodoamdat").style.color="red";
                }
                if((0<Number(document.getElementById("Soil_moisture30").innerHTML))&&(Number(document.getElementById("Soil_moisture30").innerHTML)<=muc1_doamdat)){
                    document.getElementById("hienthicanhbaodoamdat").innerHTML="An toàn";
                    document.getElementById("hienthicanhbaodoamdat").style.color="green";
                }
                if((muc1_doamdat<Number(document.getElementById("Soil_moisture30").innerHTML))&&(Number(document.getElementById("Soil_moisture30").innerHTML)<=muc2_doamdat)){
                    document.getElementById("hienthicanhbaodoamdat").innerHTML="Cảnh báo";
                    document.getElementById("hienthicanhbaodoamdat").style.color="#FFC000";
                }
                if((muc2_doamdat<Number(document.getElementById("Soil_moisture30").innerHTML))&&muc2_doamdat>0){
                    document.getElementById("hienthicanhbaodoamdat").innerHTML="Nguy hiểm";
                    document.getElementById("hienthicanhbaodoamdat").style.color="red";
                }

                if((0<Number(document.getElementById("rainfall30").innerHTML))&&(Number(document.getElementById("rainfall30").innerHTML)<=muc1_luongmua.value)){
                    document.getElementById("hienthicanhbaoluongmua").innerHTML="An toàn";
                    document.getElementById("hienthicanhbaoluongmua").style.color="green";
                }
                if((muc1_luongmua.value<Number(document.getElementById("rainfall30").innerHTML))&&(Number(document.getElementById("rainfall30").innerHTML)<=muc2_luongmua.value)){
                    document.getElementById("hienthicanhbaoluongmua").innerHTML="Cảnh báo";
                    document.getElementById("hienthicanhbaoluongmua").style.color="#FFC000";
                }
                if((muc2_luongmua.value<Number(document.getElementById("rainfall30").innerHTML))&&muc2_luongmua.value>0){
                    document.getElementById("hienthicanhbaoluongmua").innerHTML="Nguy hiểm";
                    document.getElementById("hienthicanhbaoluongmua").style.color="red";
                }
                if((0<Number(document.getElementById("rainfall30").innerHTML))&&(Number(document.getElementById("rainfall30").innerHTML)<=muc1_luongmua)){
                    document.getElementById("hienthicanhbaoluongmua").innerHTML="An toàn";
                    document.getElementById("hienthicanhbaoluongmua").style.color="green";
                }
                if((muc1_luongmua<Number(document.getElementById("rainfall30").innerHTML))&&(Number(document.getElementById("rainfall30").innerHTML)<=muc2_luongmua)){
                    document.getElementById("hienthicanhbaoluongmua").innerHTML="Cảnh báo";
                    document.getElementById("hienthicanhbaoluongmua").style.color="#FFC000";
                }
                if((muc2_luongmua<Number(document.getElementById("rainfall30").innerHTML))&&muc2_luongmua>0){
                    document.getElementById("hienthicanhbaoluongmua").innerHTML="Nguy hiểm";
                    document.getElementById("hienthicanhbaoluongmua").style.color="red";
                }

                else{}
            }

            setInterval(sosanhdulieu,1000);

        </script>
    </form>
</div>

<div class= "column" style = "float: right; width: 35%; height: auto;margin-top:5%; text-align: center;padding-right:6%;" id="bando">
    <h4 style = "font-family:'Times New Roman', Times, serif">Bản đồ</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.709500953291!2d105.84369595084699!3d21.004278793920065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac768ffe1abd%3A0x22b136bcf1c08e2a!2zQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1661927144520!5m2!1svi!2s" width="500" height="400" style="border:0;padding-right:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
</div>

<div style="float: left;height: auto;width: 90%;padding-left:10%;padding-right:5%; margin-top:5%" id="bieudochung">
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
$('#bieudochung').highcharts({
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
        var x = (new Date()).getTime();
        y_temp = Number(document.getElementById("Temperature30").innerHTML);
		y_humi = Number(document.getElementById("Humidity33").innerHTML);
		y_soil_moisture = Number(document.getElementById("Soil_moisture30").innerHTML);
		
		series_temp.addPoint([x, y_temp], true, true);		
		series_humi.addPoint([x, y_humi], true, true);
		series_soil_moisture.addPoint([x, y_soil_moisture], true, true);
		activeLastPointToolip(chart);
}, 2000);
}
}
},
title: {
text: 'Biểu đồ nhiệt độ, độ ẩm và độ ẩm đất'
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
text: ''
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
name: 'Nhiệt độ',
data: (function () {
// generate an array of random data
var data= [],
time = (new Date()).getTime(),
i;
for (i = -11; i <= 0; i += 1) {
data.push({
x: time + i * 2000,
y: Math.random()*10+36
});
}
return data;
}())
},

{
name: 'Độ ẩm',
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -11; i <= 0; i += 1) {
data.push({
x: time + i * 2000,
y: Math.random()*10+60
});
}
return data;
}())
},

{
name: 'Độ ẩm đất',
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -11; i <= 0; i += 1) {
data.push({
x: time + i * 2000,
y: Math.random()*10+60
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
</div>

<div>
    <div  style="float: left; display:inline; height: auto;width: 90%;padding-left:10%;padding-right:5%; margin-top:5%" id="bieudoluongmuangay">
    <script type="text/javascript">
var data_rain = JSON.parse(localStorage.getItem("data_rain"));
Highcharts.setOptions({
global: {
useUTC: false
}
});

function activeLastPointToolip(chart) {
var points = chart.series[0].points;
chart.tooltip.refresh(points[points.length -1]);
}

$('#bieudoluongmuangay').highcharts({
chart: {
type: 'column',
animation: Highcharts.svg,
marginRight: 10,
events: {
load: function () {

var series_temp = this.series[0],
chart = this;
setInterval(function () {
    var x = (new Date()).getTime();
    y_rainfall = Number(document.getElementById("rainfall30").innerHTML);
    
    series_temp.addPoint([x, y_rainfall], true, true);		
    activeLastPointToolip(chart);
}, 3600000);
}
}
},
title: {
text: 'Biểu đồ lượng mưa'
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
text: ''
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
name: 'Lượng mưa',   
data: (function () {
// generate an array of random data
var data = [],
time = (new Date()).getTime(),
i;
for (i = -23; i <= 0; i += 1) {
data.push({
x: time + i * 3600000,
y: data_rain[i+23]
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
    </div>
    <div style="float: left; display:none; height: auto;width: 90%;padding-left:10%;padding-right:5%; margin-top:5%" id="bieudoluongmuatuan">
        <script type="text/javascript">
    var data_rain = JSON.parse(localStorage.getItem("data_rain"));
    Highcharts.setOptions({
    global: {
    useUTC: false
    }
    });
    
    function activeLastPointToolip(chart) {
    var points = chart.series[0].points;
    chart.tooltip.refresh(points[points.length -1]);
    }
    
    $('#bieudoluongmuatuan').highcharts({
    chart: {
    type: 'column',
    animation: Highcharts.svg,
    marginRight: 10,
    events: {
    load: function () {
    
    var series_temp = this.series[0],
    chart = this;
    setInterval(function () {
        var x = (new Date()).getTime();
        y_rainfall = Number(document.getElementById("rainfall30").innerHTML);
        
        series_temp.addPoint([x, y_rainfall], true, true);		
        activeLastPointToolip(chart);
    }, 86400000);
    }
    }
    },
    title: {
    text: 'Biểu đồ lượng mưa'
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
    text: ''
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
    name: 'Lượng mưa',   
    data: (function () {
    // generate an array of random data
    var data = [],
    time = (new Date()).getTime(),
    i;
    for (i = -6; i <= 0; i += 1) {
    data.push({
    x: time + i * 86400000,
    y: data_rain[i+6]
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
    </div>
</div>
<div style="float:left; padding-left:44%" id="btndieudoluongmua">
    <li  style ="float:left;display:block;  padding:5px; margin:5px;"><button class="btn waves-effect waves-light" style=" text-align:center; text-decoration:none;" id="btnluongmuangay">Ngày</button></li>
    <li  style ="float:left;display:block;  padding:5px; margin:5px;"><button class="btn waves-effect waves-light" style=" text-align:center; text-decoration:none;" id="btnluongmuatuan">Tuần</button></li>
    <script>
        const btnluongmuangay=document.getElementById("btnluongmuangay");
        const btnluongmuatuan=document.getElementById("btnluongmuatuan");
        btnluongmuangay.addEventListener("click",(e)=>{
            e.preventDefault();
            document.getElementById("bieudoluongmuangay").style.display="inline";
            document.getElementById("bieudoluongmuatuan").style.display="none";
        })
        btnluongmuatuan.addEventListener("click",(e)=>{
            e.preventDefault();
            document.getElementById("bieudoluongmuangay").style.display="none";
            document.getElementById("bieudoluongmuatuan").style.display="inline";
        })
    </script>
</div>


</body>
</html> 