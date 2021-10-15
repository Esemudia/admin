<?php
     include "conn.php";

     $fName=$_POST['fname'];
     $lname=$_POST["lname"];
     $email=$_POST["email"];
     $pword=$_POST["password"];
     $pword9=$_POST["cpass"];
     $role=$_POST["Role"];
     $phone=$_POST["phone"];
     if($pword==$pword9)
     {

             if($fName!=""  && $lname!="" && $email!=""&& $role!=""&& $phone!="")
             {
                 
                 $pword1=md5($pword);
                 $sql="INSERT INTO Admin(Fname,Lname,email,phone,txtpassword,accessControl,Status) values('$fName','$lname','$email','$phone','$pword1','$role','1')";
                 $result=mysqli_query($conn,$sql);
                 if($result>0)
                     echo "success";
                 else
                     echo  mysqli_error($conn);;
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