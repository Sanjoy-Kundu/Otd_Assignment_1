<?php
$check_number = $_POST["check_number"];

if($check_number%2 == 1){
    echo "$check_number is a ODD Number";
}else{
    echo "$check_number is a EVEN Number";
}

?>