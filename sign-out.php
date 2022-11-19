<?php
 session_start();
 $_SESSION["login"]=0;
 echo'<script>alert("log out successful");</script>';
 session_destroy();
 ?>
 


<!DOCTYPE html>
<html>
<head>
<title>Sign Out</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>
<style>
.top{
padding-top:160px;
padding-left:500px;
padding-right:450px;
position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
 }
.bo{
border: 2px solid green;
border-radius: 18px;
}
.add{
font-family: "Times New Roman", Times, serif;
}
.button{
background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 18px;
}
#clear{
background-color: red;
}
</style>

<body background="images/bg3.jpg">

<?php include 'navbar.php'; ?>

<div class="top">
<div class="bo">
<div class="text-center"><img src="images/userlogin.png" height="100px;"width="120px;"></div><br><br>


  
  <div class="text-center">
  <font color="green" font-size=5>User sign out successful. Please Login again to add items to your cart.</font>
  <br><br>
	<a href="sign-in.php">Click here to Sign In...</a>
  </div>
  <div align="center" font-size="20px">
   <a href="sign-up.php">Not a user, Sign Up</a>
    </div>





</body>
</html>