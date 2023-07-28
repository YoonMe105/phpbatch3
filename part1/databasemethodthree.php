<?php

// =>PDO

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


// Create Database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

try{
    $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS phpdbthree";
    $conn->exec($sql);

    echo "Database Created Successfully";

}catch(PDOException $e){
 	echo "Error Found: " . $e->getMessage();
}

// Create Table

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
   $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   // Create Table
   $sql = "CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    city VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";

      $conn->exec($sql);

      echo "Table Created Successfully";

}catch(PDOException $e){
    echo "Error Found: ".$e->getMessage();
}

// Insert Data

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "phpdbthree";

// try{
//    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//    // Insert Data
//    $sql = "INSERT INTO students(firstname,lastname,city)  
//        VALUES('aung','kyaw','yangon');";
//    $sql .= "INSERT INTO students(firstname,lastname,city)  
//        VALUES('su','hlaing','yangon');";
//    $sql .= "INSERT INTO students(firstname,lastname,city)  
//        VALUES('tun','aung','yangon');";

//    $conn->exec($sql);

//    echo "Insert Successfully";

// }catch(PDOException $e){
// 	echo "Error Found: " . $e->getMessage();
// }

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     
     // begin the transaction
    $conn->beginTransaction();

    // Insert Data
    $conn->exec("INSERT INTO students(firstname,lastname,city)  
        VALUES('aung','kyaw','yangon')");
    $conn->exec("INSERT INTO students(firstname,lastname,city)  
        VALUES('su','hlaing','yangon')");
    $conn->exec("INSERT INTO students(firstname,lastname,city)  
        VALUES('tun','aung','yangon')");
    
    // every transaction committed for each
    $conn->commit();


    echo "Insert Successfully";

}catch(PDOException $e){
 	echo "Error Found: " . $e->getMessage();
}

$conn = null;

// Select Data

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT id,firstname,lastname FROM students");
    $stmt->execute();
    
    // while($row = $stmt->fetch()){
    //   echo "id : ".$row['id']." - Name : ".$row['firstname']." ".$row['lastname']."<br/>";
    // }

    
      foreach($stmt->fetchAll() as $row){
        echo "id : ".$row['id']." - Name : ".$row['firstname']." ".$row['lastname']."<br/>";
      }
    


}catch(PDOException $e){
 	echo "Error Found: " . $e->getMessage();
}

$conn = null;

echo "<hr/>";

// Update Data

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

// Delete Data 

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