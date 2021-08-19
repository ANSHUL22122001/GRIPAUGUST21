<?php
    include 'connection.php';

    $senderaccountnumber = $_POST['sender'];
    $recieveraccountnumber = $_POST['reciever'];
    $amount = $_POST['amount'];
    $date = date("Y/m/d");
    $time = date("H:i:s");

    
    $query = "select * from user where AccountNumber = '$senderaccountnumber'";
    $check = mysqli_query($con, $query);
    if($check){
        if (mysqli_num_rows($check)) {
            $row = mysqli_fetch_assoc($check);
            if($row['Balance'] >= $amount){
                $newbalanceofsender = $row['Balance'] - $amount;
                $sendername = $row['Name'];
                $query1 = "select * from user where AccountNumber = '$recieveraccountnumber'";
                $check1 = mysqli_query($con, $query1);
                if (mysqli_num_rows($check1)) {
                    $row1 = mysqli_fetch_assoc($check1);
                    $newbalanceofreciever = $row1['Balance'] + $amount;
                    $recievername = $row1['Name'];
                    // echo $row1['Balance'];
                    mysqli_query($con, "update user set Balance='$newbalanceofsender' WHERE AccountNumber = '$senderaccountnumber'");
                    mysqli_query($con, "update user set Balance=' $newbalanceofreciever' WHERE AccountNumber = '$recieveraccountnumber'");
                    mysqli_query($con, "insert into transaction_history(Sender_name, Sender_id, Reciever_name, Reciever_id, Amount, Date, Time) VALUES ('$sendername','$senderaccountnumber','$recievername','$recieveraccountnumber','$amount','$date','$time')");
                    echo "done";

                }
                else{
                    echo "error3";
                }
            }
            else{
                echo "error2";
            }
        }
        else{
            echo "error1";
        }
    }


    // echo $senderaccountnumber;
    // $query = 'select * from user where';
    // $check = mysqli_query($con, $query);

    // if($check){
    //     if (mysqli_num_rows($check)) {
    //         while($row = mysqli_fetch_assoc($check)){
    //         }
    // }
// }

?>