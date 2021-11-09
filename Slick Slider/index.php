<!DOCTYPE html>
<html>
<head>
  <title>Slick Slider</title>

  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <!-- // Add the new slick-theme.css if you want the default styling -->
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.thing').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplayspeed: 100
      });
    });
  </script>

</head>
<body>

  <div class="thing" id="wrapper">
  <div><img src="img/pic1.jpg" height="500" width="960"></div>
  <div><img src="img/pic2.png" height="500" width="960"></div>
  <div><img src="img/pic3.jpg" height="500" width="960"></div>


</div>
</body>
</html>
