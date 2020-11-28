<?php 


$a = 20;
$b = 10;

// syntax of if statement
//if condition is true then it will execute otherwise not  
//there are two ways to write if statement.
//type1
// if(condition) {
//     execution
// };

if($a > $b) {
    echo "A is greater tha B" , "<br>";
};

//type2
// if(condition) : execution 
// endif

if($a > $b) : echo "A is greater tha B";
endif;
?>