<?php include 'homebend.php';?>
<html>
<head><title>view</title></head>
       <link rel="stylesheet" type="text/css" href="view.css">
<body>
<?php include 'navigation.php'; ?>
       <div class="none">
                <?php foreach($query as $q) {?>
                <div class="me">
                 <h2 id="t1"> <?php echo $q['title'];?></h2>
                <p id="t2"><?php echo $q['post'];?></p>
                </div>
                <?php }?>
                
                      <button type="submit" id="t3" style="float:left;" ><a href="edit.php?id=<?php echo $q['id'];?>">Edit</a></button>
                        <form method="post">
                        <input type="text" hidden value="<?php echo $q['id'];?>">
                        <button type="submit" id="t4" name="delete"style="float:right;">Delete</button>
                        </form>
       </div>
</body>
</html>