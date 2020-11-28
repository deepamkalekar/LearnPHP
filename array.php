<?php 

//array

$colors = ["red", "Green", 20, "blue", 55];

echo $colors[1]."<br>";
echo $colors[0]."<br>";
echo $colors[2]."<br>";


//another way to print


echo "<pre>";           //this tag is for proper visualization of array 
print_r($colors);
echo "</pre>";

//another way to print array

for($i=0; $i < 5; $i++){
    echo $colors[$i]."<br>";
}

echo "<ul>";
for($i=0; $i < 5; $i++){
    echo "<li> $colors[$i] </li>";
}
echo "</ul>"



?>