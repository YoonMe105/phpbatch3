<?php

// echo "hay";

// Define Class Object

// =>Syntax (classname should give the name of file name)
// class classname{
//     properties
//     methods
// }

// new classname();  //invoking the class



class myproperties{

    // Properties
    var $firstname = "Data Land ";
    var $lastname = "Technology";

}

$obj = new myproperties();
echo "This is Class Object <br/>";

echo $obj->firstname.$obj->lastname;

echo "<hr/>";





?>