<?php
    include_once("conn.php");
    session_start();
    $val= $_SESSION["session_email"];
    if($_SESSION["usertype"]=="6")
    {
        $date=date("Y-m-d H:i:s");
        $sql="UPDATE logged_in SET logged_in='0',logout_time='$date' WHERE email='$val'"; 
        $result=mysqli_query($conn,$sql);
        if($result>0)
        {
            print_r("success");
            session_destroy();
            header("Location:../index.php");
        }
        else
        {
            print_r("Error");
        }
    }
    else if ($_SESSION["usertype"]=="7") 
    {
        $date=date("Y-m-d H:i:s");
        $sql="UPDATE bank SET logged_in='1', logged_Out_Time ='$date' WHERE email='$val'"; 
        $result=mysqli_query($conn,$sql);
        if($result>0)
        {
            print_r("success");
            session_destroy();
            header("Location:../index.php");
        }
        else
        {
            print_r("Error");
        }
    }
    else
    {
        
        $date=date("Y-m-d H:i:s");
        $sql="UPDATE Admin SET logged_in='1', logged_Out_Time ='$date' WHERE email='$val'"; 
        $result=mysqli_query($conn,$sql);
        if($result>0)
        {
            print_r("success");
            session_destroy();
            header("Location:../index.php");
        }
        else
        {
            print_r("Error");
        }
    }
?>