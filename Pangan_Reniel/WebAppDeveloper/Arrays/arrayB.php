<?php
$array_num = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($array_num);
$inc = 0;

foreach($array_num as $val){
    
    if($array_num[$inc]%2==1){

      $array_num[$inc] = round($array_num[$inc] / 10) * 10;
    }
    
    $inc++;
}


for($x=0; $x<count($array_num); $x++)
  {
    echo $array_num[$x]. " ";
  }
?>