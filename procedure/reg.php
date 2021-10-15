<?php
    include "conn.php";

    $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST["lname"]);
    $email=mysqli_real_escape_string($conn, $_POST["email"]);
    $pword=mysqli_real_escape_string($conn, $_POST["password"]);

    if($fname!="" && $lname!="" && $email!="" && $pword!="")
    {
        $dname= $fname." ".$lname;
        $pword1=md5($pword);
        $ran_id = rand(101, 100000000);
        $regdate=date("Y/m/d");
        $sql="insert into users(unique_id,Fname,Lname,dname,email,password,regDate,status)  values('$ran_id','$fname','$lname','$dname','$email','$pword1','$regdate','1')";
        $result=mysqli_query($conn,$sql);
        if($result>0)
        {
            echo "success";
        }
        else
        {
            echo "error";
        }
        return;
    }
    else
    echo "Cannot Accept Empty values!!!";
?>