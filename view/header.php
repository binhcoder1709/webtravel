<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layout/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header class="header">
      <div class="header-content">
        <div class="logo">
          <a href="../controller/index.php?action=home"><img src="../sources/2.png" alt=""></a>
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
          <?php
            if (isset($_SESSION['fullname'])&&($_SESSION['fullname']!=""))
            {
              // echo '<img src="../sources/280086317_718083016050425_3655407196902856455_n.jpg">';
              echo '    <div class="user-dropdown">
              <h2><img src="../sources/280086317_718083016050425_3655407196902856455_n.jpg"> Hi, '.$_SESSION['fullname'].'</h2>
              <div class="user-content">
                  <a href="../controller/index.php?action=profile" style="border-radius: 10px 10px 0px 0px;">My profile</a>
                  <a href="#">Cart</a>
                  <a href="../controller/index.php?action=logout" style="border-radius: 0px 0px 10px 10px;">Log out</a>
              </div>
          </div>';
            }
            else
            {
              echo '          <a href="../controller/index.php?action=login"><i class="fa-solid fa-lock"></i> Login</a>
              <a href="../controller/index.php?action=signup"><i class="fa-solid fa-registered"></i> Register</a>';
            }
          ?>
        </div>
      </div>
    </header>
</body>
<!-- <script src="../js/script.js"></script> -->
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
<!-- <script>
  document.getElementById("loginButton").addEventListener("click", function () {
  document.getElementById("loginPopup").style.display = "block";
});

// Khi nhấn vào nút đóng hoặc nền mờ, đóng pop-up
document.getElementById("closePopup").addEventListener("click", function () {
  document.getElementById("loginPopup").style.display = "none";
});

document.addEventListener("click", function (event) {
  if (event.target == document.getElementById("loginPopup")) {
    document.getElementById("loginPopup").style.display = "none";
  }
});
</script> -->
</html>