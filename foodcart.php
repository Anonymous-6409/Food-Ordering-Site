 <?php   
 session_start();  
 include 'navbar.php';
 static $total=0;
$table_name=$_SESSION["name"];
	if(!$_SESSION["login"]==1)
	{
	echo'<script> alert("Please Sign In first to add item to Cart"); </script>';
	header("location:sign-in.php");
	}
	else
	{
   if(isset($_POST['add_to_cart']))  
 {	
	
	$con=mysqli_connect("localhost","root","","restaurant");
	$check="check table $table_name";
	$que=mysqli_query($con,$check);
	if(!mysqli_num_rows($que)==1)
	{
	$create="create table $table_name (item_id varchar(2), item_name varchar(20), item_quantity varchar(10), item_price varchar(10))";
	mysqli_query($con,$create);
	}
	 $id=$_POST['id'];
 	$name=$_POST['item_name'];
	$price=$_POST['item_price'];
	$quant=$_POST['item_quantity'];
	$con=mysqli_connect("localhost","root","","restaurant");
	$show="select * from $table_name where item_name='$name'";
	$ans=mysqli_query($con,$show);
	if(mysqli_num_rows($ans)==1)
	echo'<script> alert("Item already added");</script>';
	else
	{
	if($con)
	{
	$insert="insert into $table_name values ('$id','$name','$price','$quant')";
	$query=mysqli_query($con,$insert);
	if($query)
	echo'<script> alert("Item added succesfully"); </script>';
	}
	}
}
	$con=mysqli_connect("localhost","root","","restaurant");
	$show="select * from $table_name";
	$query1=mysqli_query($con,$show);
	$total=0;
	
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Cart</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap-grid.css">
</head>
<body>

 <div align="center" style="background-color:#f1f1f1;"><h2>Food Cart Items</h2></div>
	<div class="container-fluid">
                     <table class="table table-bordered">  
                    <div class="row">      <tr>  
           <div class="row">   <th>Item Name</th>  </div>
            <div class="row">  <th>Quantity</th>  </div>
            <div class="row">  <th>Price</th>  </div>
           <div class="row">   <th>Total</th>  </div>
           <div class="row">   <th>Remove</th></div>
                          </tr>	</div>
	<?php while($values=mysqli_fetch_array($query1))
	{	?>	
		<form method=get action=delete_item.php >
  
	
	<div class="row">	<tr>
<div class="row"><td><?php echo $values["item_name"]; ?></td></div>
<div class="row"><td><?php echo $values["item_quantity"]; ?></td></div>
<div class="row"><td><?php echo $values["item_price"]; ?></td></div>
<div class="row"><td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td></div>
		<input type=hidden name=item_id value=<?php echo $values["item_id"]; ?> />
<div class="row"><td><input type=submit value=delete name=delete /></td></div>
		</tr>	</div>
 
		
			</form>
	
	<?php  $total=$total+($values["item_quantity"] * $values["item_price"]); ?>
	
	<?php
			}
			}
		?>
 			</table>
			</div>
	<div><h4>TOTAL => <?php echo $total; ?></h4>
	</div>
			
 
</body>
</html>

