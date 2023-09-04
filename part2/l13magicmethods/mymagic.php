<?php

class mymagicone{

    public function __get($var){
        echo "You not yet defined these \"${var}\" properties. <br/>";
    }

    public function __set($var,$val){
        echo "You not yet defined these \"${var}\" properties. So your value = \"${val}\" is here <br/>";
    }
    
}

class mymagictwo{

    // For Non-Static Method
    public function __call($method,$vals){
        // echo "You not yet defined these \"${method}\" non-static method. So your value = \"${val}\" is here  <br/>";
        echo "You not yet defined these \"${method}\" non-static method. So your value = "."<pre>".print_r($vals,true)."</pre>"." is here  <br/>";
    }

    // For Static Method
    public static function __callstatic($method,$vals){
        // echo "You not yet defined these \"${method}\" static method. So your value = \"${val}\" is here  <br/>";
        echo "You not yet defined these \"${method}\" static method. So your value = "."<pre>".print_r($vals,true)."</pre>"." is here  <br/>";
    }
}

class mymagicthree{

    public $data;

    public function __construct(){
        $this->data = [1,2,3,4,5];
    }

    public function __sleep(){
        echo "Hello Sir,I am working.cuz you trying to serialize. <br/>";
    }
}

class mymagicfour{

    public function __invoke(){
        echo "Hello Sir,I am working.cuz you trying to print out your class object as method. <br/>";
    }
}

class mymagicfive{

    public $data;

    public function __construct(){
        $this->data = [1,2,3,4,5];
    }

    public function __wakeup(){
        echo "Hello Sir,I am working.cuz you trying to unserialize. <br/>";
    }
}

class mymagicsix{

    public function __toString(){
        echo "Hello Sir,I am working.cuz you trying to print out your class object. <br/>";
    }
}




echo "This is Magic Methods. <br/>";

$obj1 = new mymagicone();
$obj1->greeting;
$obj1->bye = "Thank You";

echo "<hr/>";

$obj2 = new mymagictwo();
$obj2->greeting();
$obj2->greeting("Morning");
$obj2->greeting("Morning","Afternoon","Evening");

echo "<hr/>";

$obj2::bye();
mymagictwo::bye("Thank You");
mymagictwo::bye("Thank You","Regards");

echo "<hr/>";

$obj3 = new mymagicthree();
serialize($obj3);

$obj4= new mymagicfour();
$obj4();

echo "<hr/>";

$obj5= new mymagicfive();
$sridatas = serialize($obj5);
unserialize($sridatas);

echo "<hr/>";

$obj6 = new mymagicsix();
echo $obj6;

echo "<hr/>";








// __get() function is working when you call a property that don't have.
// __get() function is working when you call a property that don't have but can set a value.

// __call() function is working when you call a non-static methods that don't have but can set a value.
// __callstatic() function is working when you call a static methods that don't have but can set a value.


// __invoke() function is working when you call object as method.
// __toString() function is working when you print out a object.

// __sleep() function is working when you make serialize.
// __wakeup() function is working when you make unserialize.


?>