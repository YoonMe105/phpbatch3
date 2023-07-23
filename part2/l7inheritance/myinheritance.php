<?php

// Super Class or Main Class
class myinheritance{

    protected $fullname = "Nandar";
    public $city = "Mandalay";
    public $email = "nandar@gmail.com";
    public $password = "123456";

    public function getaccess(){
        echo "This is site login : email is $this->email and password is $this->password <br/>";
    }

    public function getinfo(){
        echo "Name is $this->fullname & City is $this->city. <br/>";
    }

}


// Sub class or Child Class
class devlogin extends myinheritance{

    public function githublogin(){
        echo "This is github login : email is $this->email . Profile Name is $this->fullname. <br/>";
    }
}


class sociallogin extends myinheritance{

    // Own Method
    public function gmaillogin(){
        echo "This is gmail login : email is $this->email. Profile Name is $this->fullname. <br/>";
    }

    // Own Method
    public function facebooklogin(){
        echo "This is facebook login : email is $this->email. Profile Name is $this->fullname. <br/>";
    }

    // Method Override
    public function getinfo(){
        // Properties Override
        $this->fullname = "Hsu Lae";
        $this->city ="Bago";

        echo "Name is $this->fullname & City is $this->city. <br/>";
    }
}


echo "This is Inheritance."."<br/>";

$obj = new myinheritance();
$obj->getaccess();
$obj->getinfo();
echo "<hr/>";

echo "This is Inheritance."."<br/>";
$dev = new devlogin();
$dev->getaccess();
$dev->getinfo();
$dev->githublogin();
echo "<hr/>";

echo "This is Inheritance."."<br/>";
$social = new sociallogin();
$social->gmaillogin();
$social->facebooklogin();
$social->getinfo();


echo "<hr/>";


?>