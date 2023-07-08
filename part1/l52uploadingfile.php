<?php

ini_set('display_errors',1);

if(isset($_POST['submit'])){
	// echo 'Hay';

	// $result = $_POST['profile'];
	// echo $result;

	$result = $_FILES;
	// echo $result;
	// echo "<pre>".print_r($result,true)."</pre>";

	// echo $_FILES['profile']['name'];
	// echo "<br/>";
	// echo $_FILES['profile']['full_path'];
	// echo "<br/>";
	// echo $_FILES['profile']['type'];
	// echo "<br/>";
	// echo $_FILES['profile']['tmp_name'];
	// echo "<br/>";
	// echo $_FILES['profile']['error'];
	// echo "<br/>";
	// echo $_FILES['profile']['size'];
	// echo "<br/>";


	// $fileext = explode('.',$_FILES['profile']['name']);
	// echo "<pre>".print_r($fileext,true)."</pre>";
	// echo $fileext[0]."<br/>";
	// echo $fileext[1]."<br/>";

	// $fileextname = current(explode('.',$_FILES['profile']['name']));
	// echo $fileextname."<br/>";

	// $fileextformat = end(explode('.',$_FILES['profile']['name']));
	// echo $fileextformat."<br/>";

}

function getfilessize($filesize){
	// echo $filesize;

	if(is_numeric($filesize)){
		// return "OKI";
		$idx = 0;
		$prefix = ['Bit','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];
		$fixnum = 1024;

		// echo $prefix($idx);

		while(($filesize/$fixnum) > 0.9){
			$filesize = $filesize/$fixnum;
			$idx++;
		}

		return round($filesize,2).' '.$prefix[$idx];

	}else{
		return "NaN";
	}
}

// echo getfilessize(70000000);

// 30UP

function getfilessizetwo($filesize){
	// return $filesize;

	$idx = 0;
	$fixnum = 1024;
	$prefix = ['B','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];

	if($filesize < $fixnum){
		return $filesize.' '.$prefix[$idx];
	}else{
		while($filesize > $fixnum){
			$filesize = round($filesize/$fixnum,2);
			$idx++;
		}
		return $filesize.' '.$prefix[$idx];
	}
}

// echo getfilessizetwo(7000);

function getfilessizethree($filesize){
	$size = filesize($filesize);
	$fixnum = 1024;
	$prefix = ['B','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];

	$power = $size > 0 ? floor(log($size,$fixnum)) : 0;
	// log(574,1024) //0.91649069266757
	// log(574,1024) //0

	$result = round($size / pow($fixnum,$power),2)." ".$prefix[$power];
			// 574 / (1074/0)
			// 574 / 1

	return $result;
}

// echo getfilessizethree('./l43file.txt');
// echo getfilessizethree('./l41userdeleteform.php');


// for linux = sudo chmod 777 -R assets/ 


// ==Method1
// $uploaddir = 'assets/';
// // $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/banner1.jpg

// // echo $uploadfile;

// // move_uploaded_file(temp,actualpathandname)

// if(isset($_POST['submit'])){

// 	$uploadfile = $uploaddir.basename($_FILES['profile']['name']);

// 	if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
// 		echo "File Successfully Uploaded";
// 	}else{
// 		echo "Try Again";
// 	}
// }


// ==Method2
// $uploaddir = 'xampp/htdocs/phpbatch3/part1/assets/';
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// // echo $uploadfile;

// if(isset($_POST['submit'])){
	
// 	if($uploadsize > 30000){
// 		echo "Sorry,Your file is too large";
// 	}else{
// 		if(file_exists($uploadfile)){
// 			echo "Sorry,File already exists";
// 		}else{
// 			if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
// 				echo "File Successfully Uploaded";
// 			}else{
// 				echo "Try Again";
// 			}
// 		}
// 	}	
// }



// ==Method3
// $uploaddir = 'xampp/htdocs/phpbatch3/part1/assets/';
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
// // echo $uploadtype;  //jpg

// if(isset($_POST['submit'])){

// 	if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "gif"){
// 		echo "Sorry, We just allowed for JPG,JPEG,PNG & GIT file types";
// 	}else{
// 		if($uploadsize > 30000){
// 			echo "Sorry,Your file is too large";
// 		}else{
// 			if(file_exists($uploadfile)){
// 				echo "Sorry,File already exists";
// 			}else{
// 				if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
// 					echo "File Successfully Uploaded";
// 				}else{
// 					echo "Try Again";
// 				}
// 			}
// 		}	
// 	}
	
	
// }


// ==Method4
// $uploaddir = 'assets/';
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));  //jpg png txt
// $uploadready = true;

// if(isset($_POST['submit'])){

// 	// check file already exists or not
// 	if(file_exists($uploadfile)){
// 		echo "Sorry, file already exists.<br/>";
// 		$uploadready = false;
// 	}

// 	// check file size
// 	if($_FILES['profile']['size'] > 30000){
// 		echo "Sorry, file is too large.<br/>";
// 		$uploadready = false;
// 	}

// 	// check file format
// 	if($uploadtype !== 'jpg' && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "gif"){
// 		echo "Sorry, we just allowed jpg,jpeg,png and gif Files.<br/>";
// 		$uploadready = false;
// 	}

// 	// upload
// 	if($uploadready){

// 		if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
// 			echo "File Successfully Uploaded";
// 		}else{
// 			echo "Try Again";
// 		}

// 	}else{
// 		echo "Sorry,your file was not uploaded";
// 	}
// }


if(isset($_POST['submit']) && !empty($_FILES['profile']['name'])){
	// echo "Hello";

	$filename = $_FILES['profile']['name'];
	$filesize = $_FILES['profile']['size'];
	$filetmp = $_FILES['profile']['tmp_name'];
	// $filetype = $_FILES['profile']['type'];  // image/jpeg 

	$uploaddir = 'assets/';
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

		// upload
		if(empty($errors)=== true){

			move_uploaded_file($filetmp,$uploadfile);
			echo "File Successfully Uploaded";

		}else{
			echo "<pre>".print_r($errors,true)."</pre>";
		}

	}


}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Uploading File</title>
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


<!-- 
bit 
byte 
kilo byte
mega byte
giga byte
tera byte
peta byte
exa byte
zetta byte
yotta byte
-->

<!-- 1MB = 1024KB instead 1000 KB
01 base 2

2^0 = 1
2^1 = 2
2^2 = 4
2^3 = 8
2^4 = 16
2^5 = 32
2^6 = 64
2^7 = 128
2^8 = 256
2^9 = 512
2^10 = 1024

2^0 = 1
2^-1 = 1/2
2^-2 = 1/4

2^3 = 8
2^2 = (2^3)/2 =4
2^1 = (2^2)/2 =2
2^0 = (2^1)/2 =1 
-->

