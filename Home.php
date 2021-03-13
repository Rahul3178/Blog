<?php
    session_start();
    if(isset($_SESSION['user_name']) && isset($_SESSION['id']))
    {
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="Homestyle.css">
</head>
<body>

        
        <nav>
            <ul>
            
            <li><a href="Logout.php" style="margin-right: 20px;">Logout</a></li>
            <li><a href="Changepass.php">Change Password</a></li>
            <li><a href="createpost.php">Create post</a></li>
            <li><a class="active" href="Home.php">Home</a></li>
            <h3>Welcome   <?php echo " ".$_SESSION['name'];?></h3>
            
            
            </ul>
        
        </nav>
</body>
</html>
<?php
    }
    else
    {
        header("location:index.php");
    }
?>