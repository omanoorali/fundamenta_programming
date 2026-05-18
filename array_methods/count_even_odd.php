<?php
// echo "test";

$numbers = [1,2,3,4,4,5,6];
// Concepts:

// counters
// conditions

$even = 0;

$odd = 0;

foreach($numbers as $values){
    if($values % 2 == 0){

     $even++; 

    }
   else{
    $odd++;
   }
}


echo $even;
echo "<br>";
echo $odd;
// var_dump($count);



?>