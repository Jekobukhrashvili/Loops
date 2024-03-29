<?php

$x = $_POST["x"];
$y = $_POST["y"];
$operator = $_POST["calculate"];

if ($operator == "+") {
    echo ($x + $y);
    
} elseif ($operator == "-") {
    echo ($x - $y); 

} elseif ($operator == "*") {
    echo ($x * $y); 

} elseif ($operator == "/") {
    echo ($x / $y); 

} else {
  echo "Wrong Symbols";
}
