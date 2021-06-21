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
       
$sql = "SELECT s_school_info.id,s_school_info.circular_no,s_school_info.designation,s_personal_info.name_english, s_personal_info.birth_date,s_personal_info.present_age, s_parmanent_add.district, s_present_address.e_mail FROM s_school_info , s_personal_info ,s_parmanent_add , s_present_address WHERE( s_school_info.id = s_personal_info.id AND s_school_info.id= s_parmanent_add.id AND s_school_info.id= s_present_address.id)";
 
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
                                <td>".$result['circular_no']."</td>
                                <td>".$result['designation']."</td>
                                <td>".$result['name_english']."</td>
                                <td>".$result['birth_date']."</td>
                                <td>".$result['present_age']."</td>
                                <td>".$result['district']."</td>
                                <td>".$result['e_mail']."</td>
                                
                                </tr>";
                                
                                //<td><button ><a href = 'delete3.php?rn=$result[id]'> Delete</button></td>
                              // <td><button ><a href = 'editdesign3.php?rn=$result[id]'> Edit</button></td>
                                
                        
    }
    
    
    
}
else{
    echo"No records found";
}
           $conn->close();
    }
?>