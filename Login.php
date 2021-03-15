<?php
    session_start();
    include 'dbconnection.php';

    if( isset($_POST['Name']) && isset($_POST['Password']))
    {
        function validate($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;

        }
        $uname=validate($_POST['Name']);
        $pass=validate($_POST['Password']);
        if(empty($uname))
        {
            header("Location: index.php?error= User Name is required");
            exit();
        }
        else if(empty($pass))
        {
           header("Location:index.php?error=Password is required");
           exit();
        }
        else
        {
            $pass=md5($pass);
            $sql="SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";
            $result=mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)===1)
            {
                $row=mysqli_fetch_assoc($result);
             
                if($row['user_name']===$uname && $row['password']===$pass)
                {
                    $_SESSION['user_name']=$row['user_name'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['id']=$row['id'];
                    header("Location:Home.php");
                    exit();

                }
                else
                {
                    header("Location:index.php?error=Invalid user name or password");
                    exit();

                }
            }
            else
            {
                header("Location:index.php?error=Invalid user name or password");
                exit();

            }
        }

    }
    else
    {
        header ("Location:index.php");
        exit();
    }
?>