<!DOCTYPE html>
<!-- // add active class to current element in jquery -->
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("ul li a").click(function(){
        $("li a ").removeClass("active");
          $(this).addClass("active");
      });
          // Text Change
           // $("a, .contact").each(function() {
          //   var text = $(this).text();
          //   text = text.replace("Contact", "marshmellows");
          //   $(this).text(text);

          // For All Anchor Change Link
          // $("a, .contact").attr("href", "https://www.google.com/");

          $(document).ready(function() {
           $('a, .contact').each(function(){
           this.href = this.href.replace('https://www.google.com/', 'https://www.codenomad.net/');
  });
});
});
  </script>
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
<ul>
  <li><a  class="menu active" href="#home">Home</a></li>
  <li><a  href="#news">News</a></li>
  <li><a  class="contact" target="_blank" href="https://www.google.com/">Contact</a></li>
  <li><a  href="#about">About</a></li>
</ul>

</body>
</html>
