<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>Services</title>
      <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="css/headercss.css">
  		<link rel="stylesheet" href="css/style.css">
  </head>
<body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
<!-----------------------------------------------------------------Header Start--------------------------------------------------------------> 
<?php 
		if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
      if($_SESSION['type']=='merchant' && $_SESSION['email']) {
        include 'headerm.php';
      }elseif($_SESSION['type']=='customer' && $_SESSION['email']) {
        include 'headeru.php';
      }
    }else{
      include 'header.php';
    }
	?>
<!------------------------------------------------------------------Header-End-----------------------------------------------------------------------> 
<!------------------------------------------------------------------Servicesmain content -------------------------------------------------------------->
 <div class="container">
     <div class="row ">
          <div class="card col-lg-4 col-md-12 col-sm-12 d-block m-auto" style="width: 18rem;">
                 <img class="card-img-top cards" src="images\card1.jpg" alt="Card image cap" width="100px" height="300px">
                  <div class="card-body ">
                    <h2>Laundary</h2>
                  </div>
            </div>
            <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                <img class="card-img-top cards" src="images\card2.jpg" alt="Card image cap" width="100px" height="300px">
                  <div class="card-body">
                    <h2>Dry Cleaning</h2>
                  </div>
              </div>
              <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                   <img class="card-img-top cards" src="images\card3.jpg" alt="Card image cap" width="100px" height="300px">
                      <div class="card-body">
                         <h2>Esteem Ironing</h2>                 
                     </div>
              </div>
       </div>
</div>    
<div class="container">
     <div class="row ">
          <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                 <img class="card-img-top cards" src="images\card4.jpg" alt="Card image cap" width="100px" height="300px">
                  <div class="card-body ">
                   <h2>Carpet Cleaning</h2>
               </div>
              </div>
              <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                 <img class="card-img-top cards" src="images\card5.jpg" alt="Card image cap" width="100px" height="300px">
                    <div class="card-body">
                      <h2>Shoes Cleaning</h2>
                    </div>
              </div>
              <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                   <img class="card-img-top cards" src="images\card6.jpg" alt="Card image cap" width="100px" height="300px">
                       <div class="card-body">
                         <h2>Curtain cleaning</h2>                 
                  </div>
            </div>
       </div>
</div>    
 <div class="container">
     <div class="row ">
          <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                 <img class="card-img-top cards" src="images\card7.jpg" alt="Card image cap" width="100px" height="300px">
                  <div class="card-body ">
                   <h2>Wedding Dress Cleaning</h2>
               </div>
              </div>
              <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                 <img class="card-img-top cards" src="images\card8.png" alt="Card image cap" width="100px" height="300px">
                    <div class="card-body">
                      <h2>Leather Jacket Cleaning</h2>
                    </div>
              </div>
              <div class="card col-lg-4 col-md-12 col-sm-12  d-block m-auto" style="width: 18rem;">
                   <img class="card-img-top cards" src="images\card9.jpg" alt="Card image cap" width="100px" height="340px">
                       <div class="card-body">
                         <h2>Sofa Cleaning</h2>                 
                  </div>
            </div>
       </div>
</div>    
<!--------------------------------------------------- Servicesmain content-end--------------------------->
<!----------------------------------------------------Footer-area----------------------------------------->
<?php
    include 'footer.php';
  ?>     
<!----------------------------------------------------Footer-area---End------------------------------------>
</body>
</html>
