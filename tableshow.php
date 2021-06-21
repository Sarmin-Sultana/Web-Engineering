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
       
$sql = "SELECT school_info.id,school_info.school_name,school_info.circular_no,school_info.designation,personal_info.name_english, personal_info.birth_date,personal_info.present_age, parmanent_add.district, present_address.e_mail FROM school_info , personal_info ,parmanent_add , present_address WHERE( school_info.id = personal_info.id AND school_info.id= parmanent_add.id AND school_info.id= present_address.id)";
 
        $data = mysqli_query($conn, $sql);  

$total = mysqli_num_rows($data);

//echo "$total";
if($total!=0){
    $result = mysqli_fetch_assoc($data);
    while(($result = mysqli_fetch_assoc($data)))
    {
        echo"
                     <tr>
                                <td>".$result['id']."</td>
                                <td>".$result['school_name']."</td>
                                <td>".$result['circular_no']."</td>
                                <td>".$result['designation']."</td>
                                <td>".$result['name_english']."</td>
                                <td>".$result['birth_date']."</td>
                                <td>".$result['present_age']."</td>
                                <td>".$result['district']."</td>
                                <td>".$result['e_mail']."</td>
                                
                                </tr>"; 
                                
                               // <td><button  ><a href = 'delete.php? rn=$result[id]'> Delete</button></td>
                               //<td><button  ><a href = 'editdesign.php? rn=$result[id]'> Edit</button></td>
                                
                       
    }
    
    
    
}
else{
    echo"No records found";
}
           $conn->close();
    }
?>