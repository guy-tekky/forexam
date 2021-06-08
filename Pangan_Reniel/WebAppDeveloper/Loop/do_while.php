<?php

echo dowhileloop(); 

function dowhileloop(){

    $array_num = range(0, 10);
    $test_num = 2; 
    $inc = 0;
    $val = 0;


    do{
        if($array_num[$inc]%$test_num==1){
            $val = $val + $array_num[$inc];
          }
          
          $inc++;
    }
    while($inc < count($array_num));

    return "The sum of all odd numbers from 0-10 is: ". $val;
}
?>