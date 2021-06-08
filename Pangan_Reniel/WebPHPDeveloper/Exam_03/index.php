<?php


function checkfibo($num2){
    $output = "";
    $num1 = 1;
    for($num1; $num1<=$num2; $num1++){
        $numholder = $num1 * $num1;
        $check1 = sqrt(5*$numholder + 4);
        $check2 = sqrt(5*$numholder - 4);
        if(( is_numeric( $check1 ) && strpos( $check1, '.' ) === false )  || ( is_numeric( $check2 ) && strpos( $check2, '.' ) === false ) ){
            $output.= $num1. " is a Fibonacci Number </br>";
        }
        else{
            $output.= $num1 . " is not a Fibonacci Number </br>";
        }
    }
    return $output;
}

echo checkfibo(10);

?>
