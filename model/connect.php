<?php
  function connectdb()
  {
    $servername = "localhost";
    $port = "85";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;por=$port;dbname=travel", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      // echo "Connection failed: " . $e->getMessage();
    }
    return $conn;

 }
?>