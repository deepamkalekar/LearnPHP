<?php 

//ternary operator

//Conditional ternary operator syntax

// (condition) ? True statement : False statement


// Example 1


 $a = 20;


 ($a > 10) ? $z = "greater" : $z = "smaller";

 echo $z, "<br>";


//example 2


$z = $a > 10 ? "greater" : "smaller";

echo $z, "<br>";

//example 3

$z = "The value is : " . ($a > 10 ? "greater" : "smaller");

echo $z, "<br>";











?>