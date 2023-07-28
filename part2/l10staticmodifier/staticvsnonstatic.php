<?php


class staticvsnonstatic{

    // Member Property
    // Non-static properties
    public $fullname = "Honey Nway Oo";

    // Static properties
    public static $city = "Mandalay";

    // Constant
    const GRNDER = "Female";


    // Member Function
    // Non-static Method
    // (Non-static method = static property & non-static property can call)
    // (Non-static method = static method & non-static method can call)
    public function getname(){
        echo "I am Non-Static method. <br/>";

        echo "Name is $this->fullname <br/>";
    }

    public function getcity(){
        echo "I am Non-Static method. <br/>";

        echo "City is " . self::$city ." & Hometown is ". static::$city . "<br/>";
    }

    public function getgender(){
        echo "I am Non-Static method. <br/>";

        echo "Gender is ". self::GRNDER . "<br/>";
    }

    public function car(){
        echo "I am Non-Static method. <br/>";

        $brand = static::carbrand();
        echo "I bought a new ${brand} car. <br/>";
    }

    public function mobilebrand(){
        return "iPhone 14 Pro Max";
    }

    public function beforebuy(){
        echo "I am Non-Static method. <br/>";

        $brand = $this->mobilebrand();
        echo "I am thinking to buy a new ${brand} phone. <br/>";
    }



    // Static Method
    // (Static method cannot use non-static property)
    // (Static method cannot use non-static method)
    public static function getstaticcity(){
        echo "I am Static method. <br/>";

        echo "City is " . self::$city ." & Hometown is ". static::$city . "<br/>";
    }

    public static function getstaticgender(){
        echo "I am Static method. <br/>";

        echo "Gender is ". self::GRNDER . "<br/>";
    }

    public static function carbrand(){
        return "Toyota LEXUS LX570";
    }

    // Can't set cuz // error cuz Static method can not call Non-Static Method
    // public static function mobile(){
    //     echo "I am Static method. <br/>";

    //     $brand = $this->mobilebrand();
    //     echo "I bought a new ${brand} <br/>";
    // }

    public static function afterbuy(){
        echo "I am Static method. <br/>";

        $brand = self::carbrand();
        echo "I am so lovely my new ${brand} car <br/>";
    }
    
}



echo "This is Static VS Non-static Modifier <br/>";

$obj = new staticvsnonstatic();

// Calling Static Property
echo $obj->fullname;  // Honey Nway Oo
echo "<br/>";

// Calling Non-Static Property
echo $obj::$city;   // Mandalay
echo "<br/>";

// Calling Constant Property
echo $obj::GRNDER;

echo "<hr/>";

// Calling Non-static Method
$obj->getname();  // Name is Honey Nway Oo
$obj->getcity();  // City is Mandalay & Hometown is Mandalay
$obj->getgender();  // Gender is Female


echo "<hr/>";

// Calling Static Method
$obj->getstaticcity(); // City is Mandalay & Hometown is Mandalay
$obj->getstaticgender();  // Gender is Female

echo "<hr/>";

staticvsnonstatic::getstaticcity(); // City is Mandalay & Hometown is Mandalay
staticvsnonstatic::getstaticgender();  // Gender is Female

echo "<hr/>";

$obj->car();

echo "<hr/>";

// $obj::mobile();   // error cuz Static method can not call Non-Static Method

$obj->beforebuy();  // I am thinking to buy a new iPhone 14 Pro Max phone.

echo "<hr/>";

$obj::afterbuy();   // I am so lovely my new Toyota LEXUS LX570 car

echo "<hr/>";


?>