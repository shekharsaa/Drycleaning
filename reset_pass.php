<DOCTYPE Html>
<html>
    <head>
        <title>Reset Password</title>
        <!-- <---Bootsrap----- -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><!-- Optional theme -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script><link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.php">
</head>
    <body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
        <div class="container ">
            <div class="Card col-lg-6 col-mg-6 col-sm-8 m-auto" style="font-family: sans-serif;">
           <center> <h2>Forgotten Password</h2> </center>
           <hr style="border: 10px solid #F72847 ; border-radius:5px;">
                <form action="reset_pass.php" method="POST">
                <select name="type" placeholder="Login type" class="input1 w-100 m-auto">     
						<option value="">Choose Login Type</option>
						<option value="customer">Customer</option>
						<option value="merchant">Merchant</option>
					</select><br>
                    <label for="email">Email</label>
                    <input type="email" placehoder="please enter email" name="email" required class="input1 w-100 m-auto"><br>
                    <label for="pass">New Password</label>
                    <input type="password" name="pass" id="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"; 
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="input1 w-100 m-auto"><br>
                    <lable for="cpass" >Confirm password</lable>
                    <input type="password" name="cpass" id="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"; title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required class="input1 w-100 m-auto"><br>
                    <input type="submit" name="reset" id="" value="Submit" class="btn">
                    <input type="submit" name="login" id="lbtn" value="Login" class="btn" onClick="location.href='login.php'">
                </form>
            <?php 
                                

                if(isset($_POST['reset'])){
                    include 'conn.php';
                    $type = mysqli_real_escape_string($conn,$_POST['type']);
                    $email = mysqli_real_escape_string($conn,$_POST['email']);
                    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
                    $cpass= mysqli_real_escape_string($conn,$_POST['cpass']);

                    
                    if($type=='customer'){
                        $sql = mysqli_query($conn,"SELECT * FROM user_details where email='$email'");
                        if(mysqli_num_rows($sql)>0){
                            $row = mysqli_fetch_array($sql);
                            $email = $row['email'];
                            $uid = $row['id'];
                            if($pass!=$cpass){
                                echo "Password Should Be Same";
                            }else

                            $update = "UPDATE user_details SET cpass='$cpass' where id='$uid'";
                            $reset = mysqli_query($conn,$update);
                            if($reset){
                            echo " Password Reset Succesful";
                            }
                           //
                        }else{
                            echo "<h4 >"."User Does not exsist"."</h4>";
                        }
                    }
                    }
                
                
            ?>
            </div>
        </div>
    </body>
</html>