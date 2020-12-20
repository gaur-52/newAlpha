<?php
session_start();

$em=$_POST['e1'];
$p1=$_POST['p1'];

$con=mysqli_connect("localhost","root","","org");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from academics where email='$em' and password='$p1'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
if($r[0]==$p1)
{
	$_SESSION['na']=$r[0];
	$_SESSION['em']=$email;
header("location: tourister details.html");
}
else
echo "Email or password is incorrect";
}
?>