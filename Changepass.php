<!DOCTYPE html>
<html>
    <head>
        <title> Change password </title>
        
            <link rel="stylesheet" type="text/css" href="style1.css"></link>

            
    </head>
    <style>
        .home
            {
                
                background:lightgreen;
                color: #fff;
                padding:30px,15px;
                margin-right:10px;
                margin-left: auto;
                border-radius: 5px;
                border:none;
                width: 30%;
                height: 7vh;
                
            }
    
    </style>
    <body>
        
        <div class="main">
        <form  action="passbend.php" method="post">
            <h1> Change Password </h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <?php if(isset($_GET['success'])) {?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php }?>
            <input type="password" name="old_pass" placeholder="Old password"></input><br>
            <input type="password" name="new_pass" placeholder="New password"></input><br>
            <input type="password" name ="new_pass2" placeholder="Conform password"></input><br>
            <br>
            <button class="home" type="submit" style="float: right;">Change</button>
            <button  class="home" type="submit" style="float:left" name="home">Home</button>
            
        </form>
        </div>
    </body>
</html>