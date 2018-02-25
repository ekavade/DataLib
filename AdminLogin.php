<?php
include("dbConfig.php");
//PHP code to output the Dashboard Values
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
	</head>
	<body background="lib.jpg">
        <!--Header -->
        <div class="container"> 
            <div class="jumbotron "> 
                <h1 class="display-2"> BOOK MY BOOKS </h1> 
                <p class="lead"> Text here</p>
            </div>
        </div>
        
        <!--navbar-->
        <div class="container"> 
        <ul class="nav nav-pills">  
            <li class="nav-item">    
                <a class="nav-link " href="index.php">Home </a>
            </li>   
            <li class="nav-item">    
                <a class="nav-link " href="StudentLogin.php">Student Login</a>  
            </li>  
            <li class="nav-item">    
                <a class="nav-link " href="FacultyLogin.php">Faculty Login</a> 
                </li>
                <li class="nav-item">    
                <a class="nav-link active" href="AdminLogin.php">Admin Login</a>  
            </li>
            
        </ul>
        </div>
        
        <!-- Dashboard-->
        <div class="title">Admin Login</div>
		<div class="container">
			<form class="loginForm">
				<div class="formInput">
					<input type="text" name="fullname" required autofocus placeholder="Full-Name" >
				</div>
				<div class="formInput">
					<input type="password" name="pwd" required autofocus placeholder="password" >
				</div>
					<input type="submit" name="studentLoginBtn" value="Log In" class="btnLogin">
					<br >
					<a class="forgetPwd" href="home.php?activity=forgetpwd&r=user">Forget Password?</a>
			</form>
        </div>
		
        <!-- Footer -->
        <div class="container jumbotron bg-primary">
            
			Shree Rayeshwar Institute of Engineering & IT library
		</div>

        <!--JS Code-->    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)  -->
        <script src="js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>