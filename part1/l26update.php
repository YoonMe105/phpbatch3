<?php

ini_set('display_errors',1);

// =>MySQLi Procedural

$conn = mysqli_connect("localhost","root","",'phpdbone');

if(mysqli_connect_error()){
  echo "Failed to Connect: " . mysqli_connect_error();
  exit();
}

echo "Connected Successfully <br/>";


// Update Data
$sql = "UPDATE students SET lastname='tun tun' WHERE id=25";

if(mysqli_query($conn,$sql)){
  echo "Updated Successfully";
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


 $sql = "UPDATE students SET lastname='mar aye' WHERE id=24";

 if($conn->query($sql) === TRUE){
   echo "Updated Successfully";

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

    $sql = "UPDATE students SET city='mawlamyine' WHERE id=31";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo $stmt->rowCount()." Updated Successfully";

    
 }catch(PDOException $e){
  echo "Error Found: " . $e->getMessage();
 }


$conn = null;

 echo "<hr/>";


?>

