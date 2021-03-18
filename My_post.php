

<?php  include 'postbend.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>My Post</title>
<link rel="stylesheet"  type="text/css" href="homes.css">
</head>
        
<body class="pro">
<div class="nav"><?php include 'navigation.php'; ?></div>
                <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success'];?></p>
                <?php }?>
                <div><p  style="margin-top:05%;"></p></div>
                <div class="rows">
                    <?php 
                       
                    foreach($query as $q) {?>
                <div class="m2">
                <h6 style="float: left;"> <?php echo "@".$_SESSION['user_name'];?>
                <h4 class="c2" style=" font-size: 24px;"> <?php echo $q['title'];?></h4>
                <p class="c3" style="test-align:left;"><?php echo $q['post'];?></p>
                <a href="view.php?id=<?php echo $q['id'];?>" >ReadMore..<span class="text-danger">&rarr;</span></a>
                        
            </div>
            <br><br>
                <?php }?>
        
    </div>
    

        

</body>
</html>
