<?php
                    include 'connection.php';
                    $output = "";
                    $query = 'select * from transaction_history order by Timestamp DESC';
                    $check = mysqli_query($con, $query);

                    if($check){
                        if (mysqli_num_rows($check)) {
                            $score = 1;
                            while($row = mysqli_fetch_assoc($check)){

                                $sendername = $row['Sender_name'];
                                $senderid = $row['Sender_id'];
                                $recievername = $row['Reciever_name'];
                                $recieverid = $row['Reciever_id'];
                                $Amount = $row['Amount'];
                                $Date = $row['Date'];

                                $output = $output .'<tr>
                                <td>'.$score.'</td>
                                <td>'.$sendername.'</td>
                                <td>'.$senderid.'</td>
                                <td>'.$recievername.'</td>
                                <td>'.$recieverid.'</td>
                                <td>'.$Amount.'</td>
                                <td>'.$Date.'</td>
                                </tr>';
                                
                                
                                
                                $score = $score + 1;
                            }
                        }
                
                    }
                    echo $output;
                ?>