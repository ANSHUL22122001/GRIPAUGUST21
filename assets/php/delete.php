<?php

    include 'connection.php';
    $accountnumber = $_POST['accountnumber'];
    // echo $accountnumber;
    $query = "delete from user where AccountNumber = '$accountnumber'";
    $check = mysqli_query($con, $query);

    
        echo "success";
    


    // echo "hello";


?>