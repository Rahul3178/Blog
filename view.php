<?php include 'homebend.php';?>
<html>
<head></head>
<link rel="stylesheet" type="text/css" href="Homestyle.css">
<body>
<?php include 'navigation.php'; ?>
       <div class="none">
               

                <?php foreach($query as $q) {?>
                
                 <h2> <?php echo $q['title'];?></h2>
                <p><?php echo $q['post'];?></p>
                
                <?php }?>
                
                <button type="submit"><a href="edit.php?id=<?php echo $q['id'];?>">Edit</a></button>
                        <form method="post">
                        <input type="text" hidden value="<?php echo $q['id'];?>">
                        <button type="submit" name="delete">Delete</button>
                        </form>
                
       </div>
</body>
</html>