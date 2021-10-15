<?php
    include "conn.php";

    $bankName=mysqli_real_escape_string($conn, $_POST['uname0']);
    $email=mysqli_real_escape_string($conn, $_POST["cemail0"]);
    $pword=mysqli_real_escape_string($conn, $_POST["password0"]);
    $pword9=mysqli_real_escape_string($conn, $_POST["cpassword0"]);
    if($pword==$pword9)
    {
            if($bankName!=""  && $email!="" && $pword!="")
            {
                $pword1=md5($pword);
                $ran_id = rand(10, 100);
                $sql="insert into bank(unique_id ,BankName,bankEmail,password,userType,Status)  values('$ran_id','$bankName','$email','$pword1','7','1')";
                $result=mysqli_query($conn,$sql);
                if($result>0)
                    echo "success";
                else
                    echo "error";
                return;
            }
            else
            echo "Cannot Accept Empty values!!!";
    }
    else
    {
        echo"Password does not Match......";
    }
?>