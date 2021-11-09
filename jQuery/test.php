<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
      .style{
        background-color: blue;
        border: 2px solid;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          $("body").on("click","#btn",function(){
            $("ul").parent().addClass("style");
            // $("h1").parents().addClass("style");
          })

        });
  </script>
  </head>
  <body>
    <div class="container">
      <h1> Hello jQuery </h1>
      <p> What is This Yaar </p>
      <ul>
        <li> Hello </li>
        <li> Hey </li>
      </ul>
    </div>
    <button id="btn"> Click Me </button>
  </body>
</html>
