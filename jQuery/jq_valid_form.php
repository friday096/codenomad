<!DOCTYPE html>
<html>
	<head>
		<style>
				form label {
			  display: inline-block;
			  width: 100px;
			  }
			  form div {
			    margin-bottom: 10px;
			  }
			  .error {
			  color: red;
			  margin-left: 5px;
			  }
			  label.error {
			  display: inline;
			}
		</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
						$("#name").keypress(function(){
							if ( name.length<3) {
								$('#name').val();
								$("#text").show();
								}
									});
									$("#name").keypress(function(){
										if (name.length>3) {
									    $('#name').val();
									    $("#text").hide();
									    }
												});

											$("#btn").click(function(){
												var name   = $("#name").val();
												if (name.length == 0) {
													$('#name').val();
													$("#error").show();
												}
												else {
														$("#name").keypress(function(){
															$("#error").hide();
															$("#text").show();
							                      })
						}
					});
				});
			</script>
	</head>
	<body>
		<form id="validate" method="post">
		  <div>
		    <label for="first_name"> Name:</label>
		    <input type="text" id="name" name="name"></input>
				<span class="error" id="error" style="display:none">This field is required</span>
				<span class="error" id="text" style="display:none">Name should be at least 3 characters</span>
		  </div>
		  <div>
				<button type="button" id="btn"> Submit </button>
		  </div>
   </form>
	</body>
</html>
