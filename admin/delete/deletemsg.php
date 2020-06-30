<?php 
    require_once '../../conn.php';
        if(isset($_GET['msgdel'])){
            $msgid = $_GET['msgdel'];
            $sql ="DELETE FROM contact WHERE id = '$msgid'";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:../viewmsg.php");
            } else 
            {
                echo "Some Error !!!!!";
            }
        } else 
        {
            header("Location:../viewmsg.php");
    }
?>