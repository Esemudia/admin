<?php
    include "conn.php";
    $email=$_POST["email"];
    $pword=$_POST["password"];
    if($email!="" && $pword!="")
    {
        $sql_query = "select count(*) as cntUser from users where Email='$email' and Password='$pword'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count == 1)
        {
        $sql_query = "select * from users where Email='$email' and Password='$pword'";
        $result = mysqli_query($conn,$sql_query);
        $rows = array();

        while ($row = $result->fetch_assoc())
        {
            $rows[] = $row;
        }
            $val=$rows;
                if($val != null)
                {
                        
                    session_start();
                    $_SESSION["session_email"]=0;
                        foreach ($val as $key => $value) {
                            
                    $_SESSION["session_email"] = $value["email"];
                    $_SESSION["session_FullName"]=$value["dname"];
                    $_SESSION["usertype"]=$value["userType"];
                    $_SESSION["unique_id"]=$value["unique_id"];
                    echo "success"; 
                   
                    }
                    $val= $email;
                    
                    $sql_query = "SELECT count(*) as cntUser from logged_in where email='$val'";
                    $result = mysqli_query($conn,$sql_query);
                    $row = mysqli_fetch_array($result);
                    $count = $row['cntUser'];
                   
                    if($count==0)
                    {
                       
                        $date=date("Y-m-d H:i:s");
                        $sql="insert into logged_in(email,logged_in,time_login )  values( '$val','1', '$date')"; 
                        $result=mysqli_query($conn,$sql);
                        if($result>0)
                        {
                         
                        }
                        else{
                            print_r( mysqli_error($conn));
                        }
                    }
                    else
                    {
                        $date=date("Y-m-d H:i:s");
                        $sql="UPDATE logged_in SET logged_in='1', time_login='$date' WHERE email='$val'"; 
                        $result=mysqli_query($conn,$sql);
                        if($result>0)
                        {
                          return;
                        }
                        else
                        {
                            print_r("Error");
                        }
                    }
                }
            else
            {
               echo "can't fetch the values!!! ";
            }

        }
        else   
        {
            echo "User does not exist";
        }
    }
else
{
    echo "Can't accept empty values!!!";
}
?>
