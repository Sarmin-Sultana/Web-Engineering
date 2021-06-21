<?php
error_reporting (0);
$stuff_notice=filter_input(INPUT_POST,'notice1'); 
$description1=filter_input(INPUT_POST,'description1');

$target_dir = 'circular/';
$fileName = basename($_FILES["notice1"]["name"]);
$target_file=$target_dir . $fileName;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["notice1"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "pdf") {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["notice1"]["tmp_name"], $target_file)) {
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


   

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "jobportal";
   $conn = new mysqli($host, $dbusername, $dbpassword,  $dbname); 

if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        
     $sql ="INSERT INTO notice(description3,stuff_notice)VALUES('$description1','$fileName')";
     //$sql ="INSERT INTO notice(description1,officer_notice,description2,teacher_notice,description3,stuff_notice)VALUES('$description1','$fileName','$description2','$teacher_notice','$description3','$stuff_notice')";
        $result = mysqli_query($conn, $sql);
         
        
        echo"Record insert successfully";
       
        $conn->close();
    }



?> 