<!DOCTYPE html>
<html>
<head>
  <title></title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<div class="container" style="padding:50px 250px;">
        <div class="form-group">
         <input type="text" name="search" id="search" placeholder="Enter Postcode or Suburb"/>
        </div>
        <ul class="list-group" id="result"></ul>
   </div>
</body>
</html>
<script type="text/javascript">
  $('#search').keyup(function(){
            var searchField = $(this).val();
      if(searchField === '')  {
        $('#result').html('');
        return;
      }
            var regex = new RegExp(searchField, "i");
            var output = '<div class="row">';
            var count = 1;
        $.getJSON('data.json' , function(data) {
   $.each(data, function(key, value){
    if (value.suburb.search(regex) != -1|| value.postcode.search(regex) != -1)
    {
     $('#result').append('<li class="list-group-item link-class">'+value.suburb+', '+value.postcode+', '+value.state+'</li>');
     if(count%2 == 0){
          output += '</div><div class="row">'
          }
          count++;
    }
    else{
      $(".error-msg").show();
    }
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