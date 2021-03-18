<?php
    
    include 'dbconnection.php' ;
    if(!isset($_SESSION)) 
    { 
        require_once 'session.php';
    } 
    
    if(isset($_SESSION['user_name']))
    {
        $uname= $_SESSION['user_name'];

    if(isset($_POST['title']) && isset($_POST['area']))
    {
        function validate($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;

        }
            $title=validate($_POST['title']);
            $post=validate($_POST['area']);
        
    
       
        if(empty($title))
        {
            header("Location:createpost.php?error=Title can't be empty");
            exit();
        }
        else if(empty($post))
        {
            header("Location:createpost.php?error=Post can't be empty");
            exit();
        }
        else 
        {
            

            $sql="INSERT INTO post(title,post,user_name)VALUES('$title','$post','$uname')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:home.php?success=Post created");
                exit();
            }
            else
            {
                header("Location:createpost.php?error=unknown");
                exit();
            }




        }


    }
    
    else
    {
        header("Location:createpost.php");
    }

}
else
{
    header("Location:index.php");
}

?>