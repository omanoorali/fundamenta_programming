<?php

/////////////////////////////////////////// solution 1
// echo "fd";
// with method
$array = [1,2,2,3,3,4,5,6];
$result = array_unique($array);
print_r($result);
echo "<br>";
echo " built in methods of array_unique(): <br>";




/////////////////////////////////////////// solution 2
$array_uniq = [];
$duplicated = [];
foreach($array as $values){

    $already_exits = false;

    foreach($array_uniq as $index){
        if($index == $values){
            $already_exits = true;
        }
    }

    if($already_exits==  false){
        $array_uniq[]= $values;
    }
    if($already_exits ==  true){
        $duplicated[]= $values;
    }
}

print_r($array_uniq);

// print_r($duplicated);
echo "<br>";

echo  "self logic but same work using foreach loops  : <br>";

//  solution 2  in_array($vale, $array)-> ye check karta h values k ko array main h yan nhi.

/////////////////////////////////////////// solution 3

echo "<br>";
echo "now another solution using in_array() method ";
$duplicated = [];
$array_uniq = [];

foreach($array as $values){
//  echo $values;
if(in_array($values, $array_uniq)){

 $duplicated[]= $values;

}else{
    $array_uniq[]=$values;
}
}
echo "<br>";
print_r($array_uniq);


///
echo "<br>";
echo "<br>";
echo "<br>";

echo "now same work with for loop";
echo "<br>";

/////////////////////////////////////////// solution 4
$length = count($array);

$empty_array  = [];
$duplicated = [];

for($i = 0; $i<$length; $i++){
    $exites = false;
    $empty_count=count($empty_array);
    
     for($j = 0; $j< $empty_count; $j++){
        if($array[$i] == $empty_array[$j]){
             $exites =  true;
             break;
        }
     }
     if($exites== false){
        $empty_array[]=$array[$i];
     }
     if($exites== true){
        $duplicated[]=$array[$i];
     }
    
}

print_r($empty_array);


/////////////////////////////////////////// solution 5 
// using array_key();
echo "<br>";
echo "<br>";
echo "using array_key() method";
echo "<br>";
$array_key_uniqe = [];

foreach($array as $values){
    $array_key_uniqe[$values]= true;

}
$final_array=array_keys($array_key_uniqe);

print_r($final_array);



////////////////////////////////////////// solution 6
echo "<br>";
echo "using array_flip: ye array k key ko values karta h or values ko key karta h";
echo "<br>";

// ye key ban gai hn
$array_key=array_flip($array);


$array_values= array_flip($array_key);
print_r($array_values);

?>