<?php
$con=mysqli_connect("localhost","root","");
$query="create database restaurant";
$db=mysqli_query($con,$query);
if($db)
echo"database creation successful<br>";
else
echo"database creation failed<br>";

$connect=mysqli_connect("localhost","root","","restaurant");
$query1="create table food_data (item_id varchar(10), item_name varchar(20), item_quantity varchar(20), item_price varchar(20))";
$table1=mysqli_query($connect,$query1);
if($table1)
echo"food data table created successful<br>";
else
echo"food data table creation failed<br>";

$connect=mysqli_connect("localhost","root","","restaurant");
$query2="create table user_info (user_id varchar(10), email_id varchar(20), password varchar(20))";
$table2=mysqli_query($connect,$query2);
if($table2)
echo"user info table created successful<br>";
else
echo"user info table creation failed<br>";

$query3="create table feedback (content varchar(100), user_name varchar(10))";
$table3=mysqli_query($connect,$query3);
if($table3)
echo"feedback table created successful<br>";
else
echo"feedback table created failed<br>";
?>