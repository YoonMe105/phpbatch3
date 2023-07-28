<?php

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



// $conn = new mysqli("localhost","root","","php");

// if($conn->connect_errno){
//     echo "Failed to connect :". $conn->connect_errno;
//     exit();

// }

// echo "Connect Successfully"."<br/>";

// echo "<hr/>";



// function openconn(){
//     $dbhost = "localhost";
//     $dbuser = "root";
//     $dbpass = "";
//     $dbconnect = new mysqli($dbhost,$dbuser,$dbpass);

//     return $dbconnect;
// }


// function closeconn($conn){
//     $conn->close();
// }


// $conn = openconn();
// echo "Connect Successfully";
// closeconn($conn);

echo "<hr/>";



 // Create Database
$sql = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

if($conn->query($sql) === TRUE){
 	echo "Database Created Successfully";
}else{
 	echo "Error Found: " . $conn->error;
}

$conn->close();

echo "<hr/>";

// Create Table


$sql = "CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    city VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";

if($conn->query($sql) === TRUE){
	echo "Table Created Successfully";
}else{
	echo "Error Found: ".$conn->error;
}


$conn->close();


echo "<hr/>";

// Insert Table
$sql = "INSERT INTO students (firstname,lastname,city)
        VALUES('aung','kyaw','yangon'),
        ('su','hlaing','mandalay')
";


if($conn->query($sql) === TRUE){
 	echo "Insert Successfully";
}else{
 	echo "Error Found: " . $conn->error;
}

$conn->close();

echo "<hr/>";

// Select

 // $sql = "SELECT id,firstname,lastname FROM students";
 // $sql = "SELECT id,firstname,lastname FROM students WHERE lastname='hlaing'";
$sql = "SELECT id,firstname,lastname FROM students ORDER BY lastname";
$result = $conn->query($sql);

// echo "$result->num_rows";

if($result->num_rows > 0){
 	while($row = $result->fetch_assoc()){
 		echo "id : ".$row['id']." - Name : ".$row['firstname']." ".$row['lastname']."<br/>";
 	}

}else{
 	echo "No Result";
}

$conn->close();

echo "<hr/>";


//  Update 
$sql = "UPDATE students SET lastname='mar aye' WHERE id=24";

if($conn->query($sql) === TRUE){
   echo "Updated Successfully";

}else{
  echo "No Result";
}

$conn->close();

echo "<hr/>";

// Delete Data

$sql = "DELETE FROM students WHERE id=24";

if($conn->query($sql) === TRUE){
   echo "Delete Successfully";

}else{
  echo "No Result";
}

$conn->close();

echo "<hr/>";

?>