<!DOCTYPE html>
<html>
    <head>
        <title> Forgot password </title>
        
            <link rel="stylesheet" type="text/css" href="style.css"></link>

            
    </head>
    <body>
        <?php include 'navigation.php';?>
        <div class="main">
        <form>
            <h1> Change Password </h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <input type="password" name="Old_pass" placeholder="Old password"></input><br>
            <input type="password" name="new_pass" placeholder="New password"></input><br>
            <input type="password" name ="new_pass2" placeholder="ReEnter password"></input><br>
            <br>
            <button type="submit">Change</button>
        </form>
        </div>
    </body>
</html>