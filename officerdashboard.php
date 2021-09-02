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
    else
    {
        $sql = "SELECT * FROM o_school_info WHERE (o_school_info.designation='Chairman')";
        $data = mysqli_query($conn, $sql);  
        $total = mysqli_num_rows($data);
        
        
   $sql = "SELECT * FROM o_school_info  WHERE (o_school_info.designation='Vice Chairman')";
        $data = mysqli_query($conn, $sql);  
        $total1 = mysqli_num_rows($data);
        
           $sql ="SELECT * FROM o_school_info  WHERE (o_school_info.designation='Cheif Dirrector')";
        $data = mysqli_query($conn, $sql);  
        $total2 = mysqli_num_rows($data);
        
        
         $sql ="SELECT * FROM o_school_info  WHERE (o_school_info.designation='Deputy Manager')";
        $data = mysqli_query($conn, $sql);  
        $total3 = mysqli_num_rows($data);
        
        $sql = "SELECT * FROM o_school_info WHERE ( o_school_info.designation='Manager')";
        $data = mysqli_query($conn, $sql);  
        $total4 = mysqli_num_rows($data);
        
        $sql = "SELECT * FROM o_school_info WHERE (  o_school_info.designation='Dirrector')";
        $data = mysqli_query($conn, $sql);  
        $total5 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Assistant Manager ')";
        $data = mysqli_query($conn, $sql);  
        $total6 = mysqli_num_rows($data);
        
       $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Engineer')";
        $data = mysqli_query($conn, $sql);  
        $total7 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Sub-Assistant Engineer')";
        $data = mysqli_query($conn, $sql);  
        $total8 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Genaral Manager')";
        $data = mysqli_query($conn, $sql);  
        $total9 = mysqli_num_rows($data);
        
        
         $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Deputy Director')";
        $data = mysqli_query($conn, $sql);  
        $total10 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Co-ordinating Officer')";
        $data = mysqli_query($conn, $sql);  
        $total11 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE ( o_school_info.designation='Producer')";
        $data = mysqli_query($conn, $sql);  
        $total12 = mysqli_num_rows($data);
        
            $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Assistant Programmer')";
        $data = mysqli_query($conn, $sql);  
        $total13= mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Nurse ')";
        $data = mysqli_query($conn, $sql);  
        $total14 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Webmaster')";
        $data = mysqli_query($conn, $sql);  
        $total15= mysqli_num_rows($data);
        
       $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Hardware Maintenance Engineer')";
        $data = mysqli_query($conn, $sql);  
        $total16 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Administrative Officer')";
        $data = mysqli_query($conn, $sql);  
        $total17 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Technical Officer')";
        $data = mysqli_query($conn, $sql);  
        $total18 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Regional Director')";
        $data = mysqli_query($conn, $sql);  
        $total19 = mysqli_num_rows($data);
        
       $sql ="SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Cameraman ')";
        $data = mysqli_query($conn, $sql);  
        $total20 = mysqli_num_rows($data);
        
          $sql ="SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Assistant Hardware Maintenance Engineer')";
        $data = mysqli_query($conn, $sql);  
        $total21 = mysqli_num_rows($data);
        
        
          $sql ="SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Documentation Officer')";
        $data = mysqli_query($conn, $sql);  
        $total22 = mysqli_num_rows($data);
        
        
          $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Assistant Director')";
        $data = mysqli_query($conn, $sql);  
        $total23 = mysqli_num_rows($data);
        
        
          $sql = "SELECT * FROM o_school_info  WHERE (  o_school_info.designation='Programmer  ')";
        $data = mysqli_query($conn, $sql);  
        $total24 = mysqli_num_rows($data);  
        
        
        
        $sql = "SELECT designation FROM o_school_info "; 
        $data = mysqli_query($conn, $sql);  
        $totalrow = mysqli_num_rows($data); 
        
$result = mysqli_fetch_assoc($data);
//echo "$total";
if($totalrow!=0){
    
    echo"Applicants for\n";echo "<br>";
    echo"Chairman $total\n";echo "<br>";
    echo" Vice Chairman $total1\n";echo "<br>";
    echo"Cheif Director $total2\n";echo "<br>";
    echo" Deputy Manager $total3\n";echo "<br>";
    echo"Manager $total4\n";echo "<br>";
     echo" Director $total5\n";echo "<br>";
     echo" Assistant Manager $total6\n";echo "<br>";
     echo"Engineer $total7\n";echo "<br>";
     echo"  Sub-Assistant Engineer $total8\n";echo "<br>";
     echo" Genaral Manager $total9\n";echo "<br>";
     echo"Deputy Director  $total10\n";echo "<br>";
     echo"Co-ordinating Officer  $total11\n";echo "<br>";
     echo"Producer  $total12\n";echo "<br>";
     echo" Assistant Programmer $total13\n";echo "<br>";
     echo" Nurse  $total14\n";echo "<br>";
     echo"Webmaster  $total15\n";echo "<br>";
     echo"Hardware Maintenance Engineer  $total16\n";echo "<br>";
     echo"Administrative Officer  $total17\n";echo "<br>";
     echo" Technical Officer $total18\n";echo "<br>";
     echo" Regional Director $total19\n";echo "<br>";
     echo" Cameraman  $total20\n";echo "<br>";
     echo"Assistant Hardware Maintenance Engineer  $total21\n";echo "<br>";
     echo"Documentation Officer  $tota22\n";echo "<br>";
     echo"Assistant Director  $total23\n";echo "<br>";
     echo"Programmer   $total24\n";echo "<br>";
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>
    












