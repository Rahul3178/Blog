<?php
session_start();
include 'dbconnection.php';

        if(isset($_SESSION['name'] ) && isset($_SESSION['id']))
        {
            if(isset($_POST['home']))
            {
                header("Location:home.php");
                exit();
            }
            if(isset($_POST['old_pass']) && isset($_POST['new_pass']) &&isset($_POST['new_pass2']))
                {
                    function validate($data)
                    {
                        $data=trim($data);
                        $data=stripslashes($data);
                        $data=htmlspecialchars($data);
                        return $data;
                    }
                    $op=validate($_POST['old_pass']);
                    $np=validate($_POST['new_pass']);
                    $np2=validate($_POST['new_pass2']);
                    if(empty($op))
                    {
                        header("Location:changepass.php?error=Old Password Required");
                        exit();
                    }
                    else if(empty($np))
                    {
                        header("Location:changepass.php?error=New Password Required");
                        exit();
                    } 
                    else if(empty($np2))
                    {
                        header("Location:changepass.php?error=Conform Password Required");
                        exit();
                    }
                    else if($np!==$np2)
                    {
                        header("Location:changepass.php?error=Conformation Passworrd not match! ");
                        exit();
                    }
                    else
                    {   
                        $op=md5($op);
                        $np=md5($np);
                        $id=$_SESSION['id'];
                        $sql="SELECT password FROM user WHERE id='$id' and password='$op'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)===1)
                        {
                            $sql2="UPDATE user SET password='$np' Where id='$id'";
                            mysqli_query($conn,$sql2);
                            header("Location:changepass.php?success=Password Changed");
                            exit();

                            
                        }
                        else
                        {
                            header("Location:changepass.php?error=Unknown Error Occur");
                        }
                    }
                }
                else
                {
                    header("Location:changepass.php?error=Unknown error Occur");
                }

        }
        else
        {
            header("Location:index.php");
        }

?>