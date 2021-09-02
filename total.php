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
       
$sql = "SELECT designation FROM school_info ";
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
                                  