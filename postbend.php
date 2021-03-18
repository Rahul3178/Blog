<?php
include 'dbconnection.php';
    // Get data to display on my post page
    
    if(!isset($_SESSION)) 
    { 
        require_once 'session.php';
    } 
 
    if(isset($_SESSION['user_name']))
    {
        $uname= $_SESSION['user_name'];
        
        $sql = "SELECT * FROM post where user_name ='$uname' ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);
        
    }

  
?>