<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<style>
  h2.center.heading {
    text-align: center;
    width: max-content;
    margin: 0 auto;
    max-width: 100%;
    border-bottom: 2px solid #2817d6;
    padding-bottom: 3px;
        margin-top: 40px;
        text-transform: capitalize;
}
  .cstmdiv .cstm {
    width: 100%;
    float: left;
        padding: 10px 10px;
	    border-bottom: 1px solid #efefef29;
}
  .row.cstmdiv {
    float: left;
    width: 100%;
}
.cstmdiv .cstm h5 {
    margin: 0;
    font-size: 15px;
}
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
    .not_deliver_msg{
      margin-top: 25px;
    color: red;
      font-weight: bold;
}
  
  div#deliver_show {
    margin-top: 25px;
    color: green;
    font-weight: bold;
}
  h2.center.headingg{
    text-align: center;
    width: max-content;
    margin: 0 auto;
    max-width: 100%;
    border-bottom: 2px solid #2817d6;
    padding-bottom: 3px;
    text-transform: capitalize;
}
  #result_show{
     text-align: center;
    color:#2817d6;
        font-size: 1.82813rem;
    text-transform: capitalize;
  }
  
  #change_postode{
 margin-left: 600px;
  }

</style>
</head>
<body>
<div class="container">
	<h2 class="center heading">Find out if we deliver to your area</h2><br>
  <h2 class="center headingg">Enter Suburb or Postcode</h2>
  
	 <br/><br />
        <div align="center">
          <input type="text" name="search" id="search" placeholder="Enter Suburb or Postcode" class="form-control" />
       </div>
</div>
<div id="result"></div>
  <div id="result_show"> </div>

  
<div id="error_not_found" class="not_deliver_msg" style="display: none" align="center">Sorry! We Do Not Deliver To Your Area
</div>
<div id="deliver_show" class="yes_deliver_msg" style="display: none" align="center" color="green"> Yes We Do Deliver To Your Area </div>
    <br/>
<button id="change_postode" style="display: none"> Change Postcode </button> 
  </body>
</html>
<script type="text/javascript">
	$('#search').keyup(function(){
            var searchField = $(this).val();
            var search_len = searchField.length;
			if(searchField === ''){
				$('#result').html('');
				$('.not_deliver_msg').hide();
				$('.yes_deliver_msg').hide();
				return;
			}
			var search_key = '';
            $.getJSON('data.json', function(data) {
            	//console.log(data);
				 if (isNaN(searchField)) {
			           search_key = "suburb";
			      } else {
			      	 search_key = "postcode";	
			      }			
				var output = '<div class="row cstmdiv">';
             			 var count = 1;
             for(var i =0; i<data.length; i++){

             		var result = data[i][search_key];
             		var find = result.substring(0, search_len);
             		if(searchField.toLowerCase() == find.toLowerCase()){
             			output += '<div class="col-md-6 cstm">';
						  output += '<h5>' + data[i].suburb + ', '+ data[i].postcode + ', '+ data[i].state +'</h5>';
						  output += '</div>';
						  if(count%2 == 0){
							output += '<div class="row">'
				  }
                      $('.yes_deliver_msg').show();
				  count++;

             		}
             		else{
             			if(searchField.toLowerCase() !== find.toLowerCase()){
             			$('.not_deliver_msg').show();
                        $('.yes_deliver_msg').hide();
             		}
             		}

             	}

             	output += '</div>';
             	$('#result').html(output);
			  $('#result').on('click', 'h5', function() {
          			$('#search').hide();   
			  		 var click_text = $(this).text().split();
					  $('#result_show').text($.trim(click_text[0]));
					  $('#change_postode').show();
					  $('.not_deliver_msg').hide();
					  $('.yes_deliver_msg').show();
					  $("#result").html('');
                
			  	 });
       $('#change_postode').on('click', function() {
          			$('#search').show();
				$('input[type="text"]').val('');
					 $('#result_show').text('');
                    $('#change_postode').hide();
         $('.not_deliver_msg').hide();
				$('.yes_deliver_msg').hide();
			  	 });

			  });

			  
        });
  
</script>