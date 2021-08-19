<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link type="stylesheet" rel="stylesheet" href="assets/css/lightslider.css" />   
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,700&display=swap" rel="stylesheet">      
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400&display=swap" rel="stylesheet">
        
        <title>Banking System Customer Section</title>
        <style>
            *{
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }
            body{
                
                background-color: rgb(155, 155, 155);
            }
            a{
                text-decoration: none;
            }
            nav{
                width: 100%;
                box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
                background-color: black;
                color: white;
                z-index: 100;
            }
            .navigation{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0px 45px;
            }
            .navigation .logo{
                font-size: 2rem;
                color: white;
                font-family: 'Lobster', cursive;
            }
            .navigation .menu{
                display: flex;
                margin: 0px;
                padding: 0px;
            }
            .navigation .menu li{
                position: relative;
                padding: 20px;
                display: flex;
                align-items: center;
                cursor: pointer;
                text-transform: uppercase;
                font-weight: 500;
            }
            .navigation .menu .active{
                background-color: #0b9d8a;
            }
            .navigation .menu li a{
                color: white;
            }
            .navigation .right-menu a{
                margin: 0px 10px;
                font-size: 1.2rem;
                color: rgba(0,0,0,0.7);
            }
            .navigation .right-menu .unlog{
                color: white;
                margin: 0px 5px;
                padding: 5px 20px;
                padding-bottom: 8px;
                border: 1px solid white;
                border-radius: 5px;
                font-weight: 500;
            }
            .navigation .right-menu .unlog:hover{
                color: white;
                background-color: #0b9d8a;
                transition: all ease 0.3s;
            }
            .navigation .right-menu a:hover{
                color: #0b9d8a;
                transition: all ease 0.3s;
            }
            .navigation .menu li:hover a{
                transform: translateY(-10px);
                color: #0b9d8a;
                transition: all ease 0.3s;
            }
            
            .navigation .menu .active:hover > a{
                color: black;
                transform: translateY(-10px);
                transition: all ease 0.3s;
            }
            .navigation .right-menu a .fa-shopping-cart{
                position: relative;
            }
            .navigation .right-menu a .num-cart-product{
                position: absolute;
                top: -17px;
                right: -17px;
                width: 25px;
                height: 25px;
                background-color: #0b9d8a;
                font-size: 0.8rem;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-weight: 400;
            }
            .toggle{
                cursor: pointer;
                color: black;
                display: none;
            }
            .icon{
                display:none;
            }
            @media(max-width:1010px){
                .navigation{
                    padding: 0px 35px;
                }
                .navigation .logo{
                    font-size: 1.5rem;
                }
                .toggle{
                    display: block;
                    border: 2px solid white;
                    border-radius: 5px;
                    align-items: center;
                    text-align: center;
                    width: 35px;
                    height: 35px;
                    font-size: 1.2rem;
                    color: white;
                }
                .navigation{
                    position: relative;       
                    height: 9vh; 
                }
                .navigation .menu{
                    position: absolute;
                    top: 65px;
                    left: 0px;
                    background-color: black;
                    color: white;
                    border-bottom: 4px solid #0b9d8a;
                    width: 100%;
                    z-index: 102;
                    flex-direction: column;
                    display: none;
                }
                .navigation .icon li{
                    width: 100%; 
                    margin: 0px;
                    padding: 0px;
                }
                .navigation .icon li a{
                    width: 100%;
                    height: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 0.8rem;
                    margin: 0px;
                    padding: 25px;
                    border: 1px solid white; 
                    border-bottom: none; 
                }
                .navigation .menu li:hover a{
                    transform: translateY(0px);
                    color: #0b9d8a;
                    transition: all ease 0.3s;
                }
                .navigation .menu .active a:hover{
                    transform: translateY(0px);
                    transition: all ease 0.3s;
                    color: white;
                }
                .navigation .right-menu a{
                    margin: 0px 5px;
                    font-size: 1rem;
                }
                .navigation .right-menu a .num-cart-product{
                    top: -11.5px;
                    right: -11.5px;
                    width: 17px;
                    height: 17px;
                    font-size: 0.7rem;
                }
                .navigation .right-menu .unlog{
                    margin: 0px 0px;
                    border: 3px solid white;
                    font-weight: 500;
                }
                .navigation .right-menu .unlog:hover{
                    color: #0b9d8a;
                    border: 3px solid #0b9d8a;
                    background-color:white;
                    transition: all ease 0.3s;
                }
            }

            .search{
                width: 100%;
                padding: 20px 0px;
            } 
            .search .input-search-field{
                width: 60%;
                outline: none;
                padding: 20px 0px;
                padding-left: 5px;
                padding-bottom: 1px;
                background-color: rgb(155, 155, 155);;
                font-size: 1.2rem;
                color: white;
                border: none;
                border-bottom: 3px solid white;
            }  
            .search .input-search-field::placeholder { 
                color:rgb(109, 109, 109);
                font-size: 1.2rem;
            }
            .search button{
                width: 10%;
                outline: none;
                margin-left: 10px;
                background-color: rgb(155, 155, 155);
                font-size: 1.2rem;
                color: white;
                border-radius: 5px;
                border: none;
                border: 3px solid white;
            }
            .search button:hover{
                background-color:#0b9d8a;
            }
            table tr,td,th{
                text-align: center;
            }
            table button{
                outline: none;
                background-color: rgb(155, 155, 155);
                font-size: 1.2rem;
                color: white;
                padding: 2px;
                border-radius: 5px;
                font-weight: 500;
                color: black;
                border: none;
                border: 3px solid white;
            }
            table button:hover{
                background-color:#0b9d8a;
                color: white;
            }

            .buttons{
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 10px 20px;
            }
            .buttons .space{
                flex: 1;
            }
            .buttons .space button{
                width: 50%;
                outline: none;
                background-color: black;
                font-size: 1.4rem;
                color: white;
                padding: 10px;
                border-radius: 5px;
                font-weight: 500;
                border: none;
                border: 3px solid white;
            }
            .buttons .space button:hover{
                background-color:#0b9d8a;
                color: white;
            }
            .btn-send{
                width: 100%;
                outline: none;
                background-color:#0b9d8a;
                font-size: 1rem;
                color: white;
                padding: 10px;
                border-radius: 5px;
                margin: 30px 1px;
                margin-bottom: 10px;
                font-weight: 500;
                border: none;
                border: 3px solid white;
            }
            .btn-clos{
                width: 100%;
                outline: none;
                background-color: rgb(66, 66, 66);
                font-size: 1rem;
                color: white;
                padding: 10px;
                /* margin: 30px 1px;
                margin-top: 0px; */
                border-radius: 5px;
                font-weight: 500;
                /* color: black; */
                border: none;
                border: 3px solid white;

            }
            .modal-body label{
                color: white;
                font-size: 1rem;
                margin-top: 30px;
            }
            .modal-body input{
                width: 100%;
                /* padding: 10px; */
                /* margin-left: 20px; */
                font-size: 1.2rem;
                background-color: rgb(66, 66, 66);
                border: none;
                margin: 20px 1px;
                margin-bottom: 5px;
                color: white;
                border-bottom: 1px solid white;
                outline: none;
            }
            .modal-body input::-webkit-inner-spin-button{
                -webkit-appearance: none;
                margin: 0;
            }

        </style>
    </head>
    <body>
        <nav>
            <div class="navigation">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times icon"></i>
                </div>
                <a href="#" class="logo">Apna Bank</a>
                <ul class="menu icon">
                    <li class="active" onClick="{location.href='index.php'}"><a href="index.php">Customer Details</a></li>
                    <li onClick="{location.href='Transfer_History.php'}"><a href="Transfer_History.php">Transfer Money</a></li>
                    <li onClick="{location.href='Transaction_History.html'}"><a href="Transaction_History.html">Transaction History</a></li>
                </ul>
                <div class="right-menu">
                    <a href="#" class="unlog" onClick="{window.close()}">Exit</a>
                </div>
            </div>
        </nav>
        <br>
        <section class="buttons">
            <div class="space"><center><button  data-bs-toggle="modal" data-bs-target="#createaccount">Create</button></center></div>
            <div class="space"><center><button >Update</button></center></div>
            <div class="space"><center><button data-bs-toggle="modal" data-bs-target="#deleteaccount">Delete</button></center></div>
        </section>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="deleteaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: black; color:white;">
        <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: rgb(66, 66, 66); color:white;">
        <form id="deleteaccountform">
            <input type="number" placeholder="Account No." autocomplete="off" name="accountnumber" id="accountnumber">
            <p id="deleteerror" style="color:red"></p>
            <button onClick=deleterecord() class="btn-send">Delete</button>
            <button class="btn-clos" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<div class="modal fade" id="createaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: black; color:white;">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: rgb(66, 66, 66); color:white;">
        <form id="createaccountform">
            <input type="text" placeholder="Name." autocomplete="off" name="name" id="name">
            <p id="nameerror" style="color:red"></p>
            <input type="email" placeholder="Email" autocomplete="off" name="email" id="email">
            <p id="emailerror" style="color:red"></p>
            <button onClick=createrecord() class="btn-send">Create</button>
            <button class="btn-clos" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
        </div>
        <section class="search">
            <center>
                <form action="">
                    <input type="text" placeholder="Search..." autocomplete="off" class="input-search-field" name="search" id="search">
                    <!-- <button>Search</button> -->
                </form>
            </center>
        </section>
        <section>
            <table class="table container table-bordered" style="background-color:black;">
                <thead style="background-color: black; color:white;">
                  <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Account No.</th>
                    <th scope="col">Balance (Rs)</th>
                    <th scope="col"><center>Tranfer Money</center></th>
                  </tr>
                </thead>
                <tbody style="background-color: rgb(66, 66, 66); color:white;" id="here">
                <?php
                
                
                    include 'assets/php/connection.php';

                    
                    $query = 'select * from user order by Timestamp DESC';
                    $check = mysqli_query($con, $query);

                    
                    if($check){
                        if (mysqli_num_rows($check)) {
                            $score = 1;
                            while($row = mysqli_fetch_assoc($check)){
                                
                                $name = $row['Name'];
                                $email = $row['Email'];
                                $accountnumber = $row['AccountNumber'];
                                $balance = $row['Balance'];
?>
                                <tr>
                                    <td><?php echo $score; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['AccountNumber']; ?></td>
                                    <td><?php echo $row['Balance']; ?></td>
                                    <td><center><button onClick="{location.href='Transfer_History.php?senderid=<?php echo $row['AccountNumber']; ?>'}">Transfer</button></center></td>
                                </tr>
                                <?php
                                $score += 1;
                            }
                        }
                    }
                ?>
                </tbody>
            </table>
        </section>
        
    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\bootstrap.bundle.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\owl.carousel.min.js"></script> 
    <script src="assets\js\lightslider.js"></script>
    <script src="assets\js\slick.js"></script>
    <script type="text/javascript"> 

        const deleterecord=()=>{
            
            const formDetail = document.getElementById("deleteaccountform");
            formDetail.onsubmit=(e)=>{
                e.preventDefault();
            }
            
            // const formDetail = document.getElementById("deleteaccount");
            // console.log(formDetail);
            // alert(document.getElementById("accountnumber").value);

            let xhr = new XMLHttpRequest();
            xhr.open("POST","assets/php/delete.php",true);
            xhr.onload=()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        if(data == "success"){
                            location.href='index.php';
                        }
                        else{
                            document.getElementById("deleteerror").innerHTML="No Such user exist";
                        }
                    }
                }
            }
            let formData = new FormData(formDetail);
            xhr.send(formData);

        }
        const createrecord=()=>{
            document.getElementById("emailerror").innerHTML = "";
            document.getElementById("nameerror").innerHTML = "";

            const formDetail = document.getElementById("createaccountform");
            formDetail.onsubmit=(e)=>{
                e.preventDefault();
            }
            var atposition=document.getElementById("email").value.indexOf("@");  
            var dotposition=document.getElementById("email").value.lastIndexOf(".");  
            var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.value.length){  
                document.getElementById("emailerror").innerHTML = "Please enter a valid e-mail address";
            }
            else if(document.getElementById("name").value.length < 4 || document.getElementById("name").value.length > 15){
                document.getElementById("nameerror").innerHTML = "Name should be 3-15 character long";
            }
            else if(!isNaN(document.getElementById("name").value)){
                document.getElementById("nameerror").innerHTML = "No Numeric values should be there in Name";
            }
            else{

                let xhr = new XMLHttpRequest();
                xhr.open("POST","assets/php/create.php",true);
                xhr.onload=()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                        if(xhr.status === 200){
                            let data = xhr.response;
                            // alert(data);
                            if(data == "success"){
                                location.href='index.php';
                            }
                            else{
                                document.getElementById("emailerror").innerHTML="Email already in use try another one";
                            }
                        }
                    }
                }
                let formData = new FormData(formDetail);
                xhr.send(formData);
            }
            // const formDetail = document.getElementById("deleteaccount");
            // console.log(formDetail);
            // alert(document.getElementById("accountnumber").value);


        }


        const searchbar = document.getElementById('search');

        searchbar.onkeyup=()=>{
            let searchcontent = searchbar.value;
            // if(searchcontent === ""){
            //     location.href="index.php";
            // }
            // console.log(searchcontent);
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST","assets/php/search.php",true);
            xhr.onload=()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        // alert(data);
                        document.getElementById("here").innerHTML = data;
                    }
                }
            }
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send("searchterm="+searchcontent);
        }
        $(document).ready(function() {
           

            $(".toggle").click(function(){
            $(".fa-bars").toggleClass('icon');
            $(".fa-times").toggleClass('icon');
            if($('.menu:visible').length)
                $(".menu").css("display", "none")
            else
                $(".menu").css("display", "flex")
            });
        });
    </script>
    </body>
</html>