<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirmation</title>
<style>
#body
{
background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/body.jpg);
background-size:cover;
max-width:1280px;
height:100vh;
}
</style>
</head>
<body id="body">
<?php
$server="localhost";
$user="root";
$pass="";
$database="record";

$con=mysql_connect($server,$user,$pass);
if(!$con)
{
echo "<h1>Server Not Connected</h1>";
}

$db=mysql_select_db($database,$con);
if(!$db)
{
echo "<h1>data base not connected</h1>";
}
?>
<h1 align="center">Message has been send successfully.</h1>
<?php
$name=$_POST["name"];
?>
<?php
$email=$_POST["e-mail"];
?>
<?php
$contact=$_POST["contact"];
?>
<?php
$gender=$_POST["gender"];
?>
<?php
$message=$_POST["message"];
?>
<?php
$sql="INSERT INTO data(name,email,contact,gender,message)VALUES ('$name','$name','$email','$gender','$message')";
mysql_query($sql);
?>

<body>
</body>
</html>