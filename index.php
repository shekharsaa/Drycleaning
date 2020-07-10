<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Home</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="css/headercss.css">
  		<link rel="stylesheet" href="css/style.css">
		<link rel=icon href=images/favicon.ico>
	</head>
<body>
	<?php 
		//php code
		if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
			if($_SESSION['type']=='merchant' && $_SESSION['email']) {
					include 'headerm.php';
				}elseif($_SESSION['type']=='customer' && $_SESSION['email']) {
					include 'headeru.php';
					}
			}else {
				include 'header.php';
			}
	?>
	<!----------------------------------------------------------Header-Section End---------------------------------------- -->
	<!----------------------------------------------------- ----slidertext-start---------------------------------------------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
<div class="carousel-inner col-lg-12 col-md-12 col-sm-12">
	 <div class="carousel-item active">
	     <img class="d-block w-100 m-auto" src="images\b1.jpg" alt="First slide">
	</div>
	<div class="carousel-item">
	    <img class="d-block w-100 m-auto" src="images\b2.jpeg" alt="Second slide">
	</div>
	<div class="carousel-item">
	    <img class="d-block w-100 m-auto" src="images\b3.jpg" alt="Third slide">
	</div>
</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
</div>
<!------------------------------------------------------- ----slidertext-end------------------------------------------------------- -->
<!------------------------------------------------- -------our services-----Starts ------------------------------------------------------->
<section class=" container ourservices text-center  bg-light">
		<h1>Our Services</h1>
		<p>Care Your clothes</p>
	<div class="row rowsetting">
		<div class="col-lg -4 col-md-12 d-block m-auto">
			<div class="imgsetting d-block m-auto">
			 	<img class="icons" src="images\drycleaningicon.png" alt="drycleaningicon"/></div>
			 	<h2>Dry Cleaning</h2>
			 	<p class="service">We provides economical self-service laundry facility in Jalandhar using latest technology to ensure, best cleaning of your clothes and fabrics. </p>										
			</div>
		<div class="col-lg -4 col-md-12 d-block m-auto">
			<div class="imgsetting d-block m-auto">
			 	<img  class="icons" src="images\laundary.png" alt="laundary"/></div>
			 	<h2>Laundary</h2>
			 	<p class="service">Our Flexible and easy-to-use service gives you a pleasant laundry experience. We also provide Pick and drop facility to Dry-clean & Laundry in Jalandhar </p>
			</div>
		<div class="col-lg -4 col-md-12 d-block m-auto">
			<div class="imgsetting d-block m-auto">
				<img  class="icons" src="images\esteemironing.png"></div>
				 <h2>Ironing</h2>
				 <p class="service">We Provides best  ironing  Services and we iron everything: shirts, t-shirts, skirts, trousers, bed-linen, table linen, children’s clothes, curtains, settee covers, etc. We always follow garment care label instructions.</p>
			</div>
		</div>
</section>
<!-- ---------------------------------------------------our services--End----------------------------------------------------------------------->
<!-- <-----------------------------------------------Bussiness Partner----------------------------------------------------------------------->
<section  class="container bg-white">
	<div class="work text-center" >
		<h1>How It Work</h1>
		<p>Our Excelent Partners</p>
		<div class="row">
			<div class="col-lg-2 col-4 d-block col-md-12 col-sm-6  col-12 m-auto m-0">
				<h2>Ragister</h2>
					<figure><img src=" images\b4.png" class="figure-img "></figure>
					<p>	Go to our website and ragister . We will take it from there. Hassel free, fast and simple!</p>
					</div>
					<div class="col-lg-2 col-4 d-block col-md-12 col-sm-6 col-12 m-auto m-0">
						<h2>Select </h2>
						<figure><img src=" images\find-icon.png" class="figure-img "></figure>
						<p>	See All dry Dry Cleaners And select Dry Cleaners according to our requirement</p>
						</div>
					<div class="col-lg-2 col-4 d-block col-md-12 col-sm-6 col-12 m-auto m-0 ">
						<h2>	Book Schedule</h2>
						<figure><img src=" images\book.png" class="figure-img "></figure>
						<p>	Book Schedule according our convinience online</p>
						</div>
					<div class="col-lg-2 col-4 d-block col-md-12 col-sm-6 col-12 m-auto m-0 ">
						<h2>Pickup</h2>
						<figure><img src=" images\pickup-icon.png" class="figure-img "></figure>
						<p>	The Delivery Man Pickup your clothes on given time</p>
					</div>
					<div class="col-lg-2 col-4 d-block col-md-12 col-sm-6 col-12 m-auto m-0 ">
						<h2>Process</h2>
						<figure><img src=" images\dry-cleaner.png" class="figure-img "></figure>
						<p>	your clothes will be procesed like dry clean ,ironing,packing</p>
					</div>
					<div class="col-lg-2 col-4 d-block col-md-12 col-sm-6 col-12 m-auto m-0 ">
						<h2>Delivery</h2>
						<figure><img src=" images\delivery-icon.png" class="figure-img "></figure>
						<p>	Your Procesed Clothes Deliver at your Home Free Of cost</p>
					</div>
				</div>
			</div>
		</section>
<!------------------------------------------------Bussiness Partner--------------------------------------------------------->
<!------------------------------------------------Footer-area---------------------------------------------------------------->
<?php 
	include 'footer.php';
?>
<!------------------------------------------------Footer-area---End----------------------------------------------------------->
</body>
</html>