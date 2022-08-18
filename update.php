<?php
if(isset($_GET['temp']) && isset($_GET['humi']) && isset($_GET['soil_moisture']) && isset($_GET['rainfall'])){
    $temp = $_GET['temp'];
    $humi = $_GET['humi'];
    $soil_moisture = $_GET['soil_moisture'];
    $rainfall = $_GET['rainfall'];
    $b = array(
            'temp'=>$temp, 
            'humi'=>$humi,
            'soil_moisture'=>$soil_moisture,
            'rainfall'=>$rainfall
    );
    $filedata = fopen("data.json", "w");
    if( $filedata == false )
    {
    	echo "error make file ";
    	exit();
    }
    $data = json_encode($b);
    fwrite($filedata, $data );
    fclose($filedata);
    echo($data);
    }
    
elseif(isset($_GET['temp_2']) && isset($_GET['humi_2'])&& isset($_GET['soil_moisture_2']) && isset($_GET['rainfall_2'])){
    $temp = $_GET['temp_2'];
    $humi = $_GET['humi_2'];
    $soil_moisture = $_GET['soil_moisture_2'];
    $rainfall = $_GET['rainfall_2'];
    $b = array(
            'temp_2'=>$temp, 
            'humi_2'=>$humi,
            'soil_moisture_2'=>$soil_moisture,
            'rainfall_2'=>$rainfall
    );
    $filedata = fopen("data_2.json", "w");
    if( $filedata == false )
    {
    	echo "error make file ";
    	exit();
    }
    $data = json_encode($b);
    fwrite($filedata, $data );
    fclose($filedata);
    echo($data);
    }
elseif(isset($_GET['temp_3']) && isset($_GET['humi_3'])&& isset($_GET['soil_moisture_3'])&& isset($_GET['rainfall_3'])){
    $temp = $_GET['temp_3'];
    $humi = $_GET['humi_3'];
    $soil_moisture = $_GET['soil_moisture_3'];
    $rainfall = $_GET['rainfall_3'];
    $b = array(
            'temp_3'=>$temp, 
            'humi_3'=>$humi,
            'soil_moisture_3'=>$soil_moisture,
            'rainfall_3'=>$rainfall
    );
    $filedata = fopen("data_3.json", "w");
    if( $filedata == false )
    {
    	echo "error make file ";
    	exit();
    }
    $data = json_encode($b);
    fwrite($filedata, $data );
    fclose($filedata);
    echo($data);
    }
else{
    echo "no data";
}
?>