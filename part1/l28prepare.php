<?php
ini_set('display_errors',1);

// The argument may be four type:

  // i - integer
  // d - double
  // s - string
  // b - bool

// -----------------------------

// =>MySQLi Procedural

// $conn = mysqli_connect("localhost","thirisandar","44554scott",'phpdbone');

// if(mysqli_connect_error()){
//   echo "Failed to Connect: " . mysqli_connect_error();
//   exit();
// }

// echo "Connected Successfully <br/>";


// // Data Insert

// $sql = "INSERT INTO students(firstname,lastname,city)  
//         VALUE('aung','kyaw','yangon')";

// $stmt = "INSERT INTO students(firstname,lastname,city)
//     VALUE(?,?,?)";
// $insertstmt = mysqli_prepare($conn,$stmt);
// mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

// $firstname = "maung";
// $lastname = "zaw";
// $city = "bagan";
// mysqli_stmt_execute($insertstmt);

// echo "New Records Created Successfully";


// mysqli_close($conn);

// echo "<hr/>";



$conn = mysqli_connect("localhost","thirisandar","44554scott",'phpdbone');

if(mysqli_connect_error()){
  echo "Failed to Connect: " . mysqli_connect_error();
  exit();
}

echo "Connected Successfully <br/>";


// Data Insert

// $sql = "INSERT INTO students(firstname,lastname,city)  
//         VALUE('aung','kyaw','yangon')";

$stmt = "INSERT INTO students(firstname,lastname,city)
    VALUE(?,?,?)";
$insertstmt = mysqli_prepare($conn,$stmt);
mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

$firstname = "kyaw";
$lastname = "kyaw";
$city = "yangon";
mysqli_stmt_execute($insertstmt);

$firstname = "zaw";
$lastname = "zaw";
$city = "yangon";
mysqli_stmt_execute($insertstmt);

$firstname = "hnin";
$lastname = "mya";
$city = "bago";
mysqli_stmt_execute($insertstmt);

echo "New Records Created Successfully";


mysqli_close($conn);

echo "<hr/>";


// =>MySQLi Object-Oriented

 $dbhost = "localhost";
 $dbuser = "thirisandar";
 $dbpass = "44554scott";
 $dbname = "phpdbtwo";

 // Create connection

 $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);


 if($conn->connect_error){
 	die("Connection Failed: " . $conn->connect_error);
 }


$stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city)
    VALUES (?,?,?)");
$stmt->bind_param('sss',$firstname,$lastname,$city);

$firstname = "kyaw kyaw";
$lastname = "aung";
$city = "bago";
$stmt->execute();

$firstname = "hnin";
$lastname = "mya";
$city = "bago";
$stmt->execute();

$firstname = "aye";
$lastname = "mya";
$city = "mawlamyine";
$stmt->execute();

echo "New Records Created Successfully";
 
$stmt->close();
$conn->close();

 echo "<hr/>";


// =>PDO

 $dbhost = "localhost";
 $dbuser = "thirisandar";
 $dbpass = "44554scott";
 $dbname = "phpdbthree";

 try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    
    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUES(:firstname,:lastname,:city)");
    $stmt->bindParam(":firstname",$firstname);
    $stmt->bindParam(":lastname",$lastname);
     $stmt->bindParam(":city",$city);

$firstname = "kyaw kyaw";
$lastname = "aung";
$city = "bago";
$stmt->execute();

$firstname = "hnin";
$lastname = "mya";
$city = "bago";
$stmt->execute();

$firstname = "aye";
$lastname = "mya";
$city = "mawlamyine";
$stmt->execute();

echo "New Records Created Successfully";
   
 }catch(PDOException $e){
 	echo "Error Found: " . $e->getMessage();
 }
?>


<!-- 21PR -->