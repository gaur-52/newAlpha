<?php
$na1=$_POST['firstname'];
$na2=$_POST['lastname'];
$em=$_POST['email'];
$p=$_POST['password1'];
$g=$_POST['Radio'];
$con=mysqli_connect("localhost","root","","tour");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into register values('$na1','$na2','$em','$p','$g')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
header("location: login.html");
else
header("location: 500.html");
}


?>
