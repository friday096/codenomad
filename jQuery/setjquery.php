<!-- SET jQuery Example -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#button1").click(function(){
      $("#demo").text("Hello");
    });
    $("#button2").click(function(){
      $("#demo").html("<b> Hello jQuery </b>");
    });
        $("#button3").click(function(){
          $("#input").val(" Ohhh Yeahhh");
        });
  });
</script>
</head>
<body>
<p id="demo"> SET jQuery Example</p>
<input type="text" id="input" value="CRM">
<button id="button1"> Try </button>
<button id="button2"> Try HTML </button>
<button id="button3"> Try Value </button>
</body>
</html>
