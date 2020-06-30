<?php 
    require_once '../conn.php';
        if(isset($_GET['Del']))
            {
            $userid = $_GET['Del'];
            $sql = "DELETE FROM user_details WHERE id = '$userid'";
            $result = mysqli_query($conn,$sql);
            
            if($result){
                header("Location:viewusers.php");
            } else 
            {
                echo "Please Check Query";
            }
        } else 
        {
            header("Location:viewusers.php");
        }
?>