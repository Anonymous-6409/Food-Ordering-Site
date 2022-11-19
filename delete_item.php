<?php
	session_start();
	if(isset($_GET['item_id']))
	{
	$table_name=$_SESSION["name"];
	$a=$_GET['item_id'];
	$connect=mysqli_connect("localhost","root","","restaurant");
	$que="delete from $table_name where item_id='$a'";
	$del=mysqli_query($connect,$que);
	if($del)
	echo'<script> alert("Item deleted"); </script>';
	else
	echo'<script> alert("Item deletion failed"); </script>';
	header("location:foodcart.php");
	}
	
?>