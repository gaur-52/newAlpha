<?php
$na=$_POST['name'];
$em=$_POST['email'];
$cn=$_POST['contact'];
$msg=$_POST['message'];
$con=mysqli_connect("localhost","root","","tour");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into contact values('$na','$em','$cn','$msg')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo '<script>alert("We will contact you later")</script>';
header("location: index.php");
}
?>

