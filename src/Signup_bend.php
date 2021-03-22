<?php
include 'dbconnection.php';
if(isset($_POST['Rname']) && isset($_POST['Ruser'] )&& isset($_POST['Email']) && isset($_POST['Rpassword']) && isset($_POST['Rpassword2']))
{
    function validate($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $Regname=validate($_POST['Rname']);
    $Reguname=validate($_POST['Ruser']);
    $Regemail=validate($_POST['Email']);
    $Regpass1=validate($_POST['Rpassword']);
    $Regpass2=validate($_POST['Rpassword2']);

    $user_data= 'name='.$Regname .'&uname'.$Reguname;
    
    if(empty($Regname))
    {
        header("Location:Signup.php?error=Enter Name&$user_data");
        exit();        
    }else if(empty($Reguname))
    {
        header("Location:Signup.php?error=Enter User Name&$user_data");
        exit();
    }else if(empty($Regemail))
    {
        header("Location:Signup.php?error=Enter Email&$user_data");
        exit();
    }
    else if(!filter_var($Regemail,FILTER_VALIDATE_EMAIL))
    {
        header("Location:signup.php?error=Email Address is not Valid!&$user_data");

    }
    else if(empty($Regpass1))
    {
        header("Location:Signup.php?error=Enter Password&$user_data");
        exit();
    }
    else if(empty($Regpass2))
    {
        header("Location:Signup.php?error=ReEnter Password&$user_data");
        exit();
    }
    else if($Regpass1!==$Regpass2)
        {
        header("Location:Signup.php?error=Password does not  Match&$user_data");
        exit();
        }
    
    else{
        
       
        // hashing the password
        $Regpass1=md5($Regpass1);
        $sql="SELECT * FROM user WHERE user_name='$Reguname'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
          header("Location:signup.php?error=This user name is already taken"); 
            exit();
        }
        else
        {
            $sql2="INSERT INTO user(user_name,password,name,Email)VALUES('$Reguname','$Regpass1','$Regname','$Regemail')";
            $result2=mysqli_query($conn,$sql2);
            if($result2)
            {
                header("Location:\quy/index.php?success=your account is created successfully!");
                exit();
            }
            else
            {
                header("Location:signup.php?success=unknown errors error occured!");
                exit();
            }
        }


    }
    
}
else
{
    header("Location:Signup.php");
    exit();
}


?>