<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Project on Restaurant Management</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container-sm jumbotron">
  <div class="text-center">
    <h1>Best Sellers</h1>
    <p>There are some best sellers of our website.</p>
  </div>
  </div>




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/vegpasta.jpg" alt="Veg Pasta" width="1100" height="500">
	<div class="carousel-caption">
        <h2><font color="black" font-size=2>Veg Pasta</font></h2>
        <small>Favourite of most of the people</small>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/samosa.jpg" alt="Samosa" width="1100" height="500">
	<div class="carousel-caption">
        <h3><font color="black" font-size=2>Samosa</font></h3>
        <p>Loved by many peoples.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/sambhar.jpg" alt="Sambhar" width="1100" height="500">
	<div class="carousel-caption">
        <h3><font color="black" font-size=2>Idli Sambhar</font></h3>
        <small>One of the best dish od our Restro!</small>
      </div>
    </div>
	<div class="carousel-item">
      <img src="images/vegroll.jpg" alt="Veg Roll" width="1100" height="500">
	<div class="carousel-caption">
        <h3>Veg Roll</h3>
        <small>Delicious and healthy! Recommended by us.</small>
      </div>
    </div>
<div class="carousel-item">
      <img src="images/roasted-chicken.jpg" alt="Roasted-Chicken" width="1100" height="500">
	<div class="carousel-caption">
        <h3>Roasted Chicken</h3>
        <small>Delicious and healthy! Recommended by us.</small>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
	<h2 class="text-center">About Us</h2>
 	</div>
<div class="container-fluid">
	<div class="row">
  	 <div class="col-lg-6 col-md-6 col-12">
   	<img src="images/hqdefault.jpg" class="image-fluid aboutimg">
   	</div>
    <div class="col-lg-6 col-md-6 col-12">
   <h2>Restaurant Management </h2>
   <p>This site provide you the best facilities with best price of food only for you without any interruption. We want you to support us and stay connected with us as much as you can.Thank you for your love and support.</p>
   </div>
  	</div>
</div>
</section>


<section class="my-5">
<div class="my-5">
<h2 class="text-center">Feedback</h2>
</div>
   <form method=post action=feedback.php >
 	<div class="form-group">
   	 <label for="Feedback form"><font color='blue' size=4>Few words for us to improve our services.</font></label>
    	<textarea class="form-control" name="feed" id="Feedback" rows="3"></textarea>
	<button type="submit" class="btn btn-primary mb-2">Submit</button>
  	</div>
   </form>
</section>

<footer>
<div>
<h2 class="p-3 bg-dark text-white text-center"><B>Creators:</B><br>
<font font-style='TimesNewRoman' size=5>Arjun<br>
Shubham<br>
Yogesh<br>
Mayank<br>
Rajat</font> </h2>
</div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
