<?php

$con = mysqli_connect("localhost","root","","Banking");
if($con){
    
    // <!-- <script>
    // alert('success');
    // </script> -->
    
    
}
else{
    ?>
    <script>
    alert('fail');
    </script>
    <?php
}

?>