<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Car - Registration</title>
    <link rel="shortcut icon" type="x-icon" href="https://pic.onlinewebfonts.com/thumbnails/icons_348030.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles2.css">
    <script defer src="Script2.js"></script>
</head>
<body>
     
<div class="background1">   
    <div class="container">
        <div class="btn">
            <div class="button-box">
                <div id="btnbg"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
                
            </div>
            <form id="login" class="input-grouplogin" method="post">
            <input type="email" class="input-fieldlogin" id="email" name="email" placeholder="Enter Your email" required>
            <input type="password" class="input-fieldlogin" id="password" name="password" placeholder="Enter Password" required><br><br>
            <input type="checkbox" class="check-box"><span>Remember Password</span> 
            <button type="submit" class="submit-btnlog" name="login-btn" id="login-btn">Login</button>
        </form>
        <form  id="register-form" class="input-groupreg" action="" method="post" onsubmit="return validateForm();">                        
            <input class="input-field" id="username" name="username" type="text" placeholder="Enter Your Name" >
            <p id="nameError" class="error"></p>

        
            <input class="input-field" type="email" name="email" id="email" placeholder="Enter a valid Email">
            <p id="emailError" class="error"></p>
    

            <input class="input-field" id="age" name="age" type="number" min=18 max=100 placeholder="Enter Your Age"> 

        
            <input class="input-field" id="password" name="password" type="password" placeholder="Enter the Password" >
            <p id="passwordError" class="error"></p>


            <input class="input-field" id="password2" name="password2" type="password" placeholder="Re-Enter the Password" >
            <p id="confirmPasswordError" class="error"></p>
    
            <br>
            <input class="check" type="checkbox" value="check1" id="terms"> I agree to the terms and conditions.
            <p id="termsError" class="error"></p>
        
            <button class="submit-btn" type="submit" name="register" id="register" onclick="validateForm()">Register</button>
    </form>
        </div> 
    </div>
</div>
       <br>
    </div>
        <br>
        <footer class="copyright">
        <h2>&copy; Copyright 2024 | Group 03 - Assignment 02 | All Right Reserved</h2>
        </footer>

        <script>
                var x=document.getElementById("login");
                var y=document.getElementById("register-form");
                var z=document.getElementById("btnbg");


                function register(){
                    x.style.left="-400px";
                    y.style.left="50px";
                    z.style.left="115px";
                }

                function login(){
                    x.style.left="50px";
                    y.style.left="450px";
                    z.style.left="0";
                }

        </script>
</body>
</html>

<?php

include("database.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    $checkmail = "SELECT * FROM CarRental WHERE email='$email'";
    $result = $con -> query($checkmail);

    if($result->num_rows >0){
        echo "Email Already Exists!!!";
    }
    else{
        $insertQuery = "INSERT INTO CarRental(username,email,age,password) VALUES('$username','$email','$age','$password')";
        
        if($con->query($insertQuery)==TRUE){
            header("Location: Regform.php");
        }
        else{
            echo "Error:".$con -> error;
        }
    }
}

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM CarRental WHERE email='$email' and password='$password'";
    $result = $con->query($sql);

    if($result->num_rows>0){
        header("Location: home.php");
    }else{
        echo "Error:".$con -> error;
    }
}
?>