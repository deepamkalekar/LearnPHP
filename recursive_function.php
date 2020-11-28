<?php 


//Recursive Fumction



function deli($num) {
    if($num <= 5){
        echo $num . "<br>";
        deli($num + 1);
 }
}

deli(1);




?>