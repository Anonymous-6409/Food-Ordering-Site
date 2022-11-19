<?php
session_start();
$user_name=$_SESSION["name"];
if($user_name=="")
{
echo"<script type='text/javascript'> alert('Please Sign In to submit your feedback');
window.location='index.php'; </script>";
}
else
{
$feedback=$_POST['feed'];
$con=mysqli_connect("localhost","root","","restaurant");
if($con)
{
$que="insert into feedback values ('$feedback','$user_name')";
$con1=mysqli_query($con,$que);
if($con1)
echo'<script type="text/javascript"> alert("Feedback submitted succesfully"); 
window.location="index.php"; </script>';
else
echo'<script type="text/javascript"> alert("Feedback submition failed"); 
window.location="index.php"; 
window.location="index.php"; </script>';
}
else
echo'<script type="text/javascript"> alert("Database connectivity errror"); </script>';
}
?>