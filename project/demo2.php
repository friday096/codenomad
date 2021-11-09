<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
  <style>
 #result {
    position: absolute;
    width: 50%;
    cursor: pointer;
    overflow-y: auto;
    max-height: 400px;
    box-sizing: border-box;
    z-index: 1001;
    left: 0;
    right: 0;
    margin: 0 auto;
    background: #2817d6;
    color: #fff;
}
  input#search {
    width: 50%;
    padding: 10px;
    border: 1px solid;
    border-radius: 8px;
}
.link-class:hover {
    background-color: #fff;
    color: #000;
    padding: 4px;
}
    ul#result li {
    list-style: none;
    padding: 3px 2px;
}
    h2.enterr {
    border-bottom: 2px solid #2817d6;
    width: max-content;
    margin: 0 auto;
    max-width: 100%;
}
    .error-msg{
    color: red;
  }
  </style>
 </head>
 <body>
  <br /><br />

   <h2 class="enterr" align="center">Enter Postcode or Suburb</h2>
   <br /><br />
   <div align="center">
    <input type="text" name="search" id="search" placeholder="Enter Postcode or Suburb" class="form-control" />
   </div>
   <ul class="list-group" id="result"></ul>
   <br />

<!--   <div id="selected_value_case" style="display: none;">
      <h1 id="delivering-to" class="title">
        Delivering to
      </h1>
      <div id="selected-value" class="selected-value"></div>
      <input id="change-postcode" class="change-postcode" type="button" value="Change Postcode">
      <h1 id="order-today" class="title">
        Order today for delivery on
      </h1>
      <h1 id="delivery-date" class="title title--green"></h1>
    </div> -->
   <div id="error_not_found" class="error-msg" style="display: none" align="center">Sorry, we couldn’t find anything that matched your search!</div>
 </body>
</html>

<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('{{ 'data.json' | asset_url }}', function(data) {
   $.each(data, function(key, value){
    if (value.zone.search(expression) != -1 || value.suburb.search(expression) != -1|| value.postcode.search(expression) != -1 || value.state.search(expression) != -1 || value.country.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class">'+value.zone+',  '+value.suburb+', '+value.postcode+', '+value.state+ ' | '+value.country+'</li>');
    }
//     else{
//       $(".error-msg").show();
//     }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split();
  $('#search').val($.trim(click_text[0]));
  //   $('#search').hide();
  // $('selected_value_case').show();
  $("#result").html('');
 });
});
</script>