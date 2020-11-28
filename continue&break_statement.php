<?php 

//continue and break statement


//continue statement

for($a=1; $a<=10; $a++) {
    if($a == 5){
        echo $a . "<br>";
        continue;
    }
    echo $a . "<br>"; 
}



echo "<br>";


//break statement

for($a=1; $a<=10; $a++) {
    if($a == 5){
        echo $a . "<br>";
        break;
    }
    echo $a . "<br>"; 
}





?>