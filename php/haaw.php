<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head >
<body>
<div class="container">
  <form>
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" class="form-control" value="" required="">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" name="email" class="form-control" value="" required="">
    </div>
    <button type="submit" class="btn btn-success btn-save">Save</button>
  </form><br>
  <table class="table table-bordered data-table">
    <thead>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </thead>
    <tbody>
      
    </tbody>
  </table>

</div>
   <script type="text/javascript">
    $("form").submit(function(e) {
      e.preventDefault();
      var name=$("input[name='name']").val();
      var email=$("input[name='email']").val();

       $(".data-table tbody").append("<tr data-name='"+name+"' data-email='"+email+"'><td>"+name+"</td><td>"+email+"</td><td><button class='btn btn-danger btn-lg btn-delete mr-3' type='button'>Delete</button><button class='btn btn-info btn-lg btn-edit' type='button'>Edit</button></td></tr>");

       $("input[name='']").val("");
    });

    $('body').on('click','.btn-delete',function() {
      $(this).parents('tr').remove();
    });

    $('body').on('click','.btn-edit',function() {
      var name=$(this).parents('tr').attr('data-name');
      var email=$(this).parents('tr').attr('data-email');

      $(this).parents('tr').find('td:eq(0)').html("<input name='edit_text' value='"+name+"'>");
      $(this).parents('tr').find('td:eq(1)').html("<input name='edit_email' value='"+email+"'>");

      $(this).parents('tr').find('td:eq(2)').prepend("<button type='button' class='btn btn-info btn-lg btn-update mr-3'>Update</button>");
      $(this).hide()
    });

    $('body').on('click','.btn-update',function() {
      var name=$(this).parents('tr').find("input[name='edit_text']").val();
      var email=$(this).parents('tr').find("input[name='edit_email']").val();

      $(this).parents('tr').find('td:eq(0)').text(name);
      $(this).parents('tr').find('td:eq(1)').text(email);

      $(this).parents('tr').attr('data-name',name);
      $(this).parents('tr').attr('data-email',email);

      $(this).parents('tr').find('.btn-edit').show();
      $(this).parents('tr').find('.btn-update').remove();


    });

   </script>
</body>
</html>
