<?php
include "conn.php";
$userid=$_POST["userId"];
if($userid=="" || $userid ==null)
{
    echo"user Id can not be Empty";
}
else
{
    $sql_query="UPDATE users SET Status='0' where id='$userid'";
    $result = mysqli_query($conn,$sql_query);
    if($result>0)
    {
        echo" user has been Banned";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>