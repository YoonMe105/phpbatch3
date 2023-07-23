<?php

trait sitelogin{

    public $fullname = "Honey Nway Oo";
    public $email = "honey@gmail.com";
    public $password = "123456";

    public function useraccess(){
        echo "This is site login. Email is $this->email & Password is $this->password <br/>";
    }

    public function userinfo(){
        echo "Profile name is $this->fullname.<br/>";
    }
}

trait devlogin{

    public function githublogin(){
        echo "This is Github login. Email is $this->email & Profile Name is $this->fullname <br/>";
    }

}

class googleauth{

    // Method 3 
    // use sitelogin,devlogin;

    public function gmaillogin(){
        echo "This is Google login. Email is $this->email & Profile Name is $this->fullname <br/>";
    }
}

trait maintrait{
    // Method 4
    use sitelogin,devlogin;
}

class mytrait extends googleauth{

    // Method 1 
    // use sitelogin;
    // use devlogin;

    // Method 2 
    // use sitelogin,devlogin;

    // Method 4
    use maintrait;

}

echo "This is Trait <br/>";

$obj = new mytrait();
echo $obj->fullname;  // Honey Nway Oo
echo "<br/>";
echo $obj->email;  // honey@gmail.com
echo "<br/>";
echo $obj->password;  // 123456
echo "<br/>";
$obj->useraccess();  // This is site login. Email is honey@gmail.com & Password is 123456
$obj->userinfo();   // Profile name is Honey Nway Oo.

$obj->githublogin();  // This is Github login. Email is honey@gmail.com & Profile Name is Honey Nway Oo
$obj->gmaillogin();  //This is Google login. Email is honey@gmail.com & Profile Name is Honey Nway Oo




echo "<hr/>";


?>