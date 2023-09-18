<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['dangky'])&&($_POST['dangky']!=""))
{
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $email=$_POST['email'];
  if(($user!="")&&($pass!="")&&($email!=""))
  {
    $sql = "INSERT INTO user ('username', 'password', 'email')
    VALUES ('$user', '$pass', '$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
  }
}
}catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>