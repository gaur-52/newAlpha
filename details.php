<?php
$JA=$_POST['Radio1'];
$na=$_POST['name'];
$ad=$_POST['address'];
$em=$_POST['email'];
$num=$_POST['number'];
$dob=$_POST['date'];
$gen=$_POST['Radio2'];
$com=$_POST['CM'];
$file=$_POST['F1'];
$con=mysqli_connect("localhost","root","","tour");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into details values('$JA','$na','$ad','$em','$num','$dob','$gen','$com','$file')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
header("location: http://localhost/Josh/front%20End/index.php");
else
header("location: 500.html");
}
?>
