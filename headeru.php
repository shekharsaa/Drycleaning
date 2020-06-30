
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  		<a class="navbar-brand" href="#"><img src="images/logo.png"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
   			 <ul class="navbar-nav nav-item ">
					<li class="nav-item active">
  		      			<a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
    		  		</li>
     		 		<li class="nav-item ">
     		   			<a class="nav-link text-white" href="#">Orders Status</a>
     			 	</li>
              		<li class="nav-item ">
     		   			<a class="nav-link text-white" href="booking.php">Book Schedule</a>
     			 	</li>
     		 		<li class="nav-item ">
     		   			<a class="nav-link text-white" href="merchants.php">Our Merchants</a>
     		 		</li>
			  		<li class="nav-item ">
     		  	  		<a class="nav-link text-white" href="services.php">Services</a>
     		 		</li>
             		<li class="nav-item ">
     		   			<a class="nav-link text-white" href="logout.php">Logout</a>
     		 		</li>
					  <li class="nav-item ">
     		   			<a class="nav-link text-white" href="#"><?php echo "Welcome"." ".$_SESSION['email']; ?></a>
     		 		</li>
    			</ul>
  			</div>  
		</nav>

	

