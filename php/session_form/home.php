<?php
session_start();
if($_SESSION['email']==null or empty( $_SESSION['email']) or $_SESSION['email']=="")
{
    header("location:index.php");
}
else{
     $now = time();
 

    if($now > $_SESSION['expire'])

    {

        session_destroy();
        // echo "alert('Hello')";
        echo "<p align='center'>Khel Khtm Ho Gya, Chlo Ghr Jao! ! <a href='login.php'>Login Here</a></p>";

       // echo "alert('Khel Khtm Ho Gya, Chlo Ghr Jao!')";

        // echo "<p> Your session has expire </p>";

    }
    else

    {

?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Student</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
   
     </div>
</div>

<div class="content">
<!--    <center> <p> Welcome </p></center>
 --></div>
<?php
}
}
?>
</body>
</html>

