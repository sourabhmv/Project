<?php
session_start();

if(isset($_SESSION['id']))
{
  header("location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
           
    </style>
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
               
     <form method="POST" id="signup-form" class="signup-form" action="logincode.php">

                    <h2>Enter  </h2>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Enter Phone Number"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password" ></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Login"/>
                        
                    </div>
                </form>
                
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>