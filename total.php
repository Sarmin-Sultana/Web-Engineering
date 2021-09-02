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
       
$sql =  $sql = "SELECT designation FROM o_school_info "; 
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
       
 $sql ="SELECT designation FROM s_school_info ";
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
                                  