<?php


class thiskeyword{

    // Access Modifier
        // (i)public  = anywhere can access
        // (ii)private = only access inside main class 
        // (iii)protected = subclass / extented class


    // public $companyname = "Data Land Technology";
    // private $companyname = "Data Land Technology";
    protected $companyname = "Data Land Technology";


    public function getcomname(){
        echo $this->companyname;
        echo "<br/>";

        echo $this->companyname = "ABC Co.,Ltd";
    }

}


class vehicle{

    public $brand = "";

    public function getbrandname(){
        return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;
    }
}


$obj = new thiskeyword;
echo "This is this Keyword <br/>";

// echo $obj->companyname."<br/>";

$obj->getcomname();

echo "<hr/>";


$car1 = new vehicle;
echo $car1->getbrandname();

$car1->setbrandname('Toyota');
echo $car1->getbrandname();  //Toyota

echo "<br/>";


$car2 = new vehicle;
$car2->setbrandname('Suzuki');
echo $car2->getbrandname();  //Suzuki

?>