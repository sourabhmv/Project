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
            <style type="text/css">ul {
  list-style-type: none;
}

li {
  display: inline-block;
}

input[type="checkbox"][id^="myCheckbox"] {
  display: none;
}

label {
  border: 1px solid #fff;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
}

label:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {
  height: 100px;
  width: 100px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked + label {
  border-color: #ddd;
}

:checked + label:before {
  content: "✓";
  background-color: grey;
  transform: scale(1);
}

:checked + label img {
  transform: scale(0.9);
  /* box-shadow: 0 0 5px #333; */
  z-index: -1;
}ul {
  list-style-type: none;
}

li {
  display: inline-block;
}

input[type="checkbox"][id^="myCheckbox"] {
  display: none;
}

label {
  border: 1px solid #fff;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
}

label:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {
  height: 100px;
  width: 100px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked + label {
  border-color: #ddd;
}

:checked + label:before {
  content: "✓";
  background-color: grey;
  transform: scale(1);
}

:checked + label img {
  transform: scale(0.9);
  /* box-shadow: 0 0 5px #333; */
  z-index: -1;
}</style>
    </style>
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
               <div class="form-group">
                        <table width="500" align="center">
                          <tr><td><a href="actorsindex.php">Actors</a></td><td><a href="animalindex.php">Animals</a></td><td><a href="friendsindex.php">WWE</a></td><td><a href="sportsindex.php">Sports Person</a></td></tr>
                        </table>
                    </div>
               <div class="form-group">

<?php
                                                    include("dbconnect.php");
                                                    $sql="SELECT * FROM photo_tb where cat='Actors'";
                                                    $result=$conn->query($sql);

                                                        echo"<ul>";
                                                     while($row=$result->fetch_assoc())
                                                    {
                                                        $a= $row['id'];
  echo"<li>
    
    <label for='myCheckbox1.$a'><img src=".$row['image']." /> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$a</label>
  </li>";
 }
echo"</ul>";
?>
</div> 
     <form method="POST" id="signup-form" class="signup-form" action="logincode.php">

                    <h2>Login </h2>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Username"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password" ></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required="yes" />
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password" ></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Login"/>
                        <a href="signup.php" class="submit-link submit">Sign up</a>
                    </div>
                </form>
                <?php
if (isset($_SESSION['msg']))
{
    echo($_SESSION['msg']);
    unset($_SESSION['msg']);
}
?>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>