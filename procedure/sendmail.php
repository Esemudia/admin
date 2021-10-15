<?php
include "conn.php";
$from=$_POST["sender"];
$to=$_POST["reciever"];
$cc=$_POST["copycontact"];
$bcc=$_POST["Bcc"];
$subject=$_POST["subject"];
$Message=$_POST["message"];
//$attached=$_FILES['file']['name'];;
if($from=="" && $to=="" && $Message=="")
{
    return false;
}
else
{
    
$sql="INSERT INTO Email (Sender, reciever, subject, CopyContact, SecondCopy,Message, Attachment, readStatus, ReadstatusCopy, readcopystatus) VALUES ( '$from', '$to', '$subject', '$cc', '$bcc', '$Message', '$attached', '0', '0', '0') ";
$result= mysqli_query($conn,$sql);
if($result == true)
{
    echo"Mail Sent.....";
}
else
{
    echo mysqli_error($conn);
}
}
?>