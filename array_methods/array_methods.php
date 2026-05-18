<?php
// //////////////// index array
// $array = [2,3,4,5];
// echo $array[3];



// /////////////// associative array
// $arr = [
// "name"=>"ali",
// "email"=>"ali@gmail.com"

// ];
// echo $arr["email"];

/////////////// mutidimentional array

// $arr = [

// [
//     "name"=>"ali",
//     "email"=>"ali@gamil.com",
// ],
// [
//     "product"=>"cctv",
//     "price"=>"3000",
// ],
// ];

// echo $arr[0]['email'];


///////////// array_push($arr,value)

// $array = ["cctv", "keyboard", "mouse"];
// array_push($array,"test");

// var_dump($array);


///////////////// array_pop($arr)

// $array = ["cctv","keyboard","mouse"];
// array_pop($array);
// var_dump($array);

////////////////// array_unshift($arr, value)

// $array = ["cctv","keyboard","mouse","pc"];
// array_unshift($array,"test add first");

// print_r($array);


///////////////////////////////  array_shift($arr)
// $array = ["cctv","mouse","pc"];

// array_shift($array);

// print_r($array);

//////////////////////////  count($array)--> array k values count karta hn k array main values kitne h 
// $array = [1,2,3,4,5,6];
// count($array);
// var_dump($array);
// print_r($array);


/////////////////////////////// in_array(value, $array); --> check karta h k ye value array main h yan nhi  return true/false

// $array = ["test","ali","cctv","keyboard"];

// $values_matched=in_array("test",$array);

// print_r($values_matched); //  output 1 if fale then it return none 



///////////////////// array_search():-->it work on index and return index of array if matched.


// $array = [1,2,3,4,5,6,7,8,9];
// $output = array_search(4,$array);
// if($array[$output] === 4){
//     echo "dsf";
// }
// var_dump($output);


/////////////////////  array_merge() : --> it combine two array in a one array.

// $arr1 = [1,2,3,4];
// $arr2 = [5,"hjg",9];

// $new_array = array_merge($arr1,$arr2);

// print_r($new_array);


/////////////////////////// array_slice($arr , start, end point): ye divide karta h do array ko. or copy banta h new array k. or jahan se endpoint hogi wahan se akh peche wali value return karega.

// $arry = [1,2,3,4,5,6];
// $array_copy = array_slice($arry,1,4);

// var_dump($array_copy);



/////////////////////////////////// array_splice() add/remove karta h
// remove array values and make new array
// $array = ["keyboard","cctv","mouse"];

// $new_array = array_splice($array, 0,4);

// var_dump($new_array);


// add  values in a array.
// $array = ["keyboard","cctv","mouse"];
// $new_array = array_splice($array, 2,0, "test");
// var_dump($array);

//////////////////////////// array_sort() : ye array k values ko order banta h assendting main.
// Assending order

// $array = ["keyboard","cctv","mouse"];
// $array = [6,5,8,9,9,12,1];

// output->  Array ( [0] => 1 [1] => 5 [2] => 6 [3] => 8 [4] => 9 [5] => 9 [6] => 12 )

// sort($array);

// print_r($array);

// Decending order main convert karta h.

// $array = [1,2,3,4,5,6];
// rsort($array);

// print_r($array);

//////////////////////////////////// array_reverse(): it reverse the array values. work like rsort() method

// $array = [1,2,3,4,5,6,8];

// $arry_reverse = array_reverse($array);
// print_r($arry_reverse);



//////////////////////////////////// implode: array to string conversitions

// $array = ["test","cctv","keyboar","mouse"];

// $result = implode("/",$array);

// var_dump($result);


///////////////////////////// exlopde: string to array conversions


// $array = "this is testing conversion string to array";

// $result = explode("-",$array);

// var_dump($result);



////////////////////// array_map(): ye sabh array it values p chalta like loop;

// $array_map = [1,2,3,4];
// $result = array_map(function($item){
//  return $item *2;
// },$array_map);
// print_r($result);

/////////////////////// array_filter(): ye bhe array k sabh valus p chalta h like a loop.

// $array_filter = [20,10,30,40];

// $result = array_filter( $array_filter ,function($item){
//  return $item > 10;
// });

// var_dump($result);


///////////////////////////////////// array_reduce() prore array ko akh vaiable main karta h.
// 0+1+2+3+4+5 = 15 ok
// $array = [1,2,3,4,5];

// $result = array_reduce($array ,  function($sum,$num){
 
// return $sum + $num;
// });

// print_r($result);

////////////////////////////// array_keys($arr)

// $array = ["name"=>"test","email"=>"test2"];

// print_r(array_keys($array));


/////////////////////////// array_values($arr)

// $array = ["name"=>"test","email"=>"test2"];

// print_r(array_values($array));


// Task 1

// $user= [

// ["id"=>1],
// ["id"=>2],
// ["id"=>3]
// ];

// $results = array_map(function($users){
// return $users['id'];
// },$user);

// print_r($results);



// Task 2: array k values ko duble karo.

// $array = [1,2,3,4];

// $result =  array_map(function($data){
//     return $data * 2;
// },$array);

// print_r($result);
?>