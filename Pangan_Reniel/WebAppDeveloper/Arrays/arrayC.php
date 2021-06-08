<?php

$array_num = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');
foreach($array_num as $val)
{
  $array_holder[$val][] = 1;
}
foreach($array_holder as $key => $val)
{
  if(count($val) == 1)
    $array_filtered[] = $key;
}

for($x=0; $x<count($array_filtered); $x++)
{
  echo $array_filtered[$x]. " ";
}
?>