<?php 


//function argument by reference
///& use for reference

function sub(&$string) {
    $string .= "this is second string";
}

$str = "this is first   ";

sub($str);

echo $str;






?>