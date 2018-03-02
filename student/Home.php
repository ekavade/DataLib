<?php
include("dbConfig.php");
session_start();
//PHP code to output the Dashboard Values
$email=$_SESSION["email"];
$name=$_SESSION["name"];
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
            <p> Student Homepage Section </p>
        </div>
        
        <div class="container bg-dark text-light">
          <h1>Welcome <?php echo $name; ?> </h1>
            <form action="logout.php" method="post"><button type="submit" class="btn btn-danger float-md-right" onclick="logout.php">Logout</button> </form>
          <div class="row">
            <div class="col-sm-2" style="background-color:yellow;">
              
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Issued/Booked Books</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Book a Book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Edit Details</a>
                  </li>
                </ul>
                
            </div>
            <div class="col-sm-10" style="background-color:orange;">
              <p>Here is Dashboard.</p>
                
                <div class="title">View Profile</div>
                    <div class="container row">
                        <div class="col-sm-3">
                            <img src="pic/<?php// print $result['pic']; ?>" alt="<?php //echo ucfirst($result['firstName'])." ".ucfirst($result['lastName'])." Image"; ?>">
                            <p>Here comes Image</p>
                        </div>
                        <div class="col-sm-9"> 
                        <div class="userName">
                            <?php //echo ucfirst($result['firstName'])." ".ucfirst($result['lastName']); ?>
                        </div>
                        <div class="info">
                            <hr>
                            <div class="label">Roll No</div>
                            <div class="details"><?php //echo $result['id']; ?></div>
                            <hr>
                            <div class="label">University No</div>
                            <div class="details"><?php //echo $result['id']; ?></div>
                            <hr>
                            <div class="label">Username</div>
                            <div class="details"><?php// echo ucfirst($result['username']); ?></div>
                            <hr>
                            <div class="label">Mobile</div>
                            <div class="details"><?php// echo $result['mobile']; ?></div>
                            <hr>
                            <div class="label">Email</div>
                            <div class="details"><?php// echo ucfirst($result['email']); ?></div>
                            <hr>
                            </div>
                        </div>
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
