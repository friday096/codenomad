<?php
// error_reporting(0);
if (isset($_POST['submit']))
 {

   $fname    = $_POST['fname'];
   $lname    = $_POST['lname'];

    if (empty($_POST['fname']))
     {
      $FnameErr = "* First Name is Required";
     } 
      else{
           echo "First Name = ".$fname."</br>";
            if (!preg_match("/^[a-zA-Z ]*$/",$fname))
             {  
                $FnameErr = "* Only alphabets allowed";  
              }  
          }
          if (empty($_POST['lname']))
           {
            $LnameErr = "* Last Name is Required";
           } 
           else
           {
              echo "Last Name = ".$lname."<br/>";
              if (!preg_match("/^[a-zA-Z ]*$/",$lname))
                {  
                  $LnameErr = "* Only alphabets allowed";  
                }  
            }
}

 ?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .error {
    color: red;
 }
  </style>
</head>
<body>
  <form method="post">
  <div class="container">
    <center> <h2> Registration Form </h2> </center>
    <div class="row">
      <div class="col-md-6">
        First Name: <input type="text" name="fname" class="form-control">
         <span class="error"> <?php echo if ($_POST)?> </span>  
      </div>
      <div class="col-md-6">
        Last Name: <input type="text" name="lname" class="form-control" >
        <span class="error"> <?php echo $LnameErr; ?> </span>
       </div>
    </div> <br>
<!--     <div class="row">
      <div class="col-md-6">
        Email: <input type="email" name="email" class="form-control">
      </div>
      <div class="col-md-6">
        Password: <input type="password" name="password" class="form-control" >
      </div>
    </div> <br>
    <div class="row">
      <div class="col-md-6">
        Phone Number: <input type="number" name="number" class="form-control">
      </div>
      <div class="col-md-6">
        Gender: <br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
      </div>
    </div> <br>
    <div class="row">
      <div class="col-md-6">
         Hobbies: <br>
         <input type="checkbox" name="checkbox[]" value="Cricket"> Cricket <br>
         <input type="checkbox" name="checkbox[]" value="Football"> Football <br>
         <input type="checkbox" name="checkbox[]" value="Dance"> Dance <br>
         <input type="checkbox" name="checkbox[]" value="Singing"> Singing 
       </div>
        <div class="col-md-6">
            Address: <br>
            <textarea name="address" rows="4" cols="75"> </textarea>
      </div>
    </div> <br> -->
    <center> <button type="submit" name="submit" class="btn btn-primary">Submit</button> </center>
  </div>
  </form>
</body>

</html>
