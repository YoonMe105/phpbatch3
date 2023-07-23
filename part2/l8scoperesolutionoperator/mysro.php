<?php

// Note:: define() can't set in class method

class mysro{

    const GREETING = "Hello Friend. Good evening from Thailand";
    const THANKS = "Hi Friend. Thanks for visting our country.";

    public $fullname = "Honey Nway Oo";
    

    public function sayhi(){
        echo self::GREETING;  // in here echo self and static are same result
    }

    public function saythanks(){
        echo static::THANKS;  // in here echo self and static are same result
    }

    public function __construct(){
        echo "I am start working by automatically from Main Class. hee hee 🐣🐥 <br/>";
    }

    public function assets(){
        echo "I bought a new Toyota Car. <br/>";
    }
}

class child1 extends mysro{

}


class child2 extends mysro{

    const GREETING = "Hello Friend. Good morning from Srilanka";
    const THANKS = "Hi Friend. See you again.";

    public function sayhifi(){
        echo self::GREETING;  // in here echo self and static are same result
    }

    public function saybye(){
        echo static::THANKS; // in here echo self and static are not same result
    }
}

class child3 extends mysro{

    // Method Override from Main(Parent) Class
    public function __construct(){
        parent::__construct();
        echo "I am start working by automatically from Sub Class. <br/>";
    }
    public function assets(){
        parent::assets();
        echo "I bought a new Mazada Car. <br/>";
    }
}


echo "This is Scope Resolution Operator <br/>";

$obj = new mysro();
// echo $obj->fullname . "<br/>";  // Honey Nway Oo

//*****   // echo $obj->GREETING . "<br/>";  // can't work 

echo $obj::GREETING. "<br/>";   // Hello Friend. Good evening from Thailand
echo mysro::GREETING. "<br/>";   // Hello Friend. Good evening from Thailand

echo "<hr/>";

$obj->sayhi();   // Hello Friend. Good evening from Thailand
echo "<br/>";
$obj->saythanks();   //Hi Friend. Thanks for visting our country.

echo "<hr/>";


echo "This is Scope Resolution Operator Child 1 <br/>";

$ch1 = new child1();
echo $ch1->fullname . "<br/>";  // Honey Nway Oo
echo $ch1::GREETING. "<br/>";   // Hello Friend. Good evening from Thailand
echo child1::GREETING. "<br/>";   // Hello Friend. Good evening from Thailand

$ch1->sayhi();   // Hello Friend. Good evening from Thailand
echo "<br/>";
$ch1->saythanks();    //Hi Friend. Thanks for visting our country.

echo "<hr/>";


echo "This is Scope Resolution Operator Child 2 <br/>";

$ch2 = new child2();
echo $ch2->fullname . "<br/>";  // Honey Nway Oo
echo $ch2::GREETING. "<br/>";   // Hello Friend. Good morning from Srilanka
echo child2::GREETING. "<br/>";   // Hello Friend. Good morning from Srilanka

$ch2->sayhi();   // Hello Friend. Good evening from Thailand
echo "<br/>";
$ch2->saythanks();    //Hi Friend. See you again.

echo "<br/>";

$ch2->sayhifi();   // Hello Friend. Good morning from Srilanka
echo "<br/>";
$ch2->saybye();    //Hi Friend. See you again.

echo "<hr/>";

echo "This is Scope Resolution Operator Child 3 <br/>";

$ch3 = new child3();
echo $ch3->fullname . "<br/>";  // Honey Nway Oo
echo $ch3::GREETING. "<br/>";   // Hello Friend. Good evening from Thailand
echo child3::GREETING. "<br/>";   // Hello Friend. Good evening from Thailand

$ch3->sayhi();   // Hello Friend. Good evening from Thailand
echo "<br/>";
$ch3->saythanks();    //Hi Friend. Thanks for visting our country.
echo "<br/>";
$ch3->assets();


echo "<hr/>";

?>