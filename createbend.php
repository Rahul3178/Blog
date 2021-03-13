<?php
    session_start();
    include 'dbconnection.php' ;
    
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
            Echo "welcome" ;

            $sql="INSERT INTO post(title,post)VALUES('$title','$post')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:createpost.php?success=Post created");
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



?>