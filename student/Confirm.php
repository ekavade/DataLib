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
                <a class="nav-link active" href="StudentLogin.php">Student Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="FacultyLogin.php">Faculty Login</a>
                  </li>
                <li class="nav-item">
                <a class="nav-link " href="AdminLogin.php">Admin Login</a>
            </li>

        </ul>
        </div>

        <!-- Dashboard-->

				<div class="row">
				<div class="container jumbotron col-xs-6 col-md-4 ">
                    <p> Check if the Uno and Roll No are correct </p>
                    
                    <div class="container">
                        <div class="row">
                        <div class="page-header">
                        <h1>Confirm University and Roll No. </h1>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="#">

                        <div class="form-group">
                        <label class=" control-label">University No:</label>
                        
                        <input type="text" name="Uno" class="form-control" id="Uno" placeholder="University No.">
                       
                        </div>

                        <div class="form-group">
                        <label class=" control-label">Roll No:</label>
                        <input type="text" name="Rno" class="form-control" id="Rno" placeholder="Roll No.">
                        </div>
                        
                        <div class="form-group">
                        <div class="">
                        <button type="submit" class="btn btn-primary" id="register">Confirm</button>
                        </div>
                        </div>

                        </form>

                        </div><!-- end for class "row" -->
                        </div><!-- end for class "container" -->
			     </div>
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
