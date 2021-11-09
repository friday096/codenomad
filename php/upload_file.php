<?php
// $conn = mysqli_connect('localhost','root','','file_upload');		

if (isset($_POST['upload'])) {
	$fileTitle = $_POST['title'];
	//$fileName=$_FILES['file']['name']; // This is the name of the actual file.
	$fileSize = $_FILES['file']['size']; //This is the size of the file in bytes.
	$fileTemp = $_FILES['file']['tmp_name']; //This is the a temporary file that resides in the tmp directory of the server.
	$fileType = $_FILES['file']['type'];
	$fileName = basename($_FILES['file']['name']);
    $fileDir  = "uploads/".$fileName;
    $uploadOk = 1;//1 is not used yet (will be used later)


    if (move_uploaded_file($fileTemp, $fileDir)) {
    	
    	// $qry = "INSERT INTO myfile (title,file_name) VALUES ('$fileTitle','$fileDir')";
    	// mysqli_query($conn,$qry);
        
           if (file_exists($fileName)) {
            echo "Sorry, file already exists";
            $uploadOk = 0;
        }
   
        if ($_fileSize>1000000) {
            echo "Your File is too Large (1 MB)";
              $uploadOk = 0;
        }
        
        if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            
        }
    	
    }

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<label> Title </label>
   <input type="text" name="title">

    <label> File Upload </label>
	<input type="file" name="file" id="file">

	<button type="submit" name="upload"> Upload</button>
</form>
</body>
</html>