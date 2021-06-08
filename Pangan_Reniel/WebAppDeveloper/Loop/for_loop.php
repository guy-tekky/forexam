<?php

echo whileloop(0 , 1); 

function whileloop($num1, $num2){
    
    $val = "";
    $holder = 0; 
    
    

    for($inc = 0; $inc < 9; $inc++){
    
        if($inc == 0){
            $val .= $num1.", ".$num2.", ";
        }
        elseif($inc > 0){
            $holder = $num1 + $num2;
            $num1 = $num2;
            $num2 = $holder;
            if($inc== 8){
                $val .= $holder."  ";
            }
            else{
                $val .= $holder.",  ";
            }
           
        }
        
    }

    return "The fibonacci sequence is: ". $val;
}
?>