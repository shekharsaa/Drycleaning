<?php 
 require_once "../conn.php" ;
    if(isset($_GET['Del'])){
        $merchantid= $_GET['Del'];
        $sql ="DELETE FROM merchant_details WHERE id='$merchantid'";
        $result = mysqli_query($conn,$sql);

        if($result){
            header("Location:viewmerchants.php");
        } else
        {
            echo "Please Check Query";
        }
    }else  
    {
        header("Location:viewmerchants.php");
    }
 ?>
