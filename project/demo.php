<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  .error-msg{
    color: red;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Enter Suburb or Postcode</h2>
   <br /><br />
   <div align="center">
    <input type="text" name="search" id="search" placeholder="Enter Suburb or Postcode" class="form-control" />
   </div>
   <ul class="list-group" id="result"></ul>
   <br />
  </div>
  <div id="error_not_found" class="error-msg" style="display: none" align="center">Sorry, we couldn’t find anything that matched your search!</div>
 </body>
</html>

<script>
  //window.onload = function () {
   // document.getElementById('button').onclick = function () {
        //document.getElementById('modal').style.display = "none"
//};
//};
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
     if (value.suburb.search(expression) != -1|| value.postcode.search(expression) != -1 || value.state.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"> '+value.suburb+', '+value.postcode+', '+value.state+ '</li>');
    }
    else{
          $(".error-msg").show();

    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split();
  $('#search').val($.trim(click_text[0]));
  $(".error-msg").hide();
  $("#result").html('');
 });
});
</script>