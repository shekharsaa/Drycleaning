<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<title>AboutUs</title>
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
		<!-------header-start----------------------------------------- -->
<?php 
 if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
		if($_SESSION['type'] == 'merchant' && $_SESSION['email']) {
			include 'headerm.php';
	 	}elseif($_SESSION['type']=='customer' && $_SESSION['email']) {
			include 'headeru.php';
	}
}else {
		 	include 'header.php';
	  }
?>
		 <!------------------header-finish ----------------------->
    <div class="container">
    	<center><h2>AboutUs</h2></center>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12  w-100">
                <h1><img src="images\img.jpg"  alt="aboutus w-100"></h1>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 ">
                 <p style="text-align: justify; font-size:20px; text-color:black;"> We’re a laundry and dry-cleaning service that delivers at the tap of a button—so you can get back to doing what you really love.
                	We started The Clothes Master to create an alternative to your typical laundry and dry cleaning experience, which too often involves 
                	confusing pricing, unclear processes or poor customer service. An alternative where delivery occurs at the tap of a button and happens
                	around your schedule. Where people are friendly and knowledgeable about the way your clothes are treated.
                	The Clothes Master common portal for all the Dry Cleaner merchants to register and sell their services. The customers can book schedules
                	instantaneously across anywhere around the area, anywhere they want. The online Dry-Cleaning Booking Service system will be computerized so that it has less paper work to do and it will save both the money and the time. 
                 </p>
            </div>
        </div>
    </div>
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
	
	<!---------------------------------------our services-----End ------------------------------------------>
	<!---------------------------------------Bussiness Partner---------------------------------------------->
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
						<p>	Your Procesed Clothes Deliver at your Home Free Of cost<
					</div>
			</div>
		</div>
	</section>
	<!-------------------------------------------------Bussiness Partner------------------------------------------------->
<?php
	include 'footer.php';
?>
</body>
</html>