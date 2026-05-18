<?php
// $students = [
//     "Ali" => 80,
//     "Ahmed" => 45,
//     "Sara" => 90,
// ];

// Task:

// pass/fail check karo
// 50 se upar = Pass

// Expected:

// Ali = Pass
// Ahmed = Fail
// Sara = Pass

// Concepts:

// associative arrays
// foreach ($key => $value)


$students = [
    "Ali" => 80,
    "Ahmed" => 45,
    "Sara" => 90,
    "mansoor"=>95,
];

echo "RESULT ";
        echo "<br>";

foreach($students as $key=> $value){
    if($value>50){
        echo $key." pass "." = ".$value;
        echo "<br>";
    }
    if($value<50){
       
        echo $key." fail"." = ".$value;
        echo "<br>";
    }
}


?>
