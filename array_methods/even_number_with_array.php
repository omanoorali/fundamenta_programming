<?php

// Task :  sirf even numbers print karo
// Concepts:

// foreach
// if
// modulus %

$array = [1,2,3,4,5,6,7,8,9,10];

foreach($array as $values){
    // echo $values."<br>";

    if($values % 2 ==0){
        echo "even".$values."<br>";
    }
}


?>