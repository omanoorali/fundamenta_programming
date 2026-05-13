<?php

// echo "dfds";

// echo 10 % 3;
// echo 10 ** 2; power operator

// logic: Even/Odd checking: (1)


// logic : Short Assignment Operators (2 + - / * )

// $x = 10;
// $x += 5;
// internlly work -> $x = $x + 5 same for others 




// logic: Wallet balance system. (3)





// logic: 
// ==	Equal
// ===	Strict equal
// !=	Not equal
// !==	Strict not equal
// >	Greater
// <	Smaller
// >=	Greater/equal
// <=	Smaller/equal

// $userRole = "admin";

// if($userRole == "admin"){
//     echo "welcome  admin";
// }else{
//     echo "you can not accsess it";
// }

// $email = "ali@gamil.com";
// $email = 45;

// if($email === "ali@gamil.com"){
//     echo "welcome ali";
// }else{
//     echo "type error is coming.";
// }

// if($email !=="ali@gmail.com"){
//     echo "email not found";
// }



// logic : logical oprators && || ! NOr |||-> these are use for validations


// $email = "ali@gmail.com";
// $password = "ali";
// if($password == "ali" && $email== "ali@gmail.com"){
//     echo "login in succesfully";
// }else{
//     echo "email and password incorrect plz try again";
// }


//logic : ! NOT OPERATOR
// $is_log_in = false;

// if(!$is_log_in){
//     echo "login";
// }else{
//     echo "email or password incorrect";
// }



//logic: ternary operator --> it is use for single line or simpe logic ho 
// $class = $active ? 'active-btn' : 'normal-btn';it also mostly for frontend

// $age = 0;

// echo $age >=20 ? "adult" : "miner";

// $name = "ali";

// echo $name =="ali" ? "you can access deshboard" : "you can not acces account";


// if else use for multiple lines complex logic
// $name = "ali";
// if($name == "ali"){
//     echo "you can assess acount";

// }else{
//     echo "you can not acces account";
// }






// logic: Agar value exist karti hai: → use karo warna: → default value use karo
// $array = [
// "sdf"=>"",
// ];

// echo $array["name"] ?? "ali";

// agr array main data aa rahe to thek warna defult values add kar deta h.
// or ham ye erro p bhe show karte hn agr data na ai to error message show kar do.

// $arr = [
//     1,2,3,4,5
// ];
// echo $arr[6] ?? "45";



// increament/decrement

// $a = 5;
// echo $a++;// abhe tak increment nhi kia tha wait main tha 
// echo $a;// yahan done kar chuka h.
// $a = 3;
// ++$a;

// echo $a;



//loginc: task Counter app.




//empty 
$test = "";
if($test){
    echo "this code is working";
}else{
    echo "test code not working";
}
?>