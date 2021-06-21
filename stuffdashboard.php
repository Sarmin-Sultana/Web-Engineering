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
        $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Accountant')";
        $data = mysqli_query($conn, $sql);  
        $total = mysqli_num_rows($data);
        
        
 //  $sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND  school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND  school_info.id=ssc_info.id AND school_info.designation='')";
       // $data = mysqli_query($conn, $sql);  
       // $total1 = mysqli_num_rows($data);
        
           $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Driver')";
        $data = mysqli_query($conn, $sql);  
        $total2 = mysqli_num_rows($data);
        
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Security Guard')";
        $data = mysqli_query($conn, $sql);  
        $total3 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Cleaner')";
        $data = mysqli_query($conn, $sql);  
        $total4 = mysqli_num_rows($data);
        
        $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Library Assistant')";
        $data = mysqli_query($conn, $sql);  
        $total5 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='WPO ')";
        $data = mysqli_query($conn, $sql);  
        $total6 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='UDA')";
        $data = mysqli_query($conn, $sql);  
        $total7 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='LDA')";
        $data = mysqli_query($conn, $sql);  
        $total8 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Night Guard')";
        $data = mysqli_query($conn, $sql);  
        $total9 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Office Assistant')";
        $data = mysqli_query($conn, $sql);  
        $total10 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Classifier')";
        $data = mysqli_query($conn, $sql);  
        $total11 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Office Assistsnt cum Computer Typist')";
        $data = mysqli_query($conn, $sql);  
        $total12 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Helper for Carpenter')";
        $data = mysqli_query($conn, $sql);  
        $total13= mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Computer Operater')";
        $data = mysqli_query($conn, $sql);  
        $total14 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Automobile Mechanic')";
        $data = mysqli_query($conn, $sql);  
        $total15= mysqli_num_rows($data);
        
         $sql = "SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Moazzin ')";
        $data = mysqli_query($conn, $sql);  
        $total16 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Cashier ')";
        $data = mysqli_query($conn, $sql);  
        $total17 = mysqli_num_rows($data);
        
         $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id AND s_school_info.designation='Lift Mechanic ')";
        $data = mysqli_query($conn, $sql);  
        $total18 = mysqli_num_rows($data);
        
        
        
        $sql ="SELECT * FROM s_school_info ,s_personal_info ,s_bank_info ,s_present_address , s_honours_info ,s_hsc_info ,s_image_sign_date ,s_masters_info ,s_other_info ,s_parmanent_add ,s_ssc_info WHERE ( s_school_info.id = s_personal_info.id AND s_school_info.id= s_bank_info.id AND s_school_info.id= s_present_address.id AND  s_school_info.id=s_honours_info.id AND s_school_info.id=s_hsc_info.id AND s_school_info.id=s_image_sign_date.id AND s_school_info.id=s_masters_info.id AND s_school_info.id=s_other_info.id AND s_school_info.id=s_parmanent_add.id AND  s_school_info.id=s_ssc_info.id )";
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
     echo"  $total19\n";echo "<br>";
     echo"  $total20\n";echo "<br>";
}
else{
    echo"No records found";
}
           $conn->close();
    }

?>
  

















 