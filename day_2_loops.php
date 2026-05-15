<?php
// problem 1
// 1
// 22
// 333
// 4444
// 55555 


// logic: 
// outer loop 5 row print karega. 
// inner loop  colmuns print karga: 
// example outer loop 2nd time chalega to inner loop 2 bar chale ga.
// note:: --> muje yahan inner loop main duplicate data show karne h. mean row duplicate honga.
// or inner kun nhi?
// kun k inner uniqe print karga. or kar raha h. inner ka kam h : iss loop ko kitne bar chaloon or colmun create karta jaon.





// for ($i = 1; $i <= 5; $i++) {

//     for ($j = 1; $j <= $i; $j++) {

//         echo $i;
//     }
//     echo "<br>";
// }





// problem 2

// 12345
// 1234
// 123
// 12
// 1 

// wrong logic:

// logic : outer loop 5 time chelega;
// inner loop revese chalega: colmuns k base p.
// loop 2 chalenge. 
// for($i = 1; $i<= 5; $i++){
//     // for($j = 5; $j>= $i; $j--){
//     //     echo $j;
//     // }
//     echo "<br>";
// }

// write logic:
// mujhe outer loop ko reverse main chalana h. take 12345 ese row k hisab se print kare.
// inner loop sedha chalega:  kun k ye ginte karega:12345 column 2 1234/ 123/12/1.
// outer main main 5 hn run akh bar hoga first time.
// inner main main 1<=5 ye condtion check hogi. or inner loop 5 time chelga jab tak condtion false na main 6 na ho. agr 6 hoga fir outer loop chalega or akh akh cut hoga 5 se : fir hoga 4 or fir 4 ainge inner loop main fir inner loop 4 bar run hoga. 
// for($i = 5; $i>=1; $i--){
//     // echo $i;54321

//     for($j = 1; $j<=$i; $j++){
//         echo $j;
//     }
//     echo "<br>";
// }


// outer loop 3 time chalga row banai ga.
// inner looop 4 bar run hoga. day k hisab se.


// for($student = 1; $student <= 3; $student++){

// echo "student".$student;

//      for($day = 1 ; $day <= 4; $day++){


//      echo "Days:  ".$day;

// //       if($day == 1){

// //  echo "Day : $day";
// // }


// }
// echo "<br>";



// }









// Problem 1: Automated Attendance Report (Nested Loop)
// Scenario: Aap ek school ka portal bana rahe hain. Aapke paas 3 Students hain, aur har student ki pichle 4 dinon ki attendance report check karni hai. Agar student kisi din "Absent" tha, toh us din ka fine add karna hai.

// Task: Ek nested loop chalayein. Outer loop students ke liye chale (1 se 3), aur inner loop har student ke dino (Days) ke liye chale (1 se 4).

// Output format aisa hona chahiye:


// ussing Array + nested loop
// mujhe akh array banana h jo student or day k ides hn
//  uke bad main compaire karne agr ye studend iss dine p nhi aya to wo abbasent main add ho jai or fine lag jai.
// 3 student hn or 4 day k attendance h.


//     $attendance = [
//         1=>2,
//         2=>0,
//         3=>3

//     ];


//     $total_day_mis = 0;
//     for($student = 1; $student <=3; $student++){

//           for($day = 1; $day <=4;$day++){

//                if($day== $attendance[$student])
//                 {
//                     echo "absent  ::-> ".$day;
//                     echo "<br>";

//                     $total_day_mis++;
//                 }
//           }

//     }

// echo "total_day_mis ".$total_day_mis;






// problem 3
// A
// AB
// ABC
// ABCD
// ABCDE

// logic:outer loop chalega: 5 tak row k hisab se
// innner loop har bar chalge accounding to outer loop.colmun k hisab se.
// mujhe alphobate k lia alg se varible k need parega. or wo inner llop main echo bhe hoga.
// outer loop k insde rakhna kun har loop p a rpeate ho.

// for($i = 1; $i<= 5; $i++){

//     $count = "A" ;

//   for($j = 1; $j <=$i; $j++){
//     // echo $j;
//     echo $count;
//     $count++;
//   }
//   echo "<br>";
// }



// problem 10
// E
// DE
// CDE
// BCDE
// ABCDE

// logic: outer loop 5 tak chalega:
// inner loop seddha chalega. buss alphabet revse kare h.

// smjah se bhaaar.
// $n = 5; // Total number of rows

// for ($i = 1; $i <= $n; $i++) {
//     // Calculate the starting character for each row
//     // Row 1 starts at 'E' (ASCII 69)
//     // Row 2 starts at 'D' (ASCII 68), and so on...
//     $charValue = ord('E') - ($i - 1);

//     for ($j = 1; $j <= $i; $j++) {
//         echo chr($charValue);
//         $charValue++; // Move to the next alphabet within the row
//     }
//     echo "<br>"; // Move to the next line
// }



// problem 11
//     *
//    ***
//   *****
//  *******
// *********


// outer loop 5 row bani ga.
// inner loop : 
// space bhe count ho rhae hn 


// iss mai mujhe ese lag raha h akh inner chala dosri bar nhi fir 3d chala fir 4th time nhi.

// echo "<pre>";

// for($i = 1; $i <=5 ; $i++){

//         for($j = 5; $j>= $i; $j--){

//             echo " ";
//         }
//         for($k = 1 ; $k<=$i; $k++){
//             echo "*";
//         }
//         echo "<br>";
// }
//  echo "</pre>";

// echo "<pre>";

// // outer loop = rows control karta h
// // total 5 rows banengi

// for($i = 1; $i <= 5; $i++){

//     // =========================
//     // SPACE LOOP
//     // =========================

//     // logic:
//     // spaces har row main kam ho rahi hn

//     // row 1 = 4 spaces
//     // row 2 = 3 spaces
//     // row 3 = 2 spaces
//     // row 4 = 1 space
//     // row 5 = 0 space

//     // formula:
//     // total rows - current row

//     for($j = 5; $j > $i; $j--){
//         echo " ";
//     }


//     // =========================
//     // STAR LOOP
//     // =========================

//     // logic:
//     // stars odd numbers main increase ho rahe

//     // row 1 = 1 star
//     // row 2 = 3 stars
//     // row 3 = 5 stars
//     // row 4 = 7 stars
//     // row 5 = 9 stars

//     // formula:
//     // (2 * row) - 1

//     for($k = 1; $k <= (2 * $i) - 1; $k++){
//         echo "*";
//     }


//     // next line
//     echo "<br>";
// }

// echo "</pre>";



// problem 12
// note here h 2 paradima 
// 1 upder paradim
//     *
//    ***
//   *****

// 2 lower paradim\
//    ***
//     *

// they joind and make full paradiam like diamand
//     *
//    ***
//   *****
//    ***
//     *
// echo "<pre>";
// for ($i = 1; $i <= 3; $i++) {


//     //  thia loop use for space 
//     for ($j = 3; $j > $i; $j--) {
//         echo " ";
//     }
//     // this loop use for print (*) 

//     for ($k = 1; $k <= (2 * $i) - 1; $k++) {
//         echo "*";
//     }

//     echo "<br>";
// }


// for ($i = 2; $i >= 1; $i--) {

//     for ($j = 3; $j > $i; $j--) {
//         echo " ";
//     }

//     for ($k = 1; $k <= (2 * $i) - 1; $k++) {
//         echo "*";
//     }
//     echo "<br>";
// }
// echo "</pre>";


// problem 12
// 1 se 100:
// 3 pe → Fizz
// 5 pe → Buzz
// dono pe → FizzBuzz

// yahan 100 tak loop chalega
// or condtion lage ge 
// 

// for($i = 1; $i <=100; $i++){

// // echo $i;
// if($i % 3== 0 && $i % 5 == 0){
// echo "fizzbuzz <br>";
// }
// elseif($i % 3 == 0){
//     echo "fizz <br>";
// }
// elseif($i % 5==0){
//     echo "buzz <br>";
// }else{
//     echo $i."<br>";
// }
// }


// problem 14
// prime number series
// logic: prime numer srif apne ap se or 1 se divid hota h.
// agr 3 hoga to wo prime numbner nhi h. wo compositive number hota h.
// akh vaible hoga jo jiss main value hogi like number
// or wo conditon k sath lage ka  or wo number divid hoga loop k value k sath age ==  0 or ooutput aiga

// $num = 5;
// $count = 0;
// for($i = 1; $i <=$num; $i++){
//     if($num % $i == 0 ){
//         // echo "prime number ";
//         $count++;
//     }
//     }
//     if($count == 2){
//         echo " $num prime number";
//     }else{
//         echo "$num not prime number";
//     }

