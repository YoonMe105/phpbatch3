<?php


ini_set('display_errors',1);


// $conn = mysqli_connect('localhost','root','','php');

// if(mysqli_connect_error()){
//     die('Failed to connect' . mysqli_connect_error());
// }

// echo "Connect Successfully";

// echo "<hr/>";

$dbhost = 'localhost';
$dbuser = "root";
$dbpass = '';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    die('Failed to connect'. mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";

// database create
$sql = "CREATE DATABASE IF NOT EXISTS phpone";

if(mysqli_query($conn,$sql)){
    echo "Database Created Successfully";
}else{
    echo "Error Found: ". mysqli_error($conn);
}

mysqli_close($conn);

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

if(mysqli_query($conn,$sql)){
    echo "Table Created Successfully";
}else{
    echo "Error Found: ".mysqli_error($conn);
}

mysqli_close($conn);

echo "<hr/>";


// Data Insert
$sql = "INSERT INTO students(firstname,lastname,city)  
        VALUE('aung','kyaw','yangon')";


if(mysqli_query($conn,$sql)){
  echo "Insert Successfully";
}else{
   echo "Error Found: " . mysqli_error($conn);
}

mysqli_close($conn);

echo "<hr/>";

// Select Data
$sql = "SELECT id,firstname,lastname FROM students WHERE id=25";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result) > 0){

   while($row = mysqli_fetch_assoc($result)){
      echo "id : ".$row['id']." - Name : ".$row['firstname']." ".$row['lastname']."<br/>";
   }

}else{
   echo "No Result";
}

mysqli_close($conn);


echo "<hr/>";


// Update Data
$sql = "UPDATE students SET lastname='tun tun' WHERE id=25";

if(mysqli_query($conn,$sql)){
  echo "Updated Successfully";
}else{
   echo "No Result";
}

mysqli_close($conn);


echo "<hr/>";

// Delete Data
$sql = "DELETE FROM students WHERE id=25";

if(mysqli_query($conn,$sql)){
  echo "Delete Successfully";
}else{
   echo "No Result";
}

mysqli_close($conn);


echo "<hr/>";

?>