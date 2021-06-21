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
       
$sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address ,extra_edu_info , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,research_paper ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND school_info.id=extra_edu_info.id AND school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND school_info.id=research_paper.id AND school_info.id=ssc_info.id )";
        $data = mysqli_query($conn, $sql);  
        $total = mysqli_num_rows($data);
     
 
        
        
$result = mysqli_fetch_assoc($data);
//echo "$total";
if($total!=0){
    echo" Teacher applicants $total";
   echo "<br>";
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>
                                  
    
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
       
$sql = "SELECT * FROM o_school_info ,o_personal_info ,o_bank_info ,o_present_address ,o_extra_edu_info , o_honours_info ,o_hsc_info ,o_image_sign_date ,o_masters_info ,o_other_info ,o_parmanent_add ,o_ssc_info WHERE ( o_school_info.id = o_personal_info.id AND o_school_info.id= o_bank_info.id AND o_school_info.id= o_present_address.id AND o_school_info.id=o_extra_edu_info.id AND o_school_info.id=o_honours_info.id AND o_school_info.id=o_hsc_info.id AND o_school_info.id=o_image_sign_date.id AND o_school_info.id=o_masters_info.id AND o_school_info.id=o_other_info.id AND o_school_info.id=o_parmanent_add.id AND  o_school_info.id=o_ssc_info.id )";
        $data = mysqli_query($conn, $sql);  
        $total = mysqli_num_rows($data);
     
 
        
        
$result = mysqli_fetch_assoc($data);
//echo "$total";
if($total!=0){
    echo" Officer applicants $total";echo "<br>";
   
}
else{
    echo"No records found";
}
           $conn->close();
    }

?> 
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
       
$sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id )";
        $data = mysqli_query($conn, $sql);  
        $total = mysqli_num_rows($data);
     
 
        
        
$result = mysqli_fetch_assoc($data);
//echo "$total";
if($total!=0){
    echo" Stuff applicants $total";echo "<br>";
   
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>                                                           
                                  