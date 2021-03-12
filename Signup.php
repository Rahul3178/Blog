<!DOCTYPE html>
<html>
<head>
<title>
SignUp
</title>
<link rel="stylesheet" type="text/css" href="style.css"> </link>
</head>
<body>
    <form action="Signup_bend.php" method="Post">
        <h1> SignUp </h1>
        <?php if(isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error'];?> </p>
        <?php } ?>
        <?php if(isset($_GET['success'])) {?>
        <p class="error"><?php echo $_GET['success'];?> </p>
        <?php } ?>
            
        
            
        <?php if (isset($_GET['name'])) { ?>
            
            <input type="text"
             name="Rname"
             placeholder="Name"
             value="<?php echo $_GET['name']; ?>">
             <br>
             

        <?php }else {?>
            <input type="text"
             name="Rname"
             placeholder="Name">
             
             <br>
            <?php }?>
            <?php if (isset($_GET['uname'])) { ?>
        <input type="text"
         name="Ruser"
          placeholder="User_name"
          value="<?php echo $_GET['uname']; ?>">
          <br>
          
          <?php } else {?>
            <input type="text"
         name="Ruser"
          placeholder="User_name">
          <br>
          <?php }?>
          <?php if(isset($_GET['email'])) {?>
        <input type="text"
         name="Email"
          placeholder="Example@xyz.com"
          value="<?php echo$_GET['email'];?>">
          <br>
          <?php } else {?>
            <input type="text"
         name="Email"
          placeholder="Example@xyz.com">
          <br>
          <?php }?>
        
        <input type="password" name="Rpassword" placeholder="Create Password"></input><br>
        <input type="password" name="Rpassword2" placeholder="ReEnter Password"></input><br>
        <br>
        <a href="Index.php">Already have an account?</a>
        <button type="submit" name="Rbutton">SignUp</button>
    </form>
</body>
</html>