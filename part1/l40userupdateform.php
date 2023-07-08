<?php

ini_set('display_errors',1);

// =>MYSQLI Object_Oriented

$dbhost = "localhost";
$dbuser = "thirisandar";
$dbpass = "44554scott";
$dbname = "phpdbone";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}


$sql = "SELECT id,name,email FROM users";
$result = $conn->query($sql);

// echo "$result->num_rows <br/>";


 if(isset($_POST['submit'])){

    // $stmt = $conn->prepare("UPDATE users SET name=?,email=?,password=? WHERE id=?");
    // $stmt->bind_param("sssi",$name,$email,$password,$id);
   
    $query = "UPDATE users SET "; //aware space
    $query .= "name=?, ";  //aware comma
    $query .= "email=?, ";  //aware comma
    $query .= "password=?";
    $query .= " WHERE id=?"; //aware space
 
    $stmt = $conn->prepare($query);
    $stmt -> bind_param('sssi',$name,$email,$password,$id);

    $id = $_POST['userid'];
    $name = textfilter($_POST['name']);
    $email = textfilter($_POST['email']);
    $password = md5(textfilter($_POST['password']));
    $stmt->execute();
    
    echo "Update User Successfully";

    $stmt->close();
    $conn->close();
 }

 function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
 }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>User Update Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class=container>
    <div class="col-md-6 mx-auto">
        <h3 class="text-center my-3">Register Form</h3>
        <form action="" method="POST" >
           
        <div class="form-group mb-3">
            <label for="userid">USER ID</label>
            <select name="userid" id="userid" class="form-control">
                <!-- <option value="1">1</option> -->
                
                <?php
                   
                   if($result->num_rows > 0){

                      while($row = $result->fetch_assoc()){
                         $id = $row['id'];
                         echo "<option value='$id'>$id</option>";
                      }
                   }else{
                      echo "<option value=''>No Data</option>"; 
                   }

                ?>
            </select>
        </div>


           <div class="form-group mb-3">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>
            
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
            
            <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Update" />
            
            
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
    </html>


    <!-- ZOOM ID = 528 716 1189
    Password = 
    -->