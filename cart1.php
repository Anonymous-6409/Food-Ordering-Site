<?php
	session_start();
	if($_SESSION["login"]=="1")
	{
	$a=$_POST['id'];
	$b=$_POST['item_name'];
	$c=$_POST['item_price'];
	$d=$_POST['item_quantity'];
	echo "$a $b $c $d";
	$food=array($a,$b,$c,$d);
	$_SESSION['data']=$food;
	print_r($_SESSION['data']);
	
      $connect=mysqli_connect("localhost","root","","restaurant");
	if($connect)
	{
	$e = "insert into food_data values ('$a','$b','$c','$d')";
	$con = mysqli_query($connect,$e);
	if($con)
	echo"update succesful";
	else
        echo"update failed";
	}
	else
        echo"database connection failed";
  }
	else
	{
	echo'<script>alert("please login first")</script>';
	}
?>