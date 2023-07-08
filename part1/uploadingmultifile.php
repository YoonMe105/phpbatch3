<?php

$filenames = $_FILES['profile']['name'];
$filetmps = $_FILES['profile']['tmp_name'];
$fileerrs = $_FILES['profile']['error'];

$uploaddir = "assets/";

if(isset($_POST['submit'])){

    foreach($fileerrs as $idx=>$fileerr){
        // echo $fileerr."<br/>".$idx;

        if($fileerr === UPLOAD_ERR_OK){
            $getfilename = $filenames[$idx];
            $uploadfile = $uploaddir.basename($getfilename);
            $getfiletmp = $filetmps[$idx];

            if(move_uploaded_file($getfiletmp,$uploadfile)){
                echo "Files Successfully Uploaded";
            }else{
                echo "Upload Failed";
            }

        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Uploading Files Running On</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-6 mx-auto mt-5">

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group mb-3">
				<label for="profile">Profile Picture</label>
				<input type="file" name="profile[]" id="profile" class="form-control" multiple />
			</div>

			<input type="submit" name="submit" class="btn btn-primary float-end" value="Upload" />
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>