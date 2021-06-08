<?php

$array_names = array("Marvin", "Marvin", "Marco", "Marco", "Marvin", "Christian");

$value1 = max(array_count_values($array_names));
$check = 0;

//for checking if the max number is more than one
foreach(array_count_values($array_names) as $val){
	if($value1 == $val){
    	$check++;
    }
}

if($check==1){
	echo array_search($value1, array_count_values($array_names)); 
}
else{
	sort($array_names);
  for($x=0; $x<count($array_names); $x++)
  {
    echo $array_names[$x]. " ";
  }
}
?>