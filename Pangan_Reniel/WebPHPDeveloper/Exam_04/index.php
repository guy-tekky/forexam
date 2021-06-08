<?php

function countdate($date1 , $date2){
    
    
    $date1 = strtotime($date1);
    $date2 = strtotime($date2);

    $difference = abs($date2 - $date1); 
    $years = floor($difference / (365*60*60*24)); 
    $months = floor(($difference - $years * 365*60*60*24)/ (30*60*60*24)); 
    $days = floor(($difference - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


    return $years. " yr/s, " .$months. " month/s, " .$days. " day/s";

  
} 

echo countdate("2019-05-31", "2018-04-05");

?>