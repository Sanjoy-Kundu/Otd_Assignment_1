<?php
session_start();
$temp_input = $_POST["temp_input"];
$temp_select = $_POST["temp_select"];
$result = "";
//Celsius (°C) = (Temperature in degrees Fahrenheit (°F) - 32) * 5/9.
if($temp_select == "celsius"){
    $celsius = ($temp_input -32) * 5/9;
    $result = $celsius;
    echo $result."<sup>0</sup> Celsius";
}else{
    //F = (C * 9/5) + 32
    $farenheight = ($temp_input * 9/5) +32;
    $result = $farenheight;
    echo $result."<sup>0</sup> Farenheight";
  
}

?>