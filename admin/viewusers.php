<?php 
//session start
    session_start(); 
        if(!isset($_SESSION['email'])){
            header("Location: index.php");
            }else{
?>
<!DOCTYPE html>
<html>
    <title>Admin Panel</title>
        <head>
        <?php   require_once '../conn.php'; ?>
        <!-- <---Bootsrap----- -->
        <!-- Latest compiled and minified CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><!-- Optional theme -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script> <link rel="stylesheet" type="text/css" href="../css\admincss.css">   
        </head>
            <body>
                <!-- Header-Section------ -->
                 <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-6">
                            <img alt="Brand" src="../images\logo.png">
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6 ">
                            <center>    <h1>ADMIN PANEL</h1></center>
                            <center><p><?php echo $_SESSION['email']; ?></p> </center>
                        </div>
                    </div>
                </div>
                <!-- Header-Section End --------->
                <!-- Main-Section----Start -->
            <div class="container-fluid bg-dark">
                
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12  ">
                    <aside class="w-80">
                        <nav>
                            <section class="options">
                                <p>Dashboard</p>
                                     <hr>
                                <ul class="menu">
                                    <li class="item"><a  href="admin.php"><img src="../images\home.png" alt="home"/>  Home</a></li>
                                    <li class="item"><a href="viewusers.php"> <img src="../images\users.png" alt="Users"/>   Veiw Users</a></li>
                                    <li class="item"> <a href="viewmerchants.php"><img src="../images\merchant.png" alt="Merchants"/>View Merchants</a></li>
                                    <li class="item"><a href="vieworders.php"> <img src="../images\orders.png" alt="Orders"/> View Orders</a></li>
                                    <li class="item"><a href="viewmsg.php"><img src="../images\massege.png" alt="Massege"/> View Massege</a></li>
                                    <li class="item"><a href="logout.php"><input type="submit"  value="Logout" class="btn btn-primary"></a></li>
                                  
                                </ul>                  
                            </section>    
                         </nav>
                    </aside>
                
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Welcom To THe Clothes Master</h2>
                    <hr> 
                   
                        <table class="table table-bordered table-light w-50 " >
                            <tr>
                                <th>ID</th>
                                <th>First_Name</th>
                                <th>Last_Name</th>
                                <th>Date Of Birth</th>
                                <th>Email Address</th>
                                <th>Mobile.No</th>
                                <th>Action</th>
 
                            </tr>
               <?php 
               ///Fetching Data from  merchant database 
                      $sql = "SELECT * FROM user_details";
                            if($result = $conn->query($sql)){
                                 if($result->num_rows >0){
                                    while($row = $result->fetch_assoc()){ 
                                        echo "<tr>";
                                             echo  "<td>" .$row['id'] ."</td>";
                                             echo  "<td>" .$row['first_name'] ."</td>";
                                             echo  "<td>" .$row['last_name']  ."</td>";
                                             echo  "<td>" .$row['dob'] . "</td>";
                                             echo  "<td>" .$row['email'] ."</td>";
                                             echo  "<td>" .$row['mobile'] ."</td>";
                                             echo  '<td><a href="deleteuser.php?Del=' . $row['id'] . '">Delete</a></td>';                                            
                                             
                                    echo "</tr>";
                                }
        
                                    echo "</table>";
                                     //free result
                                         $result->free();
                             }else{
                                  echo "No Record Found";
                                 }
                         }else{
                                    echo "Error: Could Not Able to execute $sql." .$mysqli->error;
                             }
                      $conn->close();
                         ?>   
                    </div>       
                </div>
             </div>  
        </div>
        
            <!-- Main-Section----Ends -->
    </body>

</html>
<?php } ?>