<?php
$array = [1,2,34,5,6];
// Problem 3 — Largest Number
// Real world:
// highest price
// highest salary
// top score

 $count = count($array);
$find = 0;


for($i = 1; $i<=$count;$i++){
    // echo $i;
    if($array[$i] > $find){
        
     $find = $array[$i];

    }
}
echo $find;

?>