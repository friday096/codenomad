 <?php
            include "connection.php";
            $viewqry = "SELECT * FROM register";
            $viewresult = mysqli_query($conn, $viewqry);
            $i = 1;
            while ($row=mysqli_fetch_assoc($viewresult)) {
               ?>
            <tr class="table-primary rowt">
              
               <td><?php echo $row['id'];?></td>
               <td><?php echo $row['fname'];?></td>
               <td><?php echo $row['lname'];?></td>
               <td><?php echo $row['email'];?></td>
               <td><?php echo $row['password'];?></td>
               <td><?php echo $row['num'];?></td>
               <td><?php echo $row['gender'];?></td>
               <td><?php echo $row['address'];?></td>
               <td>
                <button id="edit" type='button' class=''>Edit</button>
                <button id="del" type='button' class=''>Delete</button>
               </td>
            </tr>
             <?php
            }
 ?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<script type="text/javascript">
  $(document).ready(function(){
        $('body').on("click",'#edit',function(){
          var id       = $(this).parents('tr').find("td:eq(0)").text();
          var fname    = $(this).parents('tr').find("td:eq(1)").text();
          var lname    = $(this).parents('tr').find("td:eq(2)").text();
          var email    = $(this).parents('tr').find("td:eq(3)").text();
          var password = $(this).parents('tr').find("td:eq(4)").text();
          var number   = $(this).parents('tr').find("td:eq(5)").text();
          var gender   = $(this).parents('tr').find("td:eq(6)").text();
          var address  = $(this).parents('tr').find("td:eq(7)").text();

            // $(this).parents('tr').find('td:eq(0)').html("<input name='id'       value='"+id+"'>");
            $(this).parents('tr').find('td:eq(1)').html("<input name='fname'    value='"+fname+"'>");
            $(this).parents('tr').find('td:eq(2)').html("<input name='lname'    value='"+lname+"'>");
            $(this).parents('tr').find('td:eq(3)').html("<input id='email_row' name='email' value='"+email+"'>");
            // Only Email Validation i jQuery;
            $('#email_row').on('keyup', function() {
                var valid = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(this.value);
                if (!valid) {
                    $(this).css('color', 'red');
                } else {
                    $(this).css('color', '#1a3102');
                }
            });

            $(this).parents('tr').find('td:eq(4)').html("<input name='password' value='"+password+"'>");
            $(this).parents('tr').find('td:eq(5)').html("<input id='num_row' name='number' value='"+number+"'>");
            // Only Number Validation in jQuery;
             $("#num_row").bind("keypress", function (event) {
                      var keyCode = event.which ? event.which : event.keyCode;
                      if (!(keyCode >= 48 && keyCode <= 57)) {
                        event.preventDefault();
                      }
                  });

            // $('#num_row').on('keypress', function(event){
              
            //     if ((event.which < 48 || event.which > 57)) {
            //         event.preventDefault();
            //     }
            // });

            $(this).parents('tr').find('td:eq(6)').html("<select name='gender'  value='"+gender+"'>  <option  name='gender' >Select</option> <option  name='gender' value='Male'>Male</option> <option  value='Female' name='gender'>Female</option> </select>");
            // $(this).parents('tr').find('td:eq(6)').html("<input name='gender'   value='"+gender+"'>");
            $(this).parents('tr').find('td:eq(7)').html("<input name='address'  value='"+address+"'>");
            $(this).parents('tr').find('td:eq(8)').prepend("<button id='update' type='button' class=''>Update</button>");
            $(this).hide();

        });

        $('body').on('click','#update', function(){

          var id       = $(this).parents('tr').find("input[name='id']").val();
          var fname    = $(this).parents('tr').find("input[name='fname']").val();
          var lname    = $(this).parents('tr').find("input[name='lname']").val();
          var email    = $(this).parents('tr').find("input[name='email']").val();
          // if(email==""){
          // alert('Plese Fill Email');
          //       return false;
          //   }else {
          //     var regEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          //     var validEmail = regEx.test(email);
          //     if (!validEmail) {
          //        alert('Enter a valid email');
          //        return false;
          //     }
          //   }
           var password = $(this).parents('tr').find("input[name='password']").val();
           var number   = $(this).parents('tr').find("input[name='number']").val();
          if (number == "")
                 {
                  alert("Please Fill Number");
                  return false;
                 }
                 else{
                  if(number.length !=10)
                   {
                    alert("Should Be  10 digit number");
                    return false;
                   }
                 }
          var gender   = $(this).parents('tr').find("select[name='gender']").val();
          var address  = $(this).parents('tr').find("input[name='address']").val();

          $(this).parents('tr').find("td:eq(0)").text(id);
          $(this).parents('tr').find("td:eq(1)").text(fname);
          $(this).parents('tr').find("td:eq(2)").text(lname);
          $(this).parents('tr').find("td:eq(3)").text(email);
          $(this).parents('tr').find("td:eq(4)").text(password);
          $(this).parents('tr').find("td:eq(5)").text(number);
          $(this).parents('tr').find("td:eq(6)").text(gender);
          $(this).parents('tr').find("td:eq(7)").text(address);

          $(this).parents('tr').find('#edit').show();
          $(this).parents('tr').find('#update').remove();
        });

           $("body").on("click", "#del", function () {
            $(this).parents('tr').remove();

           $('#table').find('tr').each(function (index) {
            var first = $(this).find('td')[0];
            var $firstObj = $(first);
                $firstObj.text(index + 1);
        });
    });
     });
</script>
</body>
</html>