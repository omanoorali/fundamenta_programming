<?php
// string reverse
// hint explode , reverse , impode.
// aray main convert karenge.
// array ko reverse karnge.
// or fir array ko string main convert karenge.



$string =  "this is testing array reverse";

$array = explode(" ", $string);

$result = array_reverse($array);
// print_r($result);
$revese_data = implode(" ", $result);

// echo" with bultin methods ::|| ".$revese_data;




// 1 string k length maloom kane hogi. 
/// agr leth pata nhi h to while loop use hoga on array.

// 2 length p loop chalege reverse. for loop kun k lenth pata h abhe.
// 3 condtion lage k space k lia age space match hoti h to wo break kare ho word count ho jai.
// $word_count variable

$string = "this is testing array reverse";
$lenght = 0;
$word_count = "";
$revese_data = "";
while (isset($string[$lenght])) {
    $lenght++;
}

// echo $lenght;

for ($i = $lenght - 1; $i >= 0; $i--) {

    if ($string[$i] !== " ") {
        $word_count = $string[$i] . $word_count;
    } else {
        if ($word_count !== " ") {
            $revese_data .= $word_count . " ";
            $word_count = " ";
        }
    }
}

if($word_count !== " "){
    $revese_data.=$word_count;
}
echo $revese_data;
