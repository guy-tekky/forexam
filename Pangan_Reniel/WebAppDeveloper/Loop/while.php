<?php

echo whileloop(); 

function whileloop(){

    $array_num = range(0, 10);
    $test_num = 2; 
    $inc = 0;
    $val = 0;

    while($inc < count($array_num)){
    
        if($array_num[$inc]%$test_num==0){
          $val = $val + $array_num[$inc];
        }
        
        $inc++;
    }

    return "The sum of all even numbers from 0-10 is: ". $val;
}
?>