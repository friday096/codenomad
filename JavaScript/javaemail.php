<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript">
      function MyEmail(inputText)
      {
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(inputText.value.match(mailformat))
          {
            alert("Valid email address!");
            document.form.email.focus();
            return true;
          }
            else
              {
              alert("You have entered an invalid email address!");
              document.form.email.focus();
              return false;
              }
      }
    </script>
  </head>
  <body>
    <form name="form" method="post">
      Email: <input type='text' name='email'/>
      <input type="submit" name="submit" value="Submit" onclick="MyEmail(document.form.email)"/>

    </form>
  </body>
</html>
