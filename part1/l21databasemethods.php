<?php

ini_set('display_errors',1);

// (i) MySQLi Procedural
// (ii) MySQLi Object-Oriented
// (iii) Using PDO (PHP Data Objects)


// (i) MySQLi Procedural
                  // hostname username password database
$conn = mysqli_connect("localhost","root","","php");


if(mysqli_connect_error()){
    echo "Failed to connect :". mysqli_connect_error();
    exit();
}

echo "Connect Successfully";

echo "<hr/>";


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);


if(!$conn){
	 // echo "Failed to connect :". mysqli_connect_error();
  //   exit();

	die("Failed to connect: " . mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";



// (ii) MySQLi Object-Oriented

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost,$dbuser,$dbpass);

if(mysqli_connect_error()){
	die("Failed to connect: " . mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";



$conn = new mysqli("localhost","root","","php");

if($conn->connect_errno){
    echo "Failed to connect :". $conn->connect_errno;
    exit();

}

echo "Connect Successfully"."<br/>";

echo "<hr/>";




function openconn(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbconnect = new mysqli($dbhost,$dbuser,$dbpass);

    return $dbconnect;
}


function closeconn($conn){
    $conn->close();
}


$conn = openconn();
echo "Connect Successfully";
closeconn($conn);

echo "<hr/>";



// (iii) Using PDO (PHP Data Objects)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php";

try{
	$conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connect Successfully";
}catch(PDPException $e){
    echo "Connection Failed : " . $e->getMessage();
}

echo "<hr/>";


?>

