<?php

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

$result = mysql_query("SELECT email, pwd FROM student WHERE email = $email");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["pwd"]==$pass)
{    echo"You are a validated user."; 
     echo $email;
     echo $pass;
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