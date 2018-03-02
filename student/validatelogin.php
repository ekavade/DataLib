<?php
    session_start();
    // Grab User submitted information
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    // Connect to the database
    $serverName = "localhost";
	$userName = "root";
	$password = "";
	$databaseName = "libsystem";

	mysql_connect($serverName, $userName, $password) or die(mysql_error());
	mysql_select_db($databaseName) or die(mysql_error());

    $result = mysql_query("SELECT fullname, email, pwd FROM student WHERE email = '$email'");
    $row = mysql_fetch_assoc($result);

        if($row["email"]==$email && $row["pwd"]==$pass)
            {    echo"You are a validated user."; 
                 echo $email;
                 echo $pass;
             //store it in session
             $_SESSION["email"]=$row["email"];
             $_SESSION["name"]=$row["fullname"];
             header('location:home.php');
            }
        else
            { echo"Sorry, your credentials are not valid, Please try again."; 
                 echo $email;
                 echo $pass;
                echo "<p> TEsting <p>";
                echo $row["email"];
                echo $row["pass"];
            }
?>