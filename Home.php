<?php
    session_start();
    if(isset($_SESSION['user_name']) && isset($_SESSION['id']))
    {
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Welcome <?php echo $_SESSION['name'];?></h1>
        <a href="Logout.php">Logout</a>
</body>
</html>
<?php
    }
    else
    {
        header("location:index.php");
    }
?>