<?php
$array = [10,20,30,40,50];
// Concepts:

// loop
// accumulator variable
// // 

//1 way array_map()  wrong it rtuen array
// count()  wrong it rtuen array
// +=

// $result = array_map(function($sum){
// return $sum+$sum;
// },$array);

// print_r($result);

// $result =count($array);--> not

// var_dump($result);

// not
// $result = array_reduce($array, function($sum,$num){
//     return $num + $sum;
// });

// var_dump($result);

// 
// foreach($array as $values){
//     $result +=$values;
// }

// var_dump($result);
/// all above wrong





// right 

// $values =count($array);
// $count = 0;
// for($i = 0; $i< $values -1; $i++){
//     echo "sum  = ".$array[$i];
//      $count+=$array[$i];
//     // echo $i;
//     // echo "df";
// }

// echo $count;

// $count = 0;
// $array = [10, 20, 30, 40, 50];

// $count = 0;

// foreach($array as $val){
//     // Agar value 50 ho, toh usko skip kar do
//     if($val == 50) {

//         break; // Isse loop bina plus kiye agle round pe chala jayega
//         // echo "df";
//     }
    
//     $count += $val;
// }

// echo $count; // Output: 100


?>