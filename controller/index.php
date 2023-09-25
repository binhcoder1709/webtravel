<?php
session_start();
ob_start();
    include_once "../model/connect.php";
    include_once "../model/user-connect.php";
    include_once "../model/data-transfer.php";
    connectdb();
    include "../view/header.php";
    if(isset($_GET['action']))
    {
        switch($_GET['action'])
        {
            case 'login':
                include "../view/login.php";
                // header('location: ../view/login.php');
                break;
            case 'authentication':
                if(isset($_POST['signin'])&&($_POST['signin']))
                {
                  $user=$_POST['username'];
                  $pass=$_POST['password'];
                  $kq=getuserinfo($user,$pass);
                  $_SESSION['username']=$kq[0]['username'];
                  $_SESSION['password']=$kq[0]['password'];
                  $_SESSION['fullname']=$kq[0]['fullname'];
                  $_SESSION['email']=$kq[0]['email'];
                  $_SESSION['phone']=$kq[0]['phonenumber'];
                  if(($_SESSION['username'])&&($_SESSION['password']))
                  {
                    header('location: index.php');
                  }
                  else
                  {
                    header('location: ../controller/index.php?action=login');
                    // header('location: ../view/login.php');
                  }
                }
                break;
            case 'logout':
                if(isset($_SESSION['username'])&&($_SESSION['username']!=""))
                {
                    unset($_SESSION['username']);
                }
                if(isset($_SESSION['fullname'])&&($_SESSION['fullname']!=""))
                {
                    unset($_SESSION['fullname']);
                }
                if(isset($_SESSION['password'])&&($_SESSION['password']!=""))
                {
                    unset($_SESSION['password']);
                }
                header('location: index.php');
                break;
            case 'signup':
                include "../view/register.php";
                break;
            case 'home':
                include "../view/home.php";
                break;
            case 'profile':
                include "../view/profile.php";
                break;
            default:
                include "../view/home.php";
                break;
        }
    }
    else
    {
        include "../view/home.php";
    }
    include "../view/footer.php";
?>