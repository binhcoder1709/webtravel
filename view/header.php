<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layout/header.css">
</head>
<body>
<header class="header">
      <div class="header-content">
        <div class="logo">
          <img src="../sources/2.png" alt="">
        </div>
        <div class="function">
          <a href="#">Home</a>
          <a href="#">About Us</a>
          <a href="#">Destinations</a>
          <a href="#">Tour</a>
          <a href="#">Blog</a>
          <a href="#">Contact Us</a>
          <a href="#">Our Team</a>
          <a href="#">FAQ</a>
        </div>
        <div class="lo-re">
          <button id=""><i class="fa-solid fa-lock"></i> Login</button>
          <!-- <a href=""><i class="fa-solid fa-registered"></i> Register</a> -->
        </div>
      </div>
    </header>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $(window).scroll(function() {
      if ($(window).scrollTop() > 100) {
        $('header').css('background-color', 'white');
        $('.function a').css('color', 'gray');
        $('.function a:hover').css('color', 'black');
        $('header').css('opacity', '1');
      } else {
        $('header').css('background-color', 'transparent');
        $('header').css('backdrop-filter', 'blur(20px)');
        $('header').css('opacity', '0.9');
        $('header').css('color', 'black');
        $('.function a').css('color', 'black');
      }
    });
  });
</script>
</html>