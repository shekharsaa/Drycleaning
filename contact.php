<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ContactUs</title>
        <meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    		<link rel="stylesheet" href="css/headercss.css">
    		<link rel="stylesheet" href="css/style.css">
        <link rel=icon href=images/favicon.ico>
  	<!-- -------------Php-Connection-file------------------------------------------------------>
  		<?php
  			require_once "conn.php";
  		?>
      <?php 
      if (isset($_POST['send'])) {
          require 'phpmailer/class.phpmailer.php';
              $mail = new PHPMailer;
              $mail-> isSMTP();
              $mail->Host ='smtp.gmail.com';
              $mail->Port = '587';
              $mail->SMTPAuth=true;
              $mail->SMTPSecure ='tls';
              $mail->Username ='shekharsaa@gmail.com';//-----------------------Your Email --------------------//
              $mail->Password ='Shekhar@1078';//-----------------------Your Password--------------------//
              $mail->From=$_POST['email'];
              $mail->FromName = $_POST["name"];
              $mail->AddAddress('shekharsaa@gmail.com','Chander Shekhar');//---------------Your Email and Name---------------//
              $mail->isHTML(true);
              $mail->Subject ='Form Submission';
              $mail->WordWrap = 50;
              $mail->Body=' <h1 align=center>Name:'.$_POST['name'].'<br>Email :'.$_POST['email'].'<br>Massage: '.$_POST['msg'].'<br>'.'Mobile.No: <br>'.$_POST['mobile'] .'<h3>';
              if (isset($_POST['send'])) {
                $name =  mysqli_real_escape_string($conn,$_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
                $msg = mysqli_real_escape_string($conn,$_POST['msg']);
                $sql = "INSERT INTO contact(name, email, mobile, msg ) VALUES (' $name', '$email','$mobile' ,'$msg')";
                $query=mysqli_query($conn,$sql);
                      if($query===true){    
                          echo "Message Send Successfuly";
                       }else {   
                              echo "ERROR: Could not able to execute sql." . mysqli_error($query);
                          }
                }
              if (!$mail->send()) {
                echo  "Something Went wrong";
              }else {
                echo "Thanks ".$_POST['name'] ."for connecting with The Clothes Master";
              }
        }
      ?>
  </head>
<body style="background-image: linear-gradient(#ACDAC9, #F66B80 )">
    <?php 
        if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
           if($_SESSION['type'] == 'merchant' && $_SESSION['email']){
              include 'headerm.php';
            }elseif($_SESSION['type'] == 'customer' && $_SESSION['email']){
              include 'headeru.php';
            }
        }else{
              include 'header.php';
            }
      ?>    
    <div class="container" >
                            <center><h1>Contact us </h1></center>
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 m-auto bg-light box">
                <form method="post" action="contact.php" onsubmit=" return validation()" >
                    <input type="text" name="name" id="name" required class="input1" placeholder="Name"><br>
                    <input type="Email" name="email" id="email" required class="input1" placeholder="Email Address"><br>
                    <input type="text" name="mobile"id="phone" pattern="[0-9]{10}" required class="input1" placeholder="Mobile.No"><br>
                    <textarea name="msg" style="resize: none;" required id="msg" placeholder="Message" class="input1"></textarea><br>
                    <input type="submit" name="send" class="ragisterbtn" value="Send">
                  </form>
                </div>
            </div>
        </div>
<!-------------------------------------------------------Footer-Area--------------------------------------------------------> 
<?php
	include "footer.php";
?>
</body>
</html>