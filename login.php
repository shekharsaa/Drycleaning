
<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  			<link rel="stylesheet" href="css/headercss.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel=icon href=images/favicon.ico>
				<?php 
					if(isset($_POST['submit'])) {
						include "conn.php";
						$type=mysqli_real_escape_string($conn,$_POST['type']);
						$email=mysqli_real_escape_string($conn,$_POST['username']);
						$pass=mysqli_real_escape_string($conn,$_POST['password']);
						if($type=='merchant') {
						$sqlu="SELECT * FROM merchant_details where email1='$email' and cpass1='$pass'";
						}
						if($type=='customer') {
						$sqlu="SELECT * FROM user_details where email='$email' && cpass='$pass'";
						}
						$resultu=mysqli_query($conn,$sqlu);
						$countu=mysqli_num_rows($resultu);
						if($countu >0) {
						$rowu=mysqli_fetch_array($resultu);
						$_SESSION['type']=$type;	
						$_SESSION['email']=$email;
						$_SESSION['first_name1'];
						header('location:index.php');
						}
						else{
							$error= "<p style=clear:both>Invalid User</p>";
						}
					}
					?>
	</head>
<body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
<!----------------------- Header-Section Start------------------------------------------>
<?php 
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
<!-- --------------------------------Header-Section End-------------------------------------------- -->
<!---------------------------------- LoginForm-------------------------------------------- -->
	<div class="container">
		<div class="heading" style=" height:80px;">
			<center>  <h1 style="padding: 10px; font-family: sans-serif ;" >LOGIN FORM</h1> </center>
        </div>
		<div class="row">	
			<div class="col-lg-6 col-md-6 col-sm-6 m-auto bg-dark login-box">
				<form method="POST" action="login.php">
					<select name="type" placeholder="Login type" class="input1">     
						<option value="">Choose Login Type</option>
						<option value="customer">Customer</option>
						<option value="merchant">Merchant</option>
					</select><br>
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
					<input type="textbox" name="username" placeholder="Email Address" value="" required class="input1">
					<br>	
					<i class="fa fa-unlock-alt" aria-hidden="true" ></i>
					<input type="password" name="password" placeholder="Password" value="" required class="input1">
					<br>
					<button class="btn"  name="submit" id ="loginbtn" value="Login">Login</button>
					<br><br><br>	<br>	<br>	
					<!-- <a href="reset_pass.php"><h6 id="F">Forgotton Password</h6></a> -->
					<a href="signup.php"><h6>Create Account!</h6></a>
					
				</form>
			</div>
		</div>
	</div>
<!------------------------------------------LoginForm---end---------------------------->
<!------------------------------------------Footer-area------- -------------------------------->
<?php 
	 include 'footer.php';
?> 
<!-------------------------------------------Footer-area---End------------------------------->
</body>
</html>