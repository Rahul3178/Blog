<?php
    include 'session.php';
   if(!isset($_SESSION)) 
    { 
        require_once 'session.php';
    } 
 
    if(isset($_SESSION['user_name']))
    {
        $uname= $_SESSION['user_name'];
    include 'dbconnection.php';
    // Get data to display on index page
    $sql = "SELECT * FROM post ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    }
    // get post based on id;
    if(isset($_REQUEST['id']))
    {
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM post WHERE id=$id";
        $query=mysqli_query($conn,$sql);

    }
    // get  post deleted
    if(isset($_REQUEST['delete']))
    {    
                $id=$_REQUEST['id'];
                $uname=$_SESSION['user_name'];
                $sql2="SELECT * FROM post WHERE user_name='$uname' AND id='$id'";
                $result2=mysqli_query($conn,$sql2);
                if(mysqli_num_rows($result2))
                {
                    $sql="DELETE FROM post WHERE id='$id' and user_name='$uname'";
                    mysqli_query($conn,$sql);
                    header("Location:home.php?success=Post Deleted!");
                    exit();
                }
                else{
                    header("Location:home.php?error=you are not authorized to access!");
                    exit();

                }
                
              
                
            }
        

        // update post data

     if(isset($_REQUEST['update']))
     {    $id=$_POST['id'];
        $uname= $_SESSION['user_name'];
        $sql2="SELECT * FROM post WHERE user_name='$uname' AND id='$id'";
        $result2=mysqli_query($conn,$sql2);
        
        if(mysqli_num_rows($result2)>0)
            {
                $id=$_POST['id'];
                $title=$_POST['title'];
                $post=$_POST['area'];
                $sql="update post SET title='$title', post='$post' where id='$id'";
                mysqli_query($conn,$sql);
                header("Location:home.php?success=post updated");
                exit();
            }
            else
            {
                header("Location:home.php?error=You are not authorised to access!");
                exit();
            }
         
        
        

     }
        
     // comment work
     
     if(isset($_POST['cb']))
     {
        if(isset($_POST['cname']) && isset($_POST['cemail']) && isset($_POST['ccomment']))
        {
            function validate($data)
            {
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            $cname=validate($_POST['cname']);
            $cemail=validate($_POST['cemail']);
            $ccomment=validate($_POST['ccomment']);
            
            if(isset($_REQUEST['id']))
            {
                $id=$_REQUEST['id'];
                echo $id;
                $sql="SELECT * FROM post WHERE id='$id'";
                $query=mysqli_query($conn,$sql);
                print_r($query);

            }
            

        }
        else
        {
            header("Location:view.php");
            exit();
        }
     }
                        
   
?>