<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css"></link>

    
</head>
<body >

<div class="main">
<form action="src/Login.php" method="POST" >
    
<h2>login</h2>
<?php if(isset($_GET['error'])) {?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <?php if(isset($_GET['success'])) {?>
    <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>
<input type="text"  name="Name" placeholder="user name"></input>
<br><br>
<input type="password"  name ="Password" placeholder="password"></input>
<br><br>
<button type="submit">login</button>
<a href="src/Signup.php">Wants to register?</a><br>
<br>


</form>
</div>


</body>
</html>