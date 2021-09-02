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
        $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Accountant')";
        $data = mysqli_query($conn, $sql);  
        $total = mysqli_num_rows($data);
        
        
           $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Driver')";
        $data = mysqli_query($conn, $sql);  
        $total2 = mysqli_num_rows($data);
        
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Security Guard')";
        $data = mysqli_query($conn, $sql);  
        $total3 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Cleaner')";
        $data = mysqli_query($conn, $sql);  
        $total4 = mysqli_num_rows($data);
        
        $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Library Assistant')";
        $data = mysqli_query($conn, $sql);  
        $total5 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='WPO ')";
        $data = mysqli_query($conn, $sql);  
        $total6 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='UDA')";
        $data = mysqli_query($conn, $sql);  
        $total7 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='LDA')";
        $data = mysqli_query($conn, $sql);  
        $total8 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Night Guard')";
        $data = mysqli_query($conn, $sql);  
        $total9 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Office Assistant')";
        $data = mysqli_query($conn, $sql);  
        $total10 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Classifier')";
        $data = mysqli_query($conn, $sql);  
        $total11 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Office Assistsnt cum Computer Typist')";
        $data = mysqli_query($conn, $sql);  
        $total12 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Helper for Carpenter')";
        $data = mysqli_query($conn, $sql);  
        $total13= mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Computer Operater')";
        $data = mysqli_query($conn, $sql);  
        $total14 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Automobile Mechanic')";
        $data = mysqli_query($conn, $sql);  
        $total15= mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Moazzin ')";
        $data = mysqli_query($conn, $sql);  
        $total16 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Cashier ')";
        $data = mysqli_query($conn, $sql);  
        $total17 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info  WHERE ( s_school_info.designation='Lift Mechanic ')";
        $data = mysqli_query($conn, $sql);  
        $total18 = mysqli_num_rows($data);
        
        
        
        $sql ="SELECT designation FROM s_school_info ";
        $data = mysqli_query($conn, $sql);  
        $totalrow = mysqli_num_rows($data); 
        
$result = mysqli_fetch_assoc($data);
//echo "$total";
if($totalrow!=0){
    
    echo"Applicants for\n";echo "<br>";
    echo" Accountant $total\n";echo "<br>";
   // echo"  $total1\n";echo "<br>";
    echo"Driver $total2\n";echo "<br>";
    echo" Security Guard $total3\n";echo "<br>";
    echo"Cleaner$total4\n";echo "<br>";
     echo" Library Assistant $total5\n";echo "<br>";
     echo" WPO $total6\n";echo "<br>";
     echo"UDA $total7\n";echo "<br>";
     echo"  LDA $total8\n";echo "<br>";
     echo" Night Guard $total9\n";echo "<br>";
      echo"Office Assistant  $total10\n";echo "<br>";
     echo"Classifier  $total11\n";echo "<br>";
     echo"Office Assistsnt cum Computer Typist  $total12\n";echo "<br>";
     echo"Helper for Carpenter  $total13\n";echo "<br>";
     echo" Computer Operater  $total14\n";echo "<br>";
     echo" Automobile Mechanic $total15\n";echo "<br>";
     echo"Moazzin   $total16\n";echo "<br>";
     echo"Cashier   $total17\n";echo "<br>";
     echo"Lift Mechanic   $total18\n";echo "<br>";
    
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>
  

















 