
<?php

$pname=filter_input(INPUT_POST,'pname'); 
$bno=filter_input(INPUT_POST,'bno'); 
$bdate=filter_input(INPUT_POST,'date'); 


$name1=filter_input(INPUT_POST,'bname'); 
$name2=filter_input(INPUT_POST,'ename'); 
$fname=filter_input(INPUT_POST,'father'); 
$mname=filter_input(INPUT_POST,'mother'); 
$birth=filter_input(INPUT_POST,'birth'); 
$barea=filter_input(INPUT_POST,'barea'); 
$page=filter_input(INPUT_POST,'age'); 
$status=filter_input(INPUT_POST,'merrige');
$nationality=filter_input(INPUT_POST,'nationality');
$nid=filter_input(INPUT_POST,'nid');
$religion=filter_input(INPUT_POST,'religion');


$village=filter_input(INPUT_POST,'paddress'); 
$post=filter_input(INPUT_POST,'post'); 
$teleg=filter_input(INPUT_POST,'toffice'); 
$upo=filter_input(INPUT_POST,'upo'); 
$dist=filter_input(INPUT_POST,'zella'); 


$full=filter_input(INPUT_POST,'presentadd'); 
$posto=filter_input(INPUT_POST,'teleohhice'); 
$phone=filter_input(INPUT_POST,'phone'); 
$mob=filter_input(INPUT_POST,'mobile'); 
$email=filter_input(INPUT_POST,'email'); 


$school_name=filter_input(INPUT_POST,'t1'); 
$year_start=filter_input(INPUT_POST,'t2'); 
$year_end=filter_input(INPUT_POST,'t3'); 
$exam_name=filter_input(INPUT_POST,'xm_name'); 
$passed_year=filter_input(INPUT_POST,'passed_year'); 
$board=filter_input(INPUT_POST,'ssc_board'); 
$result=filter_input(INPUT_POST,'ssc_result'); 
$gpa=filter_input(INPUT_POST,'other');
$subject=filter_input(INPUT_POST,'sub');


$hscschool_name=filter_input(INPUT_POST,'hscName'); 
$hscyear_start=filter_input(INPUT_POST,'hsc_start'); 
$hscyear_end=filter_input(INPUT_POST,'hsc_end'); 
$hscexam_name=filter_input(INPUT_POST,'hscxmName'); 
$hscpassed_year=filter_input(INPUT_POST,'hscpassedyear'); 
$hscboard=filter_input(INPUT_POST,'hsc_board'); 
$hscresult=filter_input(INPUT_POST,'hsc_result'); 
$hscgpa=filter_input(INPUT_POST,'other1');
$hscsubject=filter_input(INPUT_POST,'hscsub');


$hschool_name=filter_input(INPUT_POST,'graduation_equivalent_level_university_institute'); 
$hyear_start=filter_input(INPUT_POST,'hstart_year'); 
$hyear_end=filter_input(INPUT_POST,'hend_year'); 
$hexam_name=filter_input(INPUT_POST,'graduation_equivalent_level_examination'); 
$hpassed_year=filter_input(INPUT_POST,'graduation_equivalent_level_passing_year'); 
$hboard=filter_input(INPUT_POST,'hBoard'); 
$hresult=filter_input(INPUT_POST,'graduation_equivalent_level_result'); 
$hgpa=filter_input(INPUT_POST,'other2');
$hsubject=filter_input(INPUT_POST,'graduation_equivalent_level_subject_degree');


$mschool_name=filter_input(INPUT_POST,'masters_equivalent_level_university_institute'); 
$myear_start=filter_input(INPUT_POST,'mstart_year'); 
$myear_end=filter_input(INPUT_POST,'mend_year'); 
$mexam_name=filter_input(INPUT_POST,'masters_equivalent_level_examination'); 
$mpassed_year=filter_input(INPUT_POST,'masters_equivalent_level_passing_year'); 
$mboard=filter_input(INPUT_POST,'mBoard'); 
$mresult=filter_input(INPUT_POST,'masters_equivalent_level_result'); 
$mgpa=filter_input(INPUT_POST,'other3');
$msubject=filter_input(INPUT_POST,'graduation_equivalent_level_subject_degree');


$language_performance=filter_input(INPUT_POST,'language_performance'); 
$previous_job=filter_input(INPUT_POST,'previous_job'); 
$present_job=filter_input(INPUT_POST,'present_job'); 
$job_experience=filter_input(INPUT_POST,'job_experience'); 
$job_agreement=filter_input(INPUT_POST,'job_agreement'); 
$expected_salary=filter_input(INPUT_POST,'expected_salary'); 
$reference=filter_input(INPUT_POST,'reference'); 
$suspention_details=filter_input(INPUT_POST,'suspention_details');
$pension_details=filter_input(INPUT_POST,'pension_details');
$other_info=filter_input(INPUT_POST,'other_info');

$other_edu=filter_input(INPUT_POST,'otherEdu');



$pay_order_no=filter_input(INPUT_POST,'pay_order_no'); 
$date=filter_input(INPUT_POST,'date'); 
$amount=filter_input(INPUT_POST,'amount'); 


        
$image=filter_input(INPUT_POST,'image'); 
$signature=filter_input(INPUT_POST,'signature'); 
$signdate=filter_input(INPUT_POST,'signdate'); 
        


$target_dir = 'photo_signature/';
$fileName = basename($_FILES["image"]["name"]);
$target_file=$target_dir . $fileName;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$target_dir = 'photo_signature/';
$fileName1 = basename($_FILES["signature"]["name"]);
$target_file1=$target_dir . $fileName1;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["signature"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["signature"]["tmp_name"], $target_file1)) {
    
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
        
     $sql ="INSERT INTO o_school_info(designation,circular_no,circular_date)VALUES('$pname','$bno','$bdate')";
    $result = mysqli_multi_query($conn, $sql);
       
   $sql="INSERT INTO o_personal_info(id,name_bangla,name_english,father_husband_name,mother_name,birth_date,birth_area,present_age,status,nationality,NID,religion)VALUES(LAST_INSERT_ID(),'$name1','$name2','$fname','$mname','$birth','$barea','$page','$status','$nationality','$nid','$religion')";
    $result = mysqli_multi_query($conn, $sql);
        
        
     $sql="INSERT INTO o_parmanent_add(id,village,post_office,telegram,upozilla,district)VALUES(LAST_INSERT_ID(),'$village','$post','$teleg','$upo','$dist')";
        $result = mysqli_multi_query($conn, $sql);
           
        
    $sql="INSERT INTO o_present_address(id,full_address,post_office,telephone,mobile,e_mail)
    VALUES(LAST_INSERT_ID(),'$full','$posto','$phone','$mob','$email')";
        $result = mysqli_multi_query($conn, $sql);  
        
        
         $sql="INSERT INTO
         o_ssc_info(id,school_name,year_start,year_end,exam_name,passed_year,board,result,gpa,subject)
VALUES(LAST_INSERT_ID(),'$school_name','$year_start','$year_end','$exam_name','$passed_year','$board','$result','$gpa','$subject')";
        $result = mysqli_multi_query($conn, $sql);  
        
        
          $sql="INSERT INTO
         o_hsc_info(id,collage_name,year_start,year_end,exam_name,passed_year,board,result,gpa,subject)
VALUES(LAST_INSERT_ID(),'$hscschool_name','$hscyear_start','$hscyear_end','$hscexam_name','$hscpassed_year','$hscboard','$hscresult','$hscgpa','$hscsubject')";
        $result = mysqli_multi_query($conn, $sql); 
        
        
        
        $sql="INSERT INTO
         o_honours_info(id,university_name,year_start,year_end,exam_name,result,gpa,passed_year,university,subject)
VALUES(LAST_INSERT_ID(),'$hschool_name','$hyear_start','$hyear_end','$hexam_name','$hresult','$hgpa','$hpassed_year','$hboard','$hsubject')";
        $result = mysqli_multi_query($conn, $sql); 
        
        
        
        $sql="INSERT INTO
         o_masters_info(id,university_name,year_start,year_end,exam_name,result,gpa,passed_year,university,subject)
VALUES(LAST_INSERT_ID(),'$mschool_name','$myear_start','$myear_end','$mexam_name','$mresult','$mgpa','$mpassed_year','$mboard','$msubject')";
        $result = mysqli_multi_query($conn, $sql); 
        
        
        
         $sql="INSERT INTO
o_other_info(id,language_performance,previous_job,present_job,job_experience,job_agreement,expected_salary,reference,suspention_details,	pension_details,other_info)
VALUES(LAST_INSERT_ID(),'$language_performance','$previous_job','$present_job','$job_experience','$job_agreement','$expected_salary','$reference','$suspention_details','$pension_details','$other_info')";
    $result = mysqli_multi_query($conn, $sql);
        
        
        
 $sql="INSERT INTO 
 o_extra_edu_info(id,other_edu_details)
 VALUES(LAST_INSERT_ID(),'$other_edu')";
$result = mysqli_multi_query($conn, $sql);
        
        
        
 $sql="INSERT INTO
o_bank_info(id,pay_order_no,date,amount)
VALUES(LAST_INSERT_ID(),'$pay_order_no','$date','$amount')";
$result = mysqli_multi_query($conn, $sql);
        

        
 $sql="INSERT INTO
 o_image_sign_date(id,image,	signature,date)
 VALUES(LAST_INSERT_ID(),'$fileName','$fileName1','$signdate')";
$result = mysqli_multi_query($conn, $sql);
             
        
        
        
        
        
        
        echo"Record insert successfully";
       
        $conn->close();
    }



?>