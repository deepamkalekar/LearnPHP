<?php 

//Local Varaible

function test(){
    $x = 10;
    echo "variable x is a local varible: $x<br>";
}

test();     //calling function

// echo "Echo out of function variable  x : $x";  //this will give you error beacuse the variable is defined in the funtion which means Variable x is a loca variable



// Global Variable 

$y = 22;

function check(){
    global $y;      //to use global variabe insed the function we have to use (global)
    echo "This is a gobal variable y: $y<br>";
}
check();
echo "Echo out of the function variable y: $y<br>";



//Another example of global variable 

$a = 15;
$b = 30;

function math(){
    global $a, $b;
    $a = $a + $b;

}

math();
echo $a;
?>