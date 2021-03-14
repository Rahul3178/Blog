<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css"></link>

    
</head>
<body >

<div class="main">
<form action="Login.php" method="POST" >
    
<h2>login</h2>
<?php if(isset($_GET['error'])) {?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
<input type="text"  name="Name" placeholder="user name"></input>
<br><br>
<input type="password"  name ="Password" placeholder="password"></input>
<br><br>
<button type="submit">login</button>
<a href="signup.php">Wants to register?</a><br>
<br>
<a href="forgotpass.php">Change Password </a>

</form>
</div>


</body>
</html>