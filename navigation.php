<?php
 session_start();
 if(isset($_SESSION['name'] ) && isset($_SESSION['id']))
 {
 ?>
<html>
    <head>
        
    </head>
                <style>
                ul
                {
                list-style-type: none;
                margin:0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                opacity: 0.9;
                position: -webkit-sticky; 
                position: sticky;
                top: 0;
             }
                    li
                    {
                        float: right;
                        border-right:1px solid #bbb;

                    }
                    li a
                    {
                        display: block;
                        color: white;
                        text-align: center;
                        padding: 14px 16px;
                        text-decoration: none;
                        
                    }
                    li a:hover
                    {
                        background-color: #111;
                    }
                    h3
                    {   background-color: #4CAF50;
                        margin-left: 30px;
                        margin-bottom: 10px;
                        margin-top: 10px;
                        display: block;
                        color: white;
                        padding: 2px 2px;
                        text-decoration: none;
                        width: fit-content;
                    }
                    .active {
                        background-color: #4CAF50;
                    }
                    
                    </style>
    
    
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
     header("Location:home.php");
 }

?>