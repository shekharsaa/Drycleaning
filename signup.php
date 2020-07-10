
<?php 
    session_start();  
?>
  <?php
    require_once 'conn.php';
        if (isset($_POST['submit'])) {
            $first_name =  mysqli_real_escape_string($conn,$_POST['first_name']);
            $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
            $dob = mysqli_real_escape_string($conn, $_POST['dob']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);
            $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
            extract($_POST);
            $rs=mysqli_query($conn,"select * from user_details where email='$email'");
            if (mysqli_num_rows($rs)>0) {
	            echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	            exit;
                }
            if($pass!=$cpass){
            echo "Password Not Mached";
        }else
        // Attempt insert query execution
            $sql = "INSERT INTO user_details(first_name, last_name, dob, email ,mobile ,cpass) VALUES ('$first_name', '$last_name','$dob' ,'$email','$mobile','$cpass')";
            $query=mysqli_query($conn,$sql);
                if($query===true) {    
                    echo "Account Created Successfuly";
                 }else {   
                    echo "ERROR: Could not able to execute sql." . mysqli_error($query);
                    }
        }
        if(isset($_POST['submit1'])){
            $first_name1 = mysqli_real_escape_string($conn, $_POST['first_name1']);
            $last_name1 = mysqli_real_escape_string($conn, $_POST['last_name1']);
            $dob1 = mysqli_real_escape_string($conn,$_POST['dob1']);
            $email1 = mysqli_real_escape_string($conn,$_POST['email1']);
            $mobile1 = mysqli_real_escape_string($conn,$_POST['mobile1']);
            $pass1 = mysqli_real_escape_string($conn,$_POST['pass1']);
            $cpass1 = mysqli_real_escape_string($conn,$_POST['cpass1']);
            extract($_POST);
            if((($_FILES['file1']['type']== "image/gif")
            || ($_FILES['file1']['type'] == "image/jpeg")
            || ($_FILES['file1']['type'] == "image/jpg")
            || ($_FILES['file1']['type'] == "image/png"))
            && ($_FILES['file1']['size'] < 20000000000000)) {
                    if($_FILES['file1']['error'] > 0){
                        echo "Return Code:" .$_FILES['file']['error'] ."<br>";
                    }else {
                        if(file_exists("merchants/" .$_FILES['file1']['name'])){
                            echo $_FILES['file1']['name'] . "already exists";
                            }else{
                            $path ="merchants/" .$_FILES['file1']['name'];
                            move_uploaded_file($_FILES['file1']['tmp_name'], "merchants/" .$_FILES['file1']['name']);
        //Check In Database              
                            $rs=mysqli_query($conn,"select * from merchant_details where email1='$email1'");
                if (mysqli_num_rows($rs)>0) {
                    echo "<br><br><br><div class=heading>Login Id Already Exists</div>";
                    exit;
                    }
                if($pass1!=$cpass1) {
                    echo "Password Not Mached";
                    }else
        // Attempt insert query execution
                    $sql = "INSERT INTO merchant_details(first_name1, last_name1, dob1, email1 ,mobile1,file1,cpass1) VALUES ('$first_name1', '$last_name1','$dob1' ,'$email1','$mobile1','$path','$cpass1')";
                    $query=mysqli_query($conn,$sql);
                    if($query===true){    
                            echo "Account Created Successfuly";
                     }else {
                        echo "ERROR: Could not able to execute sql.". mysqli_error($query);
                    }
            }

        // Close connection
mysqli_close($conn);
    $msg= "<p style=clear:both>Merchant Ragister Successfully</p>";
        }
    }else{
         echo "invalid File";
        }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ragistration</title> 
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
<!---------------------------------------------------Header-Section-End-------------------------------------------------->
<!---------------------------------------------------LoginForm----------------------------------------------------------->
	<body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
<!----------------------------------------------------header section -------------------------------------------------------->
    <?php 
		if(isset($_SESSION['type']) &&  isset($_SESSION['email'])){
            if($_SESSION['type']=='merchant' && $_SESSION['email']){
                include 'headerm.php';
            }elseif($_SESSION['type']=='customer' && $_SESSION['email']){
                include 'headeru.php';
            }
        }else{
            include 'header.php';
            }
	?>
<!---------------------------------------------------------------------header-finish--------------------------------------------->
        <div class="container">
                 <center><h1 style="padding: 10px; font-family: sans-serif ;" >REGISTRAION FORM</h1> </center>
            <div class="row ">
			             <div class=" col-sm-6 col-lg-5 col-md-8 bg-light m-auto box" >
                             <form action="#" method="post" class="signupform">
                                     <center>  <h2 style="padding: 10px 0px 0px 0px"> Customer Registraion</h2> </center>
                                     <input type="text" name="first_name"  class="input1" placeholder="FIRST NAME" pattern="[A-Za-z]{0-30}" style="width:90%" required>
                                     <div></div>
                                     <br>    
                                     <input type="text" name="last_name" class="input1" placeholder="LAST NAME" style="width: 90%"> <br>  
                                     <input type="Date" name="dob"  class="input1" placeholder="DATE OF BIRTH" style="width: 90%" required><br>  
                                     <input type="email" name="email"  class="input1" placeholder="EMAIL ADDRESS" style="width: 90%" required>
                                     <div></div>
                                     <br>  
                                     <input type="text" name="mobile"  class="input1" placeholder="MOBILE NUMBER" style="width: 90%" pattern="[0-9]{10}" data-require-error="Please Enter Phone Number" required
                                     title="Fill 10 Digits Mobile.no">
                                     <div></div>
                                     <br>   
                                     <input type="Password" name="pass"  class="input1" placeholder="PASSWORD" style="width: 90%" min="6" max="8" 
                                     required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"; required
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                     <input type="Password" name="cpass"  class="input1" placeholder="CONFIRM PASSWORD" style="width: 90%" min="6" max="8" 
                                     required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"; 
                                    title=" at least 8 or more characters">
                                     <input type="submit" value="Ragister" name="submit" class="ragisterbtn">
                             </form>
                          </div>
<!----------------------------------------------------Maerchant Ragistration Form---------------------------------------------> 
        <div class=" col-sm-6 col-lg-5 col-md-8 m-auto bg-light box" >
                <form action="#" method="Post" class="signupform" enctype="multipart/form-data">
                     <center> <b> <h2 style="padding: 10px 0px 0px 0px"> Merchant Registraion</h2> </b></center>
                     <input type="text" name="first_name1"  class="input1" placeholder="SHOP NAME" pattern="[A-Za-z]{0-30}" style="width: 90%" required><br>    
                     <input type="text" name="last_name1"  class="input1" placeholder="DRY CLEANER" style="width: 90%"> <br> 
                     <p style="margin:10px 0 10px 10px; text-align:center; color:red">Please Enter Estabhlise Date</p>  
                     <input type="Date" name="dob1" class="input1" placeholder="DATE OF BIRTH" style="width: 90%"><br> 
                     <input type="email" name="email1"  class="input1" placeholder="EMAIL ADDRESS" style="width: 90%" required><br>  
                     <input type="text" name="mobile1"  class="input1" placeholder="MOBILE NUMBER" pattern="[0-9]{10}"   style="width: 90%" min="10"  required
                     title="Fill 10 Digits Mobile.no"><br>
                     <p style="margin:10px 0 10px 10px; text-align:center; color:red">Upload Shop Image</p>
                     <input type="file" name="file1" class="input1" placeholder="Select Image" style="width: 90%; border: 1px solid;"> <br>    
                     <input type="Password" name="pass1"  class="input1" placeholder="PASSWORD" style="width: 90%"  min="6" max="8"
                     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"; required
                      title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                     <br> 
                     <input type="Password" name="cpass1"  class="input1" placeholder="CONFIRM PASSWORD" style="width: 90%"  min="6" max="8" 
                     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"; required
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                     <input type="submit" value="Ragister" name="submit1" class="ragisterbtn"><br>
                </form>
            </div>
        </div>
    </div>
<!-----------------------------------------------------------------Footer-area----------------------------------------------------------> 
 <?php 
     include 'footer.php';
    ?>
</body>
</html>
