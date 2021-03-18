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
                $sql="DELETE FROM post WHERE id=$id";
                mysqli_query($conn,$sql);
                header("Location:home.php?success=Post deleted!");
                exit();
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
                header("Location:home.php?error=You are not authorised user!");
                exit();
            }
         
        
        

     }
     
   
?>