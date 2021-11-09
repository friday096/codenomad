<?php
$conn = mysqli_connect('localhost','root','','project_1');

if (isset($_POST['register'])) {
    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

  $qry = "INSERT INTO register(fname,lname,email,password)VALUES('$fname','$lname','$email','$password')";
  $data = mysqli_query($conn, $qry);

  if ($data>0) {
    echo "<script> alert('Register Successfully')</script>";
    header('location:home.php');
  }
  else{
    echo "<script> alert('Error To Register')</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<title>Register Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
     </div>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register Account</h5>
            <form class="form-signin" action="" method="post" >
              <div class="form-label-group">
                <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name"required autofocus>
              </div> <br/>
              <div class="form-label-group">
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name"required autofocus>
              </div> <br/>
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
              </div> <br/>
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Register</button>
              <hr class="my-4">
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" style="background-color: #ff0000" type="submit" ><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" style="background-color: #1a53ff"type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
<!--               <hr class="my-4">
 -->             
               <button class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: #ff0000" type="submit" name="sub"><a href="login.php">Log In</a></button>
            </form>
            <a href=""></a>
          </div>
        </div>
      </div>
    </div>
</div>
  
</body>
</html>
