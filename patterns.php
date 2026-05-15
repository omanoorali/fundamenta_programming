<?php

// problem 
// *
// **
// ***
// ****
// *****


// for ($i = 1; $i <= 5; $i++) {

//       for($j = 1; $j <= $i; $j++){

//           echo  "*";
//       }
//       echo "<br>";
// }


// Revers
// *****
// ****
// ***
// **
// *



//  outer loop                     inner loop
// 1 condtion ture -->              innner loop main aa gaya (now jab tak loop 2 false nhi hoga tabh tak work karega or print kargea)

// for ($i = 1; $i <= 5; $i++) { ///  ye bhaar k row k lia h bass loop baar chale kitne row hn. bake bache inner loop decide karga k har row main kitne bache hon.

//     for ($j = 5; $j >= $i; $j--) {  /// yaha p condtion true huwe to phle print karega bad main decrement karega *****
//         echo "*";
//     }
//     echo "<br>";
// }




// problem 3 --> issme spaces bhe dekhne hn or row columns bhe.


//         * 
//       * * 
//     * * * 
//   * * * * 
// * * * * *  
// echo "<pre>";
// for($i = 1; $i <= 5; $i++){


//   for($j = 5; $j >= $i; $j--){
//     echo " ";

    
//   }
//   for($k = 1; $k <=$i; $k++){
//         echo "*";
//     }
//   echo "\n";
 

// }
// echo "</pre>";


// // problem 4
 
//     * 
//    * * 
//   * * * 
//  * * * * 
// * * * * *  
// echo "<pre>";
// for($i = 1; $i <= 5; $i++){
//     // echo "*";
//     // echo "\n";
//     // echo "<br>";


//     for($j = 5; $j > $i; $j--){               // ***** spaces
//        echo " "; 
//     }

//     for($k = 1; $k <=$i; $k++){
//         echo "* ";
//     }

    
//     echo "\n";
// }

// echo "</pre>";



// // problem 5
// 1 
// 2 2 
// 3 3 3 
// 4 4 4 4 
// 5 5 5 5 5 

// for($i = 1; $i<=5; $i++){ /// Q 1 condtion true huwe 1 print huew $i main 
//                             // inner loop chala // $j<=$i// condtion ture huwe  to yahan bhe 1 print hona chahea h na
//                             // to akh bar  1 kun aa rha h. noted 

//    for($j = 1; $j<=$i; $j++){ // got it and understand.
//                             //  outer se 2 aa raha $i main. inner buss 2 bar run ho rha h but print just $i k value ho rha or 
//                             // outer loop k value 2 bar call kar raha h
//     echo $i;
//    }
//    echo "<br>";
// }

// Q 2
// outer loop condtion true huwe $i 1 --> inner k loop k pass send kia .
// inner loop ne condtion check k true h echo kar dia $i k value ko. 1
// inner loop secand time --> condtion false --> outer loop k pass send kar dia.
// outer loop  secand time chala condtion  true huwe--> innner k pass send kia . $i 2
// inner loop chala --> condeion check ture huwe--> inner ne $i k do print kia 



// // problem 5

// 1 
// 2 3 
// 4 5 6 
// 7 8 9 10 
// 11 12 13 14 15 

// $counter= 1;
// for($i = 1; $i<=5; $i++){

//      for($j = 1; $j <= $i; $j++){
//       //   echo $j;
//       echo $counter;
//       $counter++;  
//      }
//      echo "<br>";
// }


// problem 6

// // A 
// // B B 
// // C C C 
// // D D D D 
// // E E E E E 

// $alphabate = "a";
// for($i = 1;$i <=5; $i++){

//   for($j = 1; $j<=$i; $j++){ //
//            echo $alphabate;
//            }
//            $alphabate++; // 1 a aya oper gaya b huwe outerloop chala dosri bar . inner loop chalra do bar usek inside echo h alphabate to abhe usmein b h . abh loop chalega 2 bar to ye srif b h print karega 2 times
//   echo "<br>"; 
       
// }

?>
