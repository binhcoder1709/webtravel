<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/header.css">
    <link rel="icon" href="../sources/2.png">
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
          <a href="../controller/index.php?action=home" class="function-item">Home</a>
          <a href="#" class="function-item">Introduce</a>
          <a href="#" class="function-item">Destinations</a>
          <div class="function-dropdown">
            <a href="#" class="function-item">Tour</a>
            <div class="function-dropdown-content">
              <a href="#">Asia Travel</a>
              <a href="#">Europe Travel</a>
              <a href="#">Africa Travel</a>
              <a href="#">Food Travel</a>
            </div>
          </div>
          <a href="../controller/index.php?action=ourteam" class="function-item">Our Team</a>
          <div class="bar"></div>
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
<script src="../js/script.js"></script>
</html>