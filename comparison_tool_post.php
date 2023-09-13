<?php
$first = $_POST["first"];
$second = $_POST["second"];

$result = $first > $second ? $first : $second;
echo "The large number is ".$result;

?>