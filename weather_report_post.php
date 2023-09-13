<?php
$temperature = $_POST["temperature"];

if($temperature <= 0){
    echo "The Weather is freezing";
}else if($temperature > 0 && $temperature <= 20){
    echo "The Weather is cool";
}else{
    echo "The weather is warm";
}

?>