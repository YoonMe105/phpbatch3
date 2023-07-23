<?php


class myaccessmodifier{

    // Access Modifier
        // (i)public  = anywhere can access
        // (ii)private = only access inside main class 
        // (iii)protected = subclass / extented class


    public $companyname = "Data Land Technology";
    // private $companyname = "Data Land Technology";  //error can't print
    // protected $companyname = "Data Land Technology";  //error can't print

    var $personname = "Mr.Tin";

    public function getnum(){
        $num = 10;
        echo $num;

        // echo $companyname;  //can't print
        // echo $personname;  //can't print

    }

}


$obj = new myaccessmodifier;
echo "This is Access Modifier <br/>";

echo $obj->companyname. "<br/>";  //Data Land Technology
$obj->getnum();  //10    //only can print by public(access modifier)

echo "<br/>";

echo $obj->personname. "<br/>";  // Mr.Tin
$obj->getnum();  //10    


echo "<hr/>";


// can overwrite (only overwrite by public & var)
$obj->companyname = "ABC Co.,Ltd";
echo $obj->companyname. "<br/>";  //ABC Co.,Ltd

$obj->personname = "Ko Tha";
echo $obj->personname. "<br/>";  //Ko Tha

?>