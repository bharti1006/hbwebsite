<?php  
require('../include/db_config.php');
require('../include/essentials.php');
adminLogin();


if(isset($_POST['get_users']))
{
    // Assuming 'select' is a function that executes the query and returns the result
    $sql = "SELECT * FROM user_cred";
    $res = select($sql); // Using prepared statements is recommended

    $i = 1; // Start from 1
    $count=0;
    $data = "";
    while($row = mysqli_fetch_assoc($res)){
        // Escape HTML entities
        $name = htmlspecialchars($row['name']);
        $email = htmlspecialchars($row['email']);
        $phonenum = htmlspecialchars($row['phonenum']);
        $address = htmlspecialchars($row['address']);
        $pincode = htmlspecialchars($row['pincode']);
        $dob = htmlspecialchars($row['dob']);
        $datentime = htmlspecialchars($row['datentime']);

        $data .= "
            <tr>
                <td>$i</td>
                <td>$name</td>
                <td>$email</td>
                <td>$phonenum</td>
                <td>$address | $pincode</td>
                <td>$dob</td>
                <td><button type='button' class='btn btn-dark btn-sm'>Active</button></td> 
                <td>$datentime</td>
                <td><button type='button' class='btn btn-danger shadow btn-sm''>action</button></td> 
            </tr>      
        ";   
        $i++;
        $count++;
    }
    echo $data;
    echo "<p>Total users are " . $count . "</p>";
}
?>