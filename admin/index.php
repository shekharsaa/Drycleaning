
<?php session_start();
    require ("../conn.php");
    //fetching data from database
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = mysqli_real_escape_string($conn,$_POST['password']);
        $result = mysqli_query($conn,"SELECT * FROM admin_detail where email = '".$email. "' and pass = '".$pass."'");
        if(!empty($result)){
            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result)==0){
                echo "Incorrect email or Password!!";
            }else{
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                header("Location: admin.php");
            }
        }
    }
?>
<!DOCTYPE html>
<head>
    <?php ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator Login</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><!-- Optional theme -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css\admincss.css">

</head>
        <body class="bg-light">
        <!-- <---header Section Starts----- -->
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#"><img src="../images\logo.png"></a>
                    <div class="col-lg-8 text-center"><h2>Administrator</h2></div>
                </nav>
            </div><br>
             <div class="container ">
                <div class="row">
			        <div class="col-lg-6 col-md-8 col-sm-12 m-auto">
				        <div class="card  mt-10 bg-secondary" style="font-family: sans-serif;" >
					        <div class="card-title  mt-10" >
                                 <center><h2>Admin Login</h2></center>
							    <div class="card-body booking" >
								    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
								        <label for="name">Email</label>
								        <input type="text" placeholder="Email" name="email" class="input1 w-100 m-auto" required><br>
								        <label for="">Password</label>
								        <input type="password" placeholder="password" name="password" class="input1 w-100 m-auto" required><br><br>
								        <input type="submit" value="login" name="login" class="btn btn-primary">
								    </form>
                        		</div>
					</div>
				</div>
			</div>
		</div>        
        <!-- <--Main-content_area starts-- -->
    </body>
</html>