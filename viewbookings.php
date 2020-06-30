<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<title>AboutUs</title>
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
        <!-------header-start----------------------------------------- -->
<?php 
if(isset($_SESSION['type']) &&  isset($_SESSION['email'])) {
		if($_SESSION['type'] == 'merchant' && $_SESSION['email']) {
			include 'headerm.php';
	 	}elseif($_SESSION['type']=='customer' && $_SESSION['email']) {
			include 'headeru.php';
	}
}else {
		 	include 'header.php';
	  }
?>
         <!-- !------------------header-finish -----------------------> 
        <div class="Container m-auto">
            <center><h2>Booking Status</h2></center>  
            <?php 
                include_once 'conn.php';
                $mid = $_SESSION['email'];
                $sql = "SELECT * FROM booking_detail where mid='$mid'";
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        ?>
                        <table class="table table-dark col-lg-10 col-md-8 col-sm-10 m-auto">
                            <tr class="bg-primary">
                                <th>OrderId</th>
                                <th>Customer_Nmae</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Address</th>
                            </tr>
                            <?php
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['mobile'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['services'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['time'] . "</td>";
                                echo "<td>" . $row['msg'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "No order found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
                 
                // Close connection
                mysqli_close($conn);
                ?>
        </div>         
<?php
    include 'footer.php';
?>
</body>
</html>