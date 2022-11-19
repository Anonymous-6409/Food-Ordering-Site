<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Items</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  
</head>
<style>
#x{
background-color:green;
font-size:60px;
color:pink;
}
#y{
cell-spacing:10;
cell-padding:20;
}
.gap{
column-count : 4;
	
}
</style>

<body>
<?php include 'navbar.php'; ?>
<div class="abbr">
<h1 class="text-center ">Select any delicious food from our list of variety</h1></div>
	
	<form action=foodcart.php method=post >	

	<div class="container-fluid">
	<div class="row">
	

<div class-"col-lg-4 cpl-md-4 col-12">	
<div class="card mt-20" style="width: 20rem;">
  <img src="images/sambhar.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Sambhar</h5>
    <p class="card-text">Delicious Sambhar with Chatni.</p>
  </div>
  <ul class="list-group list-group-flush">
 	 <input type=hidden name="id" value=1 />
	 <input type=hidden name="item_name" value="Sambhar" />
	 <input type=hidden name="item_price" value=100 />
	 <input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div> 		
			</form>	
	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/Chole-Bhature.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Chole Bhature</h5>
    <p class="card-text">Delicious Chole-Bhature.</p>
  </div>
  <ul class="list-group list-group-flush">
    <input type=hidden name="id" value="2" />
	<input type=hidden name="item_name" value="chole_bhature" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
   <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div>		
			</form>
	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/Momo.jpg" class="card-img-top" alt="Momo">
  <div class="card-body">
    <h5 class="card-title">Momo</h5>
    <p class="card-text">Delicious Momo with Chatni.</p>
  </div>
  <ul class="list-group list-group-flush">
    <input type=hidden name="id" value="3" />
	<input type=hidden name="item_name" value="momo" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div>		
			</form>

	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/paner.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Paneer</h5>
    <p class="card-text">Delicious Matar Paneer.</p>
  </div>
  <ul class="list-group list-group-flush">
   	<input type=hidden name="id" value="4" />
	<input type=hidden name="item_name" value="paneer" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit name="add_to_cart" value="Add to Cart" />
  </div>
</div>
</div>		
			</form>
	
<form action=foodcart.php method=post >		
<div class-"col-lg-4 cpl-md-4 col-12">		
<div class="card mt-20" style="width: 20rem;">
  <img src="images/dahi-vada-bhalla.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Dahi Vada Bhalla</h5>
    <p class="card-text">Delicious Dahi Vada Bhalla.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Order 5 pieces only for Rs.50</li>
   	<input type=hidden name="id" value="5" />
	<input type=hidden name="item_name" value="dahi_vada" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />	
  </ul>
  <div class="card-body">
   <input type=submit value="Add to cart" name="add_to_cart" />	
  </div>
</div>
</div>			
			</form>
		<form action=foodcart.php method=post >

<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/dosa.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Dosa</h5>
    <p class="card-text">Delicious Dosa</p>
  </div>
  <ul class="list-group list-group-flush">
        <input type=hidden name="id" value="6" />
	<input type=hidden name="item_name" value="dosa" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div>		
			</form>
	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/jalebi.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Jalebi</h5>
    <p class="card-text">Delicious Jalebi.</p>
  </div>
  <ul class="list-group list-group-flush">
    <input type=hidden name="id" value="6" />
	<input type=hidden name="item_name" value="jalebi" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div>
			</form>
	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/butter-chicken.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Butter Chicken</h5>
    <p class="card-text">Delicious Sambhar with Chatni.</p>
  </div>
  <ul class="list-group list-group-flush">
       <input type=hidden name="id" value="7" />
	<input type=hidden name="item_name" value="butter-chicken" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
   <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div>
		</form>
	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">	
<div class="card mt-20" style="width: 20rem;">
  <img src="images/vegpasta.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Pasta</h5>
    <p class="card-text">Delicious Veg Pasta.</p>
  </div>
  <ul class="list-group list-group-flush">
	<input type=hidden name="id" value="8" />
	<input type=hidden name="item_name" value="vegpasta" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit name="add_to_cart" value="Add to cart" />
  </div>
</div>
</div>
		</form>
	<form action=foodcart.php method=post >
<div class-"col-lg-4 cpl-md-4 col-12">
<div class="card mt-20" style="width: 20rem;">
  <img src="images/vegroll.jpg" class="card-img-top" alt="Sambhar">
  <div class="card-body">
    <h5 class="card-title">Veg Roll</h5>
    <p class="card-text">Delicious Veg Roll.</p>
  </div>
  <ul class="list-group list-group-flush">
 	<input type=hidden name="id" value="9" />
	<input type=hidden name="item_name" value="vegroll" />
	<input type=hidden name="item_price" value="100" />
	<input type=text name="item_quantity" />
  </ul>
  <div class="card-body">
    <input type=submit value="Add to cart" name="add_to_cart" />
  </div>
</div>
</div>
	
		</div>
		</div>
		</form>

</body>
</html>