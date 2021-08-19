<?php

    $search = $_POST['searchterm'];

    include 'connection.php';
    $query = "select * from user where Name LIKE '%{$search}%' or AccountNumber LIKE '%{$search}%'";
    $output="";
    $check = mysqli_query($con, $query);
    // echo mysqli_num_rows($check);
    if($check){
        if (mysqli_num_rows($check)) {
            $score = 1;
            while($row = mysqli_fetch_assoc($check)){
                $name = $row['Name'];
                $email = $row['Email'];
                $account = $row['AccountNumber'];
                $balance = $row['Balance'];

                $output = $output .'<tr>
                <td>'.$score.'</td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$account.'</td>
                <td>'.$balance.'</td>
                <td><center><button>Transfer</button></center></td>
                </tr>';
                
                
                
                $score = $score + 1;
            }
        }
    }
    echo $output;


?>