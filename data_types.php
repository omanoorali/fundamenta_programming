<?php

// echo "testing page";

// boolean return true/false or 0/1
// $is_admin = true;
// if($is_admin){
//     echo "you can acess deshboard";
// }else{
//     echo "your can not access deshboard ";
// }
// $data = ['service','products'];
// echo $data[0];

// echo "testing page";

// boolean return true/false or 0/1
// $is_admin = true;
// if($is_admin){
//     echo "you can acess deshboard";
// }else{
//     echo "your can not access deshboard ";
// }
    // array
// $data = ['service','products'];
// echo $data[0];
    //object

//    $user = [
//     "name"=>"test",
//       "age"=>23,
//       "city"=>"karachi",
//    ];

//    $data = (object) $user;

//    echo $data->city;
//    echo $data->age;


// calculator

// $num1 = 2;
// $num2 = 4;

// echo $num1 + $num2;
// echo "<br>";
// echo $num1 - $num2;
// echo "<br>";
// echo $num1 / $num2;
// echo "<br>";
// echo $num1 * $num2;

// Temprature caluculator.

// $calius = 30;
// $temp = ($calius * 9/5) + 32;
// echo $temp;

// name converter // uper and lowe case.
// echo "dasdf";
// echo $name = "ali";
// $last_name = "khan";

// $full_name = strtoupper($name)." ". strtolower($last_name);
// echo $full_name;

// echo "testing page";

// name converter // uper and lowe case.
// echo "dasdf";
//  $name = "ali";
// $last_name = "KHAN";

// $full_name = strtoupper($name)." ". strtolower($last_name);
// echo $full_name;


// REAL word pracice 
// task 1  
// 5 object and 5 arrays

// 1 object

// service obj f1
$service = [
"name"=>"cctve",
"price"=>"4500",
"city"=>"karachi",
];

$services = (object) $service;
echo $services->city;

echo "<br>";
// persnal  obj 2

$profile = [

"name"=>"alli",
"email"=>"ali@gamil.com",
"age"=>"39",
"city"=>"karachi",
];

$profiles = (object) $profile;
echo $profiles->email;

echo "<br>";
//company
$company = [
    "name"=>"sts",
    "services"=>"web and app",
    "year"=>"30",
    "location"=>"karachi",
];

$company_data = (object) $company;
echo $company_data->services;
echo "<br>";
// teacher 
$teacher = [
    "name"=>"asad",
    "subject"=>"php",
    "experience"=>"23 years",
];

$teacher_data = (object) $teacher;
echo $teacher_data->subject;
echo "<br>";
// e comerce web
$web = [
    "hosting"=>"localhost",
    "domain"=>"uk",
];

$web_data = (object) $web;
echo $web_data->hosting;
// echo "sdfs";

// Task2 Product Array

?> 