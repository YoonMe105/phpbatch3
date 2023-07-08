<?php
// if statement

echo 'hello';

$x = 10;
$y = 20;


if($x > $y){
	echo "Your condition is yes";
}

if($x < $y){
	echo "Your condition is yes";
}

echo "<br/>";

// if else

if($x > $y){
   echo "Yes x greater than y";
}else{
   echo "No, x less than y";
}

echo "<br/>";

// Short Hand
if($x < $y)echo "Yes x less than y"; else echo "No, x greater than y";

echo "<br/>";

if($x < $y)
	echo "Yes , x less than y";
else
	echo "No , x greater than y";

echo "<br/>";

$color = 'gray';
$colorvalue = $color; //Assign by reference


// echo $color;
// echo $colorvalue;



// if($colorvalue === 'red'){
// 	echo "My fav color is red";
// }else{
// 	echo "I hate red color";
// }


// if($colorvalue === 'red'){
// 	echo "My fav color is $color";
// }else{
// 	echo "I hate $color color";
// }


if($colorvalue === 'red'){
	echo "My fav color is ".$color;
}else{
	echo "I hate ".$color." color";
}

echo "<hr/>";

// Logical Operator
// &&(AND) ||(OR) !(NOT)

$a = 100;
$b = 200;
$c = 200;

if($a < $b && $b > $c){
	echo 'it is true';
}else{
   echo "it is false";
}

echo "<br/>";

if($a < $b && $b < $c){
	echo 'it is true';
}else{
   echo "it is false";
}

echo "<br/>";

if($a < $b || $b > $c){
	echo 'it is true';
}else{
   echo "it is false";
}

echo "<br/>";

if($a < $b || $b > $c && $a < $c){
	echo 'it is true';
}else{
   echo "it is false";
}

echo "<br/>";

//  true      false      false   result = true
if($a < $b || $b > $c && $a > $c){
	echo 'it is true';
}else{
   echo "it is false";
}

echo "<br/>";

//  true      false    
//       true         false   result = false
if(($a < $b || $b > $c) && $a > $c){
	echo 'it is true';
}else{
   echo "it is false";
}

echo "<br/>";


if(!($a < $b)){
	echo 'it is true';
}else{
	echo 'it is false';
}


// if elseif else

echo "<hr/>";

if($b > $c){
    echo "it is true";
}elseif($b === 200){
    echo "it is equal";
}else{
   echo "it is false";
}

echo "<br/>";

if($b > $c) echo "it is true"; elseif($b === 200) echo "it is equal"; else echo "it is false";

echo "<br/>";

if($b > $c)
    echo "it is true";
elseif($b === 200)
    echo "it is equal";
else
   echo "it is false";

echo "<hr/>";

// switch(condition){
// 	case label1:
// 	   code to be executed;
// 	 break;
//    case label2:
//        code to be executed;
//     break;
//     .......
//     default:
//       code to be executed
// }


$phone = "iphone";

switch($phone){
	case "sony":
	     echo "I can't buy sony phone";
	 break;
	 case "iphone":
	      echo "I hate apple product";
	 break;
	 case "mi":
	       echo "oki,I can buy";
	  break;
	  case "samsung":
          echo "my fav mobile product is samsung";
     break;
     default:
         echo "I love keypad";
}


?>




