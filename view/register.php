<!DOCTYPE html>
<html>
<head>
	<title>Signup Form - Tommytravel</title>
	<link rel="stylesheet" type="text/css" href="../layout/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../sources/wave.png">
	<div class="container">
		<div class="img">
			<img src="../sources/bg.svg">
		</div>
		<div class="login-content">
			<form action="../model/insert-user.php" method="post">
				<img src="../sources/avatar.svg">
				<h2 class="title">Register</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
				   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Fullname</h5>
           		   		<input type="text" name="fullname" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
                <div class="input-div pass">
           		   <div class="i"> 
                    <i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Email</h5>
           		    	<input type="email" name="email" class="input">
            	   </div>
            	</div>
            	<a href="../controller/index.php?action=login">You have account</a>
            	<input type="submit" class="btn" name="signup" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>