<?php
include "conn.php";
$email=$_POST["email"];
$oldpword=$_POST["oldpword"];
$newpword=$_POST["newpword"];
$cnewpword=$_POST["cnewpword"];
if($email=="" || $email ==null)
{
    echo"user Id can not be Empty";
}
else
{
    $oldpword0=md5($oldpword);
    $newpword7=md5($newpword);
    $sql_query="UPDATE user SET password='$newpword7' where email='$email' and password='$oldpword0'";
    $result = mysqli_query($conn,$sql_query);
    if($result>0)
    {
        echo"successful";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>