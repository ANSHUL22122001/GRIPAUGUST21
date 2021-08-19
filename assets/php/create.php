<?php

    // echo "hello";
    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $randomNumber = rand(100000000,1000000000);

    $query = "select * from user where Email='$email' or AccountNumber='$randomNumber'";
    $check = mysqli_query($con,$query);

    if($check){
        if (!mysqli_num_rows($check)){
            $query1 = "insert into user(Name, Email, AccountNumber, Balance) VALUES ('$name','$email','$randomNumber','1000')";
            $check1 = mysqli_query($con,$query1);
            if($check1){
                echo "success";
            }
            else{
                echo "Try again";
            }
        }
        else{
            echo "error";
        }
    }
    
    // $query = "insert into user(Name, Email, AccountNumber, Balance, Timestamp) VALUES ('$name','$email','$randomNumber','1000')";
?>