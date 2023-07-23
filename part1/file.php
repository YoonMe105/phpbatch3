<?php

// echo readfile('l43file.txt');
// echo filesize('l43file.txt');

// $fileopen = fopen('l43file.txt','r');
// if($fileopen){
//     // echo "Ok";

//     $fileread = fread($fileopen,filesize('l43file.txt'));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!";
// }



// $fileopen = fopen("file.txt","w");

// if($fileopen){
//     // echo "Ok";

//     // fwrite($fileopen,"Hello !!! I created a new file");

//     // $fileopen = fopen("file.txt","r");
//     // $fileread = fread($fileopen,filesize("file.txt"));
//     // fclose($fileopen);

//     // echo $fileread;

//     fwrite($fileopen,"I added a new message");
//     fclose($fileopen);

//     echo "File Wrote";
// }else{
//     echo "File Not Found !!";
// }


// $fileopen = fopen('file1.txt','x');
// if($fileopen){
//     // echo "Ok";

//     fwrite($fileopen,"Hello !! I created a new file");
//     fclose($fileopen);
// }else{
//     echo "File Not Found !!!";
// }


// $fileopen = fopen('file2.txt','c');
// if($fileopen){
//     // echo "Ok";

//     fwrite($fileopen,"Hello! I created a new file");

//     $fileopen = fopen('file2.txt',"c+");
//     $fileread = fread($fileopen,filesize('file2.txt'));

//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }


// $fileopen = fopen('file3.txt','w');
// if($fileopen){
//     // echo "Ok";

//     $message = "Welcome to our website\n";
//     fwrite($fileopen,$message);
//     $message = "Thanks for using our website\n";
//     fwrite($fileopen,$message);

    
//     $fileopen = fopen('file3.txt',"r");
//     $fileread = fread($fileopen,filesize('file3.txt'));

//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }

// $fileopen = fopen('file4.txt','a');
// if($fileopen){
//     // echo "Ok";

//     $message = "Welcome to our website.\n";
//     fwrite($fileopen,$message);
//     $message = "Thanks for using our template🤗.";
//     fwrite($fileopen,$message);

    
//     $fileopen = fopen('file4.txt',"r");
//     $fileread = fread($fileopen,filesize('file4.txt'));

//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }


// -------------------------

// echo file_get_contents('file1.txt');

// $existingfile = "file1.txt";
// $newfile = "file5.txt";
// $message = file_get_contents($existingfile);
// $message .= "\n Thanks for using php file system. ";
// file_put_contents($newfile,$message) or die('Unable to open file');
// echo file_get_contents('file5.txt');


// $existingfile = "file60.txt";
// $newfile = "file6.txt";
// if(file_exists($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thanks for using php file system. ";

//     file_put_contents($newfile,$message) or die('Unable to open file');
// }else{
//     echo "File Not Found";
// }

// $existingfile = "file4.txt";
// $newfile = "file6.txt";
// if(file_exists($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thanks for using php file system. ";

//     file_put_contents($newfile,$message) or die('Unable to open file');
// }else{
//     echo "File Not Found";
// }

// $file = "file1.txt";
// copy($file,'file7.txt');
// echo file_get_contents('file7.txt');


// $file = "file1.txt";
// if(file_exists($file)){
//     unlink($file);
//     echo "File Delete Successfully";
// }else{
//     echo "File Not Found";
// }

echo "<pre>".print_r(glob('*.txt'),true)."</pre>"

?>