<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- Inert Ajax Query -->
  <script>
  	$(document).ready(function()
  	{
  		$("#submit").on('click',function(e)
  		{
  			e.preventDefault();
  			var value;
  			var fname    = $("#fname").val();
  			var lname    = $("#lname").val();
  			var email    = $("#email").val();
  			var password = $("#password").val();
  			var num      = $("#num").val();
  			var gender   = $("#gender").val();
  			var address  = $("#address").val();


  			if (fname!="" && lname!="" && email!="" && password!="" &&
  				num!="" && address!="" && gender!=""){
	  				$.ajax({
	  						type:'post',
	  						url:'save.php',
	  						data:{
		  							fname: fname,
		  							lname: lname,
		  							email: email,
		  							password: password,
		  							num: num,
		  							address: address,
		  							gender: gender
	  						    },   
	  						success: function(data, textStatus, XMLHttpRequest) {
                                     alert(data);
                                    }
	  				});
  			}
  			//Validation Query
  			              else{
          $('.err').each(function(index){
              value = $(this).val();
              if (value =='') {
                $(this).addClass('highlight');
                $(this).effect('shake',{times: 3},800);
              } else {
                $('#fname, #lname').keypress(function(){
                  if (value<=1) {
                $(this).removeClass('highlight');
                $(this).addClass('highlight2');
              } 
                });
                $('#email, #password').keypress(function(){
                  if (value<=1) {
                $(this).removeClass('highlight');
                $(this).addClass('highlight2');

              } 
                });
                $('#num, #gender').keypress(function(){
                  if (value<=1) {
                $(this).removeClass('highlight');
                $(this).addClass('highlight2');
              } 
                });
                $('#address').keypress(function(){
                  if (value<=1) {
                $(this).removeClass('highlight');
                $(this).addClass('highlight2');
              } 
                });
                
              }
            });
        }
  			return false;
  		});
  	});
  </script>

<!-- View Ajax Query -->
  <script>
  	$.ajax({
  		url:'view.php',
  		type:'post',
  		success: function(data){
  			// alert(data);
  			$('#table').html(data); 
  		}
  	});
  </script>
  <style>
 .btn{
 	margin-left: 230px;
    margin-top: 53px;
 }
 .highlight{
        box-shadow: 0 0 5px red;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid red;
      }
.highlight2{
        box-shadow: 0 0 5px green;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid green;
      }
  </style>
</head>
<body>
  <form method="post" id="myform">
  <div class="container">
    <center> <h2> Student Registration Form </h2> </center>
    <div class="row">
      <div class="col-md-6">
        First Name: <input type="text" id="fname" class="form-control err" name="fname" >

      </div>
      <div class="col-md-6">
        Last Name: <input type="text" id="lname" class="form-control err" name="lname" >
       </div>
    </div> <br>
    <div class="row">
      <div class="col-md-6">
        Email: <input type="email" name="email" id="email" class="form-control err">
      </div>
      <div class="col-md-6">
        Password: <input type="password" name="password" class="form-control err" id="password">
      </div>
    </div> <br>
    <div class="row">
      <div class="col-md-6">
        Phone Number: <input type="number" name="num" class="form-control err" id="num" value="">
              <!-- <span class="error" style="color: red; display: none">* Input digits (0 - 9)</span> -->

      </div>
      <div class="col-md-6">
        Gender: <br>
        <select class="form-control err" name="gender" id="gender">
        	<!-- when select val have then val work, but gender val empty, but effect is work
        	&& when select val empty val all work, but effect is not work -->
           <option  value="">Select</option>
		  <option  value="Male">Male</option>
		  <option  value="Female">Female</option>
		  <option  value="Other">Other</option>
		</select>
      </div>
    </div> <br>
    <div class="row">
        <div class="col-md-6">
            Address: <br>
            <textarea id="address" name="address" class="form-control err" rows="5" cols="20"></textarea>
      </div>
      <div class="col-md-6">
         <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
       </div>
    </div>
  </div>
  </form>
</body>
</html>
<div class="container">
	<center><h2> User Table</h2> </center>
	  <table class="table demo" style="width:100%"> 
		     	<tr class="table-dark text-dark">
			      <td>#ID</td>
				   <td> First Name</td>
					<td> Last Name</td>
						<td> Email</td>
							<td> Password</td>
								<td>Number</td>
									<td>Gender</td>
										<td>Address</td>
										    <td>Action</td>
				</tr>
					<tbody id="table">
      
                    </tbody>				
	  </table> 
</div>
<script type="text/javascript">
  $(document).ready(function(){
      $('#myform').submit
  });
</script>