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
        
        
 $sql = "SELECT * FROM school_info  WHERE (school_info.designation='Assistant Professor')";
        $data = mysqli_query($conn, $sql);  
        $total1 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM school_info  WHERE (school_info.designation='Lecturer')";
        $data = mysqli_query($conn, $sql);  
        $total2 = mysqli_num_rows($data);
        
        
         $sql = "SELECT * FROM school_info  WHERE (school_info.designation='Associate Professor')";
        $data = mysqli_query($conn, $sql);  
        $total3 = mysqli_num_rows($data);
        
        
          $sql = "SELECT * FROM school_info  WHERE (school_info.designation='Professor')";
        $data = mysqli_query($conn, $sql);  
        $total4= mysqli_num_rows($data);
        
        
        $sql = "SELECT designation FROM school_info ";
        $data = mysqli_query($conn, $sql);  
        $totalrow = mysqli_num_rows($data);
        
$result = mysqli_fetch_assoc($data);
//echo "$total";
if($totalrow!=0){
    
    echo"Applicants for\n";echo "<br>";
    echo"Professor $total4\n";echo "<br>";
      echo" Associate Professor $total3\n";echo "<br>";
    echo" Assistant Professor $total1\n";echo "<br>";
    echo"Lecturer $total2\n";echo "<br>";
  
   
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>
          