<?php


// $students = [

// "ali"=>90,
// "khan"=>50,
// "sara"=>90,
// "mansoor ali"=>98,

// ];
// Expected:

// Topper = Sara
// Marks = 90

// Real world:

// highest sales
// top product
// most viewed page

$students = [

"ali"=>90,
"khan"=>50,
"sara"=>90,
"mansoor ali"=>98,
];

$highest_marks= 0;
$topper_name = 0;

foreach($students as $name => $marks){
    if($marks>$highest_marks){
        $highest_marks =$marks;
        $topper_name= $name;
    }
}

echo "Topper = ".$topper_name;
echo "<br>";
echo "highest marks =".$highest_marks;
?>