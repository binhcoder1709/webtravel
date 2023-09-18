<?php
include_once "connect.php";
    function getuserinfo($user,$pass)
    {
        $conn=connectdb();
        $stmt=$conn->prepare("SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'");
        $stmt->execute();
        $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>