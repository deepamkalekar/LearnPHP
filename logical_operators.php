<?php 

$a = 20;

//AND operator

if($a > 18 && $a < 22) {
    echo "the person is adult <br>";
}

if($a > 18 and $a < 22) {
    echo "the person is adult <br>";
}

//OR operator

if($a >= 18 || $a <= 22) {
    echo "the person is adult<br>";
}


if($a >= 18 or $a <= 22) {
    echo "the person is adult<br>";
}

//NOT operator

if(!($a >= 18)) {
    echo "this is a true statement but it will give false<br>";
}

if(!($a <= 18)) {
    echo "this condition is false but it will give true<br>";
}

//XOR operator

if($a >= 18 XOR $a <= 26) {
    echo "fbrsdfgswgrkfgik";
}


?>