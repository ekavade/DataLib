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
                <a class="nav-link active" href="index.php">Home </a>
            </li>   
            <li class="nav-item">    
                <a class="nav-link" href="Student/Login.php">Student Login</a>  
            </li>  
            <li class="nav-item">    
                <a class="nav-link " href="Faculty/Login.php">Faculty Login</a>  
            </li>    
            <li class="nav-item">    
                <a class="nav-link " href="Admin/Login.php">Admin Login</a>  
            </li>
            
        </ul>
        </div>
        
        <!-- Dashboard-->
        <div class="container"> 
        <table class="table table-dark">
        
            <thead>
            <th> Dashboard</th>
            </thead>
            <tr> 
                 <td >Total Student : <br> <?php echo $result['count(id)'];?></td>

			     <td >Total Book : <br> <?php echo $result2['count(bookId)']; ?></td>

			     <td >Total Faculty : <br> <?php echo $result3['count(id)']?></td>
            
            </tr>
            <tr>
                 <td>Total Publishers: <br> <?php echo $result4; ?></td>

			     <td>Price of all books: <br> <?php echo $result5['sum(price)']; ?></td>

			     <td>Books in library: <br> <?php echo $result6['count(bookId)']; ?></td>
            </tr>
        </table>
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