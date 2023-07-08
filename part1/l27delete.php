<?php

ini_set('display_errors',1);


// =>MySQLi Procedural

$conn = mysqli_connect("localhost","root","",'phpdbone');

if(!$conn){
  echo "Failed to Connect: " . mysqli_connect_error();
  exit();
}

echo "Connected Successfully <br/>";


// Delete Data
$sql = "DELETE FROM students WHERE id=25";

if(mysqli_query($conn,$sql)){
  echo "Delete Successfully";
}else{
   echo "No Result";
}

mysqli_close($conn);


echo "<hr/>";


// =>MySQLi Object-Oriented

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "phpdbtwo";

 // Create connection

 $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);


 if($conn->connect_error){
  die("Connection Failed: " . $conn->connect_error);
 }


 $sql = "DELETE FROM students WHERE id=24";

 if($conn->query($sql) === TRUE){
   echo "Delete Successfully";

 }else{
  echo "No Result";
 }

 $conn->close();

 echo "<hr/>";


// =>PDO

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "phpdbthree";

 try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM students WHERE id=31";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo $stmt->rowCount()." Delete Successfully";

    
 }catch(PDOException $e){
  echo "Error Found: " . $e->getMessage();
 }


$conn = null;

 echo "<hr/>";


?>