<?php
$your_marks = $_POST["your_marks"];

if($your_marks>= 80 && $your_marks <= 100){
    echo "You Have Got A";
}else if($your_marks >=70 && $your_marks <= 79){
    echo "You Have Got B";
}else if($your_marks >= 60 && $your_marks <= 69){
    echo "You Have Got C";
}else if($your_marks >=33 && $your_marks <= 59){
    echo "You Have Got D";
}else if($your_marks >=0 && $your_marks <= 32){
    echo "You Have Got F";
}else if($your_marks< 0){
    echo "Plese Enter a Posivite Number";
}else if($your_marks > 100){
    echo "You are a idot";
}
?>