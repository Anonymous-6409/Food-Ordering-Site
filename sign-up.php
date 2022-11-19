<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>

<style>
.top{
padding-top:100px;
padding-left:500px;
padding-right:450px;
position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 80%;
 
  
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

<form method=post action=sign-up.php>

  <div class="form-group text-center">
    <label for="UserID"><h4 style="font-family: "Times New Roman", Times, serif;">User Id</h4></label>
    <center>
    <input style="width:80%;", Times, serif;"type="UerId" class="form-control" name="userid" id="UserId">
   </center>
  </div>


<div class="form-group text-center">
    <label for="EmailID"><h4 style="font-family: "Times New Roman", Times, serif;">Email Id</h4></label>
    <center>
    <input style="width:80%;", Times, serif;"type="UerId" class="form-control" name="emailid" id="EmailId">
   </center>
  </div>


  <div class="form-group text-center">
    <label for="pwd"><h4>Password:)</h4></label>
     <center>
    <input style="width:80%;" type="password" name="pwd" class="form-control" id="pwd">
     </center>
</div>


  <div class="text-center">
  <button type="submit" class="button">Submit</button>
   <button type="reset" class="button" id="clear">Clear</button>
  </div>
  <div align="center" font-size="20px">
   <a href="sign-in.php">Already a user, Sign In</a>
    </div>

</form>
</body>
</html>

<?php
if(isset($_POST['emailid']) && isset($_POST['userid']) && isset($_POST['pwd']))
{
$email=$_POST['emailid'];
$userid=$_POST['userid'];
$psswd=$_POST['pwd'];
$a=mysqli_connect("localhost","root","","restaurant");
if($a)
{
	$b="insert into user_info values ('$userid', '$email', '$psswd')";
	$c=mysqli_query($a,$b);	
	
	if($c)
	echo"User Id created, Please Login.";
	else
	echo"Id creation failed";
}
else
echo"Database not found";
}
?>

