<?php 
$dateParam = '2018-06-10';
$week = date('w', strtotime($dateParam));
$date = new DateTime($dateParam);
$firstWeek = $date->modify("-".$week." day")->format("Y-m-d H:i:s");
$endWeek = $date->modify("+6 day")->format("Y-m-d H:i:s");
$firs2tWeek = $date->modify("-".$firstWeek ." day")->format("Y-m-d H:i:s");
$endWeek2 = $date->modify("+6 day")->format("Y-m-d H:i:s");
echo $firstWeek."<br/>";
echo $endWeek;
?>