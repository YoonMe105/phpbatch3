<?php

ini_set('display_errors',1);

if(isset($_POST["submit"])){
    // echo "hay";

    $result = $_FILES;
    // echo "<pre>".print_r($result,true)."</pre>";

    $filetext = explode('.',$_FILES['profile']['name']);
    // echo "<pre>".print_r($filetext,true)."</pre>";
    // echo $filetext[0]."<br/>";
    // echo $filetext[1]."<br/>";

    $filetextname = current(explode('.',$_FILES['profile']['name']));
    // echo $filetextname."<br/>";

    $filetextformat = end(explode('.',$_FILES['profile']['name']));
    // echo $filetextformat."<br/>";
}

function getfilesizeone($filesize){

    if(is_numeric($filesize)){
        // return "Oki";

        $idx = 0;
        $prefix = ['Bit','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];
        $fixnum = 1024;

        while($filesize/$fixnum > 0.9){
            $filesize = $filesize/$fixnum;
            $idx++;
        }

        return round($filesize,2).' '.$prefix[$idx];
    }else{
        return "NAN";
    }

}

// echo getfilesizeone(90000000); 


function getfilesizetwo($filesize){
    $idx = 0;
    $prefix = ['Bit','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];
    $fixnum = 1024;

    if($filesize < $fixnum){
        return $filesize.' '.$prefix[$idx];
    }else{
        while($filesize > $fixnum){
            $filesize = round($filesize/$fixnum,2);
            $idx++;
        }
        return $filesize." ".$prefix[$idx];
    }
}

// echo getfilesizetwo(90000000);

function getfilesizethree($filesize){
    $size = filesize($filesize);
    // return $size;
    $fixnum = 1024;
    $prefix = ['Bit','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];

    $power = $size > 0 ? floor(log($size,$fixnum)) : 0;
    // return log(574,1024);
    // return $power;

    $result = round($size / pow($fixnum,$power),2)." ".$prefix[$power];
    return $result;
}

// echo getfilesizethree('./l43file.txt');
// echo getfilesizethree('./l41userdeleteform.php');


// $uploaddir = "./assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// echo $uploadfile;

// if(isset($_POST['submit'])){
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']);

//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File Successfully uploaded";
//     }else{
//         echo "Try Again";
//     }
// }

// $uploaddir = "xampp/htdocs/phpbatch3/part1/assets/"; //cause error,find error
// $uploaddir = 'assets/';
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];

// if(isset($_POST['submit'])){
    
//     if($uploadsize > 300000){
//         echo "Sorry,Your File is too large";
//     }else{
//         if(file_exists($uploadfile)){
//             echo "File already exists";
//         }else{
//             if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                 echo "File Uploaded Successfully";
//             }else{
//                 echo "Try Again";
//             }
//         }
//     }

// }


// $uploaddir = 'xampp/htdocs/phpbatch3/part1/assets/';
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
// // echo $uploadtype; //jpg

// if(isset($_POST['submit'])){
//     if($uploadtype != "jpg" && $uploadtype != "jpeg" && $uploadtype != "png" && $uploadtype != "git"){
//         echo "Sorry,we just allowed for jpg,jpeg,png,git file types";
//     }else{
//         if($uploadsize > 300000){
//             echo "File is too large";
//         }else{
//             if(file_exists($uploadfile)){
//                 echo "File already exists";
//             }else{
//                 if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                     echo "File Uploaded";
//                 }else{
//                     echo "Try Again";
//                 }
//             }
//         }
//     }
// }


// $uploaddir = "assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
// $uploadready = true;

// if(isset($_POST['submit'])){

//     // check file already exist or not
//     if(file_exists($uploadfile)){
//         echo "Sorry,already exist";
//         $uploadready = false;
//     }

//     // check file size
//     if($_FILES['profile']['size'] > 30000){
// 		echo "Sorry, file is too large.<br/>";
//         $uploadready = false;
//     }

//     // check file format
//     if($uploadtype != "jpg" && $uploadtype != "jpeg" && $uploadtype != "png" && $uploadtype != "git"){
//         echo "Sorry,we don't allowed this file type";
//         $uploadready = false;
//     }

//     if($uploadready){

//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "File Uploaded";
//         }else{
//             echo "Try Again";
//         }

//     }else{
//         echo "Sorry,file was not uploaded";
//     }

// }


if(isset($_POST['submit']) && !empty($_FILES['profile']['name'])){

    $filename = $_FILES['profile']['name'];
    $filesize = $_FILES['profile']['size'];
    $filetmp = $_FILES['profile']['tmp_name'];


    $uploaddir = "assets/";
    $uploadfile = $uploaddir.basename($filename);
    $uploadtype = strtolower(end(explode('.',$filename)));

    $allowextensions = ['jpg','jpeg','png','gif'];

    if(isset($_FILES['profile'])){
        $errors = [];

        // check extension
        if(in_array($uploadtype,$allowextensions) === false){
            $errors[] = "Sorry,we just allowed JPG,JPEG,PNG & GIF files type.";
        }

        // check size
        if($filesize > 30000){
			$errors[] = "Sorry, file is too large.";
        }

        if(empty($errors) === true){
            move_uploaded_file($filetmp,$uploadfile);
            echo "Uploaded ";
        }else{
			echo "<pre>".print_r($errors,true)."</pre>";
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Uploading File Running On</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-6 mx-auto mt-5">

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group mb-3">
				<label for="profile">Profile Picture</label>
				<input type="file" name="profile" id="profile" class="form-control" />
			</div>

			<input type="submit" name="submit" class="btn btn-primary float-end" value="Upload" />
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>