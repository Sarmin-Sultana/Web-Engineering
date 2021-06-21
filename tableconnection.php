<?php
error_reporting(0);
 $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "jobportal";
   $conn = new mysqli($host, $dbusername, $dbpassword,  $dbname);
if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
       // $sql="SELECT school_info.school_name,school_info.designation,personal_info.name_english, personal_info.NID,personal_info.birth_date FROM school_info NATURAL JOIN personal_info WHERE( school_info.id = personal_info.id )";
$sql = "SELECT school_info.id,school_info.school_name,school_info.circular_no,school_info.designation,personal_info.name_english, personal_info.birth_date,personal_info.present_age,  present_address.e_mail FROM school_info NATURAL JOIN personal_info NATURAL JOIN  present_address WHERE( school_info.id = personal_info.id AND  school_info.id= present_address.id)";
 //$sql = "SELECT id,school_name,circular_no,circular_date,designation FROM  school_info";
         //$sql = "SELECT * FROM  school_info";
        $data = mysqli_query($conn, $sql);  

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo "$total";
if($total!=0){
    echo"Table has records";
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>