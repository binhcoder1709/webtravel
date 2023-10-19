<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/header.css">
    <link rel="icon" href="../sources/2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
<header class="header">
        <div class="header-content">
            <div class="logo">
                <a href="../controller/index.php?action=home">
                    <img src="../sources/Tommytravel-removebg-preview.png" alt="">
                    <div class="logo-text">
                        <span style="--color: #ffffff; --delay:0s;">t</span>
                        <span style="--color: #ffffff; --delay:0.25s;">o</span>
                        <span style="--color: #ffffff; --delay:0.5s;">m</span>
                        <span style="--color: #ffffff; --delay:0.75s;">m</span>
                        <span style="--color: #ffffff; --delay:1s;">y</span>
                        <span style="--color: #ffffff; --delay:1.25s;">t</span>
                        <span style="--color: #ffffff; --delay:1.5s;">r</span>
                        <span style="--color: #ffffff; --delay:1.75s;">a</span>
                        <span style="--color: #ffffff; --delay:2s;">v</span>
                        <span style="--color: #ffffff; --delay:2.25s;">e</span>
                        <span style="--color: #ffffff; --delay:2.5s;">l</span>
                    </div>
                </a>
            </div>
            <div class="function-login">
                <div class="function">
                    <a href="../controller/index.php?action=home">Home</a>
                    <a href="../controller/index.php?action=introduce">Introduce</a>
                    <a href="../controller/index.php?action=describe">Describe</a>
                    <div class="function-dropdown">
                        <a href="#">Tour</a>
                        <div class="function-dropdown-cont">
                            <a href="../controller/index.php?action=dlnd" style="border-radius: 10px 10px 0px 0px;">Du lich nghi duong</a>
                            <a href="#">Du lich bieu tuong van hoa</a>
                            <a href="../controller/index.php?action=dlgt">Du lich giai tri</a>
                            <a href="#" style="border-radius: 0px 0px 10px 10px;">@@@</a>
                        </div>
                    </div>
                    <a href="../controller/index.php?action=ourteam">Ourteam</a>
                </div>
                <?php
                    if(isset($_SESSION['fullname'])&&($_SESSION['fullname']!=""))
                    {
                        echo'                <div class="login-drop">
                        <a href="#" style="width: 50px">'.$_SESSION['fullname'].' <i class="fa-solid fa-user-check"></i></a>
                        <div class="login-drop_cont">
                            <a href="#">My profile</a>
                            <a href="../controller/index.php?action=logout">Log out</a>
                        </div>
                    </div>';
                    }
                    else
                    {
                        echo'                <div class="login">
                        <a href="../controller/index.php?action=login">Login <i class="fa-solid fa-user-xmark"></i></a>
                    </div>';
                    }
                ?>
            </div>
        </div>
    </header>
</body>
<script src="../js/script.js"></script>
<script src="../js/drop.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>