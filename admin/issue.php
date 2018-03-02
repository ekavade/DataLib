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

        <!-- Dashboard-->

        <div class="jumbotron container "> 
            <p> Admin Homepage Section </p>
        </div>
        
        <div class="container bg-dark text-light">
          <h1>Welcome Admin</h1>
            
            <button type="button" class="btn btn-danger float-md-right">Logout</button>
            
          <div class="row">
            <div class="col-sm-2" style="background-color:yellow;">
              
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link " href="Home.php">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="addbook.php">Add/Edit Book</a>
                  </li>
                     <li class="nav-item">
                    <a class="nav-link active" href="Issue.php">Issue a Booked Book</a>
                  </li> 
                    <li class="nav-item">
                    <a class="nav-link" href="addstudent.php">Add/Edit Student</a>
                  </li> 
                    <li class="nav-item">
                    <a class="nav-link" href="addfaculty.php">Add/Edit Faculty</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="report.php">Show Monthly Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="editdetails.php">Edit Details</a>
                  </li>
                </ul>
                
            </div>
            <div class="col-sm-10" style="background-color:orange;">
              <p>Here is Dashboard.</p>
                
                <div class="title">View List of the Books Booked.</div>
                    <div class="container row">
                        <ul>
                            <li>
                        <hr>
                        List item 1, Student, bookname, date, click to scan and confirm booking.
                            </li>
                        <li>
                            <hr>
                        List item 2
                            </li>
                        <li>
                            <hr>
                        List item 3 
                        <hr>
                            </li>
                        </ul>
                    </div>
            </div>
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
