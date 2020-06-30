<?php
	 session_start(); 
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>	Booking</title>
			<meta charset="utf-8">
	  		<meta name="viewport" content="width=device-width, initial-scale=1">
	  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  		<link rel="stylesheet" href="css/headercss.css">
	  		<link rel="stylesheet" href="css/style.css">
			<?php 
				require_once 'conn.php';
			?>
			<?php
				if(isset($_POST['book'])){
					$name =  mysqli_real_escape_string($conn,$_POST['name']);
					$mobile = mysqli_real_escape_string($conn,$_POST['phone']);
					$email = mysqli_real_escape_string($conn, $_POST['email']);
					$adrs = mysqli_real_escape_string($conn, $_POST['adrs']);
					$mid = mysqli_real_escape_string($conn,$_POST['id']);
					$services = mysqli_real_escape_string($conn,$_POST['services']);
					$date = mysqli_real_escape_string($conn, $_POST['date']);
					$time = mysqli_real_escape_string($conn,$_POST['time_period']);
			// Attempt insert query execution
					$sql = "INSERT INTO booking_detail(name, mobile,email,msg,mid,services,date, time) VALUES ('$name', '$mobile','$email','$adrs','$mid','$services','$date', '$time')";
				
					$query=mysqli_query($conn,$sql);
						if($query===true){    
							echo "Booking Successfuly";
						}else {
							echo "ERROR: Could not able to execute sql.". mysqli_error($query);
						}
				}
			//close connection
					mysqli_close($conn);
			?>
	</head>
<body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
		<?php 
		 	if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
				if($_SESSION['type']=='merchant' && $_SESSION['email']) {
					include 'headerm.php';
			 	}elseif ($_SESSION['type']=='customer' && $_SESSION['email']) {
					include 'headeru.php';
			 	}
			} else {
				  	include 'header.php';
			  	}
		?>
	<div class="container" >
	<h3 class="text-center" style="font-size:40px">Book Schedule</h3>
		<div class="row">
			<div class="col-lg-6 col-md-8 col-sm-12 m-auto">
				<div class="card  mt-10	" style="font-family: sans-serif;" >
					<div class="card-title  mt-10" >
						<div class="card-body booking" >
							<form action="#" method="POST" >
								<label for="name">Name</label>
								<input type="text" placeholder="Enter Name" name="name" class="input1 w-100 m-auto" required><br>
								<label for="">Mobile</label>
								<input type="text" placeholder="Enter Mobile.NO" name="phone" class="input1 w-100 m-auto" required><br>
								<label for="">Email Address</label>
								<input type="email" placeholder="Enter Email Address" name="email" class="input1 w-100 m-auto" required><br>
								<label >Address</label><br>
								<textarea name="adrs" id="" cols="20" rows="4" class="input1 w-100 m-auto" style="resize: none;" required></textarea><br>
								<label for="Merchant" class="lbl">Merchant</label><br>
								<select name="id" id="" class="input1 w-100 m-auto" required>
									<option value=""; disabled>Mercahnts</option>
									<?php 
										include "conn.php";
										$sqlm = "SELECT * FROM merchant_details";
										$resultm = mysqli_query($conn,$sqlm);
										while($rowm = mysqli_fetch_array($resultm)){
										?>
									<option value="<?php echo $rowm['email1'];?>"><?php echo $rowm['first_name1'];?></option>
									<?php }?>
								</select><br>
								<label for="Services" class="lbl">services</label><br>
								<select name="services" id="" class="input1 w-100 m-auto" required>
									<option value=""; disabled>Services</option>
									<option value="Dry Cleaning">Dry Cleaning</option>
									<option value="Laundary">Laundary</option>
									<option value="Sofa Dry Cleaning">Sofa Dry Cleaning</option>
									<option value="Esteem Press">Esteem Press</option>
									<option value=""></option>
								</select><br>
								
								<label for="Date">Select Date</label><br>
								<input type="date"  name="date" class="input1 w-100 m-auto" required><br>
								<label for="time">Select Time</label><br>
								<select name="time_period" id="" class="input1 w-100 m-auto" >
									<option value=""; disabled required>Time</option>
									<option value="9.00AM to 12.00PM">9.00AM to 12.00PM</option>
									<option value="12.00PM to 3.00PM">12.00PM to 3.00PM</option>
									<option value="3.00PM to 6.00PM">3.00PM to 6.00PM</option>
									<option value="6.00PM to 9.00PM">6.00PM to 9.00PM</option>
								</select><br>
								<input type="submit" value="Book" name="book" class="ragisterbtn">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php 
	include 'footer.php';
?>
</html>