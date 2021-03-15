<?php
   
    include 'dbconnection.php';
    // Get data to display on index page
    $sql = "SELECT * FROM post";
    $query = mysqli_query($conn, $sql);

    // get post based on id;
    if(isset($_REQUEST['id']))
    {
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM post WHERE id=$id";
        $query=mysqli_query($conn,$sql);

    }
    // get  post deleted
    if(isset($_POST['delete']))
    {   
        $id=$_REQUEST['id'];
        $sql="DELETE FROM post WHERE id=$id";
        mysqli_query($conn,$sql);
        header("Location: home.php?error=Post deleted!");
        exit();
    }

        // update post data
     if(isset($_REQUEST['update']))
     {   
         $id=$_POST['id'];
         $title=$_POST['title'];
         $post=$_POST['area'];
         $sql="update post SET title='$title', post='$post' where id='$id'";
        mysqli_query($conn,$sql);
        header("Location:Home.php?success=Post updated");
        exit();
        
        

     }
     
   
?>