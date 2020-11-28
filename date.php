<?php 		
$textdt=" Nov ";
$dt= strtotime( $textdt);
$currdt=$dt;
$nextmonth=strtotime($textdt."+1 month");
$i=0;
do 
{
    $weekday= date("w",$currdt);
    $nextday=7-$weekday;
    $endday=abs($weekday-6);
    $startarr[$i]=$currdt;
    $endarr[$i]=strtotime(date("Y-m-d",$currdt)."+$endday day");
    $currdt=strtotime(date("Y-m-d",$endarr[$i])."+1 day");
    echo "Week ".($i+1). "-> start date = ". date("Y-m-d",$startarr[$i])." end date = ". date("Y-m-d",$endarr[$i])."<br>";
     $i++;
 	  		     
}while($endarr[$i-1]<$nextmonth);
?>