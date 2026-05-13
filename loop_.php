<?php 

// echo  "testing";

// task 1 10 /  Print odd numbers.

// for($i = 1; $i <= 20; $i++){
//     // echo $i."<br>";
//     if($i % 2==0){
//         echo "even number".$i."<br>";
//     }else{
//         // echo "odd number".$i."<br>";
//     }

// }


// Task 2 reverse number:

// for($i = 5; $i >=1; $i--){
//     echo $i;
// }

// Task 3 table generate:

// $table = 2;
// for($i = 1; $i <=10; $i++){
//     // echo $i;
//     echo $i."*".$table."=".$table*$i."<br>";
// }

// while loop 
// Task 1

// $i = 1;
// while($i<=5){
//     echo $i;
//     $i++;
// }

//Task 2 Countdown timer.

// $time = 10;

// while($time >=1){
//     echo "time starts now ".$time."seconds/n";
//     $time--;
//     sleep(1);
// }

// Task 3 Password attempts simulation.
// logic: mujhe ye batna attemp 3 bar use kar sakta h password k lia 4 karga to account lock ho jai ga. agr password sahi h to use welcome message show ho or acces mil jai.


// $attempt = 0;
// $Max_attempt = 3;
// $acces = true; 
// $password = "hello123";

// while($attempt < $Max_attempt && !$acces){
    
//        $user_pass = "hello123";
//        $attempt++;
//        if($user_pass === $password){
//         $acces = true;
//         echo "login succefully and access mil gai apko  ";
//        }else{
//         $ramin = $Max_attempt-$attempt;
//         echo "raming attempt".$ramin."<br>";
//        }
       
//        if(!$acces){
//         echo "dear you account is locked";
//        }
// }


// do while loop: one time condion true hogi lazmi


    // $num = 1;
    // do{
    //     echo $num;
    //     $num++;
    // }while($num <=10);


    // Task 1

    // $chose = 0;
    // do{
    //     echo "deshboar";
    //     echo "manu systme";
    //     $chose = 2;
    // }while($chose != 2);

    // echo "loop finesh";



    // Foreach loop

    // Task 1 simple array. // Loop fruits array.

    // $array = ["apply","banana","mango"];
    // echo $array[0]; //simple 
    // now with foreach
    // foreach($array as $data){
    //     echo $data."<br>";
    // }

    // Associative Array Example foreach loop

    // Task 2 associative array

//     $user = [
//         "name"=>"ali",
//         "city"=>"karachi",
//         "country"=>"pakistan",
//     ];

//     foreach($user as $key => $value){
//         // echo $key."\n";
//         // echo $value;
//     }


// Task 2 Loop student marks. std_name wise marks show karna hn.

// $std_data = [
// "ali"=>89,
// "khan"=>78,
// "muhammad"=>99,
// "rustam"=>67,
// ];

// foreach($std_data as $key=>$value){
//     echo "student names  (".$key.")  results ".$value."<br>";
// }


// Task 3 create produnct array and print cards.


// $products=[
//     [
//         "name"=>"keyboard",
//         "price"=>2500,
//         "category"=>"electric",
//         "image"=>"keyboard.webp",
//     ],

//     [
//         "name"=>"mouse",
//         "price"=>4500,
//         "category"=>"electric",
//         "images"=>"mouse.webp",
//     ],
//     [
//         "name"=>"shirt",
//         "price"=>4520,
//         "category"=>"cloths",
//         "images"=>"shirt.webp",
//     ]
// ];

// foreach($products as $produc){


// }


// for loop practice logical question. NESTED Looop


// for($i = 1; $i<=3; $i++){
    

//     for($j = 1; $j<=3; $j++){
//         echo $i.'-'.$j."<br>";
//     }
// }


// pattern loop task

// * 
// **  
// ***
// ****

// for($i = 1; $i<=5; $i++){


// for ($j = 1; $j<=$i; $j++){
//     echo "*";
//  }
//  echo "<br>";
// }



// Task 5 : logic pagination 

// $product = range(1,100);

// $page = 1;


// $per_page = 20;

// $start = ($page - 1) * $per_page;

// for($i = $start; $i <$start + $per_page; $i++){

//   echo $product[$i]."<br>";

// }


// Task 6 login : result filttering : 50 std hn jiske 40 marks hn wo pass h bake sabh fail.

// $marks = [22,33,55,66,74,75,54,34,32,87,97,54];

// echo "studends marks";
// foreach ($marks as $result){

//     if($result>40){
//         echo "pass".$result;

//     }
//     echo "<br>";
    
//     if($result<40){
//         echo "your marks are blow then 40 so you are fail";
//     }

// }


/////////////////////// IMPORTANT LOGIC AGAIN PRACTICE IT

// logic:
// array banana h 
// count array  banana us p condition lagane h take check karon values
// duplicate array  take pata chele konse duplicated vales hn
// $number = [1,2,3,3,4,5,5,6,8];
// $count = [];
// $duplicate = [];


// foreach($number as $num){
//     if(isset($count[$num])){
//         // echo "ok";
//         if(!in_array($num, $duplicate)){
//               $duplicate[]= $num;
//         }
//     }else{
//         $count[$num]= 1;
//     }
//     // print_r($duplicate);
// }
// print_r($count);


?>