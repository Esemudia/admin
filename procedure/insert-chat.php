<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "conn.php";
        $outgoing_id = $_SESSION['unique_id'];
        $fullname = $_SESSION["session_FullName"];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming']);
        $message = mysqli_real_escape_string($conn, $_POST['mess']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg,fullname)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}','$fullname')") or die();
            if($sql>0)
            {
                echo"i";

            }
            else
            {
                echo mysqli_error($conn) ;
            }
        }
    }else{
        header("location: ../login.php");
    }


    
?>