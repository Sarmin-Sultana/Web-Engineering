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
        
        
 $sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address ,extra_edu_info , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,research_paper ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND school_info.id=extra_edu_info.id AND school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND school_info.id=research_paper.id AND school_info.id=ssc_info.id AND school_info.designation='Assistant Professor')";
        $data = mysqli_query($conn, $sql);  
        $total1 = mysqli_num_rows($data);
        
         $sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address ,extra_edu_info , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,research_paper ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND school_info.id=extra_edu_info.id AND school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND school_info.id=research_paper.id AND school_info.id=ssc_info.id AND school_info.designation='Lecturer')";
        $data = mysqli_query($conn, $sql);  
        $total2 = mysqli_num_rows($data);
        
        
         $sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address ,extra_edu_info , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,research_paper ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND school_info.id=extra_edu_info.id AND school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND school_info.id=research_paper.id AND school_info.id=ssc_info.id AND school_info.designation='Associate Professor')";
        $data = mysqli_query($conn, $sql);  
        $total3 = mysqli_num_rows($data);
        
        
          $sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address ,extra_edu_info , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,research_paper ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND school_info.id=extra_edu_info.id AND school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND school_info.id=research_paper.id AND school_info.id=ssc_info.id AND school_info.designation='Professor')";
        $data = mysqli_query($conn, $sql);  
        $total4= mysqli_num_rows($data);
        
        
        $sql = "SELECT * FROM school_info ,personal_info ,bank_info ,present_address ,extra_edu_info , honours_info ,hsc_info ,image_sign_date ,masters_info ,other_info ,parmanent_add ,ssc_info WHERE ( school_info.id = personal_info.id AND school_info.id= bank_info.id AND school_info.id= present_address.id AND school_info.id=extra_edu_info.id AND school_info.id=honours_info.id AND school_info.id=hsc_info.id AND school_info.id=image_sign_date.id AND school_info.id=masters_info.id AND school_info.id=other_info.id AND school_info.id=parmanent_add.id AND  school_info.id=ssc_info.id )";
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
          