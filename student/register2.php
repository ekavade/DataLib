<?php
include('dbConfig.php');
session_start();
$fullname=$_GET['fullname'];
$phone=$_GET['phone'];
$dept=$_GET['dept'];
$email=$_GET['email'];
$passwd=$_GET['passwd'];

 mysql_connect($serverName, $userName, $password) or die(mysql_error());
	mysql_select_db($databaseName) or die(mysql_error());

    $result = mysql_query("SELECT * FROM student WHERE unumber = '$uno' AND rollno = '$rno' " );
    $row = mysql_fetch_assoc($result);

?>