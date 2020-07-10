
<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Our Merchants</title>
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
<body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
<?php 
    if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
      if($_SESSION['type'] == 'merchant' && $_SESSION['email']) {
        include 'headerm.php';
       }elseif($_SESSION['type'] == 'customer' && $_SESSION['email']) {
        include 'headeru.php';
       }
    } else {
            include 'header.php';
        }
  ?>
  <section id="merchant-section">
     <div class="Container  merchant-img">
          <center><h2>Our Merchants</h2></center>
              <?php 
                    //Connection file
                    include 'conn.php';
                    $sql="SELECT * FROM merchant_details";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)) {
                        ?>
                    <div class="sub-cont ">
                       <img src="<?php echo $row['file1'];?>" class="img11" alt="Merchant_images">
                        <h5 class="card-body text-center text-dark">Shop Image</h5>  
                        <p class="mname"><span><?php echo $row['first_name1'];?></span></p>
                        <a href="merchants.php?id=<?php echo $row['id'];?>"   class="btn btn-primary sbtn" >View Details</a><br>
                      </div>
                <?php
                    }
                 ?>
                <?php
                  if(isset($_GET['id'])) {
                      $sqlmid="SELECT * FROM merchant_details where id='$_GET[id]'";
                      $resultmid = mysqli_query($conn,$sqlmid);
                      $rowmid= mysqli_fetch_array($resultmid);
                  ?>
                  <br>
                
            </div>
        <div class="details-tb">
                <table class="table table-dark col-lg-10 col-md-6 col-sm-10" id="details">
                    <thead>
                      <tr class="bg-primary">
                          <th>Shop_Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                         <td><?php echo $rowmid['first_name1'];?></td>
                         <td><?php echo $rowmid['email1'];?></td>
                         <td><?php echo $rowmid['mobile1'];?></td>
                         <td><img src="<?php echo $rowmid['file1'];?>" width="100"></td>
                       </tr>
                    </tbody>
                </table>
             <?php } ?>
        </div>
   </section>
  <!----------------------------------------------------------- Footer-Area-start------------------------------------------ --->
<section class="footer-area bg-dark"  >
		<div class="container  ">	
				<div class="row  text-left ">
					<div class="col-lg-4">
						<h3>Our Services</h3>
						<ul class="footer-1">
							<li><a href="services.php">Dry Cleaning</a></li>
							<li><a href="services.php">Ironing</a></li>
							<li><a href="services.php">Sofa Dry cleaners</a></li>
							<li><a href="services.php"> Car Dry Cleaning</a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<h3>Quick Links</h3>
						<ul class="footer-1">
							<li><a href="aboutus.php">AboutUs</a></li>
							<li><a href="https://upcomingbox.com/">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<h3>Support</h3>
						<ul class="footer-1">
							<li><a href="https://www.livescience.com/63089-dry-cleaning.html" class="footer-links">Documantetion</a></li>
							<li><a href="https://rickscleaners.com/faq/"class="footer-links">FaQ's</a></li>
							<li><a href="https://simpledryclean.com/privacy-policy/" class="footer-links">Privacy</a></li>
						</ul>
					</div>
				</div>
		</div>
		<div class="footer-logo text-center">
				<ul class="f-logo">
					<li><a href="https://www.facebook.com/UpcomingBox-101334948155694/?ref=py_c"><img src="images\facebook.png" class="logo"></a></li>
					<li><a href="https://www.instagram.com/saabshekhar/?hl=en"><img src="images\instagram.png" class="logo"></a></li>
					<li><a href="https://www.youtube.com/"><img src="images\youtube.png" class="logo"></a></li>
				</ul>
			</div>
			<div class="copyright text-center">
				<p><span style="color: #fff;">Copyrighted &#169; By The Clothes Master</span></p>
			</div>
	</section>
  <!----------------------------------------------------------- Footer-Area-End------------------------------------------ --->
    </body>
</html>