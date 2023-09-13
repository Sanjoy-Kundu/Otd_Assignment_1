<?php
$fist_number = $_POST["fist_number"];
$second_number = $_POST["second_number"];
$operation = $_POST["operation"];
$output = "";

if($operation == "add"){
    $output = $fist_number + $second_number;
    echo "Toatal Addition is $output";
}else if($operation == "sub"){
    $output = $fist_number - $second_number;
    echo "Substruction is $output";
}else if($operation == "multi"){
    $output = $fist_number * $second_number;
    echo "Multiplication is $output";
}else if($operation == "divi"){
    $output = $fist_number / $second_number;
    echo "Division is $output";
}
?>