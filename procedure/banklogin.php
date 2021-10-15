<?php
    include "conn.php";
    $email=$_POST["email"];
    $pword=$_POST["password"];
    if($email!="" && $pword!="")
    {
        $sql_query = "select count(*) as cntUser from bank where  	bankEmail ='$email' and Password='$pword'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count == 1)
        {
            $sql_query = "select * from bank where  	bankEmail ='$email' and Password='$pword'";
            $result = mysqli_query($conn,$sql_query);
            $rows = array();

            while ($row = $result->fetch_assoc())
            {
                $rows[] = $row;
            }
            $val=$rows;
                if($val != null)
                {
                    $date=date("Y-m-d H:i:s");
                    session_start();
                    foreach ($val as $key => $value) 
                    {
                        $_SESSION["session_uniqueId"] = $value["unique_id"];        
                    $_SESSION["session_email"] = $value["bankEmail"];
                    $_SESSION["session_FullName"]=$value["BankName"];
                    $_SESSION["usertype"]=$value["userType"];
                    $val0=$_SESSION["session_email"];
                    $sql="UPDATE bank SET logged_in='1', logged_in_Time ='$date' WHERE 	bankEmail ='$val0'";
                    echo "success"; 
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
