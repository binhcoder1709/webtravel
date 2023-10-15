<?php
$servername = "sql307.infinityfree.com";
$username = "if0_34547419";
$password = "xLLISAw2Zp2yM";
$dbname = "if0_34547419_travel";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['signup'])&&($_POST['signup']!=""))
{
  $user=$_POST['username'];
  $name=$_POST['fullname'];
  $pass=$_POST['password'];
  $email=$_POST['email'];
  if(($user!="")&&($pass!="")&&($email!="")&&($name!=""))
  {
    $sql = "INSERT INTO user (`username`, `password`, `email`, `fullname`)
    VALUES ('$user', '$pass', '$email', '$name')";
    // use exec() because no results are returned
    $conn->exec($sql);
  }
}
}catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
header("Location: ../controller/index.php?action=login");
?>