<?php 

//funtion with return statement 


function hey($fname, $lname){
        $v = "$fname $lname";
        return $v;
}

$fullName = hey("aaaa", "bbbb");

echo $fullName . "<br>";


function sum($eng, $math, $bio){
    $s = $eng + $math + $bio;
    return $s;
}

function percentage($st){
    $per = $st / 90 * 100;
    echo  $per;
}

$total = Sum(10, 20, 30);

percentage($total);




?>