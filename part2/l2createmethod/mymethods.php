<?php

// echo "hay";

// Define Class Object

// =>Syntax (classname should give the name of file name)
// class classname{
//     properties
//     methods
// }

// new classname();  //invoking the class


class mymethods{

    // Access Modifier
        // (i)public  = anywhere can access
        // (ii)private = only access inside main class 
        // (iii)protected = subclass / extented class


    // Class Method
    public function greeting(){
        echo "Have a good day. <br/>";
    }

    public function calculate($num){
        echo "Getting calculate number is = ${num} <br/>";
    }

    public function result($num=1){
        echo "Getting result number is = ${num} <br/>";
    }

}


$obj = new mymethods();
echo "This is Class Method <br/>";

$obj->greeting();  //Have a good day.

// $obj->calculate();  //error

$obj->calculate(150);   //Getting calculate number is = 150

$obj->result(190);   //Getting result number is = 190

$obj->result();   //Getting result number is = 1


echo "<hr/>";





?>