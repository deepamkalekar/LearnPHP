<?php 




//switch statement


// switch(expression) {
//     case(condition): statement;
//     break;

//     case(condition): statement;
//     break;

//     case(condition): statement;
//     break;

//     case(condition): statement;
//     break;

//     case(condition): statement;
//     break;

//     default: statement;

// }
$weekday = 5;


switch($weekday) {
    case 1: echo "aaaaa";
    break;

    case 2: echo "bbbbb";
    break;

    case 3: echo "ccccc";
    break;

    case 4: echo "dddddddd";
    break;

    case 5: echo "eeeeeeeeee";
    break;

    default: echo "000000000000";

}


echo "<br>";

//example 2

$per = 200;

switch($per) {
    case($per >= 80 && $per < 100): echo "merit";
    break;

    case($per >= 60 && $per <= 79): echo "1st division";
    break;

    case($per >= 40 && $per <= 59): echo "2nd division";
    break;

    case($per <= 39): echo "fail";
    break;

    default: echo "please enter valid number";

}
















?>