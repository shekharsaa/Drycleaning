
<div class="header">
	<nav class="navbar navbar-expand-lg  navbar-light bg-dark justify-content-right">
		<div class="container-fluid text-uppercase">
  			<a class="navbar-brand" href="index.php"><img src="images\logo.png" alt="iron master logo"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
 			</button>
				<div class="collapse navbar-collapse "  id="navbarSupportedContent" >	
					<ul class="navbar-nav  nav-item" >
					<li class="nav-item active">
  		    	 		<a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
    			 	</li>
     				<li class="nav-item ">
     			  		<a class="nav-link text-white" href="viewbookings.php">Orders</a>
     			 	</li>
     				<li class="nav-item ">
     			  		<a class="nav-link text-white" href="merchants.php"> Merchants</a>
     				</li>
				 	<li class="nav-item ">
     			 		<a class="nav-link text-white" href="">Update Status</a>
     				</li>
     				<li class="nav-item ">
     			  		<a class="nav-link text-white" href="logout.php">Logout</a>
     				</li>
            	 	<li class="nav-item ">
     			  		<a class="nav-link text-white" href="#"><?php echo "Welcome-"." ".$_SESSION['email']; ?></a>
     				</li>
        		</ul>
 			</div>
 		</div>
	</nav>	
</div>	
	